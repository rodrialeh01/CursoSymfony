<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* utilidades/api_rest.html.twig */
class __TwigTemplate_cc6c96d29d6e25ebaabd176ea94daa7a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "template/frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilidades/api_rest.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilidades/api_rest.html.twig"));

        $this->parent = $this->loadTemplate("template/frontend.html.twig", "utilidades/api_rest.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Utilidades";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<nav aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb\">
    <li class=\"breadcrumb-item\"><a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_inicio");
        yield "\">Home</a></li>
    <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilidades_inicio");
        yield "\">Utilidades</a></li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">Consumir API Rest con HTTP Client</li>
  </ol>
</nav>
<h1>Consumir API Rest con HTTP Client</h1>
<p class=\"d-flex justify-content-end\">
\t<a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilidades_api_rest_crear");
        yield "\" class=\"btn btn-success\">
\t\t<i class=\"fas fa-check\"></i>
\t\tCrear
\t</a>
</p>

<div class=\"table-responsive\">
<table class=\"table table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Nombre</th>
\t\t\t<th>Acciones</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 31, $this->source); })()), "toArray", [], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 32
            yield "\t\t<tr>
\t\t<td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
\t\t<td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dato"], "nombre", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
\t\t<td style=\"text-align:center\">
\t\t\t<a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilidades_api_rest_editar", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\">
\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t</a>
\t\t\t<a href=\"javascript:void(0);\" onclick=\"confirmaAlert('Realmente desea eliminar este registro?', '";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilidades_api_rest_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "')\">
\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t</a>
\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dato'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "\t</tbody>
</table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "utilidades/api_rest.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  170 => 45,  158 => 39,  152 => 36,  147 => 34,  143 => 33,  140 => 32,  136 => 31,  117 => 15,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'template/frontend.html.twig' %}

{% block title %}Utilidades{% endblock %}

{% block body %}
<nav aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb\">
    <li class=\"breadcrumb-item\"><a href=\"{{path('home_inicio')}}\">Home</a></li>
    <li class=\"breadcrumb-item\"><a href=\"{{path('utilidades_inicio')}}\">Utilidades</a></li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">Consumir API Rest con HTTP Client</li>
  </ol>
</nav>
<h1>Consumir API Rest con HTTP Client</h1>
<p class=\"d-flex justify-content-end\">
\t<a href=\"{{path('utilidades_api_rest_crear')}}\" class=\"btn btn-success\">
\t\t<i class=\"fas fa-check\"></i>
\t\tCrear
\t</a>
</p>

<div class=\"table-responsive\">
<table class=\"table table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Nombre</th>
\t\t\t<th>Acciones</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for dato in response.toArray() %}
\t\t<tr>
\t\t<td>{{dato.id}}</td>
\t\t<td>{{dato.nombre}}</td>
\t\t<td style=\"text-align:center\">
\t\t\t<a href=\"{{ path('utilidades_api_rest_editar',{id: dato.id}) }}\">
\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t</a>
\t\t\t<a href=\"javascript:void(0);\" onclick=\"confirmaAlert('Realmente desea eliminar este registro?', '{{ path('utilidades_api_rest_delete', { id: dato.id }) }}')\">
\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t</a>
\t\t</td>
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>
</div>
{% endblock %}
", "utilidades/api_rest.html.twig", "/home/rodrialeh/Documentos/CursoSymfony/curso_1_cli/templates/utilidades/api_rest.html.twig");
    }
}
