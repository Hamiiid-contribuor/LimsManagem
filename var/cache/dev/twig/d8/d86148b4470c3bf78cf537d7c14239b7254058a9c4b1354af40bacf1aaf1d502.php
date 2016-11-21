<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_092ecfbfaeafa1fe18a4a5fecd7b067705e833c1f4aa4302849909a96fd5ed97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_125760bfcac4e19c6725ee4ccc5b4908e082d2e47511092eac210bb4a0650a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125760bfcac4e19c6725ee4ccc5b4908e082d2e47511092eac210bb4a0650a00->enter($__internal_125760bfcac4e19c6725ee4ccc5b4908e082d2e47511092eac210bb4a0650a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_125760bfcac4e19c6725ee4ccc5b4908e082d2e47511092eac210bb4a0650a00->leave($__internal_125760bfcac4e19c6725ee4ccc5b4908e082d2e47511092eac210bb4a0650a00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4aa64b649987618afd7a10b7e0e082d23ef2a38d9bf0d99ce4b1025159fd559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4aa64b649987618afd7a10b7e0e082d23ef2a38d9bf0d99ce4b1025159fd559->enter($__internal_c4aa64b649987618afd7a10b7e0e082d23ef2a38d9bf0d99ce4b1025159fd559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c4aa64b649987618afd7a10b7e0e082d23ef2a38d9bf0d99ce4b1025159fd559->leave($__internal_c4aa64b649987618afd7a10b7e0e082d23ef2a38d9bf0d99ce4b1025159fd559_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
