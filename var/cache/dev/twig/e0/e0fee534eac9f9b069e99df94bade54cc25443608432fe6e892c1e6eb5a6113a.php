<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8774c08e6db9ee5442193440a5af5d4f5332ce1fcb6bab53c944165f6d981d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2006522f105a24e7fbd1f7ef80e9ac96fc806ee2d1538f4784946c00067c4d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2006522f105a24e7fbd1f7ef80e9ac96fc806ee2d1538f4784946c00067c4d6c->enter($__internal_2006522f105a24e7fbd1f7ef80e9ac96fc806ee2d1538f4784946c00067c4d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2006522f105a24e7fbd1f7ef80e9ac96fc806ee2d1538f4784946c00067c4d6c->leave($__internal_2006522f105a24e7fbd1f7ef80e9ac96fc806ee2d1538f4784946c00067c4d6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf1fb8af88006012987c6b3c466d7b4d4ae32ab0039524958689e027a5ab0c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1fb8af88006012987c6b3c466d7b4d4ae32ab0039524958689e027a5ab0c11->enter($__internal_cf1fb8af88006012987c6b3c466d7b4d4ae32ab0039524958689e027a5ab0c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_cf1fb8af88006012987c6b3c466d7b4d4ae32ab0039524958689e027a5ab0c11->leave($__internal_cf1fb8af88006012987c6b3c466d7b4d4ae32ab0039524958689e027a5ab0c11_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fef281006ae1a0f76822248593ac4e904e1f30d6f90a0648e205425ee4aa7ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef281006ae1a0f76822248593ac4e904e1f30d6f90a0648e205425ee4aa7ac2->enter($__internal_fef281006ae1a0f76822248593ac4e904e1f30d6f90a0648e205425ee4aa7ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fef281006ae1a0f76822248593ac4e904e1f30d6f90a0648e205425ee4aa7ac2->leave($__internal_fef281006ae1a0f76822248593ac4e904e1f30d6f90a0648e205425ee4aa7ac2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
