<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ba78bb57e21ebaadef53ba54ef4659fdddfc0616615fb3e7c19ff42ecc3e6f14 extends Twig_Template
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
        $__internal_2156513299e7244d804445c782bd21ca54a452e09552514cc18fb0474b76d4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2156513299e7244d804445c782bd21ca54a452e09552514cc18fb0474b76d4d2->enter($__internal_2156513299e7244d804445c782bd21ca54a452e09552514cc18fb0474b76d4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2156513299e7244d804445c782bd21ca54a452e09552514cc18fb0474b76d4d2->leave($__internal_2156513299e7244d804445c782bd21ca54a452e09552514cc18fb0474b76d4d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c0574debbf604a10dfd933d34764b325ada783c21e59388c651033ec8dc0cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0574debbf604a10dfd933d34764b325ada783c21e59388c651033ec8dc0cce->enter($__internal_9c0574debbf604a10dfd933d34764b325ada783c21e59388c651033ec8dc0cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9c0574debbf604a10dfd933d34764b325ada783c21e59388c651033ec8dc0cce->leave($__internal_9c0574debbf604a10dfd933d34764b325ada783c21e59388c651033ec8dc0cce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2784bd03eb654a0a095884a54cea396ef94e9c763fc700299eb021cb3aac6f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2784bd03eb654a0a095884a54cea396ef94e9c763fc700299eb021cb3aac6f11->enter($__internal_2784bd03eb654a0a095884a54cea396ef94e9c763fc700299eb021cb3aac6f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2784bd03eb654a0a095884a54cea396ef94e9c763fc700299eb021cb3aac6f11->leave($__internal_2784bd03eb654a0a095884a54cea396ef94e9c763fc700299eb021cb3aac6f11_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c233f76bd6d6864c11ded8c96b6374a5bf30baa08841f58339104473c0b56c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c233f76bd6d6864c11ded8c96b6374a5bf30baa08841f58339104473c0b56c26->enter($__internal_c233f76bd6d6864c11ded8c96b6374a5bf30baa08841f58339104473c0b56c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c233f76bd6d6864c11ded8c96b6374a5bf30baa08841f58339104473c0b56c26->leave($__internal_c233f76bd6d6864c11ded8c96b6374a5bf30baa08841f58339104473c0b56c26_prof);

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
