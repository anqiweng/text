<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_73faeeadabb4479a47db7cc0d5244440c0dc9701da5c893619253aa6d96763d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Security/login.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"ui main text container\">
        ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 10
        echo "
        <h1>登录</h1>
        <form class=\"ui form\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 13
        if (($context["csrf_token"] ?? null)) {
            // line 14
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
            ";
        }
        // line 16
        echo "
            <div class=\"field\">
                <label>用户名</label>
                <input type=\"text\" name=\"_username\" placeholder=\"用户名\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required>
            </div>
            <div class=\"field\">
                <label>密码</label>
                <input type=\"password\" name=\"_password\" placeholder=\"密码\" required>
            </div>
            <div class=\"field\">
                <div class=\"ui checkbox\">
                    <label for=\"remember_me\">记住我</label>
                    <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" tabindex=\"0\" class=\"hidden\">
                </div>
            </div>
            <button class=\"ui button\" type=\"submit\" name=\"_submit\">登录</button>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  65 => 16,  59 => 14,  57 => 13,  53 => 12,  49 => 10,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login.html.twig", "/home/wwwroot/my_project_name3.3.*/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
