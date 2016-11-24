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
        $__internal_779ae1c95cddb7f0d8a9fd2c38eed4bfbfaf638d128687f21060dec6323c8584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779ae1c95cddb7f0d8a9fd2c38eed4bfbfaf638d128687f21060dec6323c8584->enter($__internal_779ae1c95cddb7f0d8a9fd2c38eed4bfbfaf638d128687f21060dec6323c8584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateur/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_779ae1c95cddb7f0d8a9fd2c38eed4bfbfaf638d128687f21060dec6323c8584->leave($__internal_779ae1c95cddb7f0d8a9fd2c38eed4bfbfaf638d128687f21060dec6323c8584_prof);

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
