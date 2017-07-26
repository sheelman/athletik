<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'preloder' => array($this, 'block_preloder'),
            'menu' => array($this, 'block_menu'),
            'title' => array($this, 'block_title'),
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'conexion' => array($this, 'block_conexion'),
            'register' => array($this, 'block_register'),
            'profile' => array($this, 'block_profile'),
            'letter' => array($this, 'block_letter'),
            'portfolio' => array($this, 'block_portfolio'),
            'resultat' => array($this, 'block_resultat'),
            'classement' => array($this, 'block_classement'),
            'admin' => array($this, 'block_admin'),
            'user' => array($this, 'block_user'),
            'contact' => array($this, 'block_contact'),
            'footer' => array($this, 'block_footer'),
            'color_switcher' => array($this, 'block_color_switcher'),
            'conexion_switcher' => array($this, 'block_conexion_switcher'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43526a522f8c029a9d91dd2b6bf28b8fe2b7e2bd5ac273bc745fbeef5c3072fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43526a522f8c029a9d91dd2b6bf28b8fe2b7e2bd5ac273bc745fbeef5c3072fd->enter($__internal_43526a522f8c029a9d91dd2b6bf28b8fe2b7e2bd5ac273bc745fbeef5c3072fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7cc68fb8cf49ea73d340af9f7179f17ff8c1f623bcc8a54044a778474e27bfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc68fb8cf49ea73d340af9f7179f17ff8c1f623bcc8a54044a778474e27bfdf->enter($__internal_7cc68fb8cf49ea73d340af9f7179f17ff8c1f623bcc8a54044a778474e27bfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "

    <body>

        ";
        // line 38
        $this->displayBlock('preloder', $context, $blocks);
        // line 54
        echo " 

        ";
        // line 56
        $this->displayBlock('menu', $context, $blocks);
        // line 86
        echo "
        ";
        // line 87
        $this->displayBlock('title', $context, $blocks);
        // line 105
        echo "   
                    <div id=\"time_countdown\" class=\"time-count-container\">
                        ";
        // line 107
        $this->displayBlock('timer', $context, $blocks);
        // line 164
        echo "
                    ";
        // line 165
        $this->displayBlock('fin', $context, $blocks);
        // line 170
        echo "
                </div><!-- /.container -->
            </div><!-- /.pattern -->\t\t
        </section><!-- /#page-top -->
        <!-- Page Top Section  End -->

";
        // line 176
        $this->displayBlock('conexion', $context, $blocks);
        // line 177
        $this->displayBlock('register', $context, $blocks);
        // line 178
        $this->displayBlock('profile', $context, $blocks);
        // line 179
        $this->displayBlock('letter', $context, $blocks);
        // line 180
        $this->displayBlock('portfolio', $context, $blocks);
        // line 181
        $this->displayBlock('resultat', $context, $blocks);
        // line 182
        $this->displayBlock('classement', $context, $blocks);
        // line 183
        $this->displayBlock('admin', $context, $blocks);
        // line 184
        $this->displayBlock('user', $context, $blocks);
        // line 185
        echo "
";
        // line 186
        $this->displayBlock('contact', $context, $blocks);
        // line 274
        echo "
";
        // line 275
        $this->displayBlock('footer', $context, $blocks);
        // line 284
        echo "
";
        // line 285
        $this->displayBlock('color_switcher', $context, $blocks);
        // line 308
        echo "
";
        // line 309
        $this->displayBlock('conexion_switcher', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('javascripts', $context, $blocks);
        // line 361
        echo "</body>
</html>
";
        
        $__internal_43526a522f8c029a9d91dd2b6bf28b8fe2b7e2bd5ac273bc745fbeef5c3072fd->leave($__internal_43526a522f8c029a9d91dd2b6bf28b8fe2b7e2bd5ac273bc745fbeef5c3072fd_prof);

        
        $__internal_7cc68fb8cf49ea73d340af9f7179f17ff8c1f623bcc8a54044a778474e27bfdf->leave($__internal_7cc68fb8cf49ea73d340af9f7179f17ff8c1f623bcc8a54044a778474e27bfdf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e28842f55653d3193a198799e954238e61cfd0d16aaf7a41a8e69c8b5107e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e28842f55653d3193a198799e954238e61cfd0d16aaf7a41a8e69c8b5107e73->enter($__internal_1e28842f55653d3193a198799e954238e61cfd0d16aaf7a41a8e69c8b5107e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c0799d54b2097a664a0251021027caa2bb6829e1d2a2119a54ae7f8d8597d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0799d54b2097a664a0251021027caa2bb6829e1d2a2119a54ae7f8d8597d54->enter($__internal_0c0799d54b2097a664a0251021027caa2bb6829e1d2a2119a54ae7f8d8597d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "   
        <head>
            <meta charset=\"UTF-8\" />
            <title>Athletik Les 1000 pas</title>

            <meta name=\"description\" content=\"Transformation Kite\" >
            <meta name=\"author\" content=\"sheelman\">

            <!-- Mobile Specific Meta -->
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

            <!-- Bootstrap  -->
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- icon fonts font Awesome -->
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Custom Styles -->
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/4-col-portfolio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


            <!--Color Style -->
            <link rel=\"stylesheet\" type=\"text/css\" id=\"color\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/colors/default.css"), "html", null, true);
        echo "\"/>

            <!--[if lt IE 9]>
            <script src=\"assets/js/html5shiv.js\"></script>
            <![endif]-->
        </head>
    ";
        
        $__internal_0c0799d54b2097a664a0251021027caa2bb6829e1d2a2119a54ae7f8d8597d54->leave($__internal_0c0799d54b2097a664a0251021027caa2bb6829e1d2a2119a54ae7f8d8597d54_prof);

        
        $__internal_1e28842f55653d3193a198799e954238e61cfd0d16aaf7a41a8e69c8b5107e73->leave($__internal_1e28842f55653d3193a198799e954238e61cfd0d16aaf7a41a8e69c8b5107e73_prof);

    }

    // line 38
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_947360ef6794d571e68edf5a8c84779807067d5cfb92acc6a01ff3b244a1044f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_947360ef6794d571e68edf5a8c84779807067d5cfb92acc6a01ff3b244a1044f->enter($__internal_947360ef6794d571e68edf5a8c84779807067d5cfb92acc6a01ff3b244a1044f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_d95305065cd614780adb9c3b38d4b42f2d675b663bb767dcbaa79bfd6b08cce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95305065cd614780adb9c3b38d4b42f2d675b663bb767dcbaa79bfd6b08cce6->enter($__internal_d95305065cd614780adb9c3b38d4b42f2d675b663bb767dcbaa79bfd6b08cce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        echo "       
            <!-- Preloader -->
            <div id=\"preloader\">
                <div id=\"loader\">
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"lading\"></div>
                </div>
            </div><!-- /#preloader -->
            <!-- Preloader End-->
        ";
        
        $__internal_d95305065cd614780adb9c3b38d4b42f2d675b663bb767dcbaa79bfd6b08cce6->leave($__internal_d95305065cd614780adb9c3b38d4b42f2d675b663bb767dcbaa79bfd6b08cce6_prof);

        
        $__internal_947360ef6794d571e68edf5a8c84779807067d5cfb92acc6a01ff3b244a1044f->leave($__internal_947360ef6794d571e68edf5a8c84779807067d5cfb92acc6a01ff3b244a1044f_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5db44b261c3234242b3ae7bf825c1c1884da1dd7758cc5866537ab2f17b21daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db44b261c3234242b3ae7bf825c1c1884da1dd7758cc5866537ab2f17b21daf->enter($__internal_5db44b261c3234242b3ae7bf825c1c1884da1dd7758cc5866537ab2f17b21daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d8a88d85931bd797162de276a54ec048bc86f0cf217d75bdf8a86a7f27d1bb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a88d85931bd797162de276a54ec048bc86f0cf217d75bdf8a86a7f27d1bb1e->enter($__internal_d8a88d85931bd797162de276a54ec048bc86f0cf217d75bdf8a86a7f27d1bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 57
        echo "
            <!-- Main Menu -->
            <div id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">


                <div class=\"navbar-header\">
                    <!-- responsive navigation -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <i class=\"fa fa-bars\"></i>
                    </button> <!-- /.navbar-toggle -->

                </div> <!-- /.navbar-header -->

                <nav class=\"collapse navbar-collapse\">
                    <!-- Main navigation -->
                    <ul id=\"headernavigation\" class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("#page-top"), "html", null, true);
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("#lettre"), "html", null, true);
        echo "\">Lettre du président</a></li>
                        <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("#portfolio"), "html", null, true);
        echo "\">Portfolio</a></li>\t
                        <li><a href=\"#contact\">Contact</a></li>
                        <br/>
                        <li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resultat"), "html", null, true);
        echo "\">Résultat des courses</a></li>\t
                        <li><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("classement"), "html", null, true);
        echo "\">Classement Général</a></li>
                    </ul> <!-- /.nav .navbar-nav -->
                </nav> <!-- /.navbar-collapse  -->
            </div><!-- /#main-menu -->
            <!-- Main Menu End -->
        ";
        
        $__internal_d8a88d85931bd797162de276a54ec048bc86f0cf217d75bdf8a86a7f27d1bb1e->leave($__internal_d8a88d85931bd797162de276a54ec048bc86f0cf217d75bdf8a86a7f27d1bb1e_prof);

        
        $__internal_5db44b261c3234242b3ae7bf825c1c1884da1dd7758cc5866537ab2f17b21daf->leave($__internal_5db44b261c3234242b3ae7bf825c1c1884da1dd7758cc5866537ab2f17b21daf_prof);

    }

    // line 87
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c80b7fff4a109e776ef3957227aeecc6507f49953621ef5926b6cbaad9745f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c80b7fff4a109e776ef3957227aeecc6507f49953621ef5926b6cbaad9745f1->enter($__internal_8c80b7fff4a109e776ef3957227aeecc6507f49953621ef5926b6cbaad9745f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74e7e52594d100d30927b1a5a404c5a4ed3533c4128857f674a7c241f90679b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e7e52594d100d30927b1a5a404c5a4ed3533c4128857f674a7c241f90679b0->enter($__internal_74e7e52594d100d30927b1a5a404c5a4ed3533c4128857f674a7c241f90679b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "  
            <!-- Page Top Section -->
            <section id=\"page-top\" class=\"section-style\" data-background-image=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/runners-751853_1920.jpg"), "html", null, true);
        echo "\">
                <div class=\"pattern height-resize\">
                    <div class=\"container\">

                        <h1 class=\"site-title\">
                            Athletik
                        </h1><!-- /.site-title -->
                        <h3 class=\"section-name\">
                            <span>
                                Assossiation
                            </span>
                        </h3><!-- /.section-name -->
                        <h2 class=\"section-title\">
                            Les 1000 pas

                        </h2><!-- /.Section-title  -->
                    ";
        
        $__internal_74e7e52594d100d30927b1a5a404c5a4ed3533c4128857f674a7c241f90679b0->leave($__internal_74e7e52594d100d30927b1a5a404c5a4ed3533c4128857f674a7c241f90679b0_prof);

        
        $__internal_8c80b7fff4a109e776ef3957227aeecc6507f49953621ef5926b6cbaad9745f1->leave($__internal_8c80b7fff4a109e776ef3957227aeecc6507f49953621ef5926b6cbaad9745f1_prof);

    }

    // line 107
    public function block_timer($context, array $blocks = array())
    {
        $__internal_00a8f0834021c02d95899417dc4f3988d6f92e09dbc6892232f4757c19f652cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a8f0834021c02d95899417dc4f3988d6f92e09dbc6892232f4757c19f652cb->enter($__internal_00a8f0834021c02d95899417dc4f3988d6f92e09dbc6892232f4757c19f652cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_c556ce9d705faae819d8e3b2fb8cad51dd77fd1e63fa5b6a6c7737d3e03d9fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c556ce9d705faae819d8e3b2fb8cad51dd77fd1e63fa5b6a6c7737d3e03d9fde->enter($__internal_c556ce9d705faae819d8e3b2fb8cad51dd77fd1e63fa5b6a6c7737d3e03d9fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        echo "               


                            <div class=\"col-sm-3\">
                                <div class=\"time-box\">
                                    <div class=\"time-box-inner dash days_dash animated\" data-animation=\"rollIn\" data-animation-delay=\"300\">
                                        <span class=\"time-number\">
                                            <span class=\"digit\">0</span>
                                            <span class=\"digit\">0</span>
                                        </span>
                                        <span class=\"time-name\">Days</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-3\">
                                <div class=\"time-box\">
                                    <div class=\"time-box-inner dash hours_dash animated\" data-animation=\"rollIn\" data-animation-delay=\"600\">
                                        <span class=\"time-number\">
                                            <span class=\"digit\">0</span>
                                            <span class=\"digit\">0</span>\t
                                        </span>
                                        <span class=\"time-name\">Hours</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-3\">
                                <div class=\"time-box\">
                                    <div class=\"time-box-inner dash minutes_dash animated\" data-animation=\"rollIn\" data-animation-delay=\"900\">
                                        <span class=\"time-number\">
                                            <span class=\"digit\">0</span>
                                            <span class=\"digit\">0</span>                                       
                                        </span>
                                        <span class=\"time-name\">Minutes</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-3\">
                                <div class=\"time-box\">
                                    <div class=\"time-box-inner dash seconds_dash animated\" data-animation=\"rollIn\" data-animation-delay=\"1200\">
                                        <span class=\"time-number\">
                                            <span class=\"digit\">0</span>
                                            <span class=\"digit\">0</span>
                                        </span>
                                        <span class=\"time-name\">Seconds</span>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.time-count-container -->

                        <p class=\"time-until\">
                            <span>Pour votre prochaine course</span>
                        </p><!-- /.time-until -->
                    ";
        
        $__internal_c556ce9d705faae819d8e3b2fb8cad51dd77fd1e63fa5b6a6c7737d3e03d9fde->leave($__internal_c556ce9d705faae819d8e3b2fb8cad51dd77fd1e63fa5b6a6c7737d3e03d9fde_prof);

        
        $__internal_00a8f0834021c02d95899417dc4f3988d6f92e09dbc6892232f4757c19f652cb->leave($__internal_00a8f0834021c02d95899417dc4f3988d6f92e09dbc6892232f4757c19f652cb_prof);

    }

    // line 165
    public function block_fin($context, array $blocks = array())
    {
        $__internal_2a79990d747b3a0fb93f714f9b619bbd7372724d40e1d7f8c2ab53a839e54e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a79990d747b3a0fb93f714f9b619bbd7372724d40e1d7f8c2ab53a839e54e38->enter($__internal_2a79990d747b3a0fb93f714f9b619bbd7372724d40e1d7f8c2ab53a839e54e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_f75d0d4f85f4328e11c0b84bdf011b190f89febd8f8d652f72cda7c9b3c9e268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75d0d4f85f4328e11c0b84bdf011b190f89febd8f8d652f72cda7c9b3c9e268->enter($__internal_f75d0d4f85f4328e11c0b84bdf011b190f89febd8f8d652f72cda7c9b3c9e268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 166
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->
                    ";
        
        $__internal_f75d0d4f85f4328e11c0b84bdf011b190f89febd8f8d652f72cda7c9b3c9e268->leave($__internal_f75d0d4f85f4328e11c0b84bdf011b190f89febd8f8d652f72cda7c9b3c9e268_prof);

        
        $__internal_2a79990d747b3a0fb93f714f9b619bbd7372724d40e1d7f8c2ab53a839e54e38->leave($__internal_2a79990d747b3a0fb93f714f9b619bbd7372724d40e1d7f8c2ab53a839e54e38_prof);

    }

    // line 176
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_06c40d2de51ab1642f581cc2becdea3ebb895f16a63d344bee5fc435b2b2eb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c40d2de51ab1642f581cc2becdea3ebb895f16a63d344bee5fc435b2b2eb4f->enter($__internal_06c40d2de51ab1642f581cc2becdea3ebb895f16a63d344bee5fc435b2b2eb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_c43bcd808f26879d7c7cd938c2bfeb78bfcfa5d130678acf46302859fc07a288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43bcd808f26879d7c7cd938c2bfeb78bfcfa5d130678acf46302859fc07a288->enter($__internal_c43bcd808f26879d7c7cd938c2bfeb78bfcfa5d130678acf46302859fc07a288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        
        $__internal_c43bcd808f26879d7c7cd938c2bfeb78bfcfa5d130678acf46302859fc07a288->leave($__internal_c43bcd808f26879d7c7cd938c2bfeb78bfcfa5d130678acf46302859fc07a288_prof);

        
        $__internal_06c40d2de51ab1642f581cc2becdea3ebb895f16a63d344bee5fc435b2b2eb4f->leave($__internal_06c40d2de51ab1642f581cc2becdea3ebb895f16a63d344bee5fc435b2b2eb4f_prof);

    }

    // line 177
    public function block_register($context, array $blocks = array())
    {
        $__internal_8ee3ed233d76536e8687b0a1dbe1d5c09df83eae58535882aed1be5959a940c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee3ed233d76536e8687b0a1dbe1d5c09df83eae58535882aed1be5959a940c9->enter($__internal_8ee3ed233d76536e8687b0a1dbe1d5c09df83eae58535882aed1be5959a940c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_ed0ef7d7a390424497e60f216e0f8d624772ecb8426bea41630b29518caa94a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0ef7d7a390424497e60f216e0f8d624772ecb8426bea41630b29518caa94a5->enter($__internal_ed0ef7d7a390424497e60f216e0f8d624772ecb8426bea41630b29518caa94a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_ed0ef7d7a390424497e60f216e0f8d624772ecb8426bea41630b29518caa94a5->leave($__internal_ed0ef7d7a390424497e60f216e0f8d624772ecb8426bea41630b29518caa94a5_prof);

        
        $__internal_8ee3ed233d76536e8687b0a1dbe1d5c09df83eae58535882aed1be5959a940c9->leave($__internal_8ee3ed233d76536e8687b0a1dbe1d5c09df83eae58535882aed1be5959a940c9_prof);

    }

    // line 178
    public function block_profile($context, array $blocks = array())
    {
        $__internal_3c257cb0c3a235673d0f3f1c2b7ef7bbaa2c8a248d98f20c729e29a66c05674c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c257cb0c3a235673d0f3f1c2b7ef7bbaa2c8a248d98f20c729e29a66c05674c->enter($__internal_3c257cb0c3a235673d0f3f1c2b7ef7bbaa2c8a248d98f20c729e29a66c05674c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_35472538cdcd19f1e4512660dace5283433b4fbed019f5ef4207ea25fa0bb068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35472538cdcd19f1e4512660dace5283433b4fbed019f5ef4207ea25fa0bb068->enter($__internal_35472538cdcd19f1e4512660dace5283433b4fbed019f5ef4207ea25fa0bb068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_35472538cdcd19f1e4512660dace5283433b4fbed019f5ef4207ea25fa0bb068->leave($__internal_35472538cdcd19f1e4512660dace5283433b4fbed019f5ef4207ea25fa0bb068_prof);

        
        $__internal_3c257cb0c3a235673d0f3f1c2b7ef7bbaa2c8a248d98f20c729e29a66c05674c->leave($__internal_3c257cb0c3a235673d0f3f1c2b7ef7bbaa2c8a248d98f20c729e29a66c05674c_prof);

    }

    // line 179
    public function block_letter($context, array $blocks = array())
    {
        $__internal_71eca741e846cb10c15cdb73a4d63477ea31d27602f0424c849573ac89631d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71eca741e846cb10c15cdb73a4d63477ea31d27602f0424c849573ac89631d2d->enter($__internal_71eca741e846cb10c15cdb73a4d63477ea31d27602f0424c849573ac89631d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_3d3ebd38ebe0b0edab0b58fa69f72c5393dd642ab6c34c5ae89000f877972633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3ebd38ebe0b0edab0b58fa69f72c5393dd642ab6c34c5ae89000f877972633->enter($__internal_3d3ebd38ebe0b0edab0b58fa69f72c5393dd642ab6c34c5ae89000f877972633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_3d3ebd38ebe0b0edab0b58fa69f72c5393dd642ab6c34c5ae89000f877972633->leave($__internal_3d3ebd38ebe0b0edab0b58fa69f72c5393dd642ab6c34c5ae89000f877972633_prof);

        
        $__internal_71eca741e846cb10c15cdb73a4d63477ea31d27602f0424c849573ac89631d2d->leave($__internal_71eca741e846cb10c15cdb73a4d63477ea31d27602f0424c849573ac89631d2d_prof);

    }

    // line 180
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_b46f8efe9f8c302801b2e585a687cb91d0dceec944fcb0824a34b870389af997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46f8efe9f8c302801b2e585a687cb91d0dceec944fcb0824a34b870389af997->enter($__internal_b46f8efe9f8c302801b2e585a687cb91d0dceec944fcb0824a34b870389af997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_3b8a5eb87a65243583afb91af3137af7232184216161bb15f2208e4a895f2a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8a5eb87a65243583afb91af3137af7232184216161bb15f2208e4a895f2a59->enter($__internal_3b8a5eb87a65243583afb91af3137af7232184216161bb15f2208e4a895f2a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_3b8a5eb87a65243583afb91af3137af7232184216161bb15f2208e4a895f2a59->leave($__internal_3b8a5eb87a65243583afb91af3137af7232184216161bb15f2208e4a895f2a59_prof);

        
        $__internal_b46f8efe9f8c302801b2e585a687cb91d0dceec944fcb0824a34b870389af997->leave($__internal_b46f8efe9f8c302801b2e585a687cb91d0dceec944fcb0824a34b870389af997_prof);

    }

    // line 181
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_41a2861f1c441dc1c693f46706344588ba65b2c7bd4d26b7208ca17ad5853fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a2861f1c441dc1c693f46706344588ba65b2c7bd4d26b7208ca17ad5853fe2->enter($__internal_41a2861f1c441dc1c693f46706344588ba65b2c7bd4d26b7208ca17ad5853fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_414e70cf9d45a48a06bf93ee58e89ebc2f377852ef3554bd5f1195e16b0890ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414e70cf9d45a48a06bf93ee58e89ebc2f377852ef3554bd5f1195e16b0890ba->enter($__internal_414e70cf9d45a48a06bf93ee58e89ebc2f377852ef3554bd5f1195e16b0890ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_414e70cf9d45a48a06bf93ee58e89ebc2f377852ef3554bd5f1195e16b0890ba->leave($__internal_414e70cf9d45a48a06bf93ee58e89ebc2f377852ef3554bd5f1195e16b0890ba_prof);

        
        $__internal_41a2861f1c441dc1c693f46706344588ba65b2c7bd4d26b7208ca17ad5853fe2->leave($__internal_41a2861f1c441dc1c693f46706344588ba65b2c7bd4d26b7208ca17ad5853fe2_prof);

    }

    // line 182
    public function block_classement($context, array $blocks = array())
    {
        $__internal_5d3ab95457c3d59fb7aed94e212b8ac8bcf0894a18265e9a7194169071d7d884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3ab95457c3d59fb7aed94e212b8ac8bcf0894a18265e9a7194169071d7d884->enter($__internal_5d3ab95457c3d59fb7aed94e212b8ac8bcf0894a18265e9a7194169071d7d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_a5e44f7de0c011a1841648284bb562c2d6214f9045bf73a6818b88c037754d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e44f7de0c011a1841648284bb562c2d6214f9045bf73a6818b88c037754d96->enter($__internal_a5e44f7de0c011a1841648284bb562c2d6214f9045bf73a6818b88c037754d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_a5e44f7de0c011a1841648284bb562c2d6214f9045bf73a6818b88c037754d96->leave($__internal_a5e44f7de0c011a1841648284bb562c2d6214f9045bf73a6818b88c037754d96_prof);

        
        $__internal_5d3ab95457c3d59fb7aed94e212b8ac8bcf0894a18265e9a7194169071d7d884->leave($__internal_5d3ab95457c3d59fb7aed94e212b8ac8bcf0894a18265e9a7194169071d7d884_prof);

    }

    // line 183
    public function block_admin($context, array $blocks = array())
    {
        $__internal_a87a6966f25312990cb4dfb1722d0cfb4aef1b4b75467de5a0562685d06463ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87a6966f25312990cb4dfb1722d0cfb4aef1b4b75467de5a0562685d06463ba->enter($__internal_a87a6966f25312990cb4dfb1722d0cfb4aef1b4b75467de5a0562685d06463ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_91017e287fd663b5ed3f603988f3a6939cd3da896017016553072fafeddf4f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91017e287fd663b5ed3f603988f3a6939cd3da896017016553072fafeddf4f27->enter($__internal_91017e287fd663b5ed3f603988f3a6939cd3da896017016553072fafeddf4f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        
        $__internal_91017e287fd663b5ed3f603988f3a6939cd3da896017016553072fafeddf4f27->leave($__internal_91017e287fd663b5ed3f603988f3a6939cd3da896017016553072fafeddf4f27_prof);

        
        $__internal_a87a6966f25312990cb4dfb1722d0cfb4aef1b4b75467de5a0562685d06463ba->leave($__internal_a87a6966f25312990cb4dfb1722d0cfb4aef1b4b75467de5a0562685d06463ba_prof);

    }

    // line 184
    public function block_user($context, array $blocks = array())
    {
        $__internal_f64639482a0766079583e0165415e2e8529540021c755e01f91666078fc120aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64639482a0766079583e0165415e2e8529540021c755e01f91666078fc120aa->enter($__internal_f64639482a0766079583e0165415e2e8529540021c755e01f91666078fc120aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        $__internal_ae0c69cbd1f012751b787c081409f45700e5c9d3c003b5e4ca663b48dfcf645d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0c69cbd1f012751b787c081409f45700e5c9d3c003b5e4ca663b48dfcf645d->enter($__internal_ae0c69cbd1f012751b787c081409f45700e5c9d3c003b5e4ca663b48dfcf645d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        
        $__internal_ae0c69cbd1f012751b787c081409f45700e5c9d3c003b5e4ca663b48dfcf645d->leave($__internal_ae0c69cbd1f012751b787c081409f45700e5c9d3c003b5e4ca663b48dfcf645d_prof);

        
        $__internal_f64639482a0766079583e0165415e2e8529540021c755e01f91666078fc120aa->leave($__internal_f64639482a0766079583e0165415e2e8529540021c755e01f91666078fc120aa_prof);

    }

    // line 186
    public function block_contact($context, array $blocks = array())
    {
        $__internal_d6f0fa7b40008ced3e605536b38df5c9c6b91fe4fd404e833140700d67dc4407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f0fa7b40008ced3e605536b38df5c9c6b91fe4fd404e833140700d67dc4407->enter($__internal_d6f0fa7b40008ced3e605536b38df5c9c6b91fe4fd404e833140700d67dc4407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_63b7461b94501d6b95cbb94dcf92128461f7664d801ae21baaf514c8a0b3b074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b7461b94501d6b95cbb94dcf92128461f7664d801ae21baaf514c8a0b3b074->enter($__internal_63b7461b94501d6b95cbb94dcf92128461f7664d801ae21baaf514c8a0b3b074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        echo "       
    <!-- Contact Section -->
    <section id=\"contact\" class=\"section-style\" data-background-image=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/silhouette-1159234_1920.jpg"), "html", null, true);
        echo "\">
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Contact
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    Entrer en contact 
                </h2><!-- /.Section-title  -->
                <p class=\"section-description\">
                    «Si vous courez, vous êtes un coureur. Peu importe à quelle vitesse ou quelle distance. Ce n'est pas grave si aujourd'hui est votre premier jour ou si vous courez depuis vingt ans. Il n'existe aucun test à passer, aucun permis à gagner, pas de carte de membre à obtenir. Vous n’avez qu’à courir. »
                    - John Bingham
                </p><!-- /.section-description -->

                <form id=\"contact-form\" action=\"#\" method=\"post\" class=\"clearfix\">
                    <div class=\"contact-box-hide\">
                        <div class=\"col-sm-6\">
                            <input type=\"text\"  class=\"form-control\" id=\"first_name\" name=\"first_name\" required placeholder=\"Prénom\">
                            <span class=\"first-name-error\"></span>
                        </div>
                        <div class=\"col-sm-6\">
                            <input type=\"text\"  class=\"form-control\" id=\"last_name\" name=\"last_name\" required placeholder=\"Nom\">
                            <span class=\"last-name-error\"></span>
                        </div>
                        <div class=\"col-sm-6\">
                            <input type=\"email\" class=\"form-control\"  id=\"contact_email\" name=\"contact_email\" required placeholder=\"Email\">
                            <span class=\"contact-email-error\"></span>
                        </div>
                        <div class=\"col-sm-6\">
                            <input type=\"text\"  class=\"form-control\" id=\"subject\" name=\"contact_subject\" required placeholder=\"Subjet\">
                            <span class=\"contact-subject-error\"></span>
                        </div>
                        <div class=\"col-sm-10\">
                            <textarea class=\"form-control\" rows=\"5\" id=\"message\" name=\"message\" required placeholder=\"Message\"></textarea>
                            <span class=\"contact-message-error\"></span>
                        </div>
                        <div class=\"col-sm-2\">
                            <button id=\"contact-submit\" class=\"btn custom-btn col-xs-12\" type=\"submit\" name=\"submit\"><i class=\"fa fa-thumbs-o-up \"></i></button>
                            <span id=\"contact-loading\" class=\"btn custom-btn col-xs-12\"> <i class=\"fa fa-refresh fa-spin\"></i> </span>
                        </div>
                    </div><!-- /.contact-box-hide -->
                    <div class=\"contact-message\"></div>

                </form><!-- /#contact-form -->

                <div class=\"social-btn-container\">
                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"facebook-btn\">
                            <i class=\"fa fa-facebook\"></i></a>
                    </span><!-- /.social-btn-box -->

                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"twitter-btn\"><i class=\"fa fa-twitter\"></i></a>
                    </span><!-- /.social-btn-box -->

                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"linkedin-btn\"><i class=\"fa fa-linkedin\"></i></a>
                    </span><!-- /.social-btn-box -->

                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"google-plus-btn\"><i class=\"fa fa-google-plus\"></i></a>
                    </span><!-- /.social-btn-box -->


                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"youtube-btn\"><i class=\"fa fa-youtube\"></i></a>
                    </span><!-- /.social-btn-box -->



                </div><!-- /.social-btn-container -->



                <div class=\"next-section\">
                    <a class=\"go-to-page-top\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#contact -->
    <!-- Contact Section End -->
";
        
        $__internal_63b7461b94501d6b95cbb94dcf92128461f7664d801ae21baaf514c8a0b3b074->leave($__internal_63b7461b94501d6b95cbb94dcf92128461f7664d801ae21baaf514c8a0b3b074_prof);

        
        $__internal_d6f0fa7b40008ced3e605536b38df5c9c6b91fe4fd404e833140700d67dc4407->leave($__internal_d6f0fa7b40008ced3e605536b38df5c9c6b91fe4fd404e833140700d67dc4407_prof);

    }

    // line 275
    public function block_footer($context, array $blocks = array())
    {
        $__internal_55ea70514db4f578191152cbb3c9bd6c23194e8066f2b36aabe88ac9255b6de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ea70514db4f578191152cbb3c9bd6c23194e8066f2b36aabe88ac9255b6de5->enter($__internal_55ea70514db4f578191152cbb3c9bd6c23194e8066f2b36aabe88ac9255b6de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_81fc2d8a40309f92da1c54d1ffed526305d371e1ba3c988300db0e0549c2866b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fc2d8a40309f92da1c54d1ffed526305d371e1ba3c988300db0e0549c2866b->enter($__internal_81fc2d8a40309f92da1c54d1ffed526305d371e1ba3c988300db0e0549c2866b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 276
        echo "    <!-- Footer Section -->
    <footer id=\"footer-section\">
        <p class=\"copyright\">
            &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
        </p>
    </footer>
    <!-- Footer Section End -->
";
        
        $__internal_81fc2d8a40309f92da1c54d1ffed526305d371e1ba3c988300db0e0549c2866b->leave($__internal_81fc2d8a40309f92da1c54d1ffed526305d371e1ba3c988300db0e0549c2866b_prof);

        
        $__internal_55ea70514db4f578191152cbb3c9bd6c23194e8066f2b36aabe88ac9255b6de5->leave($__internal_55ea70514db4f578191152cbb3c9bd6c23194e8066f2b36aabe88ac9255b6de5_prof);

    }

    // line 285
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_84bdbcc55908e4b01ad30a9ec255a5f2f52508417ce46e198727bfa67a51855a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bdbcc55908e4b01ad30a9ec255a5f2f52508417ce46e198727bfa67a51855a->enter($__internal_84bdbcc55908e4b01ad30a9ec255a5f2f52508417ce46e198727bfa67a51855a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_65d6645e168875285264bd6c54f6e2994871955538126d01b6e158946a547f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d6645e168875285264bd6c54f6e2994871955538126d01b6e158946a547f08->enter($__internal_65d6645e168875285264bd6c54f6e2994871955538126d01b6e158946a547f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        // line 286
        echo "    <!-- Color Variation Switcher  -->
    <div id=\"color-style-switcher\">
        <div>

            <h3>Color palette</h3>
            <ul class=\"colors\">
                <li><a class=\"color1 active\" href=\"#\"></a></li>
                <li><a class=\"color2\" href=\"#\"></a></li>
                <li><a class=\"color3\" href=\"#\"></a></li>
                <li><a class=\"color4\" href=\"#\"></a></li>
                <li><a class=\"color5\" href=\"#\"></a></li>
                <li><a class=\"color6\" href=\"#\"></a></li>
                <li><a class=\"color7\" href=\"#\"></a></li>
                <li><a class=\"color8\" href=\"#\"></a></li>
            </ul>
        </div>\t  
        <div class=\"bottom\">
            <a href=\"#\" class=\"settings\"><i class=\"fa fa-cogs icon-2x\"></i></a>
        </div>
    </div>
    <!-- Color Variation Switcher End -->
";
        
        $__internal_65d6645e168875285264bd6c54f6e2994871955538126d01b6e158946a547f08->leave($__internal_65d6645e168875285264bd6c54f6e2994871955538126d01b6e158946a547f08_prof);

        
        $__internal_84bdbcc55908e4b01ad30a9ec255a5f2f52508417ce46e198727bfa67a51855a->leave($__internal_84bdbcc55908e4b01ad30a9ec255a5f2f52508417ce46e198727bfa67a51855a_prof);

    }

    // line 309
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_3e6dc400cc4f7a5b91f278cd1a5a90db0e797110cb21990bc699ead2488a0e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6dc400cc4f7a5b91f278cd1a5a90db0e797110cb21990bc699ead2488a0e13->enter($__internal_3e6dc400cc4f7a5b91f278cd1a5a90db0e797110cb21990bc699ead2488a0e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_cdcd0b6f0c4c595fb049d52214ee6ec8b7ab262718cf7521b9cbbf625b512276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcd0b6f0c4c595fb049d52214ee6ec8b7ab262718cf7521b9cbbf625b512276->enter($__internal_cdcd0b6f0c4c595fb049d52214ee6ec8b7ab262718cf7521b9cbbf625b512276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "               
    <!-- conexion Switcher  -->
    <section id=\"conexion\">
        <div>

            <h3>Conexion</h3>


            <div class=\"menu\">
                <div>
                    ";
        // line 319
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 320
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 321
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 322
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 325
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 327
        echo "                </div>
                <br/>
                <a href=\"";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
                <br/>
                <a href=\"";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Profile</a>
            ";
        // line 332
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 333
            echo "                <br/>
                <a href=\"";
            // line 334
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("master");
            echo "\">Admin</a>
            ";
        }
        // line 336
        echo "            <br/>
                <a href=\"";
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member");
        echo "\">Member</a>
            </div>
        </div>
        <div class=\"bottom\">
            <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
        </div>
    </section>
    <!-- Conexion Switcher End -->
";
        
        $__internal_cdcd0b6f0c4c595fb049d52214ee6ec8b7ab262718cf7521b9cbbf625b512276->leave($__internal_cdcd0b6f0c4c595fb049d52214ee6ec8b7ab262718cf7521b9cbbf625b512276_prof);

        
        $__internal_3e6dc400cc4f7a5b91f278cd1a5a90db0e797110cb21990bc699ead2488a0e13->leave($__internal_3e6dc400cc4f7a5b91f278cd1a5a90db0e797110cb21990bc699ead2488a0e13_prof);

    }

    // line 347
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_adb9f487e58b63d3de59376553ad3580fcf64c7e423ce2414007337a6aa5f0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb9f487e58b63d3de59376553ad3580fcf64c7e423ce2414007337a6aa5f0e9->enter($__internal_adb9f487e58b63d3de59376553ad3580fcf64c7e423ce2414007337a6aa5f0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_35aaf200e100239aae275637d3215cd6a14585e2eecd454b3d4ae17c3cc3bc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35aaf200e100239aae275637d3215cd6a14585e2eecd454b3d4ae17c3cc3bc36->enter($__internal_35aaf200e100239aae275637d3215cd6a14585e2eecd454b3d4ae17c3cc3bc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 348
        echo "    <!-- jQuery Library -->      
    <script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Modernizr js -->
    <script type=\"text/javascript\" src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.8.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Plugins -->
    <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom JavaScript Functions -->
    <script type=\"text/javascript\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>
    <!-- Color Style Switcher -->
    <script type=\"text/javascript\" src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/switcher.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_35aaf200e100239aae275637d3215cd6a14585e2eecd454b3d4ae17c3cc3bc36->leave($__internal_35aaf200e100239aae275637d3215cd6a14585e2eecd454b3d4ae17c3cc3bc36_prof);

        
        $__internal_adb9f487e58b63d3de59376553ad3580fcf64c7e423ce2414007337a6aa5f0e9->leave($__internal_adb9f487e58b63d3de59376553ad3580fcf64c7e423ce2414007337a6aa5f0e9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  892 => 359,  887 => 357,  882 => 355,  877 => 353,  872 => 351,  867 => 349,  864 => 348,  855 => 347,  836 => 337,  833 => 336,  828 => 334,  825 => 333,  823 => 332,  819 => 331,  814 => 329,  810 => 327,  802 => 325,  796 => 322,  792 => 321,  787 => 320,  785 => 319,  765 => 309,  734 => 286,  725 => 285,  708 => 276,  699 => 275,  603 => 188,  591 => 186,  574 => 184,  557 => 183,  540 => 182,  523 => 181,  506 => 180,  489 => 179,  472 => 178,  455 => 177,  438 => 176,  425 => 166,  416 => 165,  342 => 107,  315 => 89,  303 => 87,  287 => 80,  283 => 79,  277 => 76,  273 => 75,  269 => 74,  250 => 57,  241 => 56,  207 => 38,  190 => 27,  183 => 23,  179 => 22,  173 => 19,  167 => 16,  144 => 3,  132 => 361,  130 => 347,  127 => 346,  125 => 309,  122 => 308,  120 => 285,  117 => 284,  115 => 275,  112 => 274,  110 => 186,  107 => 185,  105 => 184,  103 => 183,  101 => 182,  99 => 181,  97 => 180,  95 => 179,  93 => 178,  91 => 177,  89 => 176,  81 => 170,  79 => 165,  76 => 164,  74 => 107,  70 => 105,  68 => 87,  65 => 86,  63 => 56,  59 => 54,  57 => 38,  51 => 34,  49 => 3,  45 => 1,);
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
    {% block head %}   
        <head>
            <meta charset=\"UTF-8\" />
            <title>Athletik Les 1000 pas</title>

            <meta name=\"description\" content=\"Transformation Kite\" >
            <meta name=\"author\" content=\"sheelman\">

            <!-- Mobile Specific Meta -->
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

            <!-- Bootstrap  -->
            <link href=\"{{ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

            <!-- icon fonts font Awesome -->
            <link href=\"{{ asset('assets/css/font-awesome.min.css')}}\" rel=\"stylesheet\">

            <!-- Custom Styles -->
            <link href=\"{{ asset('assets/css/4-col-portfolio.css')}}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/css/style.css')}}\" rel=\"stylesheet\">


            <!--Color Style -->
            <link rel=\"stylesheet\" type=\"text/css\" id=\"color\" href=\"{{ asset('assets/css/colors/default.css')}}\"/>

            <!--[if lt IE 9]>
            <script src=\"assets/js/html5shiv.js\"></script>
            <![endif]-->
        </head>
    {% endblock %}


    <body>

        {% block preloder %}       
            <!-- Preloader -->
            <div id=\"preloader\">
                <div id=\"loader\">
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"dot\"></div>
                    <div class=\"lading\"></div>
                </div>
            </div><!-- /#preloader -->
            <!-- Preloader End-->
        {% endblock %} 

        {% block menu %}

            <!-- Main Menu -->
            <div id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">


                <div class=\"navbar-header\">
                    <!-- responsive navigation -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <i class=\"fa fa-bars\"></i>
                    </button> <!-- /.navbar-toggle -->

                </div> <!-- /.navbar-header -->

                <nav class=\"collapse navbar-collapse\">
                    <!-- Main navigation -->
                    <ul id=\"headernavigation\" class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"{{ asset('#page-top')}}\">Home</a></li>
                        <li><a href=\"{{ asset('#lettre')}}\">Lettre du président</a></li>
                        <li><a href=\"{{ asset('#portfolio')}}\">Portfolio</a></li>\t
                        <li><a href=\"#contact\">Contact</a></li>
                        <br/>
                        <li><a href=\"{{ asset('resultat')}}\">Résultat des courses</a></li>\t
                        <li><a href=\"{{ asset('classement')}}\">Classement Général</a></li>
                    </ul> <!-- /.nav .navbar-nav -->
                </nav> <!-- /.navbar-collapse  -->
            </div><!-- /#main-menu -->
            <!-- Main Menu End -->
        {% endblock %}

        {% block title %}  
            <!-- Page Top Section -->
            <section id=\"page-top\" class=\"section-style\" data-background-image=\"{{ asset('images/background/runners-751853_1920.jpg')}}\">
                <div class=\"pattern height-resize\">
                    <div class=\"container\">

                        <h1 class=\"site-title\">
                            Athletik
                        </h1><!-- /.site-title -->
                        <h3 class=\"section-name\">
                            <span>
                                Assossiation
                            </span>
                        </h3><!-- /.section-name -->
                        <h2 class=\"section-title\">
                            Les 1000 pas

                        </h2><!-- /.Section-title  -->
                    {% endblock %}   
                    <div id=\"time_countdown\" class=\"time-count-container\">
                        {% block timer %}               


                            <div class=\"col-sm-3\">
                                <div class=\"time-box\">
                                    <div class=\"time-box-inner dash days_dash animated\" data-animation=\"rollIn\" data-animation-delay=\"300\">
                                        <span class=\"time-number\">
                                            <span class=\"digit\">0</span>
                                            <span class=\"digit\">0</span>
                                        </span>
                                        <span class=\"time-name\">Days</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-3\">
                                <div class=\"time-box\">
                                    <div class=\"time-box-inner dash hours_dash animated\" data-animation=\"rollIn\" data-animation-delay=\"600\">
                                        <span class=\"time-number\">
                                            <span class=\"digit\">0</span>
                                            <span class=\"digit\">0</span>\t
                                        </span>
                                        <span class=\"time-name\">Hours</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-3\">
                                <div class=\"time-box\">
                                    <div class=\"time-box-inner dash minutes_dash animated\" data-animation=\"rollIn\" data-animation-delay=\"900\">
                                        <span class=\"time-number\">
                                            <span class=\"digit\">0</span>
                                            <span class=\"digit\">0</span>                                       
                                        </span>
                                        <span class=\"time-name\">Minutes</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-3\">
                                <div class=\"time-box\">
                                    <div class=\"time-box-inner dash seconds_dash animated\" data-animation=\"rollIn\" data-animation-delay=\"1200\">
                                        <span class=\"time-number\">
                                            <span class=\"digit\">0</span>
                                            <span class=\"digit\">0</span>
                                        </span>
                                        <span class=\"time-name\">Seconds</span>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.time-count-container -->

                        <p class=\"time-until\">
                            <span>Pour votre prochaine course</span>
                        </p><!-- /.time-until -->
                    {% endblock%}

                    {% block fin %}
                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->
                    {%endblock%}

                </div><!-- /.container -->
            </div><!-- /.pattern -->\t\t
        </section><!-- /#page-top -->
        <!-- Page Top Section  End -->

{% block conexion %}{%endblock%}
{% block register %}{%endblock%}
{% block profile %}{%endblock%}
{% block letter %}{%endblock%}
{% block portfolio %}{%endblock%}
{% block resultat %}{%endblock%}
{% block classement %}{%endblock%}
{% block admin %}{%endblock%}
{% block user %}{%endblock%}

{% block contact %}       
    <!-- Contact Section -->
    <section id=\"contact\" class=\"section-style\" data-background-image=\"{{ asset('images/background/silhouette-1159234_1920.jpg')}}\">
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Contact
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    Entrer en contact 
                </h2><!-- /.Section-title  -->
                <p class=\"section-description\">
                    «Si vous courez, vous êtes un coureur. Peu importe à quelle vitesse ou quelle distance. Ce n'est pas grave si aujourd'hui est votre premier jour ou si vous courez depuis vingt ans. Il n'existe aucun test à passer, aucun permis à gagner, pas de carte de membre à obtenir. Vous n’avez qu’à courir. »
                    - John Bingham
                </p><!-- /.section-description -->

                <form id=\"contact-form\" action=\"#\" method=\"post\" class=\"clearfix\">
                    <div class=\"contact-box-hide\">
                        <div class=\"col-sm-6\">
                            <input type=\"text\"  class=\"form-control\" id=\"first_name\" name=\"first_name\" required placeholder=\"Prénom\">
                            <span class=\"first-name-error\"></span>
                        </div>
                        <div class=\"col-sm-6\">
                            <input type=\"text\"  class=\"form-control\" id=\"last_name\" name=\"last_name\" required placeholder=\"Nom\">
                            <span class=\"last-name-error\"></span>
                        </div>
                        <div class=\"col-sm-6\">
                            <input type=\"email\" class=\"form-control\"  id=\"contact_email\" name=\"contact_email\" required placeholder=\"Email\">
                            <span class=\"contact-email-error\"></span>
                        </div>
                        <div class=\"col-sm-6\">
                            <input type=\"text\"  class=\"form-control\" id=\"subject\" name=\"contact_subject\" required placeholder=\"Subjet\">
                            <span class=\"contact-subject-error\"></span>
                        </div>
                        <div class=\"col-sm-10\">
                            <textarea class=\"form-control\" rows=\"5\" id=\"message\" name=\"message\" required placeholder=\"Message\"></textarea>
                            <span class=\"contact-message-error\"></span>
                        </div>
                        <div class=\"col-sm-2\">
                            <button id=\"contact-submit\" class=\"btn custom-btn col-xs-12\" type=\"submit\" name=\"submit\"><i class=\"fa fa-thumbs-o-up \"></i></button>
                            <span id=\"contact-loading\" class=\"btn custom-btn col-xs-12\"> <i class=\"fa fa-refresh fa-spin\"></i> </span>
                        </div>
                    </div><!-- /.contact-box-hide -->
                    <div class=\"contact-message\"></div>

                </form><!-- /#contact-form -->

                <div class=\"social-btn-container\">
                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"facebook-btn\">
                            <i class=\"fa fa-facebook\"></i></a>
                    </span><!-- /.social-btn-box -->

                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"twitter-btn\"><i class=\"fa fa-twitter\"></i></a>
                    </span><!-- /.social-btn-box -->

                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"linkedin-btn\"><i class=\"fa fa-linkedin\"></i></a>
                    </span><!-- /.social-btn-box -->

                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"google-plus-btn\"><i class=\"fa fa-google-plus\"></i></a>
                    </span><!-- /.social-btn-box -->


                    <span class=\"social-btn-box\">
                        <a href=\"#\" class=\"youtube-btn\"><i class=\"fa fa-youtube\"></i></a>
                    </span><!-- /.social-btn-box -->



                </div><!-- /.social-btn-container -->



                <div class=\"next-section\">
                    <a class=\"go-to-page-top\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#contact -->
    <!-- Contact Section End -->
{% endblock%}

{% block footer %}
    <!-- Footer Section -->
    <footer id=\"footer-section\">
        <p class=\"copyright\">
            &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
        </p>
    </footer>
    <!-- Footer Section End -->
{% endblock%}

{% block color_switcher %}
    <!-- Color Variation Switcher  -->
    <div id=\"color-style-switcher\">
        <div>

            <h3>Color palette</h3>
            <ul class=\"colors\">
                <li><a class=\"color1 active\" href=\"#\"></a></li>
                <li><a class=\"color2\" href=\"#\"></a></li>
                <li><a class=\"color3\" href=\"#\"></a></li>
                <li><a class=\"color4\" href=\"#\"></a></li>
                <li><a class=\"color5\" href=\"#\"></a></li>
                <li><a class=\"color6\" href=\"#\"></a></li>
                <li><a class=\"color7\" href=\"#\"></a></li>
                <li><a class=\"color8\" href=\"#\"></a></li>
            </ul>
        </div>\t  
        <div class=\"bottom\">
            <a href=\"#\" class=\"settings\"><i class=\"fa fa-cogs icon-2x\"></i></a>
        </div>
    </div>
    <!-- Color Variation Switcher End -->
{% endblock %}

{% block conexion_switcher %}               
    <!-- conexion Switcher  -->
    <section id=\"conexion\">
        <div>

            <h3>Conexion</h3>


            <div class=\"menu\">
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
                <br/>
                <a href=\"{{ path('fos_user_registration_register') }}\">Inscription</a>
                <br/>
                <a href=\"{{ path('fos_user_profile_show') }}\">Profile</a>
            {% if is_granted('ROLE_ADMIN') %}
                <br/>
                <a href=\"{{ path('master') }}\">Admin</a>
            {% endif %}
            <br/>
                <a href=\"{{ path('member') }}\">Member</a>
            </div>
        </div>
        <div class=\"bottom\">
            <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
        </div>
    </section>
    <!-- Conexion Switcher End -->
{% endblock %}

{% block javascripts %}
    <!-- jQuery Library -->      
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery-2.1.0.min.js')}}\"></script>
    <!-- Modernizr js -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/modernizr-2.8.0.min.js')}}\"></script>
    <!-- Plugins -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/plugins.js')}}\"></script>
    <!-- Custom JavaScript Functions -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/functions.js')}}\"></script>
    <!-- Color Style Switcher -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/switcher.js')}}\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/base.html.twig");
    }
}
