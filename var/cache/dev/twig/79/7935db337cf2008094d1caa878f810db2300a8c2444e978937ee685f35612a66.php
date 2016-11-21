<?php

/* AnalysesBundle:Default:index.html.twig */
class __TwigTemplate_c56af1a51f05bb3c0a0b1586d49d37812237f444a461314c97d23f183387159e extends Twig_Template
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
        $__internal_c896f1e1086c2c7c44d6b613b8e6e319a0f7894f9d9677157268cc3ba0c9cb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c896f1e1086c2c7c44d6b613b8e6e319a0f7894f9d9677157268cc3ba0c9cb3c->enter($__internal_c896f1e1086c2c7c44d6b613b8e6e319a0f7894f9d9677157268cc3ba0c9cb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnalysesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_c896f1e1086c2c7c44d6b613b8e6e319a0f7894f9d9677157268cc3ba0c9cb3c->leave($__internal_c896f1e1086c2c7c44d6b613b8e6e319a0f7894f9d9677157268cc3ba0c9cb3c_prof);

    }

    public function getTemplateName()
    {
        return "AnalysesBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AnalysesBundle:Default:index.html.twig", "C:\\wamp\\www\\LIMS\\src\\Analyses\\AnalysesBundle/Resources/views/Default/index.html.twig");
    }
}
