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
        $__internal_ce040127115fe820f124e91bd25f79be9f447b375dd1d7a840ed1b34c16d765f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce040127115fe820f124e91bd25f79be9f447b375dd1d7a840ed1b34c16d765f->enter($__internal_ce040127115fe820f124e91bd25f79be9f447b375dd1d7a840ed1b34c16d765f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce040127115fe820f124e91bd25f79be9f447b375dd1d7a840ed1b34c16d765f->leave($__internal_ce040127115fe820f124e91bd25f79be9f447b375dd1d7a840ed1b34c16d765f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2bec2eae8774f2d37b0adaa187943b77d3e349f21b26bba235432f139acea914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bec2eae8774f2d37b0adaa187943b77d3e349f21b26bba235432f139acea914->enter($__internal_2bec2eae8774f2d37b0adaa187943b77d3e349f21b26bba235432f139acea914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2bec2eae8774f2d37b0adaa187943b77d3e349f21b26bba235432f139acea914->leave($__internal_2bec2eae8774f2d37b0adaa187943b77d3e349f21b26bba235432f139acea914_prof);

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
