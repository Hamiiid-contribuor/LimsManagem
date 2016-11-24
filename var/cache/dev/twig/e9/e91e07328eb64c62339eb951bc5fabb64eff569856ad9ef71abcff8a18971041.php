<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_655c3494b2db498b3ed2666b73cc71c3a988032dd4b0546393103c0611e2307f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_1cf3109c5fd7bcaee5edc9e9d6e42d8ba0b8517188d63e0c7e6888e7bd28631d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf3109c5fd7bcaee5edc9e9d6e42d8ba0b8517188d63e0c7e6888e7bd28631d->enter($__internal_1cf3109c5fd7bcaee5edc9e9d6e42d8ba0b8517188d63e0c7e6888e7bd28631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf3109c5fd7bcaee5edc9e9d6e42d8ba0b8517188d63e0c7e6888e7bd28631d->leave($__internal_1cf3109c5fd7bcaee5edc9e9d6e42d8ba0b8517188d63e0c7e6888e7bd28631d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1cb19ced9ba275a8cbdc04b9bd08bcd23a083985f7e6174ab5c3ba4024a5b8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb19ced9ba275a8cbdc04b9bd08bcd23a083985f7e6174ab5c3ba4024a5b8cc->enter($__internal_1cb19ced9ba275a8cbdc04b9bd08bcd23a083985f7e6174ab5c3ba4024a5b8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1cb19ced9ba275a8cbdc04b9bd08bcd23a083985f7e6174ab5c3ba4024a5b8cc->leave($__internal_1cb19ced9ba275a8cbdc04b9bd08bcd23a083985f7e6174ab5c3ba4024a5b8cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
