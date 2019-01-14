<?php
namespace App\Http\Controllers;

class SAttendanceController extends Controller {

	var $data = array();
	var $panelInit ;
	var $layout = 'dashboard';

	public function __construct(){
		if(app('request')->header('Authorization') != ""){
			$this->middleware('jwt.auth');
		}else{
			$this->middleware('authApplication');
		}

		$this->panelInit = new \DashboardInit();
		$this->data['panelInit'] = $this->panelInit;
		$this->data['breadcrumb']['Settings'] = \URL::to('/dashboard/languages');
		$this->data['users'] = $this->panelInit->getAuthUser();
		if(!isset($this->data['users']->id)){
			return \Redirect::to('/');
		}

		if(!$this->panelInit->hasThePerm('staffAttendance')){
			exit;
		}
	}

	public function listAttendance(){
		if($this->data['users']->role != "admin") exit;

		$toReturn = array();
		$toReturn['teachers'] = array();
		$studentArray = \User::where('role','teacher');

		if($this->data['panelInit']->settingsArray['teachersSort'] != ""){
			$studentArray = $studentArray->orderByRaw($this->data['panelInit']->settingsArray['teachersSort']);
		}

		$studentArray = $studentArray->get();

		$attendanceList = array();
		$vacationList = array();


		$attendanceArray = \attendance::where('date',$this->panelInit->date_to_unix(\Input::get('attendanceDay')))->get();
		foreach ($attendanceArray as $sAttendance) {
			$attendanceList[$sAttendance->studentId] = $sAttendance->status;
		}

		$vacationArray = \vacation::where('vacDate',$this->panelInit->date_to_unix(\Input::get('attendanceDay')))->where('acYear',$this->panelInit->selectAcYear)->where('role','teacher')->get();
		foreach ($vacationArray as $vacation) {
			$vacationList[$vacation->userid] = $vacation->acceptedVacation;
		}

		$i = 0;
		foreach ($studentArray as $stOne) {
			$toReturn['teachers'][] = array('name'=>$stOne->fullName,'id'=>$stOne->id,'attendance'=>'');

			if(isset($attendanceList[$stOne->id])){
				$toReturn['teachers'][$i]['attendance'] = $attendanceList[$stOne->id];
			}

			if(isset($vacationList[$stOne->id])){
				$toReturn['teachers'][$i]['vacation'] = true;
				$toReturn['teachers'][$i]['vacationStat'] = $vacationList[$stOne->id];
			}

			$i ++;
		}

		return json_encode($toReturn);
	}

	public function saveAttendance(){
		if($this->data['users']->role != "admin") exit;
		$attendanceList = array();
		$attendanceArray = \attendance::where('date',$this->panelInit->date_to_unix(\Input::get('attendanceDay')))->get();
		foreach ($attendanceArray as $stAttendance) {
			$attendanceList[$stAttendance->studentId] = $stAttendance->status;
		}

		$vacationArray = array();
		$vacationList = \vacation::where('vacDate',$this->panelInit->date_to_unix(\Input::get('attendanceDay')))->where('acYear',$this->panelInit->selectAcYear)->where('role','teacher')->get();
		foreach ($vacationList as $vacation) {
			$vacationArray[$vacation->userid] = $vacation->id;
		}

		$teachers_list = array();
		$attendance_list = array();
		$stAttendance = \Input::get('stAttendance');
		foreach($stAttendance as $key => $value){
			if(isset($vacationArray[$value['id']])){
				$vacationEdit = \vacation::where('id',$vacationArray[$value['id']])->first();
				$vacationEdit->acceptedVacation = $value['vacationStat'];
				$vacationEdit->save();
				if($value['vacationStat'] == 1){
					$value['attendance'] = "9";
				}
			}
			if(isset($value['attendance']) AND strlen($value['attendance']) > 0){
				$teachers_list[] = $value['id'];
				$attendance_list[$value['id']] = $value['attendance'];
				if(!isset($attendanceList[$value['id']])){
					$attendanceN = new \attendance();
					$attendanceN->classId = 0;
					$attendanceN->date = $this->panelInit->date_to_unix(\Input::get('attendanceDay'));
					$attendanceN->studentId = $value['id'];
					$attendanceN->status = $value['attendance'];
					$attendanceN->subjectId = 0;
					$attendanceN->save();
				}else{
					if($attendanceList[$value['id']] != $value['attendance']){
						$attendanceN = \attendance::where('studentId',$value['id'])->where('date',$this->panelInit->date_to_unix(\Input::get('attendanceDay')))->first();
						$attendanceN->status = $value['attendance'];
						$attendanceN->subjectId = 0;
						$attendanceN->save();
					}
				}
			}
		}

		//Send Push Notifications
		$tokens_list = array();
		$user_list = \User::where('role','teacher')->whereIn('id',$teachers_list)->select('id','firebase_token')->get();
		
		foreach ($user_list as $value) {
			if($value['firebase_token'] != ""){
				$tokens_list[ $value['id'] ] = $value['firebase_token'];				
			}
		}

		$absentStatus = array();
		$absentStatus[0] = $this->panelInit->language['Absent'];
		$absentStatus[1] = $this->panelInit->language['Present'];
		$absentStatus[2] = $this->panelInit->language['Late'];
		$absentStatus[3] = $this->panelInit->language['LateExecuse'];

		if(count($tokens_list) > 0){
			foreach ($tokens_list as $key => $value) {
				if(isset($absentStatus[ $attendance_list[$key] ])){
					$this->panelInit->send_push_notification($value,$this->panelInit->language['yrAttIs']." : ".$absentStatus[ $attendance_list[$key] ]." - ".$this->panelInit->language['Date']." :".\Input::get('attendanceDay'),$this->panelInit->language['staffAttendance']);					
				}
			}
		}

		return $this->panelInit->apiOutput(true,"Attendance",$this->panelInit->language['attendanceSaved'] );
	}

}
