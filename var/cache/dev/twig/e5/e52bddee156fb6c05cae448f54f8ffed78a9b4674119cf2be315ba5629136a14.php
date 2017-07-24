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
        $__internal_0728accc75d89652e0ea73e7dfe2265524ed9e741e310b8fc4beb73fe06f614a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0728accc75d89652e0ea73e7dfe2265524ed9e741e310b8fc4beb73fe06f614a->enter($__internal_0728accc75d89652e0ea73e7dfe2265524ed9e741e310b8fc4beb73fe06f614a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c3cf2fc7e97d7a632e10c0577aafaf856e89c8cd6dfaf943f1aa0575505ec8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cf2fc7e97d7a632e10c0577aafaf856e89c8cd6dfaf943f1aa0575505ec8f1->enter($__internal_c3cf2fc7e97d7a632e10c0577aafaf856e89c8cd6dfaf943f1aa0575505ec8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0728accc75d89652e0ea73e7dfe2265524ed9e741e310b8fc4beb73fe06f614a->leave($__internal_0728accc75d89652e0ea73e7dfe2265524ed9e741e310b8fc4beb73fe06f614a_prof);

        
        $__internal_c3cf2fc7e97d7a632e10c0577aafaf856e89c8cd6dfaf943f1aa0575505ec8f1->leave($__internal_c3cf2fc7e97d7a632e10c0577aafaf856e89c8cd6dfaf943f1aa0575505ec8f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d37842143488a5e5bab5d170e09a7e58f0eeb0f35995f4dcacc05708f081b326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37842143488a5e5bab5d170e09a7e58f0eeb0f35995f4dcacc05708f081b326->enter($__internal_d37842143488a5e5bab5d170e09a7e58f0eeb0f35995f4dcacc05708f081b326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b64e2880e3f049a14da0470ed6dc5cfef296de33878fccb87096913ad4d2952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b64e2880e3f049a14da0470ed6dc5cfef296de33878fccb87096913ad4d2952->enter($__internal_8b64e2880e3f049a14da0470ed6dc5cfef296de33878fccb87096913ad4d2952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8b64e2880e3f049a14da0470ed6dc5cfef296de33878fccb87096913ad4d2952->leave($__internal_8b64e2880e3f049a14da0470ed6dc5cfef296de33878fccb87096913ad4d2952_prof);

        
        $__internal_d37842143488a5e5bab5d170e09a7e58f0eeb0f35995f4dcacc05708f081b326->leave($__internal_d37842143488a5e5bab5d170e09a7e58f0eeb0f35995f4dcacc05708f081b326_prof);

    }

    // line 37
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_af22fa7b02a11b2e062b03dbc609a231bd5701d519beb8d5b834c35bb07dd798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af22fa7b02a11b2e062b03dbc609a231bd5701d519beb8d5b834c35bb07dd798->enter($__internal_af22fa7b02a11b2e062b03dbc609a231bd5701d519beb8d5b834c35bb07dd798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_412453086739d757bab9b471560a860a05791a5214e30310de0ddcc04c0f3ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412453086739d757bab9b471560a860a05791a5214e30310de0ddcc04c0f3ff5->enter($__internal_412453086739d757bab9b471560a860a05791a5214e30310de0ddcc04c0f3ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_412453086739d757bab9b471560a860a05791a5214e30310de0ddcc04c0f3ff5->leave($__internal_412453086739d757bab9b471560a860a05791a5214e30310de0ddcc04c0f3ff5_prof);

        
        $__internal_af22fa7b02a11b2e062b03dbc609a231bd5701d519beb8d5b834c35bb07dd798->leave($__internal_af22fa7b02a11b2e062b03dbc609a231bd5701d519beb8d5b834c35bb07dd798_prof);

    }

    // line 55
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54495ed4febc1e3443a59223cc42ecf370ca77bb6e9908cd18e6ab5ade5297a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54495ed4febc1e3443a59223cc42ecf370ca77bb6e9908cd18e6ab5ade5297a5->enter($__internal_54495ed4febc1e3443a59223cc42ecf370ca77bb6e9908cd18e6ab5ade5297a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d0fafb591fa21f99523b02c2b8943867bb4e77036468fbaa7e3b2d4a93767d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fafb591fa21f99523b02c2b8943867bb4e77036468fbaa7e3b2d4a93767d7d->enter($__internal_d0fafb591fa21f99523b02c2b8943867bb4e77036468fbaa7e3b2d4a93767d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d0fafb591fa21f99523b02c2b8943867bb4e77036468fbaa7e3b2d4a93767d7d->leave($__internal_d0fafb591fa21f99523b02c2b8943867bb4e77036468fbaa7e3b2d4a93767d7d_prof);

        
        $__internal_54495ed4febc1e3443a59223cc42ecf370ca77bb6e9908cd18e6ab5ade5297a5->leave($__internal_54495ed4febc1e3443a59223cc42ecf370ca77bb6e9908cd18e6ab5ade5297a5_prof);

    }

    // line 83
    public function block_timer($context, array $blocks = array())
    {
        $__internal_10a74f12ac3ff8b279b3e06cf21b79964252a3992ae7b410d7fb6c630eda59a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a74f12ac3ff8b279b3e06cf21b79964252a3992ae7b410d7fb6c630eda59a1->enter($__internal_10a74f12ac3ff8b279b3e06cf21b79964252a3992ae7b410d7fb6c630eda59a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_d8f75d4ffa7c3914f4048931238e6fa5d8f91d50b7db6d3a0a7eb56559ad7406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f75d4ffa7c3914f4048931238e6fa5d8f91d50b7db6d3a0a7eb56559ad7406->enter($__internal_d8f75d4ffa7c3914f4048931238e6fa5d8f91d50b7db6d3a0a7eb56559ad7406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_d8f75d4ffa7c3914f4048931238e6fa5d8f91d50b7db6d3a0a7eb56559ad7406->leave($__internal_d8f75d4ffa7c3914f4048931238e6fa5d8f91d50b7db6d3a0a7eb56559ad7406_prof);

        
        $__internal_10a74f12ac3ff8b279b3e06cf21b79964252a3992ae7b410d7fb6c630eda59a1->leave($__internal_10a74f12ac3ff8b279b3e06cf21b79964252a3992ae7b410d7fb6c630eda59a1_prof);

    }

    // line 167
    public function block_letter($context, array $blocks = array())
    {
        $__internal_9b7de0a471a2deb4f8738559b8852f98a58a5e255f27da9526874a203ba1ebaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7de0a471a2deb4f8738559b8852f98a58a5e255f27da9526874a203ba1ebaa->enter($__internal_9b7de0a471a2deb4f8738559b8852f98a58a5e255f27da9526874a203ba1ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_0ae77244c83b5819028716b29f0dae2439a21f96afd6364f633041dba9da271b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae77244c83b5819028716b29f0dae2439a21f96afd6364f633041dba9da271b->enter($__internal_0ae77244c83b5819028716b29f0dae2439a21f96afd6364f633041dba9da271b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_0ae77244c83b5819028716b29f0dae2439a21f96afd6364f633041dba9da271b->leave($__internal_0ae77244c83b5819028716b29f0dae2439a21f96afd6364f633041dba9da271b_prof);

        
        $__internal_9b7de0a471a2deb4f8738559b8852f98a58a5e255f27da9526874a203ba1ebaa->leave($__internal_9b7de0a471a2deb4f8738559b8852f98a58a5e255f27da9526874a203ba1ebaa_prof);

    }

    // line 168
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_ad6b903027531f421777045c3263f513ac167c320d6f366ad15e4af60fcb3c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6b903027531f421777045c3263f513ac167c320d6f366ad15e4af60fcb3c30->enter($__internal_ad6b903027531f421777045c3263f513ac167c320d6f366ad15e4af60fcb3c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_c6d9507c4cfd2cf7e9ecc546baafeed8c9d667de1ec484bdf6b222839d18b2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d9507c4cfd2cf7e9ecc546baafeed8c9d667de1ec484bdf6b222839d18b2e7->enter($__internal_c6d9507c4cfd2cf7e9ecc546baafeed8c9d667de1ec484bdf6b222839d18b2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_c6d9507c4cfd2cf7e9ecc546baafeed8c9d667de1ec484bdf6b222839d18b2e7->leave($__internal_c6d9507c4cfd2cf7e9ecc546baafeed8c9d667de1ec484bdf6b222839d18b2e7_prof);

        
        $__internal_ad6b903027531f421777045c3263f513ac167c320d6f366ad15e4af60fcb3c30->leave($__internal_ad6b903027531f421777045c3263f513ac167c320d6f366ad15e4af60fcb3c30_prof);

    }

    // line 169
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_fdaeaa0403b99429e6dca85af3a269ff75200097fe2c29a3ad14a67efa31acae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdaeaa0403b99429e6dca85af3a269ff75200097fe2c29a3ad14a67efa31acae->enter($__internal_fdaeaa0403b99429e6dca85af3a269ff75200097fe2c29a3ad14a67efa31acae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_ed04a71b35b405787f49d807911bc71cc6da4f6386e7f757478c44f2807201a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed04a71b35b405787f49d807911bc71cc6da4f6386e7f757478c44f2807201a7->enter($__internal_ed04a71b35b405787f49d807911bc71cc6da4f6386e7f757478c44f2807201a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_ed04a71b35b405787f49d807911bc71cc6da4f6386e7f757478c44f2807201a7->leave($__internal_ed04a71b35b405787f49d807911bc71cc6da4f6386e7f757478c44f2807201a7_prof);

        
        $__internal_fdaeaa0403b99429e6dca85af3a269ff75200097fe2c29a3ad14a67efa31acae->leave($__internal_fdaeaa0403b99429e6dca85af3a269ff75200097fe2c29a3ad14a67efa31acae_prof);

    }

    // line 170
    public function block_classement($context, array $blocks = array())
    {
        $__internal_480e47047d2e3a0fc1ac53c4ebca545ef841e870035d452c1828c987ee6240df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480e47047d2e3a0fc1ac53c4ebca545ef841e870035d452c1828c987ee6240df->enter($__internal_480e47047d2e3a0fc1ac53c4ebca545ef841e870035d452c1828c987ee6240df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_9d0dab31537f5d3a0eaae9a86087f667c37f7e7ab9ad695d12c9cda316a7a018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0dab31537f5d3a0eaae9a86087f667c37f7e7ab9ad695d12c9cda316a7a018->enter($__internal_9d0dab31537f5d3a0eaae9a86087f667c37f7e7ab9ad695d12c9cda316a7a018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_9d0dab31537f5d3a0eaae9a86087f667c37f7e7ab9ad695d12c9cda316a7a018->leave($__internal_9d0dab31537f5d3a0eaae9a86087f667c37f7e7ab9ad695d12c9cda316a7a018_prof);

        
        $__internal_480e47047d2e3a0fc1ac53c4ebca545ef841e870035d452c1828c987ee6240df->leave($__internal_480e47047d2e3a0fc1ac53c4ebca545ef841e870035d452c1828c987ee6240df_prof);

    }

    // line 172
    public function block_contact($context, array $blocks = array())
    {
        $__internal_4a7cbc9c817fd97572f8951d04698ba5a53784772e75f7bee352b80a375817d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7cbc9c817fd97572f8951d04698ba5a53784772e75f7bee352b80a375817d7->enter($__internal_4a7cbc9c817fd97572f8951d04698ba5a53784772e75f7bee352b80a375817d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_5e71e3b6f8b11de9dd4b8ff5b9927a30566c57a8bfc8c64cb8a052f93fc0a4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e71e3b6f8b11de9dd4b8ff5b9927a30566c57a8bfc8c64cb8a052f93fc0a4d7->enter($__internal_5e71e3b6f8b11de9dd4b8ff5b9927a30566c57a8bfc8c64cb8a052f93fc0a4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_5e71e3b6f8b11de9dd4b8ff5b9927a30566c57a8bfc8c64cb8a052f93fc0a4d7->leave($__internal_5e71e3b6f8b11de9dd4b8ff5b9927a30566c57a8bfc8c64cb8a052f93fc0a4d7_prof);

        
        $__internal_4a7cbc9c817fd97572f8951d04698ba5a53784772e75f7bee352b80a375817d7->leave($__internal_4a7cbc9c817fd97572f8951d04698ba5a53784772e75f7bee352b80a375817d7_prof);

    }

    // line 261
    public function block_footer($context, array $blocks = array())
    {
        $__internal_96d1fccf0377021acd564f07100a3a79137fc6d4c46ea6330e22a6371b2de77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d1fccf0377021acd564f07100a3a79137fc6d4c46ea6330e22a6371b2de77a->enter($__internal_96d1fccf0377021acd564f07100a3a79137fc6d4c46ea6330e22a6371b2de77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_0f9ff28bff4c6bfd28c6465d3b8f8124144d40f0b0b32ac28e7dce23908ce687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9ff28bff4c6bfd28c6465d3b8f8124144d40f0b0b32ac28e7dce23908ce687->enter($__internal_0f9ff28bff4c6bfd28c6465d3b8f8124144d40f0b0b32ac28e7dce23908ce687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 262
        echo "            <!-- Footer Section -->
            <footer id=\"footer-section\">
                <p class=\"copyright\">
                    &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
                </p>
            </footer>
            <!-- Footer Section End -->
        ";
        
        $__internal_0f9ff28bff4c6bfd28c6465d3b8f8124144d40f0b0b32ac28e7dce23908ce687->leave($__internal_0f9ff28bff4c6bfd28c6465d3b8f8124144d40f0b0b32ac28e7dce23908ce687_prof);

        
        $__internal_96d1fccf0377021acd564f07100a3a79137fc6d4c46ea6330e22a6371b2de77a->leave($__internal_96d1fccf0377021acd564f07100a3a79137fc6d4c46ea6330e22a6371b2de77a_prof);

    }

    // line 271
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_2974650962639dca6f6782cd647a4ed3e72c70280302799c38385827316c2942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2974650962639dca6f6782cd647a4ed3e72c70280302799c38385827316c2942->enter($__internal_2974650962639dca6f6782cd647a4ed3e72c70280302799c38385827316c2942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_b6e3cf91e5d8581316b13d817c995c1d69e65fbe8de5156f8af3ba420b252e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e3cf91e5d8581316b13d817c995c1d69e65fbe8de5156f8af3ba420b252e88->enter($__internal_b6e3cf91e5d8581316b13d817c995c1d69e65fbe8de5156f8af3ba420b252e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

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
        
        $__internal_b6e3cf91e5d8581316b13d817c995c1d69e65fbe8de5156f8af3ba420b252e88->leave($__internal_b6e3cf91e5d8581316b13d817c995c1d69e65fbe8de5156f8af3ba420b252e88_prof);

        
        $__internal_2974650962639dca6f6782cd647a4ed3e72c70280302799c38385827316c2942->leave($__internal_2974650962639dca6f6782cd647a4ed3e72c70280302799c38385827316c2942_prof);

    }

    // line 295
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_87131889ee747fab3bd20bead2047d06338d03df6bb05ddd56cbfd33fe1b7f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87131889ee747fab3bd20bead2047d06338d03df6bb05ddd56cbfd33fe1b7f76->enter($__internal_87131889ee747fab3bd20bead2047d06338d03df6bb05ddd56cbfd33fe1b7f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_281b090819cbd1dcac0ed418c10b732f0d705fcbd4b2ba55a9519a7fba2b0164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281b090819cbd1dcac0ed418c10b732f0d705fcbd4b2ba55a9519a7fba2b0164->enter($__internal_281b090819cbd1dcac0ed418c10b732f0d705fcbd4b2ba55a9519a7fba2b0164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "   ";
        
        $__internal_281b090819cbd1dcac0ed418c10b732f0d705fcbd4b2ba55a9519a7fba2b0164->leave($__internal_281b090819cbd1dcac0ed418c10b732f0d705fcbd4b2ba55a9519a7fba2b0164_prof);

        
        $__internal_87131889ee747fab3bd20bead2047d06338d03df6bb05ddd56cbfd33fe1b7f76->leave($__internal_87131889ee747fab3bd20bead2047d06338d03df6bb05ddd56cbfd33fe1b7f76_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ad67f9e0e01a8f1b551fed4c699f1ed5f77a38657aca93be21fc68d0d2dd6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad67f9e0e01a8f1b551fed4c699f1ed5f77a38657aca93be21fc68d0d2dd6cc->enter($__internal_4ad67f9e0e01a8f1b551fed4c699f1ed5f77a38657aca93be21fc68d0d2dd6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f2cea2270b9efac6733817b3d5d1b9f9fcf89475e24e4630474686eadfdce704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cea2270b9efac6733817b3d5d1b9f9fcf89475e24e4630474686eadfdce704->enter($__internal_f2cea2270b9efac6733817b3d5d1b9f9fcf89475e24e4630474686eadfdce704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f2cea2270b9efac6733817b3d5d1b9f9fcf89475e24e4630474686eadfdce704->leave($__internal_f2cea2270b9efac6733817b3d5d1b9f9fcf89475e24e4630474686eadfdce704_prof);

        
        $__internal_4ad67f9e0e01a8f1b551fed4c699f1ed5f77a38657aca93be21fc68d0d2dd6cc->leave($__internal_4ad67f9e0e01a8f1b551fed4c699f1ed5f77a38657aca93be21fc68d0d2dd6cc_prof);

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
