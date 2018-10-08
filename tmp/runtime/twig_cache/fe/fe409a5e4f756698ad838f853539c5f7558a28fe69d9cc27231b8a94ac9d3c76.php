<?php

/* ./subviews/privacy/privacy.twig */
class __TwigTemplate_a8b6a97d204f6c56c5fe28116e76cb9482a9fff77b2770515697e591d8c70d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'anonymous' => array($this, 'block_anonymous'),
            'datasecurity' => array($this, 'block_datasecurity'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 23, "block" => 24);
        $filters = array("t" => 33);
        $functions = array("gT" => 27, "include" => 48);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array('t'),
                array('gT', 'include')
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

        // line 18
        echo "
<!-- Privacy message -->

<div class=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacycontainer", array()));
        echo " row\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "privacycontainer", array()));
        echo ">
    <div class=\"";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacycol", array()));
        echo "  col-sm-12 col-centered\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "privacycol", array()));
        echo ">
        ";
        // line 23
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "hideprivacyinfo", array()) == "off")) {
            // line 24
            echo "            ";
            $this->displayBlock('anonymous', $context, $blocks);
            // line 45
            echo "        ";
        }
        // line 46
        echo "        ";
        $this->displayBlock('datasecurity', $context, $blocks);
        // line 53
        echo "    </div>
</div>";
    }

    // line 24
    public function block_anonymous($context, array $blocks = array())
    {
        // line 25
        echo "                ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "anonymized", array()) == "Y")) {
            // line 26
            echo "                <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacyhead", array()));
            echo " h4 text-primary \" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "privacyhead", array()));
            echo ">
                    ";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("This survey is anonymous."));
            echo "
                </div>
                <div>
                    <p class=\"";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacybody", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "privacybody", array()));
            echo ">
                        ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("The record of your survey responses does not contain any identifying information about you, unless a specific survey question explicitly asked for it."));
            // line 34
            echo "
                    </p>
                    <p class=\"";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacybody", array()));
            echo "\">
                        ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("If you used an identifying token to access this survey, please rest assured that this token will not be stored together with your responses. It is managed in a separate database and will only be updated to indicate whether you did (or did not) complete this survey. There is no way of matching identification tokens with survey responses."));
            // line 40
            echo "
                    </p>
                </div>
                ";
        }
        // line 44
        echo "            ";
    }

    // line 46
    public function block_datasecurity($context, array $blocks = array())
    {
        // line 47
        echo "            ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", array()) == 1)) {
            // line 48
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/privacy/privacy_text.twig"));
            echo "
            ";
        } elseif (($this->getAttribute(        // line 49
($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", array()) == 2)) {
            // line 50
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/privacy/privacy_modal.twig"));
            echo "
            ";
        }
        // line 52
        echo "        ";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  138 => 50,  136 => 49,  131 => 48,  128 => 47,  125 => 46,  121 => 44,  115 => 40,  113 => 37,  109 => 36,  105 => 34,  103 => 31,  97 => 30,  91 => 27,  84 => 26,  81 => 25,  78 => 24,  73 => 53,  70 => 46,  67 => 45,  64 => 24,  62 => 23,  56 => 22,  50 => 21,  45 => 18,);
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

    (¯`·._.·(¯`·._.· Privacy ·._.·´¯)·._.·´¯)

    Show the privacy message (in All in One Mode)
    see: allinone_mode_welcome_privacy.twig

#}

<!-- Privacy message -->

<div class=\"{{ aSurveyInfo.class.privacycontainer }} row\" {{ aSurveyInfo.attr.privacycontainer }}>
    <div class=\"{{ aSurveyInfo.class.privacycol }}  col-sm-12 col-centered\" {{ aSurveyInfo.attr.privacycol }}>
        {% if (aSurveyInfo.options.hideprivacyinfo == \"off\" ) %}
            {% block anonymous %}
                {% if (aSurveyInfo.anonymized == \"Y\") %}
                <div class=\"{{ aSurveyInfo.class.privacyhead }} h4 text-primary \" {{ aSurveyInfo.attr.privacyhead }}>
                    {{ gT(\"This survey is anonymous.\") }}
                </div>
                <div>
                    <p class=\"{{ aSurveyInfo.class.privacybody }}\" {{ aSurveyInfo.attr.privacybody }}>
                        {{
                            \"The record of your survey responses does not contain any identifying information about you, unless a specific survey question explicitly asked for it.\"
                            | t
                        }}
                    </p>
                    <p class=\"{{ aSurveyInfo.class.privacybody }}\">
                        {{
                            \"If you used an identifying token to access this survey, please rest assured that this token will not be stored together with your responses. It is managed in a separate database and will only be updated to indicate whether you did (or did not) complete this survey. There is no way of matching identification tokens with survey responses.\"
                            | t
                        }}
                    </p>
                </div>
                {% endif %}
            {% endblock %}
        {% endif %}
        {% block datasecurity %}
            {% if (aSurveyInfo.showsurveypolicynotice == 1) %}
                {{include('./subviews/privacy/privacy_text.twig')}}
            {% elseif (aSurveyInfo.showsurveypolicynotice == 2) %}
                {{include( './subviews/privacy/privacy_modal.twig')}}
            {% endif %}
        {% endblock %}
    </div>
</div>", "./subviews/privacy/privacy.twig", "/var/www/limesurvey/themes/survey/vanilla/views/subviews/privacy/privacy.twig");
    }
}
