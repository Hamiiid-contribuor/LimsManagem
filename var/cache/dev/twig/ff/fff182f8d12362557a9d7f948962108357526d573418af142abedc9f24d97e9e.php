<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c1b9c9f1cb61e9976b281d2716d31411e293e1384f1bd7f8a7b90db4a60e38e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::login_base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::login_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ada57e4696f1acb6f0c8b14e9e965a0714abe29b915f8f0ccf14f259de8d8c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada57e4696f1acb6f0c8b14e9e965a0714abe29b915f8f0ccf14f259de8d8c70->enter($__internal_ada57e4696f1acb6f0c8b14e9e965a0714abe29b915f8f0ccf14f259de8d8c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada57e4696f1acb6f0c8b14e9e965a0714abe29b915f8f0ccf14f259de8d8c70->leave($__internal_ada57e4696f1acb6f0c8b14e9e965a0714abe29b915f8f0ccf14f259de8d8c70_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_21bc638159c2de35d12627992b6af849509c644665683879a2f3c31edd9e63d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bc638159c2de35d12627992b6af849509c644665683879a2f3c31edd9e63d9->enter($__internal_21bc638159c2de35d12627992b6af849509c644665683879a2f3c31edd9e63d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 5
        echo "
        <div>
            ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 15
        echo "        </div>

        ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 19
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 21
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        <div>
            ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "
            ";
        // line 31
        $this->displayBlock('login', $context, $blocks);
        // line 33
        echo "        </div>

";
        
        $__internal_21bc638159c2de35d12627992b6af849509c644665683879a2f3c31edd9e63d9->leave($__internal_21bc638159c2de35d12627992b6af849509c644665683879a2f3c31edd9e63d9_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63246897e75951b31a7c5d29badae2ab1b3c46a87c1833388428133d026f061e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63246897e75951b31a7c5d29badae2ab1b3c46a87c1833388428133d026f061e->enter($__internal_63246897e75951b31a7c5d29badae2ab1b3c46a87c1833388428133d026f061e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 29
        echo "            ";
        
        $__internal_63246897e75951b31a7c5d29badae2ab1b3c46a87c1833388428133d026f061e->leave($__internal_63246897e75951b31a7c5d29badae2ab1b3c46a87c1833388428133d026f061e_prof);

    }

    // line 31
    public function block_login($context, array $blocks = array())
    {
        $__internal_e4978daa8d116449241c1c9bcae783855b22c63a8f741fd5b1429df24f3123f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4978daa8d116449241c1c9bcae783855b22c63a8f741fd5b1429df24f3123f7->enter($__internal_e4978daa8d116449241c1c9bcae783855b22c63a8f741fd5b1429df24f3123f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 32
        echo "            ";
        
        $__internal_e4978daa8d116449241c1c9bcae783855b22c63a8f741fd5b1429df24f3123f7->leave($__internal_e4978daa8d116449241c1c9bcae783855b22c63a8f741fd5b1429df24f3123f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 32,  143 => 31,  136 => 29,  130 => 28,  121 => 33,  119 => 31,  116 => 30,  114 => 28,  110 => 26,  107 => 25,  101 => 24,  92 => 21,  87 => 20,  82 => 19,  77 => 18,  75 => 17,  71 => 15,  63 => 13,  57 => 10,  53 => 9,  48 => 8,  46 => 7,  42 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::login_base.html.twig\" %}


{% block body %}

        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}

            {% block login %}
            {% endblock login %}
        </div>

{% endblock body %}






", "FOSUserBundle::layout.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
