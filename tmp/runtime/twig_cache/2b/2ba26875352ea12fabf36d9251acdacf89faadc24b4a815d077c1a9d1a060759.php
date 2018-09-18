<?php

/* __string_template__e06d4d15b65f805d9f4e16769b3e2659df6f2a24d9357ad6de582c080ef56afa */
class __TwigTemplate_ef483b5b45554a8123cf6a604b4dba532132c7ada83049e5abefe1029164ae72 extends Twig_Template
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
        $tags = array("set" => 17, "if" => 32, "for" => 709);
        $filters = array("capitalize" => 1022);
        $functions = array("json_decode" => 17, "registerPackage" => 19, "registerScriptFile" => 26, "registerCssFile" => 27, "gT" => 262, "sprintf" => 1022, "createUrl" => 1073);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('capitalize'),
                array('json_decode', 'registerPackage', 'registerScriptFile', 'registerCssFile', 'gT', 'sprintf', 'createUrl')
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
        $context["aOptions"] = LS_Twig_Extension::json_decode($this->getAttribute(($context["templateConfiguration"] ?? null), "options", array()));
        // line 18
        echo "
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-roboto"));
        echo "
";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-noto"));
        echo "
";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-news_cycle"));
        echo "
";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-ubuntu"));
        echo "
";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-lato"));
        echo "
";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-websafe"));
        echo "

";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScriptFile((($context["optionsPath"] ?? null) . "/spectrum.js")));
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerCssFile((($context["optionsPath"] ?? null) . "/spectrum.css")));
        echo "

