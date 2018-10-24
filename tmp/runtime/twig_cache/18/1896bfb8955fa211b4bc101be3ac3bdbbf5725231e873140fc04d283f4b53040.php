<?php

/* /survey/questions/answer/arrays/10point/rows/cells/answer_td_input.twig */
class __TwigTemplate_76e7e69ff390106462429f608d0edc946ecda477ebf948ed0bd5fcc2ec154ee2 extends Twig_Template
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
 ";
        // line 13
        if ((($context["i"] ?? null) > 3)) {
            // line 14
            echo "   <tr>
    <td class=\"answer_cell_";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["i"] ?? null));
            if ((($context["i"] ?? null) == "")) {
                echo " noanswer-item";
            }
            echo " answer-item radio-item \">

        <div>
            ";
            // line 18
            if ((($context["i"] ?? null) == 4)) {
                // line 19
                echo "
                <span class=\"persona persona4\"></span>

            ";
            }
            // line 23
            echo "            ";
            if ((($context["i"] ?? null) == 5)) {
                // line 24
                echo "
               <span class=\"persona persona5\"></span>

           ";
            }
            // line 28
            echo "           ";
            if ((($context["i"] ?? null) == 6)) {
                // line 29
                echo "
               <span class=\"persona persona6\"></span>

           ";
            }
            // line 33
            echo "           ";
            if ((($context["i"] ?? null) == 7)) {
                // line 34
                echo "
               <span class=\"persona persona7\"></span> 

           ";
            }
            // line 38
            echo "           ";
            if ((($context["i"] ?? null) == 8)) {
                // line 39
                echo "
               <span class=\"persona persona8\"></span> 

           ";
            }
            // line 43
            echo "           ";
            if ((($context["i"] ?? null) == 9)) {
                // line 44
                echo "
               <span class=\"persona persona9\"></span> 

           ";
            }
            // line 48
            echo "           ";
            if ((($context["i"] ?? null) == 10)) {
                // line 49
                echo "
               <span class=\"persona persona10\"></span> 


           ";
            }
            // line 54
            echo "
       </div>
       <div>


        <input
        type=\"radio\"
        name=\"";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
            echo "\"
        id=\"answer";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
            echo "-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["i"] ?? null));
            echo "\"
        value=\"";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["value"] ?? null));
            echo "\"
        ";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["CHECKED"] ?? null));
            echo "
        >
        <label for=\"answer";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
            echo "-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["i"] ?? null));
            echo "\"  class=\"label-persona\">

         ";
            // line 68
            if ((($context["i"] ?? null) == 4)) {
                // line 69
                echo "
            Extremadamente insatisfecho

        ";
            }
            // line 73
            echo "        ";
            if ((($context["i"] ?? null) == 5)) {
                // line 74
                echo "
            Insatisfecho

        ";
            }
            // line 78
            echo "        ";
            if ((($context["i"] ?? null) == 6)) {
                // line 79
                echo "
            Moderadamente insatisfecho

        ";
            }
            // line 83
            echo "        ";
            if ((($context["i"] ?? null) == 7)) {
                // line 84
                echo "
            Ni satisfecho ni insatisfecho

        ";
            }
            // line 88
            echo "        ";
            if ((($context["i"] ?? null) == 8)) {
                // line 89
                echo "
            Moderasamente satisfecho

        ";
            }
            // line 93
            echo "        ";
            if ((($context["i"] ?? null) == 9)) {
                // line 94
                echo "
            Satisfecho

        ";
            }
            // line 98
            echo "        ";
            if ((($context["i"] ?? null) == 10)) {
                // line 99
                echo "

            Extremadamente Satisfecho

        ";
            }
            // line 104
            echo "
    </label>
</div>
</td>
</tr>
";
        }
        // line 110
        echo "<!-- end of answer_td_input -->
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
        return array (  230 => 110,  222 => 104,  215 => 99,  212 => 98,  206 => 94,  203 => 93,  197 => 89,  194 => 88,  188 => 84,  185 => 83,  179 => 79,  176 => 78,  170 => 74,  167 => 73,  161 => 69,  159 => 68,  152 => 66,  147 => 64,  143 => 63,  137 => 62,  133 => 61,  124 => 54,  117 => 49,  114 => 48,  108 => 44,  105 => 43,  99 => 39,  96 => 38,  90 => 34,  87 => 33,  81 => 29,  78 => 28,  72 => 24,  69 => 23,  63 => 19,  61 => 18,  52 => 15,  49 => 14,  47 => 13,  43 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/arrays/10point/rows/cells/answer_td_input.twig", "/var/www/limesurvey/themes/question/personas/survey/questions/answer/arrays/10point/rows/cells/answer_td_input.twig");
    }
}
