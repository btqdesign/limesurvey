<?php

/* /survey/questions/answer/arrays/10point/rows/cells/answer_td_input.twig */
class __TwigTemplate_449462b6772cfe643df1e289c77db6b8e27fe6f39c1a3091ed29eb30e0859ad0 extends Twig_Template
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
        $tags = array("if" => 13);
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

        // line 11
        echo "
 <!-- answer_td_input -->
 <td class=\"answer_cell_";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["i"] ?? null));
        if ((($context["i"] ?? null) == "")) {
            echo " noanswer-item";
        }
        echo " answer-item radio-item\">

     

      <img src=\"/themes/question/estrellas/survey/questions/answer/arrays/10point/assets/estrella.png\" class=\"estrella\" alt=\"\">





     <input 
     type=\"radio\"
     name=\"";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
     id=\"answer";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["i"] ?? null));
        echo "\"
     value=\"";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["value"] ?? null));
        echo "\"
     ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["CHECKED"] ?? null));
        echo "
     />
    ";
        // line 33
        echo "</td>
<!-- end of answer_td_input -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/10point/rows/cells/answer_td_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 33,  79 => 28,  75 => 27,  69 => 26,  65 => 25,  47 => 13,  43 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/arrays/10point/rows/cells/answer_td_input.twig", "/var/www/limesurvey/themes/question/estrellas/survey/questions/answer/arrays/10point/rows/cells/answer_td_input.twig");
    }
}
