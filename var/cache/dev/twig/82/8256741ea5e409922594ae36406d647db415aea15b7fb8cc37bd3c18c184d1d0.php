<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_36f65d79fac52ffb63a998de8a6d337a8bbef31a39edeacf8d48a8d4997cbd05 extends Twig_Template
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
        $__internal_9eb01188a68ed5c20ec0006cd06a4f543ce3b79afd1bcb487a655125967333fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb01188a68ed5c20ec0006cd06a4f543ce3b79afd1bcb487a655125967333fe->enter($__internal_9eb01188a68ed5c20ec0006cd06a4f543ce3b79afd1bcb487a655125967333fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9eb01188a68ed5c20ec0006cd06a4f543ce3b79afd1bcb487a655125967333fe->leave($__internal_9eb01188a68ed5c20ec0006cd06a4f543ce3b79afd1bcb487a655125967333fe_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c7229560657ee75af07f26459ec75efaac4008397251c8fd61a84f389a40b8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7229560657ee75af07f26459ec75efaac4008397251c8fd61a84f389a40b8cf->enter($__internal_c7229560657ee75af07f26459ec75efaac4008397251c8fd61a84f389a40b8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c7229560657ee75af07f26459ec75efaac4008397251c8fd61a84f389a40b8cf->leave($__internal_c7229560657ee75af07f26459ec75efaac4008397251c8fd61a84f389a40b8cf_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9959b679d0d0a735867d0ac98aabe3c47311921e81fcd5e85e8bf88d9c8de9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9959b679d0d0a735867d0ac98aabe3c47311921e81fcd5e85e8bf88d9c8de9d7->enter($__internal_9959b679d0d0a735867d0ac98aabe3c47311921e81fcd5e85e8bf88d9c8de9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9959b679d0d0a735867d0ac98aabe3c47311921e81fcd5e85e8bf88d9c8de9d7->leave($__internal_9959b679d0d0a735867d0ac98aabe3c47311921e81fcd5e85e8bf88d9c8de9d7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4a3e1f98c70d433da37d27b011f83188093fe4011da4a774119ad93014d65ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3e1f98c70d433da37d27b011f83188093fe4011da4a774119ad93014d65ef1->enter($__internal_4a3e1f98c70d433da37d27b011f83188093fe4011da4a774119ad93014d65ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_4a3e1f98c70d433da37d27b011f83188093fe4011da4a774119ad93014d65ef1->leave($__internal_4a3e1f98c70d433da37d27b011f83188093fe4011da4a774119ad93014d65ef1_prof);

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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
