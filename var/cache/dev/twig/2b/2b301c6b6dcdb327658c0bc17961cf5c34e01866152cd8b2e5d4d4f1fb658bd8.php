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
        $__internal_c250c97e0d402015186458ee45d2a918a05f010fbf171e46c269724563c6676a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c250c97e0d402015186458ee45d2a918a05f010fbf171e46c269724563c6676a->enter($__internal_c250c97e0d402015186458ee45d2a918a05f010fbf171e46c269724563c6676a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c250c97e0d402015186458ee45d2a918a05f010fbf171e46c269724563c6676a->leave($__internal_c250c97e0d402015186458ee45d2a918a05f010fbf171e46c269724563c6676a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d10fccff98c07b4c3b4f7c7d9c69db90fbfefaf6ab526b746d96521ca499da8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10fccff98c07b4c3b4f7c7d9c69db90fbfefaf6ab526b746d96521ca499da8d->enter($__internal_d10fccff98c07b4c3b4f7c7d9c69db90fbfefaf6ab526b746d96521ca499da8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_d10fccff98c07b4c3b4f7c7d9c69db90fbfefaf6ab526b746d96521ca499da8d->leave($__internal_d10fccff98c07b4c3b4f7c7d9c69db90fbfefaf6ab526b746d96521ca499da8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c8702387eb959abee2f1b4a480e25fd02ed245359f372e00350674748cb8ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8702387eb959abee2f1b4a480e25fd02ed245359f372e00350674748cb8ffd->enter($__internal_2c8702387eb959abee2f1b4a480e25fd02ed245359f372e00350674748cb8ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_2c8702387eb959abee2f1b4a480e25fd02ed245359f372e00350674748cb8ffd->leave($__internal_2c8702387eb959abee2f1b4a480e25fd02ed245359f372e00350674748cb8ffd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_41bb550a15fb9e321a2579fe2f17bf07c8b41f401ea06d833b01b5877233f32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bb550a15fb9e321a2579fe2f17bf07c8b41f401ea06d833b01b5877233f32a->enter($__internal_41bb550a15fb9e321a2579fe2f17bf07c8b41f401ea06d833b01b5877233f32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_41bb550a15fb9e321a2579fe2f17bf07c8b41f401ea06d833b01b5877233f32a->leave($__internal_41bb550a15fb9e321a2579fe2f17bf07c8b41f401ea06d833b01b5877233f32a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70b8a745960d4f3604645daad3006c68ac12df5012d60e83ffce8cae038c72ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b8a745960d4f3604645daad3006c68ac12df5012d60e83ffce8cae038c72ac->enter($__internal_70b8a745960d4f3604645daad3006c68ac12df5012d60e83ffce8cae038c72ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_70b8a745960d4f3604645daad3006c68ac12df5012d60e83ffce8cae038c72ac->leave($__internal_70b8a745960d4f3604645daad3006c68ac12df5012d60e83ffce8cae038c72ac_prof);

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
