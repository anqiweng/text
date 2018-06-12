<?php

/* @User/User/userDetail.html.twig */
class __TwigTemplate_15e6eef1838e7f3e1837c2f40b003f324aafe57a16ec0dc95a85051b0b04c3f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/User/userDetail.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"ui main text container\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</h1>
        <img class=\"ui small circular image\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Ornicar\GravatarBundle\Twig\GravatarExtension')->getUrl($this->getAttribute(($context["user"] ?? null), "email", array())), "html", null, true);
        echo "\">
        <p></p>
        <p>邮箱: <strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</strong></p>
        <p>My name is ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo ". I'm an artist, a performance artist. I'm hired for people to fulfill their fantasies, the deep♂dark♂fantasies.</p>

        <div id=\"fun\"></div>
    </div>
";
    }

    // line 16
    public function block_pre_scripts($context, array $blocks = array())
    {
        // line 17
        echo "    <script>
        _globals.user = JSON.parse('";
        // line 18
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_jsonencode_filter(($context["user"] ?? null)), "js"), "html", null, true);
        echo "')
    </script>
";
    }

    public function getTemplateName()
    {
        return "@User/User/userDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  67 => 17,  64 => 16,  55 => 11,  51 => 10,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/User/userDetail.html.twig", "/home/wwwroot/my_project_name3.3.*/src/UserBundle/Resources/views/User/userDetail.html.twig");
    }
}
