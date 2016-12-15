<?php

/* FOSUserBundle::layout1.html.twig */
class __TwigTemplate_0373f1dc44262d045e095aaa645aa2f23edb7fbded83b4ee7b2cbea99a0b55c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout1.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_726f69c451e83aadcd7de3719f796b21f7dceed3fb6172af411158a5c12749f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726f69c451e83aadcd7de3719f796b21f7dceed3fb6172af411158a5c12749f0->enter($__internal_726f69c451e83aadcd7de3719f796b21f7dceed3fb6172af411158a5c12749f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_726f69c451e83aadcd7de3719f796b21f7dceed3fb6172af411158a5c12749f0->leave($__internal_726f69c451e83aadcd7de3719f796b21f7dceed3fb6172af411158a5c12749f0_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe6010f26264b0ddbe2960057a4c44e0ca998801a89f97a8ec8a477ceaf8bea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6010f26264b0ddbe2960057a4c44e0ca998801a89f97a8ec8a477ceaf8bea2->enter($__internal_fe6010f26264b0ddbe2960057a4c44e0ca998801a89f97a8ec8a477ceaf8bea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout1.html.twig"));

        // line 5
        echo "    <div>
        ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 12
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 14
        echo "    </div>

    ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 18
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 19
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 20
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    <div>
        ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('login', $context, $blocks);
        // line 32
        echo "    </div>

";
        
        $__internal_fe6010f26264b0ddbe2960057a4c44e0ca998801a89f97a8ec8a477ceaf8bea2->leave($__internal_fe6010f26264b0ddbe2960057a4c44e0ca998801a89f97a8ec8a477ceaf8bea2_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3f80fd44f4be96283855f6c1f34355d49fbed8a947ca9400b1f1db0fffe5f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f80fd44f4be96283855f6c1f34355d49fbed8a947ca9400b1f1db0fffe5f80->enter($__internal_b3f80fd44f4be96283855f6c1f34355d49fbed8a947ca9400b1f1db0fffe5f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout1.html.twig"));

        // line 28
        echo "        ";
        
        $__internal_b3f80fd44f4be96283855f6c1f34355d49fbed8a947ca9400b1f1db0fffe5f80->leave($__internal_b3f80fd44f4be96283855f6c1f34355d49fbed8a947ca9400b1f1db0fffe5f80_prof);

    }

    // line 30
    public function block_login($context, array $blocks = array())
    {
        $__internal_e1a6bbb9637f91cb7d868ad59caac2ba0616cb515fba7d47d639a45e407c1479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a6bbb9637f91cb7d868ad59caac2ba0616cb515fba7d47d639a45e407c1479->enter($__internal_e1a6bbb9637f91cb7d868ad59caac2ba0616cb515fba7d47d639a45e407c1479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout1.html.twig"));

        // line 31
        echo "        ";
        
        $__internal_e1a6bbb9637f91cb7d868ad59caac2ba0616cb515fba7d47d639a45e407c1479->leave($__internal_e1a6bbb9637f91cb7d868ad59caac2ba0616cb515fba7d47d639a45e407c1479_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 31,  142 => 30,  135 => 28,  129 => 27,  120 => 32,  118 => 30,  115 => 29,  113 => 27,  109 => 25,  106 => 24,  100 => 23,  91 => 20,  86 => 19,  81 => 18,  76 => 17,  74 => 16,  70 => 14,  62 => 12,  56 => 9,  52 => 8,  47 => 7,  45 => 6,  42 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}


{% block content %}
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

{% endblock content %}








", "FOSUserBundle::layout1.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/layout1.html.twig");
    }
}
