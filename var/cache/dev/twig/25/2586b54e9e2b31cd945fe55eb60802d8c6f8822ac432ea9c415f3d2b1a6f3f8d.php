<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_4970e44f48d6527ecbba54e859e570d75767c9c7cf6ad64e9d611b598d473b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_10ba20f04983bc95fb89cfc7f17c72b75d538912bf975ff8547447e410948b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ba20f04983bc95fb89cfc7f17c72b75d538912bf975ff8547447e410948b4a->enter($__internal_10ba20f04983bc95fb89cfc7f17c72b75d538912bf975ff8547447e410948b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ba20f04983bc95fb89cfc7f17c72b75d538912bf975ff8547447e410948b4a->leave($__internal_10ba20f04983bc95fb89cfc7f17c72b75d538912bf975ff8547447e410948b4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c44af74f9f10e8998c41fd16be72ec8759ae56787f405552bf2c7d636c365487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44af74f9f10e8998c41fd16be72ec8759ae56787f405552bf2c7d636c365487->enter($__internal_c44af74f9f10e8998c41fd16be72ec8759ae56787f405552bf2c7d636c365487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/ChangePassword/change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_c44af74f9f10e8998c41fd16be72ec8759ae56787f405552bf2c7d636c365487->leave($__internal_c44af74f9f10e8998c41fd16be72ec8759ae56787f405552bf2c7d636c365487_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
