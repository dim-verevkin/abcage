<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* supply/index.html.twig */
class __TwigTemplate_e1116eeab63e42cad689811f85c8f0d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supply/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supply/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "supply/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Поставки";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
 
</style>

<div class=\"container m-5\">

    <form method=\"post\" action=\"/supply/add\">
        <div class=\"row\">
            <div class=\"col-sm-2\">
                <label for=\"number\" class=\"form-label\">Номер</label>
                <input type=\"text\" class=\"form-control\" name=\"number\" required=\"required\">
            </div>
            <div class=\"col-sm-5\">
                <label for=\"name\" class=\"form-label\">Название</label>
                <input type=\"text\" class=\"form-control\" name=\"name\" required=\"required\">
            </div>
            <div class=\"col-sm-1\">
                <label for=\"quantity\" class=\"form-label\">Количество</label>
                <input type=\"number\" class=\"form-control\" name=\"quantity\" min=\"1\" required=\"required\">
            </div>
            <div class=\"col-sm-1\">
                <label for=\"amount\" class=\"form-label\">Стоимость</label>
                <input type=\"text\" class=\"form-control\" name=\"amount\" pattern = \"\\d+(\\.\\d{2})?\" required=\"required\">
            </div>
            <div class=\"col-sm-2\">
                <label for=\"date\" class=\"form-label\">Дата</label>
                <input type=\"date\" class=\"form-control\" name=\"date\" required=\"required\">
            </div>
            <div class=\"col-sm-1\">
                <label for=\"button\" class=\"form-label\">&nbsp;</label>
                <button type=\"submit\" class=\"btn btn-primary\" name=\"button\">Добавить</button>
            </div>
        </div>
    </form>

    <br /><br />
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Номер</th>
                <th scope=\"col\">Название</th>
                <th scope=\"col\">Количество</th>
                <th scope=\"col\">Стоимость</th>
                <th scope=\"col\">Дата</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["supply"]) || array_key_exists("supply", $context) ? $context["supply"] : (function () { throw new RuntimeError('Variable "supply" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "                <tr>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "number", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 59), "d.m.Y"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
        </table>
   
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "supply/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 62,  160 => 59,  156 => 58,  152 => 57,  148 => 56,  144 => 55,  141 => 54,  137 => 53,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Поставки{% endblock %}

{% block body %}
<style>
 
</style>

<div class=\"container m-5\">

    <form method=\"post\" action=\"/supply/add\">
        <div class=\"row\">
            <div class=\"col-sm-2\">
                <label for=\"number\" class=\"form-label\">Номер</label>
                <input type=\"text\" class=\"form-control\" name=\"number\" required=\"required\">
            </div>
            <div class=\"col-sm-5\">
                <label for=\"name\" class=\"form-label\">Название</label>
                <input type=\"text\" class=\"form-control\" name=\"name\" required=\"required\">
            </div>
            <div class=\"col-sm-1\">
                <label for=\"quantity\" class=\"form-label\">Количество</label>
                <input type=\"number\" class=\"form-control\" name=\"quantity\" min=\"1\" required=\"required\">
            </div>
            <div class=\"col-sm-1\">
                <label for=\"amount\" class=\"form-label\">Стоимость</label>
                <input type=\"text\" class=\"form-control\" name=\"amount\" pattern = \"\\d+(\\.\\d{2})?\" required=\"required\">
            </div>
            <div class=\"col-sm-2\">
                <label for=\"date\" class=\"form-label\">Дата</label>
                <input type=\"date\" class=\"form-control\" name=\"date\" required=\"required\">
            </div>
            <div class=\"col-sm-1\">
                <label for=\"button\" class=\"form-label\">&nbsp;</label>
                <button type=\"submit\" class=\"btn btn-primary\" name=\"button\">Добавить</button>
            </div>
        </div>
    </form>

    <br /><br />
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Номер</th>
                <th scope=\"col\">Название</th>
                <th scope=\"col\">Количество</th>
                <th scope=\"col\">Стоимость</th>
                <th scope=\"col\">Дата</th>
            </tr>
            </thead>
            <tbody>
            {% for item in supply %}
                <tr>
                    <td>{{ item.number }}</td>
                    <td>{{ item.product }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>{{ item.amount }}</td>
                    <td>{{ item.date | date(\"d.m.Y\") }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
   
</div>
{% endblock %}", "supply/index.html.twig", "/var/www/templates/supply/index.html.twig");
    }
}
