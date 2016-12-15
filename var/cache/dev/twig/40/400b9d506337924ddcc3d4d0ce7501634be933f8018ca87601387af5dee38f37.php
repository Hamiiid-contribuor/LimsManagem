<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3547e08f6d96c0dc30e99af6d363f9a9b140bf9d84fed8f2102479ae04cd26e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d66b1e0e72c8566c925e179e8449abde979771ddc4cc9b2c6b66b5ff590f3980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66b1e0e72c8566c925e179e8449abde979771ddc4cc9b2c6b66b5ff590f3980->enter($__internal_d66b1e0e72c8566c925e179e8449abde979771ddc4cc9b2c6b66b5ff590f3980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66b1e0e72c8566c925e179e8449abde979771ddc4cc9b2c6b66b5ff590f3980->leave($__internal_d66b1e0e72c8566c925e179e8449abde979771ddc4cc9b2c6b66b5ff590f3980_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f158baf30c36b1cd46532a15002c2aa407cf0ef895466b5f4bf89551d6e98a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f158baf30c36b1cd46532a15002c2aa407cf0ef895466b5f4bf89551d6e98a3d->enter($__internal_f158baf30c36b1cd46532a15002c2aa407cf0ef895466b5f4bf89551d6e98a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f158baf30c36b1cd46532a15002c2aa407cf0ef895466b5f4bf89551d6e98a3d->leave($__internal_f158baf30c36b1cd46532a15002c2aa407cf0ef895466b5f4bf89551d6e98a3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
