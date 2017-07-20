<?php

/* default/index.html.twig */
class __TwigTemplate_eb06cea6897fcd0190b5b480f9660ee60e7cc875ac6347494ee121194322dc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'letter' => array($this, 'block_letter'),
            'portfolio' => array($this, 'block_portfolio'),
            'resultat' => array($this, 'block_resultat'),
            'classement' => array($this, 'block_classement'),
            'conexion_switcher' => array($this, 'block_conexion_switcher'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f98ed919a8053943c202b6c2759973fa030092a24bdeb3ff92fa894530f39322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98ed919a8053943c202b6c2759973fa030092a24bdeb3ff92fa894530f39322->enter($__internal_f98ed919a8053943c202b6c2759973fa030092a24bdeb3ff92fa894530f39322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_652327a6c0457e310767028eeb8b5931a662c369030f1d71bba90fec0a583de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652327a6c0457e310767028eeb8b5931a662c369030f1d71bba90fec0a583de8->enter($__internal_652327a6c0457e310767028eeb8b5931a662c369030f1d71bba90fec0a583de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f98ed919a8053943c202b6c2759973fa030092a24bdeb3ff92fa894530f39322->leave($__internal_f98ed919a8053943c202b6c2759973fa030092a24bdeb3ff92fa894530f39322_prof);

        
        $__internal_652327a6c0457e310767028eeb8b5931a662c369030f1d71bba90fec0a583de8->leave($__internal_652327a6c0457e310767028eeb8b5931a662c369030f1d71bba90fec0a583de8_prof);

    }

    // line 3
    public function block_letter($context, array $blocks = array())
    {
        $__internal_f2aa9035867e85927e320385aeabf6002eedc3c2c72ca7e75d43187bec72d7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2aa9035867e85927e320385aeabf6002eedc3c2c72ca7e75d43187bec72d7bf->enter($__internal_f2aa9035867e85927e320385aeabf6002eedc3c2c72ca7e75d43187bec72d7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_ce82791d8cb34b9ee128b1dc64d0713eb21ad38ce256aa0fcdf138720a36a461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce82791d8cb34b9ee128b1dc64d0713eb21ad38ce256aa0fcdf138720a36a461->enter($__internal_ce82791d8cb34b9ee128b1dc64d0713eb21ad38ce256aa0fcdf138720a36a461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        // line 4
        echo "            <!-- Lettre du président section -->
        <section id=\"lettre\" class=\"section-style\" data-background-image=\"images/background/courir-de-nuit1.jpg\">
            <div class=\"pattern height-resize\">
                <div class=\"container\">
                    <h3 class=\"section-name\">
                        <span>
                            Lettre du président
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class=\"section-title\">
                        Qui sommes nous !
                    </h2><!-- /.Section-title  -->
                    <p class=\"section-description\">
                        “La compétition sportive est une parabole qui illustre parfaitement la grande course de la vie.” - Claude Lelouch 
                    </p><!-- /.section-description -->

                    <!-- box section-->
                    <article class=\"box\">
                        <header>
                            <h2>Athletik</h2>
                            <p>Les 1000 pas</p>
                        </header>
                        <div class=\"content\">
                            <p>

                                Qu'est-ce que le Lorem Ipsum?

                                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                                <br/>
                                <br/>Pourquoi l'utiliser?

                                On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).

                            </p>
                        </div>
                        <footer>

                        </footer>
                    </article>
                    <!-- /.box section-->

                    <div class=\"next-section\">
                        <a class=\"go-to-portfolio\"><span></span></a>
                    </div><!-- /.next-section -->

                </div><!-- /.container -->
            </div><!-- /.pattern -->

        </section><!-- /#lettre -->
        <!-- Lettre du président section End -->
";
        
        $__internal_ce82791d8cb34b9ee128b1dc64d0713eb21ad38ce256aa0fcdf138720a36a461->leave($__internal_ce82791d8cb34b9ee128b1dc64d0713eb21ad38ce256aa0fcdf138720a36a461_prof);

        
        $__internal_f2aa9035867e85927e320385aeabf6002eedc3c2c72ca7e75d43187bec72d7bf->leave($__internal_f2aa9035867e85927e320385aeabf6002eedc3c2c72ca7e75d43187bec72d7bf_prof);

    }

    // line 56
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_96575ab5db178c324a2b3147e0b54dd011d69c4b30dbd7f2935cfc60f5655de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96575ab5db178c324a2b3147e0b54dd011d69c4b30dbd7f2935cfc60f5655de2->enter($__internal_96575ab5db178c324a2b3147e0b54dd011d69c4b30dbd7f2935cfc60f5655de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_f38ce0bd91aa6f2db4656079e3a748d22ae9cbea6a6ba150f62e44fd12742292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38ce0bd91aa6f2db4656079e3a748d22ae9cbea6a6ba150f62e44fd12742292->enter($__internal_f38ce0bd91aa6f2db4656079e3a748d22ae9cbea6a6ba150f62e44fd12742292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        // line 57
        echo "        <!-- Portfolio Us Section -->
        <section id=\"portfolio\" class=\"section-style\" data-background-image=\"images/background/runners-752493_1920.jpg\">
            <div class=\"pattern height-resize\">
                <div class=\"container\">
                    <!-- Page Heading -->
                    <h3 class=\"section-name\">
                        <span>
                            Portfolio
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class=\"section-title\">
                        Quelques photos de nos dernières courses 
                    </h2><!-- /.Section-title  -->
                    <p class=\"section-description\">
                        «Vous devez vous demander parfois ce que vous faites là-bas. Au fil des ans, je me suis donné mille raisons pour continuer à courir, mais ça revient toujours au point de départ. Ça se résume à l'auto-satisfaction et un sentiment d'accomplissement. »
                        <br/>- Steve Prefontaine
                    </p><!-- /.section-description -->
                    <!-- /.row -->

                    <!-- Projects Row -->
                    <div class=\"row\">
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/race-932254_640.jpg\">
                                <img class=\"img-responsive\" src=\"images/portfolio/race-932254_640.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/runner-864859_640.jpg\">
                                <img class=\"img-responsive\" src=\"images/portfolio/runner-864859_640.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-78192_640.jpg\">
                                <img class=\"img-responsive\" src=\"images/portfolio/running-78192_640.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-942110_640.jpg\">
                                <img class=\"img-responsive\" src=\"images/portfolio/running-942110_640.jpg\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Projects Row -->
                    <div class=\"row\">
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Projects Row -->
                    <div class=\"row\">
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->

                    <hr>

                    <!-- Pagination -->
                    <div class=\"row text-center\">
                        <div class=\"col-lg-12\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\">&laquo;</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"#\">1</a>
                                </li>
                                <li>
                                    <a href=\"#\">2</a>
                                </li>
                                <li>
                                    <a href=\"#\">3</a>
                                </li>
                                <li>
                                    <a href=\"#\">4</a>
                                </li>
                                <li>
                                    <a href=\"#\">5</a>
                                </li>
                                <li>
                                    <a href=\"#\">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class=\"next-section\">
                        <a class=\"go-to-resultat\"><span></span></a>
                    </div><!-- /.next-section -->
                </div><!-- /.container -->
            </div><!-- /.pattern -->
        </section><!-- /#portfolio -->
        <!-- Portfolio Section End -->
";
        
        $__internal_f38ce0bd91aa6f2db4656079e3a748d22ae9cbea6a6ba150f62e44fd12742292->leave($__internal_f38ce0bd91aa6f2db4656079e3a748d22ae9cbea6a6ba150f62e44fd12742292_prof);

        
        $__internal_96575ab5db178c324a2b3147e0b54dd011d69c4b30dbd7f2935cfc60f5655de2->leave($__internal_96575ab5db178c324a2b3147e0b54dd011d69c4b30dbd7f2935cfc60f5655de2_prof);

    }

    // line 191
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_86366a276caf59fa2567f8f884ff6b189e51b0fee2e6843f5ea4ce2f085a841c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86366a276caf59fa2567f8f884ff6b189e51b0fee2e6843f5ea4ce2f085a841c->enter($__internal_86366a276caf59fa2567f8f884ff6b189e51b0fee2e6843f5ea4ce2f085a841c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_a69d2a34609414555c2b954d1919a6ae1831b509f84f9c955d8a5a9b2a6ec651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69d2a34609414555c2b954d1919a6ae1831b509f84f9c955d8a5a9b2a6ec651->enter($__internal_a69d2a34609414555c2b954d1919a6ae1831b509f84f9c955d8a5a9b2a6ec651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 192
        echo "        <!-- Résultat des courses Section -->
        <section id=\"resultat\" class=\"section-style\" data-background-image=\"images/background/lampes-frontales_generale_0.jpg\">
            <div class=\"pattern height-resize\"> 
                <div class=\"container\">
                    <h3 class=\"section-name\">
                        <span>
                            Résultat par courses
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class=\"section-title\">
                        Chaque course a son résultat
                    </h2><!-- /.Section-title  -->
                    <p class=\"section-description\">
                        « La course est un grand point d'interrogation qui est là chaque jour. Elle vous demande : « Est-ce que vous allez être une mauviette ou allez vous être fort aujourd'hui ? »
                        - Peter Maher, marathonien canadien
                    </p><!-- /.section-description -->

                    <article class=\"box\">
                        <header>
                            <h2>Résultats des courses</h2>
                            <p>2017</p>
                        </header>
                        <div class=\"content\">

                        </div>
                        <footer>
                            <a href=\"/\" class=\"button alt\">Archive</a>
                        </footer>
                    </article>

                    <div class=\"next-section\">
                        <a class=\"go-to-classement\"><span></span></a>
                    </div><!-- /.next-section -->

                </div><!-- /.container -->
            </div><!-- /.pattern -->


        </section><!-- /#resultat -->
        <!-- Résultat des courses Section End -->
";
        
        $__internal_a69d2a34609414555c2b954d1919a6ae1831b509f84f9c955d8a5a9b2a6ec651->leave($__internal_a69d2a34609414555c2b954d1919a6ae1831b509f84f9c955d8a5a9b2a6ec651_prof);

        
        $__internal_86366a276caf59fa2567f8f884ff6b189e51b0fee2e6843f5ea4ce2f085a841c->leave($__internal_86366a276caf59fa2567f8f884ff6b189e51b0fee2e6843f5ea4ce2f085a841c_prof);

    }

    // line 234
    public function block_classement($context, array $blocks = array())
    {
        $__internal_7d6a64a7b47e6269fd6cd225bf4f3d4b0236de3bf0393a0092bae0d7a9713f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6a64a7b47e6269fd6cd225bf4f3d4b0236de3bf0393a0092bae0d7a9713f6e->enter($__internal_7d6a64a7b47e6269fd6cd225bf4f3d4b0236de3bf0393a0092bae0d7a9713f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_d353a041af77cea5af6d7712dfbc46e50dcb04e5a7361f4ef166dbb4488024e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d353a041af77cea5af6d7712dfbc46e50dcb04e5a7361f4ef166dbb4488024e9->enter($__internal_d353a041af77cea5af6d7712dfbc46e50dcb04e5a7361f4ef166dbb4488024e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        // line 235
        echo "    

    
        <!-- Classement général Section -->
        <section id=\"classement\" class=\"section-style\" data-background-image=\"images/background/static1.squarespace.com.jpeg\">
            
            <div class=\"pattern height-resize\">
                <div class=\"container\">
                            ";
        // line 243
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 244
            echo "            <h1>je suis user!!!!!!!</h1>
";
        }
        // line 246
        echo "                    <h3 class=\"section-name\">
                        <span>
                            Classement général
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class=\"section-title\">
                        Qui est le premier ! 
                    </h2><!-- /.Section-title  -->
                    <p class=\"section-description\">
                        « Courir est un sanctuaire pour moi. Ça me tient centré. Je ne peux pas prendre mon téléphone portable ou mon ordinateur. Je peux ne pas être disponible et être totalement égoïste. »
                        - Tanna Frederick, Actrice
                    </p><!-- /.section-description -->

                    <article class=\"box\">
                        <header>
                            <h2>Classement</h2>
                            <p>2017</p>
                        </header>
                        <div class=\"content\">

                        </div>
                        <footer>
                            <a href=\"/\" class=\"button alt\">Archive</a>
                        </footer>
                    </article>

                    <div class=\"next-section\">
                        <a class=\"go-to-contact\"><span></span></a>
                    </div><!-- /.next-section -->

                </div><!-- /.container -->
            </div><!-- /.pattern -->

        </section><!-- /#classement -->
        <!-- Classement général Section End -->
";
        
        $__internal_d353a041af77cea5af6d7712dfbc46e50dcb04e5a7361f4ef166dbb4488024e9->leave($__internal_d353a041af77cea5af6d7712dfbc46e50dcb04e5a7361f4ef166dbb4488024e9_prof);

        
        $__internal_7d6a64a7b47e6269fd6cd225bf4f3d4b0236de3bf0393a0092bae0d7a9713f6e->leave($__internal_7d6a64a7b47e6269fd6cd225bf4f3d4b0236de3bf0393a0092bae0d7a9713f6e_prof);

    }

    // line 282
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_d4df5fb880ac77a265c720e3b2c27e8737e0b109b318368d5d42413f00174b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4df5fb880ac77a265c720e3b2c27e8737e0b109b318368d5d42413f00174b9a->enter($__internal_d4df5fb880ac77a265c720e3b2c27e8737e0b109b318368d5d42413f00174b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_218c998797e67eb138560f66c8f06e8c8e8654e7760781a1d88d8a82942f516b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218c998797e67eb138560f66c8f06e8c8e8654e7760781a1d88d8a82942f516b->enter($__internal_218c998797e67eb138560f66c8f06e8c8e8654e7760781a1d88d8a82942f516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "               
            <!-- conexion Switcher  -->
            <section id=\"conexion\">
                <div>

                        <h3>Conexion</h3>
                        
                        <div class=\"login\">
                            ";
        // line 290
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 291
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                <a href=\"";
            // line 292
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        } else {
            // line 296
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 298
        echo "                        </div>

                    ";
        // line 300
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 301
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 302
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 303
                    echo "                                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                    ";
                    // line 304
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 307
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            echo "                    ";
        }
        // line 309
        echo "
                        <div>
                            ";
        // line 311
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 313
        echo "                        </div>
                    <div class=\"menu\">
                        <a href=\"/#\">Home</a>
                        <a href=\"";
        // line 316
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
                        <a href=\"";
        // line 317
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" >Mon Profil</a>
                    </div>
                </div>
                <div class=\"bottom\">
                    <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
                </div>
            </section>
            <!-- Conexion Switcher End -->
        ";
        
        $__internal_218c998797e67eb138560f66c8f06e8c8e8654e7760781a1d88d8a82942f516b->leave($__internal_218c998797e67eb138560f66c8f06e8c8e8654e7760781a1d88d8a82942f516b_prof);

        
        $__internal_d4df5fb880ac77a265c720e3b2c27e8737e0b109b318368d5d42413f00174b9a->leave($__internal_d4df5fb880ac77a265c720e3b2c27e8737e0b109b318368d5d42413f00174b9a_prof);

    }

    // line 311
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_628fd4e7a7c1e68382eb194429076c211538cb9c1775385d1eba2a0aedd1221b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628fd4e7a7c1e68382eb194429076c211538cb9c1775385d1eba2a0aedd1221b->enter($__internal_628fd4e7a7c1e68382eb194429076c211538cb9c1775385d1eba2a0aedd1221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_802c4bc2296af088231b34d60a26700344e0366502a635e1cbbbc6d033e41239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802c4bc2296af088231b34d60a26700344e0366502a635e1cbbbc6d033e41239->enter($__internal_802c4bc2296af088231b34d60a26700344e0366502a635e1cbbbc6d033e41239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 312
        echo "                            ";
        
        $__internal_802c4bc2296af088231b34d60a26700344e0366502a635e1cbbbc6d033e41239->leave($__internal_802c4bc2296af088231b34d60a26700344e0366502a635e1cbbbc6d033e41239_prof);

        
        $__internal_628fd4e7a7c1e68382eb194429076c211538cb9c1775385d1eba2a0aedd1221b->leave($__internal_628fd4e7a7c1e68382eb194429076c211538cb9c1775385d1eba2a0aedd1221b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 312,  510 => 311,  491 => 317,  487 => 316,  482 => 313,  480 => 311,  476 => 309,  473 => 308,  467 => 307,  458 => 304,  453 => 303,  448 => 302,  443 => 301,  441 => 300,  437 => 298,  429 => 296,  423 => 293,  419 => 292,  414 => 291,  412 => 290,  394 => 282,  349 => 246,  345 => 244,  343 => 243,  333 => 235,  324 => 234,  274 => 192,  265 => 191,  123 => 57,  114 => 56,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block letter %}
            <!-- Lettre du président section -->
        <section id=\"lettre\" class=\"section-style\" data-background-image=\"images/background/courir-de-nuit1.jpg\">
            <div class=\"pattern height-resize\">
                <div class=\"container\">
                    <h3 class=\"section-name\">
                        <span>
                            Lettre du président
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class=\"section-title\">
                        Qui sommes nous !
                    </h2><!-- /.Section-title  -->
                    <p class=\"section-description\">
                        “La compétition sportive est une parabole qui illustre parfaitement la grande course de la vie.” - Claude Lelouch 
                    </p><!-- /.section-description -->

                    <!-- box section-->
                    <article class=\"box\">
                        <header>
                            <h2>Athletik</h2>
                            <p>Les 1000 pas</p>
                        </header>
                        <div class=\"content\">
                            <p>

                                Qu'est-ce que le Lorem Ipsum?

                                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                                <br/>
                                <br/>Pourquoi l'utiliser?

                                On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).

                            </p>
                        </div>
                        <footer>

                        </footer>
                    </article>
                    <!-- /.box section-->

                    <div class=\"next-section\">
                        <a class=\"go-to-portfolio\"><span></span></a>
                    </div><!-- /.next-section -->

                </div><!-- /.container -->
            </div><!-- /.pattern -->

        </section><!-- /#lettre -->
        <!-- Lettre du président section End -->
{%endblock%}

{% block portfolio %}
        <!-- Portfolio Us Section -->
        <section id=\"portfolio\" class=\"section-style\" data-background-image=\"images/background/runners-752493_1920.jpg\">
            <div class=\"pattern height-resize\">
                <div class=\"container\">
                    <!-- Page Heading -->
                    <h3 class=\"section-name\">
                        <span>
                            Portfolio
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class=\"section-title\">
                        Quelques photos de nos dernières courses 
                    </h2><!-- /.Section-title  -->
                    <p class=\"section-description\">
                        «Vous devez vous demander parfois ce que vous faites là-bas. Au fil des ans, je me suis donné mille raisons pour continuer à courir, mais ça revient toujours au point de départ. Ça se résume à l'auto-satisfaction et un sentiment d'accomplissement. »
                        <br/>- Steve Prefontaine
                    </p><!-- /.section-description -->
                    <!-- /.row -->

                    <!-- Projects Row -->
                    <div class=\"row\">
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/race-932254_640.jpg\">
                                <img class=\"img-responsive\" src=\"images/portfolio/race-932254_640.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/runner-864859_640.jpg\">
                                <img class=\"img-responsive\" src=\"images/portfolio/runner-864859_640.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-78192_640.jpg\">
                                <img class=\"img-responsive\" src=\"images/portfolio/running-78192_640.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-942110_640.jpg\">
                                <img class=\"img-responsive\" src=\"images/portfolio/running-942110_640.jpg\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Projects Row -->
                    <div class=\"row\">
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Projects Row -->
                    <div class=\"row\">
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->

                    <hr>

                    <!-- Pagination -->
                    <div class=\"row text-center\">
                        <div class=\"col-lg-12\">
                            <ul class=\"pagination\">
                                <li>
                                    <a href=\"#\">&laquo;</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"#\">1</a>
                                </li>
                                <li>
                                    <a href=\"#\">2</a>
                                </li>
                                <li>
                                    <a href=\"#\">3</a>
                                </li>
                                <li>
                                    <a href=\"#\">4</a>
                                </li>
                                <li>
                                    <a href=\"#\">5</a>
                                </li>
                                <li>
                                    <a href=\"#\">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class=\"next-section\">
                        <a class=\"go-to-resultat\"><span></span></a>
                    </div><!-- /.next-section -->
                </div><!-- /.container -->
            </div><!-- /.pattern -->
        </section><!-- /#portfolio -->
        <!-- Portfolio Section End -->
{%endblock%}

{% block resultat %}
        <!-- Résultat des courses Section -->
        <section id=\"resultat\" class=\"section-style\" data-background-image=\"images/background/lampes-frontales_generale_0.jpg\">
            <div class=\"pattern height-resize\"> 
                <div class=\"container\">
                    <h3 class=\"section-name\">
                        <span>
                            Résultat par courses
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class=\"section-title\">
                        Chaque course a son résultat
                    </h2><!-- /.Section-title  -->
                    <p class=\"section-description\">
                        « La course est un grand point d'interrogation qui est là chaque jour. Elle vous demande : « Est-ce que vous allez être une mauviette ou allez vous être fort aujourd'hui ? »
                        - Peter Maher, marathonien canadien
                    </p><!-- /.section-description -->

                    <article class=\"box\">
                        <header>
                            <h2>Résultats des courses</h2>
                            <p>2017</p>
                        </header>
                        <div class=\"content\">

                        </div>
                        <footer>
                            <a href=\"/\" class=\"button alt\">Archive</a>
                        </footer>
                    </article>

                    <div class=\"next-section\">
                        <a class=\"go-to-classement\"><span></span></a>
                    </div><!-- /.next-section -->

                </div><!-- /.container -->
            </div><!-- /.pattern -->


        </section><!-- /#resultat -->
        <!-- Résultat des courses Section End -->
{%endblock%}

{% block classement %}
    

    
        <!-- Classement général Section -->
        <section id=\"classement\" class=\"section-style\" data-background-image=\"images/background/static1.squarespace.com.jpeg\">
            
            <div class=\"pattern height-resize\">
                <div class=\"container\">
                            {% if is_granted('ROLE_USER') %}
            <h1>je suis user!!!!!!!</h1>
{% endif %}
                    <h3 class=\"section-name\">
                        <span>
                            Classement général
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class=\"section-title\">
                        Qui est le premier ! 
                    </h2><!-- /.Section-title  -->
                    <p class=\"section-description\">
                        « Courir est un sanctuaire pour moi. Ça me tient centré. Je ne peux pas prendre mon téléphone portable ou mon ordinateur. Je peux ne pas être disponible et être totalement égoïste. »
                        - Tanna Frederick, Actrice
                    </p><!-- /.section-description -->

                    <article class=\"box\">
                        <header>
                            <h2>Classement</h2>
                            <p>2017</p>
                        </header>
                        <div class=\"content\">

                        </div>
                        <footer>
                            <a href=\"/\" class=\"button alt\">Archive</a>
                        </footer>
                    </article>

                    <div class=\"next-section\">
                        <a class=\"go-to-contact\"><span></span></a>
                    </div><!-- /.next-section -->

                </div><!-- /.container -->
            </div><!-- /.pattern -->

        </section><!-- /#classement -->
        <!-- Classement général Section End -->
{%endblock%}
          {% block conexion_switcher %}               
            <!-- conexion Switcher  -->
            <section id=\"conexion\">
                <div>

                        <h3>Conexion</h3>
                        
                        <div class=\"login\">
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                </a>
                            {% else %}
                                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                            {% endif %}
                        </div>

                    {% if app.request.hasPreviousSession %}
                        {% for type, messages in app.session.flashbag.all() %}
                            {% for message in messages %}
                                <div class=\"flash-{{ type }}\">
                                    {{ message }}
                                </div>
                            {% endfor %}
                        {% endfor %}
                    {% endif %}

                        <div>
                            {% block fos_user_content %}
                            {% endblock fos_user_content %}
                        </div>
                    <div class=\"menu\">
                        <a href=\"/#\">Home</a>
                        <a href=\"{{ path('fos_user_registration_register') }}\">Inscription</a>
                        <a href=\"{{ path('fos_user_profile_show') }}\" >Mon Profil</a>
                    </div>
                </div>
                <div class=\"bottom\">
                    <a href=\"#\" class=\"settings\"><i class=\"fa fa-user icon-2x\"></i></a>
                </div>
            </section>
            <!-- Conexion Switcher End -->
        {% endblock %}", "default/index.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/index.html.twig");
    }
}
