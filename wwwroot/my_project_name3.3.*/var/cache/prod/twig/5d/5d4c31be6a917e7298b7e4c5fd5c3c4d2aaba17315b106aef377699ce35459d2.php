<?php

/* base.html.twig */
class __TwigTemplate_0dfcd2c80e95b17248aa386592fb30a9e2d5647ddeccc286506c1f10413e06bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'pre_scripts' => array($this, 'block_pre_scripts'),
            'post_scripts' => array($this, 'block_post_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/liudanlite.css"), "html", null, true);
        echo "\">

    <style type=\"text/css\">
        body {
            background-color: #FFFFFF;
        }
        .ui.menu .item img.logo {
            margin-right: 1.5em;
        }
        .main.container {
            margin-top: 6em;
        }
        .wireframe {
            margin-top: 2em;
        }
        .ui.footer.segment {
            margin: 3em 0 0;
            padding: 3em 0;
        }
    </style>
</head>
<body>

<div class=\"ui fixed menu\">
    <div class=\"ui container\">
        <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"header item\">
        </a>
        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"item\">首页</a>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("problem_index");
        echo "\" class=\"item\">题库</a>
        <a href=\"#\" class=\"item\">评测记录</a>
    </div>
</div>

";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "
<div class=\"ui inverted vertical footer segment\">
    <div class=\"ui center aligned container\">
        <p>Powered by LiudanLite</p>
        <div class=\"ui inverted section divider\"></div>
        <div class=\"ui horizontal inverted small divided link list\">
            <a class=\"item\" href=\"#\">Site Map</a>
            <a class=\"item\" href=\"https://github.com/luogu-dev/liudanlite\">GitHub</a>
        </div>
    </div>
</div>
<script>
    var _globals = {};
    _globals.route = '";
        // line 56
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "js"), "html", null, true);
        echo "';
    _globals.currentUser = JSON.parse('";
        // line 57
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["app"] ?? null), "user", array())), "js"), "html", null, true);
        echo "');
</script>
";
        // line 59
        $this->displayBlock('pre_scripts', $context, $blocks);
        // line 60
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/liudanlite.js"), "html", null, true);
        echo "\"></script>
";
        // line 61
        $this->displayBlock('post_scripts', $context, $blocks);
        // line 62
        echo "</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_pre_scripts($context, array $blocks = array())
    {
    }

    // line 61
    public function block_post_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 61,  132 => 59,  127 => 42,  122 => 7,  116 => 62,  114 => 61,  109 => 60,  107 => 59,  102 => 57,  98 => 56,  83 => 43,  81 => 42,  73 => 37,  69 => 36,  64 => 34,  36 => 9,  31 => 7,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/wwwroot/my_project_name3.3.*/app/Resources/views/base.html.twig");
    }
}
