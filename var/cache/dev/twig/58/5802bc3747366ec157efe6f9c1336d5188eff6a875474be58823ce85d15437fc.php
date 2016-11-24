<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6f1cacd3b7546700b2d184a10238235c116020471308d3caa942e0f41830d1bd extends Twig_Template
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
        $__internal_4ca51d461e4d82cbc095994e4702662852f9b8e1aeff507c616b5039b04af22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca51d461e4d82cbc095994e4702662852f9b8e1aeff507c616b5039b04af22d->enter($__internal_4ca51d461e4d82cbc095994e4702662852f9b8e1aeff507c616b5039b04af22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ca51d461e4d82cbc095994e4702662852f9b8e1aeff507c616b5039b04af22d->leave($__internal_4ca51d461e4d82cbc095994e4702662852f9b8e1aeff507c616b5039b04af22d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b6c78a931f6891a076031e16fdd14c842f0cf668f6095ab4143ec84506d3c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6c78a931f6891a076031e16fdd14c842f0cf668f6095ab4143ec84506d3c0e->enter($__internal_1b6c78a931f6891a076031e16fdd14c842f0cf668f6095ab4143ec84506d3c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_1b6c78a931f6891a076031e16fdd14c842f0cf668f6095ab4143ec84506d3c0e->leave($__internal_1b6c78a931f6891a076031e16fdd14c842f0cf668f6095ab4143ec84506d3c0e_prof);

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
