<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9c93689acc5368e5fe8fb129805f6b88f8c554e81c65265a4f580225d93a6cd6 extends Twig_Template
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
        $__internal_ed7e3e88c2e1031294e3be33df8fdd0ddb8d72f527ee8d72b69e04ff6ecfbb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7e3e88c2e1031294e3be33df8fdd0ddb8d72f527ee8d72b69e04ff6ecfbb00->enter($__internal_ed7e3e88c2e1031294e3be33df8fdd0ddb8d72f527ee8d72b69e04ff6ecfbb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ed7e3e88c2e1031294e3be33df8fdd0ddb8d72f527ee8d72b69e04ff6ecfbb00->leave($__internal_ed7e3e88c2e1031294e3be33df8fdd0ddb8d72f527ee8d72b69e04ff6ecfbb00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
