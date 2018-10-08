<?php

/* /survey/questions/answer/arrays/10point/rows/answer_row.twig */
class __TwigTemplate_0939fab46f39f08ae49cf7e8994a80870b50b868ceafa3a5137651b4de6f201b extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answers-list radio-list form-group ";
        if (($context["odd"] ?? null)) {
            echo "ls-odd";
        } else {
            echo "ls-even";
        }
        echo " ";
        if (($context["error"] ?? null)) {
            echo " ls-error-mandatory has-error";
        }
        echo "\"  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sDisplayStyle"] ?? null));
        echo "  role=\"radiogroup\"  aria-labelledby=\"answertext";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\">
    <th id=\"answertext";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answertext control-label";
        if ((($context["answerwidth"] ?? null) == 0)) {
            echo " sr-only";
        }
        echo "\">
        ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answertext"] ?? null));
        echo "

        ";
        // line 19
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["myfname"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 20
($context["myfname"] ?? null)), "disabled" => true)), "method"));
        // line 23
        echo "
    </th>

        ";
        // line 27
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answer_tds"] ?? null));
        echo "

</tr>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/10point/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  82 => 23,  80 => 20,  78 => 19,  73 => 16,  65 => 15,  47 => 14,  43 => 12,);
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
 * Generate a row for the table
 *
 * @var \$answer_tds        : the cells of each row, generated with the view rows/cells/*.php
 * @var \$myfname
 * @var \$answerwidth
 * @var \$answertext
 * @var \$value
 */
#}

<!-- answer_row -->
<tr id=\"javatbd{{ myfname }}\" class=\"answers-list radio-list form-group {% if odd %}ls-odd{% else %}ls-even{% endif %} {% if error %} ls-error-mandatory has-error{% endif %}\"  {{ sDisplayStyle }}  role=\"radiogroup\"  aria-labelledby=\"answertext{{ myfname }}\">
    <th id=\"answertext{{ myfname }}\" class=\"answertext control-label{% if answerwidth==0 %} sr-only{% endif %}\">
        {{ answertext }}

        {# Value for expression manager javascript (use id) ; no need to submit #}
        {{ C.Html.hiddenField(\"java\"~myfname,value,({
            'id' : \"java\"~myfname,
            'disabled' : true,
        }))
        }}
    </th>

        {# defined in rows/cells #}
        {{ answer_tds }}

</tr>
<!-- end of answer_row -->
", "/survey/questions/answer/arrays/10point/rows/answer_row.twig", "/var/www/limesurvey/application/views/survey/questions/answer/arrays/10point/rows/answer_row.twig");
    }
}
