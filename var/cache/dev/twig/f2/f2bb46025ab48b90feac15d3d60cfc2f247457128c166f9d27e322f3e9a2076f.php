<?php

/* home.html.twig */
class __TwigTemplate_cdfa11616aac2e9d62756f1a0bc0d4749fcb3db0d3bc4644491ca2cd26380a65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Главная ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->loadTemplate("parts/header.html.twig", "home.html.twig", 3)->display($context);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_styles($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"col-lg-2\"></div>
    <div class=\"col-lg-8\">
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "error"), "method")) {
            // line 11
            echo "            <div class=\"alert alert-danger\">
                <strong>Ошибка!</strong> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "error"), "method"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 15
        echo "        <div class=\"card card-cascade wider reverse my-4\">
            <div id=\"carousel-example-1z\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-1z\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-1z\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-1z\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"carousel-item active\">
                        <img class=\"d-block w-100\" height=\"700px\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/photo_2018-04-02_21-46-34.jpg"), "html", null, true);
        echo "\"
                             alt=\"First slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" height=\"700px\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/photo_2018-04-02_21-46-42.jpg"), "html", null, true);
        echo "\"
                             alt=\"Second slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" height=\"700px\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/photo_2018-04-02_21-46-48.jpg"), "html", null, true);
        echo "\"
                             alt=\"Third slide\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <div class=\"card-body text-center\">
                <a class=\"icons-sm li-ic\"><i class=\"fa fa-linkedin\"> </i></a>
                <a class=\"icons-sm tw-ic\"><i class=\"fa fa-twitter\"> </i></a>
                <a class=\"icons-sm fb-ic\"><i class=\"fa fa-facebook\"> </i></a>
            </div>
        </div>
        <div class=\"card-deck\">
            <div class=\"card mb-4\">
                <div class=\"view overlay\">
                    <img class=\"img-fluid\" src=\"http://www.tonus-studio.by/wp-content/uploads/2017/08/Dobro-pozhalovat-v-Tonus-studio.jpg\"
                         alt=\"Card image cap\">
                    <a href=\"#!\">
                        <div class=\"mask rgba-white-slight\"></div>
                    </a>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Маникюр</h4>
                    <p class=\"card-text\">Подробнее о цене и описании вы можете узнать на странице \"Цены\".</p>
                    <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\"><button type=\"button\" class=\"btn btn-light-blue btn-md\">Подробнее</button></a>
                </div>
            </div>
            <div class=\"card mb-4\">
                <div class=\"view overlay\">
                    <img class=\"img-fluid\" src=\"http://salon-f-one.ru/img/serIntro4a.jpg\"
                         alt=\"Card image cap\">
                    <a href=\"#!\">
                        <div class=\"mask rgba-white-slight\"></div>
                    </a>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Стрижка</h4>
                    <p class=\"card-text\">Подробнее о цене и описании вы можете узнать на странице \"Цены\".</p>
                    <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\"><button type=\"button\" class=\"btn btn-light-blue btn-md\">Подробнее</button></a>
                </div>
            </div>
            <div class=\"card mb-4\">
                <div class=\"view overlay\">
                    <img class=\"img-fluid\" src=\"http://glamjournal.ru/sites/default/files/imagecache/large/komu-idet-ryzhij-cvet-580x264.jpg\"
                         alt=\"Card image cap\">
                    <a href=\"#!\">
                        <div class=\"mask rgba-white-slight\"></div>
                    </a>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Укладка</h4>
                    <p class=\"card-text\">Подробнее о цене и описании вы можете узнать на странице \"Цены\".</p>
                    <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\"><button type=\"button\" class=\"btn btn-light-blue btn-md\">Подробнее</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-1\"></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        $this->loadTemplate("parts/footer.html.twig", "home.html.twig", 99)->display($context);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 99,  221 => 91,  204 => 77,  187 => 63,  153 => 32,  146 => 28,  139 => 24,  128 => 15,  122 => 12,  119 => 11,  117 => 10,  113 => 8,  104 => 7,  91 => 5,  82 => 4,  62 => 3,  44 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/master.html.twig' %}
{% block title %} Главная {% endblock %}
{% block header %} {% include 'parts/header.html.twig' %} {% endblock %}
{% block styles %}
    <link href=\"{{ asset('css/home.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block content %}
    <div class=\"col-lg-2\"></div>
    <div class=\"col-lg-8\">
        {% if app.session.get('error') %}
            <div class=\"alert alert-danger\">
                <strong>Ошибка!</strong> {{ app.session.get('error') }}
            </div>
        {% endif %}
        <div class=\"card card-cascade wider reverse my-4\">
            <div id=\"carousel-example-1z\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-1z\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-1z\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-1z\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"carousel-item active\">
                        <img class=\"d-block w-100\" height=\"700px\" src=\"{{ asset('images/photo_2018-04-02_21-46-34.jpg') }}\"
                             alt=\"First slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" height=\"700px\" src=\"{{ asset('images/photo_2018-04-02_21-46-42.jpg') }}\"
                             alt=\"Second slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" height=\"700px\" src=\"{{ asset('images/photo_2018-04-02_21-46-48.jpg') }}\"
                             alt=\"Third slide\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <div class=\"card-body text-center\">
                <a class=\"icons-sm li-ic\"><i class=\"fa fa-linkedin\"> </i></a>
                <a class=\"icons-sm tw-ic\"><i class=\"fa fa-twitter\"> </i></a>
                <a class=\"icons-sm fb-ic\"><i class=\"fa fa-facebook\"> </i></a>
            </div>
        </div>
        <div class=\"card-deck\">
            <div class=\"card mb-4\">
                <div class=\"view overlay\">
                    <img class=\"img-fluid\" src=\"http://www.tonus-studio.by/wp-content/uploads/2017/08/Dobro-pozhalovat-v-Tonus-studio.jpg\"
                         alt=\"Card image cap\">
                    <a href=\"#!\">
                        <div class=\"mask rgba-white-slight\"></div>
                    </a>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Маникюр</h4>
                    <p class=\"card-text\">Подробнее о цене и описании вы можете узнать на странице \"Цены\".</p>
                    <a href=\"{{ path('services') }}\"><button type=\"button\" class=\"btn btn-light-blue btn-md\">Подробнее</button></a>
                </div>
            </div>
            <div class=\"card mb-4\">
                <div class=\"view overlay\">
                    <img class=\"img-fluid\" src=\"http://salon-f-one.ru/img/serIntro4a.jpg\"
                         alt=\"Card image cap\">
                    <a href=\"#!\">
                        <div class=\"mask rgba-white-slight\"></div>
                    </a>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Стрижка</h4>
                    <p class=\"card-text\">Подробнее о цене и описании вы можете узнать на странице \"Цены\".</p>
                    <a href=\"{{ path('services') }}\"><button type=\"button\" class=\"btn btn-light-blue btn-md\">Подробнее</button></a>
                </div>
            </div>
            <div class=\"card mb-4\">
                <div class=\"view overlay\">
                    <img class=\"img-fluid\" src=\"http://glamjournal.ru/sites/default/files/imagecache/large/komu-idet-ryzhij-cvet-580x264.jpg\"
                         alt=\"Card image cap\">
                    <a href=\"#!\">
                        <div class=\"mask rgba-white-slight\"></div>
                    </a>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Укладка</h4>
                    <p class=\"card-text\">Подробнее о цене и описании вы можете узнать на странице \"Цены\".</p>
                    <a href=\"{{ path('services') }}\"><button type=\"button\" class=\"btn btn-light-blue btn-md\">Подробнее</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-1\"></div>

{% endblock %}
{% block footer %} {% include 'parts/footer.html.twig' %} {% endblock %}", "home.html.twig", "/home/alex/Projects/diplom/app/Resources/views/home.html.twig");
    }
}
