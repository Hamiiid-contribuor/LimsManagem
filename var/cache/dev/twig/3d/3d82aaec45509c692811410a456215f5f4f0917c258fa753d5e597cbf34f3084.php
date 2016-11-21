<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e34cfa3c1d0c3f28234cc7edf9f9151323c9973d0cab85f144c228ec70f3e355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_4efe2b16733719d1a5118cedca0b838f8838ef4919589957fbfa34eb03198442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efe2b16733719d1a5118cedca0b838f8838ef4919589957fbfa34eb03198442->enter($__internal_4efe2b16733719d1a5118cedca0b838f8838ef4919589957fbfa34eb03198442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4efe2b16733719d1a5118cedca0b838f8838ef4919589957fbfa34eb03198442->leave($__internal_4efe2b16733719d1a5118cedca0b838f8838ef4919589957fbfa34eb03198442_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9cd32ff3b6dc64e863edaf914e10de88349c19b17d202aa6b8575baf0e97680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cd32ff3b6dc64e863edaf914e10de88349c19b17d202aa6b8575baf0e97680->enter($__internal_d9cd32ff3b6dc64e863edaf914e10de88349c19b17d202aa6b8575baf0e97680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d9cd32ff3b6dc64e863edaf914e10de88349c19b17d202aa6b8575baf0e97680->leave($__internal_d9cd32ff3b6dc64e863edaf914e10de88349c19b17d202aa6b8575baf0e97680_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
