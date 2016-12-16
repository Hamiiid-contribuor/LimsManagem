<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_6e42755b3b3c068ab61696fc278a6bb05f2526cba8ca49dfa11e92ad98e2670c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_b9597a5ceb62a87878ce3fdc509358ff5f620d6fb94b4f187a0b0f6c3b383893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9597a5ceb62a87878ce3fdc509358ff5f620d6fb94b4f187a0b0f6c3b383893->enter($__internal_b9597a5ceb62a87878ce3fdc509358ff5f620d6fb94b4f187a0b0f6c3b383893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9597a5ceb62a87878ce3fdc509358ff5f620d6fb94b4f187a0b0f6c3b383893->leave($__internal_b9597a5ceb62a87878ce3fdc509358ff5f620d6fb94b4f187a0b0f6c3b383893_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4624c6766c9281afca3dc888593566d91f8c2722efb7b81ad4faf26f0b7cd6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4624c6766c9281afca3dc888593566d91f8c2722efb7b81ad4faf26f0b7cd6c6->enter($__internal_4624c6766c9281afca3dc888593566d91f8c2722efb7b81ad4faf26f0b7cd6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/ChangePassword/change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_4624c6766c9281afca3dc888593566d91f8c2722efb7b81ad4faf26f0b7cd6c6->leave($__internal_4624c6766c9281afca3dc888593566d91f8c2722efb7b81ad4faf26f0b7cd6c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
