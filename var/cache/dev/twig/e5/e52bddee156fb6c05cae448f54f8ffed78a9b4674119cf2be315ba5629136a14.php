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
        $__internal_534c5c4ffcb6c64c104851ec109c9d658ecda4f7f831c8dcdb3967d3020f75e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534c5c4ffcb6c64c104851ec109c9d658ecda4f7f831c8dcdb3967d3020f75e9->enter($__internal_534c5c4ffcb6c64c104851ec109c9d658ecda4f7f831c8dcdb3967d3020f75e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9a2fc51b903d2bf7bd3e795263482e8606e0ff1f2bf42f427a9f4683866c662b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2fc51b903d2bf7bd3e795263482e8606e0ff1f2bf42f427a9f4683866c662b->enter($__internal_9a2fc51b903d2bf7bd3e795263482e8606e0ff1f2bf42f427a9f4683866c662b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_534c5c4ffcb6c64c104851ec109c9d658ecda4f7f831c8dcdb3967d3020f75e9->leave($__internal_534c5c4ffcb6c64c104851ec109c9d658ecda4f7f831c8dcdb3967d3020f75e9_prof);

        
        $__internal_9a2fc51b903d2bf7bd3e795263482e8606e0ff1f2bf42f427a9f4683866c662b->leave($__internal_9a2fc51b903d2bf7bd3e795263482e8606e0ff1f2bf42f427a9f4683866c662b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7db8c200e0c40e23b8373a0b8b1598bc149f3565d5ba22929b10795cdb77b853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db8c200e0c40e23b8373a0b8b1598bc149f3565d5ba22929b10795cdb77b853->enter($__internal_7db8c200e0c40e23b8373a0b8b1598bc149f3565d5ba22929b10795cdb77b853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfaea7502134040cb5ab368b62edb367ddd131f2c2a995e7bd455f5bf5d11970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfaea7502134040cb5ab368b62edb367ddd131f2c2a995e7bd455f5bf5d11970->enter($__internal_cfaea7502134040cb5ab368b62edb367ddd131f2c2a995e7bd455f5bf5d11970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cfaea7502134040cb5ab368b62edb367ddd131f2c2a995e7bd455f5bf5d11970->leave($__internal_cfaea7502134040cb5ab368b62edb367ddd131f2c2a995e7bd455f5bf5d11970_prof);

        
        $__internal_7db8c200e0c40e23b8373a0b8b1598bc149f3565d5ba22929b10795cdb77b853->leave($__internal_7db8c200e0c40e23b8373a0b8b1598bc149f3565d5ba22929b10795cdb77b853_prof);

    }

    // line 37
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_1c12d2bec910a3fdc7cfd5269785582496cd83400ce5043d13641b35e950d78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c12d2bec910a3fdc7cfd5269785582496cd83400ce5043d13641b35e950d78d->enter($__internal_1c12d2bec910a3fdc7cfd5269785582496cd83400ce5043d13641b35e950d78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_01b6ed7c8ccecd7503f20235e51f469ce45bcc96f0662a7a329c6e69181b20a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b6ed7c8ccecd7503f20235e51f469ce45bcc96f0662a7a329c6e69181b20a0->enter($__internal_01b6ed7c8ccecd7503f20235e51f469ce45bcc96f0662a7a329c6e69181b20a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_01b6ed7c8ccecd7503f20235e51f469ce45bcc96f0662a7a329c6e69181b20a0->leave($__internal_01b6ed7c8ccecd7503f20235e51f469ce45bcc96f0662a7a329c6e69181b20a0_prof);

        
        $__internal_1c12d2bec910a3fdc7cfd5269785582496cd83400ce5043d13641b35e950d78d->leave($__internal_1c12d2bec910a3fdc7cfd5269785582496cd83400ce5043d13641b35e950d78d_prof);

    }

    // line 55
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc0e812d7980c99f5dbd3a5962ebe553cf5059dcff16eb93a8eb45bddb5cd55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0e812d7980c99f5dbd3a5962ebe553cf5059dcff16eb93a8eb45bddb5cd55a->enter($__internal_bc0e812d7980c99f5dbd3a5962ebe553cf5059dcff16eb93a8eb45bddb5cd55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5656b8012226667270c2e168c7a60e2b0db43386a01047795502cdaa8220fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5656b8012226667270c2e168c7a60e2b0db43386a01047795502cdaa8220fec->enter($__internal_c5656b8012226667270c2e168c7a60e2b0db43386a01047795502cdaa8220fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c5656b8012226667270c2e168c7a60e2b0db43386a01047795502cdaa8220fec->leave($__internal_c5656b8012226667270c2e168c7a60e2b0db43386a01047795502cdaa8220fec_prof);

        
        $__internal_bc0e812d7980c99f5dbd3a5962ebe553cf5059dcff16eb93a8eb45bddb5cd55a->leave($__internal_bc0e812d7980c99f5dbd3a5962ebe553cf5059dcff16eb93a8eb45bddb5cd55a_prof);

    }

    // line 83
    public function block_timer($context, array $blocks = array())
    {
        $__internal_336ac6d5dee444fc6b9e48caa9367a1578b2cc57f1dbcb4c3bb700d33eb66905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_336ac6d5dee444fc6b9e48caa9367a1578b2cc57f1dbcb4c3bb700d33eb66905->enter($__internal_336ac6d5dee444fc6b9e48caa9367a1578b2cc57f1dbcb4c3bb700d33eb66905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_0362e712aed78488cbb589a5d3ae5e9f6d75920dbdffdf6b4475f1b36220b861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0362e712aed78488cbb589a5d3ae5e9f6d75920dbdffdf6b4475f1b36220b861->enter($__internal_0362e712aed78488cbb589a5d3ae5e9f6d75920dbdffdf6b4475f1b36220b861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_0362e712aed78488cbb589a5d3ae5e9f6d75920dbdffdf6b4475f1b36220b861->leave($__internal_0362e712aed78488cbb589a5d3ae5e9f6d75920dbdffdf6b4475f1b36220b861_prof);

        
        $__internal_336ac6d5dee444fc6b9e48caa9367a1578b2cc57f1dbcb4c3bb700d33eb66905->leave($__internal_336ac6d5dee444fc6b9e48caa9367a1578b2cc57f1dbcb4c3bb700d33eb66905_prof);

    }

    // line 167
    public function block_letter($context, array $blocks = array())
    {
        $__internal_97d0d325674a2c317c3c2c8fab16e4280a83bf4575685a101400193ec034e2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d0d325674a2c317c3c2c8fab16e4280a83bf4575685a101400193ec034e2f4->enter($__internal_97d0d325674a2c317c3c2c8fab16e4280a83bf4575685a101400193ec034e2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_99fba2f3824c6f44d566dd3a7163c6da78506371345dffcfc96914fe2b81fb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fba2f3824c6f44d566dd3a7163c6da78506371345dffcfc96914fe2b81fb16->enter($__internal_99fba2f3824c6f44d566dd3a7163c6da78506371345dffcfc96914fe2b81fb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_99fba2f3824c6f44d566dd3a7163c6da78506371345dffcfc96914fe2b81fb16->leave($__internal_99fba2f3824c6f44d566dd3a7163c6da78506371345dffcfc96914fe2b81fb16_prof);

        
        $__internal_97d0d325674a2c317c3c2c8fab16e4280a83bf4575685a101400193ec034e2f4->leave($__internal_97d0d325674a2c317c3c2c8fab16e4280a83bf4575685a101400193ec034e2f4_prof);

    }

    // line 168
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_94be81efa9c5ee5145b60a4b875644c8a5dcda510df7e8544e17e2a1b814fef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94be81efa9c5ee5145b60a4b875644c8a5dcda510df7e8544e17e2a1b814fef9->enter($__internal_94be81efa9c5ee5145b60a4b875644c8a5dcda510df7e8544e17e2a1b814fef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_32cd1daf431bb25ab7fddfb9304d08a5a9d5936de2f9fc76b270e16637c389df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cd1daf431bb25ab7fddfb9304d08a5a9d5936de2f9fc76b270e16637c389df->enter($__internal_32cd1daf431bb25ab7fddfb9304d08a5a9d5936de2f9fc76b270e16637c389df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_32cd1daf431bb25ab7fddfb9304d08a5a9d5936de2f9fc76b270e16637c389df->leave($__internal_32cd1daf431bb25ab7fddfb9304d08a5a9d5936de2f9fc76b270e16637c389df_prof);

        
        $__internal_94be81efa9c5ee5145b60a4b875644c8a5dcda510df7e8544e17e2a1b814fef9->leave($__internal_94be81efa9c5ee5145b60a4b875644c8a5dcda510df7e8544e17e2a1b814fef9_prof);

    }

    // line 169
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_63af3281f64bc0bc3be4780bbd054610159bfb58dd6763fb40d5c6472fdb2d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63af3281f64bc0bc3be4780bbd054610159bfb58dd6763fb40d5c6472fdb2d91->enter($__internal_63af3281f64bc0bc3be4780bbd054610159bfb58dd6763fb40d5c6472fdb2d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_c58e0f22eb8c98e1ec666ba88cd0552f96cca6d5bd0c96e1d5796c22790c6871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58e0f22eb8c98e1ec666ba88cd0552f96cca6d5bd0c96e1d5796c22790c6871->enter($__internal_c58e0f22eb8c98e1ec666ba88cd0552f96cca6d5bd0c96e1d5796c22790c6871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_c58e0f22eb8c98e1ec666ba88cd0552f96cca6d5bd0c96e1d5796c22790c6871->leave($__internal_c58e0f22eb8c98e1ec666ba88cd0552f96cca6d5bd0c96e1d5796c22790c6871_prof);

        
        $__internal_63af3281f64bc0bc3be4780bbd054610159bfb58dd6763fb40d5c6472fdb2d91->leave($__internal_63af3281f64bc0bc3be4780bbd054610159bfb58dd6763fb40d5c6472fdb2d91_prof);

    }

    // line 170
    public function block_classement($context, array $blocks = array())
    {
        $__internal_bf68d5ffc8c4f600c39af51bd9609e96f1416004efadd6fcaae989a49e16ca13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf68d5ffc8c4f600c39af51bd9609e96f1416004efadd6fcaae989a49e16ca13->enter($__internal_bf68d5ffc8c4f600c39af51bd9609e96f1416004efadd6fcaae989a49e16ca13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_16f1547de090c7b1946fdee07989ae96c811d66f4f7bddaa6e1e421850aa215a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f1547de090c7b1946fdee07989ae96c811d66f4f7bddaa6e1e421850aa215a->enter($__internal_16f1547de090c7b1946fdee07989ae96c811d66f4f7bddaa6e1e421850aa215a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_16f1547de090c7b1946fdee07989ae96c811d66f4f7bddaa6e1e421850aa215a->leave($__internal_16f1547de090c7b1946fdee07989ae96c811d66f4f7bddaa6e1e421850aa215a_prof);

        
        $__internal_bf68d5ffc8c4f600c39af51bd9609e96f1416004efadd6fcaae989a49e16ca13->leave($__internal_bf68d5ffc8c4f600c39af51bd9609e96f1416004efadd6fcaae989a49e16ca13_prof);

    }

    // line 172
    public function block_contact($context, array $blocks = array())
    {
        $__internal_dd57328832ba7ba7a7298bdf30191060524bf46544d3fdcd2824501b7cc29ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd57328832ba7ba7a7298bdf30191060524bf46544d3fdcd2824501b7cc29ec6->enter($__internal_dd57328832ba7ba7a7298bdf30191060524bf46544d3fdcd2824501b7cc29ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_a1ea6afb802d674016c661eb8c72bd3831cea90a81625a33e853b57958d913c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ea6afb802d674016c661eb8c72bd3831cea90a81625a33e853b57958d913c5->enter($__internal_a1ea6afb802d674016c661eb8c72bd3831cea90a81625a33e853b57958d913c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_a1ea6afb802d674016c661eb8c72bd3831cea90a81625a33e853b57958d913c5->leave($__internal_a1ea6afb802d674016c661eb8c72bd3831cea90a81625a33e853b57958d913c5_prof);

        
        $__internal_dd57328832ba7ba7a7298bdf30191060524bf46544d3fdcd2824501b7cc29ec6->leave($__internal_dd57328832ba7ba7a7298bdf30191060524bf46544d3fdcd2824501b7cc29ec6_prof);

    }

    // line 261
    public function block_footer($context, array $blocks = array())
    {
        $__internal_eaaadb0e990388c815036c4f854016bc844a621dd771071ed5e46a07b19bdd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaaadb0e990388c815036c4f854016bc844a621dd771071ed5e46a07b19bdd0c->enter($__internal_eaaadb0e990388c815036c4f854016bc844a621dd771071ed5e46a07b19bdd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_3968c6bd78f5d263e78d26b839932d619f7430cd42ce0184f2fe476369e539cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3968c6bd78f5d263e78d26b839932d619f7430cd42ce0184f2fe476369e539cf->enter($__internal_3968c6bd78f5d263e78d26b839932d619f7430cd42ce0184f2fe476369e539cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 262
        echo "            <!-- Footer Section -->
            <footer id=\"footer-section\">
                <p class=\"copyright\">
                    &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
                </p>
            </footer>
            <!-- Footer Section End -->
        ";
        
        $__internal_3968c6bd78f5d263e78d26b839932d619f7430cd42ce0184f2fe476369e539cf->leave($__internal_3968c6bd78f5d263e78d26b839932d619f7430cd42ce0184f2fe476369e539cf_prof);

        
        $__internal_eaaadb0e990388c815036c4f854016bc844a621dd771071ed5e46a07b19bdd0c->leave($__internal_eaaadb0e990388c815036c4f854016bc844a621dd771071ed5e46a07b19bdd0c_prof);

    }

    // line 271
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_c93ec77b07028b7fa1a5ff8fbcd68fd373333609c22b20cb4d360cea8ca32118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93ec77b07028b7fa1a5ff8fbcd68fd373333609c22b20cb4d360cea8ca32118->enter($__internal_c93ec77b07028b7fa1a5ff8fbcd68fd373333609c22b20cb4d360cea8ca32118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_ee072dc25840d3c21209f329613cf075c8bbfdbbabbedcd4de7bead6d663a746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee072dc25840d3c21209f329613cf075c8bbfdbbabbedcd4de7bead6d663a746->enter($__internal_ee072dc25840d3c21209f329613cf075c8bbfdbbabbedcd4de7bead6d663a746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

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
        
        $__internal_ee072dc25840d3c21209f329613cf075c8bbfdbbabbedcd4de7bead6d663a746->leave($__internal_ee072dc25840d3c21209f329613cf075c8bbfdbbabbedcd4de7bead6d663a746_prof);

        
        $__internal_c93ec77b07028b7fa1a5ff8fbcd68fd373333609c22b20cb4d360cea8ca32118->leave($__internal_c93ec77b07028b7fa1a5ff8fbcd68fd373333609c22b20cb4d360cea8ca32118_prof);

    }

    // line 295
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_d936f4d15bf364246099f439295808643f5ad2427e6c4107c7a9108d5ee4f059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d936f4d15bf364246099f439295808643f5ad2427e6c4107c7a9108d5ee4f059->enter($__internal_d936f4d15bf364246099f439295808643f5ad2427e6c4107c7a9108d5ee4f059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_0f13bfc29d5f59e25a0b273fcf8360dc0d674cc01c62c5ba97d5f64e9c75f936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f13bfc29d5f59e25a0b273fcf8360dc0d674cc01c62c5ba97d5f64e9c75f936->enter($__internal_0f13bfc29d5f59e25a0b273fcf8360dc0d674cc01c62c5ba97d5f64e9c75f936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "   ";
        
        $__internal_0f13bfc29d5f59e25a0b273fcf8360dc0d674cc01c62c5ba97d5f64e9c75f936->leave($__internal_0f13bfc29d5f59e25a0b273fcf8360dc0d674cc01c62c5ba97d5f64e9c75f936_prof);

        
        $__internal_d936f4d15bf364246099f439295808643f5ad2427e6c4107c7a9108d5ee4f059->leave($__internal_d936f4d15bf364246099f439295808643f5ad2427e6c4107c7a9108d5ee4f059_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21bcd53bdef53f457b1b359458ec2f6808908106369fd7b12cd4084afa181683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bcd53bdef53f457b1b359458ec2f6808908106369fd7b12cd4084afa181683->enter($__internal_21bcd53bdef53f457b1b359458ec2f6808908106369fd7b12cd4084afa181683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_230b0b1e6a3e278e93799e22e92f5a566a0c13f758699d41043ae40f9ec80ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230b0b1e6a3e278e93799e22e92f5a566a0c13f758699d41043ae40f9ec80ac8->enter($__internal_230b0b1e6a3e278e93799e22e92f5a566a0c13f758699d41043ae40f9ec80ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_230b0b1e6a3e278e93799e22e92f5a566a0c13f758699d41043ae40f9ec80ac8->leave($__internal_230b0b1e6a3e278e93799e22e92f5a566a0c13f758699d41043ae40f9ec80ac8_prof);

        
        $__internal_21bcd53bdef53f457b1b359458ec2f6808908106369fd7b12cd4084afa181683->leave($__internal_21bcd53bdef53f457b1b359458ec2f6808908106369fd7b12cd4084afa181683_prof);

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
