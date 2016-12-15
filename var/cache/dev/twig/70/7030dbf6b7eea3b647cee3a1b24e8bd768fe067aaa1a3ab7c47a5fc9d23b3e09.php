<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_45bb52411a12b798b60eb8899689550ca2b40e5b48a4eea2b5b14754c0233f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dea245434849973b0b28e71ab14810f6129a1cf1b3b88565294900bad244afe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea245434849973b0b28e71ab14810f6129a1cf1b3b88565294900bad244afe7->enter($__internal_dea245434849973b0b28e71ab14810f6129a1cf1b3b88565294900bad244afe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea245434849973b0b28e71ab14810f6129a1cf1b3b88565294900bad244afe7->leave($__internal_dea245434849973b0b28e71ab14810f6129a1cf1b3b88565294900bad244afe7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56bf544198965f495c936cc3c80e49d32f35aa6f75bd277d28ee96292052fed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bf544198965f495c936cc3c80e49d32f35aa6f75bd277d28ee96292052fed6->enter($__internal_56bf544198965f495c936cc3c80e49d32f35aa6f75bd277d28ee96292052fed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_56bf544198965f495c936cc3c80e49d32f35aa6f75bd277d28ee96292052fed6->leave($__internal_56bf544198965f495c936cc3c80e49d32f35aa6f75bd277d28ee96292052fed6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
