<?php

/* default/layout/hot_courses.tpl */
class __TwigTemplate_301f998367b27c1a316ad1dd7c19cfa657e43effcc850fa2d73ff156c3d39d48 extends Twig_Template
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
        if (( !(null === ($context["hot_courses"] ?? null)) &&  !twig_test_empty(($context["hot_courses"] ?? null)))) {
            // line 2
            echo "<section class=\"hot-courses\">
    <div class=\"page-header\">
        <h4>
            ";
            // line 5
            echo get_lang("HottestCourses");
            echo "
            ";
            // line 6
            if ($this->getAttribute(($context["_u"] ?? null), "is_admin", array())) {
                // line 7
                echo "            <span class=\"pull-right\">
                <a title=\"";
                // line 8
                echo get_lang("Hide");
                echo "\"
                   alt=\"";
                // line 9
                echo get_lang("Hide");
                echo "\"
                   href=\"";
                // line 10
                echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
                echo "admin/settings.php?search_field=show_hot_courses&submit_button=&_qf__search_settings=&category=search_setting\">
                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                </a>
            </span>
            ";
            }
            // line 15
            echo "        </h4>
    </div>
    <div id=\"list-hot-courses\" class=\"grid-courses\">
        <div class=\"row\">
            ";
            // line 19
            $this->loadTemplate(Template::findTemplateFilePath("layout/hot_course_item.tpl"), "default/layout/hot_courses.tpl", 19)->display($context);
            // line 20
            echo "        </div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/hot_courses.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  57 => 19,  51 => 15,  43 => 10,  39 => 9,  35 => 8,  32 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/hot_courses.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/layout/hot_courses.tpl");
    }
}
