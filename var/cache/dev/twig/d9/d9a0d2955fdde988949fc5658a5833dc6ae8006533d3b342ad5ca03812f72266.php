<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_85ebb80b678233129d701a9c5aca93aee0dc93a739bdf8c0fd394bab8a167bce extends Twig_Template
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
        $__internal_fb2e5d73903bbc716ec3d695fbab5236071852dcac61f0f768c07029e377cf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2e5d73903bbc716ec3d695fbab5236071852dcac61f0f768c07029e377cf95->enter($__internal_fb2e5d73903bbc716ec3d695fbab5236071852dcac61f0f768c07029e377cf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_fb2e5d73903bbc716ec3d695fbab5236071852dcac61f0f768c07029e377cf95->leave($__internal_fb2e5d73903bbc716ec3d695fbab5236071852dcac61f0f768c07029e377cf95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
