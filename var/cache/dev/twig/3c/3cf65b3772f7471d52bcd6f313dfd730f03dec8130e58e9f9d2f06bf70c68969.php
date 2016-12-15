<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_46c67fb51fc9a286c4ccef2f497a59209fb81c9bfcb439e26a13f74c2226f726 extends Twig_Template
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
        $__internal_45b9995491430ad21bc597ebbe91697d4ae78ab4b79d742b44d94b87b7edc62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b9995491430ad21bc597ebbe91697d4ae78ab4b79d742b44d94b87b7edc62e->enter($__internal_45b9995491430ad21bc597ebbe91697d4ae78ab4b79d742b44d94b87b7edc62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45b9995491430ad21bc597ebbe91697d4ae78ab4b79d742b44d94b87b7edc62e->leave($__internal_45b9995491430ad21bc597ebbe91697d4ae78ab4b79d742b44d94b87b7edc62e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99fd64696f31fc6740e82427f35ccc3cc217f1ce79b67c88f66b6ca500f3be9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fd64696f31fc6740e82427f35ccc3cc217f1ce79b67c88f66b6ca500f3be9f->enter($__internal_99fd64696f31fc6740e82427f35ccc3cc217f1ce79b67c88f66b6ca500f3be9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_99fd64696f31fc6740e82427f35ccc3cc217f1ce79b67c88f66b6ca500f3be9f->leave($__internal_99fd64696f31fc6740e82427f35ccc3cc217f1ce79b67c88f66b6ca500f3be9f_prof);

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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
