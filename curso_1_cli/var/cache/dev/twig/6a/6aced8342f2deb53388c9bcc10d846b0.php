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

/* formularios/simple.html.twig */
class __TwigTemplate_9520dc18dda2860b8e87d89a170583b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formularios/simple.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formularios/simple.html.twig"));

        $this->parent = $this->loadTemplate("template/frontend.html.twig", "formularios/simple.html.twig", 1);
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

        yield "Formularios";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formularios_inicio");
        yield "\">Formularios</a></li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">Formularios simple</li>
  </ol>
</nav>
<h1>Formulario Simple</h1>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["mensaje"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "\t<div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["css"], "method", false, false, false, 15), 0, [], "array", false, false, false, 15), "html", null, true);
            yield " alert-dismissible fade show\" role=\"alert\">
\t";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t<button type=\"button\" class=\"btn-close\" data-bs-dissmiss=\"alert\" aria-label=\"Close\"></button>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "<form method=\"POST\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("formularios_simple");
        yield "\">
\t<div class=\"form-group\">
\t\t<label for=\"form_nombre\">Nombre:</label>
\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 23, $this->source); })()), "nombre", [], "any", false, false, false, 23), 'widget', ["required" => false, "attr" => ["placeholder" => "Nombre"]]);
        yield "
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"form_correo\">E-Mail:</label>
\t\t";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 27, $this->source); })()), "correo", [], "any", false, false, false, 27), 'widget', ["required" => false, "attr" => ["placeholder" => "E-Mail"]]);
        yield "
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"form_telefono\">Telefono:</label>
\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), "telefono", [], "any", false, false, false, 31), 'widget', ["required" => false, "attr" => ["placeholder" => "Telefono"]]);
        yield "
\t</div>
\t<hr/>
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("generico"), "html", null, true);
        yield "\"/>
\t<button type=\"submit\" title=\"Enviar\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Enviar</button>
</form>
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
        return "formularios/simple.html.twig";
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
        return array (  162 => 34,  156 => 31,  149 => 27,  142 => 23,  135 => 20,  125 => 16,  120 => 15,  116 => 14,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'template/frontend.html.twig' %}

{% block title %}Formularios{% endblock %}

{% block body %}
<nav aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb\">
    <li class=\"breadcrumb-item\"><a href=\"{{path('home_inicio')}}\">Home</a></li>
    <li class=\"breadcrumb-item\"><a href=\"{{path('formularios_inicio')}}\">Formularios</a></li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">Formularios simple</li>
  </ol>
</nav>
<h1>Formulario Simple</h1>
{% for message in app.flashes('mensaje')%}
\t<div class=\"alert alert-{{ app.flashes('css')[0] }} alert-dismissible fade show\" role=\"alert\">
\t{{ message }}
\t<button type=\"button\" class=\"btn-close\" data-bs-dissmiss=\"alert\" aria-label=\"Close\"></button>
\t</div>
{% endfor %}
<form method=\"POST\" action=\"{{url('formularios_simple')}}\">
\t<div class=\"form-group\">
\t\t<label for=\"form_nombre\">Nombre:</label>
\t\t{{ form_widget(formulario.nombre, {\"required\": false, \"attr\":{\"placeholder\":\"Nombre\"}}) }}
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"form_correo\">E-Mail:</label>
\t\t{{ form_widget(formulario.correo, {\"required\": false, \"attr\":{\"placeholder\":\"E-Mail\"}}) }}
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"form_telefono\">Telefono:</label>
\t\t{{ form_widget(formulario.telefono, {\"required\": false, \"attr\":{\"placeholder\":\"Telefono\"}}) }}
\t</div>
\t<hr/>
\t<input type=\"hidden\" name=\"token\" value=\"{{csrf_token('generico')}}\"/>
\t<button type=\"submit\" title=\"Enviar\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Enviar</button>
</form>
{% endblock %}", "formularios/simple.html.twig", "/home/rodrialeh/Documentos/CursoSymfony/curso_1_cli/templates/formularios/simple.html.twig");
    }
}
