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
        $__internal_1dad54a2636b013766237be9c3087d7b971ee93ec0e7e8382bdb8a4f6a3b0789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dad54a2636b013766237be9c3087d7b971ee93ec0e7e8382bdb8a4f6a3b0789->enter($__internal_1dad54a2636b013766237be9c3087d7b971ee93ec0e7e8382bdb8a4f6a3b0789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dad54a2636b013766237be9c3087d7b971ee93ec0e7e8382bdb8a4f6a3b0789->leave($__internal_1dad54a2636b013766237be9c3087d7b971ee93ec0e7e8382bdb8a4f6a3b0789_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e19384c18c0d1e3572e6e92e4c1ac356b41ad30e7d436c7402b3d49e14b91566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19384c18c0d1e3572e6e92e4c1ac356b41ad30e7d436c7402b3d49e14b91566->enter($__internal_e19384c18c0d1e3572e6e92e4c1ac356b41ad30e7d436c7402b3d49e14b91566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e19384c18c0d1e3572e6e92e4c1ac356b41ad30e7d436c7402b3d49e14b91566->leave($__internal_e19384c18c0d1e3572e6e92e4c1ac356b41ad30e7d436c7402b3d49e14b91566_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4da046de5c9901b946f1f7211d7d27ad9014f20f24831d76ef857e9b3c250468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da046de5c9901b946f1f7211d7d27ad9014f20f24831d76ef857e9b3c250468->enter($__internal_4da046de5c9901b946f1f7211d7d27ad9014f20f24831d76ef857e9b3c250468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4da046de5c9901b946f1f7211d7d27ad9014f20f24831d76ef857e9b3c250468->leave($__internal_4da046de5c9901b946f1f7211d7d27ad9014f20f24831d76ef857e9b3c250468_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a578e997b1ff289cbf1a55e58b7b6f16b610ea00b9d24ca3aea6c7e7db604a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a578e997b1ff289cbf1a55e58b7b6f16b610ea00b9d24ca3aea6c7e7db604a8d->enter($__internal_a578e997b1ff289cbf1a55e58b7b6f16b610ea00b9d24ca3aea6c7e7db604a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a578e997b1ff289cbf1a55e58b7b6f16b610ea00b9d24ca3aea6c7e7db604a8d->leave($__internal_a578e997b1ff289cbf1a55e58b7b6f16b610ea00b9d24ca3aea6c7e7db604a8d_prof);

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
