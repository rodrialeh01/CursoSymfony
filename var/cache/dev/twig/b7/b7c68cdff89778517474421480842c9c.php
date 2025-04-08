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

/* template/trabajo.html.twig */
class __TwigTemplate_2413cb3e3ab82629857baa022bb95e1f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/trabajo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/trabajo.html.twig"));

        // line 1
        yield "<h1>hola ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "</h1>
";
        // line 2
        $context["edad"] = 42;
        // line 3
        yield "<p>tu edad es ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["edad"]) || array_key_exists("edad", $context) ? $context["edad"] : (function () { throw new RuntimeError('Variable "edad" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</p>
";
        // line 4
        yield Twig\Extension\CoreExtension::include($this->env, $context, "include.html.twig");
        yield "

<p>
";
        // line 7
        $context["html"] = "<b>Hola soy un texto en negritas</b>";
        // line 8
        yield (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 8, $this->source); })());
        yield "
</p>

<p>
Variable global: ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tamila"]) || array_key_exists("tamila", $context) ? $context["tamila"] : (function () { throw new RuntimeError('Variable "tamila" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "
</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "template/trabajo.html.twig";
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
        return array (  75 => 12,  68 => 8,  66 => 7,  60 => 4,  55 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>hola {{nombre}}</h1>
{% set edad=42 %}
<p>tu edad es {{edad}}</p>
{{ include('include.html.twig')}}

<p>
{% set html = '<b>Hola soy un texto en negritas</b>' %}
{{html|raw}}
</p>

<p>
Variable global: {{tamila}}
</p>", "template/trabajo.html.twig", "/home/rodrialeh/Documentos/CursoSymfony/curso_1_cli/templates/template/trabajo.html.twig");
    }
}
