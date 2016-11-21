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
        $__internal_0115c253a5e66bc1b68dce0759b1b677a912c984c67722e5259efac34718785e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0115c253a5e66bc1b68dce0759b1b677a912c984c67722e5259efac34718785e->enter($__internal_0115c253a5e66bc1b68dce0759b1b677a912c984c67722e5259efac34718785e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0115c253a5e66bc1b68dce0759b1b677a912c984c67722e5259efac34718785e->leave($__internal_0115c253a5e66bc1b68dce0759b1b677a912c984c67722e5259efac34718785e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a761a828cc84c2a88a3d21c131aeeabee3fa4d18860fb041c761d8f17afc2b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a761a828cc84c2a88a3d21c131aeeabee3fa4d18860fb041c761d8f17afc2b69->enter($__internal_a761a828cc84c2a88a3d21c131aeeabee3fa4d18860fb041c761d8f17afc2b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a761a828cc84c2a88a3d21c131aeeabee3fa4d18860fb041c761d8f17afc2b69->leave($__internal_a761a828cc84c2a88a3d21c131aeeabee3fa4d18860fb041c761d8f17afc2b69_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_091f5c0c15adf3c2d310e1b85c7827fab8fc6bb595a4673d42c6b9b3070f297c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091f5c0c15adf3c2d310e1b85c7827fab8fc6bb595a4673d42c6b9b3070f297c->enter($__internal_091f5c0c15adf3c2d310e1b85c7827fab8fc6bb595a4673d42c6b9b3070f297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_091f5c0c15adf3c2d310e1b85c7827fab8fc6bb595a4673d42c6b9b3070f297c->leave($__internal_091f5c0c15adf3c2d310e1b85c7827fab8fc6bb595a4673d42c6b9b3070f297c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6ddec5afd8624094397f33bc46da17de4b04f9848f9c40e745a61722c6556107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddec5afd8624094397f33bc46da17de4b04f9848f9c40e745a61722c6556107->enter($__internal_6ddec5afd8624094397f33bc46da17de4b04f9848f9c40e745a61722c6556107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_6ddec5afd8624094397f33bc46da17de4b04f9848f9c40e745a61722c6556107->leave($__internal_6ddec5afd8624094397f33bc46da17de4b04f9848f9c40e745a61722c6556107_prof);

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
