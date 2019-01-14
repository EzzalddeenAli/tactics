<?php
namespace App\Http\Controllers;

class incomesController extends Controller {

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
		if($this->data['users']->role != "admin" AND $this->data['users']->role != "account") exit;

		if(!$this->panelInit->hasThePerm('accounting')){
			exit;
		}
	}

	public function listAll($page = 1)
	{
		$toReturn = array();

		$toReturn['incomes'] = new \income();

		$toReturn['totalItems'] = $toReturn['incomes']->count();
		$toReturn['incomes'] = $toReturn['incomes']->orderBy('id','DESC')->take('20')->skip(20* ($page - 1) )->get()->toArray();

		foreach($toReturn['incomes'] as $key => $value){
			$toReturn['incomes'][$key]['incomeDate'] = $this->panelInit->unix_to_date($toReturn['incomes'][$key]['incomeDate']);
		}

		$income_cat = \income_cat::select('id','cat_title')->get()->toArray();
		foreach($income_cat as $key => $value){
			$toReturn['income_cat'][$value['id']] = $value['cat_title'];
		}

		return $toReturn;
	}

	public function delete($id){
		if ( $postDelete = \income::where('id', $id)->first() )
        {
            $postDelete->delete();
            return $this->panelInit->apiOutput(true,"Delete Income","Income added successfully");
        }else{
            return $this->panelInit->apiOutput(false,"Delete Income","Income not exist");
        }
	}

	public function create(){
		$income = new \income();
		$income->incomeDate = $this->panelInit->date_to_unix(\Input::get('incomeDate'));
		$income->incomeTitle = \Input::get('incomeTitle');
		$income->incomeAmount = \Input::get('incomeAmount');
		$income->incomeCategory = \Input::get('incomeCategory');
		if(\Input::has('incomeNotes')){
			$income->incomeNotes = \Input::get('incomeNotes');
		}
		$income->save();

		if (\Input::hasFile('incomeImage')) {
			$fileInstance = \Input::file('incomeImage');
			$newFileName = uniqid().".".$fileInstance->getClientOriginalExtension();
			$fileInstance->move('uploads/income/',$newFileName);

			$income->incomeImage = $newFileName;
			$income->save();
		}

		$income->incomeDate = \Input::get('incomeDate');

		return $this->panelInit->apiOutput(true,"Create Income","Income created successully",$income->toArray() );
	}

	function fetch($id){
		$income = \income::where('id',$id)->first();
		$income->incomeDate = $this->panelInit->unix_to_date($income->incomeDate);

		return $income;
	}

	public function download($id){
		$toReturn = \income::where('id',$id)->first();
		if(file_exists('uploads/income/'.$toReturn->bookFile)){
			$fileName = preg_replace('/[^a-zA-Z0-9-_\.]/','-',$toReturn->incomeTitle). "." .pathinfo($toReturn->incomeImage, PATHINFO_EXTENSION);
			header("Content-Type: application/force-download");
			header("Content-Disposition: attachment; filename=" . $fileName);
			echo file_get_contents('uploads/income/'.$toReturn->incomeImage);
		}else{
			echo "<br/><br/><br/><br/><br/><center>File not exist, Please contact site administrator to reupload it again.</center>";
		}
		exit;
	}

	function edit($id){
		$income = \income::find($id);
		$income->incomeDate = $this->panelInit->date_to_unix(\Input::get('incomeDate'));
		$income->incomeTitle = \Input::get('incomeTitle');
		$income->incomeAmount = \Input::get('incomeAmount');
		$income->incomeCategory = \Input::get('incomeCategory');
		if(\Input::has('incomeNotes')){
			$income->incomeNotes = \Input::get('incomeNotes');
		}

		if (\Input::hasFile('incomeImage')) {
			$fileInstance = \Input::file('incomeImage');
			$newFileName = uniqid().".".$fileInstance->getClientOriginalExtension();
			$fileInstance->move('uploads/income/',$newFileName);

			$income->incomeImage = $newFileName;
			$income->save();
		}

		$income->save();

		$income->incomeDate = \Input::get('incomeDate');

		return $this->panelInit->apiOutput(true,"Edit Income","Income modified successully",$income->toArray() );
	}
}
