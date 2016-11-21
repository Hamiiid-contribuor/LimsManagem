<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_2605ef5cea3da619b63426d8b8ac796b410c8a78d160abae548f1870d176ca63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d858c55ad8fec8acb9f50906d904474cfe508659a204798e03c59329bd9fdab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d858c55ad8fec8acb9f50906d904474cfe508659a204798e03c59329bd9fdab->enter($__internal_3d858c55ad8fec8acb9f50906d904474cfe508659a204798e03c59329bd9fdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3d858c55ad8fec8acb9f50906d904474cfe508659a204798e03c59329bd9fdab->leave($__internal_3d858c55ad8fec8acb9f50906d904474cfe508659a204798e03c59329bd9fdab_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a1c91adbb5d4dd4dbbffeaac2ffea9cb27a5ba162d5c63baa2506b8b58684f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c91adbb5d4dd4dbbffeaac2ffea9cb27a5ba162d5c63baa2506b8b58684f9c->enter($__internal_a1c91adbb5d4dd4dbbffeaac2ffea9cb27a5ba162d5c63baa2506b8b58684f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a1c91adbb5d4dd4dbbffeaac2ffea9cb27a5ba162d5c63baa2506b8b58684f9c->leave($__internal_a1c91adbb5d4dd4dbbffeaac2ffea9cb27a5ba162d5c63baa2506b8b58684f9c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6e5e143e9c616734ba86117b3bc4311b741b847a74a9fb0a6258f829eb59fe53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5e143e9c616734ba86117b3bc4311b741b847a74a9fb0a6258f829eb59fe53->enter($__internal_6e5e143e9c616734ba86117b3bc4311b741b847a74a9fb0a6258f829eb59fe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6e5e143e9c616734ba86117b3bc4311b741b847a74a9fb0a6258f829eb59fe53->leave($__internal_6e5e143e9c616734ba86117b3bc4311b741b847a74a9fb0a6258f829eb59fe53_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_64466899947dd795eb7ea56f1ff80ba19623d95b755551f077d3f40f46e28a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64466899947dd795eb7ea56f1ff80ba19623d95b755551f077d3f40f46e28a64->enter($__internal_64466899947dd795eb7ea56f1ff80ba19623d95b755551f077d3f40f46e28a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_64466899947dd795eb7ea56f1ff80ba19623d95b755551f077d3f40f46e28a64->leave($__internal_64466899947dd795eb7ea56f1ff80ba19623d95b755551f077d3f40f46e28a64_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
