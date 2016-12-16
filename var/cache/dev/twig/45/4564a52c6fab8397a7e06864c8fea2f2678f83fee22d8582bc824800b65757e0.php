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
        $__internal_3cf6f53333c217b09d0518df64c9b9f274cbfd6ec9410a951ac5c00a47a5858b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf6f53333c217b09d0518df64c9b9f274cbfd6ec9410a951ac5c00a47a5858b->enter($__internal_3cf6f53333c217b09d0518df64c9b9f274cbfd6ec9410a951ac5c00a47a5858b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3cf6f53333c217b09d0518df64c9b9f274cbfd6ec9410a951ac5c00a47a5858b->leave($__internal_3cf6f53333c217b09d0518df64c9b9f274cbfd6ec9410a951ac5c00a47a5858b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_356853761727b2aaee9b5e9ee545f4ffff9eb38f26427226478af9bd3a2c9805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356853761727b2aaee9b5e9ee545f4ffff9eb38f26427226478af9bd3a2c9805->enter($__internal_356853761727b2aaee9b5e9ee545f4ffff9eb38f26427226478af9bd3a2c9805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_356853761727b2aaee9b5e9ee545f4ffff9eb38f26427226478af9bd3a2c9805->leave($__internal_356853761727b2aaee9b5e9ee545f4ffff9eb38f26427226478af9bd3a2c9805_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_05756d7c9b74118db00340c99f57993acc22bcb346fdaf4899901293a5b8f236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05756d7c9b74118db00340c99f57993acc22bcb346fdaf4899901293a5b8f236->enter($__internal_05756d7c9b74118db00340c99f57993acc22bcb346fdaf4899901293a5b8f236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_05756d7c9b74118db00340c99f57993acc22bcb346fdaf4899901293a5b8f236->leave($__internal_05756d7c9b74118db00340c99f57993acc22bcb346fdaf4899901293a5b8f236_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7ec5a09cd74c63102712cd192a1b43648e5fe6cb193cb3c980c1e171ed3a7d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec5a09cd74c63102712cd192a1b43648e5fe6cb193cb3c980c1e171ed3a7d9b->enter($__internal_7ec5a09cd74c63102712cd192a1b43648e5fe6cb193cb3c980c1e171ed3a7d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_7ec5a09cd74c63102712cd192a1b43648e5fe6cb193cb3c980c1e171ed3a7d9b->leave($__internal_7ec5a09cd74c63102712cd192a1b43648e5fe6cb193cb3c980c1e171ed3a7d9b_prof);

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
