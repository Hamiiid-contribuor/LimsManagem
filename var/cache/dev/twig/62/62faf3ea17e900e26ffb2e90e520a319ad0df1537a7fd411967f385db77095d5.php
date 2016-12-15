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
        $__internal_385795b7bc0366d19d04a12823abd802c9ecdaf70e429956f51565521527b6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385795b7bc0366d19d04a12823abd802c9ecdaf70e429956f51565521527b6d4->enter($__internal_385795b7bc0366d19d04a12823abd802c9ecdaf70e429956f51565521527b6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_385795b7bc0366d19d04a12823abd802c9ecdaf70e429956f51565521527b6d4->leave($__internal_385795b7bc0366d19d04a12823abd802c9ecdaf70e429956f51565521527b6d4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fbf1bf0139f9b0b21b6a870334c6593c5b7d91335e9bfcc32328e6197cce131b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf1bf0139f9b0b21b6a870334c6593c5b7d91335e9bfcc32328e6197cce131b->enter($__internal_fbf1bf0139f9b0b21b6a870334c6593c5b7d91335e9bfcc32328e6197cce131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fbf1bf0139f9b0b21b6a870334c6593c5b7d91335e9bfcc32328e6197cce131b->leave($__internal_fbf1bf0139f9b0b21b6a870334c6593c5b7d91335e9bfcc32328e6197cce131b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_14202d931ec9fbc1c496fc70d72970787877404dba36d60c849c5d9cb30746e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14202d931ec9fbc1c496fc70d72970787877404dba36d60c849c5d9cb30746e4->enter($__internal_14202d931ec9fbc1c496fc70d72970787877404dba36d60c849c5d9cb30746e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_14202d931ec9fbc1c496fc70d72970787877404dba36d60c849c5d9cb30746e4->leave($__internal_14202d931ec9fbc1c496fc70d72970787877404dba36d60c849c5d9cb30746e4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b863e183ba77a3779fa3f07e1df5f9631bd145a518b30981be100e261170aef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b863e183ba77a3779fa3f07e1df5f9631bd145a518b30981be100e261170aef4->enter($__internal_b863e183ba77a3779fa3f07e1df5f9631bd145a518b30981be100e261170aef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_b863e183ba77a3779fa3f07e1df5f9631bd145a518b30981be100e261170aef4->leave($__internal_b863e183ba77a3779fa3f07e1df5f9631bd145a518b30981be100e261170aef4_prof);

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
