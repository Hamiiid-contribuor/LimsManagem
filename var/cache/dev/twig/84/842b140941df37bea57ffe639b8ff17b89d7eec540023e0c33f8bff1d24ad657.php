<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_beac9965e684622c0c1d546b1d618f0546936600f53b187530bc76243ae953f3 extends Twig_Template
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
        $__internal_6ebd63cfb35d7856a8606fe82d800345f3d1496566d9bf0987ef0e3caaf51415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebd63cfb35d7856a8606fe82d800345f3d1496566d9bf0987ef0e3caaf51415->enter($__internal_6ebd63cfb35d7856a8606fe82d800345f3d1496566d9bf0987ef0e3caaf51415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6ebd63cfb35d7856a8606fe82d800345f3d1496566d9bf0987ef0e3caaf51415->leave($__internal_6ebd63cfb35d7856a8606fe82d800345f3d1496566d9bf0987ef0e3caaf51415_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9f21c5b014dfe788fe0d8e12bedff607adc7dda26c3347128d4adb3f4872bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f21c5b014dfe788fe0d8e12bedff607adc7dda26c3347128d4adb3f4872bcb->enter($__internal_d9f21c5b014dfe788fe0d8e12bedff607adc7dda26c3347128d4adb3f4872bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_d9f21c5b014dfe788fe0d8e12bedff607adc7dda26c3347128d4adb3f4872bcb->leave($__internal_d9f21c5b014dfe788fe0d8e12bedff607adc7dda26c3347128d4adb3f4872bcb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
