<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_578369666a3e3963e486d51207bbd9a207619f29e8960e6ab17ca05b4fcdf695 extends Twig_Template
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
        $__internal_6b60288040c3c77d2412a46eec94eaa4ba054dc7757d561e3b3cafaf72817f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b60288040c3c77d2412a46eec94eaa4ba054dc7757d561e3b3cafaf72817f4e->enter($__internal_6b60288040c3c77d2412a46eec94eaa4ba054dc7757d561e3b3cafaf72817f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b60288040c3c77d2412a46eec94eaa4ba054dc7757d561e3b3cafaf72817f4e->leave($__internal_6b60288040c3c77d2412a46eec94eaa4ba054dc7757d561e3b3cafaf72817f4e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c5fc1320e64313f3beb9d91ab96889b83152f4d104826c70f948db99f793dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5fc1320e64313f3beb9d91ab96889b83152f4d104826c70f948db99f793dc4->enter($__internal_3c5fc1320e64313f3beb9d91ab96889b83152f4d104826c70f948db99f793dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3c5fc1320e64313f3beb9d91ab96889b83152f4d104826c70f948db99f793dc4->leave($__internal_3c5fc1320e64313f3beb9d91ab96889b83152f4d104826c70f948db99f793dc4_prof);

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
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
