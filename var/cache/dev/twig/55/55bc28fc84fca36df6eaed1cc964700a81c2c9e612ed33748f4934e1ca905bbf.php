<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_6dd4892758785003806e291f0d1a08e72940ba7f46d6dd13cda83f2dbf8899c7 extends Twig_Template
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
        $__internal_b49629ea49694f55bacb73ed026ce3f1d5310068f9bdca5081a917911cad5dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49629ea49694f55bacb73ed026ce3f1d5310068f9bdca5081a917911cad5dbb->enter($__internal_b49629ea49694f55bacb73ed026ce3f1d5310068f9bdca5081a917911cad5dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b49629ea49694f55bacb73ed026ce3f1d5310068f9bdca5081a917911cad5dbb->leave($__internal_b49629ea49694f55bacb73ed026ce3f1d5310068f9bdca5081a917911cad5dbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52f38ed1d4d10eddccd17f8cf8ed24b0311fd4fa22ec02fb7efa1e2f64ee5590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f38ed1d4d10eddccd17f8cf8ed24b0311fd4fa22ec02fb7efa1e2f64ee5590->enter($__internal_52f38ed1d4d10eddccd17f8cf8ed24b0311fd4fa22ec02fb7efa1e2f64ee5590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_52f38ed1d4d10eddccd17f8cf8ed24b0311fd4fa22ec02fb7efa1e2f64ee5590->leave($__internal_52f38ed1d4d10eddccd17f8cf8ed24b0311fd4fa22ec02fb7efa1e2f64ee5590_prof);

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
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
