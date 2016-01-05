<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_53741dec8b2971acff63c321c77d6a70916d471e9c40419943ec6d9d5ed9826e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_566c5157db058360f451fe897e555b6b1e4308f44089346379a0ef6e3dcddfbf = $this->env->getExtension("native_profiler");
        $__internal_566c5157db058360f451fe897e555b6b1e4308f44089346379a0ef6e3dcddfbf->enter($__internal_566c5157db058360f451fe897e555b6b1e4308f44089346379a0ef6e3dcddfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_566c5157db058360f451fe897e555b6b1e4308f44089346379a0ef6e3dcddfbf->leave($__internal_566c5157db058360f451fe897e555b6b1e4308f44089346379a0ef6e3dcddfbf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b6b8ad4bd150bc83ebc4f1b75aad3afd28b840310652c49c55dddec6f74f366 = $this->env->getExtension("native_profiler");
        $__internal_7b6b8ad4bd150bc83ebc4f1b75aad3afd28b840310652c49c55dddec6f74f366->enter($__internal_7b6b8ad4bd150bc83ebc4f1b75aad3afd28b840310652c49c55dddec6f74f366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  ";
        // line 7
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
  ";
        // line 14
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_7b6b8ad4bd150bc83ebc4f1b75aad3afd28b840310652c49c55dddec6f74f366->leave($__internal_7b6b8ad4bd150bc83ebc4f1b75aad3afd28b840310652c49c55dddec6f74f366_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19d48f9e8e0cf55f76b53300ca4404d84ad970644f5950dff1c621552c72472d = $this->env->getExtension("native_profiler");
        $__internal_19d48f9e8e0cf55f76b53300ca4404d84ad970644f5950dff1c621552c72472d->enter($__internal_19d48f9e8e0cf55f76b53300ca4404d84ad970644f5950dff1c621552c72472d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "  ";
        
        $__internal_19d48f9e8e0cf55f76b53300ca4404d84ad970644f5950dff1c621552c72472d->leave($__internal_19d48f9e8e0cf55f76b53300ca4404d84ad970644f5950dff1c621552c72472d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  77 => 14,  69 => 16,  66 => 14,  63 => 12,  54 => 9,  49 => 8,  44 => 7,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*   {% for key, message in app.session.flashbag.all() %}*/
/*     <div class="alert alert-{{ key }}">*/
/*       {{ message|trans({}, 'FOSUserBundle') }}*/
/*     </div>*/
/*   {% endfor %}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
