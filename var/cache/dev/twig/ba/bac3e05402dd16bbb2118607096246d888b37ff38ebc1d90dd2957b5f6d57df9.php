<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8df5d2d5331151aea2c6968bc5b0e97f32fb3bf115fe5d386267925582e95e68 extends Twig_Template
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
        $__internal_0cd4c935dd94f3eeff6b5a16e63c7c056256635d9ab88a90629eb1e0b84916a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd4c935dd94f3eeff6b5a16e63c7c056256635d9ab88a90629eb1e0b84916a6->enter($__internal_0cd4c935dd94f3eeff6b5a16e63c7c056256635d9ab88a90629eb1e0b84916a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_0cd4c935dd94f3eeff6b5a16e63c7c056256635d9ab88a90629eb1e0b84916a6->leave($__internal_0cd4c935dd94f3eeff6b5a16e63c7c056256635d9ab88a90629eb1e0b84916a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
