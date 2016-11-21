<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e34cfa3c1d0c3f28234cc7edf9f9151323c9973d0cab85f144c228ec70f3e355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_263102dc24fdccb706a7eec896404982f85e414eb52f8e884b6e2a9597a2df70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263102dc24fdccb706a7eec896404982f85e414eb52f8e884b6e2a9597a2df70->enter($__internal_263102dc24fdccb706a7eec896404982f85e414eb52f8e884b6e2a9597a2df70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_263102dc24fdccb706a7eec896404982f85e414eb52f8e884b6e2a9597a2df70->leave($__internal_263102dc24fdccb706a7eec896404982f85e414eb52f8e884b6e2a9597a2df70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30741d61f4aa1d3c85d6c5dfaf378a0fc9a70ba6c8eefdde0c46159a424ff21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30741d61f4aa1d3c85d6c5dfaf378a0fc9a70ba6c8eefdde0c46159a424ff21f->enter($__internal_30741d61f4aa1d3c85d6c5dfaf378a0fc9a70ba6c8eefdde0c46159a424ff21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_30741d61f4aa1d3c85d6c5dfaf378a0fc9a70ba6c8eefdde0c46159a424ff21f->leave($__internal_30741d61f4aa1d3c85d6c5dfaf378a0fc9a70ba6c8eefdde0c46159a424ff21f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
