<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_eccc03f1a46efb29987352cf5847d16f5b123115064429f5d454bdf69c671324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fb8f7e11f9fac8b41daffee8148371089e21bd0e61c35dd65ef289089b52cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb8f7e11f9fac8b41daffee8148371089e21bd0e61c35dd65ef289089b52cb9->enter($__internal_2fb8f7e11f9fac8b41daffee8148371089e21bd0e61c35dd65ef289089b52cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2fb8f7e11f9fac8b41daffee8148371089e21bd0e61c35dd65ef289089b52cb9->leave($__internal_2fb8f7e11f9fac8b41daffee8148371089e21bd0e61c35dd65ef289089b52cb9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1a2b8415b8027d54da63a11efd3ef6cc06b8659329f9ab5b591588e6099f337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a2b8415b8027d54da63a11efd3ef6cc06b8659329f9ab5b591588e6099f337->enter($__internal_c1a2b8415b8027d54da63a11efd3ef6cc06b8659329f9ab5b591588e6099f337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_c1a2b8415b8027d54da63a11efd3ef6cc06b8659329f9ab5b591588e6099f337->leave($__internal_c1a2b8415b8027d54da63a11efd3ef6cc06b8659329f9ab5b591588e6099f337_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
