<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_0dd2e6e84a40e1377ecb63ad6cfc827634fe064edb4672d46c5bfa77537f3acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_e41f5b802bce27a0e7e270d80a14e0f2054f899aada4e93a7174e901fae8b596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41f5b802bce27a0e7e270d80a14e0f2054f899aada4e93a7174e901fae8b596->enter($__internal_e41f5b802bce27a0e7e270d80a14e0f2054f899aada4e93a7174e901fae8b596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41f5b802bce27a0e7e270d80a14e0f2054f899aada4e93a7174e901fae8b596->leave($__internal_e41f5b802bce27a0e7e270d80a14e0f2054f899aada4e93a7174e901fae8b596_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74bd3abd9d6a11d2aab2c4c881ced0abbbb9e65bfbbe50731525ab6932cf459e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bd3abd9d6a11d2aab2c4c881ced0abbbb9e65bfbbe50731525ab6932cf459e->enter($__internal_74bd3abd9d6a11d2aab2c4c881ced0abbbb9e65bfbbe50731525ab6932cf459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_74bd3abd9d6a11d2aab2c4c881ced0abbbb9e65bfbbe50731525ab6932cf459e->leave($__internal_74bd3abd9d6a11d2aab2c4c881ced0abbbb9e65bfbbe50731525ab6932cf459e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
