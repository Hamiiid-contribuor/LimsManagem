<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b8f07eee8c7c7ab849df8bc6d6412a90305f490dd51ce161da52d62605819ef extends Twig_Template
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
        $__internal_30c0ee068b0b780fe2dc3a447151733db796d0b8b08bdb9f79da7ed1cb39fefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c0ee068b0b780fe2dc3a447151733db796d0b8b08bdb9f79da7ed1cb39fefd->enter($__internal_30c0ee068b0b780fe2dc3a447151733db796d0b8b08bdb9f79da7ed1cb39fefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_30c0ee068b0b780fe2dc3a447151733db796d0b8b08bdb9f79da7ed1cb39fefd->leave($__internal_30c0ee068b0b780fe2dc3a447151733db796d0b8b08bdb9f79da7ed1cb39fefd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
