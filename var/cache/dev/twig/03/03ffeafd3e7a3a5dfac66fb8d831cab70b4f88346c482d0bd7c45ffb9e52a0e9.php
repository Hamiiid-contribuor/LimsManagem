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
        $__internal_ff8515a96c7a24e827d957491987e8bfcf411e8015611ac890b1c4757ee7a4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8515a96c7a24e827d957491987e8bfcf411e8015611ac890b1c4757ee7a4c9->enter($__internal_ff8515a96c7a24e827d957491987e8bfcf411e8015611ac890b1c4757ee7a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8515a96c7a24e827d957491987e8bfcf411e8015611ac890b1c4757ee7a4c9->leave($__internal_ff8515a96c7a24e827d957491987e8bfcf411e8015611ac890b1c4757ee7a4c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fcac3914ca8e955250f89535d14f3361979e604abc1cd1b9935ff0b583062d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcac3914ca8e955250f89535d14f3361979e604abc1cd1b9935ff0b583062d24->enter($__internal_fcac3914ca8e955250f89535d14f3361979e604abc1cd1b9935ff0b583062d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_fcac3914ca8e955250f89535d14f3361979e604abc1cd1b9935ff0b583062d24->leave($__internal_fcac3914ca8e955250f89535d14f3361979e604abc1cd1b9935ff0b583062d24_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bde0a7c59e7fd310f3083f052189cd869d2d29bbd66106f1601a01c673b810ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde0a7c59e7fd310f3083f052189cd869d2d29bbd66106f1601a01c673b810ed->enter($__internal_bde0a7c59e7fd310f3083f052189cd869d2d29bbd66106f1601a01c673b810ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bde0a7c59e7fd310f3083f052189cd869d2d29bbd66106f1601a01c673b810ed->leave($__internal_bde0a7c59e7fd310f3083f052189cd869d2d29bbd66106f1601a01c673b810ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_410ec54776c3a587479f522f4173588291900e5b41ef09e78150696badd3ce50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410ec54776c3a587479f522f4173588291900e5b41ef09e78150696badd3ce50->enter($__internal_410ec54776c3a587479f522f4173588291900e5b41ef09e78150696badd3ce50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_410ec54776c3a587479f522f4173588291900e5b41ef09e78150696badd3ce50->leave($__internal_410ec54776c3a587479f522f4173588291900e5b41ef09e78150696badd3ce50_prof);

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
