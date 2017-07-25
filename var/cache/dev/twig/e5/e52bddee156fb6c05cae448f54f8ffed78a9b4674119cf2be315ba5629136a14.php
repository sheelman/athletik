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
            'fin' => array($this, 'block_fin'),
            'letter' => array($this, 'block_letter'),
            'portfolio' => array($this, 'block_portfolio'),
            'resultat' => array($this, 'block_resultat'),
            'classement' => array($this, 'block_classement'),
            'contact' => array($this, 'block_contact'),
            'footer' => array($this, 'block_footer'),
            'color_switcher' => array($this, 'block_color_switcher'),
            'conexion_switcher' => array($this, 'block_conexion_switcher'),
            'profile' => array($this, 'block_profile'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_058966a75537069e98fd8a7a25733d962b38605e561591c4f343bf7c7c3e286b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058966a75537069e98fd8a7a25733d962b38605e561591c4f343bf7c7c3e286b->enter($__internal_058966a75537069e98fd8a7a25733d962b38605e561591c4f343bf7c7c3e286b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ffaadd04fb6f61ce94d7cad0abde83fc8aa2599ec11c3c0ca2f5c4973bd84d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffaadd04fb6f61ce94d7cad0abde83fc8aa2599ec11c3c0ca2f5c4973bd84d8b->enter($__internal_ffaadd04fb6f61ce94d7cad0abde83fc8aa2599ec11c3c0ca2f5c4973bd84d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('timer', $context, $blocks);
        // line 161
        echo "
                    ";
        // line 162
        $this->displayBlock('fin', $context, $blocks);
        // line 167
        echo "
                </div><!-- /.container -->
            </div><!-- /.pattern -->\t\t
        </section><!-- /#page-top -->
        <!-- Page Top Section  End -->

";
        // line 173
        $this->displayBlock('letter', $context, $blocks);
        // line 174
        $this->displayBlock('portfolio', $context, $blocks);
        // line 175
        $this->displayBlock('resultat', $context, $blocks);
        // line 176
        $this->displayBlock('classement', $context, $blocks);
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('contact', $context, $blocks);
        // line 266
        echo "
";
        // line 267
        $this->displayBlock('footer', $context, $blocks);
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('color_switcher', $context, $blocks);
        // line 300
        echo "
";
        // line 301
        $this->displayBlock('conexion_switcher', $context, $blocks);
        // line 333
        echo "
";
        // line 334
        $this->displayBlock('javascripts', $context, $blocks);
        // line 348
        echo "</body>
</html>
";
        
        $__internal_058966a75537069e98fd8a7a25733d962b38605e561591c4f343bf7c7c3e286b->leave($__internal_058966a75537069e98fd8a7a25733d962b38605e561591c4f343bf7c7c3e286b_prof);

        
        $__internal_ffaadd04fb6f61ce94d7cad0abde83fc8aa2599ec11c3c0ca2f5c4973bd84d8b->leave($__internal_ffaadd04fb6f61ce94d7cad0abde83fc8aa2599ec11c3c0ca2f5c4973bd84d8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_466c8042554299733e0959fb12db1bff3fe2c16f81a1eed77cd34a274aa2c9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466c8042554299733e0959fb12db1bff3fe2c16f81a1eed77cd34a274aa2c9bd->enter($__internal_466c8042554299733e0959fb12db1bff3fe2c16f81a1eed77cd34a274aa2c9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dc8399cf7e43282c3bf9106b24b45a1473018554b8d2740b182dde3f68d2cb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8399cf7e43282c3bf9106b24b45a1473018554b8d2740b182dde3f68d2cb2c->enter($__internal_dc8399cf7e43282c3bf9106b24b45a1473018554b8d2740b182dde3f68d2cb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dc8399cf7e43282c3bf9106b24b45a1473018554b8d2740b182dde3f68d2cb2c->leave($__internal_dc8399cf7e43282c3bf9106b24b45a1473018554b8d2740b182dde3f68d2cb2c_prof);

        
        $__internal_466c8042554299733e0959fb12db1bff3fe2c16f81a1eed77cd34a274aa2c9bd->leave($__internal_466c8042554299733e0959fb12db1bff3fe2c16f81a1eed77cd34a274aa2c9bd_prof);

    }

    // line 38
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_849315e365620ae8e00aa4b400fe1d8b1099638d3b22c31e277172027b9e447f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849315e365620ae8e00aa4b400fe1d8b1099638d3b22c31e277172027b9e447f->enter($__internal_849315e365620ae8e00aa4b400fe1d8b1099638d3b22c31e277172027b9e447f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_9a5172e3e9462c2d37f1e003666a47f38ccc390c6debe45d291ecf127116c9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5172e3e9462c2d37f1e003666a47f38ccc390c6debe45d291ecf127116c9e6->enter($__internal_9a5172e3e9462c2d37f1e003666a47f38ccc390c6debe45d291ecf127116c9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_9a5172e3e9462c2d37f1e003666a47f38ccc390c6debe45d291ecf127116c9e6->leave($__internal_9a5172e3e9462c2d37f1e003666a47f38ccc390c6debe45d291ecf127116c9e6_prof);

        
        $__internal_849315e365620ae8e00aa4b400fe1d8b1099638d3b22c31e277172027b9e447f->leave($__internal_849315e365620ae8e00aa4b400fe1d8b1099638d3b22c31e277172027b9e447f_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b9cef1e33377ac764fa79b0efa864c0146681367c60a942262156c93011e030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9cef1e33377ac764fa79b0efa864c0146681367c60a942262156c93011e030->enter($__internal_7b9cef1e33377ac764fa79b0efa864c0146681367c60a942262156c93011e030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6e0fbd63beec22376953cf010fbff0c0bcb6aa65339dba6c02066641b4756d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0fbd63beec22376953cf010fbff0c0bcb6aa65339dba6c02066641b4756d4d->enter($__internal_6e0fbd63beec22376953cf010fbff0c0bcb6aa65339dba6c02066641b4756d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
                        <li class=\"active\"><a href=\"#page-top\">Home</a></li>
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
        
        $__internal_6e0fbd63beec22376953cf010fbff0c0bcb6aa65339dba6c02066641b4756d4d->leave($__internal_6e0fbd63beec22376953cf010fbff0c0bcb6aa65339dba6c02066641b4756d4d_prof);

        
        $__internal_7b9cef1e33377ac764fa79b0efa864c0146681367c60a942262156c93011e030->leave($__internal_7b9cef1e33377ac764fa79b0efa864c0146681367c60a942262156c93011e030_prof);

    }

    // line 87
    public function block_timer($context, array $blocks = array())
    {
        $__internal_ab3ab0fc84bab6db20eb412a5e6c9b165f5d2e6c14beef7d19b1c72506f948a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3ab0fc84bab6db20eb412a5e6c9b165f5d2e6c14beef7d19b1c72506f948a4->enter($__internal_ab3ab0fc84bab6db20eb412a5e6c9b165f5d2e6c14beef7d19b1c72506f948a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_c97786e1fa537f309615ea19da2a26a59e60acb4a9446a4e80c2af78ae7e783b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97786e1fa537f309615ea19da2a26a59e60acb4a9446a4e80c2af78ae7e783b->enter($__internal_c97786e1fa537f309615ea19da2a26a59e60acb4a9446a4e80c2af78ae7e783b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        // line 88
        echo "            <!-- Page Top Section -->
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
                    ";
        
        $__internal_c97786e1fa537f309615ea19da2a26a59e60acb4a9446a4e80c2af78ae7e783b->leave($__internal_c97786e1fa537f309615ea19da2a26a59e60acb4a9446a4e80c2af78ae7e783b_prof);

        
        $__internal_ab3ab0fc84bab6db20eb412a5e6c9b165f5d2e6c14beef7d19b1c72506f948a4->leave($__internal_ab3ab0fc84bab6db20eb412a5e6c9b165f5d2e6c14beef7d19b1c72506f948a4_prof);

    }

    // line 162
    public function block_fin($context, array $blocks = array())
    {
        $__internal_f907491265286273b7fc1fcded31401c39129b3c47da783db47a7ef3a3ef217a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f907491265286273b7fc1fcded31401c39129b3c47da783db47a7ef3a3ef217a->enter($__internal_f907491265286273b7fc1fcded31401c39129b3c47da783db47a7ef3a3ef217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_9e988be9677afc3881d8af96414d3cadc302ee7ec8b73ee6e38c9e17743903cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e988be9677afc3881d8af96414d3cadc302ee7ec8b73ee6e38c9e17743903cb->enter($__internal_9e988be9677afc3881d8af96414d3cadc302ee7ec8b73ee6e38c9e17743903cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 163
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->
                    ";
        
        $__internal_9e988be9677afc3881d8af96414d3cadc302ee7ec8b73ee6e38c9e17743903cb->leave($__internal_9e988be9677afc3881d8af96414d3cadc302ee7ec8b73ee6e38c9e17743903cb_prof);

        
        $__internal_f907491265286273b7fc1fcded31401c39129b3c47da783db47a7ef3a3ef217a->leave($__internal_f907491265286273b7fc1fcded31401c39129b3c47da783db47a7ef3a3ef217a_prof);

    }

    // line 173
    public function block_letter($context, array $blocks = array())
    {
        $__internal_c8941438d1d50289e122f4af5bd6ab76c79953aac21ca23c1701283b793bb61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8941438d1d50289e122f4af5bd6ab76c79953aac21ca23c1701283b793bb61f->enter($__internal_c8941438d1d50289e122f4af5bd6ab76c79953aac21ca23c1701283b793bb61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_e440d908fae637f9d8af2a116787fc6cb9ac6a937c1f1e56c75214b543348a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e440d908fae637f9d8af2a116787fc6cb9ac6a937c1f1e56c75214b543348a68->enter($__internal_e440d908fae637f9d8af2a116787fc6cb9ac6a937c1f1e56c75214b543348a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_e440d908fae637f9d8af2a116787fc6cb9ac6a937c1f1e56c75214b543348a68->leave($__internal_e440d908fae637f9d8af2a116787fc6cb9ac6a937c1f1e56c75214b543348a68_prof);

        
        $__internal_c8941438d1d50289e122f4af5bd6ab76c79953aac21ca23c1701283b793bb61f->leave($__internal_c8941438d1d50289e122f4af5bd6ab76c79953aac21ca23c1701283b793bb61f_prof);

    }

    // line 174
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_7b6db3fa3be731ca2c5ea7f22d721d4701e6808a38f7f6fb3936994db6629929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6db3fa3be731ca2c5ea7f22d721d4701e6808a38f7f6fb3936994db6629929->enter($__internal_7b6db3fa3be731ca2c5ea7f22d721d4701e6808a38f7f6fb3936994db6629929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_8e5f0df37325cadd2f831566830a4db3179f6162ec7f8515dafd5d059dd6d9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5f0df37325cadd2f831566830a4db3179f6162ec7f8515dafd5d059dd6d9b6->enter($__internal_8e5f0df37325cadd2f831566830a4db3179f6162ec7f8515dafd5d059dd6d9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_8e5f0df37325cadd2f831566830a4db3179f6162ec7f8515dafd5d059dd6d9b6->leave($__internal_8e5f0df37325cadd2f831566830a4db3179f6162ec7f8515dafd5d059dd6d9b6_prof);

        
        $__internal_7b6db3fa3be731ca2c5ea7f22d721d4701e6808a38f7f6fb3936994db6629929->leave($__internal_7b6db3fa3be731ca2c5ea7f22d721d4701e6808a38f7f6fb3936994db6629929_prof);

    }

    // line 175
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_546e4e744ca5a843475c794d69e24751fdb904c80e91ab2ca8d39408771bf73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546e4e744ca5a843475c794d69e24751fdb904c80e91ab2ca8d39408771bf73e->enter($__internal_546e4e744ca5a843475c794d69e24751fdb904c80e91ab2ca8d39408771bf73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_487e9e38934b996e1c6a68ee2824a3b773d9d743d46e14561fb4d3be3b0fad61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487e9e38934b996e1c6a68ee2824a3b773d9d743d46e14561fb4d3be3b0fad61->enter($__internal_487e9e38934b996e1c6a68ee2824a3b773d9d743d46e14561fb4d3be3b0fad61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_487e9e38934b996e1c6a68ee2824a3b773d9d743d46e14561fb4d3be3b0fad61->leave($__internal_487e9e38934b996e1c6a68ee2824a3b773d9d743d46e14561fb4d3be3b0fad61_prof);

        
        $__internal_546e4e744ca5a843475c794d69e24751fdb904c80e91ab2ca8d39408771bf73e->leave($__internal_546e4e744ca5a843475c794d69e24751fdb904c80e91ab2ca8d39408771bf73e_prof);

    }

    // line 176
    public function block_classement($context, array $blocks = array())
    {
        $__internal_6568a6344d1bb2c36ce85dd8825e9691b474e03b3b4fc2155f524d6d96232b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6568a6344d1bb2c36ce85dd8825e9691b474e03b3b4fc2155f524d6d96232b6f->enter($__internal_6568a6344d1bb2c36ce85dd8825e9691b474e03b3b4fc2155f524d6d96232b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_1ad3db76704fcba869fe454e499d0e519a79d20956b60072514ae99a2b04a868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad3db76704fcba869fe454e499d0e519a79d20956b60072514ae99a2b04a868->enter($__internal_1ad3db76704fcba869fe454e499d0e519a79d20956b60072514ae99a2b04a868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_1ad3db76704fcba869fe454e499d0e519a79d20956b60072514ae99a2b04a868->leave($__internal_1ad3db76704fcba869fe454e499d0e519a79d20956b60072514ae99a2b04a868_prof);

        
        $__internal_6568a6344d1bb2c36ce85dd8825e9691b474e03b3b4fc2155f524d6d96232b6f->leave($__internal_6568a6344d1bb2c36ce85dd8825e9691b474e03b3b4fc2155f524d6d96232b6f_prof);

    }

    // line 178
    public function block_contact($context, array $blocks = array())
    {
        $__internal_d9e54607c0dbee816a17a12debce1adac8e26f33726fe71db032f5e100d2aefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e54607c0dbee816a17a12debce1adac8e26f33726fe71db032f5e100d2aefd->enter($__internal_d9e54607c0dbee816a17a12debce1adac8e26f33726fe71db032f5e100d2aefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_3822e5896d7fbc8236587cb129fb32cca00a0630fc596e8dd5432a0ce1edb863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3822e5896d7fbc8236587cb129fb32cca00a0630fc596e8dd5432a0ce1edb863->enter($__internal_3822e5896d7fbc8236587cb129fb32cca00a0630fc596e8dd5432a0ce1edb863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        echo "       
    <!-- Contact Section -->
    <section id=\"contact\" class=\"section-style\" data-background-image=\"";
        // line 180
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
        
        $__internal_3822e5896d7fbc8236587cb129fb32cca00a0630fc596e8dd5432a0ce1edb863->leave($__internal_3822e5896d7fbc8236587cb129fb32cca00a0630fc596e8dd5432a0ce1edb863_prof);

        
        $__internal_d9e54607c0dbee816a17a12debce1adac8e26f33726fe71db032f5e100d2aefd->leave($__internal_d9e54607c0dbee816a17a12debce1adac8e26f33726fe71db032f5e100d2aefd_prof);

    }

    // line 267
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b7ce9abb3c412d8a0aa585e474254b9dd5ecaa13872c5036478a31af1d598451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ce9abb3c412d8a0aa585e474254b9dd5ecaa13872c5036478a31af1d598451->enter($__internal_b7ce9abb3c412d8a0aa585e474254b9dd5ecaa13872c5036478a31af1d598451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_99dea1a72adcb2fe14dc17a166e0fbeabcd32770b47de73db6d7e813019df2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dea1a72adcb2fe14dc17a166e0fbeabcd32770b47de73db6d7e813019df2ed->enter($__internal_99dea1a72adcb2fe14dc17a166e0fbeabcd32770b47de73db6d7e813019df2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 268
        echo "    <!-- Footer Section -->
    <footer id=\"footer-section\">
        <p class=\"copyright\">
            &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
        </p>
    </footer>
    <!-- Footer Section End -->
";
        
        $__internal_99dea1a72adcb2fe14dc17a166e0fbeabcd32770b47de73db6d7e813019df2ed->leave($__internal_99dea1a72adcb2fe14dc17a166e0fbeabcd32770b47de73db6d7e813019df2ed_prof);

        
        $__internal_b7ce9abb3c412d8a0aa585e474254b9dd5ecaa13872c5036478a31af1d598451->leave($__internal_b7ce9abb3c412d8a0aa585e474254b9dd5ecaa13872c5036478a31af1d598451_prof);

    }

    // line 277
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_1067a6d99c18c824a556ff161c04dee468ae041524385fcaf83be85ac750cefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1067a6d99c18c824a556ff161c04dee468ae041524385fcaf83be85ac750cefd->enter($__internal_1067a6d99c18c824a556ff161c04dee468ae041524385fcaf83be85ac750cefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_7ba58ada09d2e1bc55a54fb2cb84719e0ef6b5988ff6e041c0c9a81f6d869ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba58ada09d2e1bc55a54fb2cb84719e0ef6b5988ff6e041c0c9a81f6d869ecb->enter($__internal_7ba58ada09d2e1bc55a54fb2cb84719e0ef6b5988ff6e041c0c9a81f6d869ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        // line 278
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
        
        $__internal_7ba58ada09d2e1bc55a54fb2cb84719e0ef6b5988ff6e041c0c9a81f6d869ecb->leave($__internal_7ba58ada09d2e1bc55a54fb2cb84719e0ef6b5988ff6e041c0c9a81f6d869ecb_prof);

        
        $__internal_1067a6d99c18c824a556ff161c04dee468ae041524385fcaf83be85ac750cefd->leave($__internal_1067a6d99c18c824a556ff161c04dee468ae041524385fcaf83be85ac750cefd_prof);

    }

    // line 301
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_6abd5d1dd87a7494fdb69ffa42af2932eb6e265fec02399a4cb76f5e037a3348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abd5d1dd87a7494fdb69ffa42af2932eb6e265fec02399a4cb76f5e037a3348->enter($__internal_6abd5d1dd87a7494fdb69ffa42af2932eb6e265fec02399a4cb76f5e037a3348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_b5de075105ea548752de4855c80191bb86918ed36d0e62b425a3799ae7bce112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5de075105ea548752de4855c80191bb86918ed36d0e62b425a3799ae7bce112->enter($__internal_b5de075105ea548752de4855c80191bb86918ed36d0e62b425a3799ae7bce112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "               
    <!-- conexion Switcher  -->
    <section id=\"conexion\">
        <div>

            <h3>Conexion</h3>

            <div>
                ";
        // line 309
        $this->displayBlock('profile', $context, $blocks);
        // line 311
        echo "            </div>
            <div class=\"menu\">
                <div>
                    ";
        // line 314
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 315
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 316
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 317
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 320
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 322
        echo "                </div>
                <br/>
                <a href=\"";
        // line 324
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
            </div>
        </div>
        <div class=\"bottom\">
            <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
        </div>
    </section>
    <!-- Conexion Switcher End -->
";
        
        $__internal_b5de075105ea548752de4855c80191bb86918ed36d0e62b425a3799ae7bce112->leave($__internal_b5de075105ea548752de4855c80191bb86918ed36d0e62b425a3799ae7bce112_prof);

        
        $__internal_6abd5d1dd87a7494fdb69ffa42af2932eb6e265fec02399a4cb76f5e037a3348->leave($__internal_6abd5d1dd87a7494fdb69ffa42af2932eb6e265fec02399a4cb76f5e037a3348_prof);

    }

    // line 309
    public function block_profile($context, array $blocks = array())
    {
        $__internal_72585180dac291596e39266a850a50242209f1ceba073bc192962a87cfacd7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72585180dac291596e39266a850a50242209f1ceba073bc192962a87cfacd7a5->enter($__internal_72585180dac291596e39266a850a50242209f1ceba073bc192962a87cfacd7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_c322af63343bbfc222da469041ad49d48f8c8729db5a716118bbf10a383a7980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c322af63343bbfc222da469041ad49d48f8c8729db5a716118bbf10a383a7980->enter($__internal_c322af63343bbfc222da469041ad49d48f8c8729db5a716118bbf10a383a7980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        // line 310
        echo "                ";
        
        $__internal_c322af63343bbfc222da469041ad49d48f8c8729db5a716118bbf10a383a7980->leave($__internal_c322af63343bbfc222da469041ad49d48f8c8729db5a716118bbf10a383a7980_prof);

        
        $__internal_72585180dac291596e39266a850a50242209f1ceba073bc192962a87cfacd7a5->leave($__internal_72585180dac291596e39266a850a50242209f1ceba073bc192962a87cfacd7a5_prof);

    }

    // line 334
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1fa0ef8c3de478699f648965a7a82e63c9dba6986799c56a9c6a9ea41ed95bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa0ef8c3de478699f648965a7a82e63c9dba6986799c56a9c6a9ea41ed95bed->enter($__internal_1fa0ef8c3de478699f648965a7a82e63c9dba6986799c56a9c6a9ea41ed95bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e71589e5932f87eca7345b887ebff204b8baf2008a34d76b09c70e94afa06213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71589e5932f87eca7345b887ebff204b8baf2008a34d76b09c70e94afa06213->enter($__internal_e71589e5932f87eca7345b887ebff204b8baf2008a34d76b09c70e94afa06213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 335
        echo "    <!-- jQuery Library -->      
    <script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Modernizr js -->
    <script type=\"text/javascript\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.8.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Plugins -->
    <script type=\"text/javascript\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom JavaScript Functions -->
    <script type=\"text/javascript\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>
    <!-- Color Style Switcher -->
    <script type=\"text/javascript\" src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/switcher.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e71589e5932f87eca7345b887ebff204b8baf2008a34d76b09c70e94afa06213->leave($__internal_e71589e5932f87eca7345b887ebff204b8baf2008a34d76b09c70e94afa06213_prof);

        
        $__internal_1fa0ef8c3de478699f648965a7a82e63c9dba6986799c56a9c6a9ea41ed95bed->leave($__internal_1fa0ef8c3de478699f648965a7a82e63c9dba6986799c56a9c6a9ea41ed95bed_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  766 => 346,  761 => 344,  756 => 342,  751 => 340,  746 => 338,  741 => 336,  738 => 335,  729 => 334,  719 => 310,  710 => 309,  691 => 324,  687 => 322,  679 => 320,  673 => 317,  669 => 316,  664 => 315,  662 => 314,  657 => 311,  655 => 309,  637 => 301,  606 => 278,  597 => 277,  580 => 268,  571 => 267,  475 => 180,  463 => 178,  446 => 176,  429 => 175,  412 => 174,  395 => 173,  382 => 163,  373 => 162,  291 => 89,  288 => 88,  279 => 87,  263 => 80,  259 => 79,  253 => 76,  249 => 75,  229 => 57,  220 => 56,  186 => 38,  169 => 27,  162 => 23,  158 => 22,  152 => 19,  146 => 16,  123 => 3,  111 => 348,  109 => 334,  106 => 333,  104 => 301,  101 => 300,  99 => 277,  96 => 276,  94 => 267,  91 => 266,  89 => 178,  86 => 177,  84 => 176,  82 => 175,  80 => 174,  78 => 173,  70 => 167,  68 => 162,  65 => 161,  63 => 87,  60 => 86,  58 => 56,  54 => 54,  52 => 38,  46 => 34,  44 => 3,  40 => 1,);
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

            <div>
                {% block profile %}
                {% endblock profile %}
            </div>
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
