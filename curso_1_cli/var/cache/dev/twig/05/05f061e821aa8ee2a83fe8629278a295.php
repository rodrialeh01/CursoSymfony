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

/* formularios/upload.html.twig */
class __TwigTemplate_427be398de41b8be09e62152c2cb5d2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formularios/upload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formularios/upload.html.twig"));

        $this->parent = $this->loadTemplate("template/frontend.html.twig", "formularios/upload.html.twig", 1);
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
    <li class=\"breadcrumb-item active\" aria-current=\"page\">Formularios Upload</li>
  </ol>
</nav>
<h1>Formulario Upload</h1>
";
        // line 14
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 14, $this->source); })())) {
            // line 15
            yield "\t<div class=\"alert alert-danger alert-dismissible fade show\">
\t\t<ul>
\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                yield "\t\t\t\t<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 18), "html", null, true);
                yield "</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "\t\t</ul>
\t</div>
";
        }
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["mensaje"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "\t<div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["css"], "method", false, false, false, 24), 0, [], "array", false, false, false, 24), "html", null, true);
            yield " alert-dismissible fade show\" role=\"alert\">
\t";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t<button type=\"button\" class=\"btn-close\" data-bs-dissmiss=\"alert\" aria-label=\"Close\"></button>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "<form method=\"POST\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("formularios_upload");
        yield "\" enctype=\"multipart/form-data\">
\t<div class=\"form-group\">
\t\t<label for=\"form_nombre\">Nombre:</label>
\t\t";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 32, $this->source); })()), "nombre", [], "any", false, false, false, 32), 'widget', ["required" => false, "attr" => ["placeholder" => "Nombre"]]);
        yield "
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"form_correo\">E-Mail:</label>
\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), "correo", [], "any", false, false, false, 36), 'widget', ["required" => false, "attr" => ["placeholder" => "E-Mail"]]);
        yield "
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"form_telefono\">Telefono:</label>
\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 40, $this->source); })()), "telefono", [], "any", false, false, false, 40), 'widget', ["required" => false, "attr" => ["placeholder" => "Telefono"]]);
        yield "
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"form_pais\">País:</label>
\t\t";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 44, $this->source); })()), "pais", [], "any", false, false, false, 44), 'widget', ["required" => false]);
        yield "
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"form_foto\">Foto (JPG|PNG):</label>
\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 48, $this->source); })()), "foto", [], "any", false, false, false, 48), 'widget');
        yield "
\t</div>
\t<hr/>
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 51
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
        return "formularios/upload.html.twig";
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
        return array (  200 => 51,  194 => 48,  187 => 44,  180 => 40,  173 => 36,  166 => 32,  159 => 29,  149 => 25,  144 => 24,  140 => 23,  135 => 20,  126 => 18,  122 => 17,  118 => 15,  116 => 14,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
    <li class=\"breadcrumb-item active\" aria-current=\"page\">Formularios Upload</li>
  </ol>
</nav>
<h1>Formulario Upload</h1>
{% if errors %}
\t<div class=\"alert alert-danger alert-dismissible fade show\">
\t\t<ul>
\t\t\t{% for error in errors %}
\t\t\t\t<li>{{ error.message }}</li>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>
{% endif %}
{% for message in app.flashes('mensaje')%}
\t<div class=\"alert alert-{{ app.flashes('css')[0] }} alert-dismissible fade show\" role=\"alert\">
\t{{ message }}
\t<button type=\"button\" class=\"btn-close\" data-bs-dissmiss=\"alert\" aria-label=\"Close\"></button>
\t</div>
{% endfor %}
<form method=\"POST\" action=\"{{url('formularios_upload')}}\" enctype=\"multipart/form-data\">
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
\t<div class=\"form-group\">
\t\t<label for=\"form_pais\">País:</label>
\t\t{{ form_widget(formulario.pais, {\"required\": false}) }}
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"form_foto\">Foto (JPG|PNG):</label>
\t\t{{ form_widget(formulario.foto) }}
\t</div>
\t<hr/>
\t<input type=\"hidden\" name=\"token\" value=\"{{csrf_token('generico')}}\"/>
\t<button type=\"submit\" title=\"Enviar\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Enviar</button>
</form>
{% endblock %}", "formularios/upload.html.twig", "/home/rodrialeh/Documentos/CursoSymfony/curso_1_cli/templates/formularios/upload.html.twig");
    }
}
