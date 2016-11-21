<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a0832f219ba607fd553aed16d65df93af2c2443a6e3c1f32c191593d3b722ab3 extends Twig_Template
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
        $__internal_f16340a19136b8624e4005992c02bc0805249c71a02bc6da3cb11c92c978ae5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16340a19136b8624e4005992c02bc0805249c71a02bc6da3cb11c92c978ae5b->enter($__internal_f16340a19136b8624e4005992c02bc0805249c71a02bc6da3cb11c92c978ae5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f16340a19136b8624e4005992c02bc0805249c71a02bc6da3cb11c92c978ae5b->leave($__internal_f16340a19136b8624e4005992c02bc0805249c71a02bc6da3cb11c92c978ae5b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d218039afd258c829630c9b58d0bdc4c939311bf610723c082bf6c20c43ee203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d218039afd258c829630c9b58d0bdc4c939311bf610723c082bf6c20c43ee203->enter($__internal_d218039afd258c829630c9b58d0bdc4c939311bf610723c082bf6c20c43ee203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d218039afd258c829630c9b58d0bdc4c939311bf610723c082bf6c20c43ee203->leave($__internal_d218039afd258c829630c9b58d0bdc4c939311bf610723c082bf6c20c43ee203_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ed1755b2487466b7257712be4bf171384de7b605fe37e3cf943bb982b8e1d522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1755b2487466b7257712be4bf171384de7b605fe37e3cf943bb982b8e1d522->enter($__internal_ed1755b2487466b7257712be4bf171384de7b605fe37e3cf943bb982b8e1d522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ed1755b2487466b7257712be4bf171384de7b605fe37e3cf943bb982b8e1d522->leave($__internal_ed1755b2487466b7257712be4bf171384de7b605fe37e3cf943bb982b8e1d522_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4c5f64f8b18c719c7698b3f20028edf03c358416c5935cdfc4b23e7665f55990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5f64f8b18c719c7698b3f20028edf03c358416c5935cdfc4b23e7665f55990->enter($__internal_4c5f64f8b18c719c7698b3f20028edf03c358416c5935cdfc4b23e7665f55990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_4c5f64f8b18c719c7698b3f20028edf03c358416c5935cdfc4b23e7665f55990->leave($__internal_4c5f64f8b18c719c7698b3f20028edf03c358416c5935cdfc4b23e7665f55990_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
