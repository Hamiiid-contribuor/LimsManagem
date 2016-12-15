<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_9f6a61a7fb331dd6b24a3bd9d504599599c328e17a928038b488e22970ae9036 extends Twig_Template
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
        $__internal_fec2b834ac8fb64076e6d1f9618690c3c0f50f0a3a2cc3cb9e433e5633f65f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec2b834ac8fb64076e6d1f9618690c3c0f50f0a3a2cc3cb9e433e5633f65f44->enter($__internal_fec2b834ac8fb64076e6d1f9618690c3c0f50f0a3a2cc3cb9e433e5633f65f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_fec2b834ac8fb64076e6d1f9618690c3c0f50f0a3a2cc3cb9e433e5633f65f44->leave($__internal_fec2b834ac8fb64076e6d1f9618690c3c0f50f0a3a2cc3cb9e433e5633f65f44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
