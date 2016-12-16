<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_65c490b8ffc2c58f19a14e0a0e71f419857368c2c509e79c4594be6f5daab950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout1.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ae5e613e19f558daf13dc84b7e432ccd80eb2d88930c0004e089176fb1a0fa07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5e613e19f558daf13dc84b7e432ccd80eb2d88930c0004e089176fb1a0fa07->enter($__internal_ae5e613e19f558daf13dc84b7e432ccd80eb2d88930c0004e089176fb1a0fa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae5e613e19f558daf13dc84b7e432ccd80eb2d88930c0004e089176fb1a0fa07->leave($__internal_ae5e613e19f558daf13dc84b7e432ccd80eb2d88930c0004e089176fb1a0fa07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56d5f47a59599cc8d240fcca28a467428087b2ec90583933346eb8936f8f0977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d5f47a59599cc8d240fcca28a467428087b2ec90583933346eb8936f8f0977->enter($__internal_56d5f47a59599cc8d240fcca28a467428087b2ec90583933346eb8936f8f0977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_56d5f47a59599cc8d240fcca28a467428087b2ec90583933346eb8936f8f0977->leave($__internal_56d5f47a59599cc8d240fcca28a467428087b2ec90583933346eb8936f8f0977_prof);

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
        return new Twig_Source("{% extends \"FOSUserBundle::layout1.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
