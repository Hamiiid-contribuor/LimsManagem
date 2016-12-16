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
        $__internal_a91edc4e6d21df142b464d2d3aee085c4e5b2ad6862c582f07a73796730a3192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91edc4e6d21df142b464d2d3aee085c4e5b2ad6862c582f07a73796730a3192->enter($__internal_a91edc4e6d21df142b464d2d3aee085c4e5b2ad6862c582f07a73796730a3192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91edc4e6d21df142b464d2d3aee085c4e5b2ad6862c582f07a73796730a3192->leave($__internal_a91edc4e6d21df142b464d2d3aee085c4e5b2ad6862c582f07a73796730a3192_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a620f7a3c148f386bb75741c5d0ca8b32d4a8e503b30d8514aa1e53588a8dda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a620f7a3c148f386bb75741c5d0ca8b32d4a8e503b30d8514aa1e53588a8dda9->enter($__internal_a620f7a3c148f386bb75741c5d0ca8b32d4a8e503b30d8514aa1e53588a8dda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a620f7a3c148f386bb75741c5d0ca8b32d4a8e503b30d8514aa1e53588a8dda9->leave($__internal_a620f7a3c148f386bb75741c5d0ca8b32d4a8e503b30d8514aa1e53588a8dda9_prof);

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
