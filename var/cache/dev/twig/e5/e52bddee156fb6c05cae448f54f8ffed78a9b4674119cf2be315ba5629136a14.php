<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fbeb901f21bb3ecbbb9343688ec662b6b97e62499a41199fe20ab6ec1d9bd12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbeb901f21bb3ecbbb9343688ec662b6b97e62499a41199fe20ab6ec1d9bd12->enter($__internal_9fbeb901f21bb3ecbbb9343688ec662b6b97e62499a41199fe20ab6ec1d9bd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e9ab3bb2b9a13fa7fa1f9b79bd462eeb939cae85eb82b177a2a5f047786ee9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ab3bb2b9a13fa7fa1f9b79bd462eeb939cae85eb82b177a2a5f047786ee9c2->enter($__internal_e9ab3bb2b9a13fa7fa1f9b79bd462eeb939cae85eb82b177a2a5f047786ee9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Transformation Kite\" >
\t<meta name=\"author\" content=\"sheelman\">

\t<!-- Mobile Specific Meta -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

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
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
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
                    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("_fragment" => "conexion"));
        echo "\">Conexion</a></li>
                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("_fragment" => "lettre"));
        echo "\">Lettre du président</a></li>
                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("_fragment" => "portfolio"));
        echo "\">Portfolio</a></li>
                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tableaux", array("_fragment" => "resultat"));
        echo "\">Résultat des courses</a></li>\t
                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tableaux", array("_fragment" => "classement"));
        echo "\">Classement Général</a></li>\t
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
        // line 162
        $this->displayBlock('body', $context, $blocks);
        // line 163
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
        ";
        // line 298
        $this->displayBlock('javascripts', $context, $blocks);
        // line 299
        echo "    </body>
