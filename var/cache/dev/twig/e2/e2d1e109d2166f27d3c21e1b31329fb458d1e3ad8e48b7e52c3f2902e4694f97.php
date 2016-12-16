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
        $__internal_7bf4113b6672dbda5f5dc21ed39e4e144bb4110219f9a763117e34d430435994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf4113b6672dbda5f5dc21ed39e4e144bb4110219f9a763117e34d430435994->enter($__internal_7bf4113b6672dbda5f5dc21ed39e4e144bb4110219f9a763117e34d430435994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf4113b6672dbda5f5dc21ed39e4e144bb4110219f9a763117e34d430435994->leave($__internal_7bf4113b6672dbda5f5dc21ed39e4e144bb4110219f9a763117e34d430435994_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c7ebef8f2b91aaafbea73d90eb1c0fdbf0d8d61f913030d50a3fb765ff64465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7ebef8f2b91aaafbea73d90eb1c0fdbf0d8d61f913030d50a3fb765ff64465->enter($__internal_1c7ebef8f2b91aaafbea73d90eb1c0fdbf0d8d61f913030d50a3fb765ff64465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1c7ebef8f2b91aaafbea73d90eb1c0fdbf0d8d61f913030d50a3fb765ff64465->leave($__internal_1c7ebef8f2b91aaafbea73d90eb1c0fdbf0d8d61f913030d50a3fb765ff64465_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee535e0ddd69c7b9428dc367e56825c524e019a01166b9bd82d0348004a8f652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee535e0ddd69c7b9428dc367e56825c524e019a01166b9bd82d0348004a8f652->enter($__internal_ee535e0ddd69c7b9428dc367e56825c524e019a01166b9bd82d0348004a8f652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee535e0ddd69c7b9428dc367e56825c524e019a01166b9bd82d0348004a8f652->leave($__internal_ee535e0ddd69c7b9428dc367e56825c524e019a01166b9bd82d0348004a8f652_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7e18d9c384a09dcea0894107f19719bb78ae25b9116b2147fc1a27c8691c561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e18d9c384a09dcea0894107f19719bb78ae25b9116b2147fc1a27c8691c561->enter($__internal_c7e18d9c384a09dcea0894107f19719bb78ae25b9116b2147fc1a27c8691c561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c7e18d9c384a09dcea0894107f19719bb78ae25b9116b2147fc1a27c8691c561->leave($__internal_c7e18d9c384a09dcea0894107f19719bb78ae25b9116b2147fc1a27c8691c561_prof);

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
