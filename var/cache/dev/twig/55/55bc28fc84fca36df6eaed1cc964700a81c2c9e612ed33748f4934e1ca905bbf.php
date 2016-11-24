<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_6dd4892758785003806e291f0d1a08e72940ba7f46d6dd13cda83f2dbf8899c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c002ff3df9cac5f2cd1c1183e81f1a2afc2e9a98f29e123ba7b29edd78098748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c002ff3df9cac5f2cd1c1183e81f1a2afc2e9a98f29e123ba7b29edd78098748->enter($__internal_c002ff3df9cac5f2cd1c1183e81f1a2afc2e9a98f29e123ba7b29edd78098748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c002ff3df9cac5f2cd1c1183e81f1a2afc2e9a98f29e123ba7b29edd78098748->leave($__internal_c002ff3df9cac5f2cd1c1183e81f1a2afc2e9a98f29e123ba7b29edd78098748_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ee6ab28a90b34116ce9a3928147f5e1526fa4b80afc3b6ab6b3889579401fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee6ab28a90b34116ce9a3928147f5e1526fa4b80afc3b6ab6b3889579401fe3->enter($__internal_3ee6ab28a90b34116ce9a3928147f5e1526fa4b80afc3b6ab6b3889579401fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_3ee6ab28a90b34116ce9a3928147f5e1526fa4b80afc3b6ab6b3889579401fe3->leave($__internal_3ee6ab28a90b34116ce9a3928147f5e1526fa4b80afc3b6ab6b3889579401fe3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
