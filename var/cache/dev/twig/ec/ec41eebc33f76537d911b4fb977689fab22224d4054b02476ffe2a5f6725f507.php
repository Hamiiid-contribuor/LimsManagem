<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_4ddde590f02e98e2bb1d5eb79d54a18c49e99185f4a6c339e2ada5e37c1deeec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_886feaa750adb7e1ccfa585a15d8ef201b798eeecd07b1d13e492f9c269d85f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886feaa750adb7e1ccfa585a15d8ef201b798eeecd07b1d13e492f9c269d85f5->enter($__internal_886feaa750adb7e1ccfa585a15d8ef201b798eeecd07b1d13e492f9c269d85f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_886feaa750adb7e1ccfa585a15d8ef201b798eeecd07b1d13e492f9c269d85f5->leave($__internal_886feaa750adb7e1ccfa585a15d8ef201b798eeecd07b1d13e492f9c269d85f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f19cfd74705b16c71d0238dfcd20de20c36487c8e00293dbaab13d805f1181c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f19cfd74705b16c71d0238dfcd20de20c36487c8e00293dbaab13d805f1181c->enter($__internal_0f19cfd74705b16c71d0238dfcd20de20c36487c8e00293dbaab13d805f1181c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0f19cfd74705b16c71d0238dfcd20de20c36487c8e00293dbaab13d805f1181c->leave($__internal_0f19cfd74705b16c71d0238dfcd20de20c36487c8e00293dbaab13d805f1181c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
