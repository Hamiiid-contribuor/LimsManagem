<?php

/* base.html.twig */
class __TwigTemplate_a61535d952e6f420bd0500ba095e8397a24e116f77670c2b161499e58f1d3874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21491c4a96fac5435e59a9141d6f385414deddcb7a18884cf61dee985446cf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21491c4a96fac5435e59a9141d6f385414deddcb7a18884cf61dee985446cf5e->enter($__internal_21491c4a96fac5435e59a9141d6f385414deddcb7a18884cf61dee985446cf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_21491c4a96fac5435e59a9141d6f385414deddcb7a18884cf61dee985446cf5e->leave($__internal_21491c4a96fac5435e59a9141d6f385414deddcb7a18884cf61dee985446cf5e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_baffbdaa43095d15943691d3182ac476afe0a42e6a9725410066500b2692bc16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baffbdaa43095d15943691d3182ac476afe0a42e6a9725410066500b2692bc16->enter($__internal_baffbdaa43095d15943691d3182ac476afe0a42e6a9725410066500b2692bc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_baffbdaa43095d15943691d3182ac476afe0a42e6a9725410066500b2692bc16->leave($__internal_baffbdaa43095d15943691d3182ac476afe0a42e6a9725410066500b2692bc16_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02947391f9365540709e9785d3fbaea965104c199161aa3b4af2718f3eba02eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02947391f9365540709e9785d3fbaea965104c199161aa3b4af2718f3eba02eb->enter($__internal_02947391f9365540709e9785d3fbaea965104c199161aa3b4af2718f3eba02eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_02947391f9365540709e9785d3fbaea965104c199161aa3b4af2718f3eba02eb->leave($__internal_02947391f9365540709e9785d3fbaea965104c199161aa3b4af2718f3eba02eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_497938468dbc492864f63447e9b23ac97b8ceed7a9baeb579790ce473fcfae21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497938468dbc492864f63447e9b23ac97b8ceed7a9baeb579790ce473fcfae21->enter($__internal_497938468dbc492864f63447e9b23ac97b8ceed7a9baeb579790ce473fcfae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_497938468dbc492864f63447e9b23ac97b8ceed7a9baeb579790ce473fcfae21->leave($__internal_497938468dbc492864f63447e9b23ac97b8ceed7a9baeb579790ce473fcfae21_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acbef68782aa7707135cd797ac0e3a4c25f02ad6b0f7ff129e38a4269d5192e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbef68782aa7707135cd797ac0e3a4c25f02ad6b0f7ff129e38a4269d5192e1->enter($__internal_acbef68782aa7707135cd797ac0e3a4c25f02ad6b0f7ff129e38a4269d5192e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_acbef68782aa7707135cd797ac0e3a4c25f02ad6b0f7ff129e38a4269d5192e1->leave($__internal_acbef68782aa7707135cd797ac0e3a4c25f02ad6b0f7ff129e38a4269d5192e1_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\views\\base.html.twig");
    }
}
