<?php

/* MYMoneyBundle:Default:index.html.twig */
class __TwigTemplate_2aefb298ca1f9e295b183ecdea50d0a041157a24b89c136c96c4bc3dd3e10219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MYMoneyBundle::layout.html.twig", "MYMoneyBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'mymoney_body' => array($this, 'block_mymoney_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MYMoneyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_144d43c7fb78009154a5fa3235c38ddd091617956c129a07b9071bba09cb4344 = $this->env->getExtension("native_profiler");
        $__internal_144d43c7fb78009154a5fa3235c38ddd091617956c129a07b9071bba09cb4344->enter($__internal_144d43c7fb78009154a5fa3235c38ddd091617956c129a07b9071bba09cb4344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MYMoneyBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144d43c7fb78009154a5fa3235c38ddd091617956c129a07b9071bba09cb4344->leave($__internal_144d43c7fb78009154a5fa3235c38ddd091617956c129a07b9071bba09cb4344_prof);

    }

    // line 3
    public function block_mymoney_body($context, array $blocks = array())
    {
        $__internal_a1eafa2c337d98f32b049261dfa42dd62febc5a7b64b9c0880ab6bbad9743865 = $this->env->getExtension("native_profiler");
        $__internal_a1eafa2c337d98f32b049261dfa42dd62febc5a7b64b9c0880ab6bbad9743865->enter($__internal_a1eafa2c337d98f32b049261dfa42dd62febc5a7b64b9c0880ab6bbad9743865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mymoney_body"));

        // line 4
        echo "        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
          \t<h1 class=\"page-header\"><i class=\"fa fa-tachometer\"></i> Synthèse<span class=\"pull-right\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("my_money_account_add");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Nouveau compte</a></span></h1>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"[ col-xs-12 ]\">
\t\t\t\t\t<ul class=\"event-list\">
\t\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) ? $context["accounts"] : $this->getContext($context, "accounts")));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 11
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<time datetime=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["account"], "lastupdate", array()), "Y-m-d Hi"), "html", null, true);
            echo "\" class=\"";
            if ($this->getAttribute($context["account"], "enabled", array())) {
                echo "bgc-ena";
            } else {
                echo "bgc-dis";
            }
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"day\">";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["account"], "lastupdate", array()), "d"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"month\">";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["account"], "lastupdate", array()), "M"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"year\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["account"], "lastupdate", array()), "Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"time\">";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["account"], "lastupdate", array()), "H:i"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<h2 class=\"title\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_money_account", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "name", array()), "html", null, true);
            echo "</a></h2>
\t\t\t\t\t\t\t\t<p class=\"desc\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["account"], "banks", array()), "name", array()), "html", null, true);
            echo " : compte N° ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "number", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Solde courant :<br /> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "total", array()), "html", null, true);
            echo " <span class=\"fa fa-eur\"></span></li>
\t\t\t\t\t\t\t\t\t<li>Solde prévisionnel :<br /> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "onwait", array()), "html", null, true);
            echo " <span class=\"fa fa-eur\"></span></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"compte_table\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_money_account", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\"><span class=\"fa fa-table\"></span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"compte_admin\"><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_money_account_edit", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\"><span class=\"fa fa-gears\"></span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"compte_delete\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_money_account_delete", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\"><span class=\"fa fa-trash\"></span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<h2 class=\"sub-header\"><i class=\"fa fa-calendar-check-o\"></i> Derniers mouvements</h2>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Date valeur</th>
\t\t\t\t\t\t\t<th>Validation</th>
\t\t\t\t\t\t\t<th>Compte</th>
\t\t\t\t\t\t\t<th>Cat.</th>
\t\t\t\t\t\t\t<th>Libellé</th>
\t\t\t\t\t\t\t<th>Mode</th>
\t\t\t\t\t\t\t<th>Débit</th>
\t\t\t\t\t\t\t<th>Crédit</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : $this->getContext($context, "transactions")));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 56
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaction"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaction"], "checkdate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transaction"], "account", array()), "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transaction"], "category", array()), "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transaction"], "paymode", array()), "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 63
            if (($this->getAttribute($context["transaction"], "type", array()) == "DEBIT")) {
                // line 64
                echo "\t\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "value", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "value", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
      \t</div>
";
        
        $__internal_a1eafa2c337d98f32b049261dfa42dd62febc5a7b64b9c0880ab6bbad9743865->leave($__internal_a1eafa2c337d98f32b049261dfa42dd62febc5a7b64b9c0880ab6bbad9743865_prof);

    }

    public function getTemplateName()
    {
        return "MYMoneyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 72,  200 => 70,  195 => 68,  192 => 67,  185 => 64,  183 => 63,  179 => 62,  175 => 61,  171 => 60,  167 => 59,  163 => 58,  159 => 57,  156 => 56,  152 => 55,  130 => 35,  119 => 30,  115 => 29,  111 => 28,  103 => 23,  99 => 22,  92 => 20,  86 => 19,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  58 => 12,  55 => 11,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MYMoneyBundle::layout.html.twig" %}*/
