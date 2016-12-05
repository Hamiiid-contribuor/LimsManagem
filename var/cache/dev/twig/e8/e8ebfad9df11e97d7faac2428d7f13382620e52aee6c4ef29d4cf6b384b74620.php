<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bd05aded2f54e111e9731a568ff8c8ba576707cde036b59935cc82ae9f390582 extends Twig_Template
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
        $__internal_60e3fb156fe2d0359ea0b539a9bb8f5cc71b6ca0fc780bb4340efc2224217746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e3fb156fe2d0359ea0b539a9bb8f5cc71b6ca0fc780bb4340efc2224217746->enter($__internal_60e3fb156fe2d0359ea0b539a9bb8f5cc71b6ca0fc780bb4340efc2224217746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e3fb156fe2d0359ea0b539a9bb8f5cc71b6ca0fc780bb4340efc2224217746->leave($__internal_60e3fb156fe2d0359ea0b539a9bb8f5cc71b6ca0fc780bb4340efc2224217746_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9240e1b76e80ee1839e7e254da39f17f749575a0d5fc5d6b4b0703f9922d1125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9240e1b76e80ee1839e7e254da39f17f749575a0d5fc5d6b4b0703f9922d1125->enter($__internal_9240e1b76e80ee1839e7e254da39f17f749575a0d5fc5d6b4b0703f9922d1125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9240e1b76e80ee1839e7e254da39f17f749575a0d5fc5d6b4b0703f9922d1125->leave($__internal_9240e1b76e80ee1839e7e254da39f17f749575a0d5fc5d6b4b0703f9922d1125_prof);

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
