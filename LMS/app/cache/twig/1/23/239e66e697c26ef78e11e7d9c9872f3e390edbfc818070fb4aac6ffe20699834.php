<?php

/* default/layout/page_body.tpl */
class __TwigTemplate_5e5ddc2833e9d3f46b8df5545143717d8816828ad71c3ef0d01445918fc62395 extends Twig_Template
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
        if ((($context["introduction"] ?? null) != "")) {
            // line 2
            echo "    ";
            echo ($context["introduction"] ?? null);
            echo "
";
        }
        // line 4
        echo "
";
        // line 5
        if ((($context["actions"] ?? null) != "")) {
            // line 6
            echo "    ";
            echo ($context["actions"] ?? null);
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        echo ($context["flash_messages"] ?? null);
        echo "
";
        // line 10
        if ((($context["header"] ?? null) != "")) {
            // line 11
            echo "    <div class=\"section-page\">
        <div class=\"page-header\">
            <h3>";
            // line 13
            echo ($context["header"] ?? null);
            echo "</h3>
        </div>
    </div>
";
        }
        // line 17
        if ((($context["category"] ?? null) != "")) {
            // line 18
            echo "<div class=\"section-category\">
    <div class=\"page-header\">
        <h3>";
            // line 20
            echo $this->getAttribute(($context["category"] ?? null), "name", array());
            echo "</h3>
    </div>
    <div class=\"description\">
        ";
            // line 23
            echo $this->getAttribute(($context["category"] ?? null), "description", array());
            echo "
    </div>
</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if ((($context["message"] ?? null) != "")) {
            // line 29
            echo "    <section id=\"messages\">
        ";
            // line 30
            echo ($context["message"] ?? null);
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/page_body.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  80 => 28,  77 => 27,  70 => 23,  64 => 20,  60 => 18,  58 => 17,  51 => 13,  47 => 11,  45 => 10,  41 => 9,  38 => 8,  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_body.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/layout/page_body.tpl");
    }
}
