<?php

/* @Problem/Problem/problemcontext.html.twig */
class __TwigTemplate_17bd85c5922044bca50eb8d52ec4a91fe801aa84207a6f674b4817ea25a66c57 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Problem/Problem/problemcontext.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Problem/Problem/problemcontext.html.twig"));

        // line 1
        echo "<div class=\"code\"> 
    <form role=\"form\"> 
       <div class=\"editor-header\"> 
          <select class=\"form-control form-control-plus\"onchange=\"choiceLang(this)\"> 
              <option value=\"ace/mode/c_cpp\">语言</option>
              <option value=\"ace/mode/c_cpp\" selected=\"selected\">C/C++语言</option> 
              <option value=\"ace/mode/java\">JAVA语言</option> 
              <option value=\"ace/mode/javascript\">JavaScript语言</option>
           </select> 
           <select class=\"form-control form-control-plus\" onchange=\"choiceBack(this)\">      
               <option>环境配色</option>
               <option value=\"ace/theme/xcode\"selected=\"selected\">高亮</option> 
               <option value=\"ace/theme/monokai\">暗色</option>
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
<pre id=\"editor\" style=\"height:400px\"></pre>
<button class=\"btn btn-primary\" onclick=\"submit()\">提交</button> </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Problem/Problem/problemcontext.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"code\"> 
    <form role=\"form\"> 
       <div class=\"editor-header\"> 
          <select class=\"form-control form-control-plus\"onchange=\"choiceLang(this)\"> 
              <option value=\"ace/mode/c_cpp\">语言</option>
              <option value=\"ace/mode/c_cpp\" selected=\"selected\">C/C++语言</option> 
              <option value=\"ace/mode/java\">JAVA语言</option> 
              <option value=\"ace/mode/javascript\">JavaScript语言</option>
           </select> 
           <select class=\"form-control form-control-plus\" onchange=\"choiceBack(this)\">      
               <option>环境配色</option>
               <option value=\"ace/theme/xcode\"selected=\"selected\">高亮</option> 
               <option value=\"ace/theme/monokai\">暗色</option>
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
<pre id=\"editor\" style=\"height:400px\"></pre>
<button class=\"btn btn-primary\" onclick=\"submit()\">提交</button> </div>
", "@Problem/Problem/problemcontext.html.twig", "/home/wwwroot/my_project_name3.3.*/src/ProblemBundle/Resources/views/Problem/problemcontext.html.twig");
    }
}
