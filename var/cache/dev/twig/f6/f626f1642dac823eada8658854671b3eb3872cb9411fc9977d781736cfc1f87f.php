<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4b7c097fc3e6bc6c3648b7bd5c2e9b695f8ba18e96d3c1d3982f0b7b61cbc9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_129e2a97517fa40cd05b7b635ed3b97bd153e1d31d3338b9e4708d44d77e6a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129e2a97517fa40cd05b7b635ed3b97bd153e1d31d3338b9e4708d44d77e6a35->enter($__internal_129e2a97517fa40cd05b7b635ed3b97bd153e1d31d3338b9e4708d44d77e6a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129e2a97517fa40cd05b7b635ed3b97bd153e1d31d3338b9e4708d44d77e6a35->leave($__internal_129e2a97517fa40cd05b7b635ed3b97bd153e1d31d3338b9e4708d44d77e6a35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_332e32a389b1f5cce9e9731e4ac36259d1641784c30ae01e9e6c6c153d661236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332e32a389b1f5cce9e9731e4ac36259d1641784c30ae01e9e6c6c153d661236->enter($__internal_332e32a389b1f5cce9e9731e4ac36259d1641784c30ae01e9e6c6c153d661236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_332e32a389b1f5cce9e9731e4ac36259d1641784c30ae01e9e6c6c153d661236->leave($__internal_332e32a389b1f5cce9e9731e4ac36259d1641784c30ae01e9e6c6c153d661236_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
