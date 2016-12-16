<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8cccf784d38df1ec82bbb6a0c1cd560a02ab1f90109c4eab51ae73b991002877 extends Twig_Template
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
        $__internal_431b81bd51d5b1f17425bcfa1efb9cb8d557cc636dbf404f707e33de8c45c4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431b81bd51d5b1f17425bcfa1efb9cb8d557cc636dbf404f707e33de8c45c4ef->enter($__internal_431b81bd51d5b1f17425bcfa1efb9cb8d557cc636dbf404f707e33de8c45c4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_431b81bd51d5b1f17425bcfa1efb9cb8d557cc636dbf404f707e33de8c45c4ef->leave($__internal_431b81bd51d5b1f17425bcfa1efb9cb8d557cc636dbf404f707e33de8c45c4ef_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5fb8c3c98f6779352f1f7262fdac0b66028df8883bae6d234b6e5268213feacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb8c3c98f6779352f1f7262fdac0b66028df8883bae6d234b6e5268213feacc->enter($__internal_5fb8c3c98f6779352f1f7262fdac0b66028df8883bae6d234b6e5268213feacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5fb8c3c98f6779352f1f7262fdac0b66028df8883bae6d234b6e5268213feacc->leave($__internal_5fb8c3c98f6779352f1f7262fdac0b66028df8883bae6d234b6e5268213feacc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_489e4bb8c22d6ab574cbc006cc829b6aa23ac78fa80fc80ecafbdda9833537d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489e4bb8c22d6ab574cbc006cc829b6aa23ac78fa80fc80ecafbdda9833537d8->enter($__internal_489e4bb8c22d6ab574cbc006cc829b6aa23ac78fa80fc80ecafbdda9833537d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_489e4bb8c22d6ab574cbc006cc829b6aa23ac78fa80fc80ecafbdda9833537d8->leave($__internal_489e4bb8c22d6ab574cbc006cc829b6aa23ac78fa80fc80ecafbdda9833537d8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9d3f61628578e46fd91db949bc607e6988611b63ce919c4fe268733a16bc8044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3f61628578e46fd91db949bc607e6988611b63ce919c4fe268733a16bc8044->enter($__internal_9d3f61628578e46fd91db949bc607e6988611b63ce919c4fe268733a16bc8044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_9d3f61628578e46fd91db949bc607e6988611b63ce919c4fe268733a16bc8044->leave($__internal_9d3f61628578e46fd91db949bc607e6988611b63ce919c4fe268733a16bc8044_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
