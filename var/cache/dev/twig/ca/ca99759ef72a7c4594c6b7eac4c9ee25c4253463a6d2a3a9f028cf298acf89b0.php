<?php

/* ::login_base.html.twig */
class __TwigTemplate_3fe80af407b0807888d2975d249b9a2ed6dc063cd4cfb21a658cc8e9665941ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb35f1f73f1cc1b8b94e0562de3c03e35efe3bf1a695e1972ad9021b10f81365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb35f1f73f1cc1b8b94e0562de3c03e35efe3bf1a695e1972ad9021b10f81365->enter($__internal_fb35f1f73f1cc1b8b94e0562de3c03e35efe3bf1a695e1972ad9021b10f81365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/>
    <meta charset=\"utf-8\"/>
    <title>Login</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <link rel=\"apple-touch-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/ico/60.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/ico/76.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/ico/120.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/ico/152.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/favicon.ico"), "html", null, true);
        echo "\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-touch-fullscreen\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"default\">
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/pace/pace-theme-flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/boostrapv3/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery-scrollbar/jquery.scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"
          media=\"screen\"/>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/bootstrap-select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"
          media=\"screen\"/>
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/switchery/css/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"
          media=\"screen\"/>
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/css/pages-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link class=\"main-stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

    <!--[if lte IE 9]>
    <link href=\"pages/css/ie9.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <![endif]-->
    <script type=\"text/javascript\">
        window.onload = function () {
            // fix for windows 8
            if (navigator.appVersion.indexOf(\"Windows NT 6.2\") != -1)
                document.head.innerHTML += '<link rel=\"stylesheet\" type=\"text/css\" href=\"pages/css/windows.chrome.fix.css\" />'
        }
    </script>
</head>


<body class=\"fixed-header   \">
<!-- START PAGE-CONTAINER -->

";
        // line 46
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 48
        echo "
<!-- END PAGE CONTAINER -->
<!-- BEGIN VENDOR JS -->
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/boostrapv3/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery/jquery-easy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery-unveil/jquery.unveil.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery-bez/jquery.bez.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery-ios-list/jquery.ioslist.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery-actual/jquery.actual.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/bootstrap-select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/switchery/js/switchery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\"
        type=\"text/javascript\"></script>
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/js/pages.min.js"), "html", null, true);
        echo "\"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL JS -->
<!-- jQuery 2.1.4 -->
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.5 -->
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-red',
            radioClass: 'iradio_square-red',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
";
        
        $__internal_fb35f1f73f1cc1b8b94e0562de3c03e35efe3bf1a695e1972ad9021b10f81365->leave($__internal_fb35f1f73f1cc1b8b94e0562de3c03e35efe3bf1a695e1972ad9021b10f81365_prof);

    }

    // line 46
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0500fb594eb859dafe782041c79078bd63b14b21a645e32a3c1951c2b7d3f73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0500fb594eb859dafe782041c79078bd63b14b21a645e32a3c1951c2b7d3f73b->enter($__internal_0500fb594eb859dafe782041c79078bd63b14b21a645e32a3c1951c2b7d3f73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::login_base.html.twig"));

        
        $__internal_0500fb594eb859dafe782041c79078bd63b14b21a645e32a3c1951c2b7d3f73b->leave($__internal_0500fb594eb859dafe782041c79078bd63b14b21a645e32a3c1951c2b7d3f73b_prof);

    }

    public function getTemplateName()
    {
        return "::login_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 46,  201 => 79,  196 => 77,  191 => 75,  185 => 72,  179 => 69,  172 => 65,  168 => 64,  164 => 63,  160 => 62,  156 => 61,  152 => 60,  148 => 59,  144 => 58,  140 => 57,  136 => 56,  132 => 55,  128 => 54,  124 => 53,  120 => 52,  116 => 51,  111 => 48,  109 => 46,  88 => 28,  84 => 27,  79 => 25,  74 => 23,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/>
    <meta charset=\"utf-8\"/>
    <title>Login</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <link rel=\"apple-touch-icon\" href=\"{{ asset('pages/ico/60.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('pages/ico/76.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('pages/ico/120.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('pages/ico/152.png') }}\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('pages/favicon.ico') }}\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-touch-fullscreen\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"default\">
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <link href=\"{{ asset('assetsE/plugins/pace/pace-theme-flash.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assetsE/plugins/boostrapv3/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assetsE/plugins/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assetsE/plugins/jquery-scrollbar/jquery.scrollbar.css') }}\" rel=\"stylesheet\" type=\"text/css\"
          media=\"screen\"/>
    <link href=\"{{ asset('assetsE/plugins/bootstrap-select2/select2.css') }}\" rel=\"stylesheet\" type=\"text/css\"
          media=\"screen\"/>
    <link href=\"{{ asset('assetsE/plugins/switchery/css/switchery.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"
          media=\"screen\"/>
    <link href=\"{{ asset('assetsE/css/pages-icons.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link class=\"main-stylesheet\" href=\"{{ asset('pages/css/pages.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

    <!--[if lte IE 9]>
    <link href=\"pages/css/ie9.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <![endif]-->
    <script type=\"text/javascript\">
        window.onload = function () {
            // fix for windows 8
            if (navigator.appVersion.indexOf(\"Windows NT 6.2\") != -1)
                document.head.innerHTML += '<link rel=\"stylesheet\" type=\"text/css\" href=\"pages/css/windows.chrome.fix.css\" />'
        }
    </script>
</head>


<body class=\"fixed-header   \">
<!-- START PAGE-CONTAINER -->

{% block fos_user_content %}
{% endblock fos_user_content %}

<!-- END PAGE CONTAINER -->
<!-- BEGIN VENDOR JS -->
<script src=\"{{ asset('assetsE/plugins/pace/pace.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assetsE/plugins/jquery/jquery-1.11.1.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assetsE/plugins/modernizr.custom.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assetsE/plugins/jquery-ui/jquery-ui.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assetsE/plugins/boostrapv3/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assetsE/plugins/jquery/jquery-easy.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assetsE/plugins/jquery-unveil/jquery.unveil.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assetsE/plugins/jquery-bez/jquery.bez.min.js') }}\"></script>
<script src=\"{{ asset('assetsE/plugins/jquery-ios-list/jquery.ioslist.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assetsE/plugins/jquery-actual/jquery.actual.min.js') }}\"></script>
<script src=\"{{ asset('assetsE/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assetsE/plugins/bootstrap-select2/select2.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assetsE/plugins/classie/classie.js') }}\"></script>
<script src=\"{{ asset('assetsE/plugins/switchery/js/switchery.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assetsE/plugins/jquery-validation/js/jquery.validate.min.js') }}\"
        type=\"text/javascript\"></script>
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src=\"{{ asset('pages/js/pages.min.js') }}\"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src=\"{{ asset('assetsE/js/scripts.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL JS -->
<!-- jQuery 2.1.4 -->
<script src=\"{{ asset(\"plugins/jQuery/jQuery-2.1.4.min.js\") }}\"></script>
<!-- Bootstrap 3.3.5 -->
<script src=\"{{ asset(\"bootstrap/js/bootstrap.min.js\") }}\"></script>
<!-- iCheck -->
<script src=\"{{ asset(\"plugins/iCheck/icheck.min.js\") }}\"></script>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-red',
            radioClass: 'iradio_square-red',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
", "::login_base.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources\\views/login_base.html.twig");
    }
}
