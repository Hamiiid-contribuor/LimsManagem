<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f75553f6ad72248b9a60db87e859a82091ece8b156c40042367c5d48c652aa8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0b9b436a5756a61d5986a77b22f38663e46686a5713a3bdc07d9dd1abaeca8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9b436a5756a61d5986a77b22f38663e46686a5713a3bdc07d9dd1abaeca8ee->enter($__internal_0b9b436a5756a61d5986a77b22f38663e46686a5713a3bdc07d9dd1abaeca8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b9b436a5756a61d5986a77b22f38663e46686a5713a3bdc07d9dd1abaeca8ee->leave($__internal_0b9b436a5756a61d5986a77b22f38663e46686a5713a3bdc07d9dd1abaeca8ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f253cb7c29d4cbad5567ef0f05f3376cebec3147a122d06e66924131ab1017d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f253cb7c29d4cbad5567ef0f05f3376cebec3147a122d06e66924131ab1017d->enter($__internal_2f253cb7c29d4cbad5567ef0f05f3376cebec3147a122d06e66924131ab1017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2f253cb7c29d4cbad5567ef0f05f3376cebec3147a122d06e66924131ab1017d->leave($__internal_2f253cb7c29d4cbad5567ef0f05f3376cebec3147a122d06e66924131ab1017d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
