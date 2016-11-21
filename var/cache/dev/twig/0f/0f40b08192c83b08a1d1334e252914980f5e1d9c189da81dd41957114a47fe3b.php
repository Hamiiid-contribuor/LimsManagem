<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_53cab21621ac68245a7dd7492387512bf57782dcfda34851c8d04cd8656d61dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_33a49b6c0cc8fb99a40b41265994c9915ef3eac1c9f586d1f95d78ea91d081e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a49b6c0cc8fb99a40b41265994c9915ef3eac1c9f586d1f95d78ea91d081e0->enter($__internal_33a49b6c0cc8fb99a40b41265994c9915ef3eac1c9f586d1f95d78ea91d081e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a49b6c0cc8fb99a40b41265994c9915ef3eac1c9f586d1f95d78ea91d081e0->leave($__internal_33a49b6c0cc8fb99a40b41265994c9915ef3eac1c9f586d1f95d78ea91d081e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a52309f98d5ba6e32144091b7e4f79d3b8e90beaa9765ba6c076eb74d7133f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52309f98d5ba6e32144091b7e4f79d3b8e90beaa9765ba6c076eb74d7133f53->enter($__internal_a52309f98d5ba6e32144091b7e4f79d3b8e90beaa9765ba6c076eb74d7133f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a52309f98d5ba6e32144091b7e4f79d3b8e90beaa9765ba6c076eb74d7133f53->leave($__internal_a52309f98d5ba6e32144091b7e4f79d3b8e90beaa9765ba6c076eb74d7133f53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
