<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c307df323d0414fe29ead188a782b6eff6f3440b7cf976671ebc628bbf9a82fe extends Twig_Template
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
        $__internal_50994f8d280ec98d46fe94fc2100396d5d1603237744c57f1709ce3d42c7bdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50994f8d280ec98d46fe94fc2100396d5d1603237744c57f1709ce3d42c7bdde->enter($__internal_50994f8d280ec98d46fe94fc2100396d5d1603237744c57f1709ce3d42c7bdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_50994f8d280ec98d46fe94fc2100396d5d1603237744c57f1709ce3d42c7bdde->leave($__internal_50994f8d280ec98d46fe94fc2100396d5d1603237744c57f1709ce3d42c7bdde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
