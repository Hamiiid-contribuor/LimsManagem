<?php

/* AnalysesBundle:Default:index.html.twig */
class __TwigTemplate_4fa31bc2b9e28180ebad679290a0a7ff020e6fd09048343f2603a002569d2368 extends Twig_Template
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
        $__internal_c7c3bbb7700af2909843af2eeeff2b70724af5c1489a1bcda00d423e21bdc271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c3bbb7700af2909843af2eeeff2b70724af5c1489a1bcda00d423e21bdc271->enter($__internal_c7c3bbb7700af2909843af2eeeff2b70724af5c1489a1bcda00d423e21bdc271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnalysesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_c7c3bbb7700af2909843af2eeeff2b70724af5c1489a1bcda00d423e21bdc271->leave($__internal_c7c3bbb7700af2909843af2eeeff2b70724af5c1489a1bcda00d423e21bdc271_prof);

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
