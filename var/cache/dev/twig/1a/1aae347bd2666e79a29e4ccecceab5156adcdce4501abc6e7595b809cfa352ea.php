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
        $__internal_98e5442ff57fc87de2639993c33d32bcb66993ad3e816ad4997b2d29fdf98b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e5442ff57fc87de2639993c33d32bcb66993ad3e816ad4997b2d29fdf98b71->enter($__internal_98e5442ff57fc87de2639993c33d32bcb66993ad3e816ad4997b2d29fdf98b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e5442ff57fc87de2639993c33d32bcb66993ad3e816ad4997b2d29fdf98b71->leave($__internal_98e5442ff57fc87de2639993c33d32bcb66993ad3e816ad4997b2d29fdf98b71_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a744fa702cf5e048da4e4910906ef07d765a33e1be6663f31ca180de6b964626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a744fa702cf5e048da4e4910906ef07d765a33e1be6663f31ca180de6b964626->enter($__internal_a744fa702cf5e048da4e4910906ef07d765a33e1be6663f31ca180de6b964626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_a744fa702cf5e048da4e4910906ef07d765a33e1be6663f31ca180de6b964626->leave($__internal_a744fa702cf5e048da4e4910906ef07d765a33e1be6663f31ca180de6b964626_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5f3ff2dd093113ed3ea87abbec5e4f70223cd2deadb2920c7942746487e2c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f3ff2dd093113ed3ea87abbec5e4f70223cd2deadb2920c7942746487e2c5c->enter($__internal_c5f3ff2dd093113ed3ea87abbec5e4f70223cd2deadb2920c7942746487e2c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5f3ff2dd093113ed3ea87abbec5e4f70223cd2deadb2920c7942746487e2c5c->leave($__internal_c5f3ff2dd093113ed3ea87abbec5e4f70223cd2deadb2920c7942746487e2c5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86e62b806715a2e36d5708b9a73f5c641838575b5f9a05af308a378638bd0b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e62b806715a2e36d5708b9a73f5c641838575b5f9a05af308a378638bd0b89->enter($__internal_86e62b806715a2e36d5708b9a73f5c641838575b5f9a05af308a378638bd0b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_86e62b806715a2e36d5708b9a73f5c641838575b5f9a05af308a378638bd0b89->leave($__internal_86e62b806715a2e36d5708b9a73f5c641838575b5f9a05af308a378638bd0b89_prof);

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
