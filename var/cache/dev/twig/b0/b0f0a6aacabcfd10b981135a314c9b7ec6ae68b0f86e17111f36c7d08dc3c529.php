<?php

/* UtilisateurBundle:Default:index.html.twig */
class __TwigTemplate_eaefcd313cae48bf299915c9801a5a0b4f1cd5e066fd734b18ecfaa47c12e79e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UtilisateurBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bd89e815cfb4461917cd3fc519e5176475af34c928be3bad8504a3b49015e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd89e815cfb4461917cd3fc519e5176475af34c928be3bad8504a3b49015e69->enter($__internal_6bd89e815cfb4461917cd3fc519e5176475af34c928be3bad8504a3b49015e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateurBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd89e815cfb4461917cd3fc519e5176475af34c928be3bad8504a3b49015e69->leave($__internal_6bd89e815cfb4461917cd3fc519e5176475af34c928be3bad8504a3b49015e69_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf79af245bf657ca2bf0bda9bf6d754a698a4c62ab72dafa98c9ff7df68d2016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf79af245bf657ca2bf0bda9bf6d754a698a4c62ab72dafa98c9ff7df68d2016->enter($__internal_bf79af245bf657ca2bf0bda9bf6d754a698a4c62ab72dafa98c9ff7df68d2016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "UtilisateurBundle:Default:index.html.twig"));

        // line 4
        echo "    Hello World!

";
        
        $__internal_bf79af245bf657ca2bf0bda9bf6d754a698a4c62ab72dafa98c9ff7df68d2016->leave($__internal_bf79af245bf657ca2bf0bda9bf6d754a698a4c62ab72dafa98c9ff7df68d2016_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateurBundle:Default:index.html.twig";
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
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block content %}
    Hello World!

{% endblock content %}
", "UtilisateurBundle:Default:index.html.twig", "C:\\wamp\\www\\LIMS\\src\\Utilisateur\\UtilisateurBundle/Resources/views/Default/index.html.twig");
    }
}
