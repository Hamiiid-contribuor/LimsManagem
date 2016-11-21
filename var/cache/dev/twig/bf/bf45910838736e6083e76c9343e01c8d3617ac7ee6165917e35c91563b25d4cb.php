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
        $__internal_f8dcb1ccd29a2e649236aa6e9e513954ebe520d01526f068b9669f7ecf9a51a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dcb1ccd29a2e649236aa6e9e513954ebe520d01526f068b9669f7ecf9a51a0->enter($__internal_f8dcb1ccd29a2e649236aa6e9e513954ebe520d01526f068b9669f7ecf9a51a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8dcb1ccd29a2e649236aa6e9e513954ebe520d01526f068b9669f7ecf9a51a0->leave($__internal_f8dcb1ccd29a2e649236aa6e9e513954ebe520d01526f068b9669f7ecf9a51a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc5babf534d789cf10fdb44352befc57ff8de73c73541ecdba6ea1a618f14844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5babf534d789cf10fdb44352befc57ff8de73c73541ecdba6ea1a618f14844->enter($__internal_dc5babf534d789cf10fdb44352befc57ff8de73c73541ecdba6ea1a618f14844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_dc5babf534d789cf10fdb44352befc57ff8de73c73541ecdba6ea1a618f14844->leave($__internal_dc5babf534d789cf10fdb44352befc57ff8de73c73541ecdba6ea1a618f14844_prof);

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
