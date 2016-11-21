<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_60a45693c81e4c60a5575c368d5e92dff61deefd6db2c30a5ff8a92d6fdbac3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_5c5c4f478f7def613449ac9a0131e776f4345b07c7c6669797dd2a46d1d0ff55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5c4f478f7def613449ac9a0131e776f4345b07c7c6669797dd2a46d1d0ff55->enter($__internal_5c5c4f478f7def613449ac9a0131e776f4345b07c7c6669797dd2a46d1d0ff55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c5c4f478f7def613449ac9a0131e776f4345b07c7c6669797dd2a46d1d0ff55->leave($__internal_5c5c4f478f7def613449ac9a0131e776f4345b07c7c6669797dd2a46d1d0ff55_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc9ed132150d966835c192422a78e407fc34add046a0677bcc054838216b7f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9ed132150d966835c192422a78e407fc34add046a0677bcc054838216b7f0d->enter($__internal_dc9ed132150d966835c192422a78e407fc34add046a0677bcc054838216b7f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dc9ed132150d966835c192422a78e407fc34add046a0677bcc054838216b7f0d->leave($__internal_dc9ed132150d966835c192422a78e407fc34add046a0677bcc054838216b7f0d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
