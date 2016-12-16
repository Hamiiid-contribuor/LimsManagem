<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_19d7c1d259c50489ee1c4b59045453f43eac8b3e4088cdb81ef6b6d36d5dea98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_cf22800507ec71c61aa566a56dc6507e2137fb10959a5617100c98ae1fae816d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf22800507ec71c61aa566a56dc6507e2137fb10959a5617100c98ae1fae816d->enter($__internal_cf22800507ec71c61aa566a56dc6507e2137fb10959a5617100c98ae1fae816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf22800507ec71c61aa566a56dc6507e2137fb10959a5617100c98ae1fae816d->leave($__internal_cf22800507ec71c61aa566a56dc6507e2137fb10959a5617100c98ae1fae816d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1153568d9a8ec65b8f8a397bf0118c93339ed3f75e59df4772d64ee313854107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1153568d9a8ec65b8f8a397bf0118c93339ed3f75e59df4772d64ee313854107->enter($__internal_1153568d9a8ec65b8f8a397bf0118c93339ed3f75e59df4772d64ee313854107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_1153568d9a8ec65b8f8a397bf0118c93339ed3f75e59df4772d64ee313854107->leave($__internal_1153568d9a8ec65b8f8a397bf0118c93339ed3f75e59df4772d64ee313854107_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
