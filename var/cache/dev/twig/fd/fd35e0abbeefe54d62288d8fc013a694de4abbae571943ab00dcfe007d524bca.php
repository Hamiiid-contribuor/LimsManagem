<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df18202587335b4b5077098dfe0f68f4e4f68fcfe49808cd2288ae49e2d4354a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9844a23c44bed4755b6641525dd577f79497b68f7f409774080851cf0719007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9844a23c44bed4755b6641525dd577f79497b68f7f409774080851cf0719007->enter($__internal_f9844a23c44bed4755b6641525dd577f79497b68f7f409774080851cf0719007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9844a23c44bed4755b6641525dd577f79497b68f7f409774080851cf0719007->leave($__internal_f9844a23c44bed4755b6641525dd577f79497b68f7f409774080851cf0719007_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7193be5b1a74df2ff10522b0a2771a123ba898346897b2e22947f33ccbdef7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7193be5b1a74df2ff10522b0a2771a123ba898346897b2e22947f33ccbdef7b8->enter($__internal_7193be5b1a74df2ff10522b0a2771a123ba898346897b2e22947f33ccbdef7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_7193be5b1a74df2ff10522b0a2771a123ba898346897b2e22947f33ccbdef7b8->leave($__internal_7193be5b1a74df2ff10522b0a2771a123ba898346897b2e22947f33ccbdef7b8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4483eebfeb2ed1344816222fc8a00b49d4ace22eafa8c3a8d702c004699a6869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4483eebfeb2ed1344816222fc8a00b49d4ace22eafa8c3a8d702c004699a6869->enter($__internal_4483eebfeb2ed1344816222fc8a00b49d4ace22eafa8c3a8d702c004699a6869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4483eebfeb2ed1344816222fc8a00b49d4ace22eafa8c3a8d702c004699a6869->leave($__internal_4483eebfeb2ed1344816222fc8a00b49d4ace22eafa8c3a8d702c004699a6869_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8dc19573ca236d0d32b9f8e0dca5e1f69b4269fdd517fdce14e3f3a00eb6ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8dc19573ca236d0d32b9f8e0dca5e1f69b4269fdd517fdce14e3f3a00eb6ad2->enter($__internal_c8dc19573ca236d0d32b9f8e0dca5e1f69b4269fdd517fdce14e3f3a00eb6ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8dc19573ca236d0d32b9f8e0dca5e1f69b4269fdd517fdce14e3f3a00eb6ad2->leave($__internal_c8dc19573ca236d0d32b9f8e0dca5e1f69b4269fdd517fdce14e3f3a00eb6ad2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
