<?php

/* default/mail/subject_registration_platform.tpl */
class __TwigTemplate_2b4ad30a1b4d71f2e2592674cb09a4ea69f2e32940c0dc4042c5539879f0bf53 extends Twig_Template
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
        echo ((((("[" . $this->getAttribute(($context["_s"] ?? null), "site_name", array())) . "] ") . get_lang("YourReg")) . " ") . $this->getAttribute(($context["_s"] ?? null), "site_name", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/mail/subject_registration_platform.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/mail/subject_registration_platform.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/mail/subject_registration_platform.tpl");
    }
}
