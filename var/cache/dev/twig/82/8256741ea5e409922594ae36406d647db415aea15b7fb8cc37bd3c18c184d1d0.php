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
        $__internal_4c103c004666cd776af6f20e40fb2d1e1384157a6b78972fc50e05eaf6b8ffcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c103c004666cd776af6f20e40fb2d1e1384157a6b78972fc50e05eaf6b8ffcd->enter($__internal_4c103c004666cd776af6f20e40fb2d1e1384157a6b78972fc50e05eaf6b8ffcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4c103c004666cd776af6f20e40fb2d1e1384157a6b78972fc50e05eaf6b8ffcd->leave($__internal_4c103c004666cd776af6f20e40fb2d1e1384157a6b78972fc50e05eaf6b8ffcd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fbd4f7a7b3e20b05e4d4d8d0c793d463c0c3020dacd1e73f87ed63fe94fbe1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd4f7a7b3e20b05e4d4d8d0c793d463c0c3020dacd1e73f87ed63fe94fbe1bc->enter($__internal_fbd4f7a7b3e20b05e4d4d8d0c793d463c0c3020dacd1e73f87ed63fe94fbe1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fbd4f7a7b3e20b05e4d4d8d0c793d463c0c3020dacd1e73f87ed63fe94fbe1bc->leave($__internal_fbd4f7a7b3e20b05e4d4d8d0c793d463c0c3020dacd1e73f87ed63fe94fbe1bc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0a407baad57121b8233390d623ce7ec4a5fa90e996eeab6a5b5588277dccf69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a407baad57121b8233390d623ce7ec4a5fa90e996eeab6a5b5588277dccf69d->enter($__internal_0a407baad57121b8233390d623ce7ec4a5fa90e996eeab6a5b5588277dccf69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0a407baad57121b8233390d623ce7ec4a5fa90e996eeab6a5b5588277dccf69d->leave($__internal_0a407baad57121b8233390d623ce7ec4a5fa90e996eeab6a5b5588277dccf69d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2d5d67cfb5d97ef5e5ea991343403f35b85e48bd640b48bee566f7541ffbc5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5d67cfb5d97ef5e5ea991343403f35b85e48bd640b48bee566f7541ffbc5f0->enter($__internal_2d5d67cfb5d97ef5e5ea991343403f35b85e48bd640b48bee566f7541ffbc5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_2d5d67cfb5d97ef5e5ea991343403f35b85e48bd640b48bee566f7541ffbc5f0->leave($__internal_2d5d67cfb5d97ef5e5ea991343403f35b85e48bd640b48bee566f7541ffbc5f0_prof);

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
