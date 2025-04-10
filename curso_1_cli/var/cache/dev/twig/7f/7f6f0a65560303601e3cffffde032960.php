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

/* template/frontend.html.twig */
class __TwigTemplate_f2f45483af95847352ae181ea8bb64f4 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/frontend.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/frontend.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"icon\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\">
\t<title>Curso Symfony - ";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilos.css")), "html", null, true);
        yield "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        yield "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.alerts.min.css")), "html", null, true);
        yield "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome-5-8/css/all.css")), "html", null, true);
        yield "\"/>
\t<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
\t<!-- Custom styles for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/blog.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
</head>
<body>
\t<div class=\"container\">
\t\t<header class=\"blog-header py-3\">
\t\t\t<div class=\"row flex-nowrap justify-content-between align-items-center\">
\t\t\t<div class=\"col-4 pt-1\">
\t\t\t\t<a class=\"link-secondary\" href=\"#\">Subscribe</a>
\t\t\t</div>
\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t<a class=\"blog-header-logo text-dark\" href=\"#\">Large</a>
\t\t\t</div>
\t\t\t<div class=\"col-4 d-flex justify-content-end align-items-center\">
\t\t\t\t<a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewBox=\"0 0 24 24\"><title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Sign up</a>
\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<div class=\"nav-scroller py-1 mb-2\">
\t\t\t<nav class=\"nav d-flex justify-content-between\">
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_inicio");
        yield "\">Home</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template_layout");
        yield "\">Template</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formularios_inicio");
        yield "\">Formularios</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilidades_inicio");
        yield "\">Utilidades</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helper_inicio");
        yield "\">Helper</a>
\t\t\t\t";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 59
            yield "\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_inicio");
            yield "\">Doctrine</a>
\t\t\t\t";
        }
        // line 61
        yield "\t\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 62
            yield "\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceso_registro");
            yield "\">Registro</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceso_login");
            yield "\">Login</a>
\t\t\t\t";
        }
        // line 65
        yield "\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 66
            yield "\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restringido_inicio");
            yield "\">Restringido</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceso_logout");
            yield "\">Salir</a>
\t\t\t\t";
        }
        // line 69
        yield "\t\t\t</nav>
\t\t</div>
\t\t</div>
\t<main class=\"container\">
\t\t";
        // line 73
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 74
        yield "\t</main>

\t<footer class=\"blog-footer\">
\t\t<p>Todos los derechos reservados - Desarrollado por Rodrigo Hernández</p>
\t</footer>
\t<script src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-2.0.0.min.js")), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js")), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.alerts.min.js")), "html", null, true);
        yield "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/funciones.js")), "html", null, true);
        yield "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "template/frontend.html.twig";
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
        return array (  242 => 73,  220 => 7,  206 => 82,  202 => 81,  198 => 80,  194 => 79,  187 => 74,  185 => 73,  179 => 69,  174 => 67,  169 => 66,  166 => 65,  161 => 63,  156 => 62,  153 => 61,  147 => 59,  145 => 58,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  99 => 30,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"icon\" href=\"{{asset('images/logo.png')}}\">
\t<title>Curso Symfony - {% block title %}{% endblock %}</title>
\t<link rel=\"stylesheet\" href=\"{{ absolute_url(asset('css/estilos.css')) }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ absolute_url(asset('css/bootstrap.min.css')) }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ absolute_url(asset('css/jquery.alerts.min.css')) }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ absolute_url(asset('fontawesome-5-8/css/all.css')) }}\"/>
\t<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
\t<!-- Custom styles for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"{{ absolute_url(asset('css/blog.css')) }}\" rel=\"stylesheet\">
</head>
<body>
\t<div class=\"container\">
\t\t<header class=\"blog-header py-3\">
\t\t\t<div class=\"row flex-nowrap justify-content-between align-items-center\">
\t\t\t<div class=\"col-4 pt-1\">
\t\t\t\t<a class=\"link-secondary\" href=\"#\">Subscribe</a>
\t\t\t</div>
\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t<a class=\"blog-header-logo text-dark\" href=\"#\">Large</a>
\t\t\t</div>
\t\t\t<div class=\"col-4 d-flex justify-content-end align-items-center\">
\t\t\t\t<a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewBox=\"0 0 24 24\"><title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
\t\t\t\t</a>
\t\t\t\t<a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Sign up</a>
\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<div class=\"nav-scroller py-1 mb-2\">
\t\t\t<nav class=\"nav d-flex justify-content-between\">
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('home_inicio')}}\">Home</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('template_layout')}}\">Template</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('formularios_inicio')}}\">Formularios</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('utilidades_inicio')}}\">Utilidades</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('helper_inicio')}}\">Helper</a>
\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('doctrine_inicio')}}\">Doctrine</a>
\t\t\t\t{% endif %}
\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') == false %}
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('acceso_registro')}}\">Registro</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('acceso_login')}}\">Login</a>
\t\t\t\t{% endif %}
\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('restringido_inicio')}}\">Restringido</a>
\t\t\t\t<a class=\"p-2 link-secondary\" href=\"{{path('acceso_logout')}}\">Salir</a>
\t\t\t\t{% endif %}
\t\t\t</nav>
\t\t</div>
\t\t</div>
\t<main class=\"container\">
\t\t{% block body %}{% endblock %}
\t</main>

\t<footer class=\"blog-footer\">
\t\t<p>Todos los derechos reservados - Desarrollado por Rodrigo Hernández</p>
\t</footer>
\t<script src=\"{{ absolute_url(asset('js/jquery-2.0.0.min.js')) }}\"></script>
\t<script src=\"{{ absolute_url(asset('js/bootstrap.js')) }}\"></script>
\t<script src=\"{{ absolute_url(asset('js/jquery.alerts.min.js')) }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ absolute_url(asset('js/funciones.js')) }}\"></script>
</body>
</html>", "template/frontend.html.twig", "/home/rodrialeh/Documentos/CursoSymfony/curso_1_cli/templates/template/frontend.html.twig");
    }
}
