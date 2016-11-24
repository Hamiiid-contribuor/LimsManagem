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
        $__internal_e5f6db55c95e522d1b72364b22cb258627d87edf56771072d2af122ec0b0298b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f6db55c95e522d1b72364b22cb258627d87edf56771072d2af122ec0b0298b->enter($__internal_e5f6db55c95e522d1b72364b22cb258627d87edf56771072d2af122ec0b0298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e5f6db55c95e522d1b72364b22cb258627d87edf56771072d2af122ec0b0298b->leave($__internal_e5f6db55c95e522d1b72364b22cb258627d87edf56771072d2af122ec0b0298b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ddc234b79e4720065b5ca4eff0302990be465563cd51d77bc7ce725093a8cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddc234b79e4720065b5ca4eff0302990be465563cd51d77bc7ce725093a8cb3->enter($__internal_7ddc234b79e4720065b5ca4eff0302990be465563cd51d77bc7ce725093a8cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_7ddc234b79e4720065b5ca4eff0302990be465563cd51d77bc7ce725093a8cb3->leave($__internal_7ddc234b79e4720065b5ca4eff0302990be465563cd51d77bc7ce725093a8cb3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_731c49632bfe510958b4bf71e72f40b7df9645dfb56dd8b945c630993cd52566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731c49632bfe510958b4bf71e72f40b7df9645dfb56dd8b945c630993cd52566->enter($__internal_731c49632bfe510958b4bf71e72f40b7df9645dfb56dd8b945c630993cd52566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_731c49632bfe510958b4bf71e72f40b7df9645dfb56dd8b945c630993cd52566->leave($__internal_731c49632bfe510958b4bf71e72f40b7df9645dfb56dd8b945c630993cd52566_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff1d6be0f9ef3cc9eec25ea34772340709aa1273afa39d500fc9196125bcc1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff1d6be0f9ef3cc9eec25ea34772340709aa1273afa39d500fc9196125bcc1c->enter($__internal_1ff1d6be0f9ef3cc9eec25ea34772340709aa1273afa39d500fc9196125bcc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_1ff1d6be0f9ef3cc9eec25ea34772340709aa1273afa39d500fc9196125bcc1c->leave($__internal_1ff1d6be0f9ef3cc9eec25ea34772340709aa1273afa39d500fc9196125bcc1c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e898f01753b0bfc9ae83f78edc9edfe964b6088e32d1f723097082ddd29f51cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e898f01753b0bfc9ae83f78edc9edfe964b6088e32d1f723097082ddd29f51cb->enter($__internal_e898f01753b0bfc9ae83f78edc9edfe964b6088e32d1f723097082ddd29f51cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e898f01753b0bfc9ae83f78edc9edfe964b6088e32d1f723097082ddd29f51cb->leave($__internal_e898f01753b0bfc9ae83f78edc9edfe964b6088e32d1f723097082ddd29f51cb_prof);

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
