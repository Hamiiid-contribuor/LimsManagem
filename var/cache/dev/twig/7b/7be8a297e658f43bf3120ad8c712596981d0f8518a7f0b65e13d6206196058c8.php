<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_aed60c3d7fca90f489c2a3edc17a73075e05327a5edbdd20af23ec8e1178b9e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout1.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da549511df4ab3910702140d5f3be5e98557f9378ac4cc45aad8f1f095dca343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da549511df4ab3910702140d5f3be5e98557f9378ac4cc45aad8f1f095dca343->enter($__internal_da549511df4ab3910702140d5f3be5e98557f9378ac4cc45aad8f1f095dca343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da549511df4ab3910702140d5f3be5e98557f9378ac4cc45aad8f1f095dca343->leave($__internal_da549511df4ab3910702140d5f3be5e98557f9378ac4cc45aad8f1f095dca343_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82a33aad3976b7ba0ac5e980f75d90ff72f3d94b837519e5c99560d9b6a22f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a33aad3976b7ba0ac5e980f75d90ff72f3d94b837519e5c99560d9b6a22f2e->enter($__internal_82a33aad3976b7ba0ac5e980f75d90ff72f3d94b837519e5c99560d9b6a22f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        echo "    
    
";
        // line 6
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 6)->display($context);
        
        $__internal_82a33aad3976b7ba0ac5e980f75d90ff72f3d94b837519e5c99560d9b6a22f2e->leave($__internal_82a33aad3976b7ba0ac5e980f75d90ff72f3d94b837519e5c99560d9b6a22f2e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout1.html.twig\" %}

{% block fos_user_content %}
    
    
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
