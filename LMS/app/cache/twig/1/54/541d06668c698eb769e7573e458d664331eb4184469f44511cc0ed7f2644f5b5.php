<?php

/* default/layout/layout_2_col.tpl */
class __TwigTemplate_0133ff915fd616b5cbbe0c3e3d9e2a54587146930a48640386932fddddce34dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'page_body' => array($this, 'block_page_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(Template::findTemplateFilePath("layout/page.tpl"), "default/layout/layout_2_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["display"] = $this->loadTemplate(Template::findTemplateFilePath("macro/macro.tpl"), "default/layout/layout_2_col.tpl", 2);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if (($context["plugin_main_top"] ?? null)) {
            // line 6
            echo "        ";
            echo $context["display"]->getpluginPanel("main-top", ($context["plugin_main_top"] ?? null));
            echo "
    ";
        }
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-9 col-md-push-3\">
            <div class=\"page-content\">
                ";
        // line 11
        if (($context["plugin_content_top"] ?? null)) {
            // line 12
            echo "                    <div class=\"page-content-top\">
                        ";
            // line 13
            echo ($context["plugin_content_top"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 16
        echo "
                ";
        // line 17
        echo ($context["sniff_notification"] ?? null);
        echo "

                ";
        // line 19
        if (($context["home_welcome"] ?? null)) {
            // line 20
            echo "                    <article id=\"home-welcome\">
                        ";
            // line 21
            echo ($context["home_welcome"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 24
        echo "
                ";
        // line 25
        if (($context["home_include"] ?? null)) {
            // line 26
            echo "                <article id=\"home-include\">
                    ";
            // line 27
            echo ($context["home_include"] ?? null);
            echo "
                </article>
                ";
        }
        // line 30
        echo "
                ";
        // line 31
        $this->displayBlock('page_body', $context, $blocks);
        // line 34
        echo "
                ";
        // line 35
        if (($context["welcome_to_course_block"] ?? null)) {
            // line 36
            echo "                    <article id=\"homepage-course\">
                        ";
            // line 37
            echo ($context["welcome_to_course_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 40
        echo "
                ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
                ";
        // line 49
        if (($context["announcements_block"] ?? null)) {
            // line 50
            echo "                    <article id=\"homepage-announcements\">
                        ";
            // line 51
            echo ($context["announcements_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 54
        echo "
                ";
        // line 55
        if (($context["course_category_block"] ?? null)) {
            // line 56
            echo "                    <article id=\"homepage-course-category\">
                        ";
            // line 57
            echo ($context["course_category_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 60
        echo "                ";
        $this->loadTemplate(Template::findTemplateFilePath("layout/hot_courses.tpl"), "default/layout/layout_2_col.tpl", 60)->display($context);
        // line 61
        echo "                ";
        $this->loadTemplate(Template::findTemplateFilePath("session/sessions_current.tpl"), "default/layout/layout_2_col.tpl", 61)->display($context);
        // line 62
        echo "                ";
        if (($context["plugin_content_bottom"] ?? null)) {
            // line 63
            echo "                    <div id=\"plugin_content_bottom\">
                        ";
            // line 64
            echo ($context["plugin_content_bottom"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 67
        echo "            </div>
        </div>
        <div class=\"col-md-3 col-md-pull-9\">
            <div class=\"sidebar\">
                ";
        // line 71
        if (($context["plugin_menu_top"] ?? null)) {
            // line 72
            echo "                    ";
            echo $context["display"]->getpluginSidebar("sidebar-top", ($context["plugin_menu_top"] ?? null));
            echo "
                ";
        }
        // line 74
        echo "
                ";
        // line 75
        $this->loadTemplate(Template::findTemplateFilePath("layout/login_form.tpl"), "default/layout/layout_2_col.tpl", 75)->display($context);
        // line 76
        echo "
                ";
        // line 77
        if (($this->getAttribute(($context["_u"] ?? null), "logged", array()) == 1)) {
            // line 78
            echo "                    ";
            echo ($context["user_image_block"] ?? null);
            echo "
                ";
        }
        // line 80
        echo "
                <!-- BLOCK PROFILE -->
                ";
        // line 82
        if (($context["profile_block"] ?? null)) {
            // line 83
            echo "                    ";
            echo $context["display"]->getcollapseMenu("profile", get_lang("Profile"), ($context["profile_block"] ?? null));
            echo "
                ";
        }
        // line 85
        echo "
                <!-- BLOCK COURSE -->
                ";
        // line 87
        if (($context["course_block"] ?? null)) {
            // line 88
            echo "                    ";
            echo $context["display"]->getcollapseMenu("courses", get_lang("Courses"), ($context["course_block"] ?? null));
            echo "
                ";
        }
        // line 90
        echo "
                <!-- BLOCK SKILLS -->
                ";
        // line 92
        if (($context["skills_block"] ?? null)) {
            // line 93
            echo "                    ";
            echo $context["display"]->getcollapseMenu("skills", get_lang("Skills"), ($context["skills_block"] ?? null));
            echo "
                ";
        }
        // line 95
        echo "
                ";
        // line 96
        if (($context["grade_book_sidebar"] ?? null)) {
            // line 97
            echo "                    <div class=\"panel-group\" id=\"skill\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\" id=\"gradebook_block\">
                        <div class=\"panel-heading\" role=\"tab\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#skill\"
                                   href=\"#skillCollapse\"
                                   aria-expanded=\"true\"
                                   aria-controls=\"skillCollapse\">
                                    ";
            // line 106
            echo get_lang("Gradebook");
            echo "
                                </a>
                            </h4>
                        </div>
                        <div style=\"\" aria-expanded=\"true\" id=\"skillCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                            <div class=\"panel-body\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item ";
            // line 113
            echo $this->getAttribute(($context["item"] ?? null), "class", array());
            echo "\">
                                        ";
            // line 114
            echo get_lang("Progress");
            echo " : ";
            echo ($context["grade_book_progress"] ?? null);
            echo " %
                                        <br />
                                        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["grade_book_badge_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 117
                echo "                                            <div class=\"badge_sidebar\">
                                            ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["badge"], "skills", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                    // line 119
                    echo "                                                ";
                    if ($this->getAttribute($context["badge"], "finished", array())) {
                        // line 120
                        echo "                                                    <img class=\"badge_sidebar_image \" src =\"";
                        echo $this->getAttribute($context["skill"], "icon_big", array());
                        echo "\" />
                                                ";
                    } else {
                        // line 122
                        echo "                                                    <img class=\"badge_sidebar_image badge_sidebar_image_transparency\"
                                                         src = \"";
                        // line 123
                        echo $this->getAttribute($context["skill"], "icon_big", array());
                        echo "\" />
                                                ";
                    }
                    // line 125
                    echo "                                                <div class=\"badge_sidebar_title\">
                                                ";
                    // line 126
                    echo $this->getAttribute($context["skill"], "name", array());
                    echo "
                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 138
        echo "                ";
        echo ($context["certificates_search_block"] ?? null);
        echo "
                <!-- BLOCK NOTICE -->
                ";
        // line 140
        if (($context["notice_block"] ?? null)) {
            // line 141
            echo "                    ";
            echo $context["display"]->getcollapse("notice", get_lang("Notice"), ($context["notice_block"] ?? null));
            echo "
                ";
        }
        // line 143
        echo "                <!-- BLOCK HELP -->
                ";
        // line 144
        if (($context["help_block"] ?? null)) {
            // line 145
            echo "                    ";
            echo $context["display"]->getcollapse("help", get_lang("MenuGeneral"), ($context["help_block"] ?? null), true);
            echo "
                ";
        }
        // line 147
        echo "                <!-- BLOCK LINKS NAVIGATION -->
                ";
        // line 148
        if (($context["navigation_links"] ?? null)) {
            // line 149
            echo "                    ";
            echo $context["display"]->getcollapseFor("navigation_sidebar", get_lang("MainNavigation"), ($context["navigation_links"] ?? null));
            echo "
                ";
        }
        // line 151
        echo "                ";
        echo ($context["search_block"] ?? null);
        echo "
                ";
        // line 152
        echo ($context["classes_block"] ?? null);
        echo "

                ";
        // line 154
        if (($context["plugin_menu_bottom"] ?? null)) {
            // line 155
            echo "                    ";
            echo $context["display"]->getpluginSidebar("sidebar-bottom", ($context["plugin_menu_bottom"] ?? null));
            echo "
                ";
        }
        // line 157
        echo "            </div>
        </div>
    </div>
    ";
        // line 160
        if (($context["plugin_main_bottom"] ?? null)) {
            // line 161
            echo "        ";
            echo $context["display"]->getpluginPanel("main-bottom", ($context["plugin_main_bottom"] ?? null));
            echo "
    ";
        }
    }

    // line 31
    public function block_page_body($context, array $blocks = array())
    {
        // line 32
        echo "                    ";
        $this->loadTemplate(Template::findTemplateFilePath("layout/page_body.tpl"), "default/layout/layout_2_col.tpl", 32)->display($context);
        // line 33
        echo "                ";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "                    ";
        if ( !(null === ($context["content"] ?? null))) {
            // line 43
            echo "                        <section id=\"page\" class=\"";
            echo ($context["course_history_page"] ?? null);
            echo "\">
                            ";
            // line 44
            echo ($context["content"] ?? null);
            echo "
                        </section>
                    ";
        }
        // line 47
        echo "                ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 47,  412 => 44,  407 => 43,  404 => 42,  401 => 41,  397 => 33,  394 => 32,  391 => 31,  383 => 161,  381 => 160,  376 => 157,  370 => 155,  368 => 154,  363 => 152,  358 => 151,  352 => 149,  350 => 148,  347 => 147,  341 => 145,  339 => 144,  336 => 143,  330 => 141,  328 => 140,  322 => 138,  313 => 131,  306 => 129,  297 => 126,  294 => 125,  289 => 123,  286 => 122,  280 => 120,  277 => 119,  273 => 118,  270 => 117,  266 => 116,  259 => 114,  255 => 113,  245 => 106,  234 => 97,  232 => 96,  229 => 95,  223 => 93,  221 => 92,  217 => 90,  211 => 88,  209 => 87,  205 => 85,  199 => 83,  197 => 82,  193 => 80,  187 => 78,  185 => 77,  182 => 76,  180 => 75,  177 => 74,  171 => 72,  169 => 71,  163 => 67,  157 => 64,  154 => 63,  151 => 62,  148 => 61,  145 => 60,  139 => 57,  136 => 56,  134 => 55,  131 => 54,  125 => 51,  122 => 50,  120 => 49,  117 => 48,  115 => 41,  112 => 40,  106 => 37,  103 => 36,  101 => 35,  98 => 34,  96 => 31,  93 => 30,  87 => 27,  84 => 26,  82 => 25,  79 => 24,  73 => 21,  70 => 20,  68 => 19,  63 => 17,  60 => 16,  54 => 13,  51 => 12,  49 => 11,  44 => 8,  38 => 6,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/layout_2_col.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/layout/layout_2_col.tpl");
    }
}
