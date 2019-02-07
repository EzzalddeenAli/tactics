<?php

/* default/mail/content_registration_platform.tpl */
class __TwigTemplate_37cb824fab3a5ba1b32aab795fd9cfa4f57f1721718ff9bf8d593ffa912658e8 extends Twig_Template
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
        echo "<p>";
        echo get_lang("Dear");
        echo " ";
        echo ($context["complete_name"] ?? null);
        echo ",</p>
<p>";
        // line 2
        echo get_lang("YouAreReg");
        echo " ";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", array());
        echo " ";
        echo get_lang("WithTheFollowingSettings");
        echo "</p>
<p>";
        // line 3
        echo get_lang("Username");
        echo " : ";
        echo ($context["login_name"] ?? null);
        echo "<br>
    ";
        // line 4
        echo get_lang("Pass");
        echo " : ";
        echo ($context["original_password"] ?? null);
        echo "</p>
<p>";
        // line 5
        echo sprintf(get_lang("ThanksForRegisteringToSite"), $this->getAttribute(($context["_s"] ?? null), "site_name", array()));
        echo "</p>
<p>";
        // line 6
        echo get_lang("Address");
        echo " ";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", array());
        echo " ";
        echo get_lang("Is");
        echo " : ";
        echo ($context["mailWebPath"] ?? null);
        echo "</p>
<p>";
        // line 7
        echo get_lang("Problem");
        echo "</p>
<p>";
        // line 8
        echo get_lang("SignatureFormula");
        echo "</p>
<p>";
        // line 9
        echo $this->getAttribute(($context["_admin"] ?? null), "name", array());
        echo ", ";
        echo $this->getAttribute(($context["_admin"] ?? null), "surname", array());
        echo "<br>
    ";
        // line 10
        echo get_lang("Manager");
        echo " ";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", array());
        echo "<br>
    ";
        // line 11
        echo (($this->getAttribute(($context["_admin"] ?? null), "telephone", array())) ? (("T. " . $this->getAttribute(($context["_admin"] ?? null), "telephone", array()))) : (""));
        echo "<br>
    ";
        // line 12
        echo (($this->getAttribute(($context["_admin"] ?? null), "email", array())) ? (((get_lang("Email") . ": ") . $this->getAttribute(($context["_admin"] ?? null), "email", array()))) : (""));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "default/mail/content_registration_platform.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  80 => 11,  74 => 10,  68 => 9,  64 => 8,  60 => 7,  50 => 6,  46 => 5,  40 => 4,  34 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/mail/content_registration_platform.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/mail/content_registration_platform.tpl");
    }
}
