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
        $__internal_4ed8902704db4bba334acb092e4fbd186fbb16bb09b9de603967fe0fedf04218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed8902704db4bba334acb092e4fbd186fbb16bb09b9de603967fe0fedf04218->enter($__internal_4ed8902704db4bba334acb092e4fbd186fbb16bb09b9de603967fe0fedf04218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ed8902704db4bba334acb092e4fbd186fbb16bb09b9de603967fe0fedf04218->leave($__internal_4ed8902704db4bba334acb092e4fbd186fbb16bb09b9de603967fe0fedf04218_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_250fdf8faa85950247c5fd1ccebc4842f072e33d7c3b5cf1141575698d909b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250fdf8faa85950247c5fd1ccebc4842f072e33d7c3b5cf1141575698d909b6b->enter($__internal_250fdf8faa85950247c5fd1ccebc4842f072e33d7c3b5cf1141575698d909b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_250fdf8faa85950247c5fd1ccebc4842f072e33d7c3b5cf1141575698d909b6b->leave($__internal_250fdf8faa85950247c5fd1ccebc4842f072e33d7c3b5cf1141575698d909b6b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03ec37ec43d2567efe435d21f10216512e8227846c57e33f3ea4c53a6b3cb6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ec37ec43d2567efe435d21f10216512e8227846c57e33f3ea4c53a6b3cb6b8->enter($__internal_03ec37ec43d2567efe435d21f10216512e8227846c57e33f3ea4c53a6b3cb6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03ec37ec43d2567efe435d21f10216512e8227846c57e33f3ea4c53a6b3cb6b8->leave($__internal_03ec37ec43d2567efe435d21f10216512e8227846c57e33f3ea4c53a6b3cb6b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8152fec76ddf7e66586c55c8b10817e0af84b4b8f03fb75899dc1e0af3b95ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8152fec76ddf7e66586c55c8b10817e0af84b4b8f03fb75899dc1e0af3b95ce->enter($__internal_c8152fec76ddf7e66586c55c8b10817e0af84b4b8f03fb75899dc1e0af3b95ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c8152fec76ddf7e66586c55c8b10817e0af84b4b8f03fb75899dc1e0af3b95ce->leave($__internal_c8152fec76ddf7e66586c55c8b10817e0af84b4b8f03fb75899dc1e0af3b95ce_prof);

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
