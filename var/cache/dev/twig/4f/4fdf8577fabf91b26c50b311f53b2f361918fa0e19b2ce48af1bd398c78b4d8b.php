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
        $__internal_ae45012a9c96df13c0e0775a9331ffc682172dc8cacb969d6004653bd4bab223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae45012a9c96df13c0e0775a9331ffc682172dc8cacb969d6004653bd4bab223->enter($__internal_ae45012a9c96df13c0e0775a9331ffc682172dc8cacb969d6004653bd4bab223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae45012a9c96df13c0e0775a9331ffc682172dc8cacb969d6004653bd4bab223->leave($__internal_ae45012a9c96df13c0e0775a9331ffc682172dc8cacb969d6004653bd4bab223_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6526773bb3c09688e3a5af680e09d52e23e132840a35572b68c160afadba932a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6526773bb3c09688e3a5af680e09d52e23e132840a35572b68c160afadba932a->enter($__internal_6526773bb3c09688e3a5af680e09d52e23e132840a35572b68c160afadba932a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6526773bb3c09688e3a5af680e09d52e23e132840a35572b68c160afadba932a->leave($__internal_6526773bb3c09688e3a5af680e09d52e23e132840a35572b68c160afadba932a_prof);

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
