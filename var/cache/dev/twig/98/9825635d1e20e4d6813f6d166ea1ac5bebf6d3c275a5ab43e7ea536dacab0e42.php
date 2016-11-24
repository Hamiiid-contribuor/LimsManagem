<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_145605763f6e606300fb48106613a1961ef601d241e71d0e275b7c3118f44f82 extends Twig_Template
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
        $__internal_ce7759978c1ef0c8805201eec87246c43ea5707c5fc5b33867c07e7346ad9073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7759978c1ef0c8805201eec87246c43ea5707c5fc5b33867c07e7346ad9073->enter($__internal_ce7759978c1ef0c8805201eec87246c43ea5707c5fc5b33867c07e7346ad9073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ce7759978c1ef0c8805201eec87246c43ea5707c5fc5b33867c07e7346ad9073->leave($__internal_ce7759978c1ef0c8805201eec87246c43ea5707c5fc5b33867c07e7346ad9073_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
