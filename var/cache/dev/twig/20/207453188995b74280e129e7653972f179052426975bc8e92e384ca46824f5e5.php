<?php

/* pagination.html.twig */
class __TwigTemplate_d6e471c47bbe0cc9e8260bfd6e45cd2241012cdcbf4797d133e46e744c021820 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "    <div class=\"panel-block\">
        <nav class=\"pagination is-rounded\" role=\"navigation\" aria-label=\"pagination\">
            ";
            // line 4
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 5
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 5, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 5, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 5, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 5, $this->source); })())])), "html", null, true);
                echo "\" class=\"pagination-previous\">Previous</a>
            ";
            }
            // line 7
            echo "
            ";
            // line 8
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 9
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 9, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 9, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 9, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 9, $this->source); })())])), "html", null, true);
                echo "\" class=\"pagination-next\">Next page</a>
            ";
            }
            // line 11
            echo "
            <ul class=\"pagination-list\">
                ";
            // line 13
            if ((((isset($context["first"]) || array_key_exists("first", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 13, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 13, $this->source); })()))) && (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 13, $this->source); })()) - 1) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 13, $this->source); })())))) {
                // line 14
                echo "                    <li>
                        <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 15, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 15, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 15, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 15, $this->source); })())])), "html", null, true);
                echo "\" class=\"pagination-link\" aria-label=\"Goto page 1\">";
                echo twig_escape_filter($this->env, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "</a>
                    </li>
                    <li><span class=\"pagination-ellipsis\">&hellip;</span></li>
                ";
            }
            // line 19
            echo "
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new Twig_Error_Runtime('Variable "pagesInRange" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 21
                echo "                    ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 21, $this->source); })()))) {
                    // line 22
                    echo "                        <li>
                            <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 23, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 23, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 23, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\" class=\"pagination-link\" aria-label=\"Goto page ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                        </li>
                    ";
                } else {
                    // line 26
                    echo "                        <li>
                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                    // line 27
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                        </li>
                    ";
                }
                // line 30
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
                ";
            // line 32
            if ((((isset($context["last"]) || array_key_exists("last", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 32, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 32, $this->source); })()))) && (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 32, $this->source); })()) + 1) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 32, $this->source); })())))) {
                // line 33
                echo "                    <li><span class=\"pagination-ellipsis\">&hellip;</span></li>
                    <li>
                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 35, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 35, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 35, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 35, $this->source); })())])), "html", null, true);
                echo "\" class=\"pagination-link\" aria-label=\"Goto page 86\">";
                echo twig_escape_filter($this->env, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 35, $this->source); })()), "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            // line 38
            echo "            </ul>
        </nav>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  121 => 35,  117 => 33,  115 => 32,  112 => 31,  106 => 30,  98 => 27,  95 => 26,  85 => 23,  82 => 22,  79 => 21,  75 => 20,  72 => 19,  63 => 15,  60 => 14,  58 => 13,  54 => 11,  48 => 9,  46 => 8,  43 => 7,  37 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pageCount > 1 %}
    <div class=\"panel-block\">
        <nav class=\"pagination is-rounded\" role=\"navigation\" aria-label=\"pagination\">
            {% if previous is defined %}
                <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" class=\"pagination-previous\">Previous</a>
            {% endif %}

            {% if next is defined %}
                <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" class=\"pagination-next\">Next page</a>
            {% endif %}

            <ul class=\"pagination-list\">
                {% if first is defined and current != first and (current - 1) != first %}
                    <li>
                        <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\" class=\"pagination-link\" aria-label=\"Goto page 1\">{{ first }}</a>
                    </li>
                    <li><span class=\"pagination-ellipsis\">&hellip;</span></li>
                {% endif %}

                {% for page in pagesInRange %}
                    {% if page != current %}
                        <li>
                            <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\" class=\"pagination-link\" aria-label=\"Goto page {{ page }}\">{{ page }}</a>
                        </li>
                    {% else %}
                        <li>
                            <a class=\"pagination-link is-current\" aria-label=\"Page {{ page }}\">{{ page }}</a>
                        </li>
                    {% endif %}
                {% endfor %}

                {% if last is defined and current != last and (current + 1) != last %}
                    <li><span class=\"pagination-ellipsis\">&hellip;</span></li>
                    <li>
                        <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\" class=\"pagination-link\" aria-label=\"Goto page 86\">{{ last }}</a>
                    </li>
                {% endif %}
            </ul>
        </nav>
    </div>
{% endif %}
", "pagination.html.twig", "/Users/vladabapolov/Sites/remote-jobs/templates/pagination.html.twig");
    }
}
