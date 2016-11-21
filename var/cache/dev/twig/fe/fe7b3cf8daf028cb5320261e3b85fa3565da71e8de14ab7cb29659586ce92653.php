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
        $__internal_92569cb729e26cb42e8b72e1356f9c1969a1d21af266907e0f00df4256927680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92569cb729e26cb42e8b72e1356f9c1969a1d21af266907e0f00df4256927680->enter($__internal_92569cb729e26cb42e8b72e1356f9c1969a1d21af266907e0f00df4256927680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92569cb729e26cb42e8b72e1356f9c1969a1d21af266907e0f00df4256927680->leave($__internal_92569cb729e26cb42e8b72e1356f9c1969a1d21af266907e0f00df4256927680_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6467226b56c53a3980134de606298c72ea537407201f36e68cb136b5c52e549d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6467226b56c53a3980134de606298c72ea537407201f36e68cb136b5c52e549d->enter($__internal_6467226b56c53a3980134de606298c72ea537407201f36e68cb136b5c52e549d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6467226b56c53a3980134de606298c72ea537407201f36e68cb136b5c52e549d->leave($__internal_6467226b56c53a3980134de606298c72ea537407201f36e68cb136b5c52e549d_prof);

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
