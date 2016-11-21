<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_2d43f51b47e460e5f4cb85cda6296e1cff6b342295eb088e0bea00e837a65772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_bb6d6fce9745043d47a8af779d4ce0ef71270c25bb527c3662e4156793049b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6d6fce9745043d47a8af779d4ce0ef71270c25bb527c3662e4156793049b60->enter($__internal_bb6d6fce9745043d47a8af779d4ce0ef71270c25bb527c3662e4156793049b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb6d6fce9745043d47a8af779d4ce0ef71270c25bb527c3662e4156793049b60->leave($__internal_bb6d6fce9745043d47a8af779d4ce0ef71270c25bb527c3662e4156793049b60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c81fd32231eb7e9c2658874ecc9749aac346f896e196179131a858f405836dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81fd32231eb7e9c2658874ecc9749aac346f896e196179131a858f405836dc5->enter($__internal_c81fd32231eb7e9c2658874ecc9749aac346f896e196179131a858f405836dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c81fd32231eb7e9c2658874ecc9749aac346f896e196179131a858f405836dc5->leave($__internal_c81fd32231eb7e9c2658874ecc9749aac346f896e196179131a858f405836dc5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
