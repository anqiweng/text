<?php

/* @KnpPaginator/Pagination/semantic_ui_pagination.html.twig */
class __TwigTemplate_3233ac152dddb830b7dc332fd1ca1a40f4bfd1ceead3b78159760ab491d74b50 extends Twig_Template
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
        // line 13
        echo "
<div class=\"ui pagination menu\">
    ";
        // line 15
        if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
            // line 16
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["first"] ?? null)))), "html", null, true);
            echo "\">
            <i class=\"angle double left icon\"></i>
        </a>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (array_key_exists("previous", $context)) {
            // line 22
            echo "        <a class=\"item icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)))), "html", null, true);
            echo "\">
            <i class=\"angle left icon\"></i>
        </a>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 28
            echo "        ";
            if (($context["page"] != ($context["current"] ?? null))) {
                // line 29
                echo "            <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => $context["page"]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
        ";
            } else {
                // line 31
                echo "            <span class=\"active item\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span>
        ";
            }
            // line 33
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    ";
        // line 36
        if (array_key_exists("next", $context)) {
            // line 37
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["next"] ?? null)))), "html", null, true);
            echo "\">
            <i class=\"angle right icon\"></i>
        </a>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
            // line 43
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["last"] ?? null)))), "html", null, true);
            echo "\">
            <i class=\"angle right double icon\"></i>
        </a>
    ";
        }
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 47,  95 => 43,  93 => 42,  90 => 41,  82 => 37,  80 => 36,  77 => 35,  70 => 33,  64 => 31,  56 => 29,  53 => 28,  49 => 27,  46 => 26,  38 => 22,  36 => 21,  33 => 20,  25 => 16,  23 => 15,  19 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig", "/home/wwwroot/my_project_name3.3.*/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/semantic_ui_pagination.html.twig");
    }
}
