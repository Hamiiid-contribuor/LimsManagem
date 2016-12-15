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
        $__internal_9817354a3a1d0beb9894715587e94a303f6a4a9c2dfbb485b5a05d8ea67b901f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9817354a3a1d0beb9894715587e94a303f6a4a9c2dfbb485b5a05d8ea67b901f->enter($__internal_9817354a3a1d0beb9894715587e94a303f6a4a9c2dfbb485b5a05d8ea67b901f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9817354a3a1d0beb9894715587e94a303f6a4a9c2dfbb485b5a05d8ea67b901f->leave($__internal_9817354a3a1d0beb9894715587e94a303f6a4a9c2dfbb485b5a05d8ea67b901f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b601f18f21a259b695949df1bdaa99b79b1cf93a7bc70095767c53db3bafa21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b601f18f21a259b695949df1bdaa99b79b1cf93a7bc70095767c53db3bafa21->enter($__internal_2b601f18f21a259b695949df1bdaa99b79b1cf93a7bc70095767c53db3bafa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b601f18f21a259b695949df1bdaa99b79b1cf93a7bc70095767c53db3bafa21->leave($__internal_2b601f18f21a259b695949df1bdaa99b79b1cf93a7bc70095767c53db3bafa21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd9eb9e1f80b8677c74b2d41d5b346f1b2b6f32ed57c08f84cf2a4f969da997a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9eb9e1f80b8677c74b2d41d5b346f1b2b6f32ed57c08f84cf2a4f969da997a->enter($__internal_cd9eb9e1f80b8677c74b2d41d5b346f1b2b6f32ed57c08f84cf2a4f969da997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd9eb9e1f80b8677c74b2d41d5b346f1b2b6f32ed57c08f84cf2a4f969da997a->leave($__internal_cd9eb9e1f80b8677c74b2d41d5b346f1b2b6f32ed57c08f84cf2a4f969da997a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0f9f3e7f408a4e4566fe304c7de545da29c283abccbe0e77bd5b33fe83d74d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f9f3e7f408a4e4566fe304c7de545da29c283abccbe0e77bd5b33fe83d74d7->enter($__internal_f0f9f3e7f408a4e4566fe304c7de545da29c283abccbe0e77bd5b33fe83d74d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f0f9f3e7f408a4e4566fe304c7de545da29c283abccbe0e77bd5b33fe83d74d7->leave($__internal_f0f9f3e7f408a4e4566fe304c7de545da29c283abccbe0e77bd5b33fe83d74d7_prof);

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
