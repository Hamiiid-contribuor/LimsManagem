<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ba78bb57e21ebaadef53ba54ef4659fdddfc0616615fb3e7c19ff42ecc3e6f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35270a1377e9d2bfe86835f3a538a79d1bb00c3fb91b2b48ab2a9d9f7c59c37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35270a1377e9d2bfe86835f3a538a79d1bb00c3fb91b2b48ab2a9d9f7c59c37d->enter($__internal_35270a1377e9d2bfe86835f3a538a79d1bb00c3fb91b2b48ab2a9d9f7c59c37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35270a1377e9d2bfe86835f3a538a79d1bb00c3fb91b2b48ab2a9d9f7c59c37d->leave($__internal_35270a1377e9d2bfe86835f3a538a79d1bb00c3fb91b2b48ab2a9d9f7c59c37d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9d1b980140e7f88c2942a7e87ee63504326c4192a9f413c989df5e462e51804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d1b980140e7f88c2942a7e87ee63504326c4192a9f413c989df5e462e51804->enter($__internal_f9d1b980140e7f88c2942a7e87ee63504326c4192a9f413c989df5e462e51804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9d1b980140e7f88c2942a7e87ee63504326c4192a9f413c989df5e462e51804->leave($__internal_f9d1b980140e7f88c2942a7e87ee63504326c4192a9f413c989df5e462e51804_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3410864f823d4269fa4fdbff7fba6e56ad187d9f76b04eb5bcda6a201320872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3410864f823d4269fa4fdbff7fba6e56ad187d9f76b04eb5bcda6a201320872->enter($__internal_c3410864f823d4269fa4fdbff7fba6e56ad187d9f76b04eb5bcda6a201320872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c3410864f823d4269fa4fdbff7fba6e56ad187d9f76b04eb5bcda6a201320872->leave($__internal_c3410864f823d4269fa4fdbff7fba6e56ad187d9f76b04eb5bcda6a201320872_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab9212161a4611106f6ab715c345b48f78f0d3972516e56620948b35c977c8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9212161a4611106f6ab715c345b48f78f0d3972516e56620948b35c977c8a2->enter($__internal_ab9212161a4611106f6ab715c345b48f78f0d3972516e56620948b35c977c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ab9212161a4611106f6ab715c345b48f78f0d3972516e56620948b35c977c8a2->leave($__internal_ab9212161a4611106f6ab715c345b48f78f0d3972516e56620948b35c977c8a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
