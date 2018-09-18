<?php

/* ./subviews/progess_bar.twig */
class __TwigTemplate_e60dec7654210218dd7a6f24ea73637aa4227e16c9cdd39247e8a411210ba823 extends Twig_Template
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
        $tags = array("if" => 20, "set" => 25);
        $filters = array();
        $functions = array("registerPublicCssFile" => 24, "intval" => 25);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('registerPublicCssFile', 'intval')
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

        // line 19
        echo "
";
        // line 20
        if (((($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", array()) != "A") && $this->getAttribute(($context["aSurveyInfo"] ?? null), "showprogress", array(), "any", true, true)) && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "showprogress", array()) == "Y"))) {
            // line 21
            echo "<!-- Top container -->
<div class=\"";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "topcontainer", array()));
            echo " space-col\"  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "topcontainer", array()));
            echo " >
    <div class=\"";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "topcontent", array()));
            echo " container-fluid\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "topcontent", array()));
            echo " >
        ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPublicCssFile("lime-progress.css"));
            echo "
        ";
            // line 25
            $context["progressValue"] = ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "progress", array()), "total", array()) > 0)) ? (intval(((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "progress", array()), "currentstep", array()) - 1) / $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "progress", array()), "total", array())) * 100))) : (0));
            // line 26
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "progress", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "progress", array()));
            echo ">
            <div class=\"";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "progressbar", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "progressbar", array()));
            echo " role=\"progressbar\" aria-valuenow=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["progressValue"] ?? null));
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"min-width: 2em; width: ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["progressValue"] ?? null));
            echo "%;\">
                ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["progressValue"] ?? null));
            echo "%
            </div>
        </div>
    </div> <!-- must hide it without javascript -->
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/progess_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  76 => 27,  69 => 26,  67 => 25,  63 => 24,  57 => 23,  51 => 22,  48 => 21,  46 => 20,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/progess_bar.twig", "/var/www/limesurvey/templates/default/views/subviews/progess_bar.twig");
    }
}
