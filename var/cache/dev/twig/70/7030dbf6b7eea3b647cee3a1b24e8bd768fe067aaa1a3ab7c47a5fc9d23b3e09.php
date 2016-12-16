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
        $__internal_f322c0da436b8cf1b866cfa48eb21c51de208f9e571befd1669e9c61d554329f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f322c0da436b8cf1b866cfa48eb21c51de208f9e571befd1669e9c61d554329f->enter($__internal_f322c0da436b8cf1b866cfa48eb21c51de208f9e571befd1669e9c61d554329f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f322c0da436b8cf1b866cfa48eb21c51de208f9e571befd1669e9c61d554329f->leave($__internal_f322c0da436b8cf1b866cfa48eb21c51de208f9e571befd1669e9c61d554329f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de9a327f7947c0df53c42df15528c9e16cf3be9e6c1353d54449306508fb0dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9a327f7947c0df53c42df15528c9e16cf3be9e6c1353d54449306508fb0dbd->enter($__internal_de9a327f7947c0df53c42df15528c9e16cf3be9e6c1353d54449306508fb0dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_de9a327f7947c0df53c42df15528c9e16cf3be9e6c1353d54449306508fb0dbd->leave($__internal_de9a327f7947c0df53c42df15528c9e16cf3be9e6c1353d54449306508fb0dbd_prof);

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
