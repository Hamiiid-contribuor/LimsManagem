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
        $__internal_cf7da61a0b4b38a459d6a665f089e590249bb11f98b407224cd43163765796f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7da61a0b4b38a459d6a665f089e590249bb11f98b407224cd43163765796f7->enter($__internal_cf7da61a0b4b38a459d6a665f089e590249bb11f98b407224cd43163765796f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7da61a0b4b38a459d6a665f089e590249bb11f98b407224cd43163765796f7->leave($__internal_cf7da61a0b4b38a459d6a665f089e590249bb11f98b407224cd43163765796f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c455ad4237707958442d82643c2ff5af34aa3e455c425c5a97f8b61fc14a929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c455ad4237707958442d82643c2ff5af34aa3e455c425c5a97f8b61fc14a929->enter($__internal_9c455ad4237707958442d82643c2ff5af34aa3e455c425c5a97f8b61fc14a929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_9c455ad4237707958442d82643c2ff5af34aa3e455c425c5a97f8b61fc14a929->leave($__internal_9c455ad4237707958442d82643c2ff5af34aa3e455c425c5a97f8b61fc14a929_prof);

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
