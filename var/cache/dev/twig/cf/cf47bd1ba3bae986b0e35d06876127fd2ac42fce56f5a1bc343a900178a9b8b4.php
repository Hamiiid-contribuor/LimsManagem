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
        $__internal_c02087de0b9a1e5f1f1f6daefb79f80e75d6fa88fafbe9ee6db26486aea4ca7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02087de0b9a1e5f1f1f6daefb79f80e75d6fa88fafbe9ee6db26486aea4ca7d->enter($__internal_c02087de0b9a1e5f1f1f6daefb79f80e75d6fa88fafbe9ee6db26486aea4ca7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c02087de0b9a1e5f1f1f6daefb79f80e75d6fa88fafbe9ee6db26486aea4ca7d->leave($__internal_c02087de0b9a1e5f1f1f6daefb79f80e75d6fa88fafbe9ee6db26486aea4ca7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_200934b287f37e6915087cd98ffec7014c3a4891e1e789816321a48086ac8df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200934b287f37e6915087cd98ffec7014c3a4891e1e789816321a48086ac8df4->enter($__internal_200934b287f37e6915087cd98ffec7014c3a4891e1e789816321a48086ac8df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_200934b287f37e6915087cd98ffec7014c3a4891e1e789816321a48086ac8df4->leave($__internal_200934b287f37e6915087cd98ffec7014c3a4891e1e789816321a48086ac8df4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ba2b44786922223f71ae704b9fa92353c623e806f42c668db749993cb9eec50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba2b44786922223f71ae704b9fa92353c623e806f42c668db749993cb9eec50->enter($__internal_0ba2b44786922223f71ae704b9fa92353c623e806f42c668db749993cb9eec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ba2b44786922223f71ae704b9fa92353c623e806f42c668db749993cb9eec50->leave($__internal_0ba2b44786922223f71ae704b9fa92353c623e806f42c668db749993cb9eec50_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75881f8bf57b91c70ebd021d45c9fa1a03aa268e834877703785e158bae4eee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75881f8bf57b91c70ebd021d45c9fa1a03aa268e834877703785e158bae4eee5->enter($__internal_75881f8bf57b91c70ebd021d45c9fa1a03aa268e834877703785e158bae4eee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_75881f8bf57b91c70ebd021d45c9fa1a03aa268e834877703785e158bae4eee5->leave($__internal_75881f8bf57b91c70ebd021d45c9fa1a03aa268e834877703785e158bae4eee5_prof);

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
