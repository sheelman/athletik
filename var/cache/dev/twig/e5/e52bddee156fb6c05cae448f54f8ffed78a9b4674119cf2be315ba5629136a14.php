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
        $__internal_a271e9e2cc5b2d2142ed5732ec56713bce747a0927ed94989c5d26067563e0b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a271e9e2cc5b2d2142ed5732ec56713bce747a0927ed94989c5d26067563e0b9->enter($__internal_a271e9e2cc5b2d2142ed5732ec56713bce747a0927ed94989c5d26067563e0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_76b4696906cea6b34463aa9b7160ba26dc617ddfefacee3ae334fc43732a2143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b4696906cea6b34463aa9b7160ba26dc617ddfefacee3ae334fc43732a2143->enter($__internal_76b4696906cea6b34463aa9b7160ba26dc617ddfefacee3ae334fc43732a2143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 344
        echo "
";
        // line 345
        $this->displayBlock('javascripts', $context, $blocks);
        // line 359
        echo "</body>
</html>
";
        
        $__internal_a271e9e2cc5b2d2142ed5732ec56713bce747a0927ed94989c5d26067563e0b9->leave($__internal_a271e9e2cc5b2d2142ed5732ec56713bce747a0927ed94989c5d26067563e0b9_prof);

        
        $__internal_76b4696906cea6b34463aa9b7160ba26dc617ddfefacee3ae334fc43732a2143->leave($__internal_76b4696906cea6b34463aa9b7160ba26dc617ddfefacee3ae334fc43732a2143_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0eafd5ed0415330d375d2199ccbfb994a6d82eab19918263dce3922e51ce1902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eafd5ed0415330d375d2199ccbfb994a6d82eab19918263dce3922e51ce1902->enter($__internal_0eafd5ed0415330d375d2199ccbfb994a6d82eab19918263dce3922e51ce1902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2bed9cc7bb37f56128ca8e26b02e5d49f06865c89f06de333261b3974243787f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bed9cc7bb37f56128ca8e26b02e5d49f06865c89f06de333261b3974243787f->enter($__internal_2bed9cc7bb37f56128ca8e26b02e5d49f06865c89f06de333261b3974243787f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2bed9cc7bb37f56128ca8e26b02e5d49f06865c89f06de333261b3974243787f->leave($__internal_2bed9cc7bb37f56128ca8e26b02e5d49f06865c89f06de333261b3974243787f_prof);

        
        $__internal_0eafd5ed0415330d375d2199ccbfb994a6d82eab19918263dce3922e51ce1902->leave($__internal_0eafd5ed0415330d375d2199ccbfb994a6d82eab19918263dce3922e51ce1902_prof);

    }

    // line 38
    public function block_preloder($context, array $blocks = array())
    {
        $__internal_5eac5a6718b65fe849b46a9ad2123d1d08a74b57681a9b9dda0af86d00008b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eac5a6718b65fe849b46a9ad2123d1d08a74b57681a9b9dda0af86d00008b3f->enter($__internal_5eac5a6718b65fe849b46a9ad2123d1d08a74b57681a9b9dda0af86d00008b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

        $__internal_09b21a31446af7d3fb02afc4eca9f4a5a4119dab1268287fd21dcaa22bba13a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b21a31446af7d3fb02afc4eca9f4a5a4119dab1268287fd21dcaa22bba13a1->enter($__internal_09b21a31446af7d3fb02afc4eca9f4a5a4119dab1268287fd21dcaa22bba13a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preloder"));

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
        
        $__internal_09b21a31446af7d3fb02afc4eca9f4a5a4119dab1268287fd21dcaa22bba13a1->leave($__internal_09b21a31446af7d3fb02afc4eca9f4a5a4119dab1268287fd21dcaa22bba13a1_prof);

        
        $__internal_5eac5a6718b65fe849b46a9ad2123d1d08a74b57681a9b9dda0af86d00008b3f->leave($__internal_5eac5a6718b65fe849b46a9ad2123d1d08a74b57681a9b9dda0af86d00008b3f_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e1f444cfb8b4ef01943b7fa7b3d2322bb2a3ca468c18ce2d1e376017d257154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1f444cfb8b4ef01943b7fa7b3d2322bb2a3ca468c18ce2d1e376017d257154->enter($__internal_3e1f444cfb8b4ef01943b7fa7b3d2322bb2a3ca468c18ce2d1e376017d257154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fd03ff4d6d84da12d32c27b14cecd1c3f340173d8a3e1afa46b9f1f569d15199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd03ff4d6d84da12d32c27b14cecd1c3f340173d8a3e1afa46b9f1f569d15199->enter($__internal_fd03ff4d6d84da12d32c27b14cecd1c3f340173d8a3e1afa46b9f1f569d15199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fd03ff4d6d84da12d32c27b14cecd1c3f340173d8a3e1afa46b9f1f569d15199->leave($__internal_fd03ff4d6d84da12d32c27b14cecd1c3f340173d8a3e1afa46b9f1f569d15199_prof);

        
        $__internal_3e1f444cfb8b4ef01943b7fa7b3d2322bb2a3ca468c18ce2d1e376017d257154->leave($__internal_3e1f444cfb8b4ef01943b7fa7b3d2322bb2a3ca468c18ce2d1e376017d257154_prof);

    }

    // line 87
    public function block_title($context, array $blocks = array())
    {
        $__internal_aec46f32488644fd1b3eaa11ac1014761696e5e695a2469ad6bb65c081778f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec46f32488644fd1b3eaa11ac1014761696e5e695a2469ad6bb65c081778f0f->enter($__internal_aec46f32488644fd1b3eaa11ac1014761696e5e695a2469ad6bb65c081778f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5d086790a5feafe7b38ed94248f69ac2be81a6ded688b1d3c7b3cb1abf8a325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d086790a5feafe7b38ed94248f69ac2be81a6ded688b1d3c7b3cb1abf8a325->enter($__internal_c5d086790a5feafe7b38ed94248f69ac2be81a6ded688b1d3c7b3cb1abf8a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_c5d086790a5feafe7b38ed94248f69ac2be81a6ded688b1d3c7b3cb1abf8a325->leave($__internal_c5d086790a5feafe7b38ed94248f69ac2be81a6ded688b1d3c7b3cb1abf8a325_prof);

        
        $__internal_aec46f32488644fd1b3eaa11ac1014761696e5e695a2469ad6bb65c081778f0f->leave($__internal_aec46f32488644fd1b3eaa11ac1014761696e5e695a2469ad6bb65c081778f0f_prof);

    }

    // line 107
    public function block_timer($context, array $blocks = array())
    {
        $__internal_7ecbaf55f3ab465eb8c9ff07ea37238c50d6bfa488cdbd50cc3896f5f3a11017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ecbaf55f3ab465eb8c9ff07ea37238c50d6bfa488cdbd50cc3896f5f3a11017->enter($__internal_7ecbaf55f3ab465eb8c9ff07ea37238c50d6bfa488cdbd50cc3896f5f3a11017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_96aaa9c81fe9c617512d63d27a0661dc4f723663ce528e31f5923614b693ad41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96aaa9c81fe9c617512d63d27a0661dc4f723663ce528e31f5923614b693ad41->enter($__internal_96aaa9c81fe9c617512d63d27a0661dc4f723663ce528e31f5923614b693ad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

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
        
        $__internal_96aaa9c81fe9c617512d63d27a0661dc4f723663ce528e31f5923614b693ad41->leave($__internal_96aaa9c81fe9c617512d63d27a0661dc4f723663ce528e31f5923614b693ad41_prof);

        
        $__internal_7ecbaf55f3ab465eb8c9ff07ea37238c50d6bfa488cdbd50cc3896f5f3a11017->leave($__internal_7ecbaf55f3ab465eb8c9ff07ea37238c50d6bfa488cdbd50cc3896f5f3a11017_prof);

    }

    // line 165
    public function block_fin($context, array $blocks = array())
    {
        $__internal_a821801f1bfe9a7ef2be83e8bf66e9c445c412326fa9a603d59044ffb971a66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a821801f1bfe9a7ef2be83e8bf66e9c445c412326fa9a603d59044ffb971a66c->enter($__internal_a821801f1bfe9a7ef2be83e8bf66e9c445c412326fa9a603d59044ffb971a66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_9ef11d99c073513da892992b1ef8dabe5bc9f125b3874f37657fb90185e594bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef11d99c073513da892992b1ef8dabe5bc9f125b3874f37657fb90185e594bd->enter($__internal_9ef11d99c073513da892992b1ef8dabe5bc9f125b3874f37657fb90185e594bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 166
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-lettre\"><span></span></a>
                        </div><!-- /.next-section -->
                    ";
        
        $__internal_9ef11d99c073513da892992b1ef8dabe5bc9f125b3874f37657fb90185e594bd->leave($__internal_9ef11d99c073513da892992b1ef8dabe5bc9f125b3874f37657fb90185e594bd_prof);

        
        $__internal_a821801f1bfe9a7ef2be83e8bf66e9c445c412326fa9a603d59044ffb971a66c->leave($__internal_a821801f1bfe9a7ef2be83e8bf66e9c445c412326fa9a603d59044ffb971a66c_prof);

    }

    // line 176
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_f03265445aeeb3f757e1fcebc4299b13cfdaf21fe13412e8cdce80eae1f5412d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03265445aeeb3f757e1fcebc4299b13cfdaf21fe13412e8cdce80eae1f5412d->enter($__internal_f03265445aeeb3f757e1fcebc4299b13cfdaf21fe13412e8cdce80eae1f5412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_a872bd8be5e191953584f1d93a32de06d02b43a372a59a292da6ce7deaccc107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a872bd8be5e191953584f1d93a32de06d02b43a372a59a292da6ce7deaccc107->enter($__internal_a872bd8be5e191953584f1d93a32de06d02b43a372a59a292da6ce7deaccc107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        
        $__internal_a872bd8be5e191953584f1d93a32de06d02b43a372a59a292da6ce7deaccc107->leave($__internal_a872bd8be5e191953584f1d93a32de06d02b43a372a59a292da6ce7deaccc107_prof);

        
        $__internal_f03265445aeeb3f757e1fcebc4299b13cfdaf21fe13412e8cdce80eae1f5412d->leave($__internal_f03265445aeeb3f757e1fcebc4299b13cfdaf21fe13412e8cdce80eae1f5412d_prof);

    }

    // line 177
    public function block_register($context, array $blocks = array())
    {
        $__internal_f1c86dd73ca67e7ebb45b02539b5ab4e5f8836ddb07d4079fa70a9b7d14abe04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c86dd73ca67e7ebb45b02539b5ab4e5f8836ddb07d4079fa70a9b7d14abe04->enter($__internal_f1c86dd73ca67e7ebb45b02539b5ab4e5f8836ddb07d4079fa70a9b7d14abe04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_9df4173f3442d77e6fe10ee07b71f7283d8bc3fafd5c4f0d6d2599a0ebf1af08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df4173f3442d77e6fe10ee07b71f7283d8bc3fafd5c4f0d6d2599a0ebf1af08->enter($__internal_9df4173f3442d77e6fe10ee07b71f7283d8bc3fafd5c4f0d6d2599a0ebf1af08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_9df4173f3442d77e6fe10ee07b71f7283d8bc3fafd5c4f0d6d2599a0ebf1af08->leave($__internal_9df4173f3442d77e6fe10ee07b71f7283d8bc3fafd5c4f0d6d2599a0ebf1af08_prof);

        
        $__internal_f1c86dd73ca67e7ebb45b02539b5ab4e5f8836ddb07d4079fa70a9b7d14abe04->leave($__internal_f1c86dd73ca67e7ebb45b02539b5ab4e5f8836ddb07d4079fa70a9b7d14abe04_prof);

    }

    // line 178
    public function block_profile($context, array $blocks = array())
    {
        $__internal_6f168c85220f7be6af0e7e7f56cd529969ed40b0e19817f670ee065727230430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f168c85220f7be6af0e7e7f56cd529969ed40b0e19817f670ee065727230430->enter($__internal_6f168c85220f7be6af0e7e7f56cd529969ed40b0e19817f670ee065727230430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_5b35388cb96ccae4acd87f6995788dd4557c9e27903ce817ad24e2010293ed0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b35388cb96ccae4acd87f6995788dd4557c9e27903ce817ad24e2010293ed0a->enter($__internal_5b35388cb96ccae4acd87f6995788dd4557c9e27903ce817ad24e2010293ed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        
        $__internal_5b35388cb96ccae4acd87f6995788dd4557c9e27903ce817ad24e2010293ed0a->leave($__internal_5b35388cb96ccae4acd87f6995788dd4557c9e27903ce817ad24e2010293ed0a_prof);

        
        $__internal_6f168c85220f7be6af0e7e7f56cd529969ed40b0e19817f670ee065727230430->leave($__internal_6f168c85220f7be6af0e7e7f56cd529969ed40b0e19817f670ee065727230430_prof);

    }

    // line 179
    public function block_letter($context, array $blocks = array())
    {
        $__internal_5c605667f7e3485f5e1caac8f86c498d3c5ffbf5afab9acedd60e0c81e623dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c605667f7e3485f5e1caac8f86c498d3c5ffbf5afab9acedd60e0c81e623dbf->enter($__internal_5c605667f7e3485f5e1caac8f86c498d3c5ffbf5afab9acedd60e0c81e623dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_a743bd7c19b81f7b4dcbf68f2a87b13c4d8920ada6cee7cfcf485a602a807493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a743bd7c19b81f7b4dcbf68f2a87b13c4d8920ada6cee7cfcf485a602a807493->enter($__internal_a743bd7c19b81f7b4dcbf68f2a87b13c4d8920ada6cee7cfcf485a602a807493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        
        $__internal_a743bd7c19b81f7b4dcbf68f2a87b13c4d8920ada6cee7cfcf485a602a807493->leave($__internal_a743bd7c19b81f7b4dcbf68f2a87b13c4d8920ada6cee7cfcf485a602a807493_prof);

        
        $__internal_5c605667f7e3485f5e1caac8f86c498d3c5ffbf5afab9acedd60e0c81e623dbf->leave($__internal_5c605667f7e3485f5e1caac8f86c498d3c5ffbf5afab9acedd60e0c81e623dbf_prof);

    }

    // line 180
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_07e10280447361cfe5d23bf21a062cabe30f04a1902b478ab4d2b1221bb67994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e10280447361cfe5d23bf21a062cabe30f04a1902b478ab4d2b1221bb67994->enter($__internal_07e10280447361cfe5d23bf21a062cabe30f04a1902b478ab4d2b1221bb67994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_107dff39aaaf0fe87ac5d8ea17f935d5393b6ecb69ee47a5ad60e79e9c3f34f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107dff39aaaf0fe87ac5d8ea17f935d5393b6ecb69ee47a5ad60e79e9c3f34f0->enter($__internal_107dff39aaaf0fe87ac5d8ea17f935d5393b6ecb69ee47a5ad60e79e9c3f34f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        
        $__internal_107dff39aaaf0fe87ac5d8ea17f935d5393b6ecb69ee47a5ad60e79e9c3f34f0->leave($__internal_107dff39aaaf0fe87ac5d8ea17f935d5393b6ecb69ee47a5ad60e79e9c3f34f0_prof);

        
        $__internal_07e10280447361cfe5d23bf21a062cabe30f04a1902b478ab4d2b1221bb67994->leave($__internal_07e10280447361cfe5d23bf21a062cabe30f04a1902b478ab4d2b1221bb67994_prof);

    }

    // line 181
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_1ff8d3d4764e06a1b0105ac482212bc68ff7e395dade42896930eb620268e5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff8d3d4764e06a1b0105ac482212bc68ff7e395dade42896930eb620268e5ba->enter($__internal_1ff8d3d4764e06a1b0105ac482212bc68ff7e395dade42896930eb620268e5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_4a814f1a533d9ffbe709d6b110323af19a8ee01219e4f92831c5a01c58a5efc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a814f1a533d9ffbe709d6b110323af19a8ee01219e4f92831c5a01c58a5efc3->enter($__internal_4a814f1a533d9ffbe709d6b110323af19a8ee01219e4f92831c5a01c58a5efc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        
        $__internal_4a814f1a533d9ffbe709d6b110323af19a8ee01219e4f92831c5a01c58a5efc3->leave($__internal_4a814f1a533d9ffbe709d6b110323af19a8ee01219e4f92831c5a01c58a5efc3_prof);

        
        $__internal_1ff8d3d4764e06a1b0105ac482212bc68ff7e395dade42896930eb620268e5ba->leave($__internal_1ff8d3d4764e06a1b0105ac482212bc68ff7e395dade42896930eb620268e5ba_prof);

    }

    // line 182
    public function block_classement($context, array $blocks = array())
    {
        $__internal_4cdbe7378455b22e0f3c056e4992dfd2369b261ffe9c031b4bc5e3fab0d6a3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdbe7378455b22e0f3c056e4992dfd2369b261ffe9c031b4bc5e3fab0d6a3a3->enter($__internal_4cdbe7378455b22e0f3c056e4992dfd2369b261ffe9c031b4bc5e3fab0d6a3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_70070fdd2a77cf629ab6ac8f7e836d795107e9575bda3ceaa457b9545c2bff85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70070fdd2a77cf629ab6ac8f7e836d795107e9575bda3ceaa457b9545c2bff85->enter($__internal_70070fdd2a77cf629ab6ac8f7e836d795107e9575bda3ceaa457b9545c2bff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        
        $__internal_70070fdd2a77cf629ab6ac8f7e836d795107e9575bda3ceaa457b9545c2bff85->leave($__internal_70070fdd2a77cf629ab6ac8f7e836d795107e9575bda3ceaa457b9545c2bff85_prof);

        
        $__internal_4cdbe7378455b22e0f3c056e4992dfd2369b261ffe9c031b4bc5e3fab0d6a3a3->leave($__internal_4cdbe7378455b22e0f3c056e4992dfd2369b261ffe9c031b4bc5e3fab0d6a3a3_prof);

    }

    // line 183
    public function block_admin($context, array $blocks = array())
    {
        $__internal_09bf3a23bea1b633173a6c0b93a660107cf386170165a644bdb9d6dda229de44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09bf3a23bea1b633173a6c0b93a660107cf386170165a644bdb9d6dda229de44->enter($__internal_09bf3a23bea1b633173a6c0b93a660107cf386170165a644bdb9d6dda229de44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_67c938fe00882f00fcac8102ee152dde6243ab2bb4d27941dd88d2e867f4c748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c938fe00882f00fcac8102ee152dde6243ab2bb4d27941dd88d2e867f4c748->enter($__internal_67c938fe00882f00fcac8102ee152dde6243ab2bb4d27941dd88d2e867f4c748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        
        $__internal_67c938fe00882f00fcac8102ee152dde6243ab2bb4d27941dd88d2e867f4c748->leave($__internal_67c938fe00882f00fcac8102ee152dde6243ab2bb4d27941dd88d2e867f4c748_prof);

        
        $__internal_09bf3a23bea1b633173a6c0b93a660107cf386170165a644bdb9d6dda229de44->leave($__internal_09bf3a23bea1b633173a6c0b93a660107cf386170165a644bdb9d6dda229de44_prof);

    }

    // line 184
    public function block_user($context, array $blocks = array())
    {
        $__internal_5ec0464022eea4eba6df9d8e6df944b5b51907bfb96e0aff673c028f42bde950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec0464022eea4eba6df9d8e6df944b5b51907bfb96e0aff673c028f42bde950->enter($__internal_5ec0464022eea4eba6df9d8e6df944b5b51907bfb96e0aff673c028f42bde950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        $__internal_717c7bed10e2af289fe34578ba8d020614f2adcc98075f2a7db0dd82e5da280a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717c7bed10e2af289fe34578ba8d020614f2adcc98075f2a7db0dd82e5da280a->enter($__internal_717c7bed10e2af289fe34578ba8d020614f2adcc98075f2a7db0dd82e5da280a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        
        $__internal_717c7bed10e2af289fe34578ba8d020614f2adcc98075f2a7db0dd82e5da280a->leave($__internal_717c7bed10e2af289fe34578ba8d020614f2adcc98075f2a7db0dd82e5da280a_prof);

        
        $__internal_5ec0464022eea4eba6df9d8e6df944b5b51907bfb96e0aff673c028f42bde950->leave($__internal_5ec0464022eea4eba6df9d8e6df944b5b51907bfb96e0aff673c028f42bde950_prof);

    }

    // line 186
    public function block_contact($context, array $blocks = array())
    {
        $__internal_7d9f4a9131bcd790dda0ac9e3c0ab1eab98a5891930f97da4c661cf62edd80f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9f4a9131bcd790dda0ac9e3c0ab1eab98a5891930f97da4c661cf62edd80f0->enter($__internal_7d9f4a9131bcd790dda0ac9e3c0ab1eab98a5891930f97da4c661cf62edd80f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_c0242434d0c9569b3a274b74f25cade631d296c8f3c08d2afb482abde353a22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0242434d0c9569b3a274b74f25cade631d296c8f3c08d2afb482abde353a22d->enter($__internal_c0242434d0c9569b3a274b74f25cade631d296c8f3c08d2afb482abde353a22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_c0242434d0c9569b3a274b74f25cade631d296c8f3c08d2afb482abde353a22d->leave($__internal_c0242434d0c9569b3a274b74f25cade631d296c8f3c08d2afb482abde353a22d_prof);

        
        $__internal_7d9f4a9131bcd790dda0ac9e3c0ab1eab98a5891930f97da4c661cf62edd80f0->leave($__internal_7d9f4a9131bcd790dda0ac9e3c0ab1eab98a5891930f97da4c661cf62edd80f0_prof);

    }

    // line 275
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fdeae7bd06b574752ff020b55a73983a3865e1202cd76a784addfa7c552b18a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdeae7bd06b574752ff020b55a73983a3865e1202cd76a784addfa7c552b18a4->enter($__internal_fdeae7bd06b574752ff020b55a73983a3865e1202cd76a784addfa7c552b18a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e5e46ffb53a6e79449538736643c4e175f9d4fea77858b4f79f35b86fddbc0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e46ffb53a6e79449538736643c4e175f9d4fea77858b4f79f35b86fddbc0dc->enter($__internal_e5e46ffb53a6e79449538736643c4e175f9d4fea77858b4f79f35b86fddbc0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 276
        echo "    <!-- Footer Section -->
    <footer id=\"footer-section\">
        <p class=\"copyright\">
            &copy; <a href=\"#\">Squallcorps</a> 2017-2017, All Rights Reserved. Designed by & Developed by <a href=\"#\">Sheelman</a>
        </p>
    </footer>
    <!-- Footer Section End -->
";
        
        $__internal_e5e46ffb53a6e79449538736643c4e175f9d4fea77858b4f79f35b86fddbc0dc->leave($__internal_e5e46ffb53a6e79449538736643c4e175f9d4fea77858b4f79f35b86fddbc0dc_prof);

        
        $__internal_fdeae7bd06b574752ff020b55a73983a3865e1202cd76a784addfa7c552b18a4->leave($__internal_fdeae7bd06b574752ff020b55a73983a3865e1202cd76a784addfa7c552b18a4_prof);

    }

    // line 285
    public function block_color_switcher($context, array $blocks = array())
    {
        $__internal_b1b9124d485cb02282c1cf26591a64cca2ff141a18aabf7732449bc0b2f4fdde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b9124d485cb02282c1cf26591a64cca2ff141a18aabf7732449bc0b2f4fdde->enter($__internal_b1b9124d485cb02282c1cf26591a64cca2ff141a18aabf7732449bc0b2f4fdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

        $__internal_95780533ce9a9bc0c32d0838661b17b3031c802ebdf04e34230ec8193415ada7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95780533ce9a9bc0c32d0838661b17b3031c802ebdf04e34230ec8193415ada7->enter($__internal_95780533ce9a9bc0c32d0838661b17b3031c802ebdf04e34230ec8193415ada7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_switcher"));

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
        
        $__internal_95780533ce9a9bc0c32d0838661b17b3031c802ebdf04e34230ec8193415ada7->leave($__internal_95780533ce9a9bc0c32d0838661b17b3031c802ebdf04e34230ec8193415ada7_prof);

        
        $__internal_b1b9124d485cb02282c1cf26591a64cca2ff141a18aabf7732449bc0b2f4fdde->leave($__internal_b1b9124d485cb02282c1cf26591a64cca2ff141a18aabf7732449bc0b2f4fdde_prof);

    }

    // line 309
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_7f3bbcba1e1e8c88c249ec6477de6ad6d1b5ea339c9d488c4e357c82d9dbc895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3bbcba1e1e8c88c249ec6477de6ad6d1b5ea339c9d488c4e357c82d9dbc895->enter($__internal_7f3bbcba1e1e8c88c249ec6477de6ad6d1b5ea339c9d488c4e357c82d9dbc895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_74155c7eaab9039ee98feee96e9e30e4d305db14a1f0f5f3f218b558c51d44ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74155c7eaab9039ee98feee96e9e30e4d305db14a1f0f5f3f218b558c51d44ac->enter($__internal_74155c7eaab9039ee98feee96e9e30e4d305db14a1f0f5f3f218b558c51d44ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

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
        echo "            </div>
        </div>
        <div class=\"bottom\">
            <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
        </div>
    </section>
    <!-- Conexion Switcher End -->
";
        
        $__internal_74155c7eaab9039ee98feee96e9e30e4d305db14a1f0f5f3f218b558c51d44ac->leave($__internal_74155c7eaab9039ee98feee96e9e30e4d305db14a1f0f5f3f218b558c51d44ac_prof);

        
        $__internal_7f3bbcba1e1e8c88c249ec6477de6ad6d1b5ea339c9d488c4e357c82d9dbc895->leave($__internal_7f3bbcba1e1e8c88c249ec6477de6ad6d1b5ea339c9d488c4e357c82d9dbc895_prof);

    }

    // line 345
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b092c932cac7e9ab936ba12cfcd81938b761f603f3265040e917769592863e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b092c932cac7e9ab936ba12cfcd81938b761f603f3265040e917769592863e2a->enter($__internal_b092c932cac7e9ab936ba12cfcd81938b761f603f3265040e917769592863e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f824f62a363513acce934cdf398f86238241661ebe0346c5e3b56796cbc957d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f824f62a363513acce934cdf398f86238241661ebe0346c5e3b56796cbc957d7->enter($__internal_f824f62a363513acce934cdf398f86238241661ebe0346c5e3b56796cbc957d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 346
        echo "    <!-- jQuery Library -->      
    <script type=\"text/javascript\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Modernizr js -->
    <script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.8.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Plugins -->
    <script type=\"text/javascript\" src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom JavaScript Functions -->
    <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>
    <!-- Color Style Switcher -->
    <script type=\"text/javascript\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/switcher.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f824f62a363513acce934cdf398f86238241661ebe0346c5e3b56796cbc957d7->leave($__internal_f824f62a363513acce934cdf398f86238241661ebe0346c5e3b56796cbc957d7_prof);

        
        $__internal_b092c932cac7e9ab936ba12cfcd81938b761f603f3265040e917769592863e2a->leave($__internal_b092c932cac7e9ab936ba12cfcd81938b761f603f3265040e917769592863e2a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  887 => 357,  882 => 355,  877 => 353,  872 => 351,  867 => 349,  862 => 347,  859 => 346,  850 => 345,  833 => 336,  828 => 334,  825 => 333,  823 => 332,  819 => 331,  814 => 329,  810 => 327,  802 => 325,  796 => 322,  792 => 321,  787 => 320,  785 => 319,  765 => 309,  734 => 286,  725 => 285,  708 => 276,  699 => 275,  603 => 188,  591 => 186,  574 => 184,  557 => 183,  540 => 182,  523 => 181,  506 => 180,  489 => 179,  472 => 178,  455 => 177,  438 => 176,  425 => 166,  416 => 165,  342 => 107,  315 => 89,  303 => 87,  287 => 80,  283 => 79,  277 => 76,  273 => 75,  269 => 74,  250 => 57,  241 => 56,  207 => 38,  190 => 27,  183 => 23,  179 => 22,  173 => 19,  167 => 16,  144 => 3,  132 => 359,  130 => 345,  127 => 344,  125 => 309,  122 => 308,  120 => 285,  117 => 284,  115 => 275,  112 => 274,  110 => 186,  107 => 185,  105 => 184,  103 => 183,  101 => 182,  99 => 181,  97 => 180,  95 => 179,  93 => 178,  91 => 177,  89 => 176,  81 => 170,  79 => 165,  76 => 164,  74 => 107,  70 => 105,  68 => 87,  65 => 86,  63 => 56,  59 => 54,  57 => 38,  51 => 34,  49 => 3,  45 => 1,);
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
