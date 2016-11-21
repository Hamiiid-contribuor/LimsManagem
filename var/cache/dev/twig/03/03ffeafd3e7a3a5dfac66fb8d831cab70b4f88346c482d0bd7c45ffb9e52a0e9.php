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
        $__internal_d506e8dee654376f21a75bd16bf3f2496ba1b472e973c1441ce5035c0f7e119b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d506e8dee654376f21a75bd16bf3f2496ba1b472e973c1441ce5035c0f7e119b->enter($__internal_d506e8dee654376f21a75bd16bf3f2496ba1b472e973c1441ce5035c0f7e119b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d506e8dee654376f21a75bd16bf3f2496ba1b472e973c1441ce5035c0f7e119b->leave($__internal_d506e8dee654376f21a75bd16bf3f2496ba1b472e973c1441ce5035c0f7e119b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5025da542374b11dddff3e6e5b16963171c2d47bc634198f95f47fcc4e12a8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5025da542374b11dddff3e6e5b16963171c2d47bc634198f95f47fcc4e12a8c2->enter($__internal_5025da542374b11dddff3e6e5b16963171c2d47bc634198f95f47fcc4e12a8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_5025da542374b11dddff3e6e5b16963171c2d47bc634198f95f47fcc4e12a8c2->leave($__internal_5025da542374b11dddff3e6e5b16963171c2d47bc634198f95f47fcc4e12a8c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61da7ed60aa6560d4547881325c45818267feceb6592e826a113813a6481f232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61da7ed60aa6560d4547881325c45818267feceb6592e826a113813a6481f232->enter($__internal_61da7ed60aa6560d4547881325c45818267feceb6592e826a113813a6481f232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61da7ed60aa6560d4547881325c45818267feceb6592e826a113813a6481f232->leave($__internal_61da7ed60aa6560d4547881325c45818267feceb6592e826a113813a6481f232_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5238cb134850de79fd34c37b0eb1906d8dd3896db3bfbba58325c3941306f45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5238cb134850de79fd34c37b0eb1906d8dd3896db3bfbba58325c3941306f45d->enter($__internal_5238cb134850de79fd34c37b0eb1906d8dd3896db3bfbba58325c3941306f45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5238cb134850de79fd34c37b0eb1906d8dd3896db3bfbba58325c3941306f45d->leave($__internal_5238cb134850de79fd34c37b0eb1906d8dd3896db3bfbba58325c3941306f45d_prof);

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
