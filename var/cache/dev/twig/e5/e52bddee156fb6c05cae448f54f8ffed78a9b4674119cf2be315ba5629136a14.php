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
            'timer' => array($this, 'block_timer'),
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
        $__internal_2e1703b847a675fb48b935f074009b546b70768cb7341697ff6180e6100fe05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1703b847a675fb48b935f074009b546b70768cb7341697ff6180e6100fe05e->enter($__internal_2e1703b847a675fb48b935f074009b546b70768cb7341697ff6180e6100fe05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fd8fdc38adb5bc94fdee0494093b22291e3bee4c69228a1397e705a252ab5c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8fdc38adb5bc94fdee0494093b22291e3bee4c69228a1397e705a252ab5c8d->enter($__internal_fd8fdc38adb5bc94fdee0494093b22291e3bee4c69228a1397e705a252ab5c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 37
        $this->displayBlock('preloder', $context, $blocks);
        // line 53
        echo " 

        ";
        // line 55
        $this->displayBlock('menu', $context, $blocks);
        // line 82
        echo "
        ";
        // line 83
        $this->displayBlock('timer', $context, $blocks);
        // line 166
        echo "
        ";
        // line 167
        $this->displayBlock('letter', $context, $blocks);
        // line 168
        echo "        ";
        $this->displayBlock('portfolio', $context, $blocks);
        // line 169
        echo "        ";
        $this->displayBlock('resultat', $context, $blocks);
        // line 170
        echo "        ";
        $this->displayBlock('classement', $context, $blocks);
        // line 171
        echo "
        ";
        // line 172
        $this->displayBlock('contact', $context, $blocks);
        // line 260
        echo "
        ";
        // line 261
        $this->displayBlock('footer', $context, $blocks);
        // line 270
        echo "
        ";
        // line 271
        $this->displayBlock('color_switcher', $context, $blocks);
        // line 294
        echo "
        ";
        // line 295
        $this->displayBlock('conexion_switcher', $context, $blocks);
        // line 296
        echo "
        ";
        // line 297
        $this->displayBlock('javascripts', $context, $blocks);
        // line 311
        echo "    </body>
</html>
";
        
        $__internal_2e1703b847a675fb48b935f074009b546b70768cb7341697ff6180e6100fe05e->leave($__internal_2e1703b847a675fb48b935f074009b546b70768cb7341697ff6180e6100fe05e_prof);

        
        $__internal_fd8fdc38adb5bc94fdee0494093b22291e3bee4c69228a1397e705a252ab5c8d->leave($__internal_fd8fdc38adb5bc94fdee0494093b22291e3bee4c69228a1397e705a252ab5c8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1079fc65dffc402583de3196a6635f1a84bcbc74189a50095ff2202e20f173b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1079fc65dffc402583de3196a6635f1a84bcbc74189a50095ff2202e20f173b6->enter($__internal_1079fc65dffc402583de3196a6635f1a84bcbc74189a50095ff2202e20f173b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_83a4a0af872290c3b3ca8a2dd1b9266a3b26c495f0371387610a9f3909724de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a4a0af872290c3b3ca8a2dd1b9266a3b26c495f0371387610a9f3909724de9->enter($__internal_83a4a0af872290c3b3ca8a2dd1b9266a3b26c495f0371387610a9f3909724de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_83a4a0af872290c3b3ca8a2dd1b9266a3b26c495f0371387610a9f3909724de9->leave($__internal_83a4a0af872290c3b3ca8a2dd1b9266a3b26c495f0371387610a9f3909724de9_prof);

        
        $__internal_1079fc65dffc402583de3196a6635f1a84bcbc74189a50095ff2202e20f173b6->leave($__internal_1079fc65dffc402583de3196a6635f1a84bcbc74189a50095ff2202e20f173b6_prof);

    }

    // line 37
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_bda7ff882d984c81f780b81936b15302713789f1d38462eb4942df678ae0aa51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda7ff882d984c81f780b81936b15302713789f1d38462eb4942df678ae0aa51->enter($__internal_bda7ff882d984c81f780b81936b15302713789f1d38462eb4942df678ae0aa51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_444eda8b83f6f6525ca5273c0b5b4804ba33f24d65b9bac2829e490a7c9049a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444eda8b83f6f6525ca5273c0b5b4804ba33f24d65b9bac2829e490a7c9049a8->enter($__internal_444eda8b83f6f6525ca5273c0b5b4804ba33f24d65b9bac2829e490a7c9049a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_444eda8b83f6f6525ca5273c0b5b4804ba33f24d65b9bac2829e490a7c9049a8->leave($__internal_444eda8b83f6f6525ca5273c0b5b4804ba33f24d65b9bac2829e490a7c9049a8_prof);

        
        $__internal_bda7ff882d984c81f780b81936b15302713789f1d38462eb4942df678ae0aa51->leave($__internal_bda7ff882d984c81f780b81936b15302713789f1d38462eb4942df678ae0aa51_prof);

    }

    // line 55
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aaf49351f24adfe2f3e586a07fe91a97baf3f3b681e168ea652788bb07800b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf49351f24adfe2f3e586a07fe91a97baf3f3b681e168ea652788bb07800b52->enter($__internal_aaf49351f24adfe2f3e586a07fe91a97baf3f3b681e168ea652788bb07800b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc402bed335919c21e499ead78cf2eeee87aac5e5ad1d7625626337b28dfcf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc402bed335919c21e499ead78cf2eeee87aac5e5ad1d7625626337b28dfcf02->enter($__internal_fc402bed335919c21e499ead78cf2eeee87aac5e5ad1d7625626337b28dfcf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 56
        echo "            <!-- Main Menu -->
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
                        <li class=\"active\"><a href=\"#page-top\">Home</a></li>
                        <li><a href=\"#lettre\">Lettre du président</a></li>
                        <li><a href=\"#portfolio\">Portfolio</a></li>
                        <li><a href=\"#resultat\">Résultat des courses</a></li>\t
                        <li><a href=\"#classement\">Classement Général</a></li>\t
                        <li><a href=\"#contact\">Contact</a></li>\t\t
                    </ul> <!-- /.nav .navbar-nav -->
                </nav> <!-- /.navbar-collapse  -->
            </div><!-- /#main-menu -->
            <!-- Main Menu End -->
        ";
        
        $__internal_fc402bed335919c21e499ead78cf2eeee87aac5e5ad1d7625626337b28dfcf02->leave($__internal_fc402bed335919c21e499ead78cf2eeee87aac5e5ad1d7625626337b28dfcf02_prof);

        
        $__internal_aaf49351f24adfe2f3e586a07fe91a97baf3f3b681e168ea652788bb07800b52->leave($__internal_aaf49351f24adfe2f3e586a07fe91a97baf3f3b681e168ea652788bb07800b52_prof);

    }

    // line 83
    public function block_timer($context, array $blocks = array())
    {
        $__internal_254948297fcb1ca816cbede5ce55d5cdc4f68fd781ce8f8f4ea02a1b982cf296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254948297fcb1ca816cbede5ce55d5cdc4f68fd781ce8f8f4ea02a1b982cf296->enter($__internal_254948297fcb1ca816cbede5ce55d5cdc4f68fd781ce8f8f4ea02a1b982cf296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_4c33f5bc339aa08cef00768575750d07f54f4a21ebeb5fd42e5a0f14da8c95e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c33f5bc339aa08cef00768575750d07f54f4a21ebeb5fd42e5a0f14da8c95e2->enter($__internal_4c33f5bc339aa08cef00768575750d07f54f4a21ebeb5fd42e5a0f14da8c95e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        // line 84
        echo "            <!-- Page Top Section -->
            <section id=\"page-top\" class=\"section-style\" data-background-image=\"";
        // line 85
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
                        <div id=\"time_countdown\" class=\"time-count-container\">

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



                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->

                    </div><!-- /.container -->
                </div><!-- /.pattern -->\t\t
            </section><!-- /#page-top -->
            <!-- Page Top Section  End -->
        ";
        
        $__internal_4c33f5bc339aa08cef00768575750d07f54f4a21ebeb5fd42e5a0f14da8c95e2->leave($__internal_4c33f5bc339aa08cef00768575750d07f54f4a21ebeb5fd42e5a0f14da8c95e2_prof);

        
        $__internal_254948297fcb1ca816cbede5ce55d5cdc4f68fd781ce8f8f4ea02a1b982cf296->leave($__internal_254948297fcb1ca816cbede5ce55d5cdc4f68fd781ce8f8f4ea02a1b982cf296_prof);

    }

    // line 167
    public function block_letter($context, array $blocks = array())
    {
        $__internal_e4ad22fa8d05583523965fef0675b7caff4b251ca8260ab05c74c41d029848ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ad22fa8d05583523965fef0675b7caff4b251ca8260ab05c74c41d029848ab->enter($__internal_e4ad22fa8d05583523965fef0675b7caff4b251ca8260ab05c74c41d029848ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_0ef755cbfb2c98914d3556ff9a84930b694396f4af14220a3a5f927bff47c3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef755cbfb2c98914d3556ff9a84930b694396f4af14220a3a5f927bff47c3c7->enter($__internal_0ef755cbfb2c98914d3556ff9a84930b694396f4af14220a3a5f927bff47c3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_0ef755cbfb2c98914d3556ff9a84930b694396f4af14220a3a5f927bff47c3c7->leave($__internal_0ef755cbfb2c98914d3556ff9a84930b694396f4af14220a3a5f927bff47c3c7_prof);

        
        $__internal_e4ad22fa8d05583523965fef0675b7caff4b251ca8260ab05c74c41d029848ab->leave($__internal_e4ad22fa8d05583523965fef0675b7caff4b251ca8260ab05c74c41d029848ab_prof);

    }

    // line 168
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_5ec79ef74de20edff8d539e5e306859eb004849275d6cb31bfb8c9077a7da639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec79ef74de20edff8d539e5e306859eb004849275d6cb31bfb8c9077a7da639->enter($__internal_5ec79ef74de20edff8d539e5e306859eb004849275d6cb31bfb8c9077a7da639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_efe760d8ff1a5050248f273c1745b6a1be04765e38597d8cfef764f4c94a45b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe760d8ff1a5050248f273c1745b6a1be04765e38597d8cfef764f4c94a45b5->enter($__internal_efe760d8ff1a5050248f273c1745b6a1be04765e38597d8cfef764f4c94a45b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_efe760d8ff1a5050248f273c1745b6a1be04765e38597d8cfef764f4c94a45b5->leave($__internal_efe760d8ff1a5050248f273c1745b6a1be04765e38597d8cfef764f4c94a45b5_prof);

        
        $__internal_5ec79ef74de20edff8d539e5e306859eb004849275d6cb31bfb8c9077a7da639->leave($__internal_5ec79ef74de20edff8d539e5e306859eb004849275d6cb31bfb8c9077a7da639_prof);

    }

    // line 169
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_078a6c1bd7ec101c69cc6c175b5c67db220f5427bf6f283a563db2874128e46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078a6c1bd7ec101c69cc6c175b5c67db220f5427bf6f283a563db2874128e46e->enter($__internal_078a6c1bd7ec101c69cc6c175b5c67db220f5427bf6f283a563db2874128e46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_65bcfdd8f5fe4b67dc75873f9c77cb7940d9c81052e251d26199947729da343e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bcfdd8f5fe4b67dc75873f9c77cb7940d9c81052e251d26199947729da343e->enter($__internal_65bcfdd8f5fe4b67dc75873f9c77cb7940d9c81052e251d26199947729da343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_65bcfdd8f5fe4b67dc75873f9c77cb7940d9c81052e251d26199947729da343e->leave($__internal_65bcfdd8f5fe4b67dc75873f9c77cb7940d9c81052e251d26199947729da343e_prof);

        
        $__internal_078a6c1bd7ec101c69cc6c175b5c67db220f5427bf6f283a563db2874128e46e->leave($__internal_078a6c1bd7ec101c69cc6c175b5c67db220f5427bf6f283a563db2874128e46e_prof);

    }

    // line 170
    public function block_classement($context, array $blocks = array())
    {
        $__internal_9899bcdc9fd4549a5f4bd941da54d7ceb48a526d840a066d8027e880060dec0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9899bcdc9fd4549a5f4bd941da54d7ceb48a526d840a066d8027e880060dec0b->enter($__internal_9899bcdc9fd4549a5f4bd941da54d7ceb48a526d840a066d8027e880060dec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_f3033356c2465f8df1c9ab2520c040184e1370c49c8ec81962ce6c8f1b8b46e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3033356c2465f8df1c9ab2520c040184e1370c49c8ec81962ce6c8f1b8b46e7->enter($__internal_f3033356c2465f8df1c9ab2520c040184e1370c49c8ec81962ce6c8f1b8b46e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_f3033356c2465f8df1c9ab2520c040184e1370c49c8ec81962ce6c8f1b8b46e7->leave($__internal_f3033356c2465f8df1c9ab2520c040184e1370c49c8ec81962ce6c8f1b8b46e7_prof);

        
        $__internal_9899bcdc9fd4549a5f4bd941da54d7ceb48a526d840a066d8027e880060dec0b->leave($__internal_9899bcdc9fd4549a5f4bd941da54d7ceb48a526d840a066d8027e880060dec0b_prof);

    }

    // line 172
    public function block_contact($context, array $blocks = array())
    {
        $__internal_c1f892d21174ef9a3a649c2605507556d1cdefd86e7d8532dfe3b9f2272e64ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f892d21174ef9a3a649c2605507556d1cdefd86e7d8532dfe3b9f2272e64ba->enter($__internal_c1f892d21174ef9a3a649c2605507556d1cdefd86e7d8532dfe3b9f2272e64ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_a88f25d6a77c23a20718d35ad31c9e4dfa8d7829cc80daecb19c44442a4d4170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88f25d6a77c23a20718d35ad31c9e4dfa8d7829cc80daecb19c44442a4d4170->enter($__internal_a88f25d6a77c23a20718d35ad31c9e4dfa8d7829cc80daecb19c44442a4d4170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        echo "       
            <!-- Contact Section -->
            <section id=\"contact\" class=\"section-style\" data-background-image=\"";
        // line 174
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
        
        $__internal_a88f25d6a77c23a20718d35ad31c9e4dfa8d7829cc80daecb19c44442a4d4170->leave($__internal_a88f25d6a77c23a20718d35ad31c9e4dfa8d7829cc80daecb19c44442a4d4170_prof);

        
        $__internal_c1f892d21174ef9a3a649c2605507556d1cdefd86e7d8532dfe3b9f2272e64ba->leave($__internal_c1f892d21174ef9a3a649c2605507556d1cdefd86e7d8532dfe3b9f2272e64ba_prof);

    }

    // line 261
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7176c4a1eb9a6442f26bc2bb557f313a2a4c24748bba77a198e518ab4edfc668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7176c4a1eb9a6442f26bc2bb557f313a2a4c24748bba77a198e518ab4edfc668->enter($__internal_7176c4a1eb9a6442f26bc2bb557f313a2a4c24748bba77a198e518ab4edfc668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_75a4d5d9e0c676427bed741285b9a6d403f41c05343aa8665ff9312793a8b229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a4d5d9e0c676427bed741285b9a6d403f41c05343aa8665ff9312793a8b229->enter($__internal_75a4d5d9e0c676427bed741285b9a6d403f41c05343aa8665ff9312793a8b229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 262
        echo "            <!-- Footer Section -->
            <footer id=\"footer-section\">
                <p class=\"copyright\">
                    &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
                </p>
            </footer>
            <!-- Footer Section End -->
        ";
        
        $__internal_75a4d5d9e0c676427bed741285b9a6d403f41c05343aa8665ff9312793a8b229->leave($__internal_75a4d5d9e0c676427bed741285b9a6d403f41c05343aa8665ff9312793a8b229_prof);

        
        $__internal_7176c4a1eb9a6442f26bc2bb557f313a2a4c24748bba77a198e518ab4edfc668->leave($__internal_7176c4a1eb9a6442f26bc2bb557f313a2a4c24748bba77a198e518ab4edfc668_prof);

    }

    // line 271
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_95ed05f028fbe67c869e51ecd91184703506f79eb55702824824a1f607fbdd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ed05f028fbe67c869e51ecd91184703506f79eb55702824824a1f607fbdd75->enter($__internal_95ed05f028fbe67c869e51ecd91184703506f79eb55702824824a1f607fbdd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_538fb04a20fada3be55317238a6d705c571f9ef59509199a2b23fd84ea7764cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538fb04a20fada3be55317238a6d705c571f9ef59509199a2b23fd84ea7764cc->enter($__internal_538fb04a20fada3be55317238a6d705c571f9ef59509199a2b23fd84ea7764cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        // line 272
        echo "            <!-- Color Variation Switcher  -->
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
        
        $__internal_538fb04a20fada3be55317238a6d705c571f9ef59509199a2b23fd84ea7764cc->leave($__internal_538fb04a20fada3be55317238a6d705c571f9ef59509199a2b23fd84ea7764cc_prof);

        
        $__internal_95ed05f028fbe67c869e51ecd91184703506f79eb55702824824a1f607fbdd75->leave($__internal_95ed05f028fbe67c869e51ecd91184703506f79eb55702824824a1f607fbdd75_prof);

    }

    // line 295
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_db713ee0ba9b9ceb17b245617b9e9ea18cfead3da797c133b9ef8e3e639b4246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db713ee0ba9b9ceb17b245617b9e9ea18cfead3da797c133b9ef8e3e639b4246->enter($__internal_db713ee0ba9b9ceb17b245617b9e9ea18cfead3da797c133b9ef8e3e639b4246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_7197e7726f2b97f7974c36d999b7adcea6d41aad6d923173c4a42451fc520277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7197e7726f2b97f7974c36d999b7adcea6d41aad6d923173c4a42451fc520277->enter($__internal_7197e7726f2b97f7974c36d999b7adcea6d41aad6d923173c4a42451fc520277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "   ";
        
        $__internal_7197e7726f2b97f7974c36d999b7adcea6d41aad6d923173c4a42451fc520277->leave($__internal_7197e7726f2b97f7974c36d999b7adcea6d41aad6d923173c4a42451fc520277_prof);

        
        $__internal_db713ee0ba9b9ceb17b245617b9e9ea18cfead3da797c133b9ef8e3e639b4246->leave($__internal_db713ee0ba9b9ceb17b245617b9e9ea18cfead3da797c133b9ef8e3e639b4246_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d38f7faa5b1c481975c0318799d2323841b335af8dfd503c455c455c131cd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d38f7faa5b1c481975c0318799d2323841b335af8dfd503c455c455c131cd7e->enter($__internal_2d38f7faa5b1c481975c0318799d2323841b335af8dfd503c455c455c131cd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f42697449d5bd85cae78517bfb67c64e148d5f3b37a215ceec23d8941d8ed39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42697449d5bd85cae78517bfb67c64e148d5f3b37a215ceec23d8941d8ed39d->enter($__internal_f42697449d5bd85cae78517bfb67c64e148d5f3b37a215ceec23d8941d8ed39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 298
        echo "            <!-- jQuery Library -->      
            <script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Modernizr js -->
            <script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.8.0.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Plugins -->
            <script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom JavaScript Functions -->
            <script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>
            <!-- Color Style Switcher -->
            <script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/switcher.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f42697449d5bd85cae78517bfb67c64e148d5f3b37a215ceec23d8941d8ed39d->leave($__internal_f42697449d5bd85cae78517bfb67c64e148d5f3b37a215ceec23d8941d8ed39d_prof);

        
        $__internal_2d38f7faa5b1c481975c0318799d2323841b335af8dfd503c455c455c131cd7e->leave($__internal_2d38f7faa5b1c481975c0318799d2323841b335af8dfd503c455c455c131cd7e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  654 => 309,  649 => 307,  644 => 305,  639 => 303,  634 => 301,  629 => 299,  626 => 298,  617 => 297,  599 => 295,  568 => 272,  559 => 271,  542 => 262,  533 => 261,  437 => 174,  425 => 172,  408 => 170,  391 => 169,  374 => 168,  357 => 167,  266 => 85,  263 => 84,  254 => 83,  219 => 56,  210 => 55,  176 => 37,  159 => 27,  152 => 23,  148 => 22,  142 => 19,  136 => 16,  113 => 3,  101 => 311,  99 => 297,  96 => 296,  94 => 295,  91 => 294,  89 => 271,  86 => 270,  84 => 261,  81 => 260,  79 => 172,  76 => 171,  73 => 170,  70 => 169,  67 => 168,  65 => 167,  62 => 166,  60 => 83,  57 => 82,  55 => 55,  51 => 53,  49 => 37,  44 => 34,  42 => 3,  38 => 1,);
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
                        <li class=\"active\"><a href=\"#page-top\">Home</a></li>
                        <li><a href=\"#lettre\">Lettre du président</a></li>
                        <li><a href=\"#portfolio\">Portfolio</a></li>
                        <li><a href=\"#resultat\">Résultat des courses</a></li>\t
                        <li><a href=\"#classement\">Classement Général</a></li>\t
                        <li><a href=\"#contact\">Contact</a></li>\t\t
                    </ul> <!-- /.nav .navbar-nav -->
                </nav> <!-- /.navbar-collapse  -->
            </div><!-- /#main-menu -->
            <!-- Main Menu End -->
        {% endblock %}

        {% block timer %}
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
                        <div id=\"time_countdown\" class=\"time-count-container\">

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



                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->

                    </div><!-- /.container -->
                </div><!-- /.pattern -->\t\t
            </section><!-- /#page-top -->
            <!-- Page Top Section  End -->
        {% endblock%}

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

        {% block conexion_switcher %}   {% endblock %}

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
