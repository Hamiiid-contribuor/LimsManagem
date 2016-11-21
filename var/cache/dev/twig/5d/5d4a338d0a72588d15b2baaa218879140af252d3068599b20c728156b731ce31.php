<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1598baec4a4b99f817680c0e0d223044213a10cb8f099de74d2f11feeb83fc13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_da0f2ae1bd1a94174be6bb3b643be6939c391a0d8e0c42d08df5d1344140e209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0f2ae1bd1a94174be6bb3b643be6939c391a0d8e0c42d08df5d1344140e209->enter($__internal_da0f2ae1bd1a94174be6bb3b643be6939c391a0d8e0c42d08df5d1344140e209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da0f2ae1bd1a94174be6bb3b643be6939c391a0d8e0c42d08df5d1344140e209->leave($__internal_da0f2ae1bd1a94174be6bb3b643be6939c391a0d8e0c42d08df5d1344140e209_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f60bfeb0781f97d29f0c3a1b37545a74af0993f1514068c09166fbb58c34ae57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60bfeb0781f97d29f0c3a1b37545a74af0993f1514068c09166fbb58c34ae57->enter($__internal_f60bfeb0781f97d29f0c3a1b37545a74af0993f1514068c09166fbb58c34ae57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f60bfeb0781f97d29f0c3a1b37545a74af0993f1514068c09166fbb58c34ae57->leave($__internal_f60bfeb0781f97d29f0c3a1b37545a74af0993f1514068c09166fbb58c34ae57_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
