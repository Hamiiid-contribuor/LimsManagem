<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_19ee765a82d84b8ca660ec4f16496645dffac1fc6e74600cf2bb4f11e50da1e2 extends Twig_Template
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
        $__internal_4d773e9d237bc6628e51464ba8ddc776691fc0bb9630d66b4d60bdd0108f816b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d773e9d237bc6628e51464ba8ddc776691fc0bb9630d66b4d60bdd0108f816b->enter($__internal_4d773e9d237bc6628e51464ba8ddc776691fc0bb9630d66b4d60bdd0108f816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4d773e9d237bc6628e51464ba8ddc776691fc0bb9630d66b4d60bdd0108f816b->leave($__internal_4d773e9d237bc6628e51464ba8ddc776691fc0bb9630d66b4d60bdd0108f816b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eb4268c82e6a395d1080f00f24a1042206e631310728a951455874ed0a52783c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4268c82e6a395d1080f00f24a1042206e631310728a951455874ed0a52783c->enter($__internal_eb4268c82e6a395d1080f00f24a1042206e631310728a951455874ed0a52783c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eb4268c82e6a395d1080f00f24a1042206e631310728a951455874ed0a52783c->leave($__internal_eb4268c82e6a395d1080f00f24a1042206e631310728a951455874ed0a52783c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c8e299b7bb9a2d93aac0fc5df825d9084724ce1ada1fbfd5ae7fe1bf2abf22b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e299b7bb9a2d93aac0fc5df825d9084724ce1ada1fbfd5ae7fe1bf2abf22b0->enter($__internal_c8e299b7bb9a2d93aac0fc5df825d9084724ce1ada1fbfd5ae7fe1bf2abf22b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c8e299b7bb9a2d93aac0fc5df825d9084724ce1ada1fbfd5ae7fe1bf2abf22b0->leave($__internal_c8e299b7bb9a2d93aac0fc5df825d9084724ce1ada1fbfd5ae7fe1bf2abf22b0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8a56b9c11c6ed94a117e572de474f27ea9f5d3b9b21f97f4650c7245ba048df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a56b9c11c6ed94a117e572de474f27ea9f5d3b9b21f97f4650c7245ba048df8->enter($__internal_8a56b9c11c6ed94a117e572de474f27ea9f5d3b9b21f97f4650c7245ba048df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_8a56b9c11c6ed94a117e572de474f27ea9f5d3b9b21f97f4650c7245ba048df8->leave($__internal_8a56b9c11c6ed94a117e572de474f27ea9f5d3b9b21f97f4650c7245ba048df8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
