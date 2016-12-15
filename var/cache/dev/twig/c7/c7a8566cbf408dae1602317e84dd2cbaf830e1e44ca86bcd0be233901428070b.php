<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b69be3256c2c32c69b6e81d15d314e0dab1324a06dace3574e6dbf0895ad5f48 extends Twig_Template
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
        $__internal_0e15b6724b3a0f96f3dd865c6b228807a10eeea333489e44d1e91a5a4a4ef412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e15b6724b3a0f96f3dd865c6b228807a10eeea333489e44d1e91a5a4a4ef412->enter($__internal_0e15b6724b3a0f96f3dd865c6b228807a10eeea333489e44d1e91a5a4a4ef412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0e15b6724b3a0f96f3dd865c6b228807a10eeea333489e44d1e91a5a4a4ef412->leave($__internal_0e15b6724b3a0f96f3dd865c6b228807a10eeea333489e44d1e91a5a4a4ef412_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
