<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_31467f1ba79b8b1da0b9633f6f75d74ab93810b25384c2135363bdd9fdcfd398 extends Twig_Template
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
        $__internal_ee5b909cc51dc524186a308c0afd48f80b637ef3c5f1c93a1d016d44b3582771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5b909cc51dc524186a308c0afd48f80b637ef3c5f1c93a1d016d44b3582771->enter($__internal_ee5b909cc51dc524186a308c0afd48f80b637ef3c5f1c93a1d016d44b3582771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee5b909cc51dc524186a308c0afd48f80b637ef3c5f1c93a1d016d44b3582771->leave($__internal_ee5b909cc51dc524186a308c0afd48f80b637ef3c5f1c93a1d016d44b3582771_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a589be8519dab3b724999a677169cf16b8cf555fc5127d844cfe2161e16a5642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a589be8519dab3b724999a677169cf16b8cf555fc5127d844cfe2161e16a5642->enter($__internal_a589be8519dab3b724999a677169cf16b8cf555fc5127d844cfe2161e16a5642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_a589be8519dab3b724999a677169cf16b8cf555fc5127d844cfe2161e16a5642->leave($__internal_a589be8519dab3b724999a677169cf16b8cf555fc5127d844cfe2161e16a5642_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dac8f31abea60e7cbe6e063d81a4894828dfc83ef00d6393eff76bbbd972eedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac8f31abea60e7cbe6e063d81a4894828dfc83ef00d6393eff76bbbd972eedf->enter($__internal_dac8f31abea60e7cbe6e063d81a4894828dfc83ef00d6393eff76bbbd972eedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dac8f31abea60e7cbe6e063d81a4894828dfc83ef00d6393eff76bbbd972eedf->leave($__internal_dac8f31abea60e7cbe6e063d81a4894828dfc83ef00d6393eff76bbbd972eedf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4768219a9b7ef4dcb70a4c5bc27359f8c528d0eaf16f90c2bdf409cbdb80085e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4768219a9b7ef4dcb70a4c5bc27359f8c528d0eaf16f90c2bdf409cbdb80085e->enter($__internal_4768219a9b7ef4dcb70a4c5bc27359f8c528d0eaf16f90c2bdf409cbdb80085e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4768219a9b7ef4dcb70a4c5bc27359f8c528d0eaf16f90c2bdf409cbdb80085e->leave($__internal_4768219a9b7ef4dcb70a4c5bc27359f8c528d0eaf16f90c2bdf409cbdb80085e_prof);

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
