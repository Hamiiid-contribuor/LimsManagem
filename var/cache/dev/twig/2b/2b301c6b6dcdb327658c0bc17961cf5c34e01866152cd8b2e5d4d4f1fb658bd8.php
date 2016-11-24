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
        $__internal_ebf3022e1a0939fc1b5fd5a1d5a48c2ad0470915d4c6fbfd0bb1d044fd8f7595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf3022e1a0939fc1b5fd5a1d5a48c2ad0470915d4c6fbfd0bb1d044fd8f7595->enter($__internal_ebf3022e1a0939fc1b5fd5a1d5a48c2ad0470915d4c6fbfd0bb1d044fd8f7595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ebf3022e1a0939fc1b5fd5a1d5a48c2ad0470915d4c6fbfd0bb1d044fd8f7595->leave($__internal_ebf3022e1a0939fc1b5fd5a1d5a48c2ad0470915d4c6fbfd0bb1d044fd8f7595_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28efaf27a913ab7a22a89fdf5a97a8dc9e0a23ce6105185c3a3c45b139a496e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28efaf27a913ab7a22a89fdf5a97a8dc9e0a23ce6105185c3a3c45b139a496e6->enter($__internal_28efaf27a913ab7a22a89fdf5a97a8dc9e0a23ce6105185c3a3c45b139a496e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_28efaf27a913ab7a22a89fdf5a97a8dc9e0a23ce6105185c3a3c45b139a496e6->leave($__internal_28efaf27a913ab7a22a89fdf5a97a8dc9e0a23ce6105185c3a3c45b139a496e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebe4474255ad239a8a9139b5e454b2eb38942c531edc1ad16255bf7c4ce6fa8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe4474255ad239a8a9139b5e454b2eb38942c531edc1ad16255bf7c4ce6fa8f->enter($__internal_ebe4474255ad239a8a9139b5e454b2eb38942c531edc1ad16255bf7c4ce6fa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_ebe4474255ad239a8a9139b5e454b2eb38942c531edc1ad16255bf7c4ce6fa8f->leave($__internal_ebe4474255ad239a8a9139b5e454b2eb38942c531edc1ad16255bf7c4ce6fa8f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4618988550975c40961b5923094af42f8cc6205d7f5ff06c80f810bd2714862c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4618988550975c40961b5923094af42f8cc6205d7f5ff06c80f810bd2714862c->enter($__internal_4618988550975c40961b5923094af42f8cc6205d7f5ff06c80f810bd2714862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_4618988550975c40961b5923094af42f8cc6205d7f5ff06c80f810bd2714862c->leave($__internal_4618988550975c40961b5923094af42f8cc6205d7f5ff06c80f810bd2714862c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d5e83a816de060fe9398d5ef13305e4f465452cdf4eb3078945ac341b878aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5e83a816de060fe9398d5ef13305e4f465452cdf4eb3078945ac341b878aff->enter($__internal_8d5e83a816de060fe9398d5ef13305e4f465452cdf4eb3078945ac341b878aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_8d5e83a816de060fe9398d5ef13305e4f465452cdf4eb3078945ac341b878aff->leave($__internal_8d5e83a816de060fe9398d5ef13305e4f465452cdf4eb3078945ac341b878aff_prof);

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
