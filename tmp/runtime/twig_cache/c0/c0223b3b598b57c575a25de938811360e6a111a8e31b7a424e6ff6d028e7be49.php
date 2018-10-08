<?php

/* ./subviews/navigation/navigator_complement.twig */
class __TwigTemplate_53773e8fab5731558d61240003d8e43d1523b7260abb14db59dc52439e56542b extends Twig_Template
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
        $tags = array("if" => 6);
        $filters = array();
        $functions = array("include" => 12);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('include')
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

        // line 6
        if ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "load", array()), "show", array()) == "Y") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "save", array()), "show", array()) == "Y")) || ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "bShow", array()) == true)) || ($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowClearAll", array()) == true))) {
            // line 7
            echo "    <!-- extra tools, can be shown with javascript too (just remove ls-js-hidden class -->
    <div class=\"row ls-js-hidden\">
        <!-- Extra button container -->
        <div class=\"col-xs-6 clearall-saveall-wrapper\">
            ";
            // line 11
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "load", array()), "show", array()) == "Y") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "save", array()), "show", array()) == "Y"))) {
                // line 12
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/save_buttons.twig"));
                echo "
            ";
            }
            // line 14
            echo "            ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowClearAll", array()) == true)) {
                // line 15
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/clearall_buttons.twig"));
                echo "
            ";
            }
            // line 17
            echo "        </div>
         <!-- Index container -->
        ";
            // line 19
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "bShow", array()) == true)) {
                // line 20
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/question_index_buttons.twig"));
                echo "
        ";
            }
            // line 22
            echo "    </div>
";
        }
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/navigator_complement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  80 => 22,  74 => 20,  72 => 19,  68 => 17,  62 => 15,  59 => 14,  53 => 12,  51 => 11,  45 => 7,  43 => 6,);
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
    This file is part of LimeSurvey
    Copyright (C) 2018 The LimeSurvey Project Team
    This file render extra part for navigator
#}
{% if aSurveyInfo.aNavigator.load.show == \"Y\" or aSurveyInfo.aNavigator.save.show == \"Y\" or aSurveyInfo.aQuestionIndex.bShow == true or aSurveyInfo.bShowClearAll == true %}
    <!-- extra tools, can be shown with javascript too (just remove ls-js-hidden class -->
    <div class=\"row ls-js-hidden\">
        <!-- Extra button container -->
        <div class=\"col-xs-6 clearall-saveall-wrapper\">
            {% if aSurveyInfo.aNavigator.load.show == \"Y\" or aSurveyInfo.aNavigator.save.show == \"Y\" %}
                {{ include('./subviews/navigation/save_buttons.twig') }}
            {% endif %}
            {% if aSurveyInfo.bShowClearAll == true %}
                {{ include('./subviews/navigation/clearall_buttons.twig') }}
            {% endif %}
        </div>
         <!-- Index container -->
        {% if (aSurveyInfo.aQuestionIndex.bShow == true) %}
            {{ include('./subviews/navigation/question_index_buttons.twig') }}
        {% endif %}
    </div>
{% endif %}

", "./subviews/navigation/navigator_complement.twig", "/var/www/limesurvey/themes/survey/vanilla/views/subviews/navigation/navigator_complement.twig");
    }
}
