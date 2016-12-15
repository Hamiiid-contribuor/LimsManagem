<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_aed60c3d7fca90f489c2a3edc17a73075e05327a5edbdd20af23ec8e1178b9e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_4697946fd410b78bc17286e823bf635fc5dd07f30527a9aaae0f21e8b50cb34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4697946fd410b78bc17286e823bf635fc5dd07f30527a9aaae0f21e8b50cb34c->enter($__internal_4697946fd410b78bc17286e823bf635fc5dd07f30527a9aaae0f21e8b50cb34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4697946fd410b78bc17286e823bf635fc5dd07f30527a9aaae0f21e8b50cb34c->leave($__internal_4697946fd410b78bc17286e823bf635fc5dd07f30527a9aaae0f21e8b50cb34c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d81768f4726a265d0f3a8ea7e92cc6b903d61780f7a829d4930a45e58d0dbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d81768f4726a265d0f3a8ea7e92cc6b903d61780f7a829d4930a45e58d0dbeb->enter($__internal_5d81768f4726a265d0f3a8ea7e92cc6b903d61780f7a829d4930a45e58d0dbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_5d81768f4726a265d0f3a8ea7e92cc6b903d61780f7a829d4930a45e58d0dbeb->leave($__internal_5d81768f4726a265d0f3a8ea7e92cc6b903d61780f7a829d4930a45e58d0dbeb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