";
        // line 30
        $context["animationOptions"] = "";
        // line 32
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 33
            echo "    ";
            $context["animationOptions"] = (($context["animationOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 36
        ob_start();
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
<optgroup label=\"Attention Seekers\">
    <option value=\"bounce\">bounce</option>
    <option value=\"flash\">
        flash</option>
    <option value=\"pulse\">
        pulse</option>
    <option value=\"rubberBand\">
        rubberBand</option>
    <option value=\"shake\">
        shake</option>
    <option value=\"swing\">
        swing</option>
    <option value=\"tada\">
        tada</option>
    <option value=\"wobble\">
        wobble</option>
    <option value=\"jello\">
        jello</option>
</optgroup>

<optgroup label=\"Bouncing Entrances\">
    <option value=\"bounceIn\">bounceIn</option >
    <option value=\"bounceInDown\">bounceInDown</option>
    <option value=\"bounceInLeft\">
        bounceInLeft</option>
    <option value=\"bounceInRight\">
        bounceInRight</option>
    <option value=\"bounceInUp\">
        bounceInUp</option>
</optgroup>

<optgroup label=\"Bouncing Exits\">
    <option value=\"bounceOut\">bounceOut</option >
    <option value=\"bounceOutDown\">bounceOutDown</option>
    <option value=\"bounceOutLeft\">
        bounceOutLeft</option>
    <option value=\"bounceOutRight\">
        bounceOutRight</option>
    <option value=\"bounceOutUp\">
        bounceOutUp</option>
</optgroup>

<optgroup label=\"Fading Entrances\">
    <option value=\"fadeIn\">fadeIn</option >
    <option value=\"fadeInDown\">fadeInDown</option>
    <option value=\"fadeInDownBig\">
        fadeInDownBig</option>
    <option value=\"fadeInLeft\">
        fadeInLeft</option>
    <option value=\"fadeInLeftBig\">
        fadeInLeftBig</option>
    <option value=\"fadeInRight\">
        fadeInRight</option>
    <option value=\"fadeInRightBig\">
        fadeInRightBig</option>
    <option value=\"fadeInUp\">
        fadeInUp</option>
    <option value=\"fadeInUpBig\">
        fadeInUpBig</option>
</optgroup>

<optgroup label=\"Fading Exits\">
    <option value=\"fadeOut\">fadeOut</option >
    <option value=\"fadeOutDown\">fadeOutDown</option>
    <option value=\"fadeOutDownBig\">
        fadeOutDownBig</option>
    <option value=\"fadeOutLeft\">
        fadeOutLeft</option>
    <option value=\"fadeOutLeftBig\">
        fadeOutLeftBig</option>
    <option value=\"fadeOutRight\">
        fadeOutRight</option>
    <option value=\"fadeOutRightBig\">
        fadeOutRightBig</option>
    <option value=\"fadeOutUp\">
        fadeOutUp</option>
    <option value=\"fadeOutUpBig\">
        fadeOutUpBig</option>
</optgroup>

<optgroup label=\"Flippers\">
    <option value=\"flip\">flip</option >
    <option value=\"flipInX\">flipInX</option>
    <option value=\"flipInY\">
        flipInY</option>
    <option value=\"flipOutX\">
        flipOutX</option>
    <option value=\"flipOutY\">
        flipOutY</option>
</optgroup>

<optgroup label=\"Lightspeed\">
    <option value=\"lightSpeedIn\">lightSpeedIn</option >
    <option value=\"lightSpeedOut\">lightSpeedOut</option>
</optgroup>

<optgroup label=\"Rotating Entrances\">
    <option value=\"rotateIn\">rotateIn</option >
    <option value=\"rotateInDownLeft\">rotateInDownLeft</option>
    <option value=\"rotateInDownRight\">
        rotateInDownRight</option>
    <option value=\"rotateInUpLeft\">
        rotateInUpLeft</option>
    <option value=\"rotateInUpRight\">
        rotateInUpRight</option>
</optgroup>

<optgroup label=\"Rotating Exits\">
    <option value=\"rotateOut\">rotateOut</option >
    <option value=\"rotateOutDownLeft\">rotateOutDownLeft</option>
    <option value=\"rotateOutDownRight\">
        rotateOutDownRight</option>
    <option value=\"rotateOutUpLeft\">
        rotateOutUpLeft</option>
    <option value=\"rotateOutUpRight\">
        rotateOutUpRight</option>
</optgroup>

<optgroup label=\"Sliding Entrances\">
    <option value=\"slideInUp\">slideInUp</option >
    <option value=\"slideInDown\">slideInDown</option>
    <option value=\"slideInLeft\">
        slideInLeft</option>
    <option value=\"slideInRight\">
        slideInRight</option>
</optgroup>

<optgroup label=\"Sliding Exits\">
    <option value=\"slideOutUp\">slideOutUp</option >
    <option value=\"slideOutDown\">slideOutDown</option>
    <option value=\"slideOutLeft\">
        slideOutLeft</option>
    <option value=\"slideOutRight\">
        slideOutRight</option>
</optgroup>

<optgroup label=\"Zoom Entrances\">
    <option value=\"zoomIn\">zoomIn</option >
    <option value=\"zoomInDown\">zoomInDown</option>
    <option value=\"zoomInLeft\">
        zoomInLeft</option>
    <option value=\"zoomInRight\">
        zoomInRight</option>
    <option value=\"zoomInUp\">
        zoomInUp</option>
</optgroup>

<optgroup label=\"Zoom Exits\">
    <option value=\"zoomOut\">zoomOut</option >
    <option value=\"zoomOutDown\">zoomOutDown</option>
    <option value=\"zoomOutLeft\">
        zoomOutLeft</option>
    <option value=\"zoomOutRight\">
        zoomOutRight</option>
    <option value=\"zoomOutUp\">
        zoomOutUp</option>
</optgroup>

<optgroup label=\"Specials\">
    <option value=\"hinge\">hinge</option >
    <option value=\"jackInTheBox\">jackInTheBox</option>
    <option value=\"rollIn\">
        rollIn</option>
    <option value=\"rollOut\">
        rollOut</option>
</optgroup>
";
        $context["animationOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 205
        echo "
";
        // line 207
        $context["fruityOptions"] = "";
        // line 208
        echo "
";
        // line 210
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 211
            echo "    ";
            $context["fruityOptions"] = (($context["fruityOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 213
        echo "
";
        // line 215
        ob_start();
        // line 216
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fruityOptions"] ?? null));
        echo "
<option value=\"css/variations/sea_green.css\">Sea Green</option>
<option value=\"css/variations/apple_blossom.css\">Apple Blossom</option>
<option value=\"css/variations/bay_of_many.css\">Bay of Many</option>
<option value=\"css/variations/black_pearl.css\">Black Pearl</option>
<option value=\"css/variations/free_magenta.css\">Free Magenta</option>
<option value=\"css/variations/purple_tentacle.css\">Purple Tentacle</option>
<option value=\"css/variations/sunset_orange.css\">Sunset Orange</option>
<option value=\"css/variations/skyline_blue.css\">Skyline Blue</option>
";
        $context["fruityOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 226
        echo "
";
        // line 227
        $context["checkIconOptions"] = "";
        // line 228
        echo "
";
        // line 230
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 231
            echo "    ";
            $context["checkIconOptions"] = (($context["checkIconOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 233
        echo "
";
        // line 234
        ob_start();
        // line 235
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkIconOptions"] ?? null));
        echo "
<option value=\"f00c\"> <i class=\"fa fa-check\"></i> Check </option>
<option value=\"f058\"> <i class=\"fa fa-check-circle\"></i> Check circle </option>
<option value=\"f14a\"> <i class=\"fa fa-check-square\"></i> Check square </option>
<option value=\"f111\"> <i class=\"fa fa-circle\"></i> Circle </option>
<option value=\"f067\"> <i class=\"fa fa-plus\"></i> Plus </option>
<option value=\"f0c8\"> <i class=\"fa fa-square\"></i> Square </option>
<option value=\"f005\"> <i class=\"fa fa-star\"></i> Star </option>
<option value=\"f00d\"> <i class=\"fa fa-times\"></i> Times </option>
<option value=\"f069\"> <i class=\"fa fa-asterisk\"></i> Asterisk </option>
<option value=\"f061\"> <i class=\"fa fa-arrow-right\"></i> Arrow right </option>
<option value=\"f138\"> <i class=\"fa fa-chevron-circle-right\"></i> Chevron circle right </option>
<option value=\"f1d0\"> <i class=\"fa fa-resistance\"></i> Resistance </option>
";
        $context["checkIconOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 249
        echo "
";
        // line 251
        $context["fontOptions"] = "";
        // line 252
        echo "

";
        // line 255
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 256
            echo "    ";
            $context["fontOptions"] = (($context["fontOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 258
        echo "

";
        // line 260
        ob_start();
        // line 261
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
    <optgroup  label=\"";
        // line 262
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Local Server"));
        echo "\">
            <option class=\"font-roboto\"     value=\"roboto\"     data-font-package=\"roboto\"      >Roboto</option>
            <option class=\"font-news_cycle\" value=\"news_cycle\" data-font-package=\"news_cycle\"  >News Cycle</option>
            <option class=\"font-lato\"       value=\"lato\"       data-font-package=\"lato\"        >Lato</option>
            <option class=\"font-noto\"       value=\"noto\"       data-font-package=\"noto\"        >Noto Sans</option>
            <option class=\"font-ubuntu\"     value=\"ubuntu\"     data-font-package=\"ubuntu\"       >Ubuntu</option>
    </optgroup>

    <optgroup  label=\"";
        // line 270
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("User browser"));
        echo "\">

      <option class=\"font-georgia         \" value=\"georgia\"         data-font-package=\"websafe\" >Georgia</option>
      <option class=\"font-palatino        \" value=\"palatino\"        data-font-package=\"websafe\" >Palatino Linotype</option>
      <option class=\"font-times_new_roman \" value=\"times_new_roman\" data-font-package=\"websafe\" >Times New Roman</option>
      <option class=\"font-arial           \" value=\"arial\"           data-font-package=\"websafe\" >Arial</option>
      <option class=\"font-arial_black     \" value=\"arial_black\"     data-font-package=\"websafe\" >Arial Black</option>
      <option class=\"font-comic_sans      \" value=\"comic_sans\"      data-font-package=\"websafe\" >Comic Sans</option>
      <option class=\"font-impact          \" value=\"impact\"          data-font-package=\"websafe\" >Impact</option>
      <option class=\"font-lucida_sans     \" value=\"lucida_sans\"     data-font-package=\"websafe\" >Lucida Sans</option>
      <option class=\"font-trebuchet       \" value=\"trebuchet\"       data-font-package=\"websafe\" >Trebuchet</option>
      <option class=\"font-courier         \" value=\"courier\"         data-font-package=\"websafe\" >Courier New</option>
      <option class=\"font-lucida_console  \" value=\"lucida_console\"  data-font-package=\"websafe\" >Lucida Console</option>
    </optgroup>
";
        $context["fontOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 285
        echo "
<div class=\"container-fluid\" style=\"position:relative\">
    ";
        // line 288
        echo "    <div class=\"\" style=\"display:none;height:100%;width:100%;position:absolute;left:0;top:0;background:rgb(255,255,255);background:rgba(235,235,235,0.8);z-index:2000;\">
        <div style=\"position:absolute; left:49%;top:35%;\" class=\"text-center\">
            <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 295
        echo "        <form class='form action_update_options_string_form' action=''>

            ";
        // line 298
        echo "            ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 299
            echo "                <div class='row' id=\"general_inherit_active\">
                    <div class='form-group row'>
                        <label for='simple_edit_options_general_inherit' class='control-label'>";
            // line 301
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit everything"));
            echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_on\" name='general_inherit' type='radio' value='on' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 306
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
            echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_off\" name='general_inherit' type='radio' value='off' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 310
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
            echo "
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row action_hide_on_inherit\">
                    <hr/>
                </div>
            ";
        }
        // line 320
        echo "
            ";
        // line 322
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4 col-lg-2'>

                    ";
        // line 326
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_ajaxmode' class='control-label'> ";
        // line 327
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Ajax mode"));
        echo " </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 332
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 336
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 339
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 340
            echo "                                    <label class=\"btn btn-default\">
                                        <input name='ajaxmode' type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                        ";
            // line 342
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 345
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 351
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_container' class='control-label'> ";
        // line 353
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Survey container"));
        echo " </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='on' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 358
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='off' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 362
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 365
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 366
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='container' value='inherit' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                        ";
            // line 368
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 371
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 377
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionborder' class='control-label'>";
        // line 379
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question borders"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='on' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    ";
        // line 384
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='off' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    ";
        // line 388
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>

                                ";
        // line 392
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 393
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questionborder' value='inherit' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                        ";
            // line 395
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 398
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 404
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questioncontainershadow' class='control-label'>";
        // line 406
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question shadow"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='on' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    ";
        // line 411
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='off' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    ";
        // line 415
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 418
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 419
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questioncontainershadow' value='inherit' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                        ";
            // line 421
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 424
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 430
        echo "                <div class='col-sm-12 col-md-4 col-lg-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_showpopups' class='control-label' ";
        // line 432
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled_qtip"] ?? null));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Show popups"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default control-label\" ";
        // line 435
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='1' ";
        // line 436
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 437
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Popup"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 439
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='0' ";
        // line 440
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 441
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("On page"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 443
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='-1' ";
        // line 444
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 445
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Off"));
        echo "
                                    </label>
                                    ";
        // line 448
        echo "                                    ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 449
            echo "                                        <label class=\"btn btn-default\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
            echo ">
                                            <input type='radio' name='showpopups' value='inherit' class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                            ";
            // line 451
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                        </label>
                                    ";
        }
        // line 454
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            ";
        // line 461
        echo "            <div class='row action_hide_on_inherit'>
                ";
        // line 463
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_zebrastriping' class='control-label'>";
        // line 465
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Zebra-striped questions"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='on' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    ";
        // line 470
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='off' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    ";
        // line 474
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 477
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 478
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='zebrastriping' value='inherit' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                        ";
            // line 480
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 483
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 488
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_stickymatrixheaders' class='control-label'>";
        // line 490
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Sticky array headers"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='on' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    ";
        // line 495
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='off' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    ";
        // line 499
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 502
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 503
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='stickymatrixheaders' value='inherit' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                        ";
            // line 505
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 508
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 513
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_greyoutselected' class='control-label'>";
        // line 515
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Dim answered array rows"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='on' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    ";
        // line 520
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='off' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    ";
        // line 524
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 527
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 528
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='greyoutselected' value='inherit' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                        ";
            // line 530
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 533
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 538
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_hideprivacyinfo' class='control-label'>";
        // line 540
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Hide privacy info"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='on' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 545
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='off' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 549
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 552
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 553
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='hideprivacyinfo' value='inherit' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                        ";
            // line 555
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 558
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 563
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_crosshover' class='control-label'>";
        // line 565
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Cross-hover in matrix questions"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='on' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    ";
        // line 570
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='off' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    ";
        // line 574
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 577
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 578
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='crosshover' value='inherit' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                        ";
            // line 580
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 583
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

            <div class='row action_hide_on_inherit'>

                ";
        // line 596
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_bodybackgroundcolor' class='control-label'>";
        // line 598
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"bodybackgroundcolor_picker\" data-value=\"";
        // line 601
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "bodybackgroundcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"bodybackgroundcolor\" data-inheritvalue=\"";
        // line 603
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "bodybackgroundcolor", array()));
        echo "\" value=\"inherit\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_bodybackgroundcolor\" data-id=\"bodybackgroundcolor\" />
                            ";
        // line 604
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 605
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 609
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 615
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fontcolor' class='control-label'>";
        // line 617
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Font color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"fontcolor_picker\" data-value=\"";
        // line 620
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "fontcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"fontcolor\" value=\"inherit\" data-inheritvalue=\"";
        // line 622
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "fontcolor", array()));
        echo "\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_fontcolor\" data-id=\"fontcolor\" />
                            ";
        // line 623
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 624
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 628
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 633
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionbackgroundcolor' class='control-label'>";
        // line 635
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question background color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"questionbackgroundcolor_picker\" data-value=\"";
        // line 638
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "questionbackgroundcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"questionbackgroundcolor\" value=\"inherit\" data-inheritvalue=\"";
        // line 640
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "questionbackgroundcolor", array()));
        echo "\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_questionbackgroundcolor\" data-id=\"questionbackgroundcolor\" />
                            ";
        // line 641
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 642
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 646
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 651
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_checkicon' class='control-label'>";
        // line 653
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Check icon"));
        echo "</label>
                        <div class=\"input-group\">
                            <select name=\"checkicon\" value=\"\" class=\"selector_option_value_field form-control simple_edit_options_checkicon\" data-id=\"checkicon\" >
                                ";
        // line 656
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkIconOptions"] ?? null));
        echo "
                            </select>
                            <div class=\"input-group-addon selector__checkicon-preview\">
                                ( <i class=\"fa\" data-inheritvalue=\"";
        // line 659
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "checkicon", array()));
        echo "\" style=\" background-color: #328637; color: white; width: 16px; height: 16px;  padding: 3px; font-size: 11px; \">
                                    &#x";
        // line 660
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "checkicon", array()));
        echo ";
                                </i> )
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

             <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 675
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimage' class='control-label'>";
        // line 676
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background image"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='on' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    ";
        // line 681
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='off' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    ";
        // line 685
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 688
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 689
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='backgroundimage' value='inherit' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                        ";
            // line 691
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 694
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-sm-8 col-md-6'>
                    ";
        // line 701
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimagefile' class='control-label'>";
        // line 702
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background image file"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"backgroundimage\" id='simple_edit_options_backgroundimagefile' name='backgroundimagefile'>
                                ";
        // line 705
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 706
            echo "                                    <option value=\"inherit\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "</option>
                                ";
        }
        // line 708
        echo "
                                ";
        // line 709
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 710
            echo "                                    <option data-lightbox-src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "preview", array()));
            echo "\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filepath", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filename", array()));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 712
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_backgroundimagefile\"> ";
        // line 718
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Preview image"));
        echo "</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 724
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogo' class='control-label'> ";
        // line 725
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Logo"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 730
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 734
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 737
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 738
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='brandlogo' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                        ";
            // line 740
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 743
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8 col-md-6'>
                    ";
        // line 749
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogofile' class='control-label'>";
        // line 750
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Logo file"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"brandlogo\" id='simple_edit_options_brandlogofile' name='brandlogofile'>
                                ";
        // line 753
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 754
            echo "                                    <option value=\"inherit\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "</option>
                                ";
        }
        // line 756
        echo "
                                ";
        // line 757
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 758
            echo "                                    <option data-lightbox-src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "preview", array()));
            echo "\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filepath", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filename", array()));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 760
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_brandlogofile\"> ";
        // line 766
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Preview image"));
        echo "</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    <div class='form-group row'>
                        ";
        // line 776
        echo "                        <label for='simple_edit_options_animatebody' class='control-label'>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate body"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    ";
        // line 781
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    ";
        // line 785
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 788
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 789
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                        ";
            // line 791
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 794
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 800
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimation' class='control-label'>";
        // line 801
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Body animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimation' name='bodyanimation'>
                                ";
        // line 804
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 811
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimationduration' class='control-label'>";
        // line 812
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimationduration' name='bodyanimationduration' />
                        </div>
                    </div>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 822
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatequestion' class='control-label'>";
        // line 823
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate question"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    ";
        // line 828
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    ";
        // line 832
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 835
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 836
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                        ";
            // line 838
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 841
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 847
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimation' class='control-label'>";
        // line 848
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimation' name='questionanimation'>
                                ";
        // line 851
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 858
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimationduration' class='control-label'>";
        // line 859
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimationduration' name='questionanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 868
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 871
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatealert' class='control-label'>";
        // line 872
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate alert"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    ";
        // line 877
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    ";
        // line 881
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 884
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 885
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                        ";
            // line 887
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 890
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 896
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimation' class='control-label'>";
        // line 897
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Alert animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimation' name='alertanimation'>
                                ";
        // line 900
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 907
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimationduration' class='control-label'>";
        // line 908
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimationduration' name='alertanimationduration'/>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 917
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 920
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatecheckbox' class='control-label'>";
        // line 921
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate checkbox"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    ";
        // line 926
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    ";
        // line 930
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 933
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 934
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                        ";
            // line 936
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 939
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 945
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimation' class='control-label'>";
        // line 946
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Alert animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimation' name='checkboxanimation'>
                                ";
        // line 949
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 956
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimationduration' class='control-label'>";
        // line 957
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimationduration' name='checkboxanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 966
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 969
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animateradio' class='control-label'>";
        // line 970
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate radio buttons"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    ";
        // line 975
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    ";
        // line 979
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 982
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 983
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                        ";
            // line 985
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 988
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 994
        echo "                <div class='col-sm-10 col-md-6'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimation' class='control-label'>";
        // line 997
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Radio button animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimation' name='radioanimation'>
                                ";
        // line 1000
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                ";
        // line 1006
        echo "                <div class='col-sm-2'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimationduration' class='control-label'>";
        // line 1009
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimationduration' name='radioanimationduration' />
                        </div>
                    </div>
                </div>
            </div>            
            <div class='row ls-space margin top-15 bottom-15 action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 1022
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_capitalize_string_filter($this->env, sprintf(gT("%s fonts"), $this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()))));
        echo "</div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_font' class='control-label'>";
        // line 1025
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select font:"));
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_option_value_field' id='simple_edit_font' name='font' data-inheritvalue='";
        // line 1027
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "packages_to_load", array()));
        echo "'>
                                        ";
        // line 1028
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row ls-space margin top-15 bottom-15 '>
                <hr/>
            </div>
            ";
        // line 1041
        echo "            <div class='row'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 1044
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_capitalize_string_filter($this->env, sprintf(gT("%s variations"), $this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()))));
        echo " </div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_add_css' class='control-label'>";
        // line 1047
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select variation:"));
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_cssframework_value_field' id='simple_edit_add_css' name='cssframework' data-inheritvalue='";
        // line 1049
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "files_css", array()));
        echo "'>
                                        ";
        // line 1050
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fruityOptions"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row hidden'>
                <div class='col-sm-12'>
                    <button class='btn btn-success col-md-2 col-sm-4 col-xs-6 action_update_options_string_button'>";
        // line 1060
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save"));
        echo " </button>
                </div>
            </div>
        </form>
    </div>
    <div class='row action_hide_on_inherit'>
        ";
        // line 1067
        echo "        <div class=\"container-fluid ls-space margin bottom-15\">
            <div class=\"row ls-space margin bottom-15\">
                <div class=\"col-sm-6\">
                    ";
        // line 1070
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Upload an image (maximum size: %d MB):"), (($this->getAttribute(($context["templateConfiguration"] ?? null), "maxFileSize", array()) / 1024) / 1024)));
        echo "
                </div>
                <div class=\"col-sm-6\">
                ";
        // line 1073
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => LS_Twig_Extension::createUrl("/admin/themes/sa/upload"), 1 => "post", 2 => array("id" => "upload_frontend", "name" => "upload_frontend", "enctype" => "multipart/form-data")), "method"));
        echo "
                    <span id=\"fileselector_frontend\">
                        <label class=\"btn btn-default col-xs-8\" for=\"upload_image_frontend\">
                            <input class=\"hidden\" id=\"upload_image_frontend\" name=\"upload_image_frontend\" type=\"file\">
                            <i class=\"fa fa-upload ls-space margin right-10\"></i>
                            ";
        // line 1078
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Upload"));
        echo "
                        </label>
                    </span>

                        <input type='hidden' name='templatename' value='";
        // line 1082
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()));
        echo "' />
                        <input type='hidden' name='templateconfig' value='";
        // line 1083
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "id", array()));
        echo "' />
                        <input type='hidden' name='action' value='templateuploadimagefile' />
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"progress\">
                    <div id=\"upload_progress_frontend\" class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                        <span class=\"sr-only\">0%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"lightbox-modal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title selector__title\"> </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <img class=\"selector__image img-responsive\" src=\"\" alt=\"title\"  />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__e06d4d15b65f805d9f4e16769b3e2659df6f2a24d9357ad6de582c080ef56afa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1751 => 1083,  1747 => 1082,  1740 => 1078,  1732 => 1073,  1726 => 1070,  1721 => 1067,  1712 => 1060,  1699 => 1050,  1695 => 1049,  1690 => 1047,  1684 => 1044,  1679 => 1041,  1664 => 1028,  1660 => 1027,  1655 => 1025,  1649 => 1022,  1633 => 1009,  1628 => 1006,  1620 => 1000,  1614 => 997,  1609 => 994,  1602 => 988,  1596 => 985,  1592 => 983,  1589 => 982,  1584 => 979,  1577 => 975,  1569 => 970,  1566 => 969,  1562 => 966,  1551 => 957,  1548 => 956,  1539 => 949,  1533 => 946,  1530 => 945,  1523 => 939,  1517 => 936,  1513 => 934,  1510 => 933,  1505 => 930,  1498 => 926,  1490 => 921,  1487 => 920,  1483 => 917,  1472 => 908,  1469 => 907,  1460 => 900,  1454 => 897,  1451 => 896,  1444 => 890,  1438 => 887,  1434 => 885,  1431 => 884,  1426 => 881,  1419 => 877,  1411 => 872,  1408 => 871,  1404 => 868,  1393 => 859,  1390 => 858,  1381 => 851,  1375 => 848,  1372 => 847,  1365 => 841,  1359 => 838,  1355 => 836,  1352 => 835,  1347 => 832,  1340 => 828,  1332 => 823,  1329 => 822,  1317 => 812,  1314 => 811,  1305 => 804,  1299 => 801,  1296 => 800,  1289 => 794,  1283 => 791,  1279 => 789,  1276 => 788,  1271 => 785,  1264 => 781,  1255 => 776,  1243 => 766,  1235 => 760,  1222 => 758,  1218 => 757,  1215 => 756,  1209 => 754,  1207 => 753,  1201 => 750,  1198 => 749,  1191 => 743,  1185 => 740,  1181 => 738,  1178 => 737,  1173 => 734,  1166 => 730,  1158 => 725,  1155 => 724,  1147 => 718,  1139 => 712,  1126 => 710,  1122 => 709,  1119 => 708,  1113 => 706,  1111 => 705,  1105 => 702,  1102 => 701,  1094 => 694,  1088 => 691,  1084 => 689,  1081 => 688,  1076 => 685,  1069 => 681,  1061 => 676,  1058 => 675,  1041 => 660,  1037 => 659,  1031 => 656,  1025 => 653,  1021 => 651,  1015 => 646,  1009 => 642,  1007 => 641,  1003 => 640,  998 => 638,  992 => 635,  988 => 633,  982 => 628,  976 => 624,  974 => 623,  970 => 622,  965 => 620,  959 => 617,  955 => 615,  948 => 609,  942 => 605,  940 => 604,  936 => 603,  931 => 601,  925 => 598,  921 => 596,  907 => 583,  901 => 580,  897 => 578,  894 => 577,  889 => 574,  882 => 570,  874 => 565,  870 => 563,  864 => 558,  858 => 555,  854 => 553,  851 => 552,  846 => 549,  839 => 545,  831 => 540,  827 => 538,  821 => 533,  815 => 530,  811 => 528,  808 => 527,  803 => 524,  796 => 520,  788 => 515,  784 => 513,  778 => 508,  772 => 505,  768 => 503,  765 => 502,  760 => 499,  753 => 495,  745 => 490,  741 => 488,  735 => 483,  729 => 480,  725 => 478,  722 => 477,  717 => 474,  710 => 470,  702 => 465,  698 => 463,  695 => 461,  687 => 454,  681 => 451,  675 => 449,  672 => 448,  667 => 445,  663 => 444,  659 => 443,  654 => 441,  650 => 440,  646 => 439,  641 => 437,  637 => 436,  633 => 435,  625 => 432,  621 => 430,  614 => 424,  608 => 421,  604 => 419,  601 => 418,  596 => 415,  589 => 411,  581 => 406,  577 => 404,  570 => 398,  564 => 395,  560 => 393,  557 => 392,  551 => 388,  544 => 384,  536 => 379,  532 => 377,  525 => 371,  519 => 368,  515 => 366,  512 => 365,  507 => 362,  500 => 358,  492 => 353,  488 => 351,  481 => 345,  475 => 342,  471 => 340,  468 => 339,  463 => 336,  456 => 332,  448 => 327,  445 => 326,  440 => 322,  437 => 320,  424 => 310,  417 => 306,  409 => 301,  405 => 299,  402 => 298,  398 => 295,  390 => 288,  386 => 285,  368 => 270,  357 => 262,  352 => 261,  350 => 260,  346 => 258,  342 => 256,  340 => 255,  336 => 252,  334 => 251,  331 => 249,  314 => 235,  312 => 234,  309 => 233,  305 => 231,  303 => 230,  300 => 228,  298 => 227,  295 => 226,  282 => 216,  280 => 215,  277 => 213,  273 => 211,  271 => 210,  268 => 208,  266 => 207,  263 => 205,  92 => 37,  90 => 36,  86 => 33,  84 => 32,  82 => 30,  77 => 27,  73 => 26,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  45 => 18,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__e06d4d15b65f805d9f4e16769b3e2659df6f2a24d9357ad6de582c080ef56afa", "");
    }
}
