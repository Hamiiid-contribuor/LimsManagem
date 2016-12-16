<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_548118a35c5232365c1b5c709c3bc8ac406027fd9ae1aa6d6aae10e5875316a0 extends Twig_Template
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
        $__internal_cdf57749afbc84e177e4e3ffb455c8a8388dae756591a8882a09a926e922e958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf57749afbc84e177e4e3ffb455c8a8388dae756591a8882a09a926e922e958->enter($__internal_cdf57749afbc84e177e4e3ffb455c8a8388dae756591a8882a09a926e922e958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf57749afbc84e177e4e3ffb455c8a8388dae756591a8882a09a926e922e958->leave($__internal_cdf57749afbc84e177e4e3ffb455c8a8388dae756591a8882a09a926e922e958_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ed86145af94202ce9f429ece30462cfc9b6d10a1adcfb8741f0c50ae6d80d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed86145af94202ce9f429ece30462cfc9b6d10a1adcfb8741f0c50ae6d80d53->enter($__internal_2ed86145af94202ce9f429ece30462cfc9b6d10a1adcfb8741f0c50ae6d80d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2ed86145af94202ce9f429ece30462cfc9b6d10a1adcfb8741f0c50ae6d80d53->leave($__internal_2ed86145af94202ce9f429ece30462cfc9b6d10a1adcfb8741f0c50ae6d80d53_prof);

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
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
