<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_eee3b53854e0b7bfd65e8f6247fab8b073791c51c3bf943f82ffc0586be69208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d16c60c9dcc21bb1bb339feddcfd6ef59c2c3a8a1b82b54542037fc690f6656e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16c60c9dcc21bb1bb339feddcfd6ef59c2c3a8a1b82b54542037fc690f6656e->enter($__internal_d16c60c9dcc21bb1bb339feddcfd6ef59c2c3a8a1b82b54542037fc690f6656e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d16c60c9dcc21bb1bb339feddcfd6ef59c2c3a8a1b82b54542037fc690f6656e->leave($__internal_d16c60c9dcc21bb1bb339feddcfd6ef59c2c3a8a1b82b54542037fc690f6656e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f38c50fcf9aeb91200bd26c228ee189d3706ebf9dc61bfc1d326bf5e830b6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f38c50fcf9aeb91200bd26c228ee189d3706ebf9dc61bfc1d326bf5e830b6d2->enter($__internal_5f38c50fcf9aeb91200bd26c228ee189d3706ebf9dc61bfc1d326bf5e830b6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_5f38c50fcf9aeb91200bd26c228ee189d3706ebf9dc61bfc1d326bf5e830b6d2->leave($__internal_5f38c50fcf9aeb91200bd26c228ee189d3706ebf9dc61bfc1d326bf5e830b6d2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
