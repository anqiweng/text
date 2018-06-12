<?php

/* @Problem/ProblemAdmin/edit.html.twig */
class __TwigTemplate_65e78828f7288a87269f2e71f8363531ffe7b65aef50b07dee348fd95c7b2647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Problem/ProblemAdmin/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'pre_scripts' => array($this, 'block_pre_scripts'),
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
        // line 3
        echo "    ";
        if ($this->getAttribute(($context["problem"] ?? null), "id", array())) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["problem"] ?? null), "title", array()), "html", null, true);
            echo " - 编辑题目
    ";
        } else {
            // line 6
            echo "        新建题目
    ";
        }
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"ui main text container\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
    </div>
";
    }

    // line 16
    public function block_pre_scripts($context, array $blocks = array())
    {
        // line 17
        echo "    <script>
        _globals.sampleTestcasesCount = parseInt('";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "sampleTestcases", array())), "html", null, true);
        echo "');
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Problem/ProblemAdmin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  64 => 17,  61 => 16,  54 => 11,  51 => 10,  48 => 9,  42 => 6,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Problem/ProblemAdmin/edit.html.twig", "/home/wwwroot/my_project_name3.3.*/src/ProblemBundle/Resources/views/ProblemAdmin/edit.html.twig");
    }
}
