<?php

/* ./subviews/content/submit_preview.twig */
class __TwigTemplate_1c6fc8c60e043241625518c14d06e72ef9ef396d2678f9ee8910dfe2d48513f8 extends Twig_Template
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
        $tags = array("if" => 30);
        $filters = array();
        $functions = array("include" => 25, "gT" => 31);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('include', 'gT')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        echo "


";
        // line 24
        echo "<!-- main form -->
";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/start_form.twig"));
        echo "


    <div class=\"";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "previewsubmit", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "previewsubmit", array()));
        echo ">
        <div class='";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "previewsubmittext", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "previewsubmittext", array()));
        echo ">
            ";
        // line 30
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "showDefault", array()) == true)) {
            // line 31
            echo "                <p ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrappertextpa", array()));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Thank you!"));
            echo "</p>
                <p ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrappertextpb", array()));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Your survey responses have been recorded."));
            echo "</p>
            ";
        } else {
            // line 34
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sEndText", array()));
            echo "
            ";
        }
        // line 36
        echo "
            ";
        // line 38
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aAssessments", array()), "show", array())) {
            // line 39
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/assessments.twig"));
            echo "
            ";
        }
        // line 41
        echo "
            <br /><br />
            ";
        // line 44
        echo "            <strong >
                <font size='2' color='red'>
                    ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Did Not Save"));
        echo "
                </font>
            </strong>
            <br /><br />

            ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Your survey responses have not been recorded. This survey is not yet active."));
        echo "
            <br /><br />
        </div>
    </div>
</form> <!-- main form -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/submit_preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 51,  111 => 46,  107 => 44,  103 => 41,  97 => 39,  94 => 38,  91 => 36,  85 => 34,  78 => 32,  71 => 31,  69 => 30,  63 => 29,  57 => 28,  51 => 25,  48 => 24,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    LimeSurvey
    Copyright (C) 2007-2017 The LimeSurvey Project Team / Louis Gac
    All rights reserved.
    License: GNU/GPL License v2 or later, see LICENSE.php
    LimeSurvey is free software. This version may have been modified pursuant
    to the GNU General Public License, and as distributed it includes or
    is derivative of works licensed under the GNU General Public License or
    other free or open source software licenses.
    See COPYRIGHT.php for copyright notices and details.

    (¯`·._.·(¯`·._.· Submit Preview Content  ·._.·´¯)·._.·´¯)

    TODO: this file should be merged with layout_submit,
    adding the warning message \"Your survey responses have not been recorded. This survey is not yet active.\" to  aSurveyInfo.errorHtml.messages

    NOTE: This content is included inside mainrow.twig
    NOTE: see layout_global.twig for more infos
#}



{# include the form opening tag #}
<!-- main form -->
{{ include('./subviews/header/start_form.twig') }}


    <div class=\"{{ aSurveyInfo.class.previewsubmit }}\" {{ aSurveyInfo.attr.previewsubmit }}>
        <div class='{{ aSurveyInfo.class.previewsubmittext }}' {{ aSurveyInfo.attr.previewsubmittext }}>
            {% if (aSurveyInfo.aCompleted.showDefault == true) %}
                <p {{ aSurveyInfo.attr.submitwrappertextpa }}>{{ gT(\"Thank you!\") }}</p>
                <p {{ aSurveyInfo.attr.submitwrappertextpb }}>{{ gT(\"Your survey responses have been recorded.\") }}</p>
            {% else %}
                {{ aSurveyInfo.aCompleted.sEndText }}
            {% endif %}

            {# Assessments #}
            {% if (aSurveyInfo.aAssessments.show) %}
                {{ include('./subviews/messages/assessments.twig') }}
            {% endif %}

            <br /><br />
            {# TODO: rewrite this before master #}
            <strong >
                <font size='2' color='red'>
                    {{ gT(\"Did Not Save\") }}
                </font>
            </strong>
            <br /><br />

            {{ gT(\"Your survey responses have not been recorded. This survey is not yet active.\") }}
            <br /><br />
        </div>
    </div>
</form> <!-- main form -->
", "./subviews/content/submit_preview.twig", "/var/www/limesurvey/themes/survey/vanilla/views/subviews/content/submit_preview.twig");
    }
}
