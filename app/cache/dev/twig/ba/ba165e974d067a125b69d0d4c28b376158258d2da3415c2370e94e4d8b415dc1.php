<?php

/* MYUserBundle:Security:login.html.twig */
class __TwigTemplate_07681b30ca0d2ecf1c02e44e1424e241d324df31dcd278b7d337b29c6e72150a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "MYUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b7f340a61170235f6e04af4712e3d751ae4307e008f82b0f1b4fb31899df28d = $this->env->getExtension("native_profiler");
        $__internal_1b7f340a61170235f6e04af4712e3d751ae4307e008f82b0f1b4fb31899df28d->enter($__internal_1b7f340a61170235f6e04af4712e3d751ae4307e008f82b0f1b4fb31899df28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MYUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7f340a61170235f6e04af4712e3d751ae4307e008f82b0f1b4fb31899df28d->leave($__internal_1b7f340a61170235f6e04af4712e3d751ae4307e008f82b0f1b4fb31899df28d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0871b656a43c64292571321835be21ee56f8609d1193ee626ad58f7421ddb606 = $this->env->getExtension("native_profiler");
        $__internal_0871b656a43c64292571321835be21ee56f8609d1193ee626ad58f7421ddb606->enter($__internal_0871b656a43c64292571321835be21ee56f8609d1193ee626ad58f7421ddb606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "
  ";
        // line 11
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        
        $__internal_0871b656a43c64292571321835be21ee56f8609d1193ee626ad58f7421ddb606->leave($__internal_0871b656a43c64292571321835be21ee56f8609d1193ee626ad58f7421ddb606_prof);

    }

    public function getTemplateName()
    {
        return "MYUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  55 => 11,  52 => 9,  46 => 7,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* */
/* {% endblock %}*/
