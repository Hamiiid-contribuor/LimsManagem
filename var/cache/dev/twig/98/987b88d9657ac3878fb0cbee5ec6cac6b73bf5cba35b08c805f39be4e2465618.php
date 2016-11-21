<?php

/* base.html.twig */
class __TwigTemplate_a61535d952e6f420bd0500ba095e8397a24e116f77670c2b161499e58f1d3874 extends Twig_Template
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
        $__internal_c6a21be92b7573306e06ec77d39f7042c5f09dfb9776e219679f685d168f6337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a21be92b7573306e06ec77d39f7042c5f09dfb9776e219679f685d168f6337->enter($__internal_c6a21be92b7573306e06ec77d39f7042c5f09dfb9776e219679f685d168f6337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c6a21be92b7573306e06ec77d39f7042c5f09dfb9776e219679f685d168f6337->leave($__internal_c6a21be92b7573306e06ec77d39f7042c5f09dfb9776e219679f685d168f6337_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecfd9d1ab03a596be9131abc2ff91d16ee29ce731eda586e9e4a15681da823c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfd9d1ab03a596be9131abc2ff91d16ee29ce731eda586e9e4a15681da823c8->enter($__internal_ecfd9d1ab03a596be9131abc2ff91d16ee29ce731eda586e9e4a15681da823c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_ecfd9d1ab03a596be9131abc2ff91d16ee29ce731eda586e9e4a15681da823c8->leave($__internal_ecfd9d1ab03a596be9131abc2ff91d16ee29ce731eda586e9e4a15681da823c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6669500a1ed0fa3d521a45ec095cd93568c84ae603d630ef7f13ad91a9078eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6669500a1ed0fa3d521a45ec095cd93568c84ae603d630ef7f13ad91a9078eb8->enter($__internal_6669500a1ed0fa3d521a45ec095cd93568c84ae603d630ef7f13ad91a9078eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_6669500a1ed0fa3d521a45ec095cd93568c84ae603d630ef7f13ad91a9078eb8->leave($__internal_6669500a1ed0fa3d521a45ec095cd93568c84ae603d630ef7f13ad91a9078eb8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b656c51dc5679d9376c7ff4ad7a01f6b56bd4680f462a87458510e1104f38eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b656c51dc5679d9376c7ff4ad7a01f6b56bd4680f462a87458510e1104f38eaa->enter($__internal_b656c51dc5679d9376c7ff4ad7a01f6b56bd4680f462a87458510e1104f38eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_b656c51dc5679d9376c7ff4ad7a01f6b56bd4680f462a87458510e1104f38eaa->leave($__internal_b656c51dc5679d9376c7ff4ad7a01f6b56bd4680f462a87458510e1104f38eaa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f37a63b71335adce6a8e3f84068a0fb97392a1fa2bb190d1dcc449f54ac76c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37a63b71335adce6a8e3f84068a0fb97392a1fa2bb190d1dcc449f54ac76c52->enter($__internal_f37a63b71335adce6a8e3f84068a0fb97392a1fa2bb190d1dcc449f54ac76c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f37a63b71335adce6a8e3f84068a0fb97392a1fa2bb190d1dcc449f54ac76c52->leave($__internal_f37a63b71335adce6a8e3f84068a0fb97392a1fa2bb190d1dcc449f54ac76c52_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\views\\base.html.twig");
    }
}
