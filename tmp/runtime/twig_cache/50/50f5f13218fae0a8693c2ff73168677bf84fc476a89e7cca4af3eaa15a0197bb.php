<?php

/* __string_template__8c1592a34d98ef12240d2aa33df0d048578f2ea56e2fc776f32556fa9d4cba4c */
class __TwigTemplate_a9619944c99e04789b8132b3200bf1543f82a7a0aaf984622b4dcfa036d40a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 28, "if" => 39, "block" => 77);
        $filters = array("format" => 68);
        $functions = array("registerTemplateCssFile" => 27, "gT" => 68, "include" => 78);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('format'),
                array('registerTemplateCssFile', 'gT', 'include')
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

        // line 25
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerTemplateCssFile("css/errors.css"));
        echo "
";
        // line 28
        $context["aError"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aError", array());
        // line 29
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo "\" dir=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " dir-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "html", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "html", array()));
        echo ">

    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

        <title>
            ";
        // line 39
        if ($this->getAttribute(($context["aError"] ?? null), "error", array())) {
            // line 40
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "error", array()));
            echo "
            ";
        } else {
            // line 42
            echo "                !ERROR ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", array()));
            echo "
            ";
        }
        // line 44
        echo "        </title>

        ";
        // line 50
        echo "        <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["templateurl"] ?? null));
        echo "favicon.ico\" />
    </head>

    <body  class=\"";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " lang-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["surveylanguage"] ?? null));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["surveyformat"] ?? null));
        echo "\" marginwidth=\"0\" marginheight=\"0\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "body", array()));
        echo ">
        <article id=\"block_error\">
            <div>
                ";
        // line 57
        if ($this->getAttribute(($context["aError"] ?? null), "error", array())) {
            // line 58
            echo "                    <h1>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "error", array()));
            echo "</h1>
                ";
        }
        // line 60
        echo "                <h2>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "title", array()));
        echo "</h2>
                <p>
                    ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "message", array()));
        echo "
                </p>
                <p>
                    ";
        // line 65
        if ($this->getAttribute(($context["aError"] ?? null), "contact", array())) {
            // line 66
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "contact", array()));
            echo "
                    ";
        } else {
            // line 68
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("For further information please contact %s:"), $this->getAttribute(($context["aSurveyInfo"] ?? null), "adminname", array())));
            echo "
                        ";
            // line 69
            if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", array())) {
                // line 70
                echo "                            <br>
                            <a href='mailto:";
                // line 71
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", array()));
                echo "'>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", array()));
                echo "</a>
                        ";
            }
            // line 73
            echo "                    ";
        }
        // line 74
        echo "                </p>
            </div>
        </article>
        ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "    </body>
</html>
";
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        // line 78
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__8c1592a34d98ef12240d2aa33df0d048578f2ea56e2fc776f32556fa9d4cba4c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 78,  178 => 77,  172 => 80,  170 => 77,  165 => 74,  162 => 73,  155 => 71,  152 => 70,  150 => 69,  145 => 68,  139 => 66,  137 => 65,  131 => 62,  125 => 60,  119 => 58,  117 => 57,  105 => 54,  99 => 51,  96 => 50,  92 => 44,  86 => 42,  80 => 40,  78 => 39,  57 => 31,  53 => 29,  51 => 28,  47 => 27,  44 => 25,);
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



    (¯`·._.·(¯`·._.· Vanilla Theme Errors Layout  ·._.·´¯)·._.·´¯)

    This layout is used to render errors that block survey rendering.
    Eg: wrong survey id, empty group in preview group, etc.

    It has no obligation to be the same layout as layout_global.twig, it can be completly different.

    NOTE: To see it: just try to preview a survey with an empty group.

    NOTE: see layout_global.twig for more infos
#}

{# We register a specific css file for that layout. #}
{{ registerTemplateCssFile('css/errors.css') }}
{% set aError     = aSurveyInfo.aError    %}

<!DOCTYPE html>
<html lang=\"{{ aSurveyInfo.languagecode }}\" dir=\"{{ aSurveyInfo.dir }}\" class=\"{{ aSurveyInfo.languagecode }} dir-{{ aSurveyInfo.dir }} {{ aSurveyInfo.class.html }}\" {{ aSurveyInfo.attr.html }}>

    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

        <title>
            {% if aError.error %}
                {{ aError.error }}
            {% else %}
                !ERROR {{ aSurveyInfo.surveyls_title }}
            {% endif %}
        </title>

        {#
            NOTE: YES, it's very bad to do it here. It a first cycle. I'll see what to do once I'll done all those kind of error page
            TODO: move it to a separated css file
        #}
        <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />
        <link rel=\"shortcut icon\" href=\"{{ templateurl }}favicon.ico\" />
    </head>

    <body  class=\"{{ aSurveyInfo.class.body }} lang-{{surveylanguage}} {{surveyformat}}\" marginwidth=\"0\" marginheight=\"0\" {{ aSurveyInfo.attr.body }}>
        <article id=\"block_error\">
            <div>
                {% if aError.error %}
                    <h1>{{ aError.error }}</h1>
                {% endif %}
                <h2>{{ aError.title }}</h2>
                <p>
                    {{ aError.message }}
                </p>
                <p>
                    {% if aError.contact %}
                        {{ aError.contact }}
                    {% else %}
                        {{gT(\"For further information please contact %s:\")|format (aSurveyInfo.adminname)}}
                        {% if aSurveyInfo.adminemail %}
                            <br>
                            <a href='mailto:{{ aSurveyInfo.adminemail }}'>{{ aSurveyInfo.adminemail }}</a>
                        {% endif %}
                    {% endif %}
                </p>
            </div>
        </article>
        {% block footer %}
            {{ include('./subviews/footer/footer.twig') }}
        {% endblock %}
    </body>
</html>
", "__string_template__8c1592a34d98ef12240d2aa33df0d048578f2ea56e2fc776f32556fa9d4cba4c", "");
    }
}
