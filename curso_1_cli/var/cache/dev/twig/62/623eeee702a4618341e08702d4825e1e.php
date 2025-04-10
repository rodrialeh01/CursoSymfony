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

/* utilidades/pdf_generar.html.twig */
class __TwigTemplate_0c341caebcf9d792295b4d76116af2e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilidades/pdf_generar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilidades/pdf_generar.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
\t<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t<title>PDF ejemplo</title>
\t</head>
\t<body>
\t\t<div style=\"margin:0 auto;display: block; width: 500px;\">
\t\t\t<h1>Titulo</h1>
\t\t\t<table width=\"100%\" border=\"1\">
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t<img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\" style=\"width:200px;\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\tNombre:
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\tPaís:
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pais"]) || array_key_exists("pais", $context) ? $context["pais"] : (function () { throw new RuntimeError('Variable "pais" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\tTeléfono:
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["telefono"]) || array_key_exists("telefono", $context) ? $context["telefono"] : (function () { throw new RuntimeError('Variable "telefono" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "utilidades/pdf_generar.html.twig";
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
        return array (  95 => 37,  84 => 29,  73 => 21,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t<title>PDF ejemplo</title>
\t</head>
\t<body>
\t\t<div style=\"margin:0 auto;display: block; width: 500px;\">
\t\t\t<h1>Titulo</h1>
\t\t\t<table width=\"100%\" border=\"1\">
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t<img src=\"{{imageSrc}}\" style=\"width:200px;\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\tNombre:
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{nombre}}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\tPaís:
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{pais}}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\tTeléfono:
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{telefono}}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t</body>
</html>", "utilidades/pdf_generar.html.twig", "/home/rodrialeh/Documentos/CursoSymfony/curso_1_cli/templates/utilidades/pdf_generar.html.twig");
    }
}
