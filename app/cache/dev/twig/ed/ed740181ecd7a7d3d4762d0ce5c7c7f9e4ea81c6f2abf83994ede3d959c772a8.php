<?php

/* ::layout.html.twig */
class __TwigTemplate_9a83aa3eff72846175761bd9f20b7dd9d1e89c8120e3536a45e324aa6b744f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_990cf2b3255ebc271b97bf1c3dd02e0da2c24ab5a2cd7e5f4cef6ee792c09d5c = $this->env->getExtension("native_profiler");
        $__internal_990cf2b3255ebc271b97bf1c3dd02e0da2c24ab5a2cd7e5f4cef6ee792c09d5c->enter($__internal_990cf2b3255ebc271b97bf1c3dd02e0da2c24ab5a2cd7e5f4cef6ee792c09d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "</head>

<body>
    ";
        // line 28
        $this->displayBlock('navbar', $context, $blocks);
        // line 30
        echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 33
        $this->displayBlock('sidebar', $context, $blocks);
        // line 35
        echo "
            ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>
    </div>

    ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "</body>
</html>";
        
        $__internal_990cf2b3255ebc271b97bf1c3dd02e0da2c24ab5a2cd7e5f4cef6ee792c09d5c->leave($__internal_990cf2b3255ebc271b97bf1c3dd02e0da2c24ab5a2cd7e5f4cef6ee792c09d5c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f47ab4c9ea7fc630051cb735fc83a0f5428be247b7d1713936cfe3376c59be34 = $this->env->getExtension("native_profiler");
        $__internal_f47ab4c9ea7fc630051cb735fc83a0f5428be247b7d1713936cfe3376c59be34->enter($__internal_f47ab4c9ea7fc630051cb735fc83a0f5428be247b7d1713936cfe3376c59be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MyMoney";
        
        $__internal_f47ab4c9ea7fc630051cb735fc83a0f5428be247b7d1713936cfe3376c59be34->leave($__internal_f47ab4c9ea7fc630051cb735fc83a0f5428be247b7d1713936cfe3376c59be34_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d38cf71032c0d563f6491195022845afebb51b573d144ee49ef8fa13a408adb = $this->env->getExtension("native_profiler");
        $__internal_5d38cf71032c0d563f6491195022845afebb51b573d144ee49ef8fa13a408adb->enter($__internal_5d38cf71032c0d563f6491195022845afebb51b573d144ee49ef8fa13a408adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "      <!-- Bootstrap core CSS -->    
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

        <!-- Custom styles for this template -->
    \t";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "035fca6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_035fca6_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/035fca6_dashboard_1.css");
            // line 22
            echo "    \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    \t";
            // asset "035fca6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_035fca6_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/035fca6_evenlist_2.css");
            echo "    \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    \t";
            // asset "035fca6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_035fca6_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/035fca6_breadcrumb_3.css");
            echo "    \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    \t";
        } else {
            // asset "035fca6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_035fca6") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/035fca6.css");
            echo "    \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    \t";
        }
        unset($context["asset_url"]);
        // line 24
        echo "    ";
        
        $__internal_5d38cf71032c0d563f6491195022845afebb51b573d144ee49ef8fa13a408adb->leave($__internal_5d38cf71032c0d563f6491195022845afebb51b573d144ee49ef8fa13a408adb_prof);

    }

    // line 28
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_8c196a3c0751783af054761b2cd597f5f5fe79c905e9321d0f13c3778d5458d6 = $this->env->getExtension("native_profiler");
        $__internal_8c196a3c0751783af054761b2cd597f5f5fe79c905e9321d0f13c3778d5458d6->enter($__internal_8c196a3c0751783af054761b2cd597f5f5fe79c905e9321d0f13c3778d5458d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 29
        echo "    ";
        
        $__internal_8c196a3c0751783af054761b2cd597f5f5fe79c905e9321d0f13c3778d5458d6->leave($__internal_8c196a3c0751783af054761b2cd597f5f5fe79c905e9321d0f13c3778d5458d6_prof);

    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6530f8b8a7e3e168dc36647a3d984e0830840d833cf3190852c993d4d198028b = $this->env->getExtension("native_profiler");
        $__internal_6530f8b8a7e3e168dc36647a3d984e0830840d833cf3190852c993d4d198028b->enter($__internal_6530f8b8a7e3e168dc36647a3d984e0830840d833cf3190852c993d4d198028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 34
        echo "            ";
        
        $__internal_6530f8b8a7e3e168dc36647a3d984e0830840d833cf3190852c993d4d198028b->leave($__internal_6530f8b8a7e3e168dc36647a3d984e0830840d833cf3190852c993d4d198028b_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f0681e9535535faf1060581c98529c3a0ff2581803c5fd1f8aa7b8e56fd0bc9 = $this->env->getExtension("native_profiler");
        $__internal_0f0681e9535535faf1060581c98529c3a0ff2581803c5fd1f8aa7b8e56fd0bc9->enter($__internal_0f0681e9535535faf1060581c98529c3a0ff2581803c5fd1f8aa7b8e56fd0bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            ";
        
        $__internal_0f0681e9535535faf1060581c98529c3a0ff2581803c5fd1f8aa7b8e56fd0bc9->leave($__internal_0f0681e9535535faf1060581c98529c3a0ff2581803c5fd1f8aa7b8e56fd0bc9_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ade7f92ef71287bf0198fb7f85430f28b68671421a1e495778fb602bdbcc1c73 = $this->env->getExtension("native_profiler");
        $__internal_ade7f92ef71287bf0198fb7f85430f28b68671421a1e495778fb602bdbcc1c73->enter($__internal_ade7f92ef71287bf0198fb7f85430f28b68671421a1e495778fb602bdbcc1c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    \t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    \t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        
    \t";
        // line 45
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bbb6872_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbb6872_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbb6872_jquery.min_1.js");
            // line 49
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "bbb6872_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbb6872_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbb6872_holder.min_2.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "bbb6872_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbb6872_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbb6872_ie10-viewport-bug-workaround_3.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
        } else {
            // asset "bbb6872"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbb6872") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbb6872.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
        }
        unset($context["asset_url"]);
        // line 50
        echo " 
    ";
        
        $__internal_ade7f92ef71287bf0198fb7f85430f28b68671421a1e495778fb602bdbcc1c73->leave($__internal_ade7f92ef71287bf0198fb7f85430f28b68671421a1e495778fb602bdbcc1c73_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  222 => 50,  196 => 49,  192 => 45,  187 => 42,  181 => 41,  174 => 37,  168 => 36,  161 => 34,  155 => 33,  148 => 29,  142 => 28,  135 => 24,  109 => 22,  105 => 18,  99 => 14,  93 => 13,  81 => 11,  73 => 52,  71 => 41,  66 => 38,  64 => 36,  61 => 35,  59 => 33,  54 => 30,  52 => 28,  47 => 25,  45 => 13,  40 => 11,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}MyMoney{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*       <!-- Bootstrap core CSS -->    */
/*     	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/*         <!-- Custom styles for this template -->*/
/*     	{% stylesheets */
/*     		'@MYMoneyBundle/Resources/public/css/dashboard.css'*/
/*             '@MYMoneyBundle/Resources/public/css/evenlist.css'*/
/*             '@MYMoneyBundle/Resources/public/css/breadcrumb.css' %}*/
/*     		<link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*     	{% endstylesheets %}*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*     {% block navbar %}*/
/*     {% endblock %}*/
/* */
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             {% block sidebar %}*/
/*             {% endblock %}*/
/* */
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block javascripts %}*/
/*     	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         */
/*     	{% javascripts */
/*     		'@MYMoneyBundle/Resources/public/js/jquery.min.js'*/
/*     		'@MYMoneyBundle/Resources/public/js/holder.min.js'*/
/*     		'js/ie10-viewport-bug-workaround.js' %}*/
/*     		<script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     	{% endjavascripts %} */
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
