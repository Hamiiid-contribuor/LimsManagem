<?php

/* ::base.html.twig */
class __TwigTemplate_7c825b1e1f18c6f02f53402b4bf4a5bd0a80d18f753bf0224fdf38832d6fd72c extends Twig_Template
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
        $__internal_87a218e18e5b0f3ee81237f70f7b4cda746d8fa78fcf2d83782c4259cf1345b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a218e18e5b0f3ee81237f70f7b4cda746d8fa78fcf2d83782c4259cf1345b5->enter($__internal_87a218e18e5b0f3ee81237f70f7b4cda746d8fa78fcf2d83782c4259cf1345b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 449
        echo "
        
    </body>
</html>
";
        
        $__internal_87a218e18e5b0f3ee81237f70f7b4cda746d8fa78fcf2d83782c4259cf1345b5->leave($__internal_87a218e18e5b0f3ee81237f70f7b4cda746d8fa78fcf2d83782c4259cf1345b5_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5e044335362b76f6ce9db7cfa026f77836db37ee7989b4f19f525edbe1cc058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e044335362b76f6ce9db7cfa026f77836db37ee7989b4f19f525edbe1cc058->enter($__internal_d5e044335362b76f6ce9db7cfa026f77836db37ee7989b4f19f525edbe1cc058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "LIMS | Dashboard";
        
        $__internal_d5e044335362b76f6ce9db7cfa026f77836db37ee7989b4f19f525edbe1cc058->leave($__internal_d5e044335362b76f6ce9db7cfa026f77836db37ee7989b4f19f525edbe1cc058_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3e3ab3c58471480272ed4d050c6c8460077dccfa8bc2cda6ee45a46a7fc276f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e3ab3c58471480272ed4d050c6c8460077dccfa8bc2cda6ee45a46a7fc276f->enter($__internal_a3e3ab3c58471480272ed4d050c6c8460077dccfa8bc2cda6ee45a46a7fc276f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

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
        
        $__internal_a3e3ab3c58471480272ed4d050c6c8460077dccfa8bc2cda6ee45a46a7fc276f->leave($__internal_a3e3ab3c58471480272ed4d050c6c8460077dccfa8bc2cda6ee45a46a7fc276f_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08062bb08077a6dd0dce424a8ced8143e3fb689d56d132ba115280dcb351e996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08062bb08077a6dd0dce424a8ced8143e3fb689d56d132ba115280dcb351e996->enter($__internal_08062bb08077a6dd0dce424a8ced8143e3fb689d56d132ba115280dcb351e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

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
        
        $__internal_08062bb08077a6dd0dce424a8ced8143e3fb689d56d132ba115280dcb351e996->leave($__internal_08062bb08077a6dd0dce424a8ced8143e3fb689d56d132ba115280dcb351e996_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_add0ea7548d02643750ec9d0a62dd27d072ae87eb533b226a8f1de8d370a4d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add0ea7548d02643750ec9d0a62dd27d072ae87eb533b226a8f1de8d370a4d69->enter($__internal_add0ea7548d02643750ec9d0a62dd27d072ae87eb533b226a8f1de8d370a4d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 89
        echo "
        <body class=\"hold-transition skin-blue sidebar-mini\">
            <div class=\"wrapper\">
                <header class=\"main-header\">
                    <!-- Logo -->
                    <a href=\"#\" class=\"logo\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        
                        <!-- logo for regular state and mobile devices -->
                        <span class=\"logo-lg\"><b>LIMS</b></span>
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
                               
                                <!-- User Account: style can be found in dropdown.less -->
                                <li class=\"dropdown user user-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                                        <span class=\"hidden-xs\">";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "  </span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header\">
                                            <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            <p>
                                                ";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "  - Admin
                                                <small>Membere depuis Nov. 2012</small>
                                            </p>
                                        </li>
                                        <!-- Menu Body -->
                                       
                                        <!-- Menu Footer-->
                                        <li class=\"user-footer\">
                                            <div class=\"pull-left\">
                                                <a href=\"";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo " \" class=\"btn btn-default btn-flat\">Profil</a>
                                            </div>
                                            <div class=\"pull-right\">
                                                <a href=\"#\" class=\"btn btn-default btn-flat\">Deconexion</a>
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
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                            </div>
                            <div class=\"pull-left info\">
                                <p>Lidrissi Hamid</p>
                                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                            </div>
                        </div>
                        <!-- search form -->
                        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Recherche...\">
                                <span class=\"input-group-btn\">
                                    <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                                </span>
                            </div>
                        </form>
                        <!-- /.search form -->
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class=\"sidebar-menu\">
                            <li class=\"header\">Menu Principale</li>
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
        // line 430
        $this->displayBlock('content', $context, $blocks);
        // line 433
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
        
        $__internal_add0ea7548d02643750ec9d0a62dd27d072ae87eb533b226a8f1de8d370a4d69->leave($__internal_add0ea7548d02643750ec9d0a62dd27d072ae87eb533b226a8f1de8d370a4d69_prof);

    }

    // line 430
    public function block_content($context, array $blocks = array())
    {
        $__internal_cd015f031fce609c97a6aa62dcc699dc84a97b900b6249d4711259a8402d3a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd015f031fce609c97a6aa62dcc699dc84a97b900b6249d4711259a8402d3a78->enter($__internal_cd015f031fce609c97a6aa62dcc699dc84a97b900b6249d4711259a8402d3a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 431
        echo "
                    ";
        
        $__internal_cd015f031fce609c97a6aa62dcc699dc84a97b900b6249d4711259a8402d3a78->leave($__internal_cd015f031fce609c97a6aa62dcc699dc84a97b900b6249d4711259a8402d3a78_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  662 => 431,  656 => 430,  634 => 433,  632 => 430,  470 => 271,  443 => 247,  429 => 238,  424 => 236,  414 => 231,  410 => 230,  347 => 170,  332 => 158,  317 => 146,  302 => 134,  287 => 122,  252 => 89,  246 => 88,  237 => 84,  232 => 82,  227 => 80,  222 => 78,  217 => 76,  212 => 74,  207 => 72,  202 => 70,  196 => 67,  191 => 65,  187 => 64,  182 => 62,  177 => 60,  171 => 57,  160 => 49,  157 => 48,  151 => 47,  134 => 36,  129 => 34,  124 => 32,  119 => 30,  114 => 28,  109 => 26,  104 => 24,  98 => 21,  89 => 15,  83 => 11,  77 => 10,  65 => 8,  54 => 449,  52 => 88,  48 => 86,  46 => 47,  43 => 46,  41 => 10,  38 => 9,  36 => 8,  27 => 1,);
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
                        
                        <!-- logo for regular state and mobile devices -->
                        <span class=\"logo-lg\"><b>LIMS</b></span>
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
                               
                                <!-- User Account: style can be found in dropdown.less -->
                                <li class=\"dropdown user user-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <img src=\"{{ asset('dist/img/user2-160x160.jpg') }}\" class=\"user-image\" alt=\"User Image\">
                                        <span class=\"hidden-xs\">{{ user.nom }} {{ user.prenom }}  </span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header\">
                                            <img src=\"{{ asset('dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                            <p>
                                                {{ user.nom }} {{ user.prenom }}  - Admin
                                                <small>Membere depuis Nov. 2012</small>
                                            </p>
                                        </li>
                                        <!-- Menu Body -->
                                       
                                        <!-- Menu Footer-->
                                        <li class=\"user-footer\">
                                            <div class=\"pull-left\">
                                                <a href=\"{{ path('fos_user_profile_edit')  }} \" class=\"btn btn-default btn-flat\">Profil</a>
                                            </div>
                                            <div class=\"pull-right\">
                                                <a href=\"#\" class=\"btn btn-default btn-flat\">Deconexion</a>
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
                                <p>Lidrissi Hamid</p>
                                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                            </div>
                        </div>
                        <!-- search form -->
                        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Recherche...\">
                                <span class=\"input-group-btn\">
                                    <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                                </span>
                            </div>
                        </form>
                        <!-- /.search form -->
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class=\"sidebar-menu\">
                            <li class=\"header\">Menu Principale</li>
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
