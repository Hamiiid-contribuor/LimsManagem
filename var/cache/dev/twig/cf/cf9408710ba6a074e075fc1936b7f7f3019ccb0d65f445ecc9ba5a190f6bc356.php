<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_41a28430ff8e8a2b4e41c63ccc36d113e98c7d58cc227f82b8bb39dadf4f392b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_5ac916299ad167543081fdaaebadbfe8df491fcbf61fa822ef390d28903fd663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac916299ad167543081fdaaebadbfe8df491fcbf61fa822ef390d28903fd663->enter($__internal_5ac916299ad167543081fdaaebadbfe8df491fcbf61fa822ef390d28903fd663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ac916299ad167543081fdaaebadbfe8df491fcbf61fa822ef390d28903fd663->leave($__internal_5ac916299ad167543081fdaaebadbfe8df491fcbf61fa822ef390d28903fd663_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_033b8704b00238061f8e6947d7b24e4dbfaca61a2ce587c244ad867e75128489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033b8704b00238061f8e6947d7b24e4dbfaca61a2ce587c244ad867e75128489->enter($__internal_033b8704b00238061f8e6947d7b24e4dbfaca61a2ce587c244ad867e75128489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_033b8704b00238061f8e6947d7b24e4dbfaca61a2ce587c244ad867e75128489->leave($__internal_033b8704b00238061f8e6947d7b24e4dbfaca61a2ce587c244ad867e75128489_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6fbcd53d032c456166397490027145142c0ec2d0b0bb35baa188081266b6d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fbcd53d032c456166397490027145142c0ec2d0b0bb35baa188081266b6d6e->enter($__internal_a6fbcd53d032c456166397490027145142c0ec2d0b0bb35baa188081266b6d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

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
        
        $__internal_a6fbcd53d032c456166397490027145142c0ec2d0b0bb35baa188081266b6d6e->leave($__internal_a6fbcd53d032c456166397490027145142c0ec2d0b0bb35baa188081266b6d6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
