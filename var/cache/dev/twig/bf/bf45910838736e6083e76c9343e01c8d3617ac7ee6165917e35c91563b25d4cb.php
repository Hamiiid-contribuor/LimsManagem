<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8594e857254c0079212085c653116567031939759a9bc7aeff5ee67d0e6ec991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e4590b43963d375c5f07950e230a2d372c5401ecfbb3d19dc60589d436052330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4590b43963d375c5f07950e230a2d372c5401ecfbb3d19dc60589d436052330->enter($__internal_e4590b43963d375c5f07950e230a2d372c5401ecfbb3d19dc60589d436052330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4590b43963d375c5f07950e230a2d372c5401ecfbb3d19dc60589d436052330->leave($__internal_e4590b43963d375c5f07950e230a2d372c5401ecfbb3d19dc60589d436052330_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c15b96a184d5745dd80e057f0299ae5129915f27013a08882f27b53be29f6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c15b96a184d5745dd80e057f0299ae5129915f27013a08882f27b53be29f6c0->enter($__internal_0c15b96a184d5745dd80e057f0299ae5129915f27013a08882f27b53be29f6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0c15b96a184d5745dd80e057f0299ae5129915f27013a08882f27b53be29f6c0->leave($__internal_0c15b96a184d5745dd80e057f0299ae5129915f27013a08882f27b53be29f6c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
