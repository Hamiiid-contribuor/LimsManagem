<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_60d6d3293efb26a1b2608ded3aa8f26220e68a1de997011233412028aedd756f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout1.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31fa84d425abd0c8663fd81d7234ee69e2186b324b2e47e51896d1e0dcc4ec6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fa84d425abd0c8663fd81d7234ee69e2186b324b2e47e51896d1e0dcc4ec6b->enter($__internal_31fa84d425abd0c8663fd81d7234ee69e2186b324b2e47e51896d1e0dcc4ec6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31fa84d425abd0c8663fd81d7234ee69e2186b324b2e47e51896d1e0dcc4ec6b->leave($__internal_31fa84d425abd0c8663fd81d7234ee69e2186b324b2e47e51896d1e0dcc4ec6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b372b0f7325c49365c994edab0d09b42f8ed232c8543babcc0547be486b2ef29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b372b0f7325c49365c994edab0d09b42f8ed232c8543babcc0547be486b2ef29->enter($__internal_b372b0f7325c49365c994edab0d09b42f8ed232c8543babcc0547be486b2ef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        echo "    
    
";
        // line 6
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 6)->display($context);
        
        $__internal_b372b0f7325c49365c994edab0d09b42f8ed232c8543babcc0547be486b2ef29->leave($__internal_b372b0f7325c49365c994edab0d09b42f8ed232c8543babcc0547be486b2ef29_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout1.html.twig\" %}

{% block fos_user_content %}
    
    
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
