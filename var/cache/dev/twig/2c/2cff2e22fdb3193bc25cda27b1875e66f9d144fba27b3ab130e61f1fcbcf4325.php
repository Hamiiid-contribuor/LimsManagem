<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_136f8c4eff999f4feeb5ad3bdab5ae3b618eca0c45755ba410505ec794d0e3ee extends Twig_Template
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
        $__internal_85374ef16ad591015bac3dc2540b0be8f2e4d520d7fb315931694156901deeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85374ef16ad591015bac3dc2540b0be8f2e4d520d7fb315931694156901deeb3->enter($__internal_85374ef16ad591015bac3dc2540b0be8f2e4d520d7fb315931694156901deeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85374ef16ad591015bac3dc2540b0be8f2e4d520d7fb315931694156901deeb3->leave($__internal_85374ef16ad591015bac3dc2540b0be8f2e4d520d7fb315931694156901deeb3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_476b47f98e1ecf90c9c577f41efa83cb6341d4d1b7e0ab30ce098b5861a3114b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476b47f98e1ecf90c9c577f41efa83cb6341d4d1b7e0ab30ce098b5861a3114b->enter($__internal_476b47f98e1ecf90c9c577f41efa83cb6341d4d1b7e0ab30ce098b5861a3114b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_476b47f98e1ecf90c9c577f41efa83cb6341d4d1b7e0ab30ce098b5861a3114b->leave($__internal_476b47f98e1ecf90c9c577f41efa83cb6341d4d1b7e0ab30ce098b5861a3114b_prof);

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
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
