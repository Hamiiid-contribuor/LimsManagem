<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_136f8c4eff999f4feeb5ad3bdab5ae3b618eca0c45755ba410505ec794d0e3ee extends Twig_Template
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
        $__internal_5d700ebe8720c2f7259d65930f9fb9f443bbab528dffc74bb8dec1e94cb83ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d700ebe8720c2f7259d65930f9fb9f443bbab528dffc74bb8dec1e94cb83ab7->enter($__internal_5d700ebe8720c2f7259d65930f9fb9f443bbab528dffc74bb8dec1e94cb83ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d700ebe8720c2f7259d65930f9fb9f443bbab528dffc74bb8dec1e94cb83ab7->leave($__internal_5d700ebe8720c2f7259d65930f9fb9f443bbab528dffc74bb8dec1e94cb83ab7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58eb375a8ce5fdcc7c9036a627357c36b468c8b11a5d7cce0a6f869113af430a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58eb375a8ce5fdcc7c9036a627357c36b468c8b11a5d7cce0a6f869113af430a->enter($__internal_58eb375a8ce5fdcc7c9036a627357c36b468c8b11a5d7cce0a6f869113af430a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_58eb375a8ce5fdcc7c9036a627357c36b468c8b11a5d7cce0a6f869113af430a->leave($__internal_58eb375a8ce5fdcc7c9036a627357c36b468c8b11a5d7cce0a6f869113af430a_prof);

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
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
