<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_4f812572605525d43758d796bdbcbb74d49301e8c8416bb44dd89e1272f92eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_8a0a88ec38ef08faaf2195dc467965f006f322ac3bf8695ceea345e4d51d26d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0a88ec38ef08faaf2195dc467965f006f322ac3bf8695ceea345e4d51d26d6->enter($__internal_8a0a88ec38ef08faaf2195dc467965f006f322ac3bf8695ceea345e4d51d26d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0a88ec38ef08faaf2195dc467965f006f322ac3bf8695ceea345e4d51d26d6->leave($__internal_8a0a88ec38ef08faaf2195dc467965f006f322ac3bf8695ceea345e4d51d26d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6738b215cb79a892e1c700d22d470895f63654976e89527b322a4f16f2f92080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6738b215cb79a892e1c700d22d470895f63654976e89527b322a4f16f2f92080->enter($__internal_6738b215cb79a892e1c700d22d470895f63654976e89527b322a4f16f2f92080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_6738b215cb79a892e1c700d22d470895f63654976e89527b322a4f16f2f92080->leave($__internal_6738b215cb79a892e1c700d22d470895f63654976e89527b322a4f16f2f92080_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
