<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_248b0bd6272dcb192ce106552b2b91ea83a14d0f6be7aef13b402b9f063fe400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_70376d93e6b10096bbd0f1910ddbf472ba725dac99fd50eb9ee6bc998b5a5f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70376d93e6b10096bbd0f1910ddbf472ba725dac99fd50eb9ee6bc998b5a5f0e->enter($__internal_70376d93e6b10096bbd0f1910ddbf472ba725dac99fd50eb9ee6bc998b5a5f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70376d93e6b10096bbd0f1910ddbf472ba725dac99fd50eb9ee6bc998b5a5f0e->leave($__internal_70376d93e6b10096bbd0f1910ddbf472ba725dac99fd50eb9ee6bc998b5a5f0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f0ebcb252b2ceb2bc146ff83fa198e8806a1e01c398aa43414c54bc7069a51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0ebcb252b2ceb2bc146ff83fa198e8806a1e01c398aa43414c54bc7069a51a->enter($__internal_5f0ebcb252b2ceb2bc146ff83fa198e8806a1e01c398aa43414c54bc7069a51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5f0ebcb252b2ceb2bc146ff83fa198e8806a1e01c398aa43414c54bc7069a51a->leave($__internal_5f0ebcb252b2ceb2bc146ff83fa198e8806a1e01c398aa43414c54bc7069a51a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
