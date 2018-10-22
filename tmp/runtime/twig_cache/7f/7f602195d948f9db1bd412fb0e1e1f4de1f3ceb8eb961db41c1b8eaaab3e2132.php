<?php

/* __string_template__813025bbe2f5c00039f70e6e2249b750b21cf08682857523d0247de252fcc63d */
class __TwigTemplate_e0e238b7b607dbcc3abeff7b1199d4aa32ca9b943cb7a0f48fea11f99a1160e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'themescripts' => array($this, 'block_themescripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 93, "block" => 108, "for" => 143);
        $filters = array();
        $functions = array("include" => 91, "registerScript" => 193, "registerTemplateCssFile" => 118, "image" => 126, "gT" => 135, "sprintf" => 159);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'for'),
                array(),
                array('include', 'registerScript', 'registerTemplateCssFile', 'image', 'gT', 'sprintf')
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

        // line 15
        echo "


";
        // line 86
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 88
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
        // line 91
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/head.twig"));
        echo "

    <body class=\" ";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " font-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "font", array()));
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
        // line 94
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on") && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1))) {
            // line 95
            echo "            ";
            // line 96
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/ajax_indicator.twig"));
            echo "
        ";
        }
        // line 98
        echo "
        ";
        // line 100
        echo "        <div id=\"beginScripts\">
            <###begin###>
        </div>

        ";
        // line 105
        echo "        <article>

            <div id=\"";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "dynamicreload", array()));
        echo "\">
            ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 196
        echo "            </div>
        </article>
        ";
        // line 198
        $this->displayBlock('footer', $context, $blocks);
        // line 201
        echo "        <div id=\"bottomScripts\">
            <###end###>
        </div>
        ";
        // line 204
        $this->displayBlock('themescripts', $context, $blocks);
        // line 209
        echo "    </body>
</html>
";
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        // line 109
        echo "                ";
        // line 110
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 113
        echo "

                ";
        // line 116
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 190
        echo "

            ";
        // line 193
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts", " if(window.basicThemeScripts === undefined){ window.basicThemeScripts = new ThemeScripts(); } basicThemeScripts.initGlobal(); ", "POS_END"));
        echo "

            ";
    }

    // line 110
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 111
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
                ";
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
        echo "                    <div class=\"container-fluid\">
                    ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerTemplateCssFile("./css/survey-list.css"));
        echo "
                
                    <div class=\"";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrow", array()));
        echo " row\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "surveylistrow", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrow", array()));
        echo ">

                        ";
        // line 123
        echo "                        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/no_js_alert.twig"));
        echo "

                        <div id=\"";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "surveylistrowjumbotron", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowjumbotron", array()));
        echo ">
                            ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::image("./files/survey_list_header.png", $this->getAttribute(($context["aSurveyInfo"] ?? null), "name", array()), array("class" => "img-responsive center-block")));
        echo "
                            ";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteName", array()));
        echo "
                            <div class=\"ls-js-hidden\">
                                ";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/language_changer_form.twig"));
        echo "
                            </div>
                        </div>

                        <div class=\"";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdiva", array()));
        echo " col-xs-12\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdiva", array()));
        echo ">
                            <div class='";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivadiv", array()));
        echo " h3' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivadiv", array()));
        echo ">
                                ";
        // line 135
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("The following surveys are available:"));
        echo "
                            </div>
                        </div>

                        <div class=\"";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivb", array()));
        echo " col-xs-12\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivb", array()));
        echo ">
                            <div class='";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdiv", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivbdiv", array()));
        echo ">
                                <ul class='";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdivul", array()));
        echo " list-unstyled ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivbdivul", array()));
        echo ">

                                    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aSurveyInfo"] ?? null), "publicSurveys", array()));
        foreach ($context['_seq'] as $context["key"] => $context["oSurvey"]) {
            // line 144
            echo "                                    <li class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdivulli", array()));
            echo " btn-group col-sm-6 col-xs-12\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivbdivulli", array()));
            echo ">
                                        <a
                                        href=\"";
            // line 146
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "sSurveyUrl", array()));
            echo "\"
                                        title=\"";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Start survey"));
            echo "\"
                                        lang=\"";
            // line 148
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "language", array()));
            echo "\"
                                        class=\"";
            // line 149
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdivullia", array()));
            echo " btn btn-primary col-xs-12\"  >
                                        ";
            // line 150
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "localizedTitle", array()));
            echo "
                                    </a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oSurvey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                            </ul>
                            </div>
                        </div>

                        <div class=\"";
        // line 158
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivc", array()));
        echo " col-xs-12 \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivc", array()));
        echo ">
                            ";
        // line 159
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Please contact %s ( %s ) for further assistance."), $this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteAdminName", array()), $this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteAdminEmail", array())));
        echo "
                        </div>

                    </div>

                    <div id=\"";
        // line 164
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "surveylistfooter", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistfooter", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfooter", array()));
        echo ">
                        <div class=\"";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistfootercont", array()));
        echo " container\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercont", array()));
        echo ">
                            <div ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercontp", array()));
        echo " class=\"row\">
                                <div class=\"col-xs-6 col-sm-12 text-center\">
                                    <a ";
        // line 168
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercontpaa", array()));
        echo " class=\"center-block text-center\">
                                        ";
        // line 169
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::image("./files/poweredby.png", "UVM", array("class" => "img-responsive center-block ")));
        echo "
                                    </a>
                                </div>
                                <div class=\"col-sm-12 hidden-xs text-center\">
                                    <!--
                                    <a ";
        // line 174
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercontpab", array()));
        echo ">
                                        The Online Survey Tool
                                    </a>
                                    - Free & Open Source
                                    -->
                                </div>
                                <div class=\"col-xs-6 visible-xs text-center\">
                                    <a ";
        // line 181
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercontpab", array()));
        echo ">
                                        Online Surveytool
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
    }

    // line 198
    public function block_footer($context, array $blocks = array())
    {
        // line 199
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    // line 204
    public function block_themescripts($context, array $blocks = array())
    {
        // line 205
        echo "        <script>
            window.basicThemeScripts.init();
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__813025bbe2f5c00039f70e6e2249b750b21cf08682857523d0247de252fcc63d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 205,  387 => 204,  380 => 199,  377 => 198,  364 => 181,  354 => 174,  346 => 169,  342 => 168,  337 => 166,  331 => 165,  323 => 164,  315 => 159,  309 => 158,  303 => 154,  293 => 150,  289 => 149,  285 => 148,  281 => 147,  277 => 146,  269 => 144,  265 => 143,  258 => 141,  252 => 140,  246 => 139,  239 => 135,  233 => 134,  227 => 133,  220 => 129,  215 => 127,  211 => 126,  205 => 125,  199 => 123,  190 => 120,  185 => 118,  182 => 117,  179 => 116,  172 => 111,  169 => 110,  161 => 193,  157 => 190,  154 => 116,  150 => 113,  147 => 110,  145 => 109,  142 => 108,  136 => 209,  134 => 204,  129 => 201,  127 => 198,  123 => 196,  121 => 108,  117 => 107,  113 => 105,  107 => 100,  104 => 98,  98 => 96,  96 => 95,  94 => 94,  78 => 93,  72 => 91,  57 => 88,  53 => 86,  48 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__813025bbe2f5c00039f70e6e2249b750b21cf08682857523d0247de252fcc63d", "");
    }
}
