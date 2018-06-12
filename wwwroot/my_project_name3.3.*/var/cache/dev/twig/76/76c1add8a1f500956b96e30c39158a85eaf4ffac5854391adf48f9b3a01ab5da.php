<?php

/* @Problem/Problem/show.html.twig */
class __TwigTemplate_422ae2530c61e23de98fb397b4c555fb5fd4916b487a833a12e24875776fb3bb extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Problem/Problem/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Problem/Problem/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "title", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <style>.problem-info p { font-size: 1.2em; }</style>
    <div class=\"ui main container\">
        <h1>#";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "title", array()), "html", null, true);
        echo "</h1>
        <div class=\"problem-info\" id=\"problem-description\">
            ";
        // line 8
        echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown($this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "description", array()));
        echo "
        </div>
        ";
        // line 10
        if ($this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "inputFormat", array())) {
            // line 11
            echo "            <h2>输入格式</h2>
            <div class=\"problem-info\" id=\"problem-input-format\">
                ";
            // line 13
            echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown($this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "inputFormat", array()));
            echo "
            </div>
        ";
        }
        // line 16
        echo "        ";
        if ($this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "outputFormat", array())) {
            // line 17
            echo "            <h2>输出格式</h2>
            <div class=\"problem-info\" id=\"problem-output-format\">
                ";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown($this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "outputFormat", array()));
            echo "
            </div>
        ";
        }
        // line 22
        echo "        ";
        if ($this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "sampleTestcases", array())) {
            // line 23
            echo "            <h2>样例</h2>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "sampleTestcases", array()));
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
        if ($this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "hint", array())) {
            // line 31
            echo "            <h2>提示</h2>
            <div class=\"problem-info\" id=\"problem-hint\">
                ";
            // line 33
            echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown($this->getAttribute(($context["problem"] ?? $this->getContext($context, "problem")), "hint", array()));
            echo "
            </div>
        ";
        }
        // line 36
        echo "    </div>
    <div class=\"code\" style=\"margin-left: 10%;\"> 
    <form role=\"form\"> 
       <div class=\"editor-header\"> 
          <select class=\"form-control form-control-plus\"onchange=\"choiceLang(this)\"> 
              <option value=\"c_cpp\">语言</option>
              <option value=\"c_cpp\" selected=\"selected\">C/C++语言</option> 
              <option value=\"java\">JAVA语言</option> 
              <option value=\"javascript\">JavaScript语言</option>
           </select> 
           <select class=\"form-control form-control-plus\" onchange=\"choiceBack(this)\">      
               <option>环境配色</option>
               <option value=\"ace/theme/xcode\"selected=\"selected\">高亮</option> 
               <option value=\"ace/theme/monokaise\">暗色</option>
           </select> 
           <select class=\"form-control form-control-plus\" onchange=\"choiceSJ(this)\">
                <option value=\"4\">代码缩进</option> <option>2</option> 
                <option selected=\"selected\">4</option> 
                <option>8</option> 
           </select>
           <div class=\"flex-btn\" onclick=\"expand('spanid')\">
           <span class=\"glyphicon glyphicon-resize-full\" id=\"spanid\"></span> 
           </div> 
       </div>
   </form> 
   <pre id=\"editor\" style=\"height:400px\">
   <textarea class=\"ace_text-input\" style=\"height:400px\"></textarea> 
   </pre>
   <button class=\"btn btn-primary\" onclick=\"submit()\">提交</button> 
   </div>
  
<script src=\"js/jquery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>  

<script src=\"js/editor.js\" type=\"text/javascript\" charset=\"utf-8\"></script>  

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  176 => 36,  170 => 33,  166 => 31,  163 => 30,  160 => 29,  144 => 27,  140 => 26,  135 => 25,  118 => 24,  115 => 23,  112 => 22,  106 => 19,  102 => 17,  99 => 16,  93 => 13,  89 => 11,  87 => 10,  82 => 8,  75 => 6,  71 => 4,  62 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}#{{ problem.id }} - {{ problem.title }}{% endblock %}
{% block content %}
    <style>.problem-info p { font-size: 1.2em; }</style>
    <div class=\"ui main container\">
        <h1>#{{ problem.id }} - {{ problem.title }}</h1>
        <div class=\"problem-info\" id=\"problem-description\">
            {{ problem.description|markdown }}
        </div>
        {% if problem.inputFormat %}
            <h2>输入格式</h2>
            <div class=\"problem-info\" id=\"problem-input-format\">
                {{ problem.inputFormat|markdown }}
            </div>
        {% endif %}
        {% if problem.outputFormat %}
            <h2>输出格式</h2>
            <div class=\"problem-info\" id=\"problem-output-format\">
                {{ problem.outputFormat|markdown }}
            </div>
        {% endif %}
        {% if problem.sampleTestcases %}
            <h2>样例</h2>
            {% for sample in problem.sampleTestcases %}
                <h3>#{{ loop.index0 }}</h3>
                <div class=\"ui segment\" style=\"white-space: pre;\">{{ sample.input }}</div>
                <div class=\"ui segment\" style=\"white-space: pre;\">{{ sample.output }}</div>
            {% endfor %}
        {% endif %}
        {% if problem.hint %}
            <h2>提示</h2>
            <div class=\"problem-info\" id=\"problem-hint\">
                {{ problem.hint|markdown }}
            </div>
        {% endif %}
    </div>
    <div class=\"code\" style=\"margin-left: 10%;\"> 
    <form role=\"form\"> 
       <div class=\"editor-header\"> 
          <select class=\"form-control form-control-plus\"onchange=\"choiceLang(this)\"> 
              <option value=\"c_cpp\">语言</option>
              <option value=\"c_cpp\" selected=\"selected\">C/C++语言</option> 
              <option value=\"java\">JAVA语言</option> 
              <option value=\"javascript\">JavaScript语言</option>
           </select> 
           <select class=\"form-control form-control-plus\" onchange=\"choiceBack(this)\">      
               <option>环境配色</option>
               <option value=\"ace/theme/xcode\"selected=\"selected\">高亮</option> 
               <option value=\"ace/theme/monokaise\">暗色</option>
           </select> 
           <select class=\"form-control form-control-plus\" onchange=\"choiceSJ(this)\">
                <option value=\"4\">代码缩进</option> <option>2</option> 
                <option selected=\"selected\">4</option> 
                <option>8</option> 
           </select>
           <div class=\"flex-btn\" onclick=\"expand('spanid')\">
           <span class=\"glyphicon glyphicon-resize-full\" id=\"spanid\"></span> 
           </div> 
       </div>
   </form> 
   <pre id=\"editor\" style=\"height:400px\">
   <textarea class=\"ace_text-input\" style=\"height:400px\"></textarea> 
   </pre>
   <button class=\"btn btn-primary\" onclick=\"submit()\">提交</button> 
   </div>
  
<script src=\"js/jquery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>  

<script src=\"js/editor.js\" type=\"text/javascript\" charset=\"utf-8\"></script>  

{% endblock %}
", "@Problem/Problem/show.html.twig", "/home/wwwroot/my_project_name3.3.*/src/ProblemBundle/Resources/views/Problem/show.html.twig");
    }
}
