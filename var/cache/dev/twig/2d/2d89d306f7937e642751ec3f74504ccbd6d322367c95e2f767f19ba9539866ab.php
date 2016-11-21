<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3f56dc5c82568877b277775761c55f28679a2931748d13002de259cd03f08954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_d6ef6747f1ad23bf7aaa3e92e421f9ec94fe8d6dabde4e55279f3377e43d5aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ef6747f1ad23bf7aaa3e92e421f9ec94fe8d6dabde4e55279f3377e43d5aa6->enter($__internal_d6ef6747f1ad23bf7aaa3e92e421f9ec94fe8d6dabde4e55279f3377e43d5aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ef6747f1ad23bf7aaa3e92e421f9ec94fe8d6dabde4e55279f3377e43d5aa6->leave($__internal_d6ef6747f1ad23bf7aaa3e92e421f9ec94fe8d6dabde4e55279f3377e43d5aa6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81a49963235ae764762ebbddd9027c9392c5b1ba811935af279d357047ae6665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a49963235ae764762ebbddd9027c9392c5b1ba811935af279d357047ae6665->enter($__internal_81a49963235ae764762ebbddd9027c9392c5b1ba811935af279d357047ae6665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_81a49963235ae764762ebbddd9027c9392c5b1ba811935af279d357047ae6665->leave($__internal_81a49963235ae764762ebbddd9027c9392c5b1ba811935af279d357047ae6665_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
