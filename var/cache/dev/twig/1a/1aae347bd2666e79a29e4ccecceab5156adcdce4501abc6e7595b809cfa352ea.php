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
        $__internal_7f35a30a210c54454eb2a295f2c8ca35ebf92402b01ace62d8ba5f9b95bbc98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f35a30a210c54454eb2a295f2c8ca35ebf92402b01ace62d8ba5f9b95bbc98c->enter($__internal_7f35a30a210c54454eb2a295f2c8ca35ebf92402b01ace62d8ba5f9b95bbc98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f35a30a210c54454eb2a295f2c8ca35ebf92402b01ace62d8ba5f9b95bbc98c->leave($__internal_7f35a30a210c54454eb2a295f2c8ca35ebf92402b01ace62d8ba5f9b95bbc98c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6cc72ee9065274ceb3146e3c5744834dca4c15ebeb073c8151b17a543ae18892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc72ee9065274ceb3146e3c5744834dca4c15ebeb073c8151b17a543ae18892->enter($__internal_6cc72ee9065274ceb3146e3c5744834dca4c15ebeb073c8151b17a543ae18892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_6cc72ee9065274ceb3146e3c5744834dca4c15ebeb073c8151b17a543ae18892->leave($__internal_6cc72ee9065274ceb3146e3c5744834dca4c15ebeb073c8151b17a543ae18892_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_90b9c74cde0d5f0a0906e976b8d3db7ccd2689db8575de4eb1e17af03fb6c035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b9c74cde0d5f0a0906e976b8d3db7ccd2689db8575de4eb1e17af03fb6c035->enter($__internal_90b9c74cde0d5f0a0906e976b8d3db7ccd2689db8575de4eb1e17af03fb6c035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_90b9c74cde0d5f0a0906e976b8d3db7ccd2689db8575de4eb1e17af03fb6c035->leave($__internal_90b9c74cde0d5f0a0906e976b8d3db7ccd2689db8575de4eb1e17af03fb6c035_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87b464457f9a75ed94fd741e97d73259f44de11a3cb56498dc302c9f4da404bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b464457f9a75ed94fd741e97d73259f44de11a3cb56498dc302c9f4da404bd->enter($__internal_87b464457f9a75ed94fd741e97d73259f44de11a3cb56498dc302c9f4da404bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_87b464457f9a75ed94fd741e97d73259f44de11a3cb56498dc302c9f4da404bd->leave($__internal_87b464457f9a75ed94fd741e97d73259f44de11a3cb56498dc302c9f4da404bd_prof);

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
