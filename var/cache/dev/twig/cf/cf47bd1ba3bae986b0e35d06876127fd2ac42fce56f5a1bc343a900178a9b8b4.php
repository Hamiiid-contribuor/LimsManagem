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
        $__internal_2d5a6f05feccaa8b42825ec7447da57c6e98806ed6f9ab82a7c31466969d8426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5a6f05feccaa8b42825ec7447da57c6e98806ed6f9ab82a7c31466969d8426->enter($__internal_2d5a6f05feccaa8b42825ec7447da57c6e98806ed6f9ab82a7c31466969d8426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d5a6f05feccaa8b42825ec7447da57c6e98806ed6f9ab82a7c31466969d8426->leave($__internal_2d5a6f05feccaa8b42825ec7447da57c6e98806ed6f9ab82a7c31466969d8426_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e7ffb0fc98a58abc511b8131078b742fe946d1802eb264e78da7e33ed9a4210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7ffb0fc98a58abc511b8131078b742fe946d1802eb264e78da7e33ed9a4210->enter($__internal_0e7ffb0fc98a58abc511b8131078b742fe946d1802eb264e78da7e33ed9a4210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0e7ffb0fc98a58abc511b8131078b742fe946d1802eb264e78da7e33ed9a4210->leave($__internal_0e7ffb0fc98a58abc511b8131078b742fe946d1802eb264e78da7e33ed9a4210_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8c74cee6be94f051fa48fc4dbd0da80e8e86306254e5cd47b62bdf82c534db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c74cee6be94f051fa48fc4dbd0da80e8e86306254e5cd47b62bdf82c534db6->enter($__internal_f8c74cee6be94f051fa48fc4dbd0da80e8e86306254e5cd47b62bdf82c534db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f8c74cee6be94f051fa48fc4dbd0da80e8e86306254e5cd47b62bdf82c534db6->leave($__internal_f8c74cee6be94f051fa48fc4dbd0da80e8e86306254e5cd47b62bdf82c534db6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_09538e960d526605d5dc25c54f3271d952fa88d7d8c55023571da2535b617d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09538e960d526605d5dc25c54f3271d952fa88d7d8c55023571da2535b617d5d->enter($__internal_09538e960d526605d5dc25c54f3271d952fa88d7d8c55023571da2535b617d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_09538e960d526605d5dc25c54f3271d952fa88d7d8c55023571da2535b617d5d->leave($__internal_09538e960d526605d5dc25c54f3271d952fa88d7d8c55023571da2535b617d5d_prof);

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
