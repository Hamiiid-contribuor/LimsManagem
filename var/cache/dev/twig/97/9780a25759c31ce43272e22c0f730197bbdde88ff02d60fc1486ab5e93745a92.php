<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ca7f39ddaa54ba13181ece66444085931a2b497f5aa23e550be709863553716c extends Twig_Template
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
        $__internal_f250240bbd7f0d0d565fd30c99af59f4fa9f50d5f9fc6079d9114852e5231f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f250240bbd7f0d0d565fd30c99af59f4fa9f50d5f9fc6079d9114852e5231f8b->enter($__internal_f250240bbd7f0d0d565fd30c99af59f4fa9f50d5f9fc6079d9114852e5231f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f250240bbd7f0d0d565fd30c99af59f4fa9f50d5f9fc6079d9114852e5231f8b->leave($__internal_f250240bbd7f0d0d565fd30c99af59f4fa9f50d5f9fc6079d9114852e5231f8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
