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
        $__internal_71a0bf4b18b2eb609cf0a1efde31c49acee85940688ad0de374fb52236a84594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a0bf4b18b2eb609cf0a1efde31c49acee85940688ad0de374fb52236a84594->enter($__internal_71a0bf4b18b2eb609cf0a1efde31c49acee85940688ad0de374fb52236a84594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a0bf4b18b2eb609cf0a1efde31c49acee85940688ad0de374fb52236a84594->leave($__internal_71a0bf4b18b2eb609cf0a1efde31c49acee85940688ad0de374fb52236a84594_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91b56bcd79a22b44c1cd5e4cfce10d791775f6c239f55d21155cf85cea12d0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b56bcd79a22b44c1cd5e4cfce10d791775f6c239f55d21155cf85cea12d0f6->enter($__internal_91b56bcd79a22b44c1cd5e4cfce10d791775f6c239f55d21155cf85cea12d0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_91b56bcd79a22b44c1cd5e4cfce10d791775f6c239f55d21155cf85cea12d0f6->leave($__internal_91b56bcd79a22b44c1cd5e4cfce10d791775f6c239f55d21155cf85cea12d0f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6eaf278602837e5ba1b05b8074ec2fadf4adc54e7b390ef83f579e65ba7bc447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eaf278602837e5ba1b05b8074ec2fadf4adc54e7b390ef83f579e65ba7bc447->enter($__internal_6eaf278602837e5ba1b05b8074ec2fadf4adc54e7b390ef83f579e65ba7bc447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6eaf278602837e5ba1b05b8074ec2fadf4adc54e7b390ef83f579e65ba7bc447->leave($__internal_6eaf278602837e5ba1b05b8074ec2fadf4adc54e7b390ef83f579e65ba7bc447_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bee6e7cf45d9f76438c34bbcfd1d8e86f1b97a870ef2f44459b49aaf4bbe8b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee6e7cf45d9f76438c34bbcfd1d8e86f1b97a870ef2f44459b49aaf4bbe8b98->enter($__internal_bee6e7cf45d9f76438c34bbcfd1d8e86f1b97a870ef2f44459b49aaf4bbe8b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bee6e7cf45d9f76438c34bbcfd1d8e86f1b97a870ef2f44459b49aaf4bbe8b98->leave($__internal_bee6e7cf45d9f76438c34bbcfd1d8e86f1b97a870ef2f44459b49aaf4bbe8b98_prof);

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
