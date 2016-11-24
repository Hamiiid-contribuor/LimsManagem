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
        $__internal_b72c3f0af4191026ca164c9b3487ed469469ad852192a1f1fe55213fe7c9f32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72c3f0af4191026ca164c9b3487ed469469ad852192a1f1fe55213fe7c9f32d->enter($__internal_b72c3f0af4191026ca164c9b3487ed469469ad852192a1f1fe55213fe7c9f32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72c3f0af4191026ca164c9b3487ed469469ad852192a1f1fe55213fe7c9f32d->leave($__internal_b72c3f0af4191026ca164c9b3487ed469469ad852192a1f1fe55213fe7c9f32d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf82da1f85c423cc5e0f3f990d22433995a42a39fae54b367d0b95b97dfd395a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf82da1f85c423cc5e0f3f990d22433995a42a39fae54b367d0b95b97dfd395a->enter($__internal_bf82da1f85c423cc5e0f3f990d22433995a42a39fae54b367d0b95b97dfd395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_bf82da1f85c423cc5e0f3f990d22433995a42a39fae54b367d0b95b97dfd395a->leave($__internal_bf82da1f85c423cc5e0f3f990d22433995a42a39fae54b367d0b95b97dfd395a_prof);

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
