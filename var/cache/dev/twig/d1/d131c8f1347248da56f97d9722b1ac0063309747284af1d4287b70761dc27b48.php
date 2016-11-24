<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a0deab1120d253772087485adfaa944b47378f3a7d362c794f398298c5d04ed6 extends Twig_Template
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
        $__internal_76d7a5ced1a24e2c3e36c8eac3379f257b6fe5ad39a453ecbf05ef20c9d0fc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d7a5ced1a24e2c3e36c8eac3379f257b6fe5ad39a453ecbf05ef20c9d0fc9a->enter($__internal_76d7a5ced1a24e2c3e36c8eac3379f257b6fe5ad39a453ecbf05ef20c9d0fc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_76d7a5ced1a24e2c3e36c8eac3379f257b6fe5ad39a453ecbf05ef20c9d0fc9a->leave($__internal_76d7a5ced1a24e2c3e36c8eac3379f257b6fe5ad39a453ecbf05ef20c9d0fc9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
