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
        $__internal_096b8a5ee5c17a6b62d39a6bc84e0b47a2fd8311effe1556b0a2d6194f5e37ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096b8a5ee5c17a6b62d39a6bc84e0b47a2fd8311effe1556b0a2d6194f5e37ae->enter($__internal_096b8a5ee5c17a6b62d39a6bc84e0b47a2fd8311effe1556b0a2d6194f5e37ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_096b8a5ee5c17a6b62d39a6bc84e0b47a2fd8311effe1556b0a2d6194f5e37ae->leave($__internal_096b8a5ee5c17a6b62d39a6bc84e0b47a2fd8311effe1556b0a2d6194f5e37ae_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a98a4f5de6d156cc85bb79d665168495e25933390ce74acfd3d7c4cefeac000d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98a4f5de6d156cc85bb79d665168495e25933390ce74acfd3d7c4cefeac000d->enter($__internal_a98a4f5de6d156cc85bb79d665168495e25933390ce74acfd3d7c4cefeac000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a98a4f5de6d156cc85bb79d665168495e25933390ce74acfd3d7c4cefeac000d->leave($__internal_a98a4f5de6d156cc85bb79d665168495e25933390ce74acfd3d7c4cefeac000d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9a2fb3321423aa876a777a740f3c63c5e0912791a4d39c4f1272c8c39acd4d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2fb3321423aa876a777a740f3c63c5e0912791a4d39c4f1272c8c39acd4d5c->enter($__internal_9a2fb3321423aa876a777a740f3c63c5e0912791a4d39c4f1272c8c39acd4d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9a2fb3321423aa876a777a740f3c63c5e0912791a4d39c4f1272c8c39acd4d5c->leave($__internal_9a2fb3321423aa876a777a740f3c63c5e0912791a4d39c4f1272c8c39acd4d5c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_88fe95a67b774204fb7064a321c6f8d63682e648f9fa4132ea98edc895e335e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fe95a67b774204fb7064a321c6f8d63682e648f9fa4132ea98edc895e335e6->enter($__internal_88fe95a67b774204fb7064a321c6f8d63682e648f9fa4132ea98edc895e335e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_88fe95a67b774204fb7064a321c6f8d63682e648f9fa4132ea98edc895e335e6->leave($__internal_88fe95a67b774204fb7064a321c6f8d63682e648f9fa4132ea98edc895e335e6_prof);

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
