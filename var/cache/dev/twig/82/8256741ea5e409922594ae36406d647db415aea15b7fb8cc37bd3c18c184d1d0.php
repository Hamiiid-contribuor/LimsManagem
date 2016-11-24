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
        $__internal_3c9ed60146ff2657b480a2bf51ddc310e09288ad61f35c04cfd5282e0d16071c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9ed60146ff2657b480a2bf51ddc310e09288ad61f35c04cfd5282e0d16071c->enter($__internal_3c9ed60146ff2657b480a2bf51ddc310e09288ad61f35c04cfd5282e0d16071c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3c9ed60146ff2657b480a2bf51ddc310e09288ad61f35c04cfd5282e0d16071c->leave($__internal_3c9ed60146ff2657b480a2bf51ddc310e09288ad61f35c04cfd5282e0d16071c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cbadec2ee5cda855b50056571c7150413b9a36234fd439f2b2d7a2fbc3dd2030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbadec2ee5cda855b50056571c7150413b9a36234fd439f2b2d7a2fbc3dd2030->enter($__internal_cbadec2ee5cda855b50056571c7150413b9a36234fd439f2b2d7a2fbc3dd2030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cbadec2ee5cda855b50056571c7150413b9a36234fd439f2b2d7a2fbc3dd2030->leave($__internal_cbadec2ee5cda855b50056571c7150413b9a36234fd439f2b2d7a2fbc3dd2030_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b35860b6cb273be38e73869564cac7b7c2a2d0f552c7438c210e91a3ee3ed322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35860b6cb273be38e73869564cac7b7c2a2d0f552c7438c210e91a3ee3ed322->enter($__internal_b35860b6cb273be38e73869564cac7b7c2a2d0f552c7438c210e91a3ee3ed322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b35860b6cb273be38e73869564cac7b7c2a2d0f552c7438c210e91a3ee3ed322->leave($__internal_b35860b6cb273be38e73869564cac7b7c2a2d0f552c7438c210e91a3ee3ed322_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1cbc2de7d187b1a3a43593bf9b2758674edbb5a088fccc603f3cda61977112b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbc2de7d187b1a3a43593bf9b2758674edbb5a088fccc603f3cda61977112b9->enter($__internal_1cbc2de7d187b1a3a43593bf9b2758674edbb5a088fccc603f3cda61977112b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_1cbc2de7d187b1a3a43593bf9b2758674edbb5a088fccc603f3cda61977112b9->leave($__internal_1cbc2de7d187b1a3a43593bf9b2758674edbb5a088fccc603f3cda61977112b9_prof);

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
