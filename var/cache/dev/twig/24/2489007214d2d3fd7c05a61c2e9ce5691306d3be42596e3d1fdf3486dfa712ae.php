<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4a690f67733e61d284871f09096560b1086ff02d170339153ead3e24d24c00e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_12cd7b40f90b051df8afcdeb3c32a69d016a6b9e4d7b6ff524d451e4997d3dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cd7b40f90b051df8afcdeb3c32a69d016a6b9e4d7b6ff524d451e4997d3dbd->enter($__internal_12cd7b40f90b051df8afcdeb3c32a69d016a6b9e4d7b6ff524d451e4997d3dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12cd7b40f90b051df8afcdeb3c32a69d016a6b9e4d7b6ff524d451e4997d3dbd->leave($__internal_12cd7b40f90b051df8afcdeb3c32a69d016a6b9e4d7b6ff524d451e4997d3dbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b00c9634c3dc58061b4f6a39430201cd597692e03628a8b4d0b78b056aa644d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00c9634c3dc58061b4f6a39430201cd597692e03628a8b4d0b78b056aa644d8->enter($__internal_b00c9634c3dc58061b4f6a39430201cd597692e03628a8b4d0b78b056aa644d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b00c9634c3dc58061b4f6a39430201cd597692e03628a8b4d0b78b056aa644d8->leave($__internal_b00c9634c3dc58061b4f6a39430201cd597692e03628a8b4d0b78b056aa644d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
