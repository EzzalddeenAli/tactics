<?php

/* default/macro/macro.tpl */
class __TwigTemplate_6a0ce73665f6b322271c773ee7c2789d3e5ba0fe8fca87938522d6cf3de26ef3 extends Twig_Template
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
        // line 2
        echo "
";
        // line 27
        echo "
";
        // line 52
        echo "
";
        // line 78
        echo "
";
        // line 84
        echo "
";
        // line 94
        echo "

";
    }

    // line 3
    public function getcollapse($__name__ = null, $__title__ = null, $__content__ = null, $__list__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "content" => $__content__,
            "list" => $__list__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    <div class=\"panel-group\" id=\"";
            echo ($context["name"] ?? null);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">
        <div class=\"panel panel-default\" id=\"";
            // line 5
            echo ($context["name"] ?? null);
            echo "_block\">
            <div class=\"panel-heading\" role=\"tab\">
                <h4 class=\"panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#";
            // line 8
            echo ($context["name"] ?? null);
            echo "\" href=\"#";
            echo ($context["name"] ?? null);
            echo "Collapse\" aria-expanded=\"true\" aria-controls=\"";
            echo ($context["name"] ?? null);
            echo "Collapse\">
                        ";
            // line 9
            echo ($context["title"] ?? null);
            echo "
                    </a>
                </h4>
            </div>
            <div style=\"\" aria-expanded=\"true\" id=\"";
            // line 13
            echo ($context["name"] ?? null);
            echo "Collapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                <div class=\"panel-body\">
                    ";
            // line 15
            if (($context["list"] ?? null)) {
                // line 16
                echo "                        <ul class=\"nav nav-pills nav-stacked\">
                            ";
                // line 17
                echo ($context["content"] ?? null);
                echo "
                        </ul>
                    ";
            } else {
                // line 20
                echo "                        ";
                echo ($context["content"] ?? null);
                echo "
                    ";
            }
            // line 22
            echo "                </div>
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getcollapseFor($__name__ = null, $__title__ = null, $__array__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "array" => $__array__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "<div class=\"panel-group\" id=\"";
            echo ($context["name"] ?? null);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">
    <div class=\"panel panel-default\" id=\"";
            // line 30
            echo ($context["name"] ?? null);
            echo "_block\">
        <div class=\"panel-heading\" role=\"tab\">
            <h4 class=\"panel-title\">
                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#";
            // line 33
            echo ($context["name"] ?? null);
            echo "\" href=\"#";
            echo ($context["name"] ?? null);
            echo "Collapse\" aria-expanded=\"true\" aria-controls=\"";
            echo ($context["name"] ?? null);
            echo "Collapse\">
                    ";
            // line 34
            echo ($context["title"] ?? null);
            echo "
                </a>
            </h4>
        </div>
        <div style=\"\" aria-expanded=\"true\" id=\"";
            // line 38
            echo ($context["name"] ?? null);
            echo "Collapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
            <div class=\"panel-body\">
                <ul class=\"nav nav-pills nav-stacked\">
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["array"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 42
                echo "                    <li>
                        <a href=\"";
                // line 43
                echo $this->getAttribute($context["item"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </ul>
            </div>
        </div>
    </div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 53
    public function getcollapseMenu($__name__ = null, $__title__ = null, $__array__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "array" => $__array__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "<div class=\"panel-group\" id=\"";
            echo ($context["name"] ?? null);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">
    <div class=\"panel panel-default\" id=\"";
            // line 55
            echo ($context["name"] ?? null);
            echo "_block\">
        <div class=\"panel-heading\" role=\"tab\">
            <h4 class=\"panel-title\">
                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#";
            // line 58
            echo ($context["name"] ?? null);
            echo "\" href=\"#";
            echo ($context["name"] ?? null);
            echo "Collapse\" aria-expanded=\"true\" aria-controls=\"";
            echo ($context["name"] ?? null);
            echo "Collapse\">
                    ";
            // line 59
            echo ($context["title"] ?? null);
            echo "
                </a>
            </h4>
        </div>
        <div aria-expanded=\"true\" id=\"";
            // line 63
            echo ($context["name"] ?? null);
            echo "Collapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
            <div class=\"panel-body\">
                <ul class=\"list-group\">
                    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["array"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 67
                echo "                        <li class=\"list-group-item ";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
                            <span class=\"item-icon\">";
                // line 68
                echo $this->getAttribute($context["item"], "icon", array());
                echo "</span>
                            <a href=\"";
                // line 69
                echo $this->getAttribute($context["item"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </ul>
            </div>
        </div>
    </div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function getpluginSidebar($__name__ = null, $__content__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 80
            echo "    <div id=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"plugin plugin_";
            echo ($context["name"] ?? null);
            echo "\">
        ";
            // line 81
            echo ($context["content"] ?? null);
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 85
    public function getpluginPanel($__name__ = null, $__content__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 86
            echo "    <div id=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"plugin plugin_";
            echo ($context["name"] ?? null);
            echo "\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 89
            echo ($context["content"] ?? null);
            echo "
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function getpanel($__name__ = null, $__content__ = null, $__footer__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "content" => $__content__,
            "footer" => $__footer__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 97
            echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\"> ";
            // line 98
            echo ($context["name"] ?? null);
            echo "</div>
    <div class=\"panel-body\">
        ";
            // line 100
            echo ($context["content"] ?? null);
            echo "
    </div>
    ";
            // line 102
            if (($context["footer"] ?? null)) {
                // line 103
                echo "        <div class=\"panel-footer\">";
                echo ($context["footer"] ?? null);
                echo "</div>
    ";
            }
            // line 105
            echo "</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "default/macro/macro.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 105,  405 => 103,  403 => 102,  398 => 100,  393 => 98,  390 => 97,  376 => 96,  356 => 89,  347 => 86,  334 => 85,  316 => 81,  309 => 80,  296 => 79,  276 => 72,  265 => 69,  261 => 68,  256 => 67,  252 => 66,  246 => 63,  239 => 59,  231 => 58,  225 => 55,  220 => 54,  206 => 53,  186 => 46,  175 => 43,  172 => 42,  168 => 41,  162 => 38,  155 => 34,  147 => 33,  141 => 30,  136 => 29,  122 => 28,  103 => 22,  97 => 20,  91 => 17,  88 => 16,  86 => 15,  81 => 13,  74 => 9,  66 => 8,  60 => 5,  55 => 4,  40 => 3,  34 => 94,  31 => 84,  28 => 78,  25 => 52,  22 => 27,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/macro/macro.tpl", "/home/ddr3nsbpy23v/public_html/tactics.com.mx/LMS/main/template/default/macro/macro.tpl");
    }
}
