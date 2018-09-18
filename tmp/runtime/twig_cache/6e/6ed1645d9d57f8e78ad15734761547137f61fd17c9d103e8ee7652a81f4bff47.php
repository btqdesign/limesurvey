<?php

/* ./subviews/navigation/question_index_menu.twig */
class __TwigTemplate_b0808a3f82cb73a097dbc421965da2cafc1370310e5a9e626b99b941e1660cd6 extends Twig_Template
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
        $tags = array("if" => 30, "for" => 41, "set" => 42);
        $filters = array("t" => 35);
        $functions = array("flatEllipsizeText" => 82);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('t'),
                array('flatEllipsizeText')
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

        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "bShow", array()) == true)) {
            // line 31
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", array()) == "G")) {
                // line 32
                echo "        <!-- Question index, group, ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "type", array()));
                echo " -->
        <li class=\"";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenugli", array()));
                echo " dropdown index-menu-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "type", array()));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenugli", array()));
                echo " >
            <a class=\"";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenuglia", array()));
                echo " dropdown-toggle\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenuglia", array()));
                echo " href=\"#\" >
                ";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(eT("Question index"));
                echo "
                <span class=\"";
                // line 36
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenugspan", array()));
                echo " caret\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenugspan", array()));
                echo "></span>
            </a>

            <ul class=\"";
                // line 39
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusgul", array()));
                echo " dropdown-menu\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusgul", array()));
                echo ">
                ";
                // line 41
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "items", array()));
                foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                    // line 42
                    echo "                    ";
                    $context["statusClass"] = "";
                    // line 43
                    echo "
                    ";
                    // line 44
                    if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-unanswered", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-unanswered") == true))) {
                        // line 45
                        echo "                        ";
                        $context["statusClass"] = (($context["statusClass"] ?? null) . " bg-warning");
                        // line 46
                        echo "                    ";
                    }
                    // line 47
                    echo "
                    ";
                    // line 48
                    if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-error", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-error") == true))) {
                        // line 49
                        echo "                        ";
                        $context["statusClass"] = (($context["statusClass"] ?? null) . " bg-danger");
                        // line 50
                        echo "                    ";
                    }
                    // line 51
                    echo "
                    ";
                    // line 52
                    if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-current", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-current") == true))) {
                        // line 53
                        echo "                        ";
                        $context["statusClass"] = (($context["statusClass"] ?? null) . " disabled");
                        // line 54
                        echo "                    ";
                    }
                    // line 55
                    echo "

                    <li class=\"";
                    // line 57
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "coreClass", array()));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["statusClass"] ?? null));
                    echo "\"  ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusgli", array()));
                    echo ">
                        <a href='";
                    // line 58
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "url", array()));
                    echo "' data-limesurvey-submit='";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "submit", array()));
                    echo "'>
                            ";
                    // line 59
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "text", array()));
                    echo "
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            </ul>
        </li>
    ";
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", array()) == "S")) {
                // line 69
                echo "        <!-- Question index, question by question, ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "type", array()));
                echo " -->
        <li class=\"";
                // line 70
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusli", array()));
                echo " dropdown index-menu-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "type", array()));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusli", array()));
                echo ">
            <a class=\"";
                // line 71
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenuslia", array()));
                echo " dropdown-toggle\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenuslia", array()));
                echo ">
                ";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(eT("Question index"));
                echo "
                <span class=\"";
                // line 73
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusspan", array()));
                echo " caret\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusspan", array()));
                echo "></span>
            </a>

            <ul class=\"";
                // line 76
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenussul", array()));
                echo " dropdown-menu\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenussul", array()));
                echo ">

            ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aSurveyInfo"] ?? null), "indexItems", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 79
                    echo "                ";
                    // line 80
                    echo "                <li>
                    <div class=\"";
                    // line 81
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusddh", array()));
                    echo " dropdown-menu\" ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusddh", array()));
                    echo ">
                        ";
                    // line 82
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(call_user_func_array($this->env->getFunction('flatEllipsizeText')->getCallable(), array($this->getAttribute($context["group"], "text", array()), true, 30, " &hellip; ", 0.6)));
                    echo "
                        <span class=\"";
                    // line 83
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusddspan", array()));
                    echo " caret\" ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusddspan", array()));
                    echo "></span>
                    </div>
                    <ul class=\"";
                    // line 85
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusddul", array()));
                    echo " dropdown-menu\" ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusddul", array()));
                    echo ">
                        ";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "questions", array()));
                    foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                        // line 87
                        echo "                            ";
                        $context["statusClass"] = "";
                        // line 88
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-unanswered", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-unanswered") == true))) {
                            // line 89
                            echo "                                ";
                            $context["statusClass"] = (($context["statusClass"] ?? null) . " bg-warning");
                            // line 90
                            echo "                            ";
                        }
                        // line 91
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-error", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-error") == true))) {
                            // line 92
                            echo "                                ";
                            $context["statusClass"] = (($context["statusClass"] ?? null) . " bg-danger");
                            // line 93
                            echo "                            ";
                        }
                        // line 94
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-current", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-current") == true))) {
                            // line 95
                            echo "                                ";
                            $context["statusClass"] = (($context["statusClass"] ?? null) . " disabled");
                            // line 96
                            echo "                            ";
                        }
                        // line 97
                        echo "                            <li class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "coreClass", array()));
                        echo " ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["statusClass"] ?? null));
                        echo "\"  ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenussli", array()));
                        echo ">
                                <a href='";
                        // line 98
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "url", array()));
                        echo "' data-limesurvey-submit='";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "submit", array()));
                        echo "'>
                                    ";
                        // line 99
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(call_user_func_array($this->env->getFunction('flatEllipsizeText')->getCallable(), array($this->getAttribute($context["indexItem"], "text", array()), true, 30, " &hellip; ", 0.6)));
                        echo "
                                </a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "                    </ul>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "
            </ul>
        </li>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 106,  300 => 103,  290 => 99,  284 => 98,  275 => 97,  272 => 96,  269 => 95,  266 => 94,  263 => 93,  260 => 92,  257 => 91,  254 => 90,  251 => 89,  248 => 88,  245 => 87,  241 => 86,  235 => 85,  228 => 83,  224 => 82,  218 => 81,  215 => 80,  213 => 79,  209 => 78,  202 => 76,  194 => 73,  190 => 72,  184 => 71,  176 => 70,  171 => 69,  168 => 68,  165 => 66,  160 => 63,  150 => 59,  144 => 58,  136 => 57,  132 => 55,  129 => 54,  126 => 53,  124 => 52,  121 => 51,  118 => 50,  115 => 49,  113 => 48,  110 => 47,  107 => 46,  104 => 45,  102 => 44,  99 => 43,  96 => 42,  91 => 41,  85 => 39,  77 => 36,  73 => 35,  67 => 34,  59 => 33,  54 => 32,  51 => 31,  49 => 30,  46 => 29,  43 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/navigation/question_index_menu.twig", "/var/www/limesurvey/templates/default/views/subviews/navigation/question_index_menu.twig");
    }
}
