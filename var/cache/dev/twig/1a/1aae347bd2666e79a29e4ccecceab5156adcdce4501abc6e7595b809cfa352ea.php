<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8e842deaa56023a7735db099c07ff2d2c5013e52df766b4df09faa75674b7764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2d64c063abc8b1495b74ab1a628827a7ea57e292489b63553a6facd2bfdabd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d64c063abc8b1495b74ab1a628827a7ea57e292489b63553a6facd2bfdabd76->enter($__internal_2d64c063abc8b1495b74ab1a628827a7ea57e292489b63553a6facd2bfdabd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d64c063abc8b1495b74ab1a628827a7ea57e292489b63553a6facd2bfdabd76->leave($__internal_2d64c063abc8b1495b74ab1a628827a7ea57e292489b63553a6facd2bfdabd76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d648664bb8f370a44fe65c13499e443670ff7ad1ae88082b331284baa4308cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d648664bb8f370a44fe65c13499e443670ff7ad1ae88082b331284baa4308cf0->enter($__internal_d648664bb8f370a44fe65c13499e443670ff7ad1ae88082b331284baa4308cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_d648664bb8f370a44fe65c13499e443670ff7ad1ae88082b331284baa4308cf0->leave($__internal_d648664bb8f370a44fe65c13499e443670ff7ad1ae88082b331284baa4308cf0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04d5da20b1bad0e44c09ff1aa69aaa4eab5329c54bbe51987b415d01a20caba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d5da20b1bad0e44c09ff1aa69aaa4eab5329c54bbe51987b415d01a20caba2->enter($__internal_04d5da20b1bad0e44c09ff1aa69aaa4eab5329c54bbe51987b415d01a20caba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04d5da20b1bad0e44c09ff1aa69aaa4eab5329c54bbe51987b415d01a20caba2->leave($__internal_04d5da20b1bad0e44c09ff1aa69aaa4eab5329c54bbe51987b415d01a20caba2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27338d4b0dafea093fde3a11508f7ef8ce1673a12d27775cb51fd75507b67e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27338d4b0dafea093fde3a11508f7ef8ce1673a12d27775cb51fd75507b67e07->enter($__internal_27338d4b0dafea093fde3a11508f7ef8ce1673a12d27775cb51fd75507b67e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27338d4b0dafea093fde3a11508f7ef8ce1673a12d27775cb51fd75507b67e07->leave($__internal_27338d4b0dafea093fde3a11508f7ef8ce1673a12d27775cb51fd75507b67e07_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
