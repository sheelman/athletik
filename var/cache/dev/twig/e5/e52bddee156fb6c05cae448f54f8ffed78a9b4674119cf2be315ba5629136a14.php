<?php

/* ::base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'layout' => array($this, 'block_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caa1a8d2ec589c8111a6641e5b2db909ec9f62126acd24f02a1bdc56ef9fd894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa1a8d2ec589c8111a6641e5b2db909ec9f62126acd24f02a1bdc56ef9fd894->enter($__internal_caa1a8d2ec589c8111a6641e5b2db909ec9f62126acd24f02a1bdc56ef9fd894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6ecf1bae1d735bc87d505f8c0984bd0ba92b8497585071f41e4ea6a076572ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecf1bae1d735bc87d505f8c0984bd0ba92b8497585071f41e4ea6a076572ab2->enter($__internal_6ecf1bae1d735bc87d505f8c0984bd0ba92b8497585071f41e4ea6a076572ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
 ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "    
    <body>
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


        <!-- Page Top Section -->
        <section id=\"page-top\" class=\"section-style\" data-background-image=\"images/background/runners-751853_1920.jpg\">
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
        // line 164
        $this->displayBlock('body', $context, $blocks);
        // line 165
        echo "        
        <!-- Contact Section -->
\t<section id=\"contact\" class=\"section-style\" data-background-image=\"images/background/silhouette-1159234_1920.jpg\">
\t\t<div class=\"pattern height-resize\">
\t\t\t<div class=\"container\">
\t\t\t\t<h3 class=\"section-name\">
\t\t\t\t\t<span>
\t\t\t\t\t\tContact
\t\t\t\t\t</span>
\t\t\t\t</h3><!-- /.section-name -->
\t\t\t\t<h2 class=\"section-title\">
\t\t\t\t\tEntrer en contact 
\t\t\t\t</h2><!-- /.Section-title  -->
\t\t\t\t<p class=\"section-description\">
\t\t\t\t\t«Si vous courez, vous êtes un coureur. Peu importe à quelle vitesse ou quelle distance. Ce n'est pas grave si aujourd'hui est votre premier jour ou si vous courez depuis vingt ans. Il n'existe aucun test à passer, aucun permis à gagner, pas de carte de membre à obtenir. Vous n’avez qu’à courir. »
                                        - John Bingham
\t\t\t\t</p><!-- /.section-description -->

\t\t\t\t<form id=\"contact-form\" action=\"#\" method=\"post\" class=\"clearfix\">
\t\t\t\t\t<div class=\"contact-box-hide\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" id=\"first_name\" name=\"first_name\" required placeholder=\"Prénom\">
\t\t\t\t\t\t\t<span class=\"first-name-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" id=\"last_name\" name=\"last_name\" required placeholder=\"Nom\">
\t\t\t\t\t\t\t<span class=\"last-name-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\"  id=\"contact_email\" name=\"contact_email\" required placeholder=\"Email\">
\t\t\t\t\t\t\t<span class=\"contact-email-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" id=\"subject\" name=\"contact_subject\" required placeholder=\"Subjet\">
\t\t\t\t\t\t\t<span class=\"contact-subject-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"message\" name=\"message\" required placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t<span class=\"contact-message-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t<button id=\"contact-submit\" class=\"btn custom-btn col-xs-12\" type=\"submit\" name=\"submit\"><i class=\"fa fa-thumbs-o-up \"></i></button>
\t\t\t\t\t\t\t<span id=\"contact-loading\" class=\"btn custom-btn col-xs-12\"> <i class=\"fa fa-refresh fa-spin\"></i> </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /.contact-box-hide -->
\t\t\t\t\t<div class=\"contact-message\"></div>

\t\t\t\t</form><!-- /#contact-form -->
                                
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

\t\t\t\t

\t\t\t\t<div class=\"next-section\">
\t\t\t\t\t<a class=\"go-to-page-top\"><span></span></a>
\t\t\t\t</div><!-- /.next-section -->

\t\t\t</div><!-- /.container -->
\t\t</div><!-- /.pattern -->

\t</section><!-- /#contact -->
\t<!-- Contact Section End -->



\t<!-- Footer Section -->
\t<footer id=\"footer-section\">
\t\t<p class=\"copyright\">
\t\t\t&copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
\t\t</p>
\t</footer>
\t<!-- Footer Section End -->


\t<!-- Color Variation Switcher  -->
\t<div id=\"color-style-switcher\">
\t  <div>
\t\t
\t\t<h3>Color palette</h3>
\t\t<ul class=\"colors\">
\t\t\t<li><a class=\"color1 active\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color2\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color3\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color4\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color5\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color6\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color7\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color8\" href=\"#\"></a></li>
\t\t</ul>
\t  </div>\t  
\t  <div class=\"bottom\">
\t\t<a href=\"#\" class=\"settings\"><i class=\"fa fa-cogs icon-2x\"></i></a>
\t  </div>
\t</div>
\t<!-- Color Variation Switcher End -->
        
        <!-- Color Variation Switcher  -->
        <section id=\"conexion\">
            <div>

                <h3>Conexion</h3>
                ";
        // line 291
        $this->displayBlock('layout', $context, $blocks);
        // line 292
        echo "            </div>\t  
            <div class=\"bottom\">
                <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
            </div>
        </section>
        <!-- Color Variation Switcher End -->

        ";
        // line 299
        $this->displayBlock('javascripts', $context, $blocks);
        // line 313
        echo "    </body>
</html>
";
        
        $__internal_caa1a8d2ec589c8111a6641e5b2db909ec9f62126acd24f02a1bdc56ef9fd894->leave($__internal_caa1a8d2ec589c8111a6641e5b2db909ec9f62126acd24f02a1bdc56ef9fd894_prof);

        
        $__internal_6ecf1bae1d735bc87d505f8c0984bd0ba92b8497585071f41e4ea6a076572ab2->leave($__internal_6ecf1bae1d735bc87d505f8c0984bd0ba92b8497585071f41e4ea6a076572ab2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6b1712adcb397b6576c724c9122edb6f10008877c787ea7100dcd9c5a45cc00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b1712adcb397b6576c724c9122edb6f10008877c787ea7100dcd9c5a45cc00->enter($__internal_f6b1712adcb397b6576c724c9122edb6f10008877c787ea7100dcd9c5a45cc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_743b5a48d3360ce2e490c6aa9229373f71a696e61a7b41d22cb5702d862791e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743b5a48d3360ce2e490c6aa9229373f71a696e61a7b41d22cb5702d862791e4->enter($__internal_743b5a48d3360ce2e490c6aa9229373f71a696e61a7b41d22cb5702d862791e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "   
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('meta', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "        
    </head>
";
        
        $__internal_743b5a48d3360ce2e490c6aa9229373f71a696e61a7b41d22cb5702d862791e4->leave($__internal_743b5a48d3360ce2e490c6aa9229373f71a696e61a7b41d22cb5702d862791e4_prof);

        
        $__internal_f6b1712adcb397b6576c724c9122edb6f10008877c787ea7100dcd9c5a45cc00->leave($__internal_f6b1712adcb397b6576c724c9122edb6f10008877c787ea7100dcd9c5a45cc00_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9235592ec2abb62f636f6fce7f6455a4dcaa6d4c6681371c0eefab33838c7b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9235592ec2abb62f636f6fce7f6455a4dcaa6d4c6681371c0eefab33838c7b37->enter($__internal_9235592ec2abb62f636f6fce7f6455a4dcaa6d4c6681371c0eefab33838c7b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98b40173165b58cd6005a3d28234b707b14adfab23346a2046d8bfec23f983a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b40173165b58cd6005a3d28234b707b14adfab23346a2046d8bfec23f983a6->enter($__internal_98b40173165b58cd6005a3d28234b707b14adfab23346a2046d8bfec23f983a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Athletik Les 1000 pas";
        
        $__internal_98b40173165b58cd6005a3d28234b707b14adfab23346a2046d8bfec23f983a6->leave($__internal_98b40173165b58cd6005a3d28234b707b14adfab23346a2046d8bfec23f983a6_prof);

        
        $__internal_9235592ec2abb62f636f6fce7f6455a4dcaa6d4c6681371c0eefab33838c7b37->leave($__internal_9235592ec2abb62f636f6fce7f6455a4dcaa6d4c6681371c0eefab33838c7b37_prof);

    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        $__internal_cc6fc1a4b68c4b94e115fb7469c712e8c8c38678033ed8a34462ba9d6ce8a427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6fc1a4b68c4b94e115fb7469c712e8c8c38678033ed8a34462ba9d6ce8a427->enter($__internal_cc6fc1a4b68c4b94e115fb7469c712e8c8c38678033ed8a34462ba9d6ce8a427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_a295dbf53d49789a486259f07e58f42e156bbc3112392796c2e88d90e9979832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a295dbf53d49789a486259f07e58f42e156bbc3112392796c2e88d90e9979832->enter($__internal_a295dbf53d49789a486259f07e58f42e156bbc3112392796c2e88d90e9979832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 8
        echo "        <meta name=\"description\" content=\"Transformation Kite\" >
\t<meta name=\"author\" content=\"sheelman\">

\t<!-- Mobile Specific Meta -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        ";
        
        $__internal_a295dbf53d49789a486259f07e58f42e156bbc3112392796c2e88d90e9979832->leave($__internal_a295dbf53d49789a486259f07e58f42e156bbc3112392796c2e88d90e9979832_prof);

        
        $__internal_cc6fc1a4b68c4b94e115fb7469c712e8c8c38678033ed8a34462ba9d6ce8a427->leave($__internal_cc6fc1a4b68c4b94e115fb7469c712e8c8c38678033ed8a34462ba9d6ce8a427_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c07f2fa1b4073b08f801210c1280c403a59bfa2f14ad70b45a318b18cff4148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c07f2fa1b4073b08f801210c1280c403a59bfa2f14ad70b45a318b18cff4148->enter($__internal_1c07f2fa1b4073b08f801210c1280c403a59bfa2f14ad70b45a318b18cff4148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea1bee385335af80256ed94ca509fcc60f16805326da2941370d4e27009160ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1bee385335af80256ed94ca509fcc60f16805326da2941370d4e27009160ae->enter($__internal_ea1bee385335af80256ed94ca509fcc60f16805326da2941370d4e27009160ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "\t<!-- Bootstrap  -->
\t<link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">

\t<!-- icon fonts font Awesome -->
\t<link href=\"assets/css/font-awesome.min.css\" rel=\"stylesheet\">

\t<!-- Custom Styles -->
        <link href=\"assets/css/4-col-portfolio.css\" rel=\"stylesheet\">
\t<link href=\"assets/css/style.css\" rel=\"stylesheet\">


\t<!--Color Style -->
\t<link rel=\"stylesheet\" type=\"text/css\" id=\"color\" href=\"assets/css/colors/default.css\"/>

\t<!--[if lt IE 9]>
\t<script src=\"assets/js/html5shiv.js\"></script>
\t<![endif]-->
        ";
        
        $__internal_ea1bee385335af80256ed94ca509fcc60f16805326da2941370d4e27009160ae->leave($__internal_ea1bee385335af80256ed94ca509fcc60f16805326da2941370d4e27009160ae_prof);

        
        $__internal_1c07f2fa1b4073b08f801210c1280c403a59bfa2f14ad70b45a318b18cff4148->leave($__internal_1c07f2fa1b4073b08f801210c1280c403a59bfa2f14ad70b45a318b18cff4148_prof);

    }

    // line 164
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d29766263584814277ca2e10c9de7185c376c2cf61b490e4aa9c95a48e0b466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d29766263584814277ca2e10c9de7185c376c2cf61b490e4aa9c95a48e0b466->enter($__internal_6d29766263584814277ca2e10c9de7185c376c2cf61b490e4aa9c95a48e0b466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11071fa106e7d4cd32b0e068d5bfee1b1d7092ecdc14f2dcd516dcd7df6b8d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11071fa106e7d4cd32b0e068d5bfee1b1d7092ecdc14f2dcd516dcd7df6b8d74->enter($__internal_11071fa106e7d4cd32b0e068d5bfee1b1d7092ecdc14f2dcd516dcd7df6b8d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_11071fa106e7d4cd32b0e068d5bfee1b1d7092ecdc14f2dcd516dcd7df6b8d74->leave($__internal_11071fa106e7d4cd32b0e068d5bfee1b1d7092ecdc14f2dcd516dcd7df6b8d74_prof);

        
        $__internal_6d29766263584814277ca2e10c9de7185c376c2cf61b490e4aa9c95a48e0b466->leave($__internal_6d29766263584814277ca2e10c9de7185c376c2cf61b490e4aa9c95a48e0b466_prof);

    }

    // line 291
    public function block_layout($context, array $blocks = array())
    {
        $__internal_f80277d0c47b823a47466d0f44f6b60cbb6a2bebfad9899ab62b3ff0996514a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80277d0c47b823a47466d0f44f6b60cbb6a2bebfad9899ab62b3ff0996514a3->enter($__internal_f80277d0c47b823a47466d0f44f6b60cbb6a2bebfad9899ab62b3ff0996514a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_5fc3c10d7c779a5c4e2ea70168ae00bd3f31c8556958a34af79a0aabe165fc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc3c10d7c779a5c4e2ea70168ae00bd3f31c8556958a34af79a0aabe165fc65->enter($__internal_5fc3c10d7c779a5c4e2ea70168ae00bd3f31c8556958a34af79a0aabe165fc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_5fc3c10d7c779a5c4e2ea70168ae00bd3f31c8556958a34af79a0aabe165fc65->leave($__internal_5fc3c10d7c779a5c4e2ea70168ae00bd3f31c8556958a34af79a0aabe165fc65_prof);

        
        $__internal_f80277d0c47b823a47466d0f44f6b60cbb6a2bebfad9899ab62b3ff0996514a3->leave($__internal_f80277d0c47b823a47466d0f44f6b60cbb6a2bebfad9899ab62b3ff0996514a3_prof);

    }

    // line 299
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dce69f71d9f316a8ad40d1fd880e8b18fbb62ac6974857862ef20bff73bc5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dce69f71d9f316a8ad40d1fd880e8b18fbb62ac6974857862ef20bff73bc5de->enter($__internal_4dce69f71d9f316a8ad40d1fd880e8b18fbb62ac6974857862ef20bff73bc5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7a16c1817f06f21deefde82a3f407bcf3f3bf830f83e9a91c7770567c870a300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a16c1817f06f21deefde82a3f407bcf3f3bf830f83e9a91c7770567c870a300->enter($__internal_7a16c1817f06f21deefde82a3f407bcf3f3bf830f83e9a91c7770567c870a300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 300
        echo "\t<!-- jQuery Library -->      
\t<script type=\"text/javascript\" src=\"assets/js/jquery-2.1.0.min.js\"></script>
\t<!-- Modernizr js -->
\t<script type=\"text/javascript\" src=\"assets/js/modernizr-2.8.0.min.js\"></script>
\t<!-- Plugins -->
\t<script type=\"text/javascript\" src=\"assets/js/plugins.js\"></script>
\t<!-- Custom JavaScript Functions -->
\t<script type=\"text/javascript\" src=\"assets/js/functions.js\"></script>
\t<!-- Color Style Switcher -->
\t<script type=\"text/javascript\" src=\"assets/js/switcher.js\"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src=\"assets/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_7a16c1817f06f21deefde82a3f407bcf3f3bf830f83e9a91c7770567c870a300->leave($__internal_7a16c1817f06f21deefde82a3f407bcf3f3bf830f83e9a91c7770567c870a300_prof);

        
        $__internal_4dce69f71d9f316a8ad40d1fd880e8b18fbb62ac6974857862ef20bff73bc5de->leave($__internal_4dce69f71d9f316a8ad40d1fd880e8b18fbb62ac6974857862ef20bff73bc5de_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  479 => 300,  470 => 299,  453 => 291,  436 => 164,  409 => 16,  400 => 15,  384 => 8,  375 => 7,  357 => 6,  345 => 34,  342 => 15,  340 => 7,  336 => 6,  323 => 3,  311 => 313,  309 => 299,  300 => 292,  298 => 291,  170 => 165,  168 => 164,  38 => 36,  36 => 3,  32 => 1,);
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
        <title>{% block title %}Athletik Les 1000 pas{% endblock %}</title>
        {% block meta %}
        <meta name=\"description\" content=\"Transformation Kite\" >
\t<meta name=\"author\" content=\"sheelman\">

\t<!-- Mobile Specific Meta -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        {% endblock %}
        {% block stylesheets %}
\t<!-- Bootstrap  -->
\t<link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">

\t<!-- icon fonts font Awesome -->
\t<link href=\"assets/css/font-awesome.min.css\" rel=\"stylesheet\">

\t<!-- Custom Styles -->
        <link href=\"assets/css/4-col-portfolio.css\" rel=\"stylesheet\">
\t<link href=\"assets/css/style.css\" rel=\"stylesheet\">


\t<!--Color Style -->
\t<link rel=\"stylesheet\" type=\"text/css\" id=\"color\" href=\"assets/css/colors/default.css\"/>

\t<!--[if lt IE 9]>
\t<script src=\"assets/js/html5shiv.js\"></script>
\t<![endif]-->
        {% endblock %}
        
    </head>
{% endblock %}    
    <body>
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


        <!-- Page Top Section -->
        <section id=\"page-top\" class=\"section-style\" data-background-image=\"images/background/runners-751853_1920.jpg\">
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
        
        {% block body %}{% endblock %}
        
        <!-- Contact Section -->
\t<section id=\"contact\" class=\"section-style\" data-background-image=\"images/background/silhouette-1159234_1920.jpg\">
\t\t<div class=\"pattern height-resize\">
\t\t\t<div class=\"container\">
\t\t\t\t<h3 class=\"section-name\">
\t\t\t\t\t<span>
\t\t\t\t\t\tContact
\t\t\t\t\t</span>
\t\t\t\t</h3><!-- /.section-name -->
\t\t\t\t<h2 class=\"section-title\">
\t\t\t\t\tEntrer en contact 
\t\t\t\t</h2><!-- /.Section-title  -->
\t\t\t\t<p class=\"section-description\">
\t\t\t\t\t«Si vous courez, vous êtes un coureur. Peu importe à quelle vitesse ou quelle distance. Ce n'est pas grave si aujourd'hui est votre premier jour ou si vous courez depuis vingt ans. Il n'existe aucun test à passer, aucun permis à gagner, pas de carte de membre à obtenir. Vous n’avez qu’à courir. »
                                        - John Bingham
\t\t\t\t</p><!-- /.section-description -->

\t\t\t\t<form id=\"contact-form\" action=\"#\" method=\"post\" class=\"clearfix\">
\t\t\t\t\t<div class=\"contact-box-hide\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" id=\"first_name\" name=\"first_name\" required placeholder=\"Prénom\">
\t\t\t\t\t\t\t<span class=\"first-name-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" id=\"last_name\" name=\"last_name\" required placeholder=\"Nom\">
\t\t\t\t\t\t\t<span class=\"last-name-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\"  id=\"contact_email\" name=\"contact_email\" required placeholder=\"Email\">
\t\t\t\t\t\t\t<span class=\"contact-email-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" id=\"subject\" name=\"contact_subject\" required placeholder=\"Subjet\">
\t\t\t\t\t\t\t<span class=\"contact-subject-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"message\" name=\"message\" required placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t<span class=\"contact-message-error\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t<button id=\"contact-submit\" class=\"btn custom-btn col-xs-12\" type=\"submit\" name=\"submit\"><i class=\"fa fa-thumbs-o-up \"></i></button>
\t\t\t\t\t\t\t<span id=\"contact-loading\" class=\"btn custom-btn col-xs-12\"> <i class=\"fa fa-refresh fa-spin\"></i> </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /.contact-box-hide -->
\t\t\t\t\t<div class=\"contact-message\"></div>

\t\t\t\t</form><!-- /#contact-form -->
                                
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

\t\t\t\t

\t\t\t\t<div class=\"next-section\">
\t\t\t\t\t<a class=\"go-to-page-top\"><span></span></a>
\t\t\t\t</div><!-- /.next-section -->

\t\t\t</div><!-- /.container -->
\t\t</div><!-- /.pattern -->

\t</section><!-- /#contact -->
\t<!-- Contact Section End -->



\t<!-- Footer Section -->
\t<footer id=\"footer-section\">
\t\t<p class=\"copyright\">
\t\t\t&copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
\t\t</p>
\t</footer>
\t<!-- Footer Section End -->


\t<!-- Color Variation Switcher  -->
\t<div id=\"color-style-switcher\">
\t  <div>
\t\t
\t\t<h3>Color palette</h3>
\t\t<ul class=\"colors\">
\t\t\t<li><a class=\"color1 active\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color2\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color3\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color4\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color5\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color6\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color7\" href=\"#\"></a></li>
\t\t\t<li><a class=\"color8\" href=\"#\"></a></li>
\t\t</ul>
\t  </div>\t  
\t  <div class=\"bottom\">
\t\t<a href=\"#\" class=\"settings\"><i class=\"fa fa-cogs icon-2x\"></i></a>
\t  </div>
\t</div>
\t<!-- Color Variation Switcher End -->
        
        <!-- Color Variation Switcher  -->
        <section id=\"conexion\">
            <div>

                <h3>Conexion</h3>
                {% block layout %}{% endblock %}
            </div>\t  
            <div class=\"bottom\">
                <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
            </div>
        </section>
        <!-- Color Variation Switcher End -->

        {% block javascripts %}
\t<!-- jQuery Library -->      
\t<script type=\"text/javascript\" src=\"assets/js/jquery-2.1.0.min.js\"></script>
\t<!-- Modernizr js -->
\t<script type=\"text/javascript\" src=\"assets/js/modernizr-2.8.0.min.js\"></script>
\t<!-- Plugins -->
\t<script type=\"text/javascript\" src=\"assets/js/plugins.js\"></script>
\t<!-- Custom JavaScript Functions -->
\t<script type=\"text/javascript\" src=\"assets/js/functions.js\"></script>
\t<!-- Color Style Switcher -->
\t<script type=\"text/javascript\" src=\"assets/js/switcher.js\"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src=\"assets/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/base.html.twig");
    }
}
