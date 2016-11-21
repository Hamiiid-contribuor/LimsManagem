<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3f56dc5c82568877b277775761c55f28679a2931748d13002de259cd03f08954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_fb29d0a81512e29ab290617f4431847c18d14fb5171b46beb2f21f465fb716c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb29d0a81512e29ab290617f4431847c18d14fb5171b46beb2f21f465fb716c7->enter($__internal_fb29d0a81512e29ab290617f4431847c18d14fb5171b46beb2f21f465fb716c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb29d0a81512e29ab290617f4431847c18d14fb5171b46beb2f21f465fb716c7->leave($__internal_fb29d0a81512e29ab290617f4431847c18d14fb5171b46beb2f21f465fb716c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdaef3a5559a4827a89fde8b5e76ad5cfb3fbb50f4370d298ba2f0bdef77e0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdaef3a5559a4827a89fde8b5e76ad5cfb3fbb50f4370d298ba2f0bdef77e0b1->enter($__internal_fdaef3a5559a4827a89fde8b5e76ad5cfb3fbb50f4370d298ba2f0bdef77e0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fdaef3a5559a4827a89fde8b5e76ad5cfb3fbb50f4370d298ba2f0bdef77e0b1->leave($__internal_fdaef3a5559a4827a89fde8b5e76ad5cfb3fbb50f4370d298ba2f0bdef77e0b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
