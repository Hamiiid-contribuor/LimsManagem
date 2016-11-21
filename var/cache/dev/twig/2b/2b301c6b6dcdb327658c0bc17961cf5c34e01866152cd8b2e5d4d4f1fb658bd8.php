<?php

/* ::base.html.twig */
class __TwigTemplate_7c825b1e1f18c6f02f53402b4bf4a5bd0a80d18f753bf0224fdf38832d6fd72c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_038a60bdd374f2fb4beaf1f856e032083a2b3d38966a30a52166d438fc6e474b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038a60bdd374f2fb4beaf1f856e032083a2b3d38966a30a52166d438fc6e474b->enter($__internal_038a60bdd374f2fb4beaf1f856e032083a2b3d38966a30a52166d438fc6e474b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_038a60bdd374f2fb4beaf1f856e032083a2b3d38966a30a52166d438fc6e474b->leave($__internal_038a60bdd374f2fb4beaf1f856e032083a2b3d38966a30a52166d438fc6e474b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86f0cee07ee6c33bc14066d75c6a3434da3fc362b5129480da32b2978f387c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f0cee07ee6c33bc14066d75c6a3434da3fc362b5129480da32b2978f387c59->enter($__internal_86f0cee07ee6c33bc14066d75c6a3434da3fc362b5129480da32b2978f387c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_86f0cee07ee6c33bc14066d75c6a3434da3fc362b5129480da32b2978f387c59->leave($__internal_86f0cee07ee6c33bc14066d75c6a3434da3fc362b5129480da32b2978f387c59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eeb73ec3ab6ac8c66d16b00fe00cb2397fadbfecf865e9df58325a1e795c1b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb73ec3ab6ac8c66d16b00fe00cb2397fadbfecf865e9df58325a1e795c1b60->enter($__internal_eeb73ec3ab6ac8c66d16b00fe00cb2397fadbfecf865e9df58325a1e795c1b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_eeb73ec3ab6ac8c66d16b00fe00cb2397fadbfecf865e9df58325a1e795c1b60->leave($__internal_eeb73ec3ab6ac8c66d16b00fe00cb2397fadbfecf865e9df58325a1e795c1b60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f17d88d7d7e62080a575aff1e1b88fc1053f8aa1ce232b439a1db03a013620f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f17d88d7d7e62080a575aff1e1b88fc1053f8aa1ce232b439a1db03a013620f->enter($__internal_0f17d88d7d7e62080a575aff1e1b88fc1053f8aa1ce232b439a1db03a013620f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_0f17d88d7d7e62080a575aff1e1b88fc1053f8aa1ce232b439a1db03a013620f->leave($__internal_0f17d88d7d7e62080a575aff1e1b88fc1053f8aa1ce232b439a1db03a013620f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d79dd6e1f88e3c4b570607b620d9d72d659668a5059560d4f01d71af92b9bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d79dd6e1f88e3c4b570607b620d9d72d659668a5059560d4f01d71af92b9bc0->enter($__internal_0d79dd6e1f88e3c4b570607b620d9d72d659668a5059560d4f01d71af92b9bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_0d79dd6e1f88e3c4b570607b620d9d72d659668a5059560d4f01d71af92b9bc0->leave($__internal_0d79dd6e1f88e3c4b570607b620d9d72d659668a5059560d4f01d71af92b9bc0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources\\views/base.html.twig");
    }
}
