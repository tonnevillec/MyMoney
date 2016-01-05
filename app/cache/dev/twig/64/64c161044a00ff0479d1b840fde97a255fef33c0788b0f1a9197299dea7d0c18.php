<?php

/* MYMoneyBundle::layout.html.twig */
class __TwigTemplate_ada5e24a597f5cdca6715a8c9eac8a882341dd2b35143679a453e0618bd61f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "MYMoneyBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'mymoney_body' => array($this, 'block_mymoney_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bfa4384e7a47e27a98d1cdf40de8c6a27a179319187c2b036fbe58e57342c4e = $this->env->getExtension("native_profiler");
        $__internal_7bfa4384e7a47e27a98d1cdf40de8c6a27a179319187c2b036fbe58e57342c4e->enter($__internal_7bfa4384e7a47e27a98d1cdf40de8c6a27a179319187c2b036fbe58e57342c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MYMoneyBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bfa4384e7a47e27a98d1cdf40de8c6a27a179319187c2b036fbe58e57342c4e->leave($__internal_7bfa4384e7a47e27a98d1cdf40de8c6a27a179319187c2b036fbe58e57342c4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b9bdd4b8d1a445d466c6cebc7fd58f960aab48d507f80e171d7fecf6d7c9d5a = $this->env->getExtension("native_profiler");
        $__internal_0b9bdd4b8d1a445d466c6cebc7fd58f960aab48d507f80e171d7fecf6d7c9d5a->enter($__internal_0b9bdd4b8d1a445d466c6cebc7fd58f960aab48d507f80e171d7fecf6d7c9d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  MyMoney - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0b9bdd4b8d1a445d466c6cebc7fd58f960aab48d507f80e171d7fecf6d7c9d5a->leave($__internal_0b9bdd4b8d1a445d466c6cebc7fd58f960aab48d507f80e171d7fecf6d7c9d5a_prof);

    }

    // line 7
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_953fcc44c30a02ed5566aaaf4e59c442afb22e2cc7b46732a9a73711f447fbda = $this->env->getExtension("native_profiler");
        $__internal_953fcc44c30a02ed5566aaaf4e59c442afb22e2cc7b46732a9a73711f447fbda->enter($__internal_953fcc44c30a02ed5566aaaf4e59c442afb22e2cc7b46732a9a73711f447fbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 8
        echo "\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t  <div class=\"container-fluid\">
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t        <span class=\"sr-only\">Toggle navigation</span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("my_money_homepage");
        echo "\"><i class=\"fa fa-krw fa-rotate-180\"></i><i class=\"fa fa-jpy\"></i><i class=\"fa fa-krw fa-rotate-180\"></i><i class=\"fa fa-refresh\"></i><i class=\"fa fa-ils\"></i><i class=\"fa fa-eur\"></i><i class=\"fa fa-jpy\"></i>
\t      </a>
\t    </div>
\t    <div id=\"navbar\" class=\"navbar-collapse collapse\">
\t      <ul class=\"nav navbar-nav navbar-right\">
\t        <li><a href=\"#\"><i class=\"fa fa-user-secret\"></i> Profil</a></li>
\t        <li><a href=\"#\"><i class=\"fa fa-info-circle\"></i> Aide</a></li>
\t      </ul>
\t    </div>
\t  </div>
\t</nav>
";
        
        $__internal_953fcc44c30a02ed5566aaaf4e59c442afb22e2cc7b46732a9a73711f447fbda->leave($__internal_953fcc44c30a02ed5566aaaf4e59c442afb22e2cc7b46732a9a73711f447fbda_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a2cca40fc89f19e3d354e3e37750f38e03574d8b745ecd33f8cea0a80b7a3c05 = $this->env->getExtension("native_profiler");
        $__internal_a2cca40fc89f19e3d354e3e37750f38e03574d8b745ecd33f8cea0a80b7a3c05->enter($__internal_a2cca40fc89f19e3d354e3e37750f38e03574d8b745ecd33f8cea0a80b7a3c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "    <div class=\"col-sm-3 col-md-2 sidebar\">
        <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("my_money_homepage");
        echo "\"><i class=\"fa fa-tachometer\"></i> Synthèse <span class=\"sr-only\">(current)</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-caret-square-o-right\"></i> Compte chèque</a></li>
            <li><a href=\"#\"><i class=\"fa fa-caret-square-o-right\"></i> Livret A</a></li>
            <li><a href=\"#\"><i class=\"fa fa-caret-square-o-right\"></i> PEL</a></li>
        </ul>
        ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "        <ul class=\"nav nav-sidebar\">
            <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("my_money_admin");
            echo "\"><i class=\"fa fa-gears\"></i> Administration</a></li>
        </ul>
        ";
        }
        // line 43
        echo "    </div>
";
        
        $__internal_a2cca40fc89f19e3d354e3e37750f38e03574d8b745ecd33f8cea0a80b7a3c05->leave($__internal_a2cca40fc89f19e3d354e3e37750f38e03574d8b745ecd33f8cea0a80b7a3c05_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7dff082476760f9c09ca84a51fa85f4b3e7c822df39ed8b5779db7ce268d9b7 = $this->env->getExtension("native_profiler");
        $__internal_a7dff082476760f9c09ca84a51fa85f4b3e7c822df39ed8b5779db7ce268d9b7->enter($__internal_a7dff082476760f9c09ca84a51fa85f4b3e7c822df39ed8b5779db7ce268d9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "  ";
        $this->displayBlock('mymoney_body', $context, $blocks);
        
        $__internal_a7dff082476760f9c09ca84a51fa85f4b3e7c822df39ed8b5779db7ce268d9b7->leave($__internal_a7dff082476760f9c09ca84a51fa85f4b3e7c822df39ed8b5779db7ce268d9b7_prof);

    }

    public function block_mymoney_body($context, array $blocks = array())
    {
        $__internal_49e0d5ac318cd2eb973158a4d3d31762bd64d1f42d16c6ac0c2899b21f572991 = $this->env->getExtension("native_profiler");
        $__internal_49e0d5ac318cd2eb973158a4d3d31762bd64d1f42d16c6ac0c2899b21f572991->enter($__internal_49e0d5ac318cd2eb973158a4d3d31762bd64d1f42d16c6ac0c2899b21f572991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mymoney_body"));

        // line 48
        echo "  ";
        
        $__internal_49e0d5ac318cd2eb973158a4d3d31762bd64d1f42d16c6ac0c2899b21f572991->leave($__internal_49e0d5ac318cd2eb973158a4d3d31762bd64d1f42d16c6ac0c2899b21f572991_prof);

    }

    public function getTemplateName()
    {
        return "MYMoneyBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 48,  133 => 47,  127 => 46,  119 => 43,  113 => 40,  110 => 39,  108 => 38,  100 => 33,  96 => 31,  90 => 30,  71 => 17,  60 => 8,  54 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   MyMoney - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block navbar %}*/
/* 	<nav class="navbar navbar-inverse navbar-fixed-top">*/
/* 	  <div class="container-fluid">*/
/* 	    <div class="navbar-header">*/
/* 	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 	        <span class="sr-only">Toggle navigation</span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	      </button>*/
/* 	      <a class="navbar-brand" href="{{ path('my_money_homepage') }}"><i class="fa fa-krw fa-rotate-180"></i><i class="fa fa-jpy"></i><i class="fa fa-krw fa-rotate-180"></i><i class="fa fa-refresh"></i><i class="fa fa-ils"></i><i class="fa fa-eur"></i><i class="fa fa-jpy"></i>*/
/* 	      </a>*/
/* 	    </div>*/
/* 	    <div id="navbar" class="navbar-collapse collapse">*/
/* 	      <ul class="nav navbar-nav navbar-right">*/
/* 	        <li><a href="#"><i class="fa fa-user-secret"></i> Profil</a></li>*/
/* 	        <li><a href="#"><i class="fa fa-info-circle"></i> Aide</a></li>*/
/* 	      </ul>*/
/* 	    </div>*/
/* 	  </div>*/
/* 	</nav>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="col-sm-3 col-md-2 sidebar">*/
/*         <ul class="nav nav-sidebar">*/
/*             <li class="active"><a href="{{ path('my_money_homepage') }}"><i class="fa fa-tachometer"></i> Synthèse <span class="sr-only">(current)</span></a></li>*/
/*             <li><a href="#"><i class="fa fa-caret-square-o-right"></i> Compte chèque</a></li>*/
/*             <li><a href="#"><i class="fa fa-caret-square-o-right"></i> Livret A</a></li>*/
/*             <li><a href="#"><i class="fa fa-caret-square-o-right"></i> PEL</a></li>*/
/*         </ul>*/
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*         <ul class="nav nav-sidebar">*/
/*             <li><a href="{{ path('my_money_admin') }}"><i class="fa fa-gears"></i> Administration</a></li>*/
/*         </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {% block mymoney_body %}*/
/*   {% endblock %}*/
/* {% endblock %}*/
