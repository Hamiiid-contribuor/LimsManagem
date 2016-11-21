<?php

/* @Analyses/Default/index.html.twig */
class __TwigTemplate_94b0499460615918810b6b11e0f4d3dabde0bcad810e80d7b29ac3b8dee916c9 extends Twig_Template
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
        $__internal_cf0c90e4061c0f0a16f20112694eca92b7ef9e14565467261ff5ced59450a0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0c90e4061c0f0a16f20112694eca92b7ef9e14565467261ff5ced59450a0d0->enter($__internal_cf0c90e4061c0f0a16f20112694eca92b7ef9e14565467261ff5ced59450a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Analyses/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_cf0c90e4061c0f0a16f20112694eca92b7ef9e14565467261ff5ced59450a0d0->leave($__internal_cf0c90e4061c0f0a16f20112694eca92b7ef9e14565467261ff5ced59450a0d0_prof);

    }

    public function getTemplateName()
    {
        return "@Analyses/Default/index.html.twig";
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
", "@Analyses/Default/index.html.twig", "C:\\wamp\\www\\LIMS\\src\\Analyses\\AnalysesBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
