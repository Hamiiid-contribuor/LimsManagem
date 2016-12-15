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
        $__internal_54b183bbc654d2312b183263c9971cae861167c4cb91c458c89a5ea02186251a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b183bbc654d2312b183263c9971cae861167c4cb91c458c89a5ea02186251a->enter($__internal_54b183bbc654d2312b183263c9971cae861167c4cb91c458c89a5ea02186251a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b183bbc654d2312b183263c9971cae861167c4cb91c458c89a5ea02186251a->leave($__internal_54b183bbc654d2312b183263c9971cae861167c4cb91c458c89a5ea02186251a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddf9859b758f808824df1bae13ea02de5eeeb815c6b7b88205d6e6d52f19f802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf9859b758f808824df1bae13ea02de5eeeb815c6b7b88205d6e6d52f19f802->enter($__internal_ddf9859b758f808824df1bae13ea02de5eeeb815c6b7b88205d6e6d52f19f802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_ddf9859b758f808824df1bae13ea02de5eeeb815c6b7b88205d6e6d52f19f802->leave($__internal_ddf9859b758f808824df1bae13ea02de5eeeb815c6b7b88205d6e6d52f19f802_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b72dcec98c0fb6a17cf73e0be724eab195ef5da8a488fb438e5507faa7415e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72dcec98c0fb6a17cf73e0be724eab195ef5da8a488fb438e5507faa7415e8c->enter($__internal_b72dcec98c0fb6a17cf73e0be724eab195ef5da8a488fb438e5507faa7415e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

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
        
        $__internal_b72dcec98c0fb6a17cf73e0be724eab195ef5da8a488fb438e5507faa7415e8c->leave($__internal_b72dcec98c0fb6a17cf73e0be724eab195ef5da8a488fb438e5507faa7415e8c_prof);

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
