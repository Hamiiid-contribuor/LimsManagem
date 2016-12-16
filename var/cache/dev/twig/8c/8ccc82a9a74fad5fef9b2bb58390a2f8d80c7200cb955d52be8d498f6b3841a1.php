<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_1174bef1b46591520d3fac25d85243d7a29399fa37ab2c4dddbd194729ff4298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_824df95a52c51dc19281d7a8705ae45f8e2af21c746d49dfc041b71c15057271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824df95a52c51dc19281d7a8705ae45f8e2af21c746d49dfc041b71c15057271->enter($__internal_824df95a52c51dc19281d7a8705ae45f8e2af21c746d49dfc041b71c15057271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "<!-- START PAGE CONTENT WRAPPER -->
";
        // line 124
        echo "
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" style=\"background-color: rgba(86,61,124,.15);\">Modifier vos Informations Personneles</div>
            <div class=\"panel-body\">
                ";
        // line 130
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                <div class=\"col-md-6\">


                    ";
        // line 135
        echo "
                </div>
                <div class=\"col-md-6\">

                    <div class=\"form-group\">
                        <label>Nom Utilisateur </label>
                        <label><span style=\"color: #f68484!important\">";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span></label>
                            ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control ui-autocomplete-input")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label>Email </label>
                        <label><span style=\"color: #f68484!important\">";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span></label>
                            ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control ui-autocomplete-input")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label>Password </label>
                        <label><span style=\"color: #f68484!important\">";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "</span></label>
                            ";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control ui-autocomplete-input")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label>Nom </label>
                        <label><span style=\"color: #f68484!important\">";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "</span></label>
                            ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control ui-autocomplete-input")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label>Prenom </label>
                        <label><span style=\"color: #f68484!important\">";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "</span></label>
                            ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control ui-autocomplete-input")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label>Adresse </label>
                        <label><span style=\"color: #f68484!important\">";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "</span></label>
                            ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control ui-autocomplete-input")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label>Telephone </label>
                        <label><span style=\"color: #f68484!important\">";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "</span></label>
                            ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control ui-autocomplete-input")));
        echo "
                    </div>

                </div>  
                <div class=\"wizard-footer bg-master-light\">
                    <div class=\"\">
                        <button class=\"btn btn-info btn-cons btn-animated pull-right fa fa-plus\" type=\"submit\">
                            <span class=\"bold\">Modifier</span></button>
                        </button>
                    </div>
                </div>
                ";
        // line 183
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div><!-- /.pannel-->
    </div><!-- /.col-->

