<?php

/* form/semantic-ui-form-theme.html.twig */
class __TwigTemplate_301df4ee9b61e0e694548590ceb02be62c23f3dbecc48b988032a774d4a3dc74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form/semantic-ui-form-theme.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "


";
        // line 5
        $this->displayBlock('form_start', $context, $blocks);
        // line 12
        echo "


";
        // line 16
        echo "


";
        // line 19
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 24
        echo "


";
        // line 27
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 34
        echo "


";
        // line 37
        $this->displayBlock('button_widget', $context, $blocks);
        // line 44
        echo "


";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 52
        echo "


";
        // line 55
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 60
        echo "


";
        // line 63
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 68
        echo "


";
        // line 71
        $this->displayBlock('date_widget', $context, $blocks);
        // line 76
        echo "


";
        // line 79
        $this->displayBlock('time_widget', $context, $blocks);
        // line 84
        echo "


";
        // line 87
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 92
        echo "


";
        // line 95
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 106
        echo "


";
        // line 109
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 120
        echo "


";
        // line 124
        echo "


";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "


";
        // line 135
        $this->displayBlock('choice_label', $context, $blocks);
        // line 140
        echo "


";
        // line 143
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 148
        echo "


";
        // line 151
        $this->displayBlock('radio_label', $context, $blocks);
        // line 156
        echo "


";
        // line 159
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 200
        echo "


";
        // line 204
        echo "


";
        // line 207
        $this->displayBlock('form_row', $context, $blocks);
        // line 220
        echo "


";
        // line 223
        $this->displayBlock('button_row', $context, $blocks);
        // line 228
        echo "


";
        // line 231
        $this->displayBlock('choice_row', $context, $blocks);
        // line 236
        echo "


";
        // line 239
        $this->displayBlock('date_row', $context, $blocks);
        // line 244
        echo "


";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 252
        echo "
";
        // line 253
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 5
    public function block_form_start($context, array $blocks = array())
    {
        // line 7
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " ui form"))));
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 19
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 21
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 27
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 29
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 31
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 37
    public function block_button_widget($context, array $blocks = array())
    {
        // line 39
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " ui button"))));
        // line 41
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        // line 49
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 55
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 57
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 63
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 65
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 79
    public function block_time_widget($context, array $blocks = array())
    {
        // line 81
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 87
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        // line 89
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 95
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 97
        echo "<div class=\"ui toggle checkbox\">

    ";
        // line 99
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " hidden"))));
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        // line 103
        echo "</div>";
    }

    // line 109
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 111
        echo "<div class=\"ui radio checkbox\">

    ";
        // line 113
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " hidden"))));
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        // line 117
        echo "</div>";
    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        // line 129
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 135
    public function block_choice_label($context, array $blocks = array())
    {
        // line 137
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 143
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 145
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 151
    public function block_radio_label($context, array $blocks = array())
    {
        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 159
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 160
        echo "
";
        // line 162
        echo "
";
        // line 163
        if (array_key_exists("widget", $context)) {
            // line 164
            echo "
";
            // line 165
            if (($context["required"] ?? null)) {
                // line 166
                echo "
";
                // line 167
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 168
                echo "
";
            }
            // line 170
            echo "
";
            // line 171
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 173
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 175
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 177
($context["name"] ?? null), "%id%" =>                     // line 179
($context["id"] ?? null)));
                } else {
                    // line 185
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 190
            echo "
<label";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 193
            echo ($context["widget"] ?? null);
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            // line 195
            echo "</label>

";
        }
        // line 198
        echo "
";
    }

    // line 207
    public function block_form_row($context, array $blocks = array())
    {
        // line 209
        echo "<div class=\"field";
        if ( !($context["valid"] ?? null)) {
            echo " error";
        }
        echo "\">";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 217
        echo "</div>";
    }

    // line 223
    public function block_button_row($context, array $blocks = array())
    {
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
    }

    // line 231
    public function block_choice_row($context, array $blocks = array())
    {
        // line 233
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 239
    public function block_date_row($context, array $blocks = array())
    {
        // line 241
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 253
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 258
        echo "<div class=\"field";
        if ( !($context["valid"] ?? null)) {
            echo " error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 261
        echo "</div>";
    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        // line 265
        echo "<div class=\"field";
        if ( !($context["valid"] ?? null)) {
            echo " error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 268
        echo "</div>";
    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 275
            echo "<div class=\"ui pointing red label\">
    <i class=\"warning sign icon\"></i>";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "form/semantic-ui-form-theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  563 => 280,  557 => 278,  553 => 277,  550 => 275,  548 => 274,  545 => 273,  541 => 268,  539 => 267,  537 => 266,  531 => 265,  528 => 264,  524 => 261,  522 => 260,  520 => 259,  514 => 258,  511 => 257,  507 => 254,  504 => 253,  500 => 249,  497 => 247,  493 => 241,  490 => 239,  486 => 233,  483 => 231,  479 => 225,  476 => 223,  472 => 217,  470 => 215,  468 => 213,  466 => 211,  460 => 209,  457 => 207,  452 => 198,  447 => 195,  443 => 193,  429 => 191,  426 => 190,  422 => 185,  419 => 179,  418 => 177,  417 => 175,  415 => 173,  413 => 171,  410 => 170,  406 => 168,  404 => 167,  401 => 166,  399 => 165,  396 => 164,  394 => 163,  391 => 162,  388 => 160,  385 => 159,  381 => 153,  378 => 151,  374 => 145,  371 => 143,  367 => 137,  364 => 135,  360 => 129,  357 => 127,  353 => 117,  351 => 115,  349 => 113,  345 => 111,  342 => 109,  338 => 103,  336 => 101,  334 => 99,  330 => 97,  327 => 95,  323 => 89,  320 => 87,  316 => 81,  313 => 79,  309 => 73,  306 => 71,  302 => 65,  299 => 63,  295 => 57,  292 => 55,  288 => 49,  285 => 47,  281 => 41,  279 => 39,  276 => 37,  272 => 31,  270 => 29,  267 => 27,  263 => 21,  260 => 19,  256 => 9,  254 => 7,  251 => 5,  247 => 273,  244 => 272,  241 => 270,  239 => 264,  236 => 263,  234 => 257,  231 => 256,  229 => 253,  226 => 252,  224 => 247,  219 => 244,  217 => 239,  212 => 236,  210 => 231,  205 => 228,  203 => 223,  198 => 220,  196 => 207,  191 => 204,  186 => 200,  184 => 159,  179 => 156,  177 => 151,  172 => 148,  170 => 143,  165 => 140,  163 => 135,  158 => 132,  156 => 127,  151 => 124,  146 => 120,  144 => 109,  139 => 106,  137 => 95,  132 => 92,  130 => 87,  125 => 84,  123 => 79,  118 => 76,  116 => 71,  111 => 68,  109 => 63,  104 => 60,  102 => 55,  97 => 52,  95 => 47,  90 => 44,  88 => 37,  83 => 34,  81 => 27,  76 => 24,  74 => 19,  69 => 16,  64 => 12,  62 => 5,  57 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/semantic-ui-form-theme.html.twig", "/home/wwwroot/my_project_name3.3.*/app/Resources/views/form/semantic-ui-form-theme.html.twig");
    }
}
