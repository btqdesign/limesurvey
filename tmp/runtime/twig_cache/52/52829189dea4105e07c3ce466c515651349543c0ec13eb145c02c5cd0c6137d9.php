<?php

/* /survey/questions/answer/global/table/cell/head_header.twig */
class __TwigTemplate_ccef8f076072b9c335a043aeed87dd5dd690c43436e3cde3755975a24f947e40 extends Twig_Template
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

        // line 8
        echo "
<!-- thead -->
<th class=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["class"] ?? null));
        echo "\">
    ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["content"] ?? null));
        echo "
</th>
<!-- end of thead -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/global/table/cell/head_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  47 => 10,  43 => 8,);
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
 * Array header : answer or sub question
 * @var \$class
 * @var \$content
 */
#}

<!-- thead -->
<th class=\"{{ class }}\">
    {{ content }}
</th>
<!-- end of thead -->
", "/survey/questions/answer/global/table/cell/head_header.twig", "/var/www/limesurvey/application/views/survey/questions/answer/global/table/cell/head_header.twig");
    }
}
