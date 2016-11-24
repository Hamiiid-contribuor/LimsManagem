<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1598baec4a4b99f817680c0e0d223044213a10cb8f099de74d2f11feeb83fc13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_2268f04d392f6e6e7172904ceeefa015d43e0adb7a400f16dcc2ddf77a95ba8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2268f04d392f6e6e7172904ceeefa015d43e0adb7a400f16dcc2ddf77a95ba8a->enter($__internal_2268f04d392f6e6e7172904ceeefa015d43e0adb7a400f16dcc2ddf77a95ba8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2268f04d392f6e6e7172904ceeefa015d43e0adb7a400f16dcc2ddf77a95ba8a->leave($__internal_2268f04d392f6e6e7172904ceeefa015d43e0adb7a400f16dcc2ddf77a95ba8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb492ffba0a9f27e3be1d6b4ea6cd29eb374c732f03aa6cb52eff012e65ee917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb492ffba0a9f27e3be1d6b4ea6cd29eb374c732f03aa6cb52eff012e65ee917->enter($__internal_eb492ffba0a9f27e3be1d6b4ea6cd29eb374c732f03aa6cb52eff012e65ee917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_eb492ffba0a9f27e3be1d6b4ea6cd29eb374c732f03aa6cb52eff012e65ee917->leave($__internal_eb492ffba0a9f27e3be1d6b4ea6cd29eb374c732f03aa6cb52eff012e65ee917_prof);

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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
