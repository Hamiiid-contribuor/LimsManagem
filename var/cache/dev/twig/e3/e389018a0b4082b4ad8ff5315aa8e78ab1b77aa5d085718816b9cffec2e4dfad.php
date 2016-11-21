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
        $__internal_cc362273d74525e01685ee1b43c0e550c2e582939bcb8b14f51adbcf6c57d8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc362273d74525e01685ee1b43c0e550c2e582939bcb8b14f51adbcf6c57d8b2->enter($__internal_cc362273d74525e01685ee1b43c0e550c2e582939bcb8b14f51adbcf6c57d8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cc362273d74525e01685ee1b43c0e550c2e582939bcb8b14f51adbcf6c57d8b2->leave($__internal_cc362273d74525e01685ee1b43c0e550c2e582939bcb8b14f51adbcf6c57d8b2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ddf07795702ced8c443404287f6b40f360a79d4ce336891c54680bf49d852363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf07795702ced8c443404287f6b40f360a79d4ce336891c54680bf49d852363->enter($__internal_ddf07795702ced8c443404287f6b40f360a79d4ce336891c54680bf49d852363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ddf07795702ced8c443404287f6b40f360a79d4ce336891c54680bf49d852363->leave($__internal_ddf07795702ced8c443404287f6b40f360a79d4ce336891c54680bf49d852363_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b735d97e7925a03beaa0788bf0c30132fad0119a027da170c97232e96d7bbf9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b735d97e7925a03beaa0788bf0c30132fad0119a027da170c97232e96d7bbf9d->enter($__internal_b735d97e7925a03beaa0788bf0c30132fad0119a027da170c97232e96d7bbf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b735d97e7925a03beaa0788bf0c30132fad0119a027da170c97232e96d7bbf9d->leave($__internal_b735d97e7925a03beaa0788bf0c30132fad0119a027da170c97232e96d7bbf9d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_562a1e44fa3bbe08f44c866689407a1a23244f74585872748d3aa420e74de977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562a1e44fa3bbe08f44c866689407a1a23244f74585872748d3aa420e74de977->enter($__internal_562a1e44fa3bbe08f44c866689407a1a23244f74585872748d3aa420e74de977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_562a1e44fa3bbe08f44c866689407a1a23244f74585872748d3aa420e74de977->leave($__internal_562a1e44fa3bbe08f44c866689407a1a23244f74585872748d3aa420e74de977_prof);

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
