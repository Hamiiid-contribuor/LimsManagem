<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_563abc4a045e48c5c60751340df966393509a3dec06e6856c24c5f8e670bf8ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_074f782b947e292e88f999b98b0f0ae5c769283939d9b622c148f088251a2222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074f782b947e292e88f999b98b0f0ae5c769283939d9b622c148f088251a2222->enter($__internal_074f782b947e292e88f999b98b0f0ae5c769283939d9b622c148f088251a2222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074f782b947e292e88f999b98b0f0ae5c769283939d9b622c148f088251a2222->leave($__internal_074f782b947e292e88f999b98b0f0ae5c769283939d9b622c148f088251a2222_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed1c57f4b8c9d404dbacf2a776de988e982a4ac75e23c066e3ed96fed42ef8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1c57f4b8c9d404dbacf2a776de988e982a4ac75e23c066e3ed96fed42ef8e9->enter($__internal_ed1c57f4b8c9d404dbacf2a776de988e982a4ac75e23c066e3ed96fed42ef8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ed1c57f4b8c9d404dbacf2a776de988e982a4ac75e23c066e3ed96fed42ef8e9->leave($__internal_ed1c57f4b8c9d404dbacf2a776de988e982a4ac75e23c066e3ed96fed42ef8e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
