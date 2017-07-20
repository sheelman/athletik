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
        $__internal_110bce906b6dc9fa84a73211cef758374f463216b861283d48389d947243ecf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110bce906b6dc9fa84a73211cef758374f463216b861283d48389d947243ecf5->enter($__internal_110bce906b6dc9fa84a73211cef758374f463216b861283d48389d947243ecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_af2c16c39a206d561c2bc18fa7adc573e3fab6a56eb5309c1883d7ee59723cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2c16c39a206d561c2bc18fa7adc573e3fab6a56eb5309c1883d7ee59723cb6->enter($__internal_af2c16c39a206d561c2bc18fa7adc573e3fab6a56eb5309c1883d7ee59723cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_110bce906b6dc9fa84a73211cef758374f463216b861283d48389d947243ecf5->leave($__internal_110bce906b6dc9fa84a73211cef758374f463216b861283d48389d947243ecf5_prof);

        
        $__internal_af2c16c39a206d561c2bc18fa7adc573e3fab6a56eb5309c1883d7ee59723cb6->leave($__internal_af2c16c39a206d561c2bc18fa7adc573e3fab6a56eb5309c1883d7ee59723cb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0f73e0d02bd50ecf23ef2ae75c98d1b44019a6d7e705be6e6ce258b5deabd8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f73e0d02bd50ecf23ef2ae75c98d1b44019a6d7e705be6e6ce258b5deabd8f->enter($__internal_a0f73e0d02bd50ecf23ef2ae75c98d1b44019a6d7e705be6e6ce258b5deabd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_71650830f57a38ac14587bbe538f7a2dcc07f694994418d71d5445223af4f74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71650830f57a38ac14587bbe538f7a2dcc07f694994418d71d5445223af4f74d->enter($__internal_71650830f57a38ac14587bbe538f7a2dcc07f694994418d71d5445223af4f74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_71650830f57a38ac14587bbe538f7a2dcc07f694994418d71d5445223af4f74d->leave($__internal_71650830f57a38ac14587bbe538f7a2dcc07f694994418d71d5445223af4f74d_prof);

        
        $__internal_a0f73e0d02bd50ecf23ef2ae75c98d1b44019a6d7e705be6e6ce258b5deabd8f->leave($__internal_a0f73e0d02bd50ecf23ef2ae75c98d1b44019a6d7e705be6e6ce258b5deabd8f_prof);

    }

    // line 37
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_c0b36cf33dcedadaa86b940c5dcadc75f59fe4aec377b239512e657794ba427c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b36cf33dcedadaa86b940c5dcadc75f59fe4aec377b239512e657794ba427c->enter($__internal_c0b36cf33dcedadaa86b940c5dcadc75f59fe4aec377b239512e657794ba427c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_025333e442a21284078f40d30fd5c09753055b3eaa6898364571a70df662f2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025333e442a21284078f40d30fd5c09753055b3eaa6898364571a70df662f2af->enter($__internal_025333e442a21284078f40d30fd5c09753055b3eaa6898364571a70df662f2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_025333e442a21284078f40d30fd5c09753055b3eaa6898364571a70df662f2af->leave($__internal_025333e442a21284078f40d30fd5c09753055b3eaa6898364571a70df662f2af_prof);

        
        $__internal_c0b36cf33dcedadaa86b940c5dcadc75f59fe4aec377b239512e657794ba427c->leave($__internal_c0b36cf33dcedadaa86b940c5dcadc75f59fe4aec377b239512e657794ba427c_prof);

    }

    // line 55
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e525db7e4fca4a5befae9c04e5352e2978cc8bffda1b707a6633ae02ec192cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e525db7e4fca4a5befae9c04e5352e2978cc8bffda1b707a6633ae02ec192cc3->enter($__internal_e525db7e4fca4a5befae9c04e5352e2978cc8bffda1b707a6633ae02ec192cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9034c4e37c9bf0dc20af5109dbf247cc28b52037a63a2d0916d9753a85c6afcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9034c4e37c9bf0dc20af5109dbf247cc28b52037a63a2d0916d9753a85c6afcc->enter($__internal_9034c4e37c9bf0dc20af5109dbf247cc28b52037a63a2d0916d9753a85c6afcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9034c4e37c9bf0dc20af5109dbf247cc28b52037a63a2d0916d9753a85c6afcc->leave($__internal_9034c4e37c9bf0dc20af5109dbf247cc28b52037a63a2d0916d9753a85c6afcc_prof);

        
        $__internal_e525db7e4fca4a5befae9c04e5352e2978cc8bffda1b707a6633ae02ec192cc3->leave($__internal_e525db7e4fca4a5befae9c04e5352e2978cc8bffda1b707a6633ae02ec192cc3_prof);

    }

    // line 83
    public function block_timer($context, array $blocks = array())
    {
        $__internal_3a7f566f32e14ddb21cc81749ec66d9562efe507db9725b7c2b66f649375428c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7f566f32e14ddb21cc81749ec66d9562efe507db9725b7c2b66f649375428c->enter($__internal_3a7f566f32e14ddb21cc81749ec66d9562efe507db9725b7c2b66f649375428c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_868ec9444446d2307eadd54db294420de98e7deea5449f6c9151fba9b4fb3d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868ec9444446d2307eadd54db294420de98e7deea5449f6c9151fba9b4fb3d3c->enter($__internal_868ec9444446d2307eadd54db294420de98e7deea5449f6c9151fba9b4fb3d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_868ec9444446d2307eadd54db294420de98e7deea5449f6c9151fba9b4fb3d3c->leave($__internal_868ec9444446d2307eadd54db294420de98e7deea5449f6c9151fba9b4fb3d3c_prof);

        
        $__internal_3a7f566f32e14ddb21cc81749ec66d9562efe507db9725b7c2b66f649375428c->leave($__internal_3a7f566f32e14ddb21cc81749ec66d9562efe507db9725b7c2b66f649375428c_prof);

    }

    // line 167
    public function block_letter($context, array $blocks = array())
    {
        $__internal_8abd7ed81036162f883962ff2fd8e6bf8c4b1341778866f045a545722e211229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abd7ed81036162f883962ff2fd8e6bf8c4b1341778866f045a545722e211229->enter($__internal_8abd7ed81036162f883962ff2fd8e6bf8c4b1341778866f045a545722e211229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_fcb56e4d98e4307ec093b4859563ec24155fa6aa89a088a89cb391c4ead74b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb56e4d98e4307ec093b4859563ec24155fa6aa89a088a89cb391c4ead74b2c->enter($__internal_fcb56e4d98e4307ec093b4859563ec24155fa6aa89a088a89cb391c4ead74b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_fcb56e4d98e4307ec093b4859563ec24155fa6aa89a088a89cb391c4ead74b2c->leave($__internal_fcb56e4d98e4307ec093b4859563ec24155fa6aa89a088a89cb391c4ead74b2c_prof);

        
        $__internal_8abd7ed81036162f883962ff2fd8e6bf8c4b1341778866f045a545722e211229->leave($__internal_8abd7ed81036162f883962ff2fd8e6bf8c4b1341778866f045a545722e211229_prof);

    }

    // line 168
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_3b85e49c2eea386d623efa6d8854d38a2e8cbff95fbc415322c6987521c235e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b85e49c2eea386d623efa6d8854d38a2e8cbff95fbc415322c6987521c235e5->enter($__internal_3b85e49c2eea386d623efa6d8854d38a2e8cbff95fbc415322c6987521c235e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_cd472887846478fcacceba2a6eee09135abd638fb4f59f4fe145b7a567df844b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd472887846478fcacceba2a6eee09135abd638fb4f59f4fe145b7a567df844b->enter($__internal_cd472887846478fcacceba2a6eee09135abd638fb4f59f4fe145b7a567df844b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_cd472887846478fcacceba2a6eee09135abd638fb4f59f4fe145b7a567df844b->leave($__internal_cd472887846478fcacceba2a6eee09135abd638fb4f59f4fe145b7a567df844b_prof);

        
        $__internal_3b85e49c2eea386d623efa6d8854d38a2e8cbff95fbc415322c6987521c235e5->leave($__internal_3b85e49c2eea386d623efa6d8854d38a2e8cbff95fbc415322c6987521c235e5_prof);

    }

    // line 169
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_6c20b64435c3a1fb5f0cc45247824b2a1508705a726d53fba4780430e439e23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c20b64435c3a1fb5f0cc45247824b2a1508705a726d53fba4780430e439e23a->enter($__internal_6c20b64435c3a1fb5f0cc45247824b2a1508705a726d53fba4780430e439e23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_15bfc057cfaff13e86e3e93228e5402c8a5df250044c6f81552b193eac8f5876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bfc057cfaff13e86e3e93228e5402c8a5df250044c6f81552b193eac8f5876->enter($__internal_15bfc057cfaff13e86e3e93228e5402c8a5df250044c6f81552b193eac8f5876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_15bfc057cfaff13e86e3e93228e5402c8a5df250044c6f81552b193eac8f5876->leave($__internal_15bfc057cfaff13e86e3e93228e5402c8a5df250044c6f81552b193eac8f5876_prof);

        
        $__internal_6c20b64435c3a1fb5f0cc45247824b2a1508705a726d53fba4780430e439e23a->leave($__internal_6c20b64435c3a1fb5f0cc45247824b2a1508705a726d53fba4780430e439e23a_prof);

    }

    // line 170
    public function block_classement($context, array $blocks = array())
    {
        $__internal_3ca7b02569e349ba4f0e65002c112c489942d47881e4e1b9065076778ac08c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca7b02569e349ba4f0e65002c112c489942d47881e4e1b9065076778ac08c57->enter($__internal_3ca7b02569e349ba4f0e65002c112c489942d47881e4e1b9065076778ac08c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_ec44be34304c3569435a87540af348e4d7ac3104a24f5672785e9b572906cf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec44be34304c3569435a87540af348e4d7ac3104a24f5672785e9b572906cf69->enter($__internal_ec44be34304c3569435a87540af348e4d7ac3104a24f5672785e9b572906cf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_ec44be34304c3569435a87540af348e4d7ac3104a24f5672785e9b572906cf69->leave($__internal_ec44be34304c3569435a87540af348e4d7ac3104a24f5672785e9b572906cf69_prof);

        
        $__internal_3ca7b02569e349ba4f0e65002c112c489942d47881e4e1b9065076778ac08c57->leave($__internal_3ca7b02569e349ba4f0e65002c112c489942d47881e4e1b9065076778ac08c57_prof);

    }

    // line 172
    public function block_contact($context, array $blocks = array())
    {
        $__internal_d68d7a387713e5070f2534cd4a101b7c65ec46f58279609dabce11c47e0f7782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68d7a387713e5070f2534cd4a101b7c65ec46f58279609dabce11c47e0f7782->enter($__internal_d68d7a387713e5070f2534cd4a101b7c65ec46f58279609dabce11c47e0f7782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_4af4ddcc0065540936ff10f832316981de93754ab44528d1dd7ce8b358fb36f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af4ddcc0065540936ff10f832316981de93754ab44528d1dd7ce8b358fb36f4->enter($__internal_4af4ddcc0065540936ff10f832316981de93754ab44528d1dd7ce8b358fb36f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        echo "       
            <!-- Contact Section -->
            <section id=\"contact\" class=\"section-style\" data-background-image=\"images/background/silhouette-1159234_1920.jpg\">
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
        
        $__internal_4af4ddcc0065540936ff10f832316981de93754ab44528d1dd7ce8b358fb36f4->leave($__internal_4af4ddcc0065540936ff10f832316981de93754ab44528d1dd7ce8b358fb36f4_prof);

        
        $__internal_d68d7a387713e5070f2534cd4a101b7c65ec46f58279609dabce11c47e0f7782->leave($__internal_d68d7a387713e5070f2534cd4a101b7c65ec46f58279609dabce11c47e0f7782_prof);

    }

    // line 261
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dfb925746b592e255eed84997a65114135d929b3d59fa303f866611883451b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb925746b592e255eed84997a65114135d929b3d59fa303f866611883451b48->enter($__internal_dfb925746b592e255eed84997a65114135d929b3d59fa303f866611883451b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f977f019a16729538ccaede0e3eff3c6b73b7e6c511ae207270cb8404d98308b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f977f019a16729538ccaede0e3eff3c6b73b7e6c511ae207270cb8404d98308b->enter($__internal_f977f019a16729538ccaede0e3eff3c6b73b7e6c511ae207270cb8404d98308b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 262
        echo "            <!-- Footer Section -->
            <footer id=\"footer-section\">
                <p class=\"copyright\">
                    &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
                </p>
            </footer>
            <!-- Footer Section End -->
        ";
        
        $__internal_f977f019a16729538ccaede0e3eff3c6b73b7e6c511ae207270cb8404d98308b->leave($__internal_f977f019a16729538ccaede0e3eff3c6b73b7e6c511ae207270cb8404d98308b_prof);

        
        $__internal_dfb925746b592e255eed84997a65114135d929b3d59fa303f866611883451b48->leave($__internal_dfb925746b592e255eed84997a65114135d929b3d59fa303f866611883451b48_prof);

    }

    // line 271
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_6e99204f0d47a19075525de1c985798323f7be98e1050cbc1592e38c45953e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e99204f0d47a19075525de1c985798323f7be98e1050cbc1592e38c45953e23->enter($__internal_6e99204f0d47a19075525de1c985798323f7be98e1050cbc1592e38c45953e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_a0d322ff359dbd2c65172ab98aeec28005d4557be91f441a48853db33d27c7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d322ff359dbd2c65172ab98aeec28005d4557be91f441a48853db33d27c7cf->enter($__internal_a0d322ff359dbd2c65172ab98aeec28005d4557be91f441a48853db33d27c7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

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
        
        $__internal_a0d322ff359dbd2c65172ab98aeec28005d4557be91f441a48853db33d27c7cf->leave($__internal_a0d322ff359dbd2c65172ab98aeec28005d4557be91f441a48853db33d27c7cf_prof);

        
        $__internal_6e99204f0d47a19075525de1c985798323f7be98e1050cbc1592e38c45953e23->leave($__internal_6e99204f0d47a19075525de1c985798323f7be98e1050cbc1592e38c45953e23_prof);

    }

    // line 295
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_1a5537989647060253e7625a5c01081ee4be9cb90834abd40d8d1dbe60b4994c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5537989647060253e7625a5c01081ee4be9cb90834abd40d8d1dbe60b4994c->enter($__internal_1a5537989647060253e7625a5c01081ee4be9cb90834abd40d8d1dbe60b4994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_4bab2cd8a4b322d286d1752b7fdc1a9f3126cdb317f11ef043de9ac13ff855c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bab2cd8a4b322d286d1752b7fdc1a9f3126cdb317f11ef043de9ac13ff855c9->enter($__internal_4bab2cd8a4b322d286d1752b7fdc1a9f3126cdb317f11ef043de9ac13ff855c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "   ";
        
        $__internal_4bab2cd8a4b322d286d1752b7fdc1a9f3126cdb317f11ef043de9ac13ff855c9->leave($__internal_4bab2cd8a4b322d286d1752b7fdc1a9f3126cdb317f11ef043de9ac13ff855c9_prof);

        
        $__internal_1a5537989647060253e7625a5c01081ee4be9cb90834abd40d8d1dbe60b4994c->leave($__internal_1a5537989647060253e7625a5c01081ee4be9cb90834abd40d8d1dbe60b4994c_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e963586cd1721352c2023e55ccb290d1f2c6941d64e8a87cdd655c2f655e8b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e963586cd1721352c2023e55ccb290d1f2c6941d64e8a87cdd655c2f655e8b8c->enter($__internal_e963586cd1721352c2023e55ccb290d1f2c6941d64e8a87cdd655c2f655e8b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_95eb2a5df20db9f4766d3e3e897348102de8d4261a968504bf3dbb7e2bdfc321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95eb2a5df20db9f4766d3e3e897348102de8d4261a968504bf3dbb7e2bdfc321->enter($__internal_95eb2a5df20db9f4766d3e3e897348102de8d4261a968504bf3dbb7e2bdfc321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_95eb2a5df20db9f4766d3e3e897348102de8d4261a968504bf3dbb7e2bdfc321->leave($__internal_95eb2a5df20db9f4766d3e3e897348102de8d4261a968504bf3dbb7e2bdfc321_prof);

        
        $__internal_e963586cd1721352c2023e55ccb290d1f2c6941d64e8a87cdd655c2f655e8b8c->leave($__internal_e963586cd1721352c2023e55ccb290d1f2c6941d64e8a87cdd655c2f655e8b8c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  651 => 309,  646 => 307,  641 => 305,  636 => 303,  631 => 301,  626 => 299,  623 => 298,  614 => 297,  596 => 295,  565 => 272,  556 => 271,  539 => 262,  530 => 261,  425 => 172,  408 => 170,  391 => 169,  374 => 168,  357 => 167,  266 => 85,  263 => 84,  254 => 83,  219 => 56,  210 => 55,  176 => 37,  159 => 27,  152 => 23,  148 => 22,  142 => 19,  136 => 16,  113 => 3,  101 => 311,  99 => 297,  96 => 296,  94 => 295,  91 => 294,  89 => 271,  86 => 270,  84 => 261,  81 => 260,  79 => 172,  76 => 171,  73 => 170,  70 => 169,  67 => 168,  65 => 167,  62 => 166,  60 => 83,  57 => 82,  55 => 55,  51 => 53,  49 => 37,  44 => 34,  42 => 3,  38 => 1,);
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
            <section id=\"contact\" class=\"section-style\" data-background-image=\"images/background/silhouette-1159234_1920.jpg\">
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
