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
        $__internal_65834ff5c1bc2ada9131c9842c5c1796a799a19c94212af6ea35dbdc3dd5b179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65834ff5c1bc2ada9131c9842c5c1796a799a19c94212af6ea35dbdc3dd5b179->enter($__internal_65834ff5c1bc2ada9131c9842c5c1796a799a19c94212af6ea35dbdc3dd5b179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65834ff5c1bc2ada9131c9842c5c1796a799a19c94212af6ea35dbdc3dd5b179->leave($__internal_65834ff5c1bc2ada9131c9842c5c1796a799a19c94212af6ea35dbdc3dd5b179_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7496e5c699f538568e5ced6c181549cc948249c5a6d284e226a2a0195e9ae5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7496e5c699f538568e5ced6c181549cc948249c5a6d284e226a2a0195e9ae5d2->enter($__internal_7496e5c699f538568e5ced6c181549cc948249c5a6d284e226a2a0195e9ae5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_7496e5c699f538568e5ced6c181549cc948249c5a6d284e226a2a0195e9ae5d2->leave($__internal_7496e5c699f538568e5ced6c181549cc948249c5a6d284e226a2a0195e9ae5d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af6e2cd5b26f4b02fffd8228cc45b20d7cd9738dd01b919c8484b79be3758144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6e2cd5b26f4b02fffd8228cc45b20d7cd9738dd01b919c8484b79be3758144->enter($__internal_af6e2cd5b26f4b02fffd8228cc45b20d7cd9738dd01b919c8484b79be3758144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af6e2cd5b26f4b02fffd8228cc45b20d7cd9738dd01b919c8484b79be3758144->leave($__internal_af6e2cd5b26f4b02fffd8228cc45b20d7cd9738dd01b919c8484b79be3758144_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac63964d00d3d95328fc0035238bfda88fd12a8af21b73dde69660cc892d0179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac63964d00d3d95328fc0035238bfda88fd12a8af21b73dde69660cc892d0179->enter($__internal_ac63964d00d3d95328fc0035238bfda88fd12a8af21b73dde69660cc892d0179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ac63964d00d3d95328fc0035238bfda88fd12a8af21b73dde69660cc892d0179->leave($__internal_ac63964d00d3d95328fc0035238bfda88fd12a8af21b73dde69660cc892d0179_prof);

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
