<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_3156987d774cabd024dd007d06f2986d48a1b5c5edba502c361528bbd7a4782f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_343d924445c7f7315f4c8d0b9b3143e0c53210a93f6ceb2b0e59ae7fcdefd870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343d924445c7f7315f4c8d0b9b3143e0c53210a93f6ceb2b0e59ae7fcdefd870->enter($__internal_343d924445c7f7315f4c8d0b9b3143e0c53210a93f6ceb2b0e59ae7fcdefd870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343d924445c7f7315f4c8d0b9b3143e0c53210a93f6ceb2b0e59ae7fcdefd870->leave($__internal_343d924445c7f7315f4c8d0b9b3143e0c53210a93f6ceb2b0e59ae7fcdefd870_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1f0d074693f76c6a51987ade48324ea91590c4dfc5b53875be7c0bdc9678140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f0d074693f76c6a51987ade48324ea91590c4dfc5b53875be7c0bdc9678140->enter($__internal_e1f0d074693f76c6a51987ade48324ea91590c4dfc5b53875be7c0bdc9678140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e1f0d074693f76c6a51987ade48324ea91590c4dfc5b53875be7c0bdc9678140->leave($__internal_e1f0d074693f76c6a51987ade48324ea91590c4dfc5b53875be7c0bdc9678140_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
