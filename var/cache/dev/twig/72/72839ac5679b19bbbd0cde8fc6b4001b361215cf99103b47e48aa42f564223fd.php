<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_f2eed99197ad37b4ed4730748676d149cc8b8b2db2dbfb18def56306c7401af6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_aa2b50a189fe7be22bcc9820df723d12538027abb70dc526fbc402544a842223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2b50a189fe7be22bcc9820df723d12538027abb70dc526fbc402544a842223->enter($__internal_aa2b50a189fe7be22bcc9820df723d12538027abb70dc526fbc402544a842223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa2b50a189fe7be22bcc9820df723d12538027abb70dc526fbc402544a842223->leave($__internal_aa2b50a189fe7be22bcc9820df723d12538027abb70dc526fbc402544a842223_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76844d7e1bc4d3d18b35174ee14b9263ee4d90412e6f5cb2267687483f047648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76844d7e1bc4d3d18b35174ee14b9263ee4d90412e6f5cb2267687483f047648->enter($__internal_76844d7e1bc4d3d18b35174ee14b9263ee4d90412e6f5cb2267687483f047648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_76844d7e1bc4d3d18b35174ee14b9263ee4d90412e6f5cb2267687483f047648->leave($__internal_76844d7e1bc4d3d18b35174ee14b9263ee4d90412e6f5cb2267687483f047648_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
