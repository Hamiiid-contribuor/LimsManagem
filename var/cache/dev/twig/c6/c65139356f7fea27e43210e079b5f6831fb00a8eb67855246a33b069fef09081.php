<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f143dbda0770e7474164d4f3ad6e14772550ff968cf8e06e189d4251a4856489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_77174b5ae5c815cda12d7dded087294afc7b13da4c4773799d02aadaf00da6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77174b5ae5c815cda12d7dded087294afc7b13da4c4773799d02aadaf00da6f0->enter($__internal_77174b5ae5c815cda12d7dded087294afc7b13da4c4773799d02aadaf00da6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77174b5ae5c815cda12d7dded087294afc7b13da4c4773799d02aadaf00da6f0->leave($__internal_77174b5ae5c815cda12d7dded087294afc7b13da4c4773799d02aadaf00da6f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a33425814d348405b2ddae4820832c1f23418ba129af71f7eeda059c1cb1a408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33425814d348405b2ddae4820832c1f23418ba129af71f7eeda059c1cb1a408->enter($__internal_a33425814d348405b2ddae4820832c1f23418ba129af71f7eeda059c1cb1a408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a33425814d348405b2ddae4820832c1f23418ba129af71f7eeda059c1cb1a408->leave($__internal_a33425814d348405b2ddae4820832c1f23418ba129af71f7eeda059c1cb1a408_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
