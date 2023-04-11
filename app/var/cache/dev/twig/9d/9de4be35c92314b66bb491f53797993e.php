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

/* neworder/index.html.twig */
class __TwigTemplate_c9552ed010437f6c8978c93864dddf41 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "neworder/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "neworder/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "neworder/index.html.twig", 1);
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

        echo "Заявки";
        
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
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Название</th>
                    <th scope=\"col\">Остаток</th>
                    <th scope=\"col\">Добавить в заказ</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"input-group\">
                                <input type=\"number\" class=\"form-control\" placeholder=\"Количество\" min=\"1\">
                                <button class=\"btn btn-success fn_add\" type=\"submit\" data-path=\"/order/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">Добавить</button> 
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tbody>
            </table>
        </div>
        <div class=\"col-sm-6\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <table class=\"table\" id=\"order_data\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Название</th>
                            <th scope=\"col\">Количество</th>
                            <th scope=\"col\">Цена</th>
                            <th scope=\"col\">Сумма</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>
            </div>
        </div>
        
        <div class=\"input-group mb-6\" id=\"orderplace\" style=\"display: none\">
            <span class=\"input-group-text\">Номер заказа:</span>
            <input readonly value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new RuntimeError('Variable "uuid" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\" class=\"order_id form-control\">
            <button class=\"btn btn-success fn_order\" type=\"submit\" data-path=\"/order/place\">Заказать</button> 
            <button class=\"btn btn-danger fn_cancel\" type=\"button\" data-path=\"/order/cancel\">Отменить</button>
        </div>
   </div>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "neworder/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 59,  135 => 34,  124 => 29,  117 => 25,  113 => 24,  110 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Заявки{% endblock %}

{% block body %}
<style>
 
</style>

<div class=\"container m-5\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Название</th>
                    <th scope=\"col\">Остаток</th>
                    <th scope=\"col\">Добавить в заказ</th>
                </tr>
                </thead>
                <tbody>
                {% for item in stock %}
                    <tr>
                        <td>{{ item.product }}</td>
                        <td>{{ item.quantity }}</td>
                        <td>
                            <div class=\"input-group\">
                                <input type=\"number\" class=\"form-control\" placeholder=\"Количество\" min=\"1\">
                                <button class=\"btn btn-success fn_add\" type=\"submit\" data-path=\"/order/{{ item.id }}\">Добавить</button> 
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"col-sm-6\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <table class=\"table\" id=\"order_data\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Название</th>
                            <th scope=\"col\">Количество</th>
                            <th scope=\"col\">Цена</th>
                            <th scope=\"col\">Сумма</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>
            </div>
        </div>
        
        <div class=\"input-group mb-6\" id=\"orderplace\" style=\"display: none\">
            <span class=\"input-group-text\">Номер заказа:</span>
            <input readonly value=\"{{ uuid }}\" class=\"order_id form-control\">
            <button class=\"btn btn-success fn_order\" type=\"submit\" data-path=\"/order/place\">Заказать</button> 
            <button class=\"btn btn-danger fn_cancel\" type=\"button\" data-path=\"/order/cancel\">Отменить</button>
        </div>
   </div>
</div>


{% endblock %}", "neworder/index.html.twig", "/var/www/templates/neworder/index.html.twig");
    }
}
