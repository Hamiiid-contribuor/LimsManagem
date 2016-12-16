<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_eee3b53854e0b7bfd65e8f6247fab8b073791c51c3bf943f82ffc0586be69208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_6c1bd8303cbbfebf4976477506695a1d55e9ebf7298c9dfd08be96a669523084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1bd8303cbbfebf4976477506695a1d55e9ebf7298c9dfd08be96a669523084->enter($__internal_6c1bd8303cbbfebf4976477506695a1d55e9ebf7298c9dfd08be96a669523084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c1bd8303cbbfebf4976477506695a1d55e9ebf7298c9dfd08be96a669523084->leave($__internal_6c1bd8303cbbfebf4976477506695a1d55e9ebf7298c9dfd08be96a669523084_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ad8703fe6c08fa0e2667659f05571037e38ab6aae389ddfc2c77e7c06f0cc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad8703fe6c08fa0e2667659f05571037e38ab6aae389ddfc2c77e7c06f0cc57->enter($__internal_4ad8703fe6c08fa0e2667659f05571037e38ab6aae389ddfc2c77e7c06f0cc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_4ad8703fe6c08fa0e2667659f05571037e38ab6aae389ddfc2c77e7c06f0cc57->leave($__internal_4ad8703fe6c08fa0e2667659f05571037e38ab6aae389ddfc2c77e7c06f0cc57_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
