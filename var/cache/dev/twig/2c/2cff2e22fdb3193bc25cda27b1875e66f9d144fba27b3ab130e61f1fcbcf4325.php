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
        $__internal_4124cb754d776b812e3e64202a6d0dd527de89612b0fbfc06dae92bbb08f35ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4124cb754d776b812e3e64202a6d0dd527de89612b0fbfc06dae92bbb08f35ee->enter($__internal_4124cb754d776b812e3e64202a6d0dd527de89612b0fbfc06dae92bbb08f35ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4124cb754d776b812e3e64202a6d0dd527de89612b0fbfc06dae92bbb08f35ee->leave($__internal_4124cb754d776b812e3e64202a6d0dd527de89612b0fbfc06dae92bbb08f35ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a552b8d96b9c2298f92016266253ad1f745f9fa41a93b9c425c6abae727a12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a552b8d96b9c2298f92016266253ad1f745f9fa41a93b9c425c6abae727a12e->enter($__internal_7a552b8d96b9c2298f92016266253ad1f745f9fa41a93b9c425c6abae727a12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_7a552b8d96b9c2298f92016266253ad1f745f9fa41a93b9c425c6abae727a12e->leave($__internal_7a552b8d96b9c2298f92016266253ad1f745f9fa41a93b9c425c6abae727a12e_prof);

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
