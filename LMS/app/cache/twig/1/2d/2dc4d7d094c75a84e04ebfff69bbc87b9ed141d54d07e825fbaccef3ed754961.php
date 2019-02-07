<?php

/* default/mail/footer.tpl */
class __TwigTemplate_fbfe695c79eeb8301bdf7e41db54a3bd59bd3b0040d8c59b624c424863dd6495 extends Twig_Template
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
        echo "<div class=\"footer\" style=\"clear: both; Margin-top: 10px; text-align: center; width: 100%;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\">
        <tr>
            <td class=\"content-block powered-by\" style=\"font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;\">
                <a style=\"color: #999999; font-size: 12px; text-align: center; text-decoration: none;\" href=\"";
        // line 5
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "\" target=\"_blank\">
                    ";
        // line 6
        echo sprintf(get_lang("PoweredByX"), $this->getAttribute(($context["_s"] ?? null), "software_name", array()));
        echo "
                </a>&copy; ";
        // line 7
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "
            </td>
        </tr>
    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "default/mail/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/mail/footer.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/mail/footer.tpl");
    }
}
