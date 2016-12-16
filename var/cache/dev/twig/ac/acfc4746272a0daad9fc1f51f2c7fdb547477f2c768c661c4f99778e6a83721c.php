<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_3ef1b6092b74ce4568114916c6c951b38bffd14260eb8e970ed40606998fc504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c73c25ca911ccd6f2c7ab7f495191b39d8f84d16e0936162a4bab41f83eae5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73c25ca911ccd6f2c7ab7f495191b39d8f84d16e0936162a4bab41f83eae5a5->enter($__internal_c73c25ca911ccd6f2c7ab7f495191b39d8f84d16e0936162a4bab41f83eae5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c73c25ca911ccd6f2c7ab7f495191b39d8f84d16e0936162a4bab41f83eae5a5->leave($__internal_c73c25ca911ccd6f2c7ab7f495191b39d8f84d16e0936162a4bab41f83eae5a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9ac4d8c3506f99163777650c20d1bc977cef17d7107d6b6c5834f0c130b3b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ac4d8c3506f99163777650c20d1bc977cef17d7107d6b6c5834f0c130b3b0f->enter($__internal_d9ac4d8c3506f99163777650c20d1bc977cef17d7107d6b6c5834f0c130b3b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d9ac4d8c3506f99163777650c20d1bc977cef17d7107d6b6c5834f0c130b3b0f->leave($__internal_d9ac4d8c3506f99163777650c20d1bc977cef17d7107d6b6c5834f0c130b3b0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
