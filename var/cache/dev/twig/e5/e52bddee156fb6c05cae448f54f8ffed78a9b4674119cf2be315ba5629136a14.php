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
        $__internal_afca49f9769409fe95ae46f8280b71bd3f0cc3abba73c87a01f2b960319f12ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afca49f9769409fe95ae46f8280b71bd3f0cc3abba73c87a01f2b960319f12ce->enter($__internal_afca49f9769409fe95ae46f8280b71bd3f0cc3abba73c87a01f2b960319f12ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a9696af1fa1183402429a0cda314a0fb6211d9fb40fccff2908e5a1b5ebd2c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9696af1fa1183402429a0cda314a0fb6211d9fb40fccff2908e5a1b5ebd2c87->enter($__internal_a9696af1fa1183402429a0cda314a0fb6211d9fb40fccff2908e5a1b5ebd2c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_afca49f9769409fe95ae46f8280b71bd3f0cc3abba73c87a01f2b960319f12ce->leave($__internal_afca49f9769409fe95ae46f8280b71bd3f0cc3abba73c87a01f2b960319f12ce_prof);

        
        $__internal_a9696af1fa1183402429a0cda314a0fb6211d9fb40fccff2908e5a1b5ebd2c87->leave($__internal_a9696af1fa1183402429a0cda314a0fb6211d9fb40fccff2908e5a1b5ebd2c87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4881d8a3e1836b69f6706f59757360594c5e66d7408b0893a84d19740ebc32ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4881d8a3e1836b69f6706f59757360594c5e66d7408b0893a84d19740ebc32ad->enter($__internal_4881d8a3e1836b69f6706f59757360594c5e66d7408b0893a84d19740ebc32ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7b9945ef17088e002be56d7564b587951290bb0ea9eb4954ad19d75a07ce257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b9945ef17088e002be56d7564b587951290bb0ea9eb4954ad19d75a07ce257->enter($__internal_d7b9945ef17088e002be56d7564b587951290bb0ea9eb4954ad19d75a07ce257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d7b9945ef17088e002be56d7564b587951290bb0ea9eb4954ad19d75a07ce257->leave($__internal_d7b9945ef17088e002be56d7564b587951290bb0ea9eb4954ad19d75a07ce257_prof);

        
        $__internal_4881d8a3e1836b69f6706f59757360594c5e66d7408b0893a84d19740ebc32ad->leave($__internal_4881d8a3e1836b69f6706f59757360594c5e66d7408b0893a84d19740ebc32ad_prof);

    }

    // line 38
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_3935d2930366b36e76b235a7264d4008dabc210abfb4e46136665e88666c3742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3935d2930366b36e76b235a7264d4008dabc210abfb4e46136665e88666c3742->enter($__internal_3935d2930366b36e76b235a7264d4008dabc210abfb4e46136665e88666c3742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_f2dc2e31fec0eb97e570bc1129f5c284a2ff427891287f11602f0007e50c569e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dc2e31fec0eb97e570bc1129f5c284a2ff427891287f11602f0007e50c569e->enter($__internal_f2dc2e31fec0eb97e570bc1129f5c284a2ff427891287f11602f0007e50c569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_f2dc2e31fec0eb97e570bc1129f5c284a2ff427891287f11602f0007e50c569e->leave($__internal_f2dc2e31fec0eb97e570bc1129f5c284a2ff427891287f11602f0007e50c569e_prof);

        
        $__internal_3935d2930366b36e76b235a7264d4008dabc210abfb4e46136665e88666c3742->leave($__internal_3935d2930366b36e76b235a7264d4008dabc210abfb4e46136665e88666c3742_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bdd24365f9691e7277d826469f0cae300b5ef94f44e32dd975396123669e9f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd24365f9691e7277d826469f0cae300b5ef94f44e32dd975396123669e9f6f->enter($__internal_bdd24365f9691e7277d826469f0cae300b5ef94f44e32dd975396123669e9f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71465c9ef2ab7be6ee0b715823e5e125d59e38d80044cd14e0b8463c6ff579f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71465c9ef2ab7be6ee0b715823e5e125d59e38d80044cd14e0b8463c6ff579f3->enter($__internal_71465c9ef2ab7be6ee0b715823e5e125d59e38d80044cd14e0b8463c6ff579f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_71465c9ef2ab7be6ee0b715823e5e125d59e38d80044cd14e0b8463c6ff579f3->leave($__internal_71465c9ef2ab7be6ee0b715823e5e125d59e38d80044cd14e0b8463c6ff579f3_prof);

        
        $__internal_bdd24365f9691e7277d826469f0cae300b5ef94f44e32dd975396123669e9f6f->leave($__internal_bdd24365f9691e7277d826469f0cae300b5ef94f44e32dd975396123669e9f6f_prof);

    }

    // line 87
    public function block_title($context, array $blocks = array())
    {
        $__internal_0076fba469da63e999cf9b10d452270ad7e2ab66a815ff4bc7c992cb46ce3a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0076fba469da63e999cf9b10d452270ad7e2ab66a815ff4bc7c992cb46ce3a42->enter($__internal_0076fba469da63e999cf9b10d452270ad7e2ab66a815ff4bc7c992cb46ce3a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c4e4663655d04794cacbe3af3e4d34642a33d5d6e068a2f59c10c1f98d0e2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4e4663655d04794cacbe3af3e4d34642a33d5d6e068a2f59c10c1f98d0e2b0->enter($__internal_4c4e4663655d04794cacbe3af3e4d34642a33d5d6e068a2f59c10c1f98d0e2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_4c4e4663655d04794cacbe3af3e4d34642a33d5d6e068a2f59c10c1f98d0e2b0->leave($__internal_4c4e4663655d04794cacbe3af3e4d34642a33d5d6e068a2f59c10c1f98d0e2b0_prof);

        
        $__internal_0076fba469da63e999cf9b10d452270ad7e2ab66a815ff4bc7c992cb46ce3a42->leave($__internal_0076fba469da63e999cf9b10d452270ad7e2ab66a815ff4bc7c992cb46ce3a42_prof);

    }

    // line 107
    public function block_timer($context, array $blocks = array())
    {
        $__internal_0002c3b43657e5822d07584a93b387c4bcdb45fc354d99b444eecfce0260f9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0002c3b43657e5822d07584a93b387c4bcdb45fc354d99b444eecfce0260f9bc->enter($__internal_0002c3b43657e5822d07584a93b387c4bcdb45fc354d99b444eecfce0260f9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_f3e31bad8b876cfa73060998a7611a59cc63635e0290a639c2d653b1f12ab481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e31bad8b876cfa73060998a7611a59cc63635e0290a639c2d653b1f12ab481->enter($__internal_f3e31bad8b876cfa73060998a7611a59cc63635e0290a639c2d653b1f12ab481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_f3e31bad8b876cfa73060998a7611a59cc63635e0290a639c2d653b1f12ab481->leave($__internal_f3e31bad8b876cfa73060998a7611a59cc63635e0290a639c2d653b1f12ab481_prof);

        
        $__internal_0002c3b43657e5822d07584a93b387c4bcdb45fc354d99b444eecfce0260f9bc->leave($__internal_0002c3b43657e5822d07584a93b387c4bcdb45fc354d99b444eecfce0260f9bc_prof);

    }

    // line 165
    public function block_fin($context, array $blocks = array())
    {
        $__internal_e9ea4360868c5e32116f1d460d3010907dfe77efb6f7f77acc57caf60955c3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ea4360868c5e32116f1d460d3010907dfe77efb6f7f77acc57caf60955c3a2->enter($__internal_e9ea4360868c5e32116f1d460d3010907dfe77efb6f7f77acc57caf60955c3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_63987f55e22f58c3e0782ec20ec49c4224c16931e2a188c848c70967dc69f133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63987f55e22f58c3e0782ec20ec49c4224c16931e2a188c848c70967dc69f133->enter($__internal_63987f55e22f58c3e0782ec20ec49c4224c16931e2a188c848c70967dc69f133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 166
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->
                    ";
        
        $__internal_63987f55e22f58c3e0782ec20ec49c4224c16931e2a188c848c70967dc69f133->leave($__internal_63987f55e22f58c3e0782ec20ec49c4224c16931e2a188c848c70967dc69f133_prof);

        
        $__internal_e9ea4360868c5e32116f1d460d3010907dfe77efb6f7f77acc57caf60955c3a2->leave($__internal_e9ea4360868c5e32116f1d460d3010907dfe77efb6f7f77acc57caf60955c3a2_prof);

    }

    // line 176
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_0002fad321af5fd5900cb66e65df9567c72108239f7b891161249496a1ce507a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0002fad321af5fd5900cb66e65df9567c72108239f7b891161249496a1ce507a->enter($__internal_0002fad321af5fd5900cb66e65df9567c72108239f7b891161249496a1ce507a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_50bb97fa10208eaf2e6a7e50c687dcb41c6bb0bf34a6dea58c208b18176bd76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bb97fa10208eaf2e6a7e50c687dcb41c6bb0bf34a6dea58c208b18176bd76a->enter($__internal_50bb97fa10208eaf2e6a7e50c687dcb41c6bb0bf34a6dea58c208b18176bd76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        
        $__internal_50bb97fa10208eaf2e6a7e50c687dcb41c6bb0bf34a6dea58c208b18176bd76a->leave($__internal_50bb97fa10208eaf2e6a7e50c687dcb41c6bb0bf34a6dea58c208b18176bd76a_prof);

        
        $__internal_0002fad321af5fd5900cb66e65df9567c72108239f7b891161249496a1ce507a->leave($__internal_0002fad321af5fd5900cb66e65df9567c72108239f7b891161249496a1ce507a_prof);

    }

    // line 177
    public function block_register($context, array $blocks = array())
    {
        $__internal_101eb876deda8fe84c1901598c700f2d59af575b33c9a8b28a78577203c1ec26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101eb876deda8fe84c1901598c700f2d59af575b33c9a8b28a78577203c1ec26->enter($__internal_101eb876deda8fe84c1901598c700f2d59af575b33c9a8b28a78577203c1ec26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_8ca8df47002998f7a5f1355c2d5254b0ef95546e6d6a7dbf4974b9e64f348d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca8df47002998f7a5f1355c2d5254b0ef95546e6d6a7dbf4974b9e64f348d62->enter($__internal_8ca8df47002998f7a5f1355c2d5254b0ef95546e6d6a7dbf4974b9e64f348d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_8ca8df47002998f7a5f1355c2d5254b0ef95546e6d6a7dbf4974b9e64f348d62->leave($__internal_8ca8df47002998f7a5f1355c2d5254b0ef95546e6d6a7dbf4974b9e64f348d62_prof);

        
        $__internal_101eb876deda8fe84c1901598c700f2d59af575b33c9a8b28a78577203c1ec26->leave($__internal_101eb876deda8fe84c1901598c700f2d59af575b33c9a8b28a78577203c1ec26_prof);

    }

    // line 178
    public function block_profile($context, array $blocks = array())
    {
        $__internal_6e46e777b0a8f74c7c82ee93e66fa90f3fa0b26bb07802cc928a28445a842bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e46e777b0a8f74c7c82ee93e66fa90f3fa0b26bb07802cc928a28445a842bc4->enter($__internal_6e46e777b0a8f74c7c82ee93e66fa90f3fa0b26bb07802cc928a28445a842bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_55f43edf7af8872d70cfaba0e34ebd5038c20b9236f946a8af4e949e76c25520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f43edf7af8872d70cfaba0e34ebd5038c20b9236f946a8af4e949e76c25520->enter($__internal_55f43edf7af8872d70cfaba0e34ebd5038c20b9236f946a8af4e949e76c25520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_55f43edf7af8872d70cfaba0e34ebd5038c20b9236f946a8af4e949e76c25520->leave($__internal_55f43edf7af8872d70cfaba0e34ebd5038c20b9236f946a8af4e949e76c25520_prof);

        
        $__internal_6e46e777b0a8f74c7c82ee93e66fa90f3fa0b26bb07802cc928a28445a842bc4->leave($__internal_6e46e777b0a8f74c7c82ee93e66fa90f3fa0b26bb07802cc928a28445a842bc4_prof);

    }

    // line 179
    public function block_letter($context, array $blocks = array())
    {
        $__internal_cd2ad6cbb7993dab89ab968d6e8e4073fc3985eef2a7cbf10a75cd370ff00a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2ad6cbb7993dab89ab968d6e8e4073fc3985eef2a7cbf10a75cd370ff00a84->enter($__internal_cd2ad6cbb7993dab89ab968d6e8e4073fc3985eef2a7cbf10a75cd370ff00a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_5f31829d7c1cc1a36150be9ad7a380b85c8313ac2e08b872f9040f90a61bff80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f31829d7c1cc1a36150be9ad7a380b85c8313ac2e08b872f9040f90a61bff80->enter($__internal_5f31829d7c1cc1a36150be9ad7a380b85c8313ac2e08b872f9040f90a61bff80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_5f31829d7c1cc1a36150be9ad7a380b85c8313ac2e08b872f9040f90a61bff80->leave($__internal_5f31829d7c1cc1a36150be9ad7a380b85c8313ac2e08b872f9040f90a61bff80_prof);

        
        $__internal_cd2ad6cbb7993dab89ab968d6e8e4073fc3985eef2a7cbf10a75cd370ff00a84->leave($__internal_cd2ad6cbb7993dab89ab968d6e8e4073fc3985eef2a7cbf10a75cd370ff00a84_prof);

    }

    // line 180
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_ec103742a100fc4abe50d742e7ca8fa4c708c2a68236a26b410e0ed3a7546573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec103742a100fc4abe50d742e7ca8fa4c708c2a68236a26b410e0ed3a7546573->enter($__internal_ec103742a100fc4abe50d742e7ca8fa4c708c2a68236a26b410e0ed3a7546573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_b4d908d6c01c87c019ae8493c1dec8a49d4005baed776f077b5f4d54ce6e9fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d908d6c01c87c019ae8493c1dec8a49d4005baed776f077b5f4d54ce6e9fcd->enter($__internal_b4d908d6c01c87c019ae8493c1dec8a49d4005baed776f077b5f4d54ce6e9fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_b4d908d6c01c87c019ae8493c1dec8a49d4005baed776f077b5f4d54ce6e9fcd->leave($__internal_b4d908d6c01c87c019ae8493c1dec8a49d4005baed776f077b5f4d54ce6e9fcd_prof);

        
        $__internal_ec103742a100fc4abe50d742e7ca8fa4c708c2a68236a26b410e0ed3a7546573->leave($__internal_ec103742a100fc4abe50d742e7ca8fa4c708c2a68236a26b410e0ed3a7546573_prof);

    }

    // line 181
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_f1796709ccd8902b4b572ef36698cfd1b2ecd6114e3572d0585f57799fbe5213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1796709ccd8902b4b572ef36698cfd1b2ecd6114e3572d0585f57799fbe5213->enter($__internal_f1796709ccd8902b4b572ef36698cfd1b2ecd6114e3572d0585f57799fbe5213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_930efff06de18d4902cd53d4113676685ec21ba64741721d7d19cb95cd3f8137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930efff06de18d4902cd53d4113676685ec21ba64741721d7d19cb95cd3f8137->enter($__internal_930efff06de18d4902cd53d4113676685ec21ba64741721d7d19cb95cd3f8137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_930efff06de18d4902cd53d4113676685ec21ba64741721d7d19cb95cd3f8137->leave($__internal_930efff06de18d4902cd53d4113676685ec21ba64741721d7d19cb95cd3f8137_prof);

        
        $__internal_f1796709ccd8902b4b572ef36698cfd1b2ecd6114e3572d0585f57799fbe5213->leave($__internal_f1796709ccd8902b4b572ef36698cfd1b2ecd6114e3572d0585f57799fbe5213_prof);

    }

    // line 182
    public function block_classement($context, array $blocks = array())
    {
        $__internal_09c29e0099e4c85d9d0dd17c7471c5cfe1da166850002199ab2aa007cc14465d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c29e0099e4c85d9d0dd17c7471c5cfe1da166850002199ab2aa007cc14465d->enter($__internal_09c29e0099e4c85d9d0dd17c7471c5cfe1da166850002199ab2aa007cc14465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_6aba7e95865c694a3c9b7ba9bb4ef34d015fa61be06f70da427b74fb8b556847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aba7e95865c694a3c9b7ba9bb4ef34d015fa61be06f70da427b74fb8b556847->enter($__internal_6aba7e95865c694a3c9b7ba9bb4ef34d015fa61be06f70da427b74fb8b556847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_6aba7e95865c694a3c9b7ba9bb4ef34d015fa61be06f70da427b74fb8b556847->leave($__internal_6aba7e95865c694a3c9b7ba9bb4ef34d015fa61be06f70da427b74fb8b556847_prof);

        
        $__internal_09c29e0099e4c85d9d0dd17c7471c5cfe1da166850002199ab2aa007cc14465d->leave($__internal_09c29e0099e4c85d9d0dd17c7471c5cfe1da166850002199ab2aa007cc14465d_prof);

    }

    // line 183
    public function block_admin($context, array $blocks = array())
    {
        $__internal_5a23443af95da9be14dd597297077b01114e3d0f4fcae38a248cfdd6089e1bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a23443af95da9be14dd597297077b01114e3d0f4fcae38a248cfdd6089e1bd5->enter($__internal_5a23443af95da9be14dd597297077b01114e3d0f4fcae38a248cfdd6089e1bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_35a751b31155482d5fa09d3d5fbb90670674acec8e18ac1ca18ee29182387fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a751b31155482d5fa09d3d5fbb90670674acec8e18ac1ca18ee29182387fa1->enter($__internal_35a751b31155482d5fa09d3d5fbb90670674acec8e18ac1ca18ee29182387fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        
        $__internal_35a751b31155482d5fa09d3d5fbb90670674acec8e18ac1ca18ee29182387fa1->leave($__internal_35a751b31155482d5fa09d3d5fbb90670674acec8e18ac1ca18ee29182387fa1_prof);

        
        $__internal_5a23443af95da9be14dd597297077b01114e3d0f4fcae38a248cfdd6089e1bd5->leave($__internal_5a23443af95da9be14dd597297077b01114e3d0f4fcae38a248cfdd6089e1bd5_prof);

    }

    // line 184
    public function block_user($context, array $blocks = array())
    {
        $__internal_2dfc4d9ea49052475fd4df0fbc1819b820e764dc467347d46c790978b3024763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dfc4d9ea49052475fd4df0fbc1819b820e764dc467347d46c790978b3024763->enter($__internal_2dfc4d9ea49052475fd4df0fbc1819b820e764dc467347d46c790978b3024763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        $__internal_692dccca89540716905e94dcab88ec2633bb077dd5f42366efd14d39fe372ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692dccca89540716905e94dcab88ec2633bb077dd5f42366efd14d39fe372ae5->enter($__internal_692dccca89540716905e94dcab88ec2633bb077dd5f42366efd14d39fe372ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        
        $__internal_692dccca89540716905e94dcab88ec2633bb077dd5f42366efd14d39fe372ae5->leave($__internal_692dccca89540716905e94dcab88ec2633bb077dd5f42366efd14d39fe372ae5_prof);

        
        $__internal_2dfc4d9ea49052475fd4df0fbc1819b820e764dc467347d46c790978b3024763->leave($__internal_2dfc4d9ea49052475fd4df0fbc1819b820e764dc467347d46c790978b3024763_prof);

    }

    // line 186
    public function block_contact($context, array $blocks = array())
    {
        $__internal_0b2384d38d8a39f51475febea674098440cd523ed68001b2e86a40c1e458d392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2384d38d8a39f51475febea674098440cd523ed68001b2e86a40c1e458d392->enter($__internal_0b2384d38d8a39f51475febea674098440cd523ed68001b2e86a40c1e458d392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_748f89405e12576946a3db52959635334874adee6e2c183db736461196e722c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748f89405e12576946a3db52959635334874adee6e2c183db736461196e722c9->enter($__internal_748f89405e12576946a3db52959635334874adee6e2c183db736461196e722c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_748f89405e12576946a3db52959635334874adee6e2c183db736461196e722c9->leave($__internal_748f89405e12576946a3db52959635334874adee6e2c183db736461196e722c9_prof);

        
        $__internal_0b2384d38d8a39f51475febea674098440cd523ed68001b2e86a40c1e458d392->leave($__internal_0b2384d38d8a39f51475febea674098440cd523ed68001b2e86a40c1e458d392_prof);

    }

    // line 275
    public function block_footer($context, array $blocks = array())
    {
        $__internal_50900a13a41f5e5945cf9b2a2445326e7a1dc150c7b9c853927f1314e0b614a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50900a13a41f5e5945cf9b2a2445326e7a1dc150c7b9c853927f1314e0b614a0->enter($__internal_50900a13a41f5e5945cf9b2a2445326e7a1dc150c7b9c853927f1314e0b614a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b1ee170e7dc060d9e99e64688cd459dfcb9756a1122317a119d2ec1c4d43d4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ee170e7dc060d9e99e64688cd459dfcb9756a1122317a119d2ec1c4d43d4b6->enter($__internal_b1ee170e7dc060d9e99e64688cd459dfcb9756a1122317a119d2ec1c4d43d4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 276
        echo "    <!-- Footer Section -->
    <footer id=\"footer-section\">
        <p class=\"copyright\">
            &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
        </p>
    </footer>
    <!-- Footer Section End -->
";
        
        $__internal_b1ee170e7dc060d9e99e64688cd459dfcb9756a1122317a119d2ec1c4d43d4b6->leave($__internal_b1ee170e7dc060d9e99e64688cd459dfcb9756a1122317a119d2ec1c4d43d4b6_prof);

        
        $__internal_50900a13a41f5e5945cf9b2a2445326e7a1dc150c7b9c853927f1314e0b614a0->leave($__internal_50900a13a41f5e5945cf9b2a2445326e7a1dc150c7b9c853927f1314e0b614a0_prof);

    }

    // line 285
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_0bf7ba2d3a5e73e66976ed5cc95f2c6431cac3a3fa2c914c7613100d8fbe55fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf7ba2d3a5e73e66976ed5cc95f2c6431cac3a3fa2c914c7613100d8fbe55fa->enter($__internal_0bf7ba2d3a5e73e66976ed5cc95f2c6431cac3a3fa2c914c7613100d8fbe55fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_9713e4695fcf47360564149a81f03e973cda289326ffad784e3f81cd00b8e6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9713e4695fcf47360564149a81f03e973cda289326ffad784e3f81cd00b8e6a6->enter($__internal_9713e4695fcf47360564149a81f03e973cda289326ffad784e3f81cd00b8e6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

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
        
        $__internal_9713e4695fcf47360564149a81f03e973cda289326ffad784e3f81cd00b8e6a6->leave($__internal_9713e4695fcf47360564149a81f03e973cda289326ffad784e3f81cd00b8e6a6_prof);

        
        $__internal_0bf7ba2d3a5e73e66976ed5cc95f2c6431cac3a3fa2c914c7613100d8fbe55fa->leave($__internal_0bf7ba2d3a5e73e66976ed5cc95f2c6431cac3a3fa2c914c7613100d8fbe55fa_prof);

    }

    // line 309
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_1a889c59481d712a1ae870f57bb9d724e31f7998f5aaf663212259bb6e3c2f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a889c59481d712a1ae870f57bb9d724e31f7998f5aaf663212259bb6e3c2f87->enter($__internal_1a889c59481d712a1ae870f57bb9d724e31f7998f5aaf663212259bb6e3c2f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_cf7fc7d64bb66e10a53bbbe1ac039dfda0a6b14c8e29fbca5369f9b5ad2bc5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7fc7d64bb66e10a53bbbe1ac039dfda0a6b14c8e29fbca5369f9b5ad2bc5f6->enter($__internal_cf7fc7d64bb66e10a53bbbe1ac039dfda0a6b14c8e29fbca5369f9b5ad2bc5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

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
        
        $__internal_cf7fc7d64bb66e10a53bbbe1ac039dfda0a6b14c8e29fbca5369f9b5ad2bc5f6->leave($__internal_cf7fc7d64bb66e10a53bbbe1ac039dfda0a6b14c8e29fbca5369f9b5ad2bc5f6_prof);

        
        $__internal_1a889c59481d712a1ae870f57bb9d724e31f7998f5aaf663212259bb6e3c2f87->leave($__internal_1a889c59481d712a1ae870f57bb9d724e31f7998f5aaf663212259bb6e3c2f87_prof);

    }

    // line 347
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf867576c6c3e390cd71370bd192ed47da418928179c3b9effe059224288e571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf867576c6c3e390cd71370bd192ed47da418928179c3b9effe059224288e571->enter($__internal_cf867576c6c3e390cd71370bd192ed47da418928179c3b9effe059224288e571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b50aaf9bfc47b91da737fbf42cf5d9d09322d96896ee8798b53dc50fc22036d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50aaf9bfc47b91da737fbf42cf5d9d09322d96896ee8798b53dc50fc22036d3->enter($__internal_b50aaf9bfc47b91da737fbf42cf5d9d09322d96896ee8798b53dc50fc22036d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b50aaf9bfc47b91da737fbf42cf5d9d09322d96896ee8798b53dc50fc22036d3->leave($__internal_b50aaf9bfc47b91da737fbf42cf5d9d09322d96896ee8798b53dc50fc22036d3_prof);

        
        $__internal_cf867576c6c3e390cd71370bd192ed47da418928179c3b9effe059224288e571->leave($__internal_cf867576c6c3e390cd71370bd192ed47da418928179c3b9effe059224288e571_prof);

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
