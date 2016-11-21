<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_dae91665cbc0ef5441c92583d975c49a14b01a1d28161f41c3ac7a742d01e712 extends Twig_Template
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
        $__internal_11778bee9ad02dad8b4c3ee7cc3fbc7306323e07828bcd2405d07cf16b8dd9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11778bee9ad02dad8b4c3ee7cc3fbc7306323e07828bcd2405d07cf16b8dd9de->enter($__internal_11778bee9ad02dad8b4c3ee7cc3fbc7306323e07828bcd2405d07cf16b8dd9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11778bee9ad02dad8b4c3ee7cc3fbc7306323e07828bcd2405d07cf16b8dd9de->leave($__internal_11778bee9ad02dad8b4c3ee7cc3fbc7306323e07828bcd2405d07cf16b8dd9de_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d56c32faf228f7a2441afd5d949fd67756d64851096eb53ef9cb2d17d7644e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56c32faf228f7a2441afd5d949fd67756d64851096eb53ef9cb2d17d7644e40->enter($__internal_d56c32faf228f7a2441afd5d949fd67756d64851096eb53ef9cb2d17d7644e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d56c32faf228f7a2441afd5d949fd67756d64851096eb53ef9cb2d17d7644e40->leave($__internal_d56c32faf228f7a2441afd5d949fd67756d64851096eb53ef9cb2d17d7644e40_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