/* */
/* {% block mymoney_body %}*/
/*         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*           	<h1 class="page-header"><i class="fa fa-tachometer"></i> Synthèse<span class="pull-right"><a href="{{ path('my_money_account_add') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nouveau compte</a></span></h1>*/
/* */
/* 			<div class="row">*/
/* 				<div class="[ col-xs-12 ]">*/
/* 					<ul class="event-list">*/
/* 						{% for account in accounts %}*/
/* 						<li>*/
/* 							<time datetime="{{ account.lastupdate|date('Y-m-d Hi') }}" class="{% if account.enabled %}bgc-ena{% else %}bgc-dis{% endif %}">*/
/* 								<span class="day">{{ account.lastupdate|date('d') }}</span>*/
/* 								<span class="month">{{ account.lastupdate|date('M') }}</span>*/
/* 								<span class="year">{{ account.lastupdate|date('Y') }}</span>*/
/* 								<span class="time">{{ account.lastupdate|date('H:i') }}</span>*/
/* 							</time>*/
/* 							<div class="info">*/
/* 								<h2 class="title"><a href="{{ path('my_money_account', {'id': account.id }) }}"><i class="fa fa-"></i> {{ account.name }}</a></h2>*/
/* 								<p class="desc">{{ account.banks.name }} : compte N° {{ account.number }}</p>*/
/* 								<ul>*/
/* 									<li>Solde courant :<br /> {{ account.total }} <span class="fa fa-eur"></span></li>*/
/* 									<li>Solde prévisionnel :<br /> {{ account.onwait }} <span class="fa fa-eur"></span></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 							<div class="social">*/
/* 								<ul>*/
/* 									<li class="compte_table"><a href="{{ path('my_money_account', {'id': account.id }) }}"><span class="fa fa-table"></span></a></li>*/
/* 									<li class="compte_admin"><a href="{{ path('my_money_account_edit', {'id': account.id}) }}"><span class="fa fa-gears"></span></a></li>*/
/* 									<li class="compte_delete"><a href="{{ path('my_money_account_delete', {'id': account.id}) }}"><span class="fa fa-trash"></span></a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<h2 class="sub-header"><i class="fa fa-calendar-check-o"></i> Derniers mouvements</h2>*/
/* 			<div class="table-responsive">*/
/* 				<table class="table">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>Date valeur</th>*/
/* 							<th>Validation</th>*/
/* 							<th>Compte</th>*/
/* 							<th>Cat.</th>*/
/* 							<th>Libellé</th>*/
/* 							<th>Mode</th>*/
/* 							<th>Débit</th>*/
/* 							<th>Crédit</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 					{% for transaction in transactions %}*/
/* 						<tr>*/
/* 							<td>{{ transaction.date|date('d/m/Y') }}</td>*/
/* 							<td>{{ transaction.checkdate|date('d/m/Y') }}</td>*/
/* 							<td>{{ transaction.account.name }}</td>*/
/* 							<td>{{ transaction.category.name }}</td>*/
/* 							<td>{{ transaction.name }}</td>*/
/* 							<td>{{ transaction.paymode.name }}</td>*/
/* 							{% if transaction.type == 'DEBIT' %}*/
/* 								<td>{{ transaction.value }}</td>*/
/* 								<td></td>*/
/* 							{% else %}*/
/* 								<td></td>*/
/* 								<td>{{ transaction.value }}</td>*/
/* 							{% endif %}*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/*       	</div>*/
/* {% endblock %}*/
