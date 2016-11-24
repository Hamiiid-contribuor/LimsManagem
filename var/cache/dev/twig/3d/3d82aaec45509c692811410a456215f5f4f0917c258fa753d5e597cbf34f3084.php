<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e34cfa3c1d0c3f28234cc7edf9f9151323c9973d0cab85f144c228ec70f3e355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_e6f87740bd15697d5c6116881ba6465740d0782a1cd9e57673a7a28a2875e361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f87740bd15697d5c6116881ba6465740d0782a1cd9e57673a7a28a2875e361->enter($__internal_e6f87740bd15697d5c6116881ba6465740d0782a1cd9e57673a7a28a2875e361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f87740bd15697d5c6116881ba6465740d0782a1cd9e57673a7a28a2875e361->leave($__internal_e6f87740bd15697d5c6116881ba6465740d0782a1cd9e57673a7a28a2875e361_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a75d8fefc9ba06eed1feb270ec9e5a15fecd87f0c59b054e90be99e2fd57f610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75d8fefc9ba06eed1feb270ec9e5a15fecd87f0c59b054e90be99e2fd57f610->enter($__internal_a75d8fefc9ba06eed1feb270ec9e5a15fecd87f0c59b054e90be99e2fd57f610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a75d8fefc9ba06eed1feb270ec9e5a15fecd87f0c59b054e90be99e2fd57f610->leave($__internal_a75d8fefc9ba06eed1feb270ec9e5a15fecd87f0c59b054e90be99e2fd57f610_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
