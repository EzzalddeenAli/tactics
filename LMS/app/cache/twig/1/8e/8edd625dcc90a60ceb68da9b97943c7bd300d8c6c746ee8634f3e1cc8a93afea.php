<?php

/* default/layout/page.tpl */
class __TwigTemplate_bab8c92ad3383e5bb246372169f0907908b6cd8332e8e1a9f967b142cadf798c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"";
        // line 6
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body>
    <!-- START MAIN -->
    <main id=\"main\" dir=\"";
        // line 14
        echo ($context["text_direction"] ?? null);
        echo "\" class=\"";
        echo ($context["section_name"] ?? null);
        echo " ";
        echo ($context["login_class"] ?? null);
        echo "\">
    <noscript>";
        // line 15
        echo get_lang("NoJavascript");
        echo "</noscript>
            ";
        // line 16
        if ( !(null === ($context["show_course_shortcut"] ?? null))) {
            // line 17
            echo "            <!-- TOOLS SHOW COURSE -->
            <div id=\"cm-tools\" class=\"nav-tools\">
                ";
            // line 19
            echo ($context["show_course_shortcut"] ?? null);
            echo "
            </div>
            <!-- END TOOLS SHOW COURSE -->
            ";
        }
        // line 23
        echo "            ";
        if ((($context["displayCookieUsageWarning"] ?? null) == true)) {
            // line 24
            echo "                <!-- START DISPLAY COOKIES VALIDATION -->
                <div class=\"toolbar-cookie alert-warning\">
                    <form onSubmit=\"\$(this).toggle('slow')\" action=\"\" method=\"post\">
                        <input value=1 type=\"hidden\" name=\"acceptCookies\"/>
                        <div class=\"cookieUsageValidation\">
                            ";
            // line 29
            echo get_lang("YouAcceptCookies");
            echo "
                            <span style=\"margin-left:20px;\" onclick=\"\$(this).next().toggle('slow'); \$(this).toggle('slow')\">
                                (";
            // line 31
            echo get_lang("More");
            echo ")
                            </span>
                            <div style=\"display:none; margin:20px 0;\">
                                ";
            // line 34
            echo get_lang("HelpCookieUsageValidation");
            echo "
                            </div>
                            <span style=\"margin-left:20px;\" onclick=\"\$(this).parent().parent().submit()\">
                                (";
            // line 37
            echo get_lang("Accept");
            echo ")
                            </span>
                        </div>
                    </form>
                </div>
                <!-- END DISPLAY COOKIES VALIDATION -->
            ";
        }
        // line 44
        echo "
            <!-- START HEADER -->
            <header id=\"cm-header\">
                ";
        // line 47
        if ((($context["show_header"] ?? null) == true)) {
            // line 48
            echo "                    ";
            $this->loadTemplate(Template::findTemplateFilePath("layout/page_header.tpl"), "default/layout/page.tpl", 48)->display($context);
            // line 49
            echo "                ";
        }
        // line 50
        echo "            </header>
            <!-- END HEADER -->

            <!-- START CONTENT -->
            <section id=\"cm-content\">
                <div class=\"container\">
                    ";
        // line 56
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 59
        echo "                    ";
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "                </div>
            </section>
            <!-- END CONTENT -->

            <!-- START FOOTER -->
            <footer class=\"footer\">
                ";
        // line 68
        if ((($context["show_footer"] ?? null) == true)) {
            // line 69
            echo "                    ";
            $this->loadTemplate(Template::findTemplateFilePath("layout/page_footer.tpl"), "default/layout/page.tpl", 69)->display($context);
            // line 70
            echo "                ";
        }
        // line 71
        echo "            </footer>
            <!-- END FOOTER -->

        </main>
    <!-- END MAIN -->
</body>
</html>";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate(Template::findTemplateFilePath("layout/head.tpl"), "default/layout/page.tpl", 9)->display($context);
    }

    // line 56
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 57
        echo "                        ";
        echo ($context["breadcrumb"] ?? null);
        echo "
                    ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "                        ";
        echo ($context["content"] ?? null);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "default/layout/page.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 60,  182 => 59,  175 => 57,  172 => 56,  167 => 9,  164 => 8,  154 => 71,  151 => 70,  148 => 69,  146 => 68,  138 => 62,  135 => 59,  133 => 56,  125 => 50,  122 => 49,  119 => 48,  117 => 47,  112 => 44,  102 => 37,  96 => 34,  90 => 31,  85 => 29,  78 => 24,  75 => 23,  68 => 19,  64 => 17,  62 => 16,  58 => 15,  50 => 14,  45 => 11,  43 => 8,  38 => 6,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/layout/page.tpl");
    }
}
