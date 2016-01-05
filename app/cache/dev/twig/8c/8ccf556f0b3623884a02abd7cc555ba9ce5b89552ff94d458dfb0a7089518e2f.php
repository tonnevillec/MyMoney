<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5142bbf44f9b7288459c311d731ad6158d0f0f9ee1f2ee32d4022fad812cf8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_061206bce382d49b8347e005119207207799705915e55d37eb755555f4682076 = $this->env->getExtension("native_profiler");
        $__internal_061206bce382d49b8347e005119207207799705915e55d37eb755555f4682076->enter($__internal_061206bce382d49b8347e005119207207799705915e55d37eb755555f4682076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_061206bce382d49b8347e005119207207799705915e55d37eb755555f4682076->leave($__internal_061206bce382d49b8347e005119207207799705915e55d37eb755555f4682076_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3fed631ea4b095cf05f81c0efeaaee824163748c1eafd971c91e74ccfef48aa = $this->env->getExtension("native_profiler");
        $__internal_d3fed631ea4b095cf05f81c0efeaaee824163748c1eafd971c91e74ccfef48aa->enter($__internal_d3fed631ea4b095cf05f81c0efeaaee824163748c1eafd971c91e74ccfef48aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d3fed631ea4b095cf05f81c0efeaaee824163748c1eafd971c91e74ccfef48aa->leave($__internal_d3fed631ea4b095cf05f81c0efeaaee824163748c1eafd971c91e74ccfef48aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
