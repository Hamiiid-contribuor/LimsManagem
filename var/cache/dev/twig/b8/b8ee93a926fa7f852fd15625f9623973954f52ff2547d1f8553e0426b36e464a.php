<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_5f516bda1e6cf6d663cfe98c8ea2228411a6b3e18183ca7e2b406df43e6e4a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_15e5ff151e03f6d540e055e20531f67f1271034f4baf547b407e4cf1a27aa80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e5ff151e03f6d540e055e20531f67f1271034f4baf547b407e4cf1a27aa80f->enter($__internal_15e5ff151e03f6d540e055e20531f67f1271034f4baf547b407e4cf1a27aa80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e5ff151e03f6d540e055e20531f67f1271034f4baf547b407e4cf1a27aa80f->leave($__internal_15e5ff151e03f6d540e055e20531f67f1271034f4baf547b407e4cf1a27aa80f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4203ff6318804463463810dccdc5d30d7d6ef83b0e547050b1b6f2377cec88b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4203ff6318804463463810dccdc5d30d7d6ef83b0e547050b1b6f2377cec88b5->enter($__internal_4203ff6318804463463810dccdc5d30d7d6ef83b0e547050b1b6f2377cec88b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_4203ff6318804463463810dccdc5d30d7d6ef83b0e547050b1b6f2377cec88b5->leave($__internal_4203ff6318804463463810dccdc5d30d7d6ef83b0e547050b1b6f2377cec88b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
