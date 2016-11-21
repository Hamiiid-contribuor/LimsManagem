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
        $__internal_fffe739dc31b8365e3de9f91e3d3b5afdd1f3f318a2d0e8d8bd8fe0f3c99c711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffe739dc31b8365e3de9f91e3d3b5afdd1f3f318a2d0e8d8bd8fe0f3c99c711->enter($__internal_fffe739dc31b8365e3de9f91e3d3b5afdd1f3f318a2d0e8d8bd8fe0f3c99c711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffe739dc31b8365e3de9f91e3d3b5afdd1f3f318a2d0e8d8bd8fe0f3c99c711->leave($__internal_fffe739dc31b8365e3de9f91e3d3b5afdd1f3f318a2d0e8d8bd8fe0f3c99c711_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ddfde9e8b6a509b77acd676f9e059dc8cf659ca04422477c76a589be399278a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfde9e8b6a509b77acd676f9e059dc8cf659ca04422477c76a589be399278a7->enter($__internal_ddfde9e8b6a509b77acd676f9e059dc8cf659ca04422477c76a589be399278a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_ddfde9e8b6a509b77acd676f9e059dc8cf659ca04422477c76a589be399278a7->leave($__internal_ddfde9e8b6a509b77acd676f9e059dc8cf659ca04422477c76a589be399278a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc96eff2eebd05bd06a4915930cfa4bdd682007993ebb892ad818bb9cd79191f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc96eff2eebd05bd06a4915930cfa4bdd682007993ebb892ad818bb9cd79191f->enter($__internal_dc96eff2eebd05bd06a4915930cfa4bdd682007993ebb892ad818bb9cd79191f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc96eff2eebd05bd06a4915930cfa4bdd682007993ebb892ad818bb9cd79191f->leave($__internal_dc96eff2eebd05bd06a4915930cfa4bdd682007993ebb892ad818bb9cd79191f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fe5143af44bf925b09d16cc4543b1ccb2d275943ee241875df7486a28fdac8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe5143af44bf925b09d16cc4543b1ccb2d275943ee241875df7486a28fdac8d->enter($__internal_3fe5143af44bf925b09d16cc4543b1ccb2d275943ee241875df7486a28fdac8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3fe5143af44bf925b09d16cc4543b1ccb2d275943ee241875df7486a28fdac8d->leave($__internal_3fe5143af44bf925b09d16cc4543b1ccb2d275943ee241875df7486a28fdac8d_prof);

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
