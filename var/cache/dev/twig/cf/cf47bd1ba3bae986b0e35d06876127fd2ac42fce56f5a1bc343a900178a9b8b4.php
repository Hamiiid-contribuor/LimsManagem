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
        $__internal_48ad00b31f32cac84579ff3d33dcfe65e92a699f1af1dd1b3d713a0d589657f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ad00b31f32cac84579ff3d33dcfe65e92a699f1af1dd1b3d713a0d589657f8->enter($__internal_48ad00b31f32cac84579ff3d33dcfe65e92a699f1af1dd1b3d713a0d589657f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48ad00b31f32cac84579ff3d33dcfe65e92a699f1af1dd1b3d713a0d589657f8->leave($__internal_48ad00b31f32cac84579ff3d33dcfe65e92a699f1af1dd1b3d713a0d589657f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89011e65493bcd426214d93772bc27aa5005ff6c0e23d397e456a7668263fb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89011e65493bcd426214d93772bc27aa5005ff6c0e23d397e456a7668263fb8e->enter($__internal_89011e65493bcd426214d93772bc27aa5005ff6c0e23d397e456a7668263fb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89011e65493bcd426214d93772bc27aa5005ff6c0e23d397e456a7668263fb8e->leave($__internal_89011e65493bcd426214d93772bc27aa5005ff6c0e23d397e456a7668263fb8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0211fb765e5b5fe12fbfbd0aa8d512b07401e7668bdf24ce8d1fc5ea075282aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0211fb765e5b5fe12fbfbd0aa8d512b07401e7668bdf24ce8d1fc5ea075282aa->enter($__internal_0211fb765e5b5fe12fbfbd0aa8d512b07401e7668bdf24ce8d1fc5ea075282aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0211fb765e5b5fe12fbfbd0aa8d512b07401e7668bdf24ce8d1fc5ea075282aa->leave($__internal_0211fb765e5b5fe12fbfbd0aa8d512b07401e7668bdf24ce8d1fc5ea075282aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2afa4af3a53c03cf0178c1918bafa6974c14782cbb787594f99ddcd6e90eb0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afa4af3a53c03cf0178c1918bafa6974c14782cbb787594f99ddcd6e90eb0ec->enter($__internal_2afa4af3a53c03cf0178c1918bafa6974c14782cbb787594f99ddcd6e90eb0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2afa4af3a53c03cf0178c1918bafa6974c14782cbb787594f99ddcd6e90eb0ec->leave($__internal_2afa4af3a53c03cf0178c1918bafa6974c14782cbb787594f99ddcd6e90eb0ec_prof);

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
