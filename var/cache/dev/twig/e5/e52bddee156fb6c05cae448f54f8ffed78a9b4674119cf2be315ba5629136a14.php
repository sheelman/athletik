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
        $__internal_d546bed1d73ee3dc07d3bc9381d2b47bc6d5b60df91f38db979cdfd0b726b028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d546bed1d73ee3dc07d3bc9381d2b47bc6d5b60df91f38db979cdfd0b726b028->enter($__internal_d546bed1d73ee3dc07d3bc9381d2b47bc6d5b60df91f38db979cdfd0b726b028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_214f745c0c985b07a7033a525ca3424028d0b47e707261c4f67e31be9c312dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214f745c0c985b07a7033a525ca3424028d0b47e707261c4f67e31be9c312dbb->enter($__internal_214f745c0c985b07a7033a525ca3424028d0b47e707261c4f67e31be9c312dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d546bed1d73ee3dc07d3bc9381d2b47bc6d5b60df91f38db979cdfd0b726b028->leave($__internal_d546bed1d73ee3dc07d3bc9381d2b47bc6d5b60df91f38db979cdfd0b726b028_prof);

        
        $__internal_214f745c0c985b07a7033a525ca3424028d0b47e707261c4f67e31be9c312dbb->leave($__internal_214f745c0c985b07a7033a525ca3424028d0b47e707261c4f67e31be9c312dbb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34bf48df4413a24cf7ef3e9cacf29908b62468601e33bcc42144b5f20e4897bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bf48df4413a24cf7ef3e9cacf29908b62468601e33bcc42144b5f20e4897bb->enter($__internal_34bf48df4413a24cf7ef3e9cacf29908b62468601e33bcc42144b5f20e4897bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54f0a4c4ecbc0011085cbd99f2ed6088700a03c169f9038801855c14d4053e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f0a4c4ecbc0011085cbd99f2ed6088700a03c169f9038801855c14d4053e28->enter($__internal_54f0a4c4ecbc0011085cbd99f2ed6088700a03c169f9038801855c14d4053e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_54f0a4c4ecbc0011085cbd99f2ed6088700a03c169f9038801855c14d4053e28->leave($__internal_54f0a4c4ecbc0011085cbd99f2ed6088700a03c169f9038801855c14d4053e28_prof);

        
        $__internal_34bf48df4413a24cf7ef3e9cacf29908b62468601e33bcc42144b5f20e4897bb->leave($__internal_34bf48df4413a24cf7ef3e9cacf29908b62468601e33bcc42144b5f20e4897bb_prof);

    }

    // line 38
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_9e74f76e144869026be5dc300360cb5548a397da31de597cd9e43dc24d9a6bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e74f76e144869026be5dc300360cb5548a397da31de597cd9e43dc24d9a6bb0->enter($__internal_9e74f76e144869026be5dc300360cb5548a397da31de597cd9e43dc24d9a6bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_d385a3ac4062f00879f066dc5a76f226bbc3aad2223cee57c3c9baea96f96168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d385a3ac4062f00879f066dc5a76f226bbc3aad2223cee57c3c9baea96f96168->enter($__internal_d385a3ac4062f00879f066dc5a76f226bbc3aad2223cee57c3c9baea96f96168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_d385a3ac4062f00879f066dc5a76f226bbc3aad2223cee57c3c9baea96f96168->leave($__internal_d385a3ac4062f00879f066dc5a76f226bbc3aad2223cee57c3c9baea96f96168_prof);

        
        $__internal_9e74f76e144869026be5dc300360cb5548a397da31de597cd9e43dc24d9a6bb0->leave($__internal_9e74f76e144869026be5dc300360cb5548a397da31de597cd9e43dc24d9a6bb0_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e226bfda2b62a3e627d97e9ea80e3c82c057d411d5319ce0929183b498a59069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e226bfda2b62a3e627d97e9ea80e3c82c057d411d5319ce0929183b498a59069->enter($__internal_e226bfda2b62a3e627d97e9ea80e3c82c057d411d5319ce0929183b498a59069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_17a17b3628f97ba06ad969495e4bcab22c74467dd147be45a8c29a5e814ff8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a17b3628f97ba06ad969495e4bcab22c74467dd147be45a8c29a5e814ff8ae->enter($__internal_17a17b3628f97ba06ad969495e4bcab22c74467dd147be45a8c29a5e814ff8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_17a17b3628f97ba06ad969495e4bcab22c74467dd147be45a8c29a5e814ff8ae->leave($__internal_17a17b3628f97ba06ad969495e4bcab22c74467dd147be45a8c29a5e814ff8ae_prof);

        
        $__internal_e226bfda2b62a3e627d97e9ea80e3c82c057d411d5319ce0929183b498a59069->leave($__internal_e226bfda2b62a3e627d97e9ea80e3c82c057d411d5319ce0929183b498a59069_prof);

    }

    // line 87
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2b35b4dd3545f613bd285d3c68265c5b4d2e99543df6756ad689bff0496b2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b35b4dd3545f613bd285d3c68265c5b4d2e99543df6756ad689bff0496b2cb->enter($__internal_a2b35b4dd3545f613bd285d3c68265c5b4d2e99543df6756ad689bff0496b2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_139042ca4931c7f7aed29b75f40860d0aaf160c2cd706c0a54a65e2f5a422e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139042ca4931c7f7aed29b75f40860d0aaf160c2cd706c0a54a65e2f5a422e7b->enter($__internal_139042ca4931c7f7aed29b75f40860d0aaf160c2cd706c0a54a65e2f5a422e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_139042ca4931c7f7aed29b75f40860d0aaf160c2cd706c0a54a65e2f5a422e7b->leave($__internal_139042ca4931c7f7aed29b75f40860d0aaf160c2cd706c0a54a65e2f5a422e7b_prof);

        
        $__internal_a2b35b4dd3545f613bd285d3c68265c5b4d2e99543df6756ad689bff0496b2cb->leave($__internal_a2b35b4dd3545f613bd285d3c68265c5b4d2e99543df6756ad689bff0496b2cb_prof);

    }

    // line 107
    public function block_timer($context, array $blocks = array())
    {
        $__internal_7e6b68e24d7b5fa871432475df278cfb85dd9293b495ff95256f047ef898d514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6b68e24d7b5fa871432475df278cfb85dd9293b495ff95256f047ef898d514->enter($__internal_7e6b68e24d7b5fa871432475df278cfb85dd9293b495ff95256f047ef898d514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_3d00c1f541f14e2eece329e0020d79a2dc56e461380c00b6b9df9e0b4282bec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d00c1f541f14e2eece329e0020d79a2dc56e461380c00b6b9df9e0b4282bec2->enter($__internal_3d00c1f541f14e2eece329e0020d79a2dc56e461380c00b6b9df9e0b4282bec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_3d00c1f541f14e2eece329e0020d79a2dc56e461380c00b6b9df9e0b4282bec2->leave($__internal_3d00c1f541f14e2eece329e0020d79a2dc56e461380c00b6b9df9e0b4282bec2_prof);

        
        $__internal_7e6b68e24d7b5fa871432475df278cfb85dd9293b495ff95256f047ef898d514->leave($__internal_7e6b68e24d7b5fa871432475df278cfb85dd9293b495ff95256f047ef898d514_prof);

    }

    // line 165
    public function block_fin($context, array $blocks = array())
    {
        $__internal_a814198a6cd2cef9317942865a880992cbac040562dd091ffe2d7010d402ce74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a814198a6cd2cef9317942865a880992cbac040562dd091ffe2d7010d402ce74->enter($__internal_a814198a6cd2cef9317942865a880992cbac040562dd091ffe2d7010d402ce74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_eb4d51778f39593fd1ab993c763410851b1dac65feaf03398072881980dacd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4d51778f39593fd1ab993c763410851b1dac65feaf03398072881980dacd49->enter($__internal_eb4d51778f39593fd1ab993c763410851b1dac65feaf03398072881980dacd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 166
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->
                    ";
        
        $__internal_eb4d51778f39593fd1ab993c763410851b1dac65feaf03398072881980dacd49->leave($__internal_eb4d51778f39593fd1ab993c763410851b1dac65feaf03398072881980dacd49_prof);

        
        $__internal_a814198a6cd2cef9317942865a880992cbac040562dd091ffe2d7010d402ce74->leave($__internal_a814198a6cd2cef9317942865a880992cbac040562dd091ffe2d7010d402ce74_prof);

    }

    // line 176
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_0bc6e752dc646e9484e7728a0c0d23f70222a4cfe2edba0e938cb8a70ad4a9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc6e752dc646e9484e7728a0c0d23f70222a4cfe2edba0e938cb8a70ad4a9cc->enter($__internal_0bc6e752dc646e9484e7728a0c0d23f70222a4cfe2edba0e938cb8a70ad4a9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_6f9056145f56adc51564e0703e991bd26dfdcf84abbddae3f88035c93de0a150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9056145f56adc51564e0703e991bd26dfdcf84abbddae3f88035c93de0a150->enter($__internal_6f9056145f56adc51564e0703e991bd26dfdcf84abbddae3f88035c93de0a150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        
        $__internal_6f9056145f56adc51564e0703e991bd26dfdcf84abbddae3f88035c93de0a150->leave($__internal_6f9056145f56adc51564e0703e991bd26dfdcf84abbddae3f88035c93de0a150_prof);

        
        $__internal_0bc6e752dc646e9484e7728a0c0d23f70222a4cfe2edba0e938cb8a70ad4a9cc->leave($__internal_0bc6e752dc646e9484e7728a0c0d23f70222a4cfe2edba0e938cb8a70ad4a9cc_prof);

    }

    // line 177
    public function block_register($context, array $blocks = array())
    {
        $__internal_4703fabad9a45c1ab17502017291362830c3f7424eb7bc5c32a7050ee65d0b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4703fabad9a45c1ab17502017291362830c3f7424eb7bc5c32a7050ee65d0b4a->enter($__internal_4703fabad9a45c1ab17502017291362830c3f7424eb7bc5c32a7050ee65d0b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_f63a01d36776573f6cb608b1190f0bc79a1438a2c82e10fb207e1b80f332e29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63a01d36776573f6cb608b1190f0bc79a1438a2c82e10fb207e1b80f332e29c->enter($__internal_f63a01d36776573f6cb608b1190f0bc79a1438a2c82e10fb207e1b80f332e29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_f63a01d36776573f6cb608b1190f0bc79a1438a2c82e10fb207e1b80f332e29c->leave($__internal_f63a01d36776573f6cb608b1190f0bc79a1438a2c82e10fb207e1b80f332e29c_prof);

        
        $__internal_4703fabad9a45c1ab17502017291362830c3f7424eb7bc5c32a7050ee65d0b4a->leave($__internal_4703fabad9a45c1ab17502017291362830c3f7424eb7bc5c32a7050ee65d0b4a_prof);

    }

    // line 178
    public function block_profile($context, array $blocks = array())
    {
        $__internal_94edc0462a04dc89f40447f4f91a585448e90ad92fc8c6749297f840cddc7634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94edc0462a04dc89f40447f4f91a585448e90ad92fc8c6749297f840cddc7634->enter($__internal_94edc0462a04dc89f40447f4f91a585448e90ad92fc8c6749297f840cddc7634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_3d793dd49deb6ff3838938030419abbcaa5baf508b10076ed69370cda52945c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d793dd49deb6ff3838938030419abbcaa5baf508b10076ed69370cda52945c5->enter($__internal_3d793dd49deb6ff3838938030419abbcaa5baf508b10076ed69370cda52945c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_3d793dd49deb6ff3838938030419abbcaa5baf508b10076ed69370cda52945c5->leave($__internal_3d793dd49deb6ff3838938030419abbcaa5baf508b10076ed69370cda52945c5_prof);

        
        $__internal_94edc0462a04dc89f40447f4f91a585448e90ad92fc8c6749297f840cddc7634->leave($__internal_94edc0462a04dc89f40447f4f91a585448e90ad92fc8c6749297f840cddc7634_prof);

    }

    // line 179
    public function block_letter($context, array $blocks = array())
    {
        $__internal_57c5c1beb248e114c5fe722f6bc053df19de89fb5adc50dafcca928e10dbc940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c5c1beb248e114c5fe722f6bc053df19de89fb5adc50dafcca928e10dbc940->enter($__internal_57c5c1beb248e114c5fe722f6bc053df19de89fb5adc50dafcca928e10dbc940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_42df54d2d75df46470a423e3c8407f67e4c0bda7547c2ecb89c748245e3e9464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42df54d2d75df46470a423e3c8407f67e4c0bda7547c2ecb89c748245e3e9464->enter($__internal_42df54d2d75df46470a423e3c8407f67e4c0bda7547c2ecb89c748245e3e9464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_42df54d2d75df46470a423e3c8407f67e4c0bda7547c2ecb89c748245e3e9464->leave($__internal_42df54d2d75df46470a423e3c8407f67e4c0bda7547c2ecb89c748245e3e9464_prof);

        
        $__internal_57c5c1beb248e114c5fe722f6bc053df19de89fb5adc50dafcca928e10dbc940->leave($__internal_57c5c1beb248e114c5fe722f6bc053df19de89fb5adc50dafcca928e10dbc940_prof);

    }

    // line 180
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_591e1401c352e0cfb31d5e39718e2b455cc65e84e064b11204d2c581cd441525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591e1401c352e0cfb31d5e39718e2b455cc65e84e064b11204d2c581cd441525->enter($__internal_591e1401c352e0cfb31d5e39718e2b455cc65e84e064b11204d2c581cd441525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_f49675466ace38688b12ba1f5a7e26755df2bdd24e8bf29a66a467fbeecb4b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49675466ace38688b12ba1f5a7e26755df2bdd24e8bf29a66a467fbeecb4b69->enter($__internal_f49675466ace38688b12ba1f5a7e26755df2bdd24e8bf29a66a467fbeecb4b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_f49675466ace38688b12ba1f5a7e26755df2bdd24e8bf29a66a467fbeecb4b69->leave($__internal_f49675466ace38688b12ba1f5a7e26755df2bdd24e8bf29a66a467fbeecb4b69_prof);

        
        $__internal_591e1401c352e0cfb31d5e39718e2b455cc65e84e064b11204d2c581cd441525->leave($__internal_591e1401c352e0cfb31d5e39718e2b455cc65e84e064b11204d2c581cd441525_prof);

    }

    // line 181
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_aa82244af1afdcbd51230803c3ff9bdd08f3a895f618a71d54fe1355a7a7b66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa82244af1afdcbd51230803c3ff9bdd08f3a895f618a71d54fe1355a7a7b66c->enter($__internal_aa82244af1afdcbd51230803c3ff9bdd08f3a895f618a71d54fe1355a7a7b66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_b4bfd9d651a0a640eeec9571404b41963964cfee8e45a5e5d694a785ffd31314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bfd9d651a0a640eeec9571404b41963964cfee8e45a5e5d694a785ffd31314->enter($__internal_b4bfd9d651a0a640eeec9571404b41963964cfee8e45a5e5d694a785ffd31314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_b4bfd9d651a0a640eeec9571404b41963964cfee8e45a5e5d694a785ffd31314->leave($__internal_b4bfd9d651a0a640eeec9571404b41963964cfee8e45a5e5d694a785ffd31314_prof);

        
        $__internal_aa82244af1afdcbd51230803c3ff9bdd08f3a895f618a71d54fe1355a7a7b66c->leave($__internal_aa82244af1afdcbd51230803c3ff9bdd08f3a895f618a71d54fe1355a7a7b66c_prof);

    }

    // line 182
    public function block_classement($context, array $blocks = array())
    {
        $__internal_e116c4d27188b562a1442bd7a8ddca146fa214fc6a84f36b64db482b75ac7dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e116c4d27188b562a1442bd7a8ddca146fa214fc6a84f36b64db482b75ac7dcd->enter($__internal_e116c4d27188b562a1442bd7a8ddca146fa214fc6a84f36b64db482b75ac7dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_ed9e997ff866d8eeebc5d54ee4bc243b438ea9a3d1634351b34a4a2678bf9ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9e997ff866d8eeebc5d54ee4bc243b438ea9a3d1634351b34a4a2678bf9ad0->enter($__internal_ed9e997ff866d8eeebc5d54ee4bc243b438ea9a3d1634351b34a4a2678bf9ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_ed9e997ff866d8eeebc5d54ee4bc243b438ea9a3d1634351b34a4a2678bf9ad0->leave($__internal_ed9e997ff866d8eeebc5d54ee4bc243b438ea9a3d1634351b34a4a2678bf9ad0_prof);

        
        $__internal_e116c4d27188b562a1442bd7a8ddca146fa214fc6a84f36b64db482b75ac7dcd->leave($__internal_e116c4d27188b562a1442bd7a8ddca146fa214fc6a84f36b64db482b75ac7dcd_prof);

    }

    // line 183
    public function block_admin($context, array $blocks = array())
    {
        $__internal_f505e4c0bb6f146298bcc056da63634a35e04d1065cad652fcb760ac1ff1a8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f505e4c0bb6f146298bcc056da63634a35e04d1065cad652fcb760ac1ff1a8de->enter($__internal_f505e4c0bb6f146298bcc056da63634a35e04d1065cad652fcb760ac1ff1a8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_54fc20f80990991213038c28657e4ca61052d2ca1574c06a09629913fd84e398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fc20f80990991213038c28657e4ca61052d2ca1574c06a09629913fd84e398->enter($__internal_54fc20f80990991213038c28657e4ca61052d2ca1574c06a09629913fd84e398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        
        $__internal_54fc20f80990991213038c28657e4ca61052d2ca1574c06a09629913fd84e398->leave($__internal_54fc20f80990991213038c28657e4ca61052d2ca1574c06a09629913fd84e398_prof);

        
        $__internal_f505e4c0bb6f146298bcc056da63634a35e04d1065cad652fcb760ac1ff1a8de->leave($__internal_f505e4c0bb6f146298bcc056da63634a35e04d1065cad652fcb760ac1ff1a8de_prof);

    }

    // line 184
    public function block_user($context, array $blocks = array())
    {
        $__internal_d419d102720793ec6e613433ba584d975ffa1dfcb3dfa547b0c63299d3ce1319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d419d102720793ec6e613433ba584d975ffa1dfcb3dfa547b0c63299d3ce1319->enter($__internal_d419d102720793ec6e613433ba584d975ffa1dfcb3dfa547b0c63299d3ce1319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        $__internal_39a31a917b0ffa00042d6d83bb82ccf4526571292638ae198431443e488a52ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a31a917b0ffa00042d6d83bb82ccf4526571292638ae198431443e488a52ac->enter($__internal_39a31a917b0ffa00042d6d83bb82ccf4526571292638ae198431443e488a52ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        
        $__internal_39a31a917b0ffa00042d6d83bb82ccf4526571292638ae198431443e488a52ac->leave($__internal_39a31a917b0ffa00042d6d83bb82ccf4526571292638ae198431443e488a52ac_prof);

        
        $__internal_d419d102720793ec6e613433ba584d975ffa1dfcb3dfa547b0c63299d3ce1319->leave($__internal_d419d102720793ec6e613433ba584d975ffa1dfcb3dfa547b0c63299d3ce1319_prof);

    }

    // line 186
    public function block_contact($context, array $blocks = array())
    {
        $__internal_9426c81833ed345ef303a5f3d6468b54916230bf941c56a85da8924a0620d727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9426c81833ed345ef303a5f3d6468b54916230bf941c56a85da8924a0620d727->enter($__internal_9426c81833ed345ef303a5f3d6468b54916230bf941c56a85da8924a0620d727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_9ecd58475da8954ef5da2ddf3a1eb9f76cfd665c3b233af8791f0a4f0747d2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecd58475da8954ef5da2ddf3a1eb9f76cfd665c3b233af8791f0a4f0747d2dd->enter($__internal_9ecd58475da8954ef5da2ddf3a1eb9f76cfd665c3b233af8791f0a4f0747d2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_9ecd58475da8954ef5da2ddf3a1eb9f76cfd665c3b233af8791f0a4f0747d2dd->leave($__internal_9ecd58475da8954ef5da2ddf3a1eb9f76cfd665c3b233af8791f0a4f0747d2dd_prof);

        
        $__internal_9426c81833ed345ef303a5f3d6468b54916230bf941c56a85da8924a0620d727->leave($__internal_9426c81833ed345ef303a5f3d6468b54916230bf941c56a85da8924a0620d727_prof);

    }

    // line 275
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2fd933016a55e76ee751067f9a6b0ae689b172ddef8e8c2840a9f83ea8739200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd933016a55e76ee751067f9a6b0ae689b172ddef8e8c2840a9f83ea8739200->enter($__internal_2fd933016a55e76ee751067f9a6b0ae689b172ddef8e8c2840a9f83ea8739200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_363955a727c39a218f154aa484e0b0f2250f85a5f2c876b37546f6ac158c7726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363955a727c39a218f154aa484e0b0f2250f85a5f2c876b37546f6ac158c7726->enter($__internal_363955a727c39a218f154aa484e0b0f2250f85a5f2c876b37546f6ac158c7726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 276
        echo "    <!-- Footer Section -->
    <footer id=\"footer-section\">
        <p class=\"copyright\">
            &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
        </p>
    </footer>
    <!-- Footer Section End -->
";
        
        $__internal_363955a727c39a218f154aa484e0b0f2250f85a5f2c876b37546f6ac158c7726->leave($__internal_363955a727c39a218f154aa484e0b0f2250f85a5f2c876b37546f6ac158c7726_prof);

        
        $__internal_2fd933016a55e76ee751067f9a6b0ae689b172ddef8e8c2840a9f83ea8739200->leave($__internal_2fd933016a55e76ee751067f9a6b0ae689b172ddef8e8c2840a9f83ea8739200_prof);

    }

    // line 285
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_f85b5042358feb028f0bc31c996472d117837c477a4976991622ba0ecc79f888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85b5042358feb028f0bc31c996472d117837c477a4976991622ba0ecc79f888->enter($__internal_f85b5042358feb028f0bc31c996472d117837c477a4976991622ba0ecc79f888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_8836b758c896e584fd7c7e340dcf3d35914396beaa522d980b815e2085943474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8836b758c896e584fd7c7e340dcf3d35914396beaa522d980b815e2085943474->enter($__internal_8836b758c896e584fd7c7e340dcf3d35914396beaa522d980b815e2085943474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

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
        
        $__internal_8836b758c896e584fd7c7e340dcf3d35914396beaa522d980b815e2085943474->leave($__internal_8836b758c896e584fd7c7e340dcf3d35914396beaa522d980b815e2085943474_prof);

        
        $__internal_f85b5042358feb028f0bc31c996472d117837c477a4976991622ba0ecc79f888->leave($__internal_f85b5042358feb028f0bc31c996472d117837c477a4976991622ba0ecc79f888_prof);

    }

    // line 309
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_5cc31e326234011d803de2d2ec41d5869e85a8b11dc58f92fc8cce6a9d8079e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc31e326234011d803de2d2ec41d5869e85a8b11dc58f92fc8cce6a9d8079e0->enter($__internal_5cc31e326234011d803de2d2ec41d5869e85a8b11dc58f92fc8cce6a9d8079e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_7f646e56dfb2e6eacedb9b4fad1fc40ebb2b57abf552555bb8a53ee640ba736d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f646e56dfb2e6eacedb9b4fad1fc40ebb2b57abf552555bb8a53ee640ba736d->enter($__internal_7f646e56dfb2e6eacedb9b4fad1fc40ebb2b57abf552555bb8a53ee640ba736d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

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
        
        $__internal_7f646e56dfb2e6eacedb9b4fad1fc40ebb2b57abf552555bb8a53ee640ba736d->leave($__internal_7f646e56dfb2e6eacedb9b4fad1fc40ebb2b57abf552555bb8a53ee640ba736d_prof);

        
        $__internal_5cc31e326234011d803de2d2ec41d5869e85a8b11dc58f92fc8cce6a9d8079e0->leave($__internal_5cc31e326234011d803de2d2ec41d5869e85a8b11dc58f92fc8cce6a9d8079e0_prof);

    }

    // line 347
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2af60ea0ab7ccfd343cc6ad51e9e0b65479623fda578028b941879043a7ee331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af60ea0ab7ccfd343cc6ad51e9e0b65479623fda578028b941879043a7ee331->enter($__internal_2af60ea0ab7ccfd343cc6ad51e9e0b65479623fda578028b941879043a7ee331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_46820ae3558bb12f0195ace64a5d111d458a666a50bcfe7727818465bc744458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46820ae3558bb12f0195ace64a5d111d458a666a50bcfe7727818465bc744458->enter($__internal_46820ae3558bb12f0195ace64a5d111d458a666a50bcfe7727818465bc744458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_46820ae3558bb12f0195ace64a5d111d458a666a50bcfe7727818465bc744458->leave($__internal_46820ae3558bb12f0195ace64a5d111d458a666a50bcfe7727818465bc744458_prof);

        
        $__internal_2af60ea0ab7ccfd343cc6ad51e9e0b65479623fda578028b941879043a7ee331->leave($__internal_2af60ea0ab7ccfd343cc6ad51e9e0b65479623fda578028b941879043a7ee331_prof);

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
