<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_482a843592230ad780b241fa881a1d930f1379cfb3adb20cfab0dd22c04ec4dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_8354b75851638f1c4405419f9d03ca05dda17bd2d1db6ac28982aea5725ebf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8354b75851638f1c4405419f9d03ca05dda17bd2d1db6ac28982aea5725ebf45->enter($__internal_8354b75851638f1c4405419f9d03ca05dda17bd2d1db6ac28982aea5725ebf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8354b75851638f1c4405419f9d03ca05dda17bd2d1db6ac28982aea5725ebf45->leave($__internal_8354b75851638f1c4405419f9d03ca05dda17bd2d1db6ac28982aea5725ebf45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9853298decaff01db0ce10e8dda4f6679db27a9e6a13360eee2b5964f64f246f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9853298decaff01db0ce10e8dda4f6679db27a9e6a13360eee2b5964f64f246f->enter($__internal_9853298decaff01db0ce10e8dda4f6679db27a9e6a13360eee2b5964f64f246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_9853298decaff01db0ce10e8dda4f6679db27a9e6a13360eee2b5964f64f246f->leave($__internal_9853298decaff01db0ce10e8dda4f6679db27a9e6a13360eee2b5964f64f246f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
