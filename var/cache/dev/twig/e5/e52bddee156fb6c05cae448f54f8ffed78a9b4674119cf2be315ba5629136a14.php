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
        $__internal_d742e7bd91a6f04d6d4cd46bd66961b90c7c068bbd2a9e39c31eaf764f3f203a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d742e7bd91a6f04d6d4cd46bd66961b90c7c068bbd2a9e39c31eaf764f3f203a->enter($__internal_d742e7bd91a6f04d6d4cd46bd66961b90c7c068bbd2a9e39c31eaf764f3f203a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c47a33b3e969da90c7487520040d469f2479f70e96a65e5b79816079f1d4f944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47a33b3e969da90c7487520040d469f2479f70e96a65e5b79816079f1d4f944->enter($__internal_c47a33b3e969da90c7487520040d469f2479f70e96a65e5b79816079f1d4f944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d742e7bd91a6f04d6d4cd46bd66961b90c7c068bbd2a9e39c31eaf764f3f203a->leave($__internal_d742e7bd91a6f04d6d4cd46bd66961b90c7c068bbd2a9e39c31eaf764f3f203a_prof);

        
        $__internal_c47a33b3e969da90c7487520040d469f2479f70e96a65e5b79816079f1d4f944->leave($__internal_c47a33b3e969da90c7487520040d469f2479f70e96a65e5b79816079f1d4f944_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90436059d73d9f9cf3fd71bc8899a577f617cff4d49f9b1b26c9ead5908651d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90436059d73d9f9cf3fd71bc8899a577f617cff4d49f9b1b26c9ead5908651d4->enter($__internal_90436059d73d9f9cf3fd71bc8899a577f617cff4d49f9b1b26c9ead5908651d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6efc24d2d33e8607207eb1d5ddf8479e7e003597b3a03334611983f277b502f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efc24d2d33e8607207eb1d5ddf8479e7e003597b3a03334611983f277b502f5->enter($__internal_6efc24d2d33e8607207eb1d5ddf8479e7e003597b3a03334611983f277b502f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6efc24d2d33e8607207eb1d5ddf8479e7e003597b3a03334611983f277b502f5->leave($__internal_6efc24d2d33e8607207eb1d5ddf8479e7e003597b3a03334611983f277b502f5_prof);

        
        $__internal_90436059d73d9f9cf3fd71bc8899a577f617cff4d49f9b1b26c9ead5908651d4->leave($__internal_90436059d73d9f9cf3fd71bc8899a577f617cff4d49f9b1b26c9ead5908651d4_prof);

    }

    // line 37
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_be9d7ba54727025034634e0f0704af7acbae1a0e9928aa6f09ace4670415d78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9d7ba54727025034634e0f0704af7acbae1a0e9928aa6f09ace4670415d78f->enter($__internal_be9d7ba54727025034634e0f0704af7acbae1a0e9928aa6f09ace4670415d78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_9f0edc19c685553bee23b4c2304b41224a28d41e20052d884f1bcbd3adc8b9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0edc19c685553bee23b4c2304b41224a28d41e20052d884f1bcbd3adc8b9cf->enter($__internal_9f0edc19c685553bee23b4c2304b41224a28d41e20052d884f1bcbd3adc8b9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_9f0edc19c685553bee23b4c2304b41224a28d41e20052d884f1bcbd3adc8b9cf->leave($__internal_9f0edc19c685553bee23b4c2304b41224a28d41e20052d884f1bcbd3adc8b9cf_prof);

        
        $__internal_be9d7ba54727025034634e0f0704af7acbae1a0e9928aa6f09ace4670415d78f->leave($__internal_be9d7ba54727025034634e0f0704af7acbae1a0e9928aa6f09ace4670415d78f_prof);

    }

    // line 55
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a943358e7fc31757bdb15326ee1d78845efea3316f253d691fb5a69a1ec2369c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a943358e7fc31757bdb15326ee1d78845efea3316f253d691fb5a69a1ec2369c->enter($__internal_a943358e7fc31757bdb15326ee1d78845efea3316f253d691fb5a69a1ec2369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95c2e94160481cf4ec34b293fbf650e2650d7e8c0ed26dcec7bdb5b9c2680fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c2e94160481cf4ec34b293fbf650e2650d7e8c0ed26dcec7bdb5b9c2680fd6->enter($__internal_95c2e94160481cf4ec34b293fbf650e2650d7e8c0ed26dcec7bdb5b9c2680fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_95c2e94160481cf4ec34b293fbf650e2650d7e8c0ed26dcec7bdb5b9c2680fd6->leave($__internal_95c2e94160481cf4ec34b293fbf650e2650d7e8c0ed26dcec7bdb5b9c2680fd6_prof);

        
        $__internal_a943358e7fc31757bdb15326ee1d78845efea3316f253d691fb5a69a1ec2369c->leave($__internal_a943358e7fc31757bdb15326ee1d78845efea3316f253d691fb5a69a1ec2369c_prof);

    }

    // line 83
    public function block_timer($context, array $blocks = array())
    {
        $__internal_98fbc2e9320d9d636a862c9d0aceaa6ede395bb1e4d20242c877d05d2c3c6cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fbc2e9320d9d636a862c9d0aceaa6ede395bb1e4d20242c877d05d2c3c6cfd->enter($__internal_98fbc2e9320d9d636a862c9d0aceaa6ede395bb1e4d20242c877d05d2c3c6cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_e1794a70c229b7b084f9ff99efb5ac26a4116c8a13301cea27212eb9d4f9dc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1794a70c229b7b084f9ff99efb5ac26a4116c8a13301cea27212eb9d4f9dc37->enter($__internal_e1794a70c229b7b084f9ff99efb5ac26a4116c8a13301cea27212eb9d4f9dc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_e1794a70c229b7b084f9ff99efb5ac26a4116c8a13301cea27212eb9d4f9dc37->leave($__internal_e1794a70c229b7b084f9ff99efb5ac26a4116c8a13301cea27212eb9d4f9dc37_prof);

        
        $__internal_98fbc2e9320d9d636a862c9d0aceaa6ede395bb1e4d20242c877d05d2c3c6cfd->leave($__internal_98fbc2e9320d9d636a862c9d0aceaa6ede395bb1e4d20242c877d05d2c3c6cfd_prof);

    }

    // line 167
    public function block_letter($context, array $blocks = array())
    {
        $__internal_4daeb84f1b0c9f2ac4c6df7ea9edba53ca1bf5c9aad83e18e28e18ee83d1751a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4daeb84f1b0c9f2ac4c6df7ea9edba53ca1bf5c9aad83e18e28e18ee83d1751a->enter($__internal_4daeb84f1b0c9f2ac4c6df7ea9edba53ca1bf5c9aad83e18e28e18ee83d1751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_aba0d6314fb8a7d5694ac03bc5fa947baaf033bad629cb5eee91c708dc928b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba0d6314fb8a7d5694ac03bc5fa947baaf033bad629cb5eee91c708dc928b37->enter($__internal_aba0d6314fb8a7d5694ac03bc5fa947baaf033bad629cb5eee91c708dc928b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_aba0d6314fb8a7d5694ac03bc5fa947baaf033bad629cb5eee91c708dc928b37->leave($__internal_aba0d6314fb8a7d5694ac03bc5fa947baaf033bad629cb5eee91c708dc928b37_prof);

        
        $__internal_4daeb84f1b0c9f2ac4c6df7ea9edba53ca1bf5c9aad83e18e28e18ee83d1751a->leave($__internal_4daeb84f1b0c9f2ac4c6df7ea9edba53ca1bf5c9aad83e18e28e18ee83d1751a_prof);

    }

    // line 168
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_85ce544202552b554c3345e4a33fc221e149f7d9c1583eac4232d32394a84099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ce544202552b554c3345e4a33fc221e149f7d9c1583eac4232d32394a84099->enter($__internal_85ce544202552b554c3345e4a33fc221e149f7d9c1583eac4232d32394a84099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_5d9a9f973ead6af77388cde2f697143cd034e31c5a5ca8c87b2cb28ae152ba3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9a9f973ead6af77388cde2f697143cd034e31c5a5ca8c87b2cb28ae152ba3c->enter($__internal_5d9a9f973ead6af77388cde2f697143cd034e31c5a5ca8c87b2cb28ae152ba3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_5d9a9f973ead6af77388cde2f697143cd034e31c5a5ca8c87b2cb28ae152ba3c->leave($__internal_5d9a9f973ead6af77388cde2f697143cd034e31c5a5ca8c87b2cb28ae152ba3c_prof);

        
        $__internal_85ce544202552b554c3345e4a33fc221e149f7d9c1583eac4232d32394a84099->leave($__internal_85ce544202552b554c3345e4a33fc221e149f7d9c1583eac4232d32394a84099_prof);

    }

    // line 169
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_bd619c652a0eb8ade36df1df1d7e3b9b8c3141a4edb461675a5afcdd531d7cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd619c652a0eb8ade36df1df1d7e3b9b8c3141a4edb461675a5afcdd531d7cd8->enter($__internal_bd619c652a0eb8ade36df1df1d7e3b9b8c3141a4edb461675a5afcdd531d7cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_47149e3c4e4aecca224963dec205040ad0f13f33ab492b4edda225d8bc81965b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47149e3c4e4aecca224963dec205040ad0f13f33ab492b4edda225d8bc81965b->enter($__internal_47149e3c4e4aecca224963dec205040ad0f13f33ab492b4edda225d8bc81965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_47149e3c4e4aecca224963dec205040ad0f13f33ab492b4edda225d8bc81965b->leave($__internal_47149e3c4e4aecca224963dec205040ad0f13f33ab492b4edda225d8bc81965b_prof);

        
        $__internal_bd619c652a0eb8ade36df1df1d7e3b9b8c3141a4edb461675a5afcdd531d7cd8->leave($__internal_bd619c652a0eb8ade36df1df1d7e3b9b8c3141a4edb461675a5afcdd531d7cd8_prof);

    }

    // line 170
    public function block_classement($context, array $blocks = array())
    {
        $__internal_c2e48d98ffcd664958c4e3296335e4d98629774d4d5352863e73f4e51ed8e5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e48d98ffcd664958c4e3296335e4d98629774d4d5352863e73f4e51ed8e5e0->enter($__internal_c2e48d98ffcd664958c4e3296335e4d98629774d4d5352863e73f4e51ed8e5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_537e80c8a1f683765d6a101cfd65b011af97be0cd026bdbc4f0a5bedfd0aafcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537e80c8a1f683765d6a101cfd65b011af97be0cd026bdbc4f0a5bedfd0aafcc->enter($__internal_537e80c8a1f683765d6a101cfd65b011af97be0cd026bdbc4f0a5bedfd0aafcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_537e80c8a1f683765d6a101cfd65b011af97be0cd026bdbc4f0a5bedfd0aafcc->leave($__internal_537e80c8a1f683765d6a101cfd65b011af97be0cd026bdbc4f0a5bedfd0aafcc_prof);

        
        $__internal_c2e48d98ffcd664958c4e3296335e4d98629774d4d5352863e73f4e51ed8e5e0->leave($__internal_c2e48d98ffcd664958c4e3296335e4d98629774d4d5352863e73f4e51ed8e5e0_prof);

    }

    // line 172
    public function block_contact($context, array $blocks = array())
    {
        $__internal_70ea7dc140a87905504e24829c2b7433e5c7e5e105f554844a806c7000be6061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ea7dc140a87905504e24829c2b7433e5c7e5e105f554844a806c7000be6061->enter($__internal_70ea7dc140a87905504e24829c2b7433e5c7e5e105f554844a806c7000be6061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_0d7eb7de78253ce8122b19d516583e1bbcf8717191f458acad96bb60d28d8885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7eb7de78253ce8122b19d516583e1bbcf8717191f458acad96bb60d28d8885->enter($__internal_0d7eb7de78253ce8122b19d516583e1bbcf8717191f458acad96bb60d28d8885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_0d7eb7de78253ce8122b19d516583e1bbcf8717191f458acad96bb60d28d8885->leave($__internal_0d7eb7de78253ce8122b19d516583e1bbcf8717191f458acad96bb60d28d8885_prof);

        
        $__internal_70ea7dc140a87905504e24829c2b7433e5c7e5e105f554844a806c7000be6061->leave($__internal_70ea7dc140a87905504e24829c2b7433e5c7e5e105f554844a806c7000be6061_prof);

    }

    // line 261
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ae5737e2725a84586c3c036ac2901957b7a68a204f1b39f0d3ab84d1ac52293e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5737e2725a84586c3c036ac2901957b7a68a204f1b39f0d3ab84d1ac52293e->enter($__internal_ae5737e2725a84586c3c036ac2901957b7a68a204f1b39f0d3ab84d1ac52293e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1688806967e38297dc50a1c3ec072d06171cb20b79a25a15daf7b9a811cdcc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1688806967e38297dc50a1c3ec072d06171cb20b79a25a15daf7b9a811cdcc09->enter($__internal_1688806967e38297dc50a1c3ec072d06171cb20b79a25a15daf7b9a811cdcc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 262
        echo "            <!-- Footer Section -->
            <footer id=\"footer-section\">
                <p class=\"copyright\">
                    &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
                </p>
            </footer>
            <!-- Footer Section End -->
        ";
        
        $__internal_1688806967e38297dc50a1c3ec072d06171cb20b79a25a15daf7b9a811cdcc09->leave($__internal_1688806967e38297dc50a1c3ec072d06171cb20b79a25a15daf7b9a811cdcc09_prof);

        
        $__internal_ae5737e2725a84586c3c036ac2901957b7a68a204f1b39f0d3ab84d1ac52293e->leave($__internal_ae5737e2725a84586c3c036ac2901957b7a68a204f1b39f0d3ab84d1ac52293e_prof);

    }

    // line 271
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_a3e58911fec904a4f989606004369bd11ac8e4da37af7533aa6808928c6ad823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e58911fec904a4f989606004369bd11ac8e4da37af7533aa6808928c6ad823->enter($__internal_a3e58911fec904a4f989606004369bd11ac8e4da37af7533aa6808928c6ad823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_f6c79e71af1abb1a734d65f72596652b27076081d2dc4e1919e0736a6d891fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c79e71af1abb1a734d65f72596652b27076081d2dc4e1919e0736a6d891fc0->enter($__internal_f6c79e71af1abb1a734d65f72596652b27076081d2dc4e1919e0736a6d891fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

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
        
        $__internal_f6c79e71af1abb1a734d65f72596652b27076081d2dc4e1919e0736a6d891fc0->leave($__internal_f6c79e71af1abb1a734d65f72596652b27076081d2dc4e1919e0736a6d891fc0_prof);

        
        $__internal_a3e58911fec904a4f989606004369bd11ac8e4da37af7533aa6808928c6ad823->leave($__internal_a3e58911fec904a4f989606004369bd11ac8e4da37af7533aa6808928c6ad823_prof);

    }

    // line 295
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_3aa223d38232a9617e6167477e6b1eb5457dde2bf349b41378c3c949768bb4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa223d38232a9617e6167477e6b1eb5457dde2bf349b41378c3c949768bb4ac->enter($__internal_3aa223d38232a9617e6167477e6b1eb5457dde2bf349b41378c3c949768bb4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_7865d2cbf48c2419bd56679f35119a23d4b25692b9cfd8762fd782562a9978b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7865d2cbf48c2419bd56679f35119a23d4b25692b9cfd8762fd782562a9978b5->enter($__internal_7865d2cbf48c2419bd56679f35119a23d4b25692b9cfd8762fd782562a9978b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "   ";
        
        $__internal_7865d2cbf48c2419bd56679f35119a23d4b25692b9cfd8762fd782562a9978b5->leave($__internal_7865d2cbf48c2419bd56679f35119a23d4b25692b9cfd8762fd782562a9978b5_prof);

        
        $__internal_3aa223d38232a9617e6167477e6b1eb5457dde2bf349b41378c3c949768bb4ac->leave($__internal_3aa223d38232a9617e6167477e6b1eb5457dde2bf349b41378c3c949768bb4ac_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1077a33375fc32ba872a04e9254c54e2afbcb17ad1b3fe8f4a76d98361db9a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1077a33375fc32ba872a04e9254c54e2afbcb17ad1b3fe8f4a76d98361db9a76->enter($__internal_1077a33375fc32ba872a04e9254c54e2afbcb17ad1b3fe8f4a76d98361db9a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_36fe4c407ac106d84ac2f6c8225c0922376cdbc24a6ba5b1144fd7a148b69eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fe4c407ac106d84ac2f6c8225c0922376cdbc24a6ba5b1144fd7a148b69eb9->enter($__internal_36fe4c407ac106d84ac2f6c8225c0922376cdbc24a6ba5b1144fd7a148b69eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_36fe4c407ac106d84ac2f6c8225c0922376cdbc24a6ba5b1144fd7a148b69eb9->leave($__internal_36fe4c407ac106d84ac2f6c8225c0922376cdbc24a6ba5b1144fd7a148b69eb9_prof);

        
        $__internal_1077a33375fc32ba872a04e9254c54e2afbcb17ad1b3fe8f4a76d98361db9a76->leave($__internal_1077a33375fc32ba872a04e9254c54e2afbcb17ad1b3fe8f4a76d98361db9a76_prof);

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
