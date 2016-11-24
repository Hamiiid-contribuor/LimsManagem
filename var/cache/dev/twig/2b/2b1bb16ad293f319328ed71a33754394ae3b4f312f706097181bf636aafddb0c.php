<?php

/* UtilisateurBundle:Default:index.html.twig */
class __TwigTemplate_f308c01d6af927de012df53a4c36c8ea627ab595d4e0c6a9e1b473e304f27616 extends Twig_Template
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
        $__internal_3a978d99d14055bb0c8b9d9df8c1f2ad75cc98c2c975886aa205ab45bb696711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a978d99d14055bb0c8b9d9df8c1f2ad75cc98c2c975886aa205ab45bb696711->enter($__internal_3a978d99d14055bb0c8b9d9df8c1f2ad75cc98c2c975886aa205ab45bb696711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateurBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3a978d99d14055bb0c8b9d9df8c1f2ad75cc98c2c975886aa205ab45bb696711->leave($__internal_3a978d99d14055bb0c8b9d9df8c1f2ad75cc98c2c975886aa205ab45bb696711_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateurBundle:Default:index.html.twig";
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
", "UtilisateurBundle:Default:index.html.twig", "C:\\wamp\\www\\LIMS\\src\\Utilisateur\\UtilisateurBundle/Resources/views/Default/index.html.twig");
    }
}
