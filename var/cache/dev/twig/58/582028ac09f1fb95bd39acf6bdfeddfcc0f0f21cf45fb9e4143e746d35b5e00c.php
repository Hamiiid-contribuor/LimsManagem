<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_60d6d3293efb26a1b2608ded3aa8f26220e68a1de997011233412028aedd756f extends Twig_Template
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
        $__internal_968d17d28a719ff9b5a5ea11c59dd8fc0215f96a0f766be2b57450dc6501e22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968d17d28a719ff9b5a5ea11c59dd8fc0215f96a0f766be2b57450dc6501e22f->enter($__internal_968d17d28a719ff9b5a5ea11c59dd8fc0215f96a0f766be2b57450dc6501e22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_968d17d28a719ff9b5a5ea11c59dd8fc0215f96a0f766be2b57450dc6501e22f->leave($__internal_968d17d28a719ff9b5a5ea11c59dd8fc0215f96a0f766be2b57450dc6501e22f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59430f367900d70fe89ca5a8c70687becf39c3778af514cee45f0c8d669f53f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59430f367900d70fe89ca5a8c70687becf39c3778af514cee45f0c8d669f53f6->enter($__internal_59430f367900d70fe89ca5a8c70687becf39c3778af514cee45f0c8d669f53f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_59430f367900d70fe89ca5a8c70687becf39c3778af514cee45f0c8d669f53f6->leave($__internal_59430f367900d70fe89ca5a8c70687becf39c3778af514cee45f0c8d669f53f6_prof);

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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
