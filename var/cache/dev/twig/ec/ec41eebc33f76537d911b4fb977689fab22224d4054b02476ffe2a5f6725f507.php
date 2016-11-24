<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_4ddde590f02e98e2bb1d5eb79d54a18c49e99185f4a6c339e2ada5e37c1deeec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_70d714f96590678410ab5a108dc6513f429c9898a19fa9ccafa8665e7c46370f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d714f96590678410ab5a108dc6513f429c9898a19fa9ccafa8665e7c46370f->enter($__internal_70d714f96590678410ab5a108dc6513f429c9898a19fa9ccafa8665e7c46370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d714f96590678410ab5a108dc6513f429c9898a19fa9ccafa8665e7c46370f->leave($__internal_70d714f96590678410ab5a108dc6513f429c9898a19fa9ccafa8665e7c46370f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f50e8b5de14fefb1e443709c7acdb229ed35b3a3a31477c7f9a31134a077b27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50e8b5de14fefb1e443709c7acdb229ed35b3a3a31477c7f9a31134a077b27a->enter($__internal_f50e8b5de14fefb1e443709c7acdb229ed35b3a3a31477c7f9a31134a077b27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f50e8b5de14fefb1e443709c7acdb229ed35b3a3a31477c7f9a31134a077b27a->leave($__internal_f50e8b5de14fefb1e443709c7acdb229ed35b3a3a31477c7f9a31134a077b27a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
