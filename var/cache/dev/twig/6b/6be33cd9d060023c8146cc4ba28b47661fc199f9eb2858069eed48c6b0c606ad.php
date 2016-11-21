<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cb1a3013d54fedfeac53ab301d313ea75b7b76fe7108552139cc75263f70ebf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0b082e6ffaef6b9dd6be28c197bbab8cdcd5724202ac99379ee71b46b92307d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b082e6ffaef6b9dd6be28c197bbab8cdcd5724202ac99379ee71b46b92307d->enter($__internal_d0b082e6ffaef6b9dd6be28c197bbab8cdcd5724202ac99379ee71b46b92307d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d0b082e6ffaef6b9dd6be28c197bbab8cdcd5724202ac99379ee71b46b92307d->leave($__internal_d0b082e6ffaef6b9dd6be28c197bbab8cdcd5724202ac99379ee71b46b92307d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
