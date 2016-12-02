<?php

/* ::base.html.twig */
class __TwigTemplate_8456f6383d89f28d7112938dedfe3962bc80e10ddb0e7f0aa9a0d05b3f986395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30edc798021e74cebf89b873e2d477aff3ecbb94d48b096fb3358e72d150a470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30edc798021e74cebf89b873e2d477aff3ecbb94d48b096fb3358e72d150a470->enter($__internal_30edc798021e74cebf89b873e2d477aff3ecbb94d48b096fb3358e72d150a470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>
            ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "        
        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "    </head>
    <body>
        ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 527
        echo "
        
    </body>
</html>
";
        
        $__internal_30edc798021e74cebf89b873e2d477aff3ecbb94d48b096fb3358e72d150a470->leave($__internal_30edc798021e74cebf89b873e2d477aff3ecbb94d48b096fb3358e72d150a470_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_aca54ce1185c9329591538d6c05c0b70d89b285b88338df7f89d95b7396cda6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca54ce1185c9329591538d6c05c0b70d89b285b88338df7f89d95b7396cda6a->enter($__internal_aca54ce1185c9329591538d6c05c0b70d89b285b88338df7f89d95b7396cda6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "LIMS | Dashboard";
        
        $__internal_aca54ce1185c9329591538d6c05c0b70d89b285b88338df7f89d95b7396cda6a->leave($__internal_aca54ce1185c9329591538d6c05c0b70d89b285b88338df7f89d95b7396cda6a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f5fa811c87fd381f0e9e40a1135120baf50b2109bccaf51a446a0784d18943f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5fa811c87fd381f0e9e40a1135120baf50b2109bccaf51a446a0784d18943f->enter($__internal_9f5fa811c87fd381f0e9e40a1135120baf50b2109bccaf51a446a0784d18943f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 11
        echo "
            <!-- Tell the browser to be responsive to screen width -->
            <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
            <!-- Bootstrap 3.3.5 -->
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!-- Font Awesome -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            <!-- Ionicons -->
            <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
            <!-- Theme style -->
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
            <!-- AdminLTE Skins. Choose a skin from the css/skins
                 folder instead of downloading all of them to reduce the load. -->
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
            <!-- iCheck -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
            <!-- Morris chart -->
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/morris/morris.css"), "html", null, true);
        echo " \">
            <!-- jvectormap -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
            <!-- Date Picker -->
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
            <!-- Daterange picker -->
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
            <!-- bootstrap wysihtml5 - text editor -->
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->

        ";
        
        $__internal_9f5fa811c87fd381f0e9e40a1135120baf50b2109bccaf51a446a0784d18943f->leave($__internal_9f5fa811c87fd381f0e9e40a1135120baf50b2109bccaf51a446a0784d18943f_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2b795783679a3cc6a34a0e0707990227cf302154e1545d280438d2edd707958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b795783679a3cc6a34a0e0707990227cf302154e1545d280438d2edd707958->enter($__internal_f2b795783679a3cc6a34a0e0707990227cf302154e1545d280438d2edd707958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 48
        echo "            <!-- jQuery 2.1.4 -->
            <script src=\" ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                \$.widget.bridge('uibutton', \$.ui.button);
            </script>
            <!-- Bootstrap 3.3.5 -->
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Morris.js charts -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Sparkline -->
            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
            <!-- jvectormap -->
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
            <!-- jQuery Knob Chart -->
            <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
            <!-- daterangepicker -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
            <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
            <!-- datepicker -->
            <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Slimscroll -->
            <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
            <!-- FastClick -->
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE App -->
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE for demo purposes -->
            <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f2b795783679a3cc6a34a0e0707990227cf302154e1545d280438d2edd707958->leave($__internal_f2b795783679a3cc6a34a0e0707990227cf302154e1545d280438d2edd707958_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_2677c07a764fbe6447611c53da31966fd2824f124e2354184764cd7059916f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2677c07a764fbe6447611c53da31966fd2824f124e2354184764cd7059916f70->enter($__internal_2677c07a764fbe6447611c53da31966fd2824f124e2354184764cd7059916f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 89
        echo "
        <body class=\"hold-transition skin-blue sidebar-mini\">
            <div class=\"wrapper\">
                <header class=\"main-header\">
                    <!-- Logo -->
                    <a href=\"#\" class=\"logo\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <span class=\"logo-mini\"><b>A</b>LT</span>
                        <!-- logo for regular state and mobile devices -->
                        <span class=\"logo-lg\"><b>Admin</b>LTE</span>
                    </a>
                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        <div class=\"navbar-custom-menu\">
                            <ul class=\"nav navbar-nav\">
                                <!-- Messages: style can be found in dropdown.less-->
                                <li class=\"dropdown messages-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-envelope-o\"></i>
                                        <span class=\"label label-success\">4</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"header\">You have 4 messages</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class=\"menu\">
                                                <li><!-- start message -->
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            Support Team
                                                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li><!-- end message -->
                                                <li>
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            AdminLTE Design Team
                                                            <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            Developers
                                                            <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            Sales Department
                                                            <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            Reviewers
                                                            <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                                    </ul>
                                </li>
                                <!-- Notifications: style can be found in dropdown.less -->
                                <li class=\"dropdown notifications-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-bell-o\"></i>
                                        <span class=\"label label-warning\">10</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"header\">You have 10 notifications</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class=\"menu\">
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the page and may cause design problems
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-user text-red\"></i> You changed your username
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"footer\"><a href=\"#\">View all</a></li>
                                    </ul>
                                </li>
                                <!-- Tasks: style can be found in dropdown.less -->
                                <li class=\"dropdown tasks-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-flag-o\"></i>
                                        <span class=\"label label-danger\">9</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"header\">You have 9 tasks</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class=\"menu\">
                                                <li><!-- Task item -->
                                                    <a href=\"#\">
                                                        <h3>
                                                            Design some buttons
                                                            <small class=\"pull-right\">20%</small>
                                                        </h3>
                                                        <div class=\"progress xs\">
                                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">20% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end task item -->
                                                <li><!-- Task item -->
                                                    <a href=\"#\">
                                                        <h3>
                                                            Create a nice theme
                                                            <small class=\"pull-right\">40%</small>
                                                        </h3>
                                                        <div class=\"progress xs\">
                                                            <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">40% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end task item -->
                                                <li><!-- Task item -->
                                                    <a href=\"#\">
                                                        <h3>
                                                            Some task I need to do
                                                            <small class=\"pull-right\">60%</small>
                                                        </h3>
                                                        <div class=\"progress xs\">
                                                            <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">60% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end task item -->
                                                <li><!-- Task item -->
                                                    <a href=\"#\">
                                                        <h3>
                                                            Make beautiful transitions
                                                            <small class=\"pull-right\">80%</small>
                                                        </h3>
                                                        <div class=\"progress xs\">
                                                            <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">80% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end task item -->
                                            </ul>
                                        </li>
                                        <li class=\"footer\">
                                            <a href=\"#\">View all tasks</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- User Account: style can be found in dropdown.less -->
                                <li class=\"dropdown user user-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                                        <span class=\"hidden-xs\">Alexander Pierce</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header\">
                                            <img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            <p>
                                                Alexander Pierce - Web Developer
                                                <small>Member since Nov. 2012</small>
                                            </p>
                                        </li>
                                        <!-- Menu Body -->
                                        <li class=\"user-body\">
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Followers</a>
                                            </div>
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Sales</a>
                                            </div>
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Friends</a>
                                            </div>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class=\"user-footer\">
                                            <div class=\"pull-left\">
                                                <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                            </div>
                                            <div class=\"pull-right\">
                                                <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Control Sidebar Toggle Button -->
                                <li>
                                    <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                <!-- Left side column. contains the logo and sidebar -->
                <aside class=\"main-sidebar\">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class=\"sidebar\">
                        <!-- Sidebar user panel -->
                        <div class=\"user-panel\">
                            <div class=\"pull-left image\">
                                <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                            </div>
                            <div class=\"pull-left info\">
                                <p>Alexander Pierce</p>
                                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                            </div>
                        </div>
                        <!-- search form -->
                        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                                <span class=\"input-group-btn\">
                                    <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                                </span>
                            </div>
                        </form>
                        <!-- /.search form -->
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class=\"sidebar-menu\">
                            <li class=\"header\">MAIN NAVIGATION</li>
                            <li class=\"active treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Dashboard v1</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Dashboard v2</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-files-o\"></i>
                                    <span>Layout Options</span>
                                    <span class=\"label label-primary pull-right\">4</span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Top Navigation</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Boxed</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Fixed</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-th\"></i> <span>Widgets</span> <small class=\"label pull-right bg-green\">new</small>
                                </a>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-pie-chart\"></i>
                                    <span>Charts</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-laptop\"></i>
                                    <span>UI Elements</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-edit\"></i> <span>Forms</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-table\"></i> <span>Tables</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                                    <small class=\"label pull-right bg-red\">3</small>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                                    <small class=\"label pull-right bg-yellow\">12</small>
                                </a>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-folder\"></i> <span>Examples</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-share\"></i> <span>Multilevel</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
                                    <li>
                                        <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One <i class=\"fa fa-angle-left pull-right\"></i></a>
                                        <ul class=\"treeview-menu\">
                                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                                            <li>
                                                <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two <i class=\"fa fa-angle-left pull-right\"></i></a>
                                                <ul class=\"treeview-menu\">
                                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></li>
                            <li class=\"header\">LABELS</li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
                        </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>

                <!-- Content Wrapper. Contains page content -->
                <div class=\"content-wrapper\">
                    ";
        // line 508
        $this->displayBlock('content', $context, $blocks);
        // line 511
        echo "                </div><!-- /.content-wrapper -->

                <footer class=\"main-footer\">
                    <div class=\"pull-right hidden-xs\">
                        <b>Version</b> 2.3.0
                    </div>
                    <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
                </footer>



                <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
                <div class=\"control-sidebar-bg\"></div>
            </div><!-- ./wrapper -->
        ";
        
        $__internal_2677c07a764fbe6447611c53da31966fd2824f124e2354184764cd7059916f70->leave($__internal_2677c07a764fbe6447611c53da31966fd2824f124e2354184764cd7059916f70_prof);

    }

    // line 508
    public function block_content($context, array $blocks = array())
    {
        $__internal_03f580d57108376d4c818ddb83114e9e56142753d4e8e470fde4ad017b44c6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f580d57108376d4c818ddb83114e9e56142753d4e8e470fde4ad017b44c6fa->enter($__internal_03f580d57108376d4c818ddb83114e9e56142753d4e8e470fde4ad017b44c6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 509
        echo "
                    ";
        
        $__internal_03f580d57108376d4c818ddb83114e9e56142753d4e8e470fde4ad017b44c6fa->leave($__internal_03f580d57108376d4c818ddb83114e9e56142753d4e8e470fde4ad017b44c6fa_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  727 => 509,  721 => 508,  699 => 511,  697 => 508,  535 => 349,  487 => 304,  478 => 298,  347 => 170,  332 => 158,  317 => 146,  302 => 134,  287 => 122,  252 => 89,  246 => 88,  237 => 84,  232 => 82,  227 => 80,  222 => 78,  217 => 76,  212 => 74,  207 => 72,  202 => 70,  196 => 67,  191 => 65,  187 => 64,  182 => 62,  177 => 60,  171 => 57,  160 => 49,  157 => 48,  151 => 47,  134 => 36,  129 => 34,  124 => 32,  119 => 30,  114 => 28,  109 => 26,  104 => 24,  98 => 21,  89 => 15,  83 => 11,  77 => 10,  65 => 8,  54 => 527,  52 => 88,  48 => 86,  46 => 47,  43 => 46,  41 => 10,  38 => 9,  36 => 8,  27 => 1,);
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
        <meta charset=\"UTF-8\" />
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>
            {% block title %}LIMS | Dashboard{% endblock %}
        </title>
        {% block stylesheets %}

            <!-- Tell the browser to be responsive to screen width -->
            <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
            <!-- Bootstrap 3.3.5 -->
            <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\">
            <!-- Font Awesome -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            <!-- Ionicons -->
            <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
            <!-- Theme style -->
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/AdminLTE.min.css') }}\">
            <!-- AdminLTE Skins. Choose a skin from the css/skins
                 folder instead of downloading all of them to reduce the load. -->
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/skins/_all-skins.min.css') }}\">
            <!-- iCheck -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/iCheck/flat/blue.css') }}\">
            <!-- Morris chart -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/morris/morris.css') }} \">
            <!-- jvectormap -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}\">
            <!-- Date Picker -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/datepicker/datepicker3.css') }}\">
            <!-- Daterange picker -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}\">
            <!-- bootstrap wysihtml5 - text editor -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->

        {% endblock %}
        
        {% block javascripts %}
            <!-- jQuery 2.1.4 -->
            <script src=\" {{ asset('plugins/jQuery/jQuery-2.1.4.min.js') }}\"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                \$.widget.bridge('uibutton', \$.ui.button);
            </script>
            <!-- Bootstrap 3.3.5 -->
            <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
            <!-- Morris.js charts -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
            <script src=\"{{ asset('plugins/morris/morris.min.js') }}\"></script>
            <!-- Sparkline -->
            <script src=\"{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}\"></script>
            <!-- jvectormap -->
            <script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>
            <!-- jQuery Knob Chart -->
            <script src=\"{{ asset('plugins/knob/jquery.knob.js') }}\"></script>
            <!-- daterangepicker -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
            <script src=\"{{ asset('plugins/daterangepicker/daterangepicker.js') }}\"></script>
            <!-- datepicker -->
            <script src=\"{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}\"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src=\"{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}\"></script>
            <!-- Slimscroll -->
            <script src=\"{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}\"></script>
            <!-- FastClick -->
            <script src=\"{{ asset('plugins/fastclick/fastclick.min.js') }}\"></script>
            <!-- AdminLTE App -->
            <script src=\"{{ asset('dist/js/app.min.js')}}\"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src=\"{{ asset('dist/js/pages/dashboard.js') }}\"></script>
            <!-- AdminLTE for demo purposes -->
            <script src=\"{{ asset('dist/js/demo.js') }}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block body %}

        <body class=\"hold-transition skin-blue sidebar-mini\">
            <div class=\"wrapper\">
                <header class=\"main-header\">
                    <!-- Logo -->
                    <a href=\"#\" class=\"logo\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <span class=\"logo-mini\"><b>A</b>LT</span>
                        <!-- logo for regular state and mobile devices -->
                        <span class=\"logo-lg\"><b>Admin</b>LTE</span>
                    </a>
                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        <div class=\"navbar-custom-menu\">
                            <ul class=\"nav navbar-nav\">
                                <!-- Messages: style can be found in dropdown.less-->
                                <li class=\"dropdown messages-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-envelope-o\"></i>
                                        <span class=\"label label-success\">4</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"header\">You have 4 messages</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class=\"menu\">
                                                <li><!-- start message -->
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"{{ asset('dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            Support Team
                                                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li><!-- end message -->
                                                <li>
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"{{ asset('dist/img/user3-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            AdminLTE Design Team
                                                            <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"{{ asset('dist/img/user4-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            Developers
                                                            <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"{{ asset('dist/img/user3-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            Sales Department
                                                            <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <div class=\"pull-left\">
                                                            <img src=\"{{ asset('dist/img/user4-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                        </div>
                                                        <h4>
                                                            Reviewers
                                                            <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                                    </ul>
                                </li>
                                <!-- Notifications: style can be found in dropdown.less -->
                                <li class=\"dropdown notifications-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-bell-o\"></i>
                                        <span class=\"label label-warning\">10</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"header\">You have 10 notifications</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class=\"menu\">
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the page and may cause design problems
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"fa fa-user text-red\"></i> You changed your username
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"footer\"><a href=\"#\">View all</a></li>
                                    </ul>
                                </li>
                                <!-- Tasks: style can be found in dropdown.less -->
                                <li class=\"dropdown tasks-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-flag-o\"></i>
                                        <span class=\"label label-danger\">9</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"header\">You have 9 tasks</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class=\"menu\">
                                                <li><!-- Task item -->
                                                    <a href=\"#\">
                                                        <h3>
                                                            Design some buttons
                                                            <small class=\"pull-right\">20%</small>
                                                        </h3>
                                                        <div class=\"progress xs\">
                                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">20% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end task item -->
                                                <li><!-- Task item -->
                                                    <a href=\"#\">
                                                        <h3>
                                                            Create a nice theme
                                                            <small class=\"pull-right\">40%</small>
                                                        </h3>
                                                        <div class=\"progress xs\">
                                                            <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">40% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end task item -->
                                                <li><!-- Task item -->
                                                    <a href=\"#\">
                                                        <h3>
                                                            Some task I need to do
                                                            <small class=\"pull-right\">60%</small>
                                                        </h3>
                                                        <div class=\"progress xs\">
                                                            <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">60% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end task item -->
                                                <li><!-- Task item -->
                                                    <a href=\"#\">
                                                        <h3>
                                                            Make beautiful transitions
                                                            <small class=\"pull-right\">80%</small>
                                                        </h3>
                                                        <div class=\"progress xs\">
                                                            <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">80% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end task item -->
                                            </ul>
                                        </li>
                                        <li class=\"footer\">
                                            <a href=\"#\">View all tasks</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- User Account: style can be found in dropdown.less -->
                                <li class=\"dropdown user user-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <img src=\"{{ asset('dist/img/user2-160x160.jpg') }}\" class=\"user-image\" alt=\"User Image\">
                                        <span class=\"hidden-xs\">Alexander Pierce</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header\">
                                            <img src=\"{{ asset('dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                            <p>
                                                Alexander Pierce - Web Developer
                                                <small>Member since Nov. 2012</small>
                                            </p>
                                        </li>
                                        <!-- Menu Body -->
                                        <li class=\"user-body\">
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Followers</a>
                                            </div>
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Sales</a>
                                            </div>
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Friends</a>
                                            </div>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class=\"user-footer\">
                                            <div class=\"pull-left\">
                                                <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                            </div>
                                            <div class=\"pull-right\">
                                                <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Control Sidebar Toggle Button -->
                                <li>
                                    <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                <!-- Left side column. contains the logo and sidebar -->
                <aside class=\"main-sidebar\">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class=\"sidebar\">
                        <!-- Sidebar user panel -->
                        <div class=\"user-panel\">
                            <div class=\"pull-left image\">
                                <img src=\"{{ asset('dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                            </div>
                            <div class=\"pull-left info\">
                                <p>Alexander Pierce</p>
                                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                            </div>
                        </div>
                        <!-- search form -->
                        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                                <span class=\"input-group-btn\">
                                    <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                                </span>
                            </div>
                        </form>
                        <!-- /.search form -->
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class=\"sidebar-menu\">
                            <li class=\"header\">MAIN NAVIGATION</li>
                            <li class=\"active treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Dashboard v1</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Dashboard v2</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-files-o\"></i>
                                    <span>Layout Options</span>
                                    <span class=\"label label-primary pull-right\">4</span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Top Navigation</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Boxed</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Fixed</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-th\"></i> <span>Widgets</span> <small class=\"label pull-right bg-green\">new</small>
                                </a>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-pie-chart\"></i>
                                    <span>Charts</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-laptop\"></i>
                                    <span>UI Elements</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-edit\"></i> <span>Forms</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-table\"></i> <span>Tables</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                                    <small class=\"label pull-right bg-red\">3</small>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                                    <small class=\"label pull-right bg-yellow\">12</small>
                                </a>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-folder\"></i> <span>Examples</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
                                </ul>
                            </li>
                            <li class=\"treeview\">
                                <a href=\"#\">
                                    <i class=\"fa fa-share\"></i> <span>Multilevel</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
                                    <li>
                                        <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One <i class=\"fa fa-angle-left pull-right\"></i></a>
                                        <ul class=\"treeview-menu\">
                                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                                            <li>
                                                <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two <i class=\"fa fa-angle-left pull-right\"></i></a>
                                                <ul class=\"treeview-menu\">
                                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></li>
                            <li class=\"header\">LABELS</li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
                        </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>

                <!-- Content Wrapper. Contains page content -->
                <div class=\"content-wrapper\">
                    {% block content %}

                    {% endblock content %}
                </div><!-- /.content-wrapper -->

                <footer class=\"main-footer\">
                    <div class=\"pull-right hidden-xs\">
                        <b>Version</b> 2.3.0
                    </div>
                    <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
                </footer>



                <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
                <div class=\"control-sidebar-bg\"></div>
            </div><!-- ./wrapper -->
        {% endblock %}

        
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\LIMS\\app/Resources\\views/base.html.twig");
    }
}
