<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f6f7f14fae5ba1007b43ba1a30094f138102403e2e304aa9108698cd727d74a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_104225c237b7d83f87fed76fd77be483122149d90dd99c43cbd61b612027b046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104225c237b7d83f87fed76fd77be483122149d90dd99c43cbd61b612027b046->enter($__internal_104225c237b7d83f87fed76fd77be483122149d90dd99c43cbd61b612027b046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_104225c237b7d83f87fed76fd77be483122149d90dd99c43cbd61b612027b046->leave($__internal_104225c237b7d83f87fed76fd77be483122149d90dd99c43cbd61b612027b046_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b66e22b6f133be37e775e96edfcf2dc217a01634293e676c01b43441d4b2f9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66e22b6f133be37e775e96edfcf2dc217a01634293e676c01b43441d4b2f9d8->enter($__internal_b66e22b6f133be37e775e96edfcf2dc217a01634293e676c01b43441d4b2f9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b66e22b6f133be37e775e96edfcf2dc217a01634293e676c01b43441d4b2f9d8->leave($__internal_b66e22b6f133be37e775e96edfcf2dc217a01634293e676c01b43441d4b2f9d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
