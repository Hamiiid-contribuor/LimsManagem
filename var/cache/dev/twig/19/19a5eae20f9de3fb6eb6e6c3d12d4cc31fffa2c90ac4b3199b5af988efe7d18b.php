<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5bb9196f04d773f267ac9818dc6e64607c089575f462781f70b2663706c17dfc extends Twig_Template
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
        $__internal_a2d0406e5908017e746df337969bfaca448b5545b9bcc9c382083844230becee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d0406e5908017e746df337969bfaca448b5545b9bcc9c382083844230becee->enter($__internal_a2d0406e5908017e746df337969bfaca448b5545b9bcc9c382083844230becee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a2d0406e5908017e746df337969bfaca448b5545b9bcc9c382083844230becee->leave($__internal_a2d0406e5908017e746df337969bfaca448b5545b9bcc9c382083844230becee_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ded2fc30cdf9e61cc2d442522510502b8d69513b1edb780e4619cf7d7db3d9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded2fc30cdf9e61cc2d442522510502b8d69513b1edb780e4619cf7d7db3d9ea->enter($__internal_ded2fc30cdf9e61cc2d442522510502b8d69513b1edb780e4619cf7d7db3d9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ded2fc30cdf9e61cc2d442522510502b8d69513b1edb780e4619cf7d7db3d9ea->leave($__internal_ded2fc30cdf9e61cc2d442522510502b8d69513b1edb780e4619cf7d7db3d9ea_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_90d9dc76d499ab0bb675c0b194984bfa8245ce7f29bc531b45e02d51010c7094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d9dc76d499ab0bb675c0b194984bfa8245ce7f29bc531b45e02d51010c7094->enter($__internal_90d9dc76d499ab0bb675c0b194984bfa8245ce7f29bc531b45e02d51010c7094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_90d9dc76d499ab0bb675c0b194984bfa8245ce7f29bc531b45e02d51010c7094->leave($__internal_90d9dc76d499ab0bb675c0b194984bfa8245ce7f29bc531b45e02d51010c7094_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fd95375615a35a056d612a01212c3b51fb58165ea664b48c0f6f312d488ef830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd95375615a35a056d612a01212c3b51fb58165ea664b48c0f6f312d488ef830->enter($__internal_fd95375615a35a056d612a01212c3b51fb58165ea664b48c0f6f312d488ef830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_fd95375615a35a056d612a01212c3b51fb58165ea664b48c0f6f312d488ef830->leave($__internal_fd95375615a35a056d612a01212c3b51fb58165ea664b48c0f6f312d488ef830_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
