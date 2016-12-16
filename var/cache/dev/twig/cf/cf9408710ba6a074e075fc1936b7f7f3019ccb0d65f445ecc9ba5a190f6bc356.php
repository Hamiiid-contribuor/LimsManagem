<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_41a28430ff8e8a2b4e41c63ccc36d113e98c7d58cc227f82b8bb39dadf4f392b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6bf047702635430d74a049a930711e0591a1c2e6c51f2b9c6530a8f05cc8652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bf047702635430d74a049a930711e0591a1c2e6c51f2b9c6530a8f05cc8652->enter($__internal_f6bf047702635430d74a049a930711e0591a1c2e6c51f2b9c6530a8f05cc8652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6bf047702635430d74a049a930711e0591a1c2e6c51f2b9c6530a8f05cc8652->leave($__internal_f6bf047702635430d74a049a930711e0591a1c2e6c51f2b9c6530a8f05cc8652_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3884e3bafafe49113ed00e9964bc672bf5198dac897ca60e0d7da0579653654b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3884e3bafafe49113ed00e9964bc672bf5198dac897ca60e0d7da0579653654b->enter($__internal_3884e3bafafe49113ed00e9964bc672bf5198dac897ca60e0d7da0579653654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_3884e3bafafe49113ed00e9964bc672bf5198dac897ca60e0d7da0579653654b->leave($__internal_3884e3bafafe49113ed00e9964bc672bf5198dac897ca60e0d7da0579653654b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca2c11576bb5ee772bea5c26397158442f6d95b58a602184adb67b2789589daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2c11576bb5ee772bea5c26397158442f6d95b58a602184adb67b2789589daa->enter($__internal_ca2c11576bb5ee772bea5c26397158442f6d95b58a602184adb67b2789589daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ca2c11576bb5ee772bea5c26397158442f6d95b58a602184adb67b2789589daa->leave($__internal_ca2c11576bb5ee772bea5c26397158442f6d95b58a602184adb67b2789589daa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
