<?php

/* base.html.twig */
class __TwigTemplate_d2b783250b40f3e9c7fb74aacf3eb9d9183103662979ba19a8c096ed5f05deb7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'og_title' => [$this, 'block_og_title'],
            'og_description' => [$this, 'block_og_description'],
            'og_image' => [$this, 'block_og_image'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"has-navbar-fixed-top\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\"/>

    <meta property=\"og:title\" content=\"";
        // line 9
        $this->displayBlock('og_title', $context, $blocks);
        echo "\">
    <meta property=\"og:site_name\" content=\"Remote Vacancy\">
    <meta property=\"twitter:card\" content=\"summary\">
    <meta property=\"twitter:site\" content=\"@remote_vacancy\">
    <meta property=\"og:description\" content=\"";
        // line 13
        $this->displayBlock('og_description', $context, $blocks);
        echo "\">
    <meta property=\"og:image\" content=\"";
        // line 14
        $this->displayBlock('og_image', $context, $blocks);
        echo "\">
    <meta property=\"og:type\" content=\"article\">
    <meta property=\"og:url\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "request", []), "schemeAndHttpHost", []) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "request", []), "requestUri", [])), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.0/js/all.js\"></script>
</head>
<body>
<nav class=\"navbar is-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <div class=\"navbar-item logo-block\">
                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"><strong>REMOTE JOBS</strong></a>
            </div>
            <div class=\"navbar-burger burger\" data-target=\"main-navbar\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id=\"main-navbar\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                <a class=\"navbar-item\" href=\"https://twitter.com/remote_vacancy\" target=\"_blank\">
                    <i class=\"fab fa-twitter is-large\"></i>&nbsp;
                    Follow us
                </a>
            </div>
            <div class=\"navbar-end\">
                <a class=\"navbar-item\" href=\"mailto:welcome@remotevacancy.com\">
                    welcome@remotevacancy.com
                </a>
                <div class=\"navbar-item\">
                    <form action=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"get\">
                        <div class=\"field has-addons\">
                            <div class=\"control\">
                                <input value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->source); })()), "request", []), "get", [0 => "word"], "method"), "html", null, true);
        echo "\" name=\"word\" class=\"input\" type=\"text\" placeholder=\"css, php, javascript…\">
                            </div>
                            <div class=\"control\">
                                <button type=\"submit\" class=\"button is-link\">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->source); })()), "session", []), "flashbag", []), "all", []));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 65
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 66
                echo "        <div class=\"message is-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
            <div class=\"message-header\">
                <p>";
                // line 68
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</p>
                <button class=\"delete\" aria-label=\"delete\"></button>
            </div>
            <div class=\"message-body\">
                ";
                // line 72
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "<div class=\"wrapper\">
    ";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "</div>
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"content has-text-centered\">
            <p>
                <b>Remote jobs</b> Copyright © ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
            </p>
        </div>
    </div>
</footer>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var \$navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        if (\$navbarBurgers.length > 0) {
            \$navbarBurgers.forEach(function (\$el) {
                \$el.addEventListener('click', function () {
                    var target = \$el.dataset.target;
                    var \$target = document.getElementById(target);
                    \$el.classList.toggle('is-active');
                    \$target.classList.toggle('is-active');

                });
            });
        }
    });

    \$('.delete').on('click', function () {
        \$('.message').hide();
    })
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_meta_description($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_og_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_og_description($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_description"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_og_image($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_image"));

        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "request", []), "schemeAndHttpHost", []) . "img/favicon.png"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 79
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 79,  302 => 78,  284 => 14,  267 => 13,  250 => 9,  233 => 7,  216 => 6,  178 => 85,  171 => 80,  169 => 78,  166 => 77,  152 => 72,  145 => 68,  139 => 66,  134 => 65,  130 => 64,  113 => 50,  107 => 47,  84 => 27,  73 => 19,  67 => 16,  62 => 14,  58 => 13,  51 => 9,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"has-navbar-fixed-top\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock title %}</title>
    <meta name=\"description\" content=\"{% block meta_description %}{% endblock meta_description %}\"/>

    <meta property=\"og:title\" content=\"{% block og_title %}{% endblock og_title %}\">
    <meta property=\"og:site_name\" content=\"Remote Vacancy\">
    <meta property=\"twitter:card\" content=\"summary\">
    <meta property=\"twitter:site\" content=\"@remote_vacancy\">
    <meta property=\"og:description\" content=\"{% block og_description %}{% endblock og_description %}\">
    <meta property=\"og:image\" content=\"{% block og_image %}{{ app.request.schemeAndHttpHost ~ 'img/favicon.png' }}{% endblock og_image %}\">
    <meta property=\"og:type\" content=\"article\">
    <meta property=\"og:url\" content=\"{{ app.request.schemeAndHttpHost ~ app.request.requestUri }}\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.0/js/all.js\"></script>
</head>
<body>
<nav class=\"navbar is-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <div class=\"navbar-item logo-block\">
                <a href=\"{{ path('homepage') }}\"><strong>REMOTE JOBS</strong></a>
            </div>
            <div class=\"navbar-burger burger\" data-target=\"main-navbar\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id=\"main-navbar\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                <a class=\"navbar-item\" href=\"https://twitter.com/remote_vacancy\" target=\"_blank\">
                    <i class=\"fab fa-twitter is-large\"></i>&nbsp;
                    Follow us
                </a>
            </div>
            <div class=\"navbar-end\">
                <a class=\"navbar-item\" href=\"mailto:welcome@remotevacancy.com\">
                    welcome@remotevacancy.com
                </a>
                <div class=\"navbar-item\">
                    <form action=\"{{ path('search') }}\" method=\"get\">
                        <div class=\"field has-addons\">
                            <div class=\"control\">
                                <input value=\"{{ app.request.get('word') }}\" name=\"word\" class=\"input\" type=\"text\" placeholder=\"css, php, javascript…\">
                            </div>
                            <div class=\"control\">
                                <button type=\"submit\" class=\"button is-link\">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
{% for label, flashes in app.session.flashbag.all %}
    {% for flash in flashes %}
        <div class=\"message is-{{ label }}\">
            <div class=\"message-header\">
                <p>{{ label }}</p>
                <button class=\"delete\" aria-label=\"delete\"></button>
            </div>
            <div class=\"message-body\">
                {{ flash }}
            </div>
        </div>
    {% endfor %}
{% endfor %}
<div class=\"wrapper\">
    {% block content %}
    {% endblock content %}
</div>
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"content has-text-centered\">
            <p>
                <b>Remote jobs</b> Copyright © {{ 'now'|date('Y') }}
            </p>
        </div>
    </div>
</footer>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var \$navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        if (\$navbarBurgers.length > 0) {
            \$navbarBurgers.forEach(function (\$el) {
                \$el.addEventListener('click', function () {
                    var target = \$el.dataset.target;
                    var \$target = document.getElementById(target);
                    \$el.classList.toggle('is-active');
                    \$target.classList.toggle('is-active');

                });
            });
        }
    });

    \$('.delete').on('click', function () {
        \$('.message').hide();
    })
</script>
</body>
</html>", "base.html.twig", "/Users/vladabapolov/Sites/remote-jobs/templates/base.html.twig");
    }
}
