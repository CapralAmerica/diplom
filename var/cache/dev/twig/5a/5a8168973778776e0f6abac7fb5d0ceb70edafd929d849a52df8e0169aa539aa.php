<?php

/* sign_up.html.twig */
class __TwigTemplate_c076df727668d03e39eb3bd94788b8c3eee3039bbe411cd4bf82684e8775bc59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master.html.twig", "sign_up.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sign_up.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sign_up.html.twig"));

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

        echo " Регистрация ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sign_up.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        input:invalid {
            border: 1px solid red !important;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "        <div class=\"col-lg-4\"></div>
        <div class=\"col-lg-7\">
            <div class=\"col-lg-3\"></div>
            <div class=\"card col-lg-6 mt-3\">
                <div class=\"card-body\">
                    <form method=\"POST\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\">
                        <p class=\"h4 text-center py-4\">Регистрация</p>
                        <div class=\"md-form\">
                            <i class=\"fa fa-user prefix grey-text\"></i>
                            <input type=\"text\" id=\"materialFormCardNameEx\" name=\"username\" class=\"form-control\" required>
                            <label for=\"materialFormCardNameEx\" class=\"font-weight-light\">Имя</label>
                        </div>
                        <div class=\"md-form\">
                            <i class=\"fa fa-envelope prefix grey-text\"></i>
                            <input type=\"email\" id=\"materialFormCardEmailEx\" name=\"email\" class=\"form-control\" required>
                            <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Email</label>
                        </div>
                       <div class=\"md-form\">
                            <i class=\"fa fa-exclamation-triangle prefix grey-text\"></i>
                            <input type=\"email\" id=\"materialFormCardConfirmEx\" class=\"form-control\" name=\"repeat_email\" required>
                            <label for=\"materialFormCardConfirmEx\" class=\"font-weight-light\">Повторите Email</label>
                        </div>
                        <div class=\"md-form\">
                            <i class=\"fa fa-lock prefix grey-text\"></i>
                            <input type=\"password\" id=\"materialFormCardPasswordEx\" class=\"form-control\" name=\"password\" required>
                            <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Пароль</label>
                        </div>
                        <div class=\"md-form\">
                            <i class=\"fa fa-birthday-cake prefix grey-text\"></i>
                            <input type=\"text\" id=\"materialFormCardPasswordEx\" class=\"form-control\" name=\"birthday\"
                            placeholder=\"Пример: 1994-10-13\" required>
                            <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Дата рождения</label>
                        </div>
                        <div class=\"text-center py-4 mt-3\">
                            <button class=\"btn btn-cyan\" type=\"submit\">Регистрация</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-lg-3\"></div>
       </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sign_up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 17,  96 => 12,  87 => 11,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
{% block title %} Регистрация {% endblock %}
{% block styles %}
    <link href=\"{{ asset('css/sign_up.css') }}\" rel=\"stylesheet\">
    <style>
        input:invalid {
            border: 1px solid red !important;
        }
    </style>
{% endblock %}
{% block content %}
        <div class=\"col-lg-4\"></div>
        <div class=\"col-lg-7\">
            <div class=\"col-lg-3\"></div>
            <div class=\"card col-lg-6 mt-3\">
                <div class=\"card-body\">
                    <form method=\"POST\" action=\"{{ path('registration') }}\">
                        <p class=\"h4 text-center py-4\">Регистрация</p>
                        <div class=\"md-form\">
                            <i class=\"fa fa-user prefix grey-text\"></i>
                            <input type=\"text\" id=\"materialFormCardNameEx\" name=\"username\" class=\"form-control\" required>
                            <label for=\"materialFormCardNameEx\" class=\"font-weight-light\">Имя</label>
                        </div>
                        <div class=\"md-form\">
                            <i class=\"fa fa-envelope prefix grey-text\"></i>
                            <input type=\"email\" id=\"materialFormCardEmailEx\" name=\"email\" class=\"form-control\" required>
                            <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Email</label>
                        </div>
                       <div class=\"md-form\">
                            <i class=\"fa fa-exclamation-triangle prefix grey-text\"></i>
                            <input type=\"email\" id=\"materialFormCardConfirmEx\" class=\"form-control\" name=\"repeat_email\" required>
                            <label for=\"materialFormCardConfirmEx\" class=\"font-weight-light\">Повторите Email</label>
                        </div>
                        <div class=\"md-form\">
                            <i class=\"fa fa-lock prefix grey-text\"></i>
                            <input type=\"password\" id=\"materialFormCardPasswordEx\" class=\"form-control\" name=\"password\" required>
                            <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Пароль</label>
                        </div>
                        <div class=\"md-form\">
                            <i class=\"fa fa-birthday-cake prefix grey-text\"></i>
                            <input type=\"text\" id=\"materialFormCardPasswordEx\" class=\"form-control\" name=\"birthday\"
                            placeholder=\"Пример: 1994-10-13\" required>
                            <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Дата рождения</label>
                        </div>
                        <div class=\"text-center py-4 mt-3\">
                            <button class=\"btn btn-cyan\" type=\"submit\">Регистрация</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-lg-3\"></div>
       </div>

{% endblock %}
", "sign_up.html.twig", "/home/alex/Projects/diplom/app/Resources/views/sign_up.html.twig");
    }
}
