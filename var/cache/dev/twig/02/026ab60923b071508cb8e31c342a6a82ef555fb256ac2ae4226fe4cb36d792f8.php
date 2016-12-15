<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_49bf76f375897e97da1586e1c1e4adcf18ffa74dd24f187ef8be2ec056f9dac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout1.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df35d99cfa198ac2958678db5a2f6086c11216402fa0a1648a753daf1353affe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df35d99cfa198ac2958678db5a2f6086c11216402fa0a1648a753daf1353affe->enter($__internal_df35d99cfa198ac2958678db5a2f6086c11216402fa0a1648a753daf1353affe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df35d99cfa198ac2958678db5a2f6086c11216402fa0a1648a753daf1353affe->leave($__internal_df35d99cfa198ac2958678db5a2f6086c11216402fa0a1648a753daf1353affe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee1f1218c5fb9036bba739d761e597430475e1c7a431b1484040ebc784cbe710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1f1218c5fb9036bba739d761e597430475e1c7a431b1484040ebc784cbe710->enter($__internal_ee1f1218c5fb9036bba739d761e597430475e1c7a431b1484040ebc784cbe710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        echo "    
    
";
        // line 6
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 6)->display($context);
        
        $__internal_ee1f1218c5fb9036bba739d761e597430475e1c7a431b1484040ebc784cbe710->leave($__internal_ee1f1218c5fb9036bba739d761e597430475e1c7a431b1484040ebc784cbe710_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout1.html.twig\" %}

{% block fos_user_content %}
    
    
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
