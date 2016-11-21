<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c97461672ac1e0d38b05cad561f98e1f09805b75c898c65db16dcb54dd1302fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_ff58b365b483616106ee406a01d9b66ad9ae7bc62680d46151e6a054f9a77030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff58b365b483616106ee406a01d9b66ad9ae7bc62680d46151e6a054f9a77030->enter($__internal_ff58b365b483616106ee406a01d9b66ad9ae7bc62680d46151e6a054f9a77030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff58b365b483616106ee406a01d9b66ad9ae7bc62680d46151e6a054f9a77030->leave($__internal_ff58b365b483616106ee406a01d9b66ad9ae7bc62680d46151e6a054f9a77030_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4e04af5cfcf497b45b941f27708e16363ac61aa3f6f6cbddf3a2f50b4081766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e04af5cfcf497b45b941f27708e16363ac61aa3f6f6cbddf3a2f50b4081766->enter($__internal_a4e04af5cfcf497b45b941f27708e16363ac61aa3f6f6cbddf3a2f50b4081766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a4e04af5cfcf497b45b941f27708e16363ac61aa3f6f6cbddf3a2f50b4081766->leave($__internal_a4e04af5cfcf497b45b941f27708e16363ac61aa3f6f6cbddf3a2f50b4081766_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c1edc46eef0c5c742b5b0ff2894b8c616142c183195e6eac27dc6a75e502634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1edc46eef0c5c742b5b0ff2894b8c616142c183195e6eac27dc6a75e502634->enter($__internal_8c1edc46eef0c5c742b5b0ff2894b8c616142c183195e6eac27dc6a75e502634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c1edc46eef0c5c742b5b0ff2894b8c616142c183195e6eac27dc6a75e502634->leave($__internal_8c1edc46eef0c5c742b5b0ff2894b8c616142c183195e6eac27dc6a75e502634_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d259f3a3ed289b4d52dd1c079f25f0945e34ff33fe98a858d3fb8fedf1c3301b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d259f3a3ed289b4d52dd1c079f25f0945e34ff33fe98a858d3fb8fedf1c3301b->enter($__internal_d259f3a3ed289b4d52dd1c079f25f0945e34ff33fe98a858d3fb8fedf1c3301b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d259f3a3ed289b4d52dd1c079f25f0945e34ff33fe98a858d3fb8fedf1c3301b->leave($__internal_d259f3a3ed289b4d52dd1c079f25f0945e34ff33fe98a858d3fb8fedf1c3301b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
