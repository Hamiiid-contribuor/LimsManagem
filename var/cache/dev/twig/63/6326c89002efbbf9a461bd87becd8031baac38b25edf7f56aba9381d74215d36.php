<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_248b0bd6272dcb192ce106552b2b91ea83a14d0f6be7aef13b402b9f063fe400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_cb57a1c7397398f1704f6c6adf2526ba87ca0f1d5a50139eead8bd5cbd6b4ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb57a1c7397398f1704f6c6adf2526ba87ca0f1d5a50139eead8bd5cbd6b4ada->enter($__internal_cb57a1c7397398f1704f6c6adf2526ba87ca0f1d5a50139eead8bd5cbd6b4ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb57a1c7397398f1704f6c6adf2526ba87ca0f1d5a50139eead8bd5cbd6b4ada->leave($__internal_cb57a1c7397398f1704f6c6adf2526ba87ca0f1d5a50139eead8bd5cbd6b4ada_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e783f7ed9d65d5220c55b4f9b9c1a74f208347ccbc1a0891d9eec064183b10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e783f7ed9d65d5220c55b4f9b9c1a74f208347ccbc1a0891d9eec064183b10d->enter($__internal_9e783f7ed9d65d5220c55b4f9b9c1a74f208347ccbc1a0891d9eec064183b10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9e783f7ed9d65d5220c55b4f9b9c1a74f208347ccbc1a0891d9eec064183b10d->leave($__internal_9e783f7ed9d65d5220c55b4f9b9c1a74f208347ccbc1a0891d9eec064183b10d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
