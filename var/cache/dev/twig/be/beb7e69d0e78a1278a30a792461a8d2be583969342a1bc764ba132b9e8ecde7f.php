<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f9a0fa9c6e40b2d509ed57f329a2dd3024a1a4317d4c620cb8779983360415d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e9645dd7870ed9497cb2129de37c214eb7c9485cf655e91cc9672c2522344e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9645dd7870ed9497cb2129de37c214eb7c9485cf655e91cc9672c2522344e9->enter($__internal_6e9645dd7870ed9497cb2129de37c214eb7c9485cf655e91cc9672c2522344e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e9645dd7870ed9497cb2129de37c214eb7c9485cf655e91cc9672c2522344e9->leave($__internal_6e9645dd7870ed9497cb2129de37c214eb7c9485cf655e91cc9672c2522344e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b78236281fbc301be72bfb9c06b37df062d373eb782094bcb948a07365d4b13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78236281fbc301be72bfb9c06b37df062d373eb782094bcb948a07365d4b13f->enter($__internal_b78236281fbc301be72bfb9c06b37df062d373eb782094bcb948a07365d4b13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b78236281fbc301be72bfb9c06b37df062d373eb782094bcb948a07365d4b13f->leave($__internal_b78236281fbc301be72bfb9c06b37df062d373eb782094bcb948a07365d4b13f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
