<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_45df32cdce45169b5c9ad23da8e19634bfa4bda29f7acdcee9747b3ea359f27f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77574ba51ba2b162e0eaf2d2899c4dc06cc46fb4786bf07b9ed1a55c7b584a93 = $this->env->getExtension("native_profiler");
        $__internal_77574ba51ba2b162e0eaf2d2899c4dc06cc46fb4786bf07b9ed1a55c7b584a93->enter($__internal_77574ba51ba2b162e0eaf2d2899c4dc06cc46fb4786bf07b9ed1a55c7b584a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77574ba51ba2b162e0eaf2d2899c4dc06cc46fb4786bf07b9ed1a55c7b584a93->leave($__internal_77574ba51ba2b162e0eaf2d2899c4dc06cc46fb4786bf07b9ed1a55c7b584a93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47d78f64e0e8c8fa63ea6778b6a64576544b82413ce7451b5bf9b2ee63be403d = $this->env->getExtension("native_profiler");
        $__internal_47d78f64e0e8c8fa63ea6778b6a64576544b82413ce7451b5bf9b2ee63be403d->enter($__internal_47d78f64e0e8c8fa63ea6778b6a64576544b82413ce7451b5bf9b2ee63be403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_47d78f64e0e8c8fa63ea6778b6a64576544b82413ce7451b5bf9b2ee63be403d->leave($__internal_47d78f64e0e8c8fa63ea6778b6a64576544b82413ce7451b5bf9b2ee63be403d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48f95589b6a2ee32e8f6c767cf0a51c58ff8fc33f454ee29e3800b736a830add = $this->env->getExtension("native_profiler");
        $__internal_48f95589b6a2ee32e8f6c767cf0a51c58ff8fc33f454ee29e3800b736a830add->enter($__internal_48f95589b6a2ee32e8f6c767cf0a51c58ff8fc33f454ee29e3800b736a830add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48f95589b6a2ee32e8f6c767cf0a51c58ff8fc33f454ee29e3800b736a830add->leave($__internal_48f95589b6a2ee32e8f6c767cf0a51c58ff8fc33f454ee29e3800b736a830add_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8393586b7402b9202c574fb06135a9618517c77fb69946ee9bade9c60d83c091 = $this->env->getExtension("native_profiler");
        $__internal_8393586b7402b9202c574fb06135a9618517c77fb69946ee9bade9c60d83c091->enter($__internal_8393586b7402b9202c574fb06135a9618517c77fb69946ee9bade9c60d83c091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8393586b7402b9202c574fb06135a9618517c77fb69946ee9bade9c60d83c091->leave($__internal_8393586b7402b9202c574fb06135a9618517c77fb69946ee9bade9c60d83c091_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
