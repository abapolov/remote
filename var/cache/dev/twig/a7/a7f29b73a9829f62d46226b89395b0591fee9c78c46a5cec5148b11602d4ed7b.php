<?php

/* main/job.html.twig */
class __TwigTemplate_f04a2d8ac1c134a47305bba3f76e9b4e756696a9cc0c934f833424b4ffdcaa2a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/job.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/job.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/job.html.twig"));

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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 3, $this->source); })()), "title", []), "html", null, true);
        
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 4, $this->source); })()), "title", []), "html", null, true);
        
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

        echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 5, $this->source); })()), "description", [])), 0, 255) . "..."), "html", null, true);
        
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

        // line 7
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 7, $this->source); })()), "company", []), "logoPath", [])) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 8, $this->source); })()), "company", []), "logoPath", []), "html", null, true);
            echo "
    ";
        } else {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", []), "schemeAndHttpHost", []) . "img/favicon.png"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    <section class=\"section custom-padding\">
        <div class=\"container\">
            <nav class=\"breadcrumb\" aria-label=\"breadcrumbs\">
                <ul>
                    <li>
                        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                            <span class=\"icon is-small\"><i class=\"fas fa-home\"></i></span><span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_view", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 25, $this->source); })()), "category", []), "slug", []), "page" => 1]), "html", null, true);
        echo "\">
                            <span class=\"icon is-small\">
                                <i class=\"fas fa-code\"></i>
                            </span>
                            <span>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 29, $this->source); })()), "category", []), "name", []), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    <li class=\"is-active\"><a href=\"#\" aria-current=\"page\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 32, $this->source); })()), "title", []), "html", null, true);
        echo "</a></li>
                </ul>
            </nav>
            <div class=\"columns reverse-row-order\">
                <div class=\"column\">
                    <nav class=\"panel\">
                        <div class=\"panel-block\">
                            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 39, $this->source); })()), "company", []), "logoPath", [])) {
            // line 40
            echo "                                <img class=\"image is-128x128 company-logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 40, $this->source); })()), "company", []), "logoPath", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 40, $this->source); })()), "company", []), "name", []), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 42
            echo "                                <img class=\"image is-128x128 company-logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 42, $this->source); })()), "source", []), "logoPath", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 42, $this->source); })()), "company", []), "name", []), "html", null, true);
            echo "\">
                            ";
        }
        // line 44
        echo "                        </div>
                        ";
        // line 45
        $context["url"] = "javascript:void(0);";
        // line 46
        echo "
                        ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 47, $this->source); })()), "company", []), "siteUrl", [])) {
            // line 48
            echo "                            ";
            $context["url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 48, $this->source); })()), "company", []), "siteUrl", []);
            // line 49
            echo "                        ";
        }
        // line 50
        echo "
                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\" class=\"panel-block\">
                            <span class=\"panel-icon\">
                              <i class=\"fas fa-mouse-pointer\"></i>
                            </span>
                            <b>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 55, $this->source); })()), "company", []), "name", []), "html", null, true);
        echo "</b>
                        </a>
                        <a class=\"panel-block\">
                            <span class=\"panel-icon\">
                              <i class=\"fas fa-envelope-square\"></i>
                            </span>
                            Tell a friend
                        </a>
                        <a class=\"panel-block\">
                            <span class=\"panel-icon\">
                              <i class=\"fab fa-twitter-square\"></i>
                            </span>
                            Tweet this job
                        </a>
                        <a class=\"panel-block\">
                            <span class=\"panel-icon\">
                              <i class=\"fab fa-linkedin-in\"></i>
                            </span>
                            Post on LinkedIn
                        </a>
                    </nav>
                </div>
                <div class=\"column is-four-fifths\">
                    <h1 class=\"title\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 78, $this->source); })()), "title", []), "html", null, true);
        echo "</h1>
                    <div class=\"subtitle\">POSTED ";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 79, $this->source); })()), "createdAt", []), "d M Y"), "html", null, true);
        echo "</div>
                    <div class=\"content\">
                        <h2 class=\"title is-size-4\">DESCRIPTION</h2>
                        ";
        // line 82
        echo twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 82, $this->source); })()), "description", []);
        echo "
                        ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 83, $this->source); })()), "applyDescription", [])) {
            // line 84
            echo "                            <h2 class=\"title is-size-4\">APPLY</h2>
                            ";
            // line 85
            echo twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 85, $this->source); })()), "applyDescription", []);
            echo "
                        ";
        }
        // line 87
        echo "                    </div>
                    <div class=\"hero is-light\">
                        <div class=\"hero-body\">
                            <h3 class=\"is-size-5\">Apply for this position:</h3>
                            <p>
                                Please apply at the following page: <a target=\"_blank\" class=\"custom-link\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 92, $this->source); })()), "applyUrl", []), "html", null, true);
        echo "\">Apply</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class=\"level\">
                <div class=\"level-left\">
                    <p class=\"level-item\">
                        <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"\">
                            ← Back to all jobs
                        </a>
                    </p>
                </div>
                <div class=\"level-right\">
                    <p class=\"level-item\">
                        <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_view", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 108, $this->source); })()), "category", []), "slug", []), "page" => 1]), "html", null, true);
        echo "\" class=\"\">
                            See more ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 109, $this->source); })()), "category", []), "name", []), "html", null, true);
        echo " jobs →
                        </a>
                    </p>
                </div>
            </nav>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 109,  304 => 108,  294 => 101,  282 => 92,  275 => 87,  270 => 85,  267 => 84,  265 => 83,  261 => 82,  255 => 79,  251 => 78,  225 => 55,  218 => 51,  215 => 50,  212 => 49,  209 => 48,  207 => 47,  204 => 46,  202 => 45,  199 => 44,  191 => 42,  183 => 40,  181 => 39,  171 => 32,  165 => 29,  158 => 25,  150 => 20,  143 => 15,  134 => 14,  120 => 10,  114 => 8,  111 => 7,  102 => 6,  84 => 5,  66 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ job.title }}{% endblock title %}
{% block og_title %}{{ job.title }}{% endblock og_title %}
{% block og_description %}{{ job.description|striptags[0:255] ~ '...' }}{% endblock og_description %}
{% block og_image %}
    {% if job.company.logoPath %}
        {{ job.company.logoPath }}
    {% else %}
        {{ app.request.schemeAndHttpHost ~ 'img/favicon.png' }}
    {% endif %}
{% endblock og_image %}