</div><!-- /.row -->
";
        
        $__internal_824df95a52c51dc19281d7a8705ae45f8e2af21c746d49dfc041b71c15057271->leave($__internal_824df95a52c51dc19281d7a8705ae45f8e2af21c746d49dfc041b71c15057271_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9359f024e9f2c63909cf951fbad528a6d3d44c00b01e94452a4acaa525db9e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9359f024e9f2c63909cf951fbad528a6d3d44c00b01e94452a4acaa525db9e5f->enter($__internal_9359f024e9f2c63909cf951fbad528a6d3d44c00b01e94452a4acaa525db9e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 12
        echo "
    <style> 



        .form-control {
            border: 1px solid #eee;
            box-shadow: none;
            border-radius: 7px ; 
            font-family : inherit;
            font-size   : 100%;
            padding: 10px;

            box-shadow: inset 1px 1px 1px 0 #707070;
            transition: box-shadow 0.3s;

        }

        .form-control:focus {
            border: 1px solid #30a5ff;
            outline: 0;
            box-shadow: inset 0px 0px 0px 1px #30a5ff;
            font-family : inherit;
            font-size   : 100%;
        }

    </style>

";
        
        $__internal_9359f024e9f2c63909cf951fbad528a6d3d44c00b01e94452a4acaa525db9e5f->leave($__internal_9359f024e9f2c63909cf951fbad528a6d3d44c00b01e94452a4acaa525db9e5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 12,  155 => 11,  141 => 183,  127 => 172,  123 => 171,  116 => 167,  112 => 166,  105 => 162,  101 => 161,  94 => 157,  90 => 156,  83 => 152,  79 => 151,  72 => 147,  68 => 146,  61 => 142,  57 => 141,  49 => 135,  42 => 130,  34 => 124,  31 => 41,  29 => 11,  26 => 10,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{#{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
{{ form_widget(form) }}
<div>
    <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
</div>
{{ form_end(form) }}
#}

{% block stylesheets %}

    <style> 



        .form-control {
            border: 1px solid #eee;
            box-shadow: none;
            border-radius: 7px ; 
            font-family : inherit;
            font-size   : 100%;
            padding: 10px;

            box-shadow: inset 1px 1px 1px 0 #707070;
            transition: box-shadow 0.3s;

        }

        .form-control:focus {
            border: 1px solid #30a5ff;
            outline: 0;
            box-shadow: inset 0px 0px 0px 1px #30a5ff;
            font-family : inherit;
            font-size   : 100%;
        }

    </style>

{% endblock stylesheets   %}
<!-- START PAGE CONTENT WRAPPER -->
{#<div class=\"page-content-wrapper\">
    <!-- START PAGE CONTENT -->
    <div class=\"content sm-gutter\">
        <!-- START CONTAINER FLUID -->
        <div class=\"container-fluid padding-25 sm-padding-10\" style=\"font-size: 15px;\">
            <div class=\"row row-eq-height\" style=\"padding-bottom: 5px;\">
                <div class=\"col-md-6\" style=\"font-size: 20px;\">
                    <div style=\"padding: 15px;  min-height: 50px; background-color: rgba(86,61,124,.15);;\">
                        <div class=\"col-xs-12 col-md-8\"><i class=\"pg-form\"></i> Modification d'utlisateur  </div>
                    </div>
                </div>
            </div>


            <div class=\"row row-eq-height\" style=\"padding-bottom: 5px;\">
                <br/>
            </div>
            <!-- START CONTAINER FLUID -->
            <div class=\"container-fluid container-fixed-lg\">
                {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
                <div class=\"col-md-6 col-md-offset-3\">
                    <div class=\"panel panel-default bg-theme1-lighter\">
                        <div class=\"panel-body\">
                            <br/>
                            <div class=\"form-group\">
                                <label>Nom Utilisateur </label>
                                <label><span style=\"color: #f68484!important\">{{form_errors(form.username)}}</span></label>
                                    {{ form_widget(form.username, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                            </div>
                            <div class=\"form-group\">
                                <label>Email </label>
                                <label><span style=\"color: #f68484!important\">{{form_errors(form.email)}}</span></label>
                                    {{ form_widget(form.email, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                            </div>
                            <div class=\"form-group\">
                                <label>Password </label>
                                <label><span style=\"color: #f68484!important\">{{form_errors(form.current_password)}}</span></label>
                                    {{ form_widget(form.current_password, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                            </div>
                            <div class=\"form-group\">
                                <label>Nom </label>
                                <label><span style=\"color: #f68484!important\">{{form_errors(form.nom)}}</span></label>
                                    {{ form_widget(form.nom, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                            </div>
                            <div class=\"form-group\">
                                <label>Prenom </label>
                                <label><span style=\"color: #f68484!important\">{{form_errors(form.prenom)}}</span></label>
                                    {{ form_widget(form.prenom, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                            </div>
                            <div class=\"form-group\">
                                <label>Adresse </label>
                                <label><span style=\"color: #f68484!important\">{{form_errors(form.adresse)}}</span></label>
                                    {{ form_widget(form.adresse, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                            </div>
                            <div class=\"form-group\">
                                <label>Telephone </label>
                                <label><span style=\"color: #f68484!important\">{{form_errors(form.telephone)}}</span></label>
                                    {{ form_widget(form.telephone, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"wizard-footer bg-master-light\">
                    <div class=\"col-md-6 col-md-offset-4\">
                        <button class=\"btn btn-info btn-cons btn-animated from-left fa fa-plus\" type=\"submit\">
                            <span class=\"bold\">Modifier</span></button>
                        </button>
                        <a class=\"btn btn-info btn-cons btn-animated from-left fa fa-reply\" href=\"{{ 'profile.edit.submit'|trans }}\">
                            <span class=\"bold\">Annuler</span>
                        </a>
                    </div>
                </div>
                {{ form_end(form) }}
            </div>
            <!-- END CONTAINER FLUID -->
        </div>
        <!-- END CONTAINER FLUID -->
    </div>
    <!-- END CONTAINER FLUID -->
</div>
#}

<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" style=\"background-color: rgba(86,61,124,.15);\">Modifier vos Informations Personneles</div>
            <div class=\"panel-body\">
                {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
                <div class=\"col-md-6\">


                    {#c'est ici ou je vais mettre la photo #}

                </div>
                <div class=\"col-md-6\">

                    <div class=\"form-group\">
                        <label>Nom Utilisateur </label>
                        <label><span style=\"color: #f68484!important\">{{form_errors(form.username)}}</span></label>
                            {{ form_widget(form.username, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label>Email </label>
                        <label><span style=\"color: #f68484!important\">{{form_errors(form.email)}}</span></label>
                            {{ form_widget(form.email, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label>Password </label>
                        <label><span style=\"color: #f68484!important\">{{form_errors(form.current_password)}}</span></label>
                            {{ form_widget(form.current_password, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label>Nom </label>
                        <label><span style=\"color: #f68484!important\">{{form_errors(form.nom)}}</span></label>
                            {{ form_widget(form.nom, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label>Prenom </label>
                        <label><span style=\"color: #f68484!important\">{{form_errors(form.prenom)}}</span></label>
                            {{ form_widget(form.prenom, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label>Adresse </label>
                        <label><span style=\"color: #f68484!important\">{{form_errors(form.adresse)}}</span></label>
                            {{ form_widget(form.adresse, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label>Telephone </label>
                        <label><span style=\"color: #f68484!important\">{{form_errors(form.telephone)}}</span></label>
                            {{ form_widget(form.telephone, { 'attr': {'class': 'form-control ui-autocomplete-input'} }) }}
                    </div>

                </div>  
                <div class=\"wizard-footer bg-master-light\">
                    <div class=\"\">
                        <button class=\"btn btn-info btn-cons btn-animated pull-right fa fa-plus\" type=\"submit\">
                            <span class=\"bold\">Modifier</span></button>
                        </button>
                    </div>
                </div>
                {{ form_end(form) }}
            </div>
        </div><!-- /.pannel-->
    </div><!-- /.col-->

</div><!-- /.row -->
", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
