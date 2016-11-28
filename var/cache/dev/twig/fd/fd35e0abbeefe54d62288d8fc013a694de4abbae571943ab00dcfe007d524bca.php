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
        $__internal_0ce8a0ec6b3a974f00e17024050c40dd95ba9bf31b79faf1ba74375a754bb1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce8a0ec6b3a974f00e17024050c40dd95ba9bf31b79faf1ba74375a754bb1c8->enter($__internal_0ce8a0ec6b3a974f00e17024050c40dd95ba9bf31b79faf1ba74375a754bb1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ce8a0ec6b3a974f00e17024050c40dd95ba9bf31b79faf1ba74375a754bb1c8->leave($__internal_0ce8a0ec6b3a974f00e17024050c40dd95ba9bf31b79faf1ba74375a754bb1c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd0e8d34ad0bc92327e5d75496300a11c4e52a25a1fb6a8928c48c6784c53a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0e8d34ad0bc92327e5d75496300a11c4e52a25a1fb6a8928c48c6784c53a8a->enter($__internal_dd0e8d34ad0bc92327e5d75496300a11c4e52a25a1fb6a8928c48c6784c53a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_dd0e8d34ad0bc92327e5d75496300a11c4e52a25a1fb6a8928c48c6784c53a8a->leave($__internal_dd0e8d34ad0bc92327e5d75496300a11c4e52a25a1fb6a8928c48c6784c53a8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b7c91223a4d2fa5f6b7ec37b5c8aa2b63e3a4a47ea7b09991d53a77d4fc2ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7c91223a4d2fa5f6b7ec37b5c8aa2b63e3a4a47ea7b09991d53a77d4fc2ffe->enter($__internal_5b7c91223a4d2fa5f6b7ec37b5c8aa2b63e3a4a47ea7b09991d53a77d4fc2ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b7c91223a4d2fa5f6b7ec37b5c8aa2b63e3a4a47ea7b09991d53a77d4fc2ffe->leave($__internal_5b7c91223a4d2fa5f6b7ec37b5c8aa2b63e3a4a47ea7b09991d53a77d4fc2ffe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e78e7e4cba560e77b431a5934b81444f6d7411d50e377fda4c6c57484224a881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78e7e4cba560e77b431a5934b81444f6d7411d50e377fda4c6c57484224a881->enter($__internal_e78e7e4cba560e77b431a5934b81444f6d7411d50e377fda4c6c57484224a881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e78e7e4cba560e77b431a5934b81444f6d7411d50e377fda4c6c57484224a881->leave($__internal_e78e7e4cba560e77b431a5934b81444f6d7411d50e377fda4c6c57484224a881_prof);

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
