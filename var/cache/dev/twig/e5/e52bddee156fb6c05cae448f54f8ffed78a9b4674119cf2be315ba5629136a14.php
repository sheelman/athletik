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
        $__internal_afc1238329eb396d0b63538b9be1e427b38c8b6248cfeeb46eeae46dbf3f76d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc1238329eb396d0b63538b9be1e427b38c8b6248cfeeb46eeae46dbf3f76d5->enter($__internal_afc1238329eb396d0b63538b9be1e427b38c8b6248cfeeb46eeae46dbf3f76d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2be7dbefeff06557457dcaa71e5fdd92f79937ab51c3a2bf1dc7239c99204ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be7dbefeff06557457dcaa71e5fdd92f79937ab51c3a2bf1dc7239c99204ed0->enter($__internal_2be7dbefeff06557457dcaa71e5fdd92f79937ab51c3a2bf1dc7239c99204ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_afc1238329eb396d0b63538b9be1e427b38c8b6248cfeeb46eeae46dbf3f76d5->leave($__internal_afc1238329eb396d0b63538b9be1e427b38c8b6248cfeeb46eeae46dbf3f76d5_prof);

        
        $__internal_2be7dbefeff06557457dcaa71e5fdd92f79937ab51c3a2bf1dc7239c99204ed0->leave($__internal_2be7dbefeff06557457dcaa71e5fdd92f79937ab51c3a2bf1dc7239c99204ed0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee6da047a80c46c54f5719a1b99046afd83e2d8844ad213b13524939646e55f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6da047a80c46c54f5719a1b99046afd83e2d8844ad213b13524939646e55f1->enter($__internal_ee6da047a80c46c54f5719a1b99046afd83e2d8844ad213b13524939646e55f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91f0ccd9b6674ffcadfe5668793fc9a3a8a260424796a144081b89df8fb8501e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f0ccd9b6674ffcadfe5668793fc9a3a8a260424796a144081b89df8fb8501e->enter($__internal_91f0ccd9b6674ffcadfe5668793fc9a3a8a260424796a144081b89df8fb8501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_91f0ccd9b6674ffcadfe5668793fc9a3a8a260424796a144081b89df8fb8501e->leave($__internal_91f0ccd9b6674ffcadfe5668793fc9a3a8a260424796a144081b89df8fb8501e_prof);

        
        $__internal_ee6da047a80c46c54f5719a1b99046afd83e2d8844ad213b13524939646e55f1->leave($__internal_ee6da047a80c46c54f5719a1b99046afd83e2d8844ad213b13524939646e55f1_prof);

    }

    // line 38
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_2b08043bc24918587347c829dbd13a4ce306256754315b8635ada815395afc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b08043bc24918587347c829dbd13a4ce306256754315b8635ada815395afc6e->enter($__internal_2b08043bc24918587347c829dbd13a4ce306256754315b8635ada815395afc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_a2cb3310c2e9657abfe0f3b096fa6c50b28d94aab698c2c072af8cff6eb7d86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cb3310c2e9657abfe0f3b096fa6c50b28d94aab698c2c072af8cff6eb7d86b->enter($__internal_a2cb3310c2e9657abfe0f3b096fa6c50b28d94aab698c2c072af8cff6eb7d86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_a2cb3310c2e9657abfe0f3b096fa6c50b28d94aab698c2c072af8cff6eb7d86b->leave($__internal_a2cb3310c2e9657abfe0f3b096fa6c50b28d94aab698c2c072af8cff6eb7d86b_prof);

        
        $__internal_2b08043bc24918587347c829dbd13a4ce306256754315b8635ada815395afc6e->leave($__internal_2b08043bc24918587347c829dbd13a4ce306256754315b8635ada815395afc6e_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99ca826f1f6d296d68eb2d75dd7504714321f5bedf589f521e83310412b2eee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ca826f1f6d296d68eb2d75dd7504714321f5bedf589f521e83310412b2eee3->enter($__internal_99ca826f1f6d296d68eb2d75dd7504714321f5bedf589f521e83310412b2eee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b56aec8cd18a8a68eb6afefff23d199eec66d81d0d35a6aa3cb97b55c7ceceef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56aec8cd18a8a68eb6afefff23d199eec66d81d0d35a6aa3cb97b55c7ceceef->enter($__internal_b56aec8cd18a8a68eb6afefff23d199eec66d81d0d35a6aa3cb97b55c7ceceef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b56aec8cd18a8a68eb6afefff23d199eec66d81d0d35a6aa3cb97b55c7ceceef->leave($__internal_b56aec8cd18a8a68eb6afefff23d199eec66d81d0d35a6aa3cb97b55c7ceceef_prof);

        
        $__internal_99ca826f1f6d296d68eb2d75dd7504714321f5bedf589f521e83310412b2eee3->leave($__internal_99ca826f1f6d296d68eb2d75dd7504714321f5bedf589f521e83310412b2eee3_prof);

    }

    // line 87
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c291c4a9fe54bad2d7938470a18bd6756d450430c1e5fc43c92043837669832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c291c4a9fe54bad2d7938470a18bd6756d450430c1e5fc43c92043837669832->enter($__internal_2c291c4a9fe54bad2d7938470a18bd6756d450430c1e5fc43c92043837669832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0dd70a4caadf6683d5088a83a7f57b19887f9edb6086db292d231ec8e1ac33e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd70a4caadf6683d5088a83a7f57b19887f9edb6086db292d231ec8e1ac33e2->enter($__internal_0dd70a4caadf6683d5088a83a7f57b19887f9edb6086db292d231ec8e1ac33e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_0dd70a4caadf6683d5088a83a7f57b19887f9edb6086db292d231ec8e1ac33e2->leave($__internal_0dd70a4caadf6683d5088a83a7f57b19887f9edb6086db292d231ec8e1ac33e2_prof);

        
        $__internal_2c291c4a9fe54bad2d7938470a18bd6756d450430c1e5fc43c92043837669832->leave($__internal_2c291c4a9fe54bad2d7938470a18bd6756d450430c1e5fc43c92043837669832_prof);

    }

    // line 107
    public function block_timer($context, array $blocks = array())
    {
        $__internal_80b767c91e1ee98c28e496e2eae00e936dbcf51a6006a55e28763051c7af69a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b767c91e1ee98c28e496e2eae00e936dbcf51a6006a55e28763051c7af69a5->enter($__internal_80b767c91e1ee98c28e496e2eae00e936dbcf51a6006a55e28763051c7af69a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_bf26baf864e74ffbe3c43a1472cac9b99fed6fce985ec5b208cbb45fe90b07d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf26baf864e74ffbe3c43a1472cac9b99fed6fce985ec5b208cbb45fe90b07d6->enter($__internal_bf26baf864e74ffbe3c43a1472cac9b99fed6fce985ec5b208cbb45fe90b07d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_bf26baf864e74ffbe3c43a1472cac9b99fed6fce985ec5b208cbb45fe90b07d6->leave($__internal_bf26baf864e74ffbe3c43a1472cac9b99fed6fce985ec5b208cbb45fe90b07d6_prof);

        
        $__internal_80b767c91e1ee98c28e496e2eae00e936dbcf51a6006a55e28763051c7af69a5->leave($__internal_80b767c91e1ee98c28e496e2eae00e936dbcf51a6006a55e28763051c7af69a5_prof);

    }

    // line 165
    public function block_fin($context, array $blocks = array())
    {
        $__internal_c1ed8a3a14695540ec77a7b379e5f8f3d52b887e5c983287123a2ee3b540ad7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ed8a3a14695540ec77a7b379e5f8f3d52b887e5c983287123a2ee3b540ad7d->enter($__internal_c1ed8a3a14695540ec77a7b379e5f8f3d52b887e5c983287123a2ee3b540ad7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_23eb1390a10a9ccb343471da64f22b6a7f349248ff62335f13f344d0c4750e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23eb1390a10a9ccb343471da64f22b6a7f349248ff62335f13f344d0c4750e0e->enter($__internal_23eb1390a10a9ccb343471da64f22b6a7f349248ff62335f13f344d0c4750e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 166
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->
                    ";
        
        $__internal_23eb1390a10a9ccb343471da64f22b6a7f349248ff62335f13f344d0c4750e0e->leave($__internal_23eb1390a10a9ccb343471da64f22b6a7f349248ff62335f13f344d0c4750e0e_prof);

        
        $__internal_c1ed8a3a14695540ec77a7b379e5f8f3d52b887e5c983287123a2ee3b540ad7d->leave($__internal_c1ed8a3a14695540ec77a7b379e5f8f3d52b887e5c983287123a2ee3b540ad7d_prof);

    }

    // line 176
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_4a5957acc5e0ec8eea2521a10d1a864b48373a5a783d072bfdb5a7c9aebce18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5957acc5e0ec8eea2521a10d1a864b48373a5a783d072bfdb5a7c9aebce18f->enter($__internal_4a5957acc5e0ec8eea2521a10d1a864b48373a5a783d072bfdb5a7c9aebce18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_785a1385835913b61661bb06a007c723809b0e94b37ee4cc9bb19dd94f3acf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785a1385835913b61661bb06a007c723809b0e94b37ee4cc9bb19dd94f3acf48->enter($__internal_785a1385835913b61661bb06a007c723809b0e94b37ee4cc9bb19dd94f3acf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        
        $__internal_785a1385835913b61661bb06a007c723809b0e94b37ee4cc9bb19dd94f3acf48->leave($__internal_785a1385835913b61661bb06a007c723809b0e94b37ee4cc9bb19dd94f3acf48_prof);

        
        $__internal_4a5957acc5e0ec8eea2521a10d1a864b48373a5a783d072bfdb5a7c9aebce18f->leave($__internal_4a5957acc5e0ec8eea2521a10d1a864b48373a5a783d072bfdb5a7c9aebce18f_prof);

    }

    // line 177
    public function block_register($context, array $blocks = array())
    {
        $__internal_dcc231ddb5df08fa1cc3ab8086a8a153a79153858d7ceb56782fa79073353c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc231ddb5df08fa1cc3ab8086a8a153a79153858d7ceb56782fa79073353c4c->enter($__internal_dcc231ddb5df08fa1cc3ab8086a8a153a79153858d7ceb56782fa79073353c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_349caea37262c2060ee587d379111a9cf690c1f680ab97d340324243dcef59e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349caea37262c2060ee587d379111a9cf690c1f680ab97d340324243dcef59e3->enter($__internal_349caea37262c2060ee587d379111a9cf690c1f680ab97d340324243dcef59e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_349caea37262c2060ee587d379111a9cf690c1f680ab97d340324243dcef59e3->leave($__internal_349caea37262c2060ee587d379111a9cf690c1f680ab97d340324243dcef59e3_prof);

        
        $__internal_dcc231ddb5df08fa1cc3ab8086a8a153a79153858d7ceb56782fa79073353c4c->leave($__internal_dcc231ddb5df08fa1cc3ab8086a8a153a79153858d7ceb56782fa79073353c4c_prof);

    }

    // line 178
    public function block_profile($context, array $blocks = array())
    {
        $__internal_a07a63b7450b487c954705c276e1ce6837af1c1a6d1e48ada1e75e5797d55398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07a63b7450b487c954705c276e1ce6837af1c1a6d1e48ada1e75e5797d55398->enter($__internal_a07a63b7450b487c954705c276e1ce6837af1c1a6d1e48ada1e75e5797d55398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_c024ddb136504c47116ea1e6188009b6fb27e6178df6514969e67acca8613723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c024ddb136504c47116ea1e6188009b6fb27e6178df6514969e67acca8613723->enter($__internal_c024ddb136504c47116ea1e6188009b6fb27e6178df6514969e67acca8613723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_c024ddb136504c47116ea1e6188009b6fb27e6178df6514969e67acca8613723->leave($__internal_c024ddb136504c47116ea1e6188009b6fb27e6178df6514969e67acca8613723_prof);

        
        $__internal_a07a63b7450b487c954705c276e1ce6837af1c1a6d1e48ada1e75e5797d55398->leave($__internal_a07a63b7450b487c954705c276e1ce6837af1c1a6d1e48ada1e75e5797d55398_prof);

    }

    // line 179
    public function block_letter($context, array $blocks = array())
    {
        $__internal_b98e0bc086b9ed114f9ee2c44fc3831e9abf566b4bd042cdba0cafb1fa0721b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98e0bc086b9ed114f9ee2c44fc3831e9abf566b4bd042cdba0cafb1fa0721b8->enter($__internal_b98e0bc086b9ed114f9ee2c44fc3831e9abf566b4bd042cdba0cafb1fa0721b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_94d3f8acc784652b9e5c7e9bac9383db074ed4136691b5b57283bac25aac7547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d3f8acc784652b9e5c7e9bac9383db074ed4136691b5b57283bac25aac7547->enter($__internal_94d3f8acc784652b9e5c7e9bac9383db074ed4136691b5b57283bac25aac7547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_94d3f8acc784652b9e5c7e9bac9383db074ed4136691b5b57283bac25aac7547->leave($__internal_94d3f8acc784652b9e5c7e9bac9383db074ed4136691b5b57283bac25aac7547_prof);

        
        $__internal_b98e0bc086b9ed114f9ee2c44fc3831e9abf566b4bd042cdba0cafb1fa0721b8->leave($__internal_b98e0bc086b9ed114f9ee2c44fc3831e9abf566b4bd042cdba0cafb1fa0721b8_prof);

    }

    // line 180
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_6c025b77aa8be0ce2aaac36f1148de350395a97d3041b7f98fdfa4d6fdf5d548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c025b77aa8be0ce2aaac36f1148de350395a97d3041b7f98fdfa4d6fdf5d548->enter($__internal_6c025b77aa8be0ce2aaac36f1148de350395a97d3041b7f98fdfa4d6fdf5d548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_05458b6a05ec1f4c4d5922b4ab18a36410198799c1cdf7c990a9dadb2bd85187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05458b6a05ec1f4c4d5922b4ab18a36410198799c1cdf7c990a9dadb2bd85187->enter($__internal_05458b6a05ec1f4c4d5922b4ab18a36410198799c1cdf7c990a9dadb2bd85187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_05458b6a05ec1f4c4d5922b4ab18a36410198799c1cdf7c990a9dadb2bd85187->leave($__internal_05458b6a05ec1f4c4d5922b4ab18a36410198799c1cdf7c990a9dadb2bd85187_prof);

        
        $__internal_6c025b77aa8be0ce2aaac36f1148de350395a97d3041b7f98fdfa4d6fdf5d548->leave($__internal_6c025b77aa8be0ce2aaac36f1148de350395a97d3041b7f98fdfa4d6fdf5d548_prof);

    }

    // line 181
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_3b1d570d84c7d822b10ace88d7e9bfeb04ebdb356b46d8362592172d3799daee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1d570d84c7d822b10ace88d7e9bfeb04ebdb356b46d8362592172d3799daee->enter($__internal_3b1d570d84c7d822b10ace88d7e9bfeb04ebdb356b46d8362592172d3799daee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_91a8dea4c08b551095f7e24be919a2ae4cc75ddefc426856524551968df8becc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a8dea4c08b551095f7e24be919a2ae4cc75ddefc426856524551968df8becc->enter($__internal_91a8dea4c08b551095f7e24be919a2ae4cc75ddefc426856524551968df8becc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_91a8dea4c08b551095f7e24be919a2ae4cc75ddefc426856524551968df8becc->leave($__internal_91a8dea4c08b551095f7e24be919a2ae4cc75ddefc426856524551968df8becc_prof);

        
        $__internal_3b1d570d84c7d822b10ace88d7e9bfeb04ebdb356b46d8362592172d3799daee->leave($__internal_3b1d570d84c7d822b10ace88d7e9bfeb04ebdb356b46d8362592172d3799daee_prof);

    }

    // line 182
    public function block_classement($context, array $blocks = array())
    {
        $__internal_c879bfa7b020c790c6e98fab318c24c07f63e72c1c8fdb497bb39df6a678f5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c879bfa7b020c790c6e98fab318c24c07f63e72c1c8fdb497bb39df6a678f5bb->enter($__internal_c879bfa7b020c790c6e98fab318c24c07f63e72c1c8fdb497bb39df6a678f5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_35a73465d69d4759844d6331e0b2d8907f3ea8c4ccf97f9f6bbf012afc6f13c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a73465d69d4759844d6331e0b2d8907f3ea8c4ccf97f9f6bbf012afc6f13c0->enter($__internal_35a73465d69d4759844d6331e0b2d8907f3ea8c4ccf97f9f6bbf012afc6f13c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_35a73465d69d4759844d6331e0b2d8907f3ea8c4ccf97f9f6bbf012afc6f13c0->leave($__internal_35a73465d69d4759844d6331e0b2d8907f3ea8c4ccf97f9f6bbf012afc6f13c0_prof);

        
        $__internal_c879bfa7b020c790c6e98fab318c24c07f63e72c1c8fdb497bb39df6a678f5bb->leave($__internal_c879bfa7b020c790c6e98fab318c24c07f63e72c1c8fdb497bb39df6a678f5bb_prof);

    }

    // line 183
    public function block_admin($context, array $blocks = array())
    {
        $__internal_774f7f91e60743bd8b1629c0e1a8fd7b1a0a56f0c184d337ea7205cea0d96023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774f7f91e60743bd8b1629c0e1a8fd7b1a0a56f0c184d337ea7205cea0d96023->enter($__internal_774f7f91e60743bd8b1629c0e1a8fd7b1a0a56f0c184d337ea7205cea0d96023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_6d822b1a41cdcc154d898de0838359f28292661ef6de2be9b2cfad873bf12f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d822b1a41cdcc154d898de0838359f28292661ef6de2be9b2cfad873bf12f1e->enter($__internal_6d822b1a41cdcc154d898de0838359f28292661ef6de2be9b2cfad873bf12f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        
        $__internal_6d822b1a41cdcc154d898de0838359f28292661ef6de2be9b2cfad873bf12f1e->leave($__internal_6d822b1a41cdcc154d898de0838359f28292661ef6de2be9b2cfad873bf12f1e_prof);

        
        $__internal_774f7f91e60743bd8b1629c0e1a8fd7b1a0a56f0c184d337ea7205cea0d96023->leave($__internal_774f7f91e60743bd8b1629c0e1a8fd7b1a0a56f0c184d337ea7205cea0d96023_prof);

    }

    // line 184
    public function block_user($context, array $blocks = array())
    {
        $__internal_21b0d4f3da18bc92d9f76e4894b02c5af8c4c2dbbceca169ff431ce695821ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b0d4f3da18bc92d9f76e4894b02c5af8c4c2dbbceca169ff431ce695821ab9->enter($__internal_21b0d4f3da18bc92d9f76e4894b02c5af8c4c2dbbceca169ff431ce695821ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        $__internal_38a1fd8d461e3d67816632acb121979b43f8f7fff141777b4ebe46ca5a905d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a1fd8d461e3d67816632acb121979b43f8f7fff141777b4ebe46ca5a905d99->enter($__internal_38a1fd8d461e3d67816632acb121979b43f8f7fff141777b4ebe46ca5a905d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        
        $__internal_38a1fd8d461e3d67816632acb121979b43f8f7fff141777b4ebe46ca5a905d99->leave($__internal_38a1fd8d461e3d67816632acb121979b43f8f7fff141777b4ebe46ca5a905d99_prof);

        
        $__internal_21b0d4f3da18bc92d9f76e4894b02c5af8c4c2dbbceca169ff431ce695821ab9->leave($__internal_21b0d4f3da18bc92d9f76e4894b02c5af8c4c2dbbceca169ff431ce695821ab9_prof);

    }

    // line 186
    public function block_contact($context, array $blocks = array())
    {
        $__internal_83790a2c5d5002a7d8b73af801d0028bf29dbe797968d76816cb3b1d261856a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83790a2c5d5002a7d8b73af801d0028bf29dbe797968d76816cb3b1d261856a9->enter($__internal_83790a2c5d5002a7d8b73af801d0028bf29dbe797968d76816cb3b1d261856a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_736f33429a0ca8762ca1b5321068fbdfdc771c5f87e0ac10c5edad9c45958e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736f33429a0ca8762ca1b5321068fbdfdc771c5f87e0ac10c5edad9c45958e7e->enter($__internal_736f33429a0ca8762ca1b5321068fbdfdc771c5f87e0ac10c5edad9c45958e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_736f33429a0ca8762ca1b5321068fbdfdc771c5f87e0ac10c5edad9c45958e7e->leave($__internal_736f33429a0ca8762ca1b5321068fbdfdc771c5f87e0ac10c5edad9c45958e7e_prof);

        
        $__internal_83790a2c5d5002a7d8b73af801d0028bf29dbe797968d76816cb3b1d261856a9->leave($__internal_83790a2c5d5002a7d8b73af801d0028bf29dbe797968d76816cb3b1d261856a9_prof);

    }

    // line 275
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7c49748b981e6f986864c078f27bebd204c0f1a6d8270abb86532ab992ff6afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c49748b981e6f986864c078f27bebd204c0f1a6d8270abb86532ab992ff6afa->enter($__internal_7c49748b981e6f986864c078f27bebd204c0f1a6d8270abb86532ab992ff6afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_960bcd90cffda1132da08ef281eb158efcdfcf798b2022b9450f4d6c94ad9ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960bcd90cffda1132da08ef281eb158efcdfcf798b2022b9450f4d6c94ad9ae3->enter($__internal_960bcd90cffda1132da08ef281eb158efcdfcf798b2022b9450f4d6c94ad9ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 276
        echo "    <!-- Footer Section -->
    <footer id=\"footer-section\">
        <p class=\"copyright\">
            &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
        </p>
    </footer>
    <!-- Footer Section End -->
";
        
        $__internal_960bcd90cffda1132da08ef281eb158efcdfcf798b2022b9450f4d6c94ad9ae3->leave($__internal_960bcd90cffda1132da08ef281eb158efcdfcf798b2022b9450f4d6c94ad9ae3_prof);

        
        $__internal_7c49748b981e6f986864c078f27bebd204c0f1a6d8270abb86532ab992ff6afa->leave($__internal_7c49748b981e6f986864c078f27bebd204c0f1a6d8270abb86532ab992ff6afa_prof);

    }

    // line 285
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_51e147e1f4a6d0db4447d0872f5d1ff27ca55e273387efbe03a368ea84944ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e147e1f4a6d0db4447d0872f5d1ff27ca55e273387efbe03a368ea84944ba9->enter($__internal_51e147e1f4a6d0db4447d0872f5d1ff27ca55e273387efbe03a368ea84944ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_1a11189aa512458919ba059399337304d24109a570f59e0f4c09ec6a9031e3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a11189aa512458919ba059399337304d24109a570f59e0f4c09ec6a9031e3c4->enter($__internal_1a11189aa512458919ba059399337304d24109a570f59e0f4c09ec6a9031e3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

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
        
        $__internal_1a11189aa512458919ba059399337304d24109a570f59e0f4c09ec6a9031e3c4->leave($__internal_1a11189aa512458919ba059399337304d24109a570f59e0f4c09ec6a9031e3c4_prof);

        
        $__internal_51e147e1f4a6d0db4447d0872f5d1ff27ca55e273387efbe03a368ea84944ba9->leave($__internal_51e147e1f4a6d0db4447d0872f5d1ff27ca55e273387efbe03a368ea84944ba9_prof);

    }

    // line 309
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_a8f17e9b357a3fe4d7ca66adbfb9527dd89eff7c8e8542bff42cd0b67ec6aeb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f17e9b357a3fe4d7ca66adbfb9527dd89eff7c8e8542bff42cd0b67ec6aeb3->enter($__internal_a8f17e9b357a3fe4d7ca66adbfb9527dd89eff7c8e8542bff42cd0b67ec6aeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_82fca38d466ef7861f29252d084180a351cacf1eb56395a36345ac195f8b396a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fca38d466ef7861f29252d084180a351cacf1eb56395a36345ac195f8b396a->enter($__internal_82fca38d466ef7861f29252d084180a351cacf1eb56395a36345ac195f8b396a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

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
                <br/>
                <a href=\"";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\">Membre</a>
            ";
        // line 334
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 335
            echo "                <br/>
                <a href=\"";
            // line 336
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("master");
            echo "\">Admin</a>
            ";
        }
        // line 338
        echo "            </div>
        </div>
        <div class=\"bottom\">
            <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
        </div>
    </section>
    <!-- Conexion Switcher End -->
";
        
        $__internal_82fca38d466ef7861f29252d084180a351cacf1eb56395a36345ac195f8b396a->leave($__internal_82fca38d466ef7861f29252d084180a351cacf1eb56395a36345ac195f8b396a_prof);

        
        $__internal_a8f17e9b357a3fe4d7ca66adbfb9527dd89eff7c8e8542bff42cd0b67ec6aeb3->leave($__internal_a8f17e9b357a3fe4d7ca66adbfb9527dd89eff7c8e8542bff42cd0b67ec6aeb3_prof);

    }

    // line 347
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e1562b716c386711f18d1eb4095e42a439a294f04a3241151bcd41b24379485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1562b716c386711f18d1eb4095e42a439a294f04a3241151bcd41b24379485->enter($__internal_3e1562b716c386711f18d1eb4095e42a439a294f04a3241151bcd41b24379485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c8563678ad70b256196d6eea8b0ae612df1c079abc7b8a793a42395ac04c1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8563678ad70b256196d6eea8b0ae612df1c079abc7b8a793a42395ac04c1c4->enter($__internal_8c8563678ad70b256196d6eea8b0ae612df1c079abc7b8a793a42395ac04c1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8c8563678ad70b256196d6eea8b0ae612df1c079abc7b8a793a42395ac04c1c4->leave($__internal_8c8563678ad70b256196d6eea8b0ae612df1c079abc7b8a793a42395ac04c1c4_prof);

        
        $__internal_3e1562b716c386711f18d1eb4095e42a439a294f04a3241151bcd41b24379485->leave($__internal_3e1562b716c386711f18d1eb4095e42a439a294f04a3241151bcd41b24379485_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  892 => 359,  887 => 357,  882 => 355,  877 => 353,  872 => 351,  867 => 349,  864 => 348,  855 => 347,  838 => 338,  833 => 336,  830 => 335,  828 => 334,  824 => 333,  819 => 331,  814 => 329,  810 => 327,  802 => 325,  796 => 322,  792 => 321,  787 => 320,  785 => 319,  765 => 309,  734 => 286,  725 => 285,  708 => 276,  699 => 275,  603 => 188,  591 => 186,  574 => 184,  557 => 183,  540 => 182,  523 => 181,  506 => 180,  489 => 179,  472 => 178,  455 => 177,  438 => 176,  425 => 166,  416 => 165,  342 => 107,  315 => 89,  303 => 87,  287 => 80,  283 => 79,  277 => 76,  273 => 75,  269 => 74,  250 => 57,  241 => 56,  207 => 38,  190 => 27,  183 => 23,  179 => 22,  173 => 19,  167 => 16,  144 => 3,  132 => 361,  130 => 347,  127 => 346,  125 => 309,  122 => 308,  120 => 285,  117 => 284,  115 => 275,  112 => 274,  110 => 186,  107 => 185,  105 => 184,  103 => 183,  101 => 182,  99 => 181,  97 => 180,  95 => 179,  93 => 178,  91 => 177,  89 => 176,  81 => 170,  79 => 165,  76 => 164,  74 => 107,  70 => 105,  68 => 87,  65 => 86,  63 => 56,  59 => 54,  57 => 38,  51 => 34,  49 => 3,  45 => 1,);
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
                <br/>
                <a href=\"{{ path('inscription') }}\">Membre</a>
            {% if is_granted('ROLE_ADMIN') %}
                <br/>
                <a href=\"{{ path('master') }}\">Admin</a>
            {% endif %}
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
