<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_86f445a5fbd3da6f1cff69f430f5137196d97dfd993e7b80183b2a70825a46fd extends Twig_Template
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
        $__internal_652ac01d99000524a803f77c47e931ba58cca5e70d104fbdcf248204e0765ebf = $this->env->getExtension("native_profiler");
        $__internal_652ac01d99000524a803f77c47e931ba58cca5e70d104fbdcf248204e0765ebf->enter($__internal_652ac01d99000524a803f77c47e931ba58cca5e70d104fbdcf248204e0765ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_652ac01d99000524a803f77c47e931ba58cca5e70d104fbdcf248204e0765ebf->leave($__internal_652ac01d99000524a803f77c47e931ba58cca5e70d104fbdcf248204e0765ebf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
