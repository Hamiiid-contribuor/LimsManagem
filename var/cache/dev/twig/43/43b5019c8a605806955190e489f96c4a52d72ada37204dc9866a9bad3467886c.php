<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_65c490b8ffc2c58f19a14e0a0e71f419857368c2c509e79c4594be6f5daab950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_3ad4431bce65b0ee45fea4f104d0f9cce64d7d4f2d780ea7b57af0eb33dcec27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad4431bce65b0ee45fea4f104d0f9cce64d7d4f2d780ea7b57af0eb33dcec27->enter($__internal_3ad4431bce65b0ee45fea4f104d0f9cce64d7d4f2d780ea7b57af0eb33dcec27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ad4431bce65b0ee45fea4f104d0f9cce64d7d4f2d780ea7b57af0eb33dcec27->leave($__internal_3ad4431bce65b0ee45fea4f104d0f9cce64d7d4f2d780ea7b57af0eb33dcec27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21faba82e037986fcfb60d287fa8c03009994a2c680b64d656d511326e71e354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21faba82e037986fcfb60d287fa8c03009994a2c680b64d656d511326e71e354->enter($__internal_21faba82e037986fcfb60d287fa8c03009994a2c680b64d656d511326e71e354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_21faba82e037986fcfb60d287fa8c03009994a2c680b64d656d511326e71e354->leave($__internal_21faba82e037986fcfb60d287fa8c03009994a2c680b64d656d511326e71e354_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
