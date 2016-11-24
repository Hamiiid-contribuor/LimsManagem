<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_2605ef5cea3da619b63426d8b8ac796b410c8a78d160abae548f1870d176ca63 extends Twig_Template
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
        $__internal_a7b24ed79e376378cbb9b7b9abe4ac71191820b451558772369fa7cf128e6783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b24ed79e376378cbb9b7b9abe4ac71191820b451558772369fa7cf128e6783->enter($__internal_a7b24ed79e376378cbb9b7b9abe4ac71191820b451558772369fa7cf128e6783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a7b24ed79e376378cbb9b7b9abe4ac71191820b451558772369fa7cf128e6783->leave($__internal_a7b24ed79e376378cbb9b7b9abe4ac71191820b451558772369fa7cf128e6783_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b6827ef2d230ca42a1447aff431ad7f63d0f5ae920787ffc52f030ce174af374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6827ef2d230ca42a1447aff431ad7f63d0f5ae920787ffc52f030ce174af374->enter($__internal_b6827ef2d230ca42a1447aff431ad7f63d0f5ae920787ffc52f030ce174af374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b6827ef2d230ca42a1447aff431ad7f63d0f5ae920787ffc52f030ce174af374->leave($__internal_b6827ef2d230ca42a1447aff431ad7f63d0f5ae920787ffc52f030ce174af374_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6ce88bc5dbce3e04f9f34d43088e9378416af4d82178aa32c70ae205627e6fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce88bc5dbce3e04f9f34d43088e9378416af4d82178aa32c70ae205627e6fb6->enter($__internal_6ce88bc5dbce3e04f9f34d43088e9378416af4d82178aa32c70ae205627e6fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6ce88bc5dbce3e04f9f34d43088e9378416af4d82178aa32c70ae205627e6fb6->leave($__internal_6ce88bc5dbce3e04f9f34d43088e9378416af4d82178aa32c70ae205627e6fb6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d8de930ffbf9a1d9a15e4e80aad80f8119fcd107e9d56f8f1f8684907f2af738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8de930ffbf9a1d9a15e4e80aad80f8119fcd107e9d56f8f1f8684907f2af738->enter($__internal_d8de930ffbf9a1d9a15e4e80aad80f8119fcd107e9d56f8f1f8684907f2af738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_d8de930ffbf9a1d9a15e4e80aad80f8119fcd107e9d56f8f1f8684907f2af738->leave($__internal_d8de930ffbf9a1d9a15e4e80aad80f8119fcd107e9d56f8f1f8684907f2af738_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
