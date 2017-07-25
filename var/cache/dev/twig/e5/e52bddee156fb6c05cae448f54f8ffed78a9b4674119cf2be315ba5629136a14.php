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
        $__internal_daf69b0b7457cfbc9c63cfba474dc5cb4f098b1335cb7306ccf508d068adcef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf69b0b7457cfbc9c63cfba474dc5cb4f098b1335cb7306ccf508d068adcef0->enter($__internal_daf69b0b7457cfbc9c63cfba474dc5cb4f098b1335cb7306ccf508d068adcef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ba65e15ff1862df57c084daedc8ef1ee39d5c1abaaf4e9f2da066ef2c8f47eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba65e15ff1862df57c084daedc8ef1ee39d5c1abaaf4e9f2da066ef2c8f47eb4->enter($__internal_ba65e15ff1862df57c084daedc8ef1ee39d5c1abaaf4e9f2da066ef2c8f47eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_daf69b0b7457cfbc9c63cfba474dc5cb4f098b1335cb7306ccf508d068adcef0->leave($__internal_daf69b0b7457cfbc9c63cfba474dc5cb4f098b1335cb7306ccf508d068adcef0_prof);

        
        $__internal_ba65e15ff1862df57c084daedc8ef1ee39d5c1abaaf4e9f2da066ef2c8f47eb4->leave($__internal_ba65e15ff1862df57c084daedc8ef1ee39d5c1abaaf4e9f2da066ef2c8f47eb4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b666fe343fabda0df508842c42288a3dff8a54b2e200044a9a5d1b92ccf72f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b666fe343fabda0df508842c42288a3dff8a54b2e200044a9a5d1b92ccf72f2a->enter($__internal_b666fe343fabda0df508842c42288a3dff8a54b2e200044a9a5d1b92ccf72f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c7efbed8e6085b96b68ba40a5fc01a108ff93bea41b352da56ca8043a4f3d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7efbed8e6085b96b68ba40a5fc01a108ff93bea41b352da56ca8043a4f3d0f->enter($__internal_5c7efbed8e6085b96b68ba40a5fc01a108ff93bea41b352da56ca8043a4f3d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5c7efbed8e6085b96b68ba40a5fc01a108ff93bea41b352da56ca8043a4f3d0f->leave($__internal_5c7efbed8e6085b96b68ba40a5fc01a108ff93bea41b352da56ca8043a4f3d0f_prof);

        
        $__internal_b666fe343fabda0df508842c42288a3dff8a54b2e200044a9a5d1b92ccf72f2a->leave($__internal_b666fe343fabda0df508842c42288a3dff8a54b2e200044a9a5d1b92ccf72f2a_prof);

    }

    // line 38
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_95399a97a8c48d36e8ea80c7f6d314ab28de165418681adb96f4ff5458345393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95399a97a8c48d36e8ea80c7f6d314ab28de165418681adb96f4ff5458345393->enter($__internal_95399a97a8c48d36e8ea80c7f6d314ab28de165418681adb96f4ff5458345393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_c9d50ed0089dc2cfad6aff3559b4a71071029ab209f2b696448336a15548236e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d50ed0089dc2cfad6aff3559b4a71071029ab209f2b696448336a15548236e->enter($__internal_c9d50ed0089dc2cfad6aff3559b4a71071029ab209f2b696448336a15548236e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_c9d50ed0089dc2cfad6aff3559b4a71071029ab209f2b696448336a15548236e->leave($__internal_c9d50ed0089dc2cfad6aff3559b4a71071029ab209f2b696448336a15548236e_prof);

        
        $__internal_95399a97a8c48d36e8ea80c7f6d314ab28de165418681adb96f4ff5458345393->leave($__internal_95399a97a8c48d36e8ea80c7f6d314ab28de165418681adb96f4ff5458345393_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8352170c17bc28cc858b6cda0cc8a8d726ca6fa6ce48478a36c7871781c8f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8352170c17bc28cc858b6cda0cc8a8d726ca6fa6ce48478a36c7871781c8f34->enter($__internal_c8352170c17bc28cc858b6cda0cc8a8d726ca6fa6ce48478a36c7871781c8f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81c9a21b37e9f4ca9808cea8e98c839f8afdb62bb83aa911f68efa268e9fe1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c9a21b37e9f4ca9808cea8e98c839f8afdb62bb83aa911f68efa268e9fe1f2->enter($__internal_81c9a21b37e9f4ca9808cea8e98c839f8afdb62bb83aa911f68efa268e9fe1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_81c9a21b37e9f4ca9808cea8e98c839f8afdb62bb83aa911f68efa268e9fe1f2->leave($__internal_81c9a21b37e9f4ca9808cea8e98c839f8afdb62bb83aa911f68efa268e9fe1f2_prof);

        
        $__internal_c8352170c17bc28cc858b6cda0cc8a8d726ca6fa6ce48478a36c7871781c8f34->leave($__internal_c8352170c17bc28cc858b6cda0cc8a8d726ca6fa6ce48478a36c7871781c8f34_prof);

    }

    // line 87
    public function block_title($context, array $blocks = array())
    {
        $__internal_585188f0a09ac3bdd919d29e9631eafda7953c5471337b66df61305ad90458b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585188f0a09ac3bdd919d29e9631eafda7953c5471337b66df61305ad90458b1->enter($__internal_585188f0a09ac3bdd919d29e9631eafda7953c5471337b66df61305ad90458b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58e679108ee281267e30c070c533d8d63bc872400fe4755f7db5d212ff09eb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e679108ee281267e30c070c533d8d63bc872400fe4755f7db5d212ff09eb33->enter($__internal_58e679108ee281267e30c070c533d8d63bc872400fe4755f7db5d212ff09eb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_58e679108ee281267e30c070c533d8d63bc872400fe4755f7db5d212ff09eb33->leave($__internal_58e679108ee281267e30c070c533d8d63bc872400fe4755f7db5d212ff09eb33_prof);

        
        $__internal_585188f0a09ac3bdd919d29e9631eafda7953c5471337b66df61305ad90458b1->leave($__internal_585188f0a09ac3bdd919d29e9631eafda7953c5471337b66df61305ad90458b1_prof);

    }

    // line 107
    public function block_timer($context, array $blocks = array())
    {
        $__internal_6e33c4422cc03d782947bb0f46f7fc2ca2d9d99561029fa7ea585a94f2aa245c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e33c4422cc03d782947bb0f46f7fc2ca2d9d99561029fa7ea585a94f2aa245c->enter($__internal_6e33c4422cc03d782947bb0f46f7fc2ca2d9d99561029fa7ea585a94f2aa245c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_40cad0b8c0e29d65468c9441545f8e28a68b2118f38242b0be25a309bef9f52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cad0b8c0e29d65468c9441545f8e28a68b2118f38242b0be25a309bef9f52f->enter($__internal_40cad0b8c0e29d65468c9441545f8e28a68b2118f38242b0be25a309bef9f52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_40cad0b8c0e29d65468c9441545f8e28a68b2118f38242b0be25a309bef9f52f->leave($__internal_40cad0b8c0e29d65468c9441545f8e28a68b2118f38242b0be25a309bef9f52f_prof);

        
        $__internal_6e33c4422cc03d782947bb0f46f7fc2ca2d9d99561029fa7ea585a94f2aa245c->leave($__internal_6e33c4422cc03d782947bb0f46f7fc2ca2d9d99561029fa7ea585a94f2aa245c_prof);

    }

    // line 165
    public function block_fin($context, array $blocks = array())
    {
        $__internal_a1474cfad0c5a3ad582337e85f42449962269facc5f6c98197c4b7c330e3d1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1474cfad0c5a3ad582337e85f42449962269facc5f6c98197c4b7c330e3d1bb->enter($__internal_a1474cfad0c5a3ad582337e85f42449962269facc5f6c98197c4b7c330e3d1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_acd50478f86580869b399e4afd2cdf8b83a409bf46f62c27ab754ce2185aff80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd50478f86580869b399e4afd2cdf8b83a409bf46f62c27ab754ce2185aff80->enter($__internal_acd50478f86580869b399e4afd2cdf8b83a409bf46f62c27ab754ce2185aff80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 166
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->
                    ";
        
        $__internal_acd50478f86580869b399e4afd2cdf8b83a409bf46f62c27ab754ce2185aff80->leave($__internal_acd50478f86580869b399e4afd2cdf8b83a409bf46f62c27ab754ce2185aff80_prof);

        
        $__internal_a1474cfad0c5a3ad582337e85f42449962269facc5f6c98197c4b7c330e3d1bb->leave($__internal_a1474cfad0c5a3ad582337e85f42449962269facc5f6c98197c4b7c330e3d1bb_prof);

    }

    // line 176
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_8088933582e04ed4e262407b642afd594a4fdf54e0e0e5bc44715b0ba39e56a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8088933582e04ed4e262407b642afd594a4fdf54e0e0e5bc44715b0ba39e56a6->enter($__internal_8088933582e04ed4e262407b642afd594a4fdf54e0e0e5bc44715b0ba39e56a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_0a13bd23d36ee9fde87916b1eb28be0246230b286b1c6cd53633985efab1160c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a13bd23d36ee9fde87916b1eb28be0246230b286b1c6cd53633985efab1160c->enter($__internal_0a13bd23d36ee9fde87916b1eb28be0246230b286b1c6cd53633985efab1160c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        
        $__internal_0a13bd23d36ee9fde87916b1eb28be0246230b286b1c6cd53633985efab1160c->leave($__internal_0a13bd23d36ee9fde87916b1eb28be0246230b286b1c6cd53633985efab1160c_prof);

        
        $__internal_8088933582e04ed4e262407b642afd594a4fdf54e0e0e5bc44715b0ba39e56a6->leave($__internal_8088933582e04ed4e262407b642afd594a4fdf54e0e0e5bc44715b0ba39e56a6_prof);

    }

    // line 177
    public function block_register($context, array $blocks = array())
    {
        $__internal_b1f212eb9af9accaf2ce9c3888229c9e1294bcef03249ab77a3ff27395940180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f212eb9af9accaf2ce9c3888229c9e1294bcef03249ab77a3ff27395940180->enter($__internal_b1f212eb9af9accaf2ce9c3888229c9e1294bcef03249ab77a3ff27395940180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_d7960af2fd6829b41d78d98951bf620c094069413cfd976a94c8427baf23fbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7960af2fd6829b41d78d98951bf620c094069413cfd976a94c8427baf23fbac->enter($__internal_d7960af2fd6829b41d78d98951bf620c094069413cfd976a94c8427baf23fbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_d7960af2fd6829b41d78d98951bf620c094069413cfd976a94c8427baf23fbac->leave($__internal_d7960af2fd6829b41d78d98951bf620c094069413cfd976a94c8427baf23fbac_prof);

        
        $__internal_b1f212eb9af9accaf2ce9c3888229c9e1294bcef03249ab77a3ff27395940180->leave($__internal_b1f212eb9af9accaf2ce9c3888229c9e1294bcef03249ab77a3ff27395940180_prof);

    }

    // line 178
    public function block_profile($context, array $blocks = array())
    {
        $__internal_52342e06f31a7f209ede1acbaa0a659fc451286fa786520fa1cdd98d8d6c9011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52342e06f31a7f209ede1acbaa0a659fc451286fa786520fa1cdd98d8d6c9011->enter($__internal_52342e06f31a7f209ede1acbaa0a659fc451286fa786520fa1cdd98d8d6c9011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_3be19541923649261803a71724a7e4e5cd8be326d13c40a3412fe3546be72516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be19541923649261803a71724a7e4e5cd8be326d13c40a3412fe3546be72516->enter($__internal_3be19541923649261803a71724a7e4e5cd8be326d13c40a3412fe3546be72516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_3be19541923649261803a71724a7e4e5cd8be326d13c40a3412fe3546be72516->leave($__internal_3be19541923649261803a71724a7e4e5cd8be326d13c40a3412fe3546be72516_prof);

        
        $__internal_52342e06f31a7f209ede1acbaa0a659fc451286fa786520fa1cdd98d8d6c9011->leave($__internal_52342e06f31a7f209ede1acbaa0a659fc451286fa786520fa1cdd98d8d6c9011_prof);

    }

    // line 179
    public function block_letter($context, array $blocks = array())
    {
        $__internal_a7358efe56a1fc33fa60313c1c6d77a0d89d94b19e9ce9b8b938f765a7e7e459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7358efe56a1fc33fa60313c1c6d77a0d89d94b19e9ce9b8b938f765a7e7e459->enter($__internal_a7358efe56a1fc33fa60313c1c6d77a0d89d94b19e9ce9b8b938f765a7e7e459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_067e1658944cb791cd126cf419217cb67401c328cd53588c9eefb8c8fecf3851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067e1658944cb791cd126cf419217cb67401c328cd53588c9eefb8c8fecf3851->enter($__internal_067e1658944cb791cd126cf419217cb67401c328cd53588c9eefb8c8fecf3851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_067e1658944cb791cd126cf419217cb67401c328cd53588c9eefb8c8fecf3851->leave($__internal_067e1658944cb791cd126cf419217cb67401c328cd53588c9eefb8c8fecf3851_prof);

        
        $__internal_a7358efe56a1fc33fa60313c1c6d77a0d89d94b19e9ce9b8b938f765a7e7e459->leave($__internal_a7358efe56a1fc33fa60313c1c6d77a0d89d94b19e9ce9b8b938f765a7e7e459_prof);

    }

    // line 180
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_cb255f733157fa586cabf75c69a9f0bdbe804f8d83a5766cef43c63707787a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb255f733157fa586cabf75c69a9f0bdbe804f8d83a5766cef43c63707787a91->enter($__internal_cb255f733157fa586cabf75c69a9f0bdbe804f8d83a5766cef43c63707787a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_57a661e9cd9d9753f1cf17dc13a824fb83bed385d89af667a64dcc4352de5e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a661e9cd9d9753f1cf17dc13a824fb83bed385d89af667a64dcc4352de5e3f->enter($__internal_57a661e9cd9d9753f1cf17dc13a824fb83bed385d89af667a64dcc4352de5e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_57a661e9cd9d9753f1cf17dc13a824fb83bed385d89af667a64dcc4352de5e3f->leave($__internal_57a661e9cd9d9753f1cf17dc13a824fb83bed385d89af667a64dcc4352de5e3f_prof);

        
        $__internal_cb255f733157fa586cabf75c69a9f0bdbe804f8d83a5766cef43c63707787a91->leave($__internal_cb255f733157fa586cabf75c69a9f0bdbe804f8d83a5766cef43c63707787a91_prof);

    }

    // line 181
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_639c7ef7f9761ab05f70b7f146a5d613a33a56e686b5e9d08a2f25440ed65195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639c7ef7f9761ab05f70b7f146a5d613a33a56e686b5e9d08a2f25440ed65195->enter($__internal_639c7ef7f9761ab05f70b7f146a5d613a33a56e686b5e9d08a2f25440ed65195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_1a8358a3a6d7ba38f592d527e79cf2ab46d86072494e10dd82a6daf24ed3d994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8358a3a6d7ba38f592d527e79cf2ab46d86072494e10dd82a6daf24ed3d994->enter($__internal_1a8358a3a6d7ba38f592d527e79cf2ab46d86072494e10dd82a6daf24ed3d994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_1a8358a3a6d7ba38f592d527e79cf2ab46d86072494e10dd82a6daf24ed3d994->leave($__internal_1a8358a3a6d7ba38f592d527e79cf2ab46d86072494e10dd82a6daf24ed3d994_prof);

        
        $__internal_639c7ef7f9761ab05f70b7f146a5d613a33a56e686b5e9d08a2f25440ed65195->leave($__internal_639c7ef7f9761ab05f70b7f146a5d613a33a56e686b5e9d08a2f25440ed65195_prof);

    }

    // line 182
    public function block_classement($context, array $blocks = array())
    {
        $__internal_f8794569505c6fdacff2e99ab681ac2b9e30dc315a29943945fa0e1b2e503f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8794569505c6fdacff2e99ab681ac2b9e30dc315a29943945fa0e1b2e503f74->enter($__internal_f8794569505c6fdacff2e99ab681ac2b9e30dc315a29943945fa0e1b2e503f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_e47ea44ba554cbabec2dafc6c3656995d21b78e946b31961637dc2ae5d13eb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47ea44ba554cbabec2dafc6c3656995d21b78e946b31961637dc2ae5d13eb7e->enter($__internal_e47ea44ba554cbabec2dafc6c3656995d21b78e946b31961637dc2ae5d13eb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_e47ea44ba554cbabec2dafc6c3656995d21b78e946b31961637dc2ae5d13eb7e->leave($__internal_e47ea44ba554cbabec2dafc6c3656995d21b78e946b31961637dc2ae5d13eb7e_prof);

        
        $__internal_f8794569505c6fdacff2e99ab681ac2b9e30dc315a29943945fa0e1b2e503f74->leave($__internal_f8794569505c6fdacff2e99ab681ac2b9e30dc315a29943945fa0e1b2e503f74_prof);

    }

    // line 184
    public function block_contact($context, array $blocks = array())
    {
        $__internal_5942bf1016a56867bb8c1b06db1d65ceda4f1d2f27bc69dd56de1178698ef066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5942bf1016a56867bb8c1b06db1d65ceda4f1d2f27bc69dd56de1178698ef066->enter($__internal_5942bf1016a56867bb8c1b06db1d65ceda4f1d2f27bc69dd56de1178698ef066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_5477f27d44b7288007d014d6d221208718ec0b702c51c805b1a779702b64812d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5477f27d44b7288007d014d6d221208718ec0b702c51c805b1a779702b64812d->enter($__internal_5477f27d44b7288007d014d6d221208718ec0b702c51c805b1a779702b64812d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_5477f27d44b7288007d014d6d221208718ec0b702c51c805b1a779702b64812d->leave($__internal_5477f27d44b7288007d014d6d221208718ec0b702c51c805b1a779702b64812d_prof);

        
        $__internal_5942bf1016a56867bb8c1b06db1d65ceda4f1d2f27bc69dd56de1178698ef066->leave($__internal_5942bf1016a56867bb8c1b06db1d65ceda4f1d2f27bc69dd56de1178698ef066_prof);

    }

    // line 273
    public function block_footer($context, array $blocks = array())
    {
        $__internal_86f581d4d55c214771d5f6af4910454f087db49c794cac27891ac3430abe15ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f581d4d55c214771d5f6af4910454f087db49c794cac27891ac3430abe15ae->enter($__internal_86f581d4d55c214771d5f6af4910454f087db49c794cac27891ac3430abe15ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_65f2f0a090e1ab3a7ed68a90f6e9ca6e3d51a76c374e79afbf339a4ac5555a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f2f0a090e1ab3a7ed68a90f6e9ca6e3d51a76c374e79afbf339a4ac5555a58->enter($__internal_65f2f0a090e1ab3a7ed68a90f6e9ca6e3d51a76c374e79afbf339a4ac5555a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 274
        echo "    <!-- Footer Section -->
    <footer id=\"footer-section\">
        <p class=\"copyright\">
            &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
        </p>
    </footer>
    <!-- Footer Section End -->
";
        
        $__internal_65f2f0a090e1ab3a7ed68a90f6e9ca6e3d51a76c374e79afbf339a4ac5555a58->leave($__internal_65f2f0a090e1ab3a7ed68a90f6e9ca6e3d51a76c374e79afbf339a4ac5555a58_prof);

        
        $__internal_86f581d4d55c214771d5f6af4910454f087db49c794cac27891ac3430abe15ae->leave($__internal_86f581d4d55c214771d5f6af4910454f087db49c794cac27891ac3430abe15ae_prof);

    }

    // line 283
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_1bd0921cb97c519351af1f11d1954e3367e452fbe0d57bd19b571e1e628c31b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd0921cb97c519351af1f11d1954e3367e452fbe0d57bd19b571e1e628c31b4->enter($__internal_1bd0921cb97c519351af1f11d1954e3367e452fbe0d57bd19b571e1e628c31b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_2c8295c7303c76cb93d57805e2e2c31952fb24484062b4e7504562d952168dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8295c7303c76cb93d57805e2e2c31952fb24484062b4e7504562d952168dc0->enter($__internal_2c8295c7303c76cb93d57805e2e2c31952fb24484062b4e7504562d952168dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

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
        
        $__internal_2c8295c7303c76cb93d57805e2e2c31952fb24484062b4e7504562d952168dc0->leave($__internal_2c8295c7303c76cb93d57805e2e2c31952fb24484062b4e7504562d952168dc0_prof);

        
        $__internal_1bd0921cb97c519351af1f11d1954e3367e452fbe0d57bd19b571e1e628c31b4->leave($__internal_1bd0921cb97c519351af1f11d1954e3367e452fbe0d57bd19b571e1e628c31b4_prof);

    }

    // line 307
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_e8de606dfa3527e57b75a172bd5b4bff7c6e7796bc0933abf9045b4092bb6e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8de606dfa3527e57b75a172bd5b4bff7c6e7796bc0933abf9045b4092bb6e5c->enter($__internal_e8de606dfa3527e57b75a172bd5b4bff7c6e7796bc0933abf9045b4092bb6e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_b2390780c3e348b1a09d44b94b08b4ab7b07e3ce7ca145445b8395aa287d1e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2390780c3e348b1a09d44b94b08b4ab7b07e3ce7ca145445b8395aa287d1e7b->enter($__internal_b2390780c3e348b1a09d44b94b08b4ab7b07e3ce7ca145445b8395aa287d1e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

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
        
        $__internal_b2390780c3e348b1a09d44b94b08b4ab7b07e3ce7ca145445b8395aa287d1e7b->leave($__internal_b2390780c3e348b1a09d44b94b08b4ab7b07e3ce7ca145445b8395aa287d1e7b_prof);

        
        $__internal_e8de606dfa3527e57b75a172bd5b4bff7c6e7796bc0933abf9045b4092bb6e5c->leave($__internal_e8de606dfa3527e57b75a172bd5b4bff7c6e7796bc0933abf9045b4092bb6e5c_prof);

    }

    // line 339
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_726d20a43ad64c8957534c527acf727180b7cf4c555d9307c49cc190401b8ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726d20a43ad64c8957534c527acf727180b7cf4c555d9307c49cc190401b8ab5->enter($__internal_726d20a43ad64c8957534c527acf727180b7cf4c555d9307c49cc190401b8ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c2cd1651ad8f19ffc6a4a1b9e490fa2333f56da6544da3e668895d14fbbedaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cd1651ad8f19ffc6a4a1b9e490fa2333f56da6544da3e668895d14fbbedaac->enter($__internal_c2cd1651ad8f19ffc6a4a1b9e490fa2333f56da6544da3e668895d14fbbedaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c2cd1651ad8f19ffc6a4a1b9e490fa2333f56da6544da3e668895d14fbbedaac->leave($__internal_c2cd1651ad8f19ffc6a4a1b9e490fa2333f56da6544da3e668895d14fbbedaac_prof);

        
        $__internal_726d20a43ad64c8957534c527acf727180b7cf4c555d9307c49cc190401b8ab5->leave($__internal_726d20a43ad64c8957534c527acf727180b7cf4c555d9307c49cc190401b8ab5_prof);

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
