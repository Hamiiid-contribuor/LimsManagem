<?php

/* @Utilisateur/Default/index.html.twig */
class __TwigTemplate_acf3cc2ec747c0a6237050bd337db1cbb702985cbf6812757b2bbb7d41e30bed extends Twig_Template
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
        $__internal_52615cc351b0e597bdf1d7e1dcb42a00c559983e8e5cb1120a7d4893468f33bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52615cc351b0e597bdf1d7e1dcb42a00c559983e8e5cb1120a7d4893468f33bf->enter($__internal_52615cc351b0e597bdf1d7e1dcb42a00c559983e8e5cb1120a7d4893468f33bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateur/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_52615cc351b0e597bdf1d7e1dcb42a00c559983e8e5cb1120a7d4893468f33bf->leave($__internal_52615cc351b0e597bdf1d7e1dcb42a00c559983e8e5cb1120a7d4893468f33bf_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateur/Default/index.html.twig";
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
", "@Utilisateur/Default/index.html.twig", "C:\\wamp\\www\\LIMS\\src\\Utilisateur\\UtilisateurBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
