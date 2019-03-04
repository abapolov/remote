<?php

/* main/category.html.twig */
class __TwigTemplate_e58540ae6d9a82b2f0403a6029c0e699e598ab2931e8972224a1e13578c8373e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/category.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'og_title' => [$this, 'block_og_title'],
            'og_description' => [$this, 'block_og_description'],
            'og_image' => [$this, 'block_og_image'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Remote Jobs: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 3, $this->source); })()), "name", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_og_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_title"));

        echo "Remote Jobs: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 4, $this->source); })()), "name", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_og_description($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_description"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_og_image($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "og_image"));

        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "request", []), "schemeAndHttpHost", []) . "img/favicon.png"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <section class=\"section custom-padding\">
        <div class=\"container\">
            <div class=\"columns\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\MainController::renderAsideCategoriesBar"));
        echo "
                <div class=\"column\">
                    <div class=\"panel\">
                        <div class=\"panel-block\">
                            <div class=\"media\">
                                <div class=\"media-content\">
                                    <span class=\"is-size-3\">
                                        <i class=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 19, $this->source); })()), "iconClass", []), "html", null, true);
        echo "\"></i>
                                        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 20, $this->source); })()), "name", []), "html", null, true);
        echo "
                                    </span>
                                    <small>LAST UPDATE ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 22, $this->source); })()), "createdAt", []), "H:i d M Y"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                        </div>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new Twig_Error_Runtime('Variable "jobs" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 27
            echo "                            <div class=\"panel-block\">
                                <div class=\"media\">
                                    <figure class=\"media-left\">
                                        <p class=\"image is-64x64\">
                                            ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "company", []), "logoPath", [])) {
                // line 32
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "company", []), "logoPath", []), "html", null, true);
                echo "\">
                                            ";
            } else {
                // line 34
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "source", []), "logoPath", []), "html", null, true);
                echo "\">
                                            ";
            }
            // line 36
            echo "                                        </p>
                                    </figure>
                                    <div class=\"media-content\">
                                        <div class=\"content\">
                                            <div class=\"is-size-4\">
                                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_view", ["slug" => twig_get_attribute($this->env, $this->source, $context["job"], "slug", [])]), "html", null, true);
            echo "\" class=\"job-title\">
                                                    <b>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "company", []), "name", []), "html", null, true);
            echo " -</b> <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", []), "html", null, true);
            echo "</span> <small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "source", []), "name", []), "html", null, true);
            echo "</small>
                                                </a>
                                            </div>
                                            <br>
                                            ";
            // line 46
            echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["job"], "description", [])), 0, 200) . "..."), "html", null, true);
            echo "
                                        </div>
                                    </div>
                                    <div class=\"media-right\">
                                        ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "createdAt", []), "d M Y"), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new Twig_Error_Runtime('Variable "jobs" does not exist.', 55, $this->source); })()));
        echo "
                        <div class=\"panel-block\">
                            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"bottom-link\"><b>← Back to all jobs</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 57,  225 => 55,  214 => 50,  207 => 46,  196 => 42,  192 => 41,  185 => 36,  179 => 34,  173 => 32,  171 => 31,  165 => 27,  161 => 26,  154 => 22,  149 => 20,  145 => 19,  135 => 12,  130 => 9,  121 => 8,  103 => 6,  86 => 5,  67 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Remote Jobs: {{ current.name }}{% endblock title %}
{% block og_title %}Remote Jobs: {{ current.name }}{% endblock og_title %}
{% block og_description %}{% endblock og_description %}
{% block og_image %}{{ app.request.schemeAndHttpHost ~ 'img/favicon.png' }}{% endblock og_image %}

{% block content %}
    <section class=\"section custom-padding\">
        <div class=\"container\">
            <div class=\"columns\">
                {{ render(controller('App\\\\Controller\\\\MainController::renderAsideCategoriesBar')) }}
                <div class=\"column\">
                    <div class=\"panel\">
                        <div class=\"panel-block\">
                            <div class=\"media\">
                                <div class=\"media-content\">
                                    <span class=\"is-size-3\">
                                        <i class=\"{{ current.iconClass }}\"></i>
                                        {{ current.name }}
                                    </span>
                                    <small>LAST UPDATE {{ current.createdAt|date('H:i d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                        {% for job in jobs %}
                            <div class=\"panel-block\">
                                <div class=\"media\">
                                    <figure class=\"media-left\">
                                        <p class=\"image is-64x64\">
                                            {% if job.company.logoPath %}
                                                <img src=\"{{ job.company.logoPath }}\">
                                            {% else %}
                                                <img src=\"{{ job.source.logoPath }}\">
                                            {% endif %}
                                        </p>
                                    </figure>
                                    <div class=\"media-content\">
                                        <div class=\"content\">
                                            <div class=\"is-size-4\">
                                                <a href=\"{{ path('job_view', { 'slug': job.slug }) }}\" class=\"job-title\">
                                                    <b>{{ job.company.name }} -</b> <span>{{ job.title }}</span> <small>{{ job.source.name }}</small>
                                                </a>
                                            </div>
                                            <br>
                                            {{ job.description|striptags[0:200] ~ '...' }}
                                        </div>
                                    </div>
                                    <div class=\"media-right\">
                                        {{ job.createdAt|date('d M Y') }}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        {{ knp_pagination_render(jobs) }}
                        <div class=\"panel-block\">
                            <a href=\"{{ path('homepage') }}\" class=\"bottom-link\"><b>← Back to all jobs</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock content %}", "main/category.html.twig", "/Users/vladabapolov/Sites/remote-jobs/templates/main/category.html.twig");
    }
}
