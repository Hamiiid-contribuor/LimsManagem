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
        $__internal_12ce4006fac211385dad036b2be6e3f7c49356e3a86bfcbcdc1b37d07fb4c2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ce4006fac211385dad036b2be6e3f7c49356e3a86bfcbcdc1b37d07fb4c2db->enter($__internal_12ce4006fac211385dad036b2be6e3f7c49356e3a86bfcbcdc1b37d07fb4c2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_12ce4006fac211385dad036b2be6e3f7c49356e3a86bfcbcdc1b37d07fb4c2db->leave($__internal_12ce4006fac211385dad036b2be6e3f7c49356e3a86bfcbcdc1b37d07fb4c2db_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_115ff19fe4de732c0d270800bd77b6d2569203f9cc5fa786fe62f1daafd67d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115ff19fe4de732c0d270800bd77b6d2569203f9cc5fa786fe62f1daafd67d5b->enter($__internal_115ff19fe4de732c0d270800bd77b6d2569203f9cc5fa786fe62f1daafd67d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_115ff19fe4de732c0d270800bd77b6d2569203f9cc5fa786fe62f1daafd67d5b->leave($__internal_115ff19fe4de732c0d270800bd77b6d2569203f9cc5fa786fe62f1daafd67d5b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a3c91e93305016a0bb4b2facff17b3367a7e5d81b964415f837950c9817a80a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c91e93305016a0bb4b2facff17b3367a7e5d81b964415f837950c9817a80a9->enter($__internal_a3c91e93305016a0bb4b2facff17b3367a7e5d81b964415f837950c9817a80a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a3c91e93305016a0bb4b2facff17b3367a7e5d81b964415f837950c9817a80a9->leave($__internal_a3c91e93305016a0bb4b2facff17b3367a7e5d81b964415f837950c9817a80a9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e3bd34df707bcf619a561d343dfc47c849862314a20c05267119e8ed74d6985f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bd34df707bcf619a561d343dfc47c849862314a20c05267119e8ed74d6985f->enter($__internal_e3bd34df707bcf619a561d343dfc47c849862314a20c05267119e8ed74d6985f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_e3bd34df707bcf619a561d343dfc47c849862314a20c05267119e8ed74d6985f->leave($__internal_e3bd34df707bcf619a561d343dfc47c849862314a20c05267119e8ed74d6985f_prof);

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
