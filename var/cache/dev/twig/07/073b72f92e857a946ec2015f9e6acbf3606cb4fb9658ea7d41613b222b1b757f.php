<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4771fef813396c8820ec9962e81b28f51c638ad40a405104d71672aa24deabfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_bf0f83033549a4f9cb78a3284cf6f90ce334415ee765e49fbdf595555e6a7407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0f83033549a4f9cb78a3284cf6f90ce334415ee765e49fbdf595555e6a7407->enter($__internal_bf0f83033549a4f9cb78a3284cf6f90ce334415ee765e49fbdf595555e6a7407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf0f83033549a4f9cb78a3284cf6f90ce334415ee765e49fbdf595555e6a7407->leave($__internal_bf0f83033549a4f9cb78a3284cf6f90ce334415ee765e49fbdf595555e6a7407_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5e243ca097affdfbc962ee95f98f448ccf7c2e05c962913002507c50f4452db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e243ca097affdfbc962ee95f98f448ccf7c2e05c962913002507c50f4452db->enter($__internal_d5e243ca097affdfbc962ee95f98f448ccf7c2e05c962913002507c50f4452db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d5e243ca097affdfbc962ee95f98f448ccf7c2e05c962913002507c50f4452db->leave($__internal_d5e243ca097affdfbc962ee95f98f448ccf7c2e05c962913002507c50f4452db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
