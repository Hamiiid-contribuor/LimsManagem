<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_56df60309e6f02a72094459d2d2f251bb14b1df4dcf1c3b5b082e55157b66bae extends Twig_Template
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
        $__internal_f275a2a8bd52f613d0484766f5ef08d633d67a2bd7d67d5920d13d9e0e66bfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f275a2a8bd52f613d0484766f5ef08d633d67a2bd7d67d5920d13d9e0e66bfba->enter($__internal_f275a2a8bd52f613d0484766f5ef08d633d67a2bd7d67d5920d13d9e0e66bfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f275a2a8bd52f613d0484766f5ef08d633d67a2bd7d67d5920d13d9e0e66bfba->leave($__internal_f275a2a8bd52f613d0484766f5ef08d633d67a2bd7d67d5920d13d9e0e66bfba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}