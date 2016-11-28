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
        $__internal_c93fbb450f8773052f384e87ac6cb3e6a24579c84c336396f9d55f5cac438932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93fbb450f8773052f384e87ac6cb3e6a24579c84c336396f9d55f5cac438932->enter($__internal_c93fbb450f8773052f384e87ac6cb3e6a24579c84c336396f9d55f5cac438932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c93fbb450f8773052f384e87ac6cb3e6a24579c84c336396f9d55f5cac438932->leave($__internal_c93fbb450f8773052f384e87ac6cb3e6a24579c84c336396f9d55f5cac438932_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a959362b6ad843c4d56af7f5b235b886e408a6acd28c2621a5fd4e4dd630d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a959362b6ad843c4d56af7f5b235b886e408a6acd28c2621a5fd4e4dd630d82->enter($__internal_5a959362b6ad843c4d56af7f5b235b886e408a6acd28c2621a5fd4e4dd630d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5a959362b6ad843c4d56af7f5b235b886e408a6acd28c2621a5fd4e4dd630d82->leave($__internal_5a959362b6ad843c4d56af7f5b235b886e408a6acd28c2621a5fd4e4dd630d82_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e00a37500af4721fa935f85476a019c12bda647aa06e04ced9cbf82dd5d655ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00a37500af4721fa935f85476a019c12bda647aa06e04ced9cbf82dd5d655ed->enter($__internal_e00a37500af4721fa935f85476a019c12bda647aa06e04ced9cbf82dd5d655ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e00a37500af4721fa935f85476a019c12bda647aa06e04ced9cbf82dd5d655ed->leave($__internal_e00a37500af4721fa935f85476a019c12bda647aa06e04ced9cbf82dd5d655ed_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bbd9faa28477eaa27ff0daf54a52f1b9e0603cc0add6b735d60c44b545b9b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbd9faa28477eaa27ff0daf54a52f1b9e0603cc0add6b735d60c44b545b9b3b->enter($__internal_0bbd9faa28477eaa27ff0daf54a52f1b9e0603cc0add6b735d60c44b545b9b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0bbd9faa28477eaa27ff0daf54a52f1b9e0603cc0add6b735d60c44b545b9b3b->leave($__internal_0bbd9faa28477eaa27ff0daf54a52f1b9e0603cc0add6b735d60c44b545b9b3b_prof);

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
