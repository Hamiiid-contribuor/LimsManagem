<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d8d447272ed51a374cf2ed12d7e23765875f685edc519a6f2eb21259298dadde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_1b953bfa68fcf05fa7b3c978e5dcd7e0dcffd9295259ff1d21bafd24f895d04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b953bfa68fcf05fa7b3c978e5dcd7e0dcffd9295259ff1d21bafd24f895d04b->enter($__internal_1b953bfa68fcf05fa7b3c978e5dcd7e0dcffd9295259ff1d21bafd24f895d04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b953bfa68fcf05fa7b3c978e5dcd7e0dcffd9295259ff1d21bafd24f895d04b->leave($__internal_1b953bfa68fcf05fa7b3c978e5dcd7e0dcffd9295259ff1d21bafd24f895d04b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2a1000eceee2e970d7131a7d257f0b09efbc59060090dc3c4c9aa0e32cf98c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a1000eceee2e970d7131a7d257f0b09efbc59060090dc3c4c9aa0e32cf98c0->enter($__internal_d2a1000eceee2e970d7131a7d257f0b09efbc59060090dc3c4c9aa0e32cf98c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d2a1000eceee2e970d7131a7d257f0b09efbc59060090dc3c4c9aa0e32cf98c0->leave($__internal_d2a1000eceee2e970d7131a7d257f0b09efbc59060090dc3c4c9aa0e32cf98c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
