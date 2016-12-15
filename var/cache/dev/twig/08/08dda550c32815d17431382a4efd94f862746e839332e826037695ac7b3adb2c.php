<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_08bdbe034fb2e770275f225dc529449bc3194b4a8d0de985b84ec2bf6db3f994 extends Twig_Template
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
        $__internal_79f4aaa1e52b79825d4a936223f158c5ba020df8e164e80eb5e82303ca1d0202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f4aaa1e52b79825d4a936223f158c5ba020df8e164e80eb5e82303ca1d0202->enter($__internal_79f4aaa1e52b79825d4a936223f158c5ba020df8e164e80eb5e82303ca1d0202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f4aaa1e52b79825d4a936223f158c5ba020df8e164e80eb5e82303ca1d0202->leave($__internal_79f4aaa1e52b79825d4a936223f158c5ba020df8e164e80eb5e82303ca1d0202_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b741699bc1885b5a1dd1beaea22deb79542925d1dcfff19415213ea1f8a358a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b741699bc1885b5a1dd1beaea22deb79542925d1dcfff19415213ea1f8a358a6->enter($__internal_b741699bc1885b5a1dd1beaea22deb79542925d1dcfff19415213ea1f8a358a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b741699bc1885b5a1dd1beaea22deb79542925d1dcfff19415213ea1f8a358a6->leave($__internal_b741699bc1885b5a1dd1beaea22deb79542925d1dcfff19415213ea1f8a358a6_prof);

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
