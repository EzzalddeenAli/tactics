<?php

/* default/user_portal/classic_session.tpl */
class __TwigTemplate_66ffeb96a2b1253e969556b7e88806f2455475d0be49061e0537da4501ba966d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["session_image"] = Template::get_image("window_list.png", 32, $this->getAttribute(($context["row"] ?? null), "title", array()));
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["session"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 4
            echo "    <div class=\"panel panel-default\">
        ";
            // line 5
            if ( !$this->getAttribute($context["row"], "show_simple_session_info", array())) {
                // line 6
                echo "            ";
                $context["collapsable"] = "";
                // line 7
                echo "            ";
                if ($this->getAttribute($context["row"], "course_list_session_style", array())) {
                    echo " ";
                    // line 8
                    echo "                <div class=\"panel-heading\">
                    ";
                    // line 9
                    if ((($this->getAttribute($context["row"], "course_list_session_style", array()) == 1) || ($this->getAttribute($context["row"], "course_list_session_style", array()) == 2))) {
                        echo " ";
                        // line 10
                        echo "                        ";
                        if ((($context["remove_session_url"] ?? null) == true)) {
                            // line 11
                            echo "                            ";
                            echo ($context["session_image"] ?? null);
                            echo " ";
                            echo $this->getAttribute($context["row"], "title", array());
                            echo "
                        ";
                        } else {
                            // line 13
                            echo "                            ";
                            // line 14
                            echo "                            ";
                            $context["session_link"] = (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", array()));
                            // line 15
                            echo "
                            ";
                            // line 16
                            if ((($this->getAttribute($context["row"], "course_list_session_style", array()) == 2) && (twig_length_filter($this->env, $this->getAttribute($context["row"], "courses", array())) == 1))) {
                                // line 17
                                echo "                                ";
                                // line 18
                                echo "                                ";
                                $context["session_link"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "courses", array()), 0, array()), "link", array());
                                // line 19
                                echo "                            ";
                            }
                            // line 20
                            echo "
                            <a href=\"";
                            // line 21
                            echo ($context["session_link"] ?? null);
                            echo "\">
                                ";
                            // line 22
                            echo ($context["session_image"] ?? null);
                            echo " ";
                            echo $this->getAttribute($context["row"], "title", array());
                            echo "
                            </a>
                        ";
                        }
                        // line 25
                        echo "                    ";
                    } elseif (($this->getAttribute($context["row"], "course_list_session_style", array()) == 3)) {
                        echo " ";
                        // line 26
                        echo "                        ";
                        // line 27
                        echo "                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#page-content\" href=\"#collapse_";
                        echo $this->getAttribute($context["row"], "id", array());
                        echo "\"
                           aria-expanded=\"false\">
                            ";
                        // line 29
                        echo ($context["session_image"] ?? null);
                        echo " ";
                        echo $this->getAttribute($context["row"], "title", array());
                        echo "
                        </a>
                        ";
                        // line 31
                        $context["collapsable"] = "collapse";
                        // line 32
                        echo "                    ";
                    }
                    // line 33
                    echo "                    ";
                    if ($this->getAttribute($context["row"], "show_actions", array())) {
                        // line 34
                        echo "                        <div class=\"pull-right\">
                            <a href=\"";
                        // line 35
                        echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/resume_session.php?id_session=") . $this->getAttribute($context["row"], "id", array()));
                        echo "\">
                                <img src=\"";
                        // line 36
                        echo Template::get_icon_path("edit.png", 22);
                        echo "\" width=\"22\" height=\"22\" alt=\"";
                        echo get_lang("Edit");
                        echo "\"
                                     title=\"";
                        // line 37
                        echo get_lang("Edit");
                        echo "\">
                            </a>
                        </div>
                    ";
                    }
                    // line 41
                    echo "                </div>
            ";
                }
                // line 43
                echo "            <div class=\"session panel-body ";
                echo ($context["collapsable"] ?? null);
                echo "\" id=\"collapse_";
                echo $this->getAttribute($context["row"], "id", array());
                echo "\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
                // line 46
                if ($this->getAttribute($context["row"], "show_description", array())) {
                    // line 47
                    echo "                            ";
                    echo $this->getAttribute($context["row"], "description", array());
                    echo "
                        ";
                }
                // line 49
                echo "                        <ul class=\"info-session list-inline\">
                            ";
                // line 50
                if ($this->getAttribute($context["row"], "coach_name", array())) {
                    // line 51
                    echo "                                <li>
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    ";
                    // line 53
                    echo $this->getAttribute($context["row"], "coach_name", array());
                    echo "
                                </li>
                            ";
                }
                // line 56
                echo "
                            ";
                // line 57
                if ($this->getAttribute($context["row"], "date", array())) {
                    // line 58
                    echo "                                <li>
                                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                    ";
                    // line 60
                    echo $this->getAttribute($context["row"], "date", array());
                    echo "
                                </li>
                            ";
                } elseif ($this->getAttribute(                // line 62
$context["row"], "duration", array())) {
                    // line 63
                    echo "                                <li>
                                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                    ";
                    // line 65
                    echo $this->getAttribute($context["row"], "duration", array());
                    echo "
                                </li>
                            ";
                }
                // line 68
                echo "                        </ul>
                        <div class=\"sessions-items\">
                        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "courses", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 71
                    echo "                            <div class=\"courses\">
                                <div class=\"row\">
                                    <div class=\"col-md-2\">
                                        <a href=\"";
                    // line 74
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "\" class=\"thumbnail\">
                                            <img class=\"img-responsive\"
                                                 src=\"";
                    // line 76
                    echo (($this->getAttribute($context["item"], "thumbnails", array())) ? ($this->getAttribute($context["item"], "thumbnails", array())) : ($this->getAttribute($context["item"], "icon", array())));
                    echo "\">
                                        </a>
                                    </div>
                                    <div class=\"col-md-10\">
                                        <h4>";
                    // line 80
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h4>
                                        <div class=\"list-teachers\">
                                            ";
                    // line 82
                    if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "coaches", array())) > 0)) {
                        // line 83
                        echo "                                                <img src=\"";
                        echo Template::get_icon_path("teacher.png", 16);
                        echo "\" width=\"16\" height=\"16\">
                                                ";
                        // line 84
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "coaches", array()));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                            // line 85
                            echo "                                                    ";
                            echo ((($this->getAttribute($context["loop"], "index", array()) > 1)) ? (" | ") : (""));
                            echo "
                                                    <a href=\"";
                            // line 86
                            echo (($this->getAttribute(($context["_p"] ?? null), "web_ajax", array()) . "user_manager.ajax.php?") . twig_urlencode_filter(array("a" => "get_user_popup", "user_id" => $this->getAttribute($context["coach"], "user_id", array()), "session_id" => $this->getAttribute($context["row"], "id", array()), "course_id" => $this->getAttribute($context["item"], "real_id", array()))));
                            echo "\"
                                                       data-title=\"";
                            // line 87
                            echo $this->getAttribute($context["coach"], "full_name", array());
                            echo "\" class=\"ajax\">
                                                        ";
                            // line 88
                            echo $this->getAttribute($context["coach"], "firstname", array());
                            echo ", ";
                            echo $this->getAttribute($context["coach"], "lastname", array());
                            echo "
                                                    </a>
                                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        echo "                                            ";
                    }
                    // line 92
                    echo "                                        </div>
                                    </div>

                                    ";
                    // line 95
                    if ($this->getAttribute($context["item"], "student_info", array())) {
                        // line 96
                        echo "                                        ";
                        if (( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array())) &&  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array())))) {
                            // line 97
                            echo "                                            <div class=\"course-student-info\">
                                                <div class=\"student-info\">
                                                    ";
                            // line 99
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()))) {
                                // line 100
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseProgressX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()));
                                echo "
                                                    ";
                            }
                            // line 102
                            echo "
                                                    ";
                            // line 103
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()))) {
                                // line 104
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseScoreX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()));
                                echo "
                                                    ";
                            }
                            // line 106
                            echo "
                                                    ";
                            // line 107
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()))) {
                                // line 108
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()));
                                echo "
                                                    ";
                            }
                            // line 110
                            echo "                                                </div>
                                            </div>
                                        ";
                        }
                        // line 113
                        echo "                                    ";
                    }
                    // line 114
                    echo "                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 122
                echo "            <div class=\"panel-heading\">
                <a href=\"";
                // line 123
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", array()));
                echo "\">
                    <img id=\"session_img_";
                // line 124
                echo $this->getAttribute($context["row"], "id", array());
                echo "\" src=\"";
                echo Template::get_icon_path("window_list.png", 32);
                echo "\" alt=\"";
                echo $this->getAttribute($context["row"], "title", array());
                echo "\"
                         title=\"";
                // line 125
                echo $this->getAttribute($context["row"], "title", array());
                echo "\">
                    ";
                // line 126
                echo $this->getAttribute($context["row"], "title", array());
                echo "
                </a>
            </div>
            <!-- view simple info -->
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <a class=\"thumbnail\" href=\"";
                // line 133
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", array()));
                echo "\">
                            <img class=\"img-responsive\"
                                 src=\"";
                // line 135
                echo (($this->getAttribute($context["row"], "image", array())) ? (($this->getAttribute(($context["_p"] ?? null), "web_upload", array()) . $this->getAttribute($context["row"], "image", array()))) : (Template::get_icon_path("session_default.png")));
                echo "\"
                                 alt=\"";
                // line 136
                echo $this->getAttribute($context["row"], "title", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["row"], "title", array());
                echo "\">
                        </a>
                    </div>
                    <div class=\"col-md-10\">
                        <div class=\"info-session\">
                            <p>";
                // line 141
                echo $this->getAttribute($context["row"], "subtitle", array());
                echo "</p>
                            ";
                // line 142
                if ($this->getAttribute($context["row"], "show_description", array())) {
                    // line 143
                    echo "                                <div class=\"description\">
                                    ";
                    // line 144
                    echo $this->getAttribute($context["row"], "description", array());
                    echo "
                                </div>
                            ";
                }
                // line 147
                echo "                        </div>
                    </div>
                </div>
            </div>
            <!-- end view simple info -->
        ";
            }
            // line 153
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/user_portal/classic_session.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 153,  418 => 147,  412 => 144,  409 => 143,  407 => 142,  403 => 141,  393 => 136,  389 => 135,  384 => 133,  374 => 126,  370 => 125,  362 => 124,  358 => 123,  355 => 122,  348 => 117,  340 => 114,  337 => 113,  332 => 110,  326 => 108,  324 => 107,  321 => 106,  315 => 104,  313 => 103,  310 => 102,  304 => 100,  302 => 99,  298 => 97,  295 => 96,  293 => 95,  288 => 92,  285 => 91,  266 => 88,  262 => 87,  258 => 86,  253 => 85,  236 => 84,  231 => 83,  229 => 82,  224 => 80,  217 => 76,  212 => 74,  207 => 71,  203 => 70,  199 => 68,  193 => 65,  189 => 63,  187 => 62,  182 => 60,  178 => 58,  176 => 57,  173 => 56,  167 => 53,  163 => 51,  161 => 50,  158 => 49,  152 => 47,  150 => 46,  141 => 43,  137 => 41,  130 => 37,  124 => 36,  120 => 35,  117 => 34,  114 => 33,  111 => 32,  109 => 31,  102 => 29,  96 => 27,  94 => 26,  90 => 25,  82 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  67 => 17,  65 => 16,  62 => 15,  59 => 14,  57 => 13,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  36 => 7,  33 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/user_portal/classic_session.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/user_portal/classic_session.tpl");
    }
}
