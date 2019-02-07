<?php

/* default/mail/header.tpl */
class __TwigTemplate_e70a996d3b56ba4aa260b0a4887691e877f42dbef047e6eb4ce161b5b7f81a41 extends Twig_Template
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
        echo "<div id=\"logo-header\" ";
        echo ($context["mail_header_style"] ?? null);
        echo ">
    <div style=\"margin-bottom: 20px; margin-top: 10px;\">
        ";
        // line 3
        echo ($context["logo"] ?? null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/mail/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/mail/header.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/mail/header.tpl");
    }
}
