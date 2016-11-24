<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_f77a7955073030c6c3663a392ff7cfb4155aed09fcb388ba69c441aa3fe6a03b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_7d31d52e5f463bd5145528438e2d3a3488b12023652a50049f7c23030621d5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d31d52e5f463bd5145528438e2d3a3488b12023652a50049f7c23030621d5fd->enter($__internal_7d31d52e5f463bd5145528438e2d3a3488b12023652a50049f7c23030621d5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d31d52e5f463bd5145528438e2d3a3488b12023652a50049f7c23030621d5fd->leave($__internal_7d31d52e5f463bd5145528438e2d3a3488b12023652a50049f7c23030621d5fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8b304d78b66369ebf3bad7d37365b72df1226c0957bf1a7c46327da43e8ba9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b304d78b66369ebf3bad7d37365b72df1226c0957bf1a7c46327da43e8ba9e->enter($__internal_e8b304d78b66369ebf3bad7d37365b72df1226c0957bf1a7c46327da43e8ba9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e8b304d78b66369ebf3bad7d37365b72df1226c0957bf1a7c46327da43e8ba9e->leave($__internal_e8b304d78b66369ebf3bad7d37365b72df1226c0957bf1a7c46327da43e8ba9e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
