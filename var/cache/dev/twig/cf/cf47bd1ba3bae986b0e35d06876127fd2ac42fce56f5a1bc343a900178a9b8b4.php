<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_177f5e246c37b869994cfe0733f275ea138b8bcdd65a576b587264df71ba04cf extends Twig_Template
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
        $__internal_2be016c736f97412e67bb868ac7eeebff27c59d4ed4dafb1bbd7f9636c4b184e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be016c736f97412e67bb868ac7eeebff27c59d4ed4dafb1bbd7f9636c4b184e->enter($__internal_2be016c736f97412e67bb868ac7eeebff27c59d4ed4dafb1bbd7f9636c4b184e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be016c736f97412e67bb868ac7eeebff27c59d4ed4dafb1bbd7f9636c4b184e->leave($__internal_2be016c736f97412e67bb868ac7eeebff27c59d4ed4dafb1bbd7f9636c4b184e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0414f44c05618084cc6e6dee47e3519e354c09c10776db395d6c5f4c45533343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0414f44c05618084cc6e6dee47e3519e354c09c10776db395d6c5f4c45533343->enter($__internal_0414f44c05618084cc6e6dee47e3519e354c09c10776db395d6c5f4c45533343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0414f44c05618084cc6e6dee47e3519e354c09c10776db395d6c5f4c45533343->leave($__internal_0414f44c05618084cc6e6dee47e3519e354c09c10776db395d6c5f4c45533343_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_711d35d50c39178ece06f8292da6ea7cd03919fc0781f9e1825023d748ff821d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711d35d50c39178ece06f8292da6ea7cd03919fc0781f9e1825023d748ff821d->enter($__internal_711d35d50c39178ece06f8292da6ea7cd03919fc0781f9e1825023d748ff821d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_711d35d50c39178ece06f8292da6ea7cd03919fc0781f9e1825023d748ff821d->leave($__internal_711d35d50c39178ece06f8292da6ea7cd03919fc0781f9e1825023d748ff821d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_da38d5c84ca7053876b9868aa0cdd623b55fcc34160308d01f9a379959f20c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da38d5c84ca7053876b9868aa0cdd623b55fcc34160308d01f9a379959f20c6f->enter($__internal_da38d5c84ca7053876b9868aa0cdd623b55fcc34160308d01f9a379959f20c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_da38d5c84ca7053876b9868aa0cdd623b55fcc34160308d01f9a379959f20c6f->leave($__internal_da38d5c84ca7053876b9868aa0cdd623b55fcc34160308d01f9a379959f20c6f_prof);

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