{% block content %}
    <section class=\"section custom-padding\">
        <div class=\"container\">
            <nav class=\"breadcrumb\" aria-label=\"breadcrumbs\">
                <ul>
                    <li>
                        <a href=\"{{ path('homepage') }}\">
                            <span class=\"icon is-small\"><i class=\"fas fa-home\"></i></span><span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('category_view', { 'slug': job.category.slug, 'page': 1 }) }}\">
                            <span class=\"icon is-small\">
                                <i class=\"fas fa-code\"></i>
                            </span>
                            <span>{{ job.category.name }}</span>
                        </a>
                    </li>
                    <li class=\"is-active\"><a href=\"#\" aria-current=\"page\">{{ job.title }}</a></li>
                </ul>
            </nav>
            <div class=\"columns reverse-row-order\">
                <div class=\"column\">
                    <nav class=\"panel\">
                        <div class=\"panel-block\">
                            {% if job.company.logoPath %}
                                <img class=\"image is-128x128 company-logo\" src=\"{{ job.company.logoPath }}\" alt=\"{{ job.company.name }}\">
                            {% else %}
                                <img class=\"image is-128x128 company-logo\" src=\"{{ job.source.logoPath }}\" alt=\"{{ job.company.name }}\">
                            {% endif %}
                        </div>
                        {% set url = 'javascript:void(0);' %}

                        {% if job.company.siteUrl %}
                            {% set url = job.company.siteUrl %}
                        {% endif %}

                        <a href=\"{{ url }}\" target=\"_blank\" class=\"panel-block\">
                            <span class=\"panel-icon\">
                              <i class=\"fas fa-mouse-pointer\"></i>
                            </span>
                            <b>{{ job.company.name }}</b>
                        </a>
                        <a class=\"panel-block\">
                            <span class=\"panel-icon\">
                              <i class=\"fas fa-envelope-square\"></i>
                            </span>
                            Tell a friend
                        </a>
                        <a class=\"panel-block\">
                            <span class=\"panel-icon\">
                              <i class=\"fab fa-twitter-square\"></i>
                            </span>
                            Tweet this job
                        </a>
                        <a class=\"panel-block\">
                            <span class=\"panel-icon\">
                              <i class=\"fab fa-linkedin-in\"></i>
                            </span>
                            Post on LinkedIn
                        </a>
                    </nav>
                </div>
                <div class=\"column is-four-fifths\">
                    <h1 class=\"title\">{{ job.title }}</h1>
                    <div class=\"subtitle\">POSTED {{ job.createdAt|date('d M Y') }}</div>
                    <div class=\"content\">
                        <h2 class=\"title is-size-4\">DESCRIPTION</h2>
                        {{ job.description|raw }}
                        {% if job.applyDescription %}
                            <h2 class=\"title is-size-4\">APPLY</h2>
                            {{ job.applyDescription|raw }}
                        {% endif %}
                    </div>
                    <div class=\"hero is-light\">
                        <div class=\"hero-body\">
                            <h3 class=\"is-size-5\">Apply for this position:</h3>
                            <p>
                                Please apply at the following page: <a target=\"_blank\" class=\"custom-link\" href=\"{{ job.applyUrl }}\">Apply</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class=\"level\">
                <div class=\"level-left\">
                    <p class=\"level-item\">
                        <a href=\"{{ path('homepage') }}\" class=\"\">
                            ← Back to all jobs
                        </a>
                    </p>
                </div>
                <div class=\"level-right\">
                    <p class=\"level-item\">
                        <a href=\"{{ path('category_view', { 'slug': job.category.slug, 'page': 1 }) }}\" class=\"\">
                            See more {{ job.category.name }} jobs →
                        </a>
                    </p>
                </div>
            </nav>
        </div>
    </section>
{% endblock content %}", "main/job.html.twig", "/Users/vladabapolov/Sites/remote-jobs/templates/main/job.html.twig");
    }
}
