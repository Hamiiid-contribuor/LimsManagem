<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9081f24ac1c560200d851cc2af542fdebd50d1bf79df43b58b922785c8bfba0e extends Twig_Template
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
        $__internal_e26c703426d0d25e9e3e9f8954dfa0b0a5cf9fed12f49ee489a0af4c65aa0e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26c703426d0d25e9e3e9f8954dfa0b0a5cf9fed12f49ee489a0af4c65aa0e2c->enter($__internal_e26c703426d0d25e9e3e9f8954dfa0b0a5cf9fed12f49ee489a0af4c65aa0e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e26c703426d0d25e9e3e9f8954dfa0b0a5cf9fed12f49ee489a0af4c65aa0e2c->leave($__internal_e26c703426d0d25e9e3e9f8954dfa0b0a5cf9fed12f49ee489a0af4c65aa0e2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
