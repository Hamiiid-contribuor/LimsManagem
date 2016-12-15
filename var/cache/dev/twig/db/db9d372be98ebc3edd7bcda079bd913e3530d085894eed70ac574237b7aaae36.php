<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b6e472a0a465b1eafd747e6911749f4597cb377f3ac296d43a70ee350f6f6bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_9d36edaf5a3b2798fb5098d886034f1f58b59e1de8d6f21c35cecb41fe2ac984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d36edaf5a3b2798fb5098d886034f1f58b59e1de8d6f21c35cecb41fe2ac984->enter($__internal_9d36edaf5a3b2798fb5098d886034f1f58b59e1de8d6f21c35cecb41fe2ac984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d36edaf5a3b2798fb5098d886034f1f58b59e1de8d6f21c35cecb41fe2ac984->leave($__internal_9d36edaf5a3b2798fb5098d886034f1f58b59e1de8d6f21c35cecb41fe2ac984_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16189f7f159781d7e5b9f8ac182e47e1f6b87b54458e7405fa328dfc8bf66e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16189f7f159781d7e5b9f8ac182e47e1f6b87b54458e7405fa328dfc8bf66e37->enter($__internal_16189f7f159781d7e5b9f8ac182e47e1f6b87b54458e7405fa328dfc8bf66e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_16189f7f159781d7e5b9f8ac182e47e1f6b87b54458e7405fa328dfc8bf66e37->leave($__internal_16189f7f159781d7e5b9f8ac182e47e1f6b87b54458e7405fa328dfc8bf66e37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
