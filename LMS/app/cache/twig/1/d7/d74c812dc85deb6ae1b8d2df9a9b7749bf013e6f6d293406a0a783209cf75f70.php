<?php

/* /studentfollowup/view/my_students.html.twig */
class __TwigTemplate_7a94f7c5ae5a684a0d323916973ecd75c5d3dfa6a874e6521ebdd93bc140a886 extends Twig_Template
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
        echo "<h2>";
        echo get_lang("Students");
        echo "</h2>
";
        // line 2
        echo ($context["form"] ?? null);
        echo "
";
        // line 3
        if (($context["users"] ?? null)) {
            // line 4
            echo "    <table class=\"data_table\">
    <tr>
        <th>Student</th>
        <th>Action</th>
    </tr>
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 10
                echo "        <tr>
            <td>";
                // line 11
                echo $this->getAttribute($this->getAttribute($context["user"], "user", array()), "completeNameWithUsername", array());
                echo "</td>
            <td>
                <a href=\"";
                // line 13
                echo ($context["my_students_url"] ?? null);
                echo "student=";
                echo $this->getAttribute($this->getAttribute($context["user"], "user", array()), "id", array());
                echo "\">
                    <img src=\"";
                // line 14
                echo Template::get_icon_path("2rightarrow.png");
                echo "\">
                </a>
                <a href=\"";
                // line 16
                echo ($context["post_url"] ?? null);
                echo "student_id=";
                echo $this->getAttribute($this->getAttribute($context["user"], "user", array()), "id", array());
                echo "\">
                    <img src=\"";
                // line 17
                echo Template::get_icon_path("blog.png");
                echo "\">
                </a>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </table>
    <div>
    ";
            // line 24
            echo ($context["pagination"] ?? null);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/studentfollowup/view/my_students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  77 => 22,  66 => 17,  60 => 16,  55 => 14,  49 => 13,  44 => 11,  41 => 10,  37 => 9,  30 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/studentfollowup/view/my_students.html.twig", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/plugin/studentfollowup/view/my_students.html.twig");
    }
}
