<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_afde305c19499cf3d7aab8c440e075fd2d908f72296d0aa94f28774faa7d98fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9df15127424278dbafee96d9df9a1f86f33628dd33ff02a46053bc19284989c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9df15127424278dbafee96d9df9a1f86f33628dd33ff02a46053bc19284989c->enter($__internal_e9df15127424278dbafee96d9df9a1f86f33628dd33ff02a46053bc19284989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e9df15127424278dbafee96d9df9a1f86f33628dd33ff02a46053bc19284989c->leave($__internal_e9df15127424278dbafee96d9df9a1f86f33628dd33ff02a46053bc19284989c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_706096cc9e99480bb44067d7d47f8096912cfdd90c2c04cbb01a457a5fc29734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706096cc9e99480bb44067d7d47f8096912cfdd90c2c04cbb01a457a5fc29734->enter($__internal_706096cc9e99480bb44067d7d47f8096912cfdd90c2c04cbb01a457a5fc29734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_706096cc9e99480bb44067d7d47f8096912cfdd90c2c04cbb01a457a5fc29734->leave($__internal_706096cc9e99480bb44067d7d47f8096912cfdd90c2c04cbb01a457a5fc29734_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_42a645742cb9d61d82d8adf9c338306b6af0ad7891f488b4d57861edb80bc1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a645742cb9d61d82d8adf9c338306b6af0ad7891f488b4d57861edb80bc1fe->enter($__internal_42a645742cb9d61d82d8adf9c338306b6af0ad7891f488b4d57861edb80bc1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_42a645742cb9d61d82d8adf9c338306b6af0ad7891f488b4d57861edb80bc1fe->leave($__internal_42a645742cb9d61d82d8adf9c338306b6af0ad7891f488b4d57861edb80bc1fe_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0c4455c356c66f64915a859c9cbc63fe74b6c1ff165e89a4a4b2cd255814e04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4455c356c66f64915a859c9cbc63fe74b6c1ff165e89a4a4b2cd255814e04e->enter($__internal_0c4455c356c66f64915a859c9cbc63fe74b6c1ff165e89a4a4b2cd255814e04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_0c4455c356c66f64915a859c9cbc63fe74b6c1ff165e89a4a4b2cd255814e04e->leave($__internal_0c4455c356c66f64915a859c9cbc63fe74b6c1ff165e89a4a4b2cd255814e04e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
