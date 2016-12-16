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
        $__internal_1257460cf0b3681d57953bf59e86b03cd94b4cbe00ad59858bcab38d8dca9d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1257460cf0b3681d57953bf59e86b03cd94b4cbe00ad59858bcab38d8dca9d5e->enter($__internal_1257460cf0b3681d57953bf59e86b03cd94b4cbe00ad59858bcab38d8dca9d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1257460cf0b3681d57953bf59e86b03cd94b4cbe00ad59858bcab38d8dca9d5e->leave($__internal_1257460cf0b3681d57953bf59e86b03cd94b4cbe00ad59858bcab38d8dca9d5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f9235ef1f8a07306415abc1695346a032fcd2694de7c27176c058fd825f0f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9235ef1f8a07306415abc1695346a032fcd2694de7c27176c058fd825f0f2b->enter($__internal_7f9235ef1f8a07306415abc1695346a032fcd2694de7c27176c058fd825f0f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_7f9235ef1f8a07306415abc1695346a032fcd2694de7c27176c058fd825f0f2b->leave($__internal_7f9235ef1f8a07306415abc1695346a032fcd2694de7c27176c058fd825f0f2b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_efc03b1bf0ee27e2f5fd4610464735fa1c941b64ad54ddc898e4edeb770240bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc03b1bf0ee27e2f5fd4610464735fa1c941b64ad54ddc898e4edeb770240bd->enter($__internal_efc03b1bf0ee27e2f5fd4610464735fa1c941b64ad54ddc898e4edeb770240bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

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
        
        $__internal_efc03b1bf0ee27e2f5fd4610464735fa1c941b64ad54ddc898e4edeb770240bd->leave($__internal_efc03b1bf0ee27e2f5fd4610464735fa1c941b64ad54ddc898e4edeb770240bd_prof);

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
