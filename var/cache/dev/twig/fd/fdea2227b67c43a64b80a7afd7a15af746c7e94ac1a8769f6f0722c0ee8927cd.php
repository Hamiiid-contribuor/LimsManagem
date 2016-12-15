<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_1e066e85be209056014f6f23cf39bafea298023918362ed30c3bf1c6ac65ce9d extends Twig_Template
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
        $__internal_c35911fc2cdb91fec80cd7e29e05614d333e9521f64e0a420ae2985ac76a6a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35911fc2cdb91fec80cd7e29e05614d333e9521f64e0a420ae2985ac76a6a8c->enter($__internal_c35911fc2cdb91fec80cd7e29e05614d333e9521f64e0a420ae2985ac76a6a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c35911fc2cdb91fec80cd7e29e05614d333e9521f64e0a420ae2985ac76a6a8c->leave($__internal_c35911fc2cdb91fec80cd7e29e05614d333e9521f64e0a420ae2985ac76a6a8c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1ab08331adf61f875d568b51870d2781e3495c83244c7663eee9f6f95fb11abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab08331adf61f875d568b51870d2781e3495c83244c7663eee9f6f95fb11abe->enter($__internal_1ab08331adf61f875d568b51870d2781e3495c83244c7663eee9f6f95fb11abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1ab08331adf61f875d568b51870d2781e3495c83244c7663eee9f6f95fb11abe->leave($__internal_1ab08331adf61f875d568b51870d2781e3495c83244c7663eee9f6f95fb11abe_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_91c31a8d6d9a7caacd278d598c03c64291208701e86692abc1fa1442dbc283fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c31a8d6d9a7caacd278d598c03c64291208701e86692abc1fa1442dbc283fc->enter($__internal_91c31a8d6d9a7caacd278d598c03c64291208701e86692abc1fa1442dbc283fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_91c31a8d6d9a7caacd278d598c03c64291208701e86692abc1fa1442dbc283fc->leave($__internal_91c31a8d6d9a7caacd278d598c03c64291208701e86692abc1fa1442dbc283fc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a185d8b15374b3173a122a051b565ea7280970b228266f13dbb1bdda3dc6b015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a185d8b15374b3173a122a051b565ea7280970b228266f13dbb1bdda3dc6b015->enter($__internal_a185d8b15374b3173a122a051b565ea7280970b228266f13dbb1bdda3dc6b015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_a185d8b15374b3173a122a051b565ea7280970b228266f13dbb1bdda3dc6b015->leave($__internal_a185d8b15374b3173a122a051b565ea7280970b228266f13dbb1bdda3dc6b015_prof);

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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
