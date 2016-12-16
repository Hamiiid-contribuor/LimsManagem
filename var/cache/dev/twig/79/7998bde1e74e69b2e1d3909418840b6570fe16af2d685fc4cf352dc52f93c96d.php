<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_fdcf6f77ff4b1cf7d1223f5eec67878f3fa2251c5ac9b39e4a051c189cf2e6f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_fd65befdc18ea4f93b0bd04cd923d84edcea3862bc3377e58d1dcf4f8031ed84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd65befdc18ea4f93b0bd04cd923d84edcea3862bc3377e58d1dcf4f8031ed84->enter($__internal_fd65befdc18ea4f93b0bd04cd923d84edcea3862bc3377e58d1dcf4f8031ed84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd65befdc18ea4f93b0bd04cd923d84edcea3862bc3377e58d1dcf4f8031ed84->leave($__internal_fd65befdc18ea4f93b0bd04cd923d84edcea3862bc3377e58d1dcf4f8031ed84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f08918c52a35d394e1803e4cb42b4e1e29868160346d2f83efaadcd4cbf94b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08918c52a35d394e1803e4cb42b4e1e29868160346d2f83efaadcd4cbf94b06->enter($__internal_f08918c52a35d394e1803e4cb42b4e1e29868160346d2f83efaadcd4cbf94b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_f08918c52a35d394e1803e4cb42b4e1e29868160346d2f83efaadcd4cbf94b06->leave($__internal_f08918c52a35d394e1803e4cb42b4e1e29868160346d2f83efaadcd4cbf94b06_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
