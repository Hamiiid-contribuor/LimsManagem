<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_3156987d774cabd024dd007d06f2986d48a1b5c5edba502c361528bbd7a4782f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_86b61e26003d4e77feb1908823d7b16970aa8e24c63de23c68b9c23b6264e3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b61e26003d4e77feb1908823d7b16970aa8e24c63de23c68b9c23b6264e3ed->enter($__internal_86b61e26003d4e77feb1908823d7b16970aa8e24c63de23c68b9c23b6264e3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b61e26003d4e77feb1908823d7b16970aa8e24c63de23c68b9c23b6264e3ed->leave($__internal_86b61e26003d4e77feb1908823d7b16970aa8e24c63de23c68b9c23b6264e3ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f092a9beb2e7acca2eb3da82c8c4982f0e4c5055b460585e98fe6ebd8b18817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f092a9beb2e7acca2eb3da82c8c4982f0e4c5055b460585e98fe6ebd8b18817->enter($__internal_2f092a9beb2e7acca2eb3da82c8c4982f0e4c5055b460585e98fe6ebd8b18817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_2f092a9beb2e7acca2eb3da82c8c4982f0e4c5055b460585e98fe6ebd8b18817->leave($__internal_2f092a9beb2e7acca2eb3da82c8c4982f0e4c5055b460585e98fe6ebd8b18817_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
