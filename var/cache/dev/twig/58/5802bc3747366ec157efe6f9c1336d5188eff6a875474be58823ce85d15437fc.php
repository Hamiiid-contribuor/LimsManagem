<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6f1cacd3b7546700b2d184a10238235c116020471308d3caa942e0f41830d1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_62874cd35a22bf2c2a8b99ab5848994b560dd0652f817f98c661e52ac89b030f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62874cd35a22bf2c2a8b99ab5848994b560dd0652f817f98c661e52ac89b030f->enter($__internal_62874cd35a22bf2c2a8b99ab5848994b560dd0652f817f98c661e52ac89b030f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62874cd35a22bf2c2a8b99ab5848994b560dd0652f817f98c661e52ac89b030f->leave($__internal_62874cd35a22bf2c2a8b99ab5848994b560dd0652f817f98c661e52ac89b030f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7cfbea90655e1c852b9585a7a895effc54d84649035612c131c462b6f96f428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cfbea90655e1c852b9585a7a895effc54d84649035612c131c462b6f96f428->enter($__internal_b7cfbea90655e1c852b9585a7a895effc54d84649035612c131c462b6f96f428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_b7cfbea90655e1c852b9585a7a895effc54d84649035612c131c462b6f96f428->leave($__internal_b7cfbea90655e1c852b9585a7a895effc54d84649035612c131c462b6f96f428_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
