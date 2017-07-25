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
            'contact' => array($this, 'block_contact'),
            'footer' => array($this, 'block_footer'),
            'color_switcher' => array($this, 'block_color_switcher'),
            'conexion_switcher' => array($this, 'block_conexion_switcher'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa3206b63185cb246bc556100928dbe3eaa0c958a12b6cefc6caba30dcb00b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3206b63185cb246bc556100928dbe3eaa0c958a12b6cefc6caba30dcb00b9b->enter($__internal_fa3206b63185cb246bc556100928dbe3eaa0c958a12b6cefc6caba30dcb00b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a34589f32814504ff5c65acc43a9f34ee35e70a48afcdfad1fe5fe8313403814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34589f32814504ff5c65acc43a9f34ee35e70a48afcdfad1fe5fe8313403814->enter($__internal_a34589f32814504ff5c65acc43a9f34ee35e70a48afcdfad1fe5fe8313403814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "
";
        // line 184
        $this->displayBlock('contact', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('footer', $context, $blocks);
        // line 282
        echo "
";
        // line 283
        $this->displayBlock('color_switcher', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('conexion_switcher', $context, $blocks);
        // line 338
        echo "
";
        // line 339
        $this->displayBlock('javascripts', $context, $blocks);
        // line 353
        echo "</body>
</html>
";
        
        $__internal_fa3206b63185cb246bc556100928dbe3eaa0c958a12b6cefc6caba30dcb00b9b->leave($__internal_fa3206b63185cb246bc556100928dbe3eaa0c958a12b6cefc6caba30dcb00b9b_prof);

        
        $__internal_a34589f32814504ff5c65acc43a9f34ee35e70a48afcdfad1fe5fe8313403814->leave($__internal_a34589f32814504ff5c65acc43a9f34ee35e70a48afcdfad1fe5fe8313403814_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_adbb7533566f6228d6cdcbcac09511f0e9be1cd67f1b296dc82424d0c44e420c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbb7533566f6228d6cdcbcac09511f0e9be1cd67f1b296dc82424d0c44e420c->enter($__internal_adbb7533566f6228d6cdcbcac09511f0e9be1cd67f1b296dc82424d0c44e420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dfa5107ae68b959463f114279be41b39db733b8972643024d517451806469627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa5107ae68b959463f114279be41b39db733b8972643024d517451806469627->enter($__internal_dfa5107ae68b959463f114279be41b39db733b8972643024d517451806469627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dfa5107ae68b959463f114279be41b39db733b8972643024d517451806469627->leave($__internal_dfa5107ae68b959463f114279be41b39db733b8972643024d517451806469627_prof);

        
        $__internal_adbb7533566f6228d6cdcbcac09511f0e9be1cd67f1b296dc82424d0c44e420c->leave($__internal_adbb7533566f6228d6cdcbcac09511f0e9be1cd67f1b296dc82424d0c44e420c_prof);

    }

    // line 38
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_70fa719bee5b6aebb2b80f241777b78648820288ca624a69cebab7537d285a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fa719bee5b6aebb2b80f241777b78648820288ca624a69cebab7537d285a87->enter($__internal_70fa719bee5b6aebb2b80f241777b78648820288ca624a69cebab7537d285a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_4f4b4993dfd8e4edcc15c70b794762a2dd8c4a8e9722524e01c1c95a41f215aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4b4993dfd8e4edcc15c70b794762a2dd8c4a8e9722524e01c1c95a41f215aa->enter($__internal_4f4b4993dfd8e4edcc15c70b794762a2dd8c4a8e9722524e01c1c95a41f215aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_4f4b4993dfd8e4edcc15c70b794762a2dd8c4a8e9722524e01c1c95a41f215aa->leave($__internal_4f4b4993dfd8e4edcc15c70b794762a2dd8c4a8e9722524e01c1c95a41f215aa_prof);

        
        $__internal_70fa719bee5b6aebb2b80f241777b78648820288ca624a69cebab7537d285a87->leave($__internal_70fa719bee5b6aebb2b80f241777b78648820288ca624a69cebab7537d285a87_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2f96f8ab2d341f1700e9961c7b964f9b66cbd44744996b211d0fba57982cf72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f96f8ab2d341f1700e9961c7b964f9b66cbd44744996b211d0fba57982cf72->enter($__internal_c2f96f8ab2d341f1700e9961c7b964f9b66cbd44744996b211d0fba57982cf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60ddda68ac0565ae1f7864235d858e8361ccf45348e73ecf4dc055aa378bd9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ddda68ac0565ae1f7864235d858e8361ccf45348e73ecf4dc055aa378bd9cc->enter($__internal_60ddda68ac0565ae1f7864235d858e8361ccf45348e73ecf4dc055aa378bd9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_60ddda68ac0565ae1f7864235d858e8361ccf45348e73ecf4dc055aa378bd9cc->leave($__internal_60ddda68ac0565ae1f7864235d858e8361ccf45348e73ecf4dc055aa378bd9cc_prof);

        
        $__internal_c2f96f8ab2d341f1700e9961c7b964f9b66cbd44744996b211d0fba57982cf72->leave($__internal_c2f96f8ab2d341f1700e9961c7b964f9b66cbd44744996b211d0fba57982cf72_prof);

    }

    // line 87
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce2b93d83c980308c58bcbf19c9bdd4a77de3645236fbe89ff78476991853a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2b93d83c980308c58bcbf19c9bdd4a77de3645236fbe89ff78476991853a79->enter($__internal_ce2b93d83c980308c58bcbf19c9bdd4a77de3645236fbe89ff78476991853a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a785ff3b3e7abfd088089d13deb7cfb5eafe9fea78534f17584441b5ad00a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a785ff3b3e7abfd088089d13deb7cfb5eafe9fea78534f17584441b5ad00a14->enter($__internal_1a785ff3b3e7abfd088089d13deb7cfb5eafe9fea78534f17584441b5ad00a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_1a785ff3b3e7abfd088089d13deb7cfb5eafe9fea78534f17584441b5ad00a14->leave($__internal_1a785ff3b3e7abfd088089d13deb7cfb5eafe9fea78534f17584441b5ad00a14_prof);

        
        $__internal_ce2b93d83c980308c58bcbf19c9bdd4a77de3645236fbe89ff78476991853a79->leave($__internal_ce2b93d83c980308c58bcbf19c9bdd4a77de3645236fbe89ff78476991853a79_prof);

    }

    // line 107
    public function block_timer($context, array $blocks = array())
    {
        $__internal_ffac32473c7e167c399308a725b604bfb107c98a18f0e24434e0068ccbd3cb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffac32473c7e167c399308a725b604bfb107c98a18f0e24434e0068ccbd3cb8d->enter($__internal_ffac32473c7e167c399308a725b604bfb107c98a18f0e24434e0068ccbd3cb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_4eb6dd72b9b88e36d903ea7f5764244adba10d0a11bf1456685a900df1c8e55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb6dd72b9b88e36d903ea7f5764244adba10d0a11bf1456685a900df1c8e55e->enter($__internal_4eb6dd72b9b88e36d903ea7f5764244adba10d0a11bf1456685a900df1c8e55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_4eb6dd72b9b88e36d903ea7f5764244adba10d0a11bf1456685a900df1c8e55e->leave($__internal_4eb6dd72b9b88e36d903ea7f5764244adba10d0a11bf1456685a900df1c8e55e_prof);

        
        $__internal_ffac32473c7e167c399308a725b604bfb107c98a18f0e24434e0068ccbd3cb8d->leave($__internal_ffac32473c7e167c399308a725b604bfb107c98a18f0e24434e0068ccbd3cb8d_prof);

    }

    // line 165
    public function block_fin($context, array $blocks = array())
    {
        $__internal_ce4d6fc4f72dc59f971b571c6aed11e13073c92f48228ab1e0e1b0292a445ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4d6fc4f72dc59f971b571c6aed11e13073c92f48228ab1e0e1b0292a445ee9->enter($__internal_ce4d6fc4f72dc59f971b571c6aed11e13073c92f48228ab1e0e1b0292a445ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_378b1e69083485e6e01a65528a105adbc89ff491e5c64a70b4c77a5949e7e0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378b1e69083485e6e01a65528a105adbc89ff491e5c64a70b4c77a5949e7e0b2->enter($__internal_378b1e69083485e6e01a65528a105adbc89ff491e5c64a70b4c77a5949e7e0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 166
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->
                    ";
        
        $__internal_378b1e69083485e6e01a65528a105adbc89ff491e5c64a70b4c77a5949e7e0b2->leave($__internal_378b1e69083485e6e01a65528a105adbc89ff491e5c64a70b4c77a5949e7e0b2_prof);

        
        $__internal_ce4d6fc4f72dc59f971b571c6aed11e13073c92f48228ab1e0e1b0292a445ee9->leave($__internal_ce4d6fc4f72dc59f971b571c6aed11e13073c92f48228ab1e0e1b0292a445ee9_prof);

    }

    // line 176
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_c670e4b5bb26541533c2b218d0db0e15f3e558b2eeab9b83f647272344c733b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c670e4b5bb26541533c2b218d0db0e15f3e558b2eeab9b83f647272344c733b0->enter($__internal_c670e4b5bb26541533c2b218d0db0e15f3e558b2eeab9b83f647272344c733b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_177dc1fe066891e0bdd8cbfe8559d14bcb2b30507579a2c9c584715fdb0603cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177dc1fe066891e0bdd8cbfe8559d14bcb2b30507579a2c9c584715fdb0603cd->enter($__internal_177dc1fe066891e0bdd8cbfe8559d14bcb2b30507579a2c9c584715fdb0603cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        
        $__internal_177dc1fe066891e0bdd8cbfe8559d14bcb2b30507579a2c9c584715fdb0603cd->leave($__internal_177dc1fe066891e0bdd8cbfe8559d14bcb2b30507579a2c9c584715fdb0603cd_prof);

        
        $__internal_c670e4b5bb26541533c2b218d0db0e15f3e558b2eeab9b83f647272344c733b0->leave($__internal_c670e4b5bb26541533c2b218d0db0e15f3e558b2eeab9b83f647272344c733b0_prof);

    }

    // line 177
    public function block_register($context, array $blocks = array())
    {
        $__internal_be78701beafb8f1eb23348a3c633217f724996c3595541e8211990998288fd48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be78701beafb8f1eb23348a3c633217f724996c3595541e8211990998288fd48->enter($__internal_be78701beafb8f1eb23348a3c633217f724996c3595541e8211990998288fd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_21841c9a63554f6d1381a73bce2d56cc8363ada21153fc3c7742e820264c97e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21841c9a63554f6d1381a73bce2d56cc8363ada21153fc3c7742e820264c97e1->enter($__internal_21841c9a63554f6d1381a73bce2d56cc8363ada21153fc3c7742e820264c97e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_21841c9a63554f6d1381a73bce2d56cc8363ada21153fc3c7742e820264c97e1->leave($__internal_21841c9a63554f6d1381a73bce2d56cc8363ada21153fc3c7742e820264c97e1_prof);

        
        $__internal_be78701beafb8f1eb23348a3c633217f724996c3595541e8211990998288fd48->leave($__internal_be78701beafb8f1eb23348a3c633217f724996c3595541e8211990998288fd48_prof);

    }

    // line 178
    public function block_profile($context, array $blocks = array())
    {
        $__internal_ed84cb203c7e7954595af6c0b6e1ec2fdc61bbb75a1a605b3e71282836866d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed84cb203c7e7954595af6c0b6e1ec2fdc61bbb75a1a605b3e71282836866d83->enter($__internal_ed84cb203c7e7954595af6c0b6e1ec2fdc61bbb75a1a605b3e71282836866d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_f6186f99cfd9af7d2dbf823e147ad87880c3731943eae8504770cf650fc46f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6186f99cfd9af7d2dbf823e147ad87880c3731943eae8504770cf650fc46f36->enter($__internal_f6186f99cfd9af7d2dbf823e147ad87880c3731943eae8504770cf650fc46f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_f6186f99cfd9af7d2dbf823e147ad87880c3731943eae8504770cf650fc46f36->leave($__internal_f6186f99cfd9af7d2dbf823e147ad87880c3731943eae8504770cf650fc46f36_prof);

        
        $__internal_ed84cb203c7e7954595af6c0b6e1ec2fdc61bbb75a1a605b3e71282836866d83->leave($__internal_ed84cb203c7e7954595af6c0b6e1ec2fdc61bbb75a1a605b3e71282836866d83_prof);

    }

    // line 179
    public function block_letter($context, array $blocks = array())
    {
        $__internal_0f360ff26c833e8cf5dfd56722f296e5ae55e682898f5203b14081b3077c80ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f360ff26c833e8cf5dfd56722f296e5ae55e682898f5203b14081b3077c80ef->enter($__internal_0f360ff26c833e8cf5dfd56722f296e5ae55e682898f5203b14081b3077c80ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_8036bb32d7e27aeefb13f4f48e435730a252ecfbdd0af0f7570225f1f74318d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8036bb32d7e27aeefb13f4f48e435730a252ecfbdd0af0f7570225f1f74318d8->enter($__internal_8036bb32d7e27aeefb13f4f48e435730a252ecfbdd0af0f7570225f1f74318d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_8036bb32d7e27aeefb13f4f48e435730a252ecfbdd0af0f7570225f1f74318d8->leave($__internal_8036bb32d7e27aeefb13f4f48e435730a252ecfbdd0af0f7570225f1f74318d8_prof);

        
        $__internal_0f360ff26c833e8cf5dfd56722f296e5ae55e682898f5203b14081b3077c80ef->leave($__internal_0f360ff26c833e8cf5dfd56722f296e5ae55e682898f5203b14081b3077c80ef_prof);

    }

    // line 180
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_26378f5263087248c009a39e43a970e84a497ff76943776a01ad5f8f635011a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26378f5263087248c009a39e43a970e84a497ff76943776a01ad5f8f635011a1->enter($__internal_26378f5263087248c009a39e43a970e84a497ff76943776a01ad5f8f635011a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_eda83fd2761a6ec113be39f1c0938f95929e73a6493e7cb7aceeb005d329b3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda83fd2761a6ec113be39f1c0938f95929e73a6493e7cb7aceeb005d329b3fa->enter($__internal_eda83fd2761a6ec113be39f1c0938f95929e73a6493e7cb7aceeb005d329b3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_eda83fd2761a6ec113be39f1c0938f95929e73a6493e7cb7aceeb005d329b3fa->leave($__internal_eda83fd2761a6ec113be39f1c0938f95929e73a6493e7cb7aceeb005d329b3fa_prof);

        
        $__internal_26378f5263087248c009a39e43a970e84a497ff76943776a01ad5f8f635011a1->leave($__internal_26378f5263087248c009a39e43a970e84a497ff76943776a01ad5f8f635011a1_prof);

    }

    // line 181
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_a4238b39ad9faf58977d7f0791f7441db32f7a7e8ed9750477431e8c8d6363cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4238b39ad9faf58977d7f0791f7441db32f7a7e8ed9750477431e8c8d6363cf->enter($__internal_a4238b39ad9faf58977d7f0791f7441db32f7a7e8ed9750477431e8c8d6363cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_bece64725f27907d7d1595c651d281a54fd7749f4ea06952c5688aea5f47466c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bece64725f27907d7d1595c651d281a54fd7749f4ea06952c5688aea5f47466c->enter($__internal_bece64725f27907d7d1595c651d281a54fd7749f4ea06952c5688aea5f47466c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_bece64725f27907d7d1595c651d281a54fd7749f4ea06952c5688aea5f47466c->leave($__internal_bece64725f27907d7d1595c651d281a54fd7749f4ea06952c5688aea5f47466c_prof);

        
        $__internal_a4238b39ad9faf58977d7f0791f7441db32f7a7e8ed9750477431e8c8d6363cf->leave($__internal_a4238b39ad9faf58977d7f0791f7441db32f7a7e8ed9750477431e8c8d6363cf_prof);

    }

    // line 182
    public function block_classement($context, array $blocks = array())
    {
        $__internal_cb1addc81473cee4a8b33568ae73ab51eb6dfe4b5b788141255dbdf72178c7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1addc81473cee4a8b33568ae73ab51eb6dfe4b5b788141255dbdf72178c7d3->enter($__internal_cb1addc81473cee4a8b33568ae73ab51eb6dfe4b5b788141255dbdf72178c7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_cd748a5b392f00e1c9ac349fb78ab047c17b51fd2ab1764e513e695580d03bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd748a5b392f00e1c9ac349fb78ab047c17b51fd2ab1764e513e695580d03bcb->enter($__internal_cd748a5b392f00e1c9ac349fb78ab047c17b51fd2ab1764e513e695580d03bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_cd748a5b392f00e1c9ac349fb78ab047c17b51fd2ab1764e513e695580d03bcb->leave($__internal_cd748a5b392f00e1c9ac349fb78ab047c17b51fd2ab1764e513e695580d03bcb_prof);

        
        $__internal_cb1addc81473cee4a8b33568ae73ab51eb6dfe4b5b788141255dbdf72178c7d3->leave($__internal_cb1addc81473cee4a8b33568ae73ab51eb6dfe4b5b788141255dbdf72178c7d3_prof);

    }

    // line 184
    public function block_contact($context, array $blocks = array())
    {
        $__internal_3ee67176a5e0da81a10e25ac4f4c8e9af945cd0dba34365cfbff3bcc155b950a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee67176a5e0da81a10e25ac4f4c8e9af945cd0dba34365cfbff3bcc155b950a->enter($__internal_3ee67176a5e0da81a10e25ac4f4c8e9af945cd0dba34365cfbff3bcc155b950a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_e020833e350fdc0ae75ec6667d0faca5ed1d3941ef0b35a2c9b68f94e7dc6423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e020833e350fdc0ae75ec6667d0faca5ed1d3941ef0b35a2c9b68f94e7dc6423->enter($__internal_e020833e350fdc0ae75ec6667d0faca5ed1d3941ef0b35a2c9b68f94e7dc6423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        echo "       
    <!-- Contact Section -->
    <section id=\"contact\" class=\"section-style\" data-background-image=\"";
        // line 186
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
        
        $__internal_e020833e350fdc0ae75ec6667d0faca5ed1d3941ef0b35a2c9b68f94e7dc6423->leave($__internal_e020833e350fdc0ae75ec6667d0faca5ed1d3941ef0b35a2c9b68f94e7dc6423_prof);

        
        $__internal_3ee67176a5e0da81a10e25ac4f4c8e9af945cd0dba34365cfbff3bcc155b950a->leave($__internal_3ee67176a5e0da81a10e25ac4f4c8e9af945cd0dba34365cfbff3bcc155b950a_prof);

    }

    // line 273
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c0bf68ef94bd67a54a9a6c95a8c9d1b0605396e78d0c1bad7bcdd0f2b70cc2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bf68ef94bd67a54a9a6c95a8c9d1b0605396e78d0c1bad7bcdd0f2b70cc2d3->enter($__internal_c0bf68ef94bd67a54a9a6c95a8c9d1b0605396e78d0c1bad7bcdd0f2b70cc2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_05bd22f0c7db51d6a8f2b0b944252f1828b56029a4d40d03918fb1db6b998047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bd22f0c7db51d6a8f2b0b944252f1828b56029a4d40d03918fb1db6b998047->enter($__internal_05bd22f0c7db51d6a8f2b0b944252f1828b56029a4d40d03918fb1db6b998047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 274
        echo "    <!-- Footer Section -->
    <footer id=\"footer-section\">
        <p class=\"copyright\">
            &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
        </p>
    </footer>
    <!-- Footer Section End -->
";
        
        $__internal_05bd22f0c7db51d6a8f2b0b944252f1828b56029a4d40d03918fb1db6b998047->leave($__internal_05bd22f0c7db51d6a8f2b0b944252f1828b56029a4d40d03918fb1db6b998047_prof);

        
        $__internal_c0bf68ef94bd67a54a9a6c95a8c9d1b0605396e78d0c1bad7bcdd0f2b70cc2d3->leave($__internal_c0bf68ef94bd67a54a9a6c95a8c9d1b0605396e78d0c1bad7bcdd0f2b70cc2d3_prof);

    }

    // line 283
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_06282b3757c0aa64c03863ac0fde7cd88346c0bd5c9f3f1a53dec880646dacba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06282b3757c0aa64c03863ac0fde7cd88346c0bd5c9f3f1a53dec880646dacba->enter($__internal_06282b3757c0aa64c03863ac0fde7cd88346c0bd5c9f3f1a53dec880646dacba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_bc896023e6ab484b4463d1a87e7409d896b542d077b1fde9243ce8ad83f3cfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc896023e6ab484b4463d1a87e7409d896b542d077b1fde9243ce8ad83f3cfe7->enter($__internal_bc896023e6ab484b4463d1a87e7409d896b542d077b1fde9243ce8ad83f3cfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        // line 284
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
        
        $__internal_bc896023e6ab484b4463d1a87e7409d896b542d077b1fde9243ce8ad83f3cfe7->leave($__internal_bc896023e6ab484b4463d1a87e7409d896b542d077b1fde9243ce8ad83f3cfe7_prof);

        
        $__internal_06282b3757c0aa64c03863ac0fde7cd88346c0bd5c9f3f1a53dec880646dacba->leave($__internal_06282b3757c0aa64c03863ac0fde7cd88346c0bd5c9f3f1a53dec880646dacba_prof);

    }

    // line 307
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_6bba5396e07214772f9e4b45ac58c87ff7917c8edd6743372fe2e39f5994bc18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bba5396e07214772f9e4b45ac58c87ff7917c8edd6743372fe2e39f5994bc18->enter($__internal_6bba5396e07214772f9e4b45ac58c87ff7917c8edd6743372fe2e39f5994bc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_b65675cc840b2404c37bd111dd8d3b86f1d1dd7acddc888da512b1a89f32858c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65675cc840b2404c37bd111dd8d3b86f1d1dd7acddc888da512b1a89f32858c->enter($__internal_b65675cc840b2404c37bd111dd8d3b86f1d1dd7acddc888da512b1a89f32858c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "               
    <!-- conexion Switcher  -->
    <section id=\"conexion\">
        <div>

            <h3>Conexion</h3>


            <div class=\"menu\">
                <div>
                    ";
        // line 317
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 318
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 319
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 320
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 323
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 325
        echo "                </div>
                <br/>
                <a href=\"";
        // line 327
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
                <br/>
                <a href=\"";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Profile</a>
            </div>
        </div>
        <div class=\"bottom\">
            <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
        </div>
    </section>
    <!-- Conexion Switcher End -->
";
        
        $__internal_b65675cc840b2404c37bd111dd8d3b86f1d1dd7acddc888da512b1a89f32858c->leave($__internal_b65675cc840b2404c37bd111dd8d3b86f1d1dd7acddc888da512b1a89f32858c_prof);

        
        $__internal_6bba5396e07214772f9e4b45ac58c87ff7917c8edd6743372fe2e39f5994bc18->leave($__internal_6bba5396e07214772f9e4b45ac58c87ff7917c8edd6743372fe2e39f5994bc18_prof);

    }

    // line 339
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8525ad8633db4f576203fc9204b19b4b146d1d8577cd01bf5496582cf5bc0bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8525ad8633db4f576203fc9204b19b4b146d1d8577cd01bf5496582cf5bc0bef->enter($__internal_8525ad8633db4f576203fc9204b19b4b146d1d8577cd01bf5496582cf5bc0bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4080574b5ac52caf4231965d95bdc5183c9e8c0af0ef4c27d905fdfa0d523092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4080574b5ac52caf4231965d95bdc5183c9e8c0af0ef4c27d905fdfa0d523092->enter($__internal_4080574b5ac52caf4231965d95bdc5183c9e8c0af0ef4c27d905fdfa0d523092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 340
        echo "    <!-- jQuery Library -->      
    <script type=\"text/javascript\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Modernizr js -->
    <script type=\"text/javascript\" src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.8.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Plugins -->
    <script type=\"text/javascript\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom JavaScript Functions -->
    <script type=\"text/javascript\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>
    <!-- Color Style Switcher -->
    <script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/switcher.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4080574b5ac52caf4231965d95bdc5183c9e8c0af0ef4c27d905fdfa0d523092->leave($__internal_4080574b5ac52caf4231965d95bdc5183c9e8c0af0ef4c27d905fdfa0d523092_prof);

        
        $__internal_8525ad8633db4f576203fc9204b19b4b146d1d8577cd01bf5496582cf5bc0bef->leave($__internal_8525ad8633db4f576203fc9204b19b4b146d1d8577cd01bf5496582cf5bc0bef_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  835 => 351,  830 => 349,  825 => 347,  820 => 345,  815 => 343,  810 => 341,  807 => 340,  798 => 339,  779 => 329,  774 => 327,  770 => 325,  762 => 323,  756 => 320,  752 => 319,  747 => 318,  745 => 317,  725 => 307,  694 => 284,  685 => 283,  668 => 274,  659 => 273,  563 => 186,  551 => 184,  534 => 182,  517 => 181,  500 => 180,  483 => 179,  466 => 178,  449 => 177,  432 => 176,  419 => 166,  410 => 165,  336 => 107,  309 => 89,  297 => 87,  281 => 80,  277 => 79,  271 => 76,  267 => 75,  263 => 74,  244 => 57,  235 => 56,  201 => 38,  184 => 27,  177 => 23,  173 => 22,  167 => 19,  161 => 16,  138 => 3,  126 => 353,  124 => 339,  121 => 338,  119 => 307,  116 => 306,  114 => 283,  111 => 282,  109 => 273,  106 => 272,  104 => 184,  101 => 183,  99 => 182,  97 => 181,  95 => 180,  93 => 179,  91 => 178,  89 => 177,  87 => 176,  79 => 170,  77 => 165,  74 => 164,  72 => 107,  68 => 105,  66 => 87,  63 => 86,  61 => 56,  57 => 54,  55 => 38,  49 => 34,  47 => 3,  43 => 1,);
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