</html>
";
        
        $__internal_9fbeb901f21bb3ecbbb9343688ec662b6b97e62499a41199fe20ab6ec1d9bd12->leave($__internal_9fbeb901f21bb3ecbbb9343688ec662b6b97e62499a41199fe20ab6ec1d9bd12_prof);

        
        $__internal_e9ab3bb2b9a13fa7fa1f9b79bd462eeb939cae85eb82b177a2a5f047786ee9c2->leave($__internal_e9ab3bb2b9a13fa7fa1f9b79bd462eeb939cae85eb82b177a2a5f047786ee9c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_942001ba4ceb264b95379a0e0865de9182d2e4a88b384ec7456d916c98d048cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942001ba4ceb264b95379a0e0865de9182d2e4a88b384ec7456d916c98d048cd->enter($__internal_942001ba4ceb264b95379a0e0865de9182d2e4a88b384ec7456d916c98d048cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16c32dfa0975833b0055b3903d9321bec62c97284943cccc39927b105068f121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c32dfa0975833b0055b3903d9321bec62c97284943cccc39927b105068f121->enter($__internal_16c32dfa0975833b0055b3903d9321bec62c97284943cccc39927b105068f121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Athletik Les 1000 pas";
        
        $__internal_16c32dfa0975833b0055b3903d9321bec62c97284943cccc39927b105068f121->leave($__internal_16c32dfa0975833b0055b3903d9321bec62c97284943cccc39927b105068f121_prof);

        
        $__internal_942001ba4ceb264b95379a0e0865de9182d2e4a88b384ec7456d916c98d048cd->leave($__internal_942001ba4ceb264b95379a0e0865de9182d2e4a88b384ec7456d916c98d048cd_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a6c81e7f39c0c1fb7f1c4af844cfc57949a963242b88d96a416ae79e8d8b89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6c81e7f39c0c1fb7f1c4af844cfc57949a963242b88d96a416ae79e8d8b89c->enter($__internal_0a6c81e7f39c0c1fb7f1c4af844cfc57949a963242b88d96a416ae79e8d8b89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_84ce2c39e0f6c889ab0293597de1e0605b773bdac8b91308be6cb5fb65cc0d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ce2c39e0f6c889ab0293597de1e0605b773bdac8b91308be6cb5fb65cc0d64->enter($__internal_84ce2c39e0f6c889ab0293597de1e0605b773bdac8b91308be6cb5fb65cc0d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_84ce2c39e0f6c889ab0293597de1e0605b773bdac8b91308be6cb5fb65cc0d64->leave($__internal_84ce2c39e0f6c889ab0293597de1e0605b773bdac8b91308be6cb5fb65cc0d64_prof);

        
        $__internal_0a6c81e7f39c0c1fb7f1c4af844cfc57949a963242b88d96a416ae79e8d8b89c->leave($__internal_0a6c81e7f39c0c1fb7f1c4af844cfc57949a963242b88d96a416ae79e8d8b89c_prof);

    }

    // line 162
    public function block_body($context, array $blocks = array())
    {
        $__internal_1448efe5173dbf5ab4453e43930789fe4cbb423d19a7eac1e1bfa86171a14b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1448efe5173dbf5ab4453e43930789fe4cbb423d19a7eac1e1bfa86171a14b47->enter($__internal_1448efe5173dbf5ab4453e43930789fe4cbb423d19a7eac1e1bfa86171a14b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f1a1681cba5bea8f450426eaf5dfc47a52312dd8fcb4c19f8add3eef294eabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1a1681cba5bea8f450426eaf5dfc47a52312dd8fcb4c19f8add3eef294eabf->enter($__internal_9f1a1681cba5bea8f450426eaf5dfc47a52312dd8fcb4c19f8add3eef294eabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f1a1681cba5bea8f450426eaf5dfc47a52312dd8fcb4c19f8add3eef294eabf->leave($__internal_9f1a1681cba5bea8f450426eaf5dfc47a52312dd8fcb4c19f8add3eef294eabf_prof);

        
        $__internal_1448efe5173dbf5ab4453e43930789fe4cbb423d19a7eac1e1bfa86171a14b47->leave($__internal_1448efe5173dbf5ab4453e43930789fe4cbb423d19a7eac1e1bfa86171a14b47_prof);

    }

    // line 298
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92e05b0817622508aefc08e899f68047616b09c3563ae2022023af154d21e4ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e05b0817622508aefc08e899f68047616b09c3563ae2022023af154d21e4ee->enter($__internal_92e05b0817622508aefc08e899f68047616b09c3563ae2022023af154d21e4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bb543c68e80e4fd1cf043a51f2fdb23bf6de9391dc43783fe8fe9146cd037f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb543c68e80e4fd1cf043a51f2fdb23bf6de9391dc43783fe8fe9146cd037f8a->enter($__internal_bb543c68e80e4fd1cf043a51f2fdb23bf6de9391dc43783fe8fe9146cd037f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bb543c68e80e4fd1cf043a51f2fdb23bf6de9391dc43783fe8fe9146cd037f8a->leave($__internal_bb543c68e80e4fd1cf043a51f2fdb23bf6de9391dc43783fe8fe9146cd037f8a_prof);

        
        $__internal_92e05b0817622508aefc08e899f68047616b09c3563ae2022023af154d21e4ee->leave($__internal_92e05b0817622508aefc08e899f68047616b09c3563ae2022023af154d21e4ee_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 298,  403 => 162,  386 => 30,  368 => 5,  356 => 299,  354 => 298,  217 => 163,  215 => 162,  122 => 72,  118 => 71,  114 => 70,  110 => 69,  106 => 68,  65 => 31,  63 => 30,  35 => 5,  29 => 1,);
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
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Athletik Les 1000 pas{% endblock %}</title>
        <meta name=\"description\" content=\"Transformation Kite\" >
\t<meta name=\"author\" content=\"sheelman\">

\t<!-- Mobile Specific Meta -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    
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
                    <li><a href=\"{{ path('homepage', {'_fragment': 'conexion'}) }}\">Conexion</a></li>
                    <li><a href=\"{{ path('presentation', {'_fragment': 'lettre'}) }}\">Lettre du président</a></li>
                    <li><a href=\"{{ path('presentation', {'_fragment': 'portfolio'}) }}\">Portfolio</a></li>
                    <li><a href=\"{{ path('tableaux', {'_fragment': 'resultat'}) }}\">Résultat des courses</a></li>\t
                    <li><a href=\"{{ path('tableaux', {'_fragment': 'classement'}) }}\">Classement Général</a></li>\t
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
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/base.html.twig");
    }
}
