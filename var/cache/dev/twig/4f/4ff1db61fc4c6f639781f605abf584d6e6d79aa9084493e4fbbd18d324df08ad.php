<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_8b9729473b9ba7366e479b8b5f205ecac3c6cf151e2bd52ed0963cf24d136c7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f74cf758e27cc9ad5a10fc17d6d946c42bb2a122511305818d213d7d9d2cfd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74cf758e27cc9ad5a10fc17d6d946c42bb2a122511305818d213d7d9d2cfd7b->enter($__internal_f74cf758e27cc9ad5a10fc17d6d946c42bb2a122511305818d213d7d9d2cfd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f74cf758e27cc9ad5a10fc17d6d946c42bb2a122511305818d213d7d9d2cfd7b->leave($__internal_f74cf758e27cc9ad5a10fc17d6d946c42bb2a122511305818d213d7d9d2cfd7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e398a57a886c9133a1a84d8cf0f9506740de9e595b0cdddc5f99e4bde7ebcd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e398a57a886c9133a1a84d8cf0f9506740de9e595b0cdddc5f99e4bde7ebcd85->enter($__internal_e398a57a886c9133a1a84d8cf0f9506740de9e595b0cdddc5f99e4bde7ebcd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e398a57a886c9133a1a84d8cf0f9506740de9e595b0cdddc5f99e4bde7ebcd85->leave($__internal_e398a57a886c9133a1a84d8cf0f9506740de9e595b0cdddc5f99e4bde7ebcd85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
