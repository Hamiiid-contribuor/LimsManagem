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
        $__internal_dc1fae435220881ece440e3f5122d62e5bd81eaf244a77abb56c010979fd0b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1fae435220881ece440e3f5122d62e5bd81eaf244a77abb56c010979fd0b4e->enter($__internal_dc1fae435220881ece440e3f5122d62e5bd81eaf244a77abb56c010979fd0b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc1fae435220881ece440e3f5122d62e5bd81eaf244a77abb56c010979fd0b4e->leave($__internal_dc1fae435220881ece440e3f5122d62e5bd81eaf244a77abb56c010979fd0b4e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07d07b9d9103c79daa9d98056a02436b914b4cd6ceeb33e2d49f472d423668b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d07b9d9103c79daa9d98056a02436b914b4cd6ceeb33e2d49f472d423668b3->enter($__internal_07d07b9d9103c79daa9d98056a02436b914b4cd6ceeb33e2d49f472d423668b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_07d07b9d9103c79daa9d98056a02436b914b4cd6ceeb33e2d49f472d423668b3->leave($__internal_07d07b9d9103c79daa9d98056a02436b914b4cd6ceeb33e2d49f472d423668b3_prof);

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
