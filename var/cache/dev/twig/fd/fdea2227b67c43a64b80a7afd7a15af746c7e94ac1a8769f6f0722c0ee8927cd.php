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
        $__internal_b798ecd1f872ac4e87ccdfd121118ac5e40e3216d3268ffa9ce78a16cdfac5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b798ecd1f872ac4e87ccdfd121118ac5e40e3216d3268ffa9ce78a16cdfac5f3->enter($__internal_b798ecd1f872ac4e87ccdfd121118ac5e40e3216d3268ffa9ce78a16cdfac5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b798ecd1f872ac4e87ccdfd121118ac5e40e3216d3268ffa9ce78a16cdfac5f3->leave($__internal_b798ecd1f872ac4e87ccdfd121118ac5e40e3216d3268ffa9ce78a16cdfac5f3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_75a719ceb1b797548b5e0440f743e3c0f2e1445d828bfd1a4ca5b90274064898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a719ceb1b797548b5e0440f743e3c0f2e1445d828bfd1a4ca5b90274064898->enter($__internal_75a719ceb1b797548b5e0440f743e3c0f2e1445d828bfd1a4ca5b90274064898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_75a719ceb1b797548b5e0440f743e3c0f2e1445d828bfd1a4ca5b90274064898->leave($__internal_75a719ceb1b797548b5e0440f743e3c0f2e1445d828bfd1a4ca5b90274064898_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_303a6ae1b6d822a69f3c06c14147c24bba342b1dd41378afbd4a7e7dd5f22cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303a6ae1b6d822a69f3c06c14147c24bba342b1dd41378afbd4a7e7dd5f22cfe->enter($__internal_303a6ae1b6d822a69f3c06c14147c24bba342b1dd41378afbd4a7e7dd5f22cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_303a6ae1b6d822a69f3c06c14147c24bba342b1dd41378afbd4a7e7dd5f22cfe->leave($__internal_303a6ae1b6d822a69f3c06c14147c24bba342b1dd41378afbd4a7e7dd5f22cfe_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d3249662568d36877ac2a9f5ff7603bef8ee9d73455828b4d9a584d3aa854961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3249662568d36877ac2a9f5ff7603bef8ee9d73455828b4d9a584d3aa854961->enter($__internal_d3249662568d36877ac2a9f5ff7603bef8ee9d73455828b4d9a584d3aa854961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_d3249662568d36877ac2a9f5ff7603bef8ee9d73455828b4d9a584d3aa854961->leave($__internal_d3249662568d36877ac2a9f5ff7603bef8ee9d73455828b4d9a584d3aa854961_prof);

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
