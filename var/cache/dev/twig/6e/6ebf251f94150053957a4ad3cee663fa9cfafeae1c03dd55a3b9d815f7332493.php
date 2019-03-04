<?php

/* aside.html.twig */
class __TwigTemplate_62793edc1d40c5f2ed45ed8923adb97ec8f940db58ae78db7acaf6368414cf05 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        // line 1
        echo "<div class=\"column is-one-fifth\">
    <nav class=\"panel\">
        <p class=\"panel-block\">
            <b>Categories</b>
        </p>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "jobs", [])) > 0)) {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_view", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", []), "page" => 1]), "html", null, true);
                echo "\" class=\"panel-block ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "request", []), "get", [0 => "slug"], "method") == twig_get_attribute($this->env, $this->source, $context["category"], "slug", []))) {
                    echo "is-active";
                }
                echo "\">
                    <span class=\"panel-icon\">
                        <i class=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "iconClass", []), "html", null, true);
                echo "\"></i>
                    </span>
                    ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", []), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </nav>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  64 => 15,  58 => 12,  53 => 10,  43 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"column is-one-fifth\">
    <nav class=\"panel\">
        <p class=\"panel-block\">
            <b>Categories</b>
        </p>
        {% for category in categories %}
            {% if category.jobs|length > 0 %}
                <a href=\"{{ path('category_view', { 'slug': category.slug, 'page': 1 }) }}\" class=\"panel-block {% if app.request.get('slug') == category.slug %}is-active{% endif %}\">
                    <span class=\"panel-icon\">
                        <i class=\"{{ category.iconClass }}\"></i>
                    </span>
                    {{ category.name }}
                </a>
            {% endif %}
        {% endfor %}
    </nav>
</div>", "aside.html.twig", "/Users/vladabapolov/Sites/remote-jobs/templates/aside.html.twig");
    }
}
