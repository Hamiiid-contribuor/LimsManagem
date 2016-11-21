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
        $__internal_90110973ddd959fcdd55d1163b370e53edfc995bb51b86f2c7b0e69067b4fd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90110973ddd959fcdd55d1163b370e53edfc995bb51b86f2c7b0e69067b4fd9e->enter($__internal_90110973ddd959fcdd55d1163b370e53edfc995bb51b86f2c7b0e69067b4fd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90110973ddd959fcdd55d1163b370e53edfc995bb51b86f2c7b0e69067b4fd9e->leave($__internal_90110973ddd959fcdd55d1163b370e53edfc995bb51b86f2c7b0e69067b4fd9e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17398edc5a16ad38d79c4eb4724aa0d4be4978a89484a006f2b6b18c2a6469fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17398edc5a16ad38d79c4eb4724aa0d4be4978a89484a006f2b6b18c2a6469fe->enter($__internal_17398edc5a16ad38d79c4eb4724aa0d4be4978a89484a006f2b6b18c2a6469fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_17398edc5a16ad38d79c4eb4724aa0d4be4978a89484a006f2b6b18c2a6469fe->leave($__internal_17398edc5a16ad38d79c4eb4724aa0d4be4978a89484a006f2b6b18c2a6469fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7524d8c29472048b23b9637e3a8e3f4a38a7e02d1974b8cc828033ee9c96220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7524d8c29472048b23b9637e3a8e3f4a38a7e02d1974b8cc828033ee9c96220->enter($__internal_c7524d8c29472048b23b9637e3a8e3f4a38a7e02d1974b8cc828033ee9c96220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7524d8c29472048b23b9637e3a8e3f4a38a7e02d1974b8cc828033ee9c96220->leave($__internal_c7524d8c29472048b23b9637e3a8e3f4a38a7e02d1974b8cc828033ee9c96220_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68341325b9396a2637fd5231eb4e4bcc233d281e06faf5fe1cbe986e5a59ec00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68341325b9396a2637fd5231eb4e4bcc233d281e06faf5fe1cbe986e5a59ec00->enter($__internal_68341325b9396a2637fd5231eb4e4bcc233d281e06faf5fe1cbe986e5a59ec00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68341325b9396a2637fd5231eb4e4bcc233d281e06faf5fe1cbe986e5a59ec00->leave($__internal_68341325b9396a2637fd5231eb4e4bcc233d281e06faf5fe1cbe986e5a59ec00_prof);

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
