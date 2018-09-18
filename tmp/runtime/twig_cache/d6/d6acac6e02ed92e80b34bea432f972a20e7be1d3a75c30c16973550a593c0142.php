<?php

/* ./layout_global.twig */
class __TwigTemplate_95928fb04c3386ff047692b5db07d78d79085376ca8b4544f18b48c3a1a59b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'progress' => array($this, 'block_progress'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 24, "block" => 48);
        $filters = array();
        $functions = array("include" => 22, "registerTemplateCssFile" => 33);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array(),
                array('include', 'registerTemplateCssFile')
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

        // line 17
        echo "
    <!DOCTYPE html>
    <html lang=\"";
        // line 19
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

    ";
        // line 22
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/head.twig"));
        echo "

    <body class=\" ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " lang-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyformat", array()));
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "brandlogo", array()) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "body", array()));
        echo " >
    ";
        // line 25
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on") && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1))) {
            // line 26
            echo "        <div class=\"progress ajax_loading_indicator\" id=\"ajax_loading_indicator\">
            <div class=\"progress-bar progress-bar-info ajax_loading_indicator_bar\" id=\"ajax_loading_indicator_bar\" role=\"progressbar\">
            </div>
        </div>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "backgroundimage", array()) == "on")) {
            // line 33
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerTemplateCssFile("css/background-image.css"));
            echo "
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "boxcontainer", array()) == "off")) {
            // line 37
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerTemplateCssFile("css/no-container.css"));
            echo "
    ";
        }
        // line 39
        echo "
    <body>
        <div id=\"beginScripts\">
            <###begin###>
        </div>
        ";
        // line 45
        echo "        <article>
        
            <div id=\"";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "dynamicreload", array()));
        echo "\">
            ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "            </div>
        </article>
        <div id=\"bottomScripts\">
            <###end###>
        </div>
         ";
        // line 96
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on")) {
            // line 97
            echo "        <script type=\"text/javascript\">
            var ajaxHandler = new AjaxSubmitObject();
            \$(document).ready(function () {
                ajaxHandler.bindActions();
            });
        </script>
    ";
        }
        // line 104
        echo "    </body>
</html>
";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "
                ";
        // line 51
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 54
        echo "
                ";
        // line 56
        echo "                ";
        $this->displayBlock('progress', $context, $blocks);
        // line 59
        echo "
                <!-- Outer Frame Container -->
                <div class=\"";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "outerframe", array()));
        echo " container ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "animatebody", array()) == "on")) {
            echo " animated ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "bodyanimation", array()));
            echo " ";
        }
        echo "\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "outerframe", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "outerframe", array()));
        echo " >

                    <!-- Main Row -->
                    <div id=\"";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "mainrow", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "mainrow", array()));
        echo " >
                        <!-- Main Col -->
                        <div class=\"";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincol", array()));
        echo " col-centered  space-col\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "maincol", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincol", array()));
        echo ">

                            ";
        // line 69
        echo "                            ";
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "                        </div> <!-- main col -->
                    </div> <!-- main row -->
                </div> <!-- outer frame container -->

                ";
        // line 78
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/bootstrap_alert_modal.twig"));
        echo "

                <!-- some template.js function launched before ready -->
                <script type=\"text/javascript\">
                    /*<![CDATA[*/
                        if(template === undefined){
                            var template = new Template();
                        }
                        template.initGlobal();
                    /*]]>*/
                </script>
            ";
    }

    // line 51
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 52
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/nav_bar.twig"));
        echo "
                ";
    }

    // line 56
    public function block_progress($context, array $blocks = array())
    {
        // line 57
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/progess_bar.twig"));
        echo "
                ";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        // line 70
        echo "                                ";
        // line 71
        echo "                                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/warnings.twig"));
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "./layout_global.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 71,  259 => 70,  256 => 69,  249 => 57,  246 => 56,  239 => 52,  236 => 51,  219 => 78,  213 => 73,  210 => 69,  201 => 66,  194 => 64,  178 => 61,  174 => 59,  171 => 56,  168 => 54,  165 => 51,  162 => 49,  159 => 48,  153 => 104,  144 => 97,  141 => 96,  134 => 90,  132 => 48,  128 => 47,  124 => 45,  117 => 39,  111 => 37,  109 => 36,  106 => 35,  100 => 33,  98 => 32,  95 => 31,  88 => 26,  86 => 25,  72 => 24,  66 => 22,  51 => 19,  47 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./layout_global.twig", "/var/www/limesurvey/templates/default/views/layout_global.twig");
    }
}
