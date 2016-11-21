<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_578369666a3e3963e486d51207bbd9a207619f29e8960e6ab17ca05b4fcdf695 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_eddaeda63f0bd4dc59b6ee85b11e153c7078a56c74e2675d109d2243c48fb12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddaeda63f0bd4dc59b6ee85b11e153c7078a56c74e2675d109d2243c48fb12a->enter($__internal_eddaeda63f0bd4dc59b6ee85b11e153c7078a56c74e2675d109d2243c48fb12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eddaeda63f0bd4dc59b6ee85b11e153c7078a56c74e2675d109d2243c48fb12a->leave($__internal_eddaeda63f0bd4dc59b6ee85b11e153c7078a56c74e2675d109d2243c48fb12a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc9cb766b816f66a2b6b2c00e56f8910704cb9ae92d383855e846b8ef522dfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9cb766b816f66a2b6b2c00e56f8910704cb9ae92d383855e846b8ef522dfee->enter($__internal_bc9cb766b816f66a2b6b2c00e56f8910704cb9ae92d383855e846b8ef522dfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_bc9cb766b816f66a2b6b2c00e56f8910704cb9ae92d383855e846b8ef522dfee->leave($__internal_bc9cb766b816f66a2b6b2c00e56f8910704cb9ae92d383855e846b8ef522dfee_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
