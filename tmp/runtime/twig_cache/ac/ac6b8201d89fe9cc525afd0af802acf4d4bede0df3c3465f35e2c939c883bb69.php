<?php

/* /survey/questions/answer/arrays/10point/answer.twig */
class __TwigTemplate_1eb387fc3acc0fcfa1a5769ad077b95ee42d9cec7f514a779e803bb1f3abb8dd extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 12
        echo "<!-- Array 10 point choice -->

<!-- answer -->
<table class=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " table table-bordered table-hover table-10-point-array\" role=\"group\" aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
    <!-- Columns -->
    <colgroup class=\"col-responses\">
        <col class=\"col-answers\" style='width: ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answerwidth"] ?? null));
        echo "%;' />
            ";
        // line 20
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sColumns"] ?? null));
        echo "
    </colgroup>
    <thead aria-hidden=\"true\">
        <tr class=\"ls-heading\">
                ";
        // line 25
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sHeaders"] ?? null));
        echo "
        </tr>
    </thead>
    <tbody>
            ";
        // line 30
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sRows"] ?? null));
        echo "
    </tbody>
</table>

<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/10point/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  68 => 25,  60 => 20,  56 => 18,  48 => 15,  43 => 12,);
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
/**
 * array 10 point choice Html
 *
 * @var \$sColumns   : the columns, generated with the view columns/col.php
 * @var \$sHeaders   : the headers, generated with the view rows/cell/thead.php
 * @var \$sRows      : the rows, generated with the view rows/answer_row.php
 * @var \$extraclass
 * @var \$answerwidth
 */
#}
<!-- Array 10 point choice -->

<!-- answer -->
<table class=\"{{ coreClass }} table table-bordered table-hover table-10-point-array\" role=\"group\" aria-labelledby=\"ls-question-text-{{ basename }}\">
    <!-- Columns -->
    <colgroup class=\"col-responses\">
        <col class=\"col-answers\" style='width: {{ answerwidth }}%;' />
            {# columns/col.php #}
            {{ sColumns }}
    </colgroup>
    <thead aria-hidden=\"true\">
        <tr class=\"ls-heading\">
                {# rows/cell/thead.php #}
                {{ sHeaders }}
        </tr>
    </thead>
    <tbody>
            {# rows/answer_row.php #}
            {{ sRows }}
    </tbody>
</table>

<!-- end of answer -->
", "/survey/questions/answer/arrays/10point/answer.twig", "/var/www/limesurvey/application/views/survey/questions/answer/arrays/10point/answer.twig");
    }
}
