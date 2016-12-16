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
        $__internal_8307f6e907e3f8142a96fd815e49548fe059c06cad512a9297d3c0f9470eef74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8307f6e907e3f8142a96fd815e49548fe059c06cad512a9297d3c0f9470eef74->enter($__internal_8307f6e907e3f8142a96fd815e49548fe059c06cad512a9297d3c0f9470eef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8307f6e907e3f8142a96fd815e49548fe059c06cad512a9297d3c0f9470eef74->leave($__internal_8307f6e907e3f8142a96fd815e49548fe059c06cad512a9297d3c0f9470eef74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f923f055e9f99b31bd58197e4e6eb60df8c975e7b4624645af02804ca7d85446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f923f055e9f99b31bd58197e4e6eb60df8c975e7b4624645af02804ca7d85446->enter($__internal_f923f055e9f99b31bd58197e4e6eb60df8c975e7b4624645af02804ca7d85446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f923f055e9f99b31bd58197e4e6eb60df8c975e7b4624645af02804ca7d85446->leave($__internal_f923f055e9f99b31bd58197e4e6eb60df8c975e7b4624645af02804ca7d85446_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a81608583f58b9ba675d3eebc7abf9765b98b30761a23eed0c2bda042698d6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81608583f58b9ba675d3eebc7abf9765b98b30761a23eed0c2bda042698d6de->enter($__internal_a81608583f58b9ba675d3eebc7abf9765b98b30761a23eed0c2bda042698d6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a81608583f58b9ba675d3eebc7abf9765b98b30761a23eed0c2bda042698d6de->leave($__internal_a81608583f58b9ba675d3eebc7abf9765b98b30761a23eed0c2bda042698d6de_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e39a1b21d2cc11fdfdfd525b671c35e53c920c14df5b49766f487a21aa29f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e39a1b21d2cc11fdfdfd525b671c35e53c920c14df5b49766f487a21aa29f52->enter($__internal_6e39a1b21d2cc11fdfdfd525b671c35e53c920c14df5b49766f487a21aa29f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6e39a1b21d2cc11fdfdfd525b671c35e53c920c14df5b49766f487a21aa29f52->leave($__internal_6e39a1b21d2cc11fdfdfd525b671c35e53c920c14df5b49766f487a21aa29f52_prof);

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
