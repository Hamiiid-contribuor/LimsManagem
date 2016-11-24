<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4441603cd8937095aad2f97dc10c7fabe47ba1f1aa8bf78cb614fe22cca69a46 extends Twig_Template
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
        $__internal_af9aad5534f9656e35be03cfe4b20dd3dccc860cee4a8590e701073ddd38f461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9aad5534f9656e35be03cfe4b20dd3dccc860cee4a8590e701073ddd38f461->enter($__internal_af9aad5534f9656e35be03cfe4b20dd3dccc860cee4a8590e701073ddd38f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_af9aad5534f9656e35be03cfe4b20dd3dccc860cee4a8590e701073ddd38f461->leave($__internal_af9aad5534f9656e35be03cfe4b20dd3dccc860cee4a8590e701073ddd38f461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
