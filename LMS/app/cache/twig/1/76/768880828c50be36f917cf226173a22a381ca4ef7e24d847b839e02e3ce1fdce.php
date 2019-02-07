<?php

/* default/session/sessions_current.tpl */
class __TwigTemplate_41a310f3ff50377147333eabd90f10eb5d73bebf4564c45b739f6cc2a1bfd01a extends Twig_Template
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
        if (($context["hot_sessions"] ?? null)) {
            // line 2
            echo "<section id=\"sessions-current\" class=\"grid-courses\">
    <div class=\"page-header\">
        <h4>
            ";
            // line 5
            echo get_lang("HottestSessions");
            echo "
        </h4>
    </div>
    <div class=\"row\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hot_sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 10
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"items items-hotcourse\">
                <div class=\"image\">
                    <a href=\"";
                // line 13
                echo $this->getAttribute(($context["_p"] ?? null), "web", array());
                echo "session/";
                echo $this->getAttribute($context["session"], "id", array());
                echo "/about/\" title=\"title-session\">
                        <img class=\"img-responsive\"  src=\"";
                // line 14
                echo (($this->getAttribute($context["session"], "image", array())) ? (($this->getAttribute(($context["_p"] ?? null), "web_upload", array()) . $this->getAttribute($context["session"], "image", array()))) : (Template::get_icon_path("session_default.png")));
                echo "\">
                    </a>
                    ";
                // line 16
                if ($this->getAttribute($context["session"], "category_name", array())) {
                    // line 17
                    echo "                    <span class=\"category\">";
                    echo $this->getAttribute($context["session"], "category_name", array());
                    echo "</span>
                    <div class=\"cribbon\"></div>
                    ";
                }
                // line 20
                echo "                </div>
                <div class=\"description\">
                    <div class=\"block-title\">
                        <h5 class=\"title\">
                            <a href=\"";
                // line 24
                echo $this->getAttribute(($context["_p"] ?? null), "web", array());
                echo "session/";
                echo $this->getAttribute($context["session"], "id", array());
                echo "/about/\"
                               title=\"title-session\">";
                // line 25
                echo $this->getAttribute($context["session"], "name", array());
                echo "</a>
                        </h5>
                    </div>
                    <div class=\"block-info\">
                        <i class=\"fa fa-user\"></i> ";
                // line 29
                echo $this->getAttribute($context["session"], "users", array());
                echo " ";
                echo get_lang("Users");
                echo "
                        <i class=\"fa fa-book\"></i> ";
                // line 30
                echo $this->getAttribute($context["session"], "lessons", array());
                echo " ";
                echo get_lang("Learnpaths");
                echo "
                    </div>
                    ";
                // line 32
                if ($this->getAttribute($context["session"], "on_sale", array(), "any", true, true)) {
                    // line 33
                    echo "                        ";
                    if (($this->getAttribute($context["session"], "on_sale", array()) != false)) {
                        // line 34
                        echo "                            <div class=\"toolbar\">
                                <div class=\"buycourses-price\">
                                    <span class=\"label label-primary label-price\">
                                        <strong>";
                        // line 37
                        echo $this->getAttribute($this->getAttribute($context["session"], "on_sale", array()), "iso_code", array());
                        echo " ";
                        echo $this->getAttribute($this->getAttribute($context["session"], "on_sale", array()), "price", array());
                        echo "</strong>
                                    </span>
                                </div>
                            </div>
                        ";
                    } else {
                        // line 42
                        echo "                            <div class=\"toolbar\">
                                <div class=\"buycourses-price\">
                                    <span class=\"label label-primary label-free\">
                                        <strong>";
                        // line 45
                        echo get_plugin_lang("Free", "BuyCoursesPlugin");
                        echo "</strong>
                                    </span>
                                </div>
                            </div>
                        ";
                    }
                    // line 50
                    echo "                    ";
                }
                // line 51
                echo "                </div>

            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/session/sessions_current.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  130 => 51,  127 => 50,  119 => 45,  114 => 42,  104 => 37,  99 => 34,  96 => 33,  94 => 32,  87 => 30,  81 => 29,  74 => 25,  68 => 24,  62 => 20,  55 => 17,  53 => 16,  48 => 14,  42 => 13,  37 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/session/sessions_current.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/session/sessions_current.tpl");
    }
}
