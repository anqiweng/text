<?php

/* @Problem/Problem/show.html.twig */
class __TwigTemplate_da330ce81050ce3e142bbd60c474393f6b43f570015ed3f5dd494642b00bf307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Problem/Problem/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["problem"] ?? null), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["problem"] ?? null), "title", array()), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <style>.problem-info p { font-size: 1.2em; }</style>
    <div class=\"ui main container\">
        <h1>#";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["problem"] ?? null), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["problem"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
        <div class=\"problem-info\" id=\"problem-description\">
            ";
        // line 8
        echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown($this->getAttribute(($context["problem"] ?? null), "description", array()));
        echo "
        </div>
        ";
        // line 10
        if ($this->getAttribute(($context["problem"] ?? null), "inputFormat", array())) {
            // line 11
            echo "            <h2>输入格式</h2>
            <div class=\"problem-info\" id=\"problem-input-format\">
                ";
            // line 13
            echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown($this->getAttribute(($context["problem"] ?? null), "inputFormat", array()));
            echo "
            </div>
        ";
        }
        // line 16
        echo "        ";
        if ($this->getAttribute(($context["problem"] ?? null), "outputFormat", array())) {
            // line 17
            echo "            <h2>输出格式</h2>
            <div class=\"problem-info\" id=\"problem-output-format\">
                ";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown($this->getAttribute(($context["problem"] ?? null), "outputFormat", array()));
            echo "
            </div>
        ";
        }
        // line 22
        echo "        ";
        if ($this->getAttribute(($context["problem"] ?? null), "sampleTestcases", array())) {
            // line 23
            echo "            <h2>样例</h2>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["problem"] ?? null), "sampleTestcases", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["sample"]) {
                // line 25
                echo "                <h3>#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "</h3>
                <div class=\"ui segment\" style=\"white-space: pre;\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["sample"], "input", array()), "html", null, true);
                echo "</div>
                <div class=\"ui segment\" style=\"white-space: pre;\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["sample"], "output", array()), "html", null, true);
                echo "</div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sample'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        // line 30
        echo "        ";
        if ($this->getAttribute(($context["problem"] ?? null), "hint", array())) {
            // line 31
            echo "            <h2>提示</h2>
            <div class=\"problem-info\" id=\"problem-hint\">
                ";
            // line 33
            echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown($this->getAttribute(($context["problem"] ?? null), "hint", array()));
            echo "
            </div>
        ";
        }
        // line 36
        echo "      <input type =\"submit\" />
    </div>

";
    }

    public function getTemplateName()
    {
        return "@Problem/Problem/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 36,  140 => 33,  136 => 31,  133 => 30,  130 => 29,  114 => 27,  110 => 26,  105 => 25,  88 => 24,  85 => 23,  82 => 22,  76 => 19,  72 => 17,  69 => 16,  63 => 13,  59 => 11,  57 => 10,  52 => 8,  45 => 6,  41 => 4,  38 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Problem/Problem/show.html.twig", "/home/wwwroot/my_project_name3.3.*/src/ProblemBundle/Resources/views/Problem/show.html.twig");
    }
}
