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
        $__internal_d645eb8d7441b71ea7195ce9a8059681941794f82442fc7cf67f38f3813fbf88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d645eb8d7441b71ea7195ce9a8059681941794f82442fc7cf67f38f3813fbf88->enter($__internal_d645eb8d7441b71ea7195ce9a8059681941794f82442fc7cf67f38f3813fbf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_f011a783dc702d3bb19d92d747a3f51f11c272c7d3c9b7912d81972047e501be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f011a783dc702d3bb19d92d747a3f51f11c272c7d3c9b7912d81972047e501be->enter($__internal_f011a783dc702d3bb19d92d747a3f51f11c272c7d3c9b7912d81972047e501be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d645eb8d7441b71ea7195ce9a8059681941794f82442fc7cf67f38f3813fbf88->leave($__internal_d645eb8d7441b71ea7195ce9a8059681941794f82442fc7cf67f38f3813fbf88_prof);

        
        $__internal_f011a783dc702d3bb19d92d747a3f51f11c272c7d3c9b7912d81972047e501be->leave($__internal_f011a783dc702d3bb19d92d747a3f51f11c272c7d3c9b7912d81972047e501be_prof);

    }

    // line 3
    public function block_letter($context, array $blocks = array())
    {
        $__internal_cb16f3c4f4edd3be5d05334cb4c937be6573c47981521940eabf5f78e55893cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb16f3c4f4edd3be5d05334cb4c937be6573c47981521940eabf5f78e55893cf->enter($__internal_cb16f3c4f4edd3be5d05334cb4c937be6573c47981521940eabf5f78e55893cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_b2a55ee341676dd1aa6c444fb0938f3f6480aff94ea5490bfb511dbb43cbb07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a55ee341676dd1aa6c444fb0938f3f6480aff94ea5490bfb511dbb43cbb07c->enter($__internal_b2a55ee341676dd1aa6c444fb0938f3f6480aff94ea5490bfb511dbb43cbb07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        // line 4
        echo "    <!-- Lettre du président section -->
    <section id=\"lettre\" class=\"section-style\" data-background-image=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/courir-de-nuit1.jpg"), "html", null, true);
        echo "\">
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
        
        $__internal_b2a55ee341676dd1aa6c444fb0938f3f6480aff94ea5490bfb511dbb43cbb07c->leave($__internal_b2a55ee341676dd1aa6c444fb0938f3f6480aff94ea5490bfb511dbb43cbb07c_prof);

        
        $__internal_cb16f3c4f4edd3be5d05334cb4c937be6573c47981521940eabf5f78e55893cf->leave($__internal_cb16f3c4f4edd3be5d05334cb4c937be6573c47981521940eabf5f78e55893cf_prof);

    }

    // line 56
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_8477cba8d64a99959241e44ff893146620c1cd3b8fc46f0d688316921c23c50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8477cba8d64a99959241e44ff893146620c1cd3b8fc46f0d688316921c23c50c->enter($__internal_8477cba8d64a99959241e44ff893146620c1cd3b8fc46f0d688316921c23c50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_fde3fece5587949153fdd0599802584751c6782eb5aad0262b1ca55e6ec97ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde3fece5587949153fdd0599802584751c6782eb5aad0262b1ca55e6ec97ad3->enter($__internal_fde3fece5587949153fdd0599802584751c6782eb5aad0262b1ca55e6ec97ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        // line 57
        echo "    <!-- Portfolio Us Section -->
    <section id=\"portfolio\" class=\"section-style\" data-background-image=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/runners-752493_1920.jpg"), "html", null, true);
        echo "\">
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
                            <img class=\"img-responsive\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/race-932254_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"images/portfolio/runner-864859_640.jpg\">
                            <img class=\"img-responsive\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/runner-864859_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"images/portfolio/running-78192_640.jpg\">
                            <img class=\"img-responsive\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/running-78192_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"images/portfolio/running-942110_640.jpg\">
                            <img class=\"img-responsive\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/running-942110_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Projects Row -->
                <div class=\"row\">
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Projects Row -->
                <div class=\"row\">
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
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
        
        $__internal_fde3fece5587949153fdd0599802584751c6782eb5aad0262b1ca55e6ec97ad3->leave($__internal_fde3fece5587949153fdd0599802584751c6782eb5aad0262b1ca55e6ec97ad3_prof);

        
        $__internal_8477cba8d64a99959241e44ff893146620c1cd3b8fc46f0d688316921c23c50c->leave($__internal_8477cba8d64a99959241e44ff893146620c1cd3b8fc46f0d688316921c23c50c_prof);

    }

    // line 191
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_1e6c1f207e59ca30f81b953a77cd812095cee4aa2126ffee741429d35efa6c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6c1f207e59ca30f81b953a77cd812095cee4aa2126ffee741429d35efa6c36->enter($__internal_1e6c1f207e59ca30f81b953a77cd812095cee4aa2126ffee741429d35efa6c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_cf94894b6b95042fdf87a1feb7138bd4c552019ad60a55079568d664336d5871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf94894b6b95042fdf87a1feb7138bd4c552019ad60a55079568d664336d5871->enter($__internal_cf94894b6b95042fdf87a1feb7138bd4c552019ad60a55079568d664336d5871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 192
        echo "    <!-- Résultat des courses Section -->
    <section id=\"resultat\" class=\"section-style\" data-background-image=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/lampes-frontales_generale_0.jpg"), "html", null, true);
        echo "\">
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
        
        $__internal_cf94894b6b95042fdf87a1feb7138bd4c552019ad60a55079568d664336d5871->leave($__internal_cf94894b6b95042fdf87a1feb7138bd4c552019ad60a55079568d664336d5871_prof);

        
        $__internal_1e6c1f207e59ca30f81b953a77cd812095cee4aa2126ffee741429d35efa6c36->leave($__internal_1e6c1f207e59ca30f81b953a77cd812095cee4aa2126ffee741429d35efa6c36_prof);

    }

    // line 234
    public function block_classement($context, array $blocks = array())
    {
        $__internal_c75372b111fed4ce9d7b194e69d47e9f68089426e279f280dc1464aa8476f27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75372b111fed4ce9d7b194e69d47e9f68089426e279f280dc1464aa8476f27c->enter($__internal_c75372b111fed4ce9d7b194e69d47e9f68089426e279f280dc1464aa8476f27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_5e2609702ce5d6ac4c47a159621f2a0192822f1d740a3b88b0f557e30650d2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2609702ce5d6ac4c47a159621f2a0192822f1d740a3b88b0f557e30650d2b0->enter($__internal_5e2609702ce5d6ac4c47a159621f2a0192822f1d740a3b88b0f557e30650d2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        echo " 
    <!-- Classement général Section -->
    <section id=\"classement\" class=\"section-style\" data-background-image=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/static1.squarespace.com.jpeg"), "html", null, true);
        echo "\">            
        <div class=\"pattern height-resize\">
            <div class=\"container\">                            
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
";
        
        $__internal_5e2609702ce5d6ac4c47a159621f2a0192822f1d740a3b88b0f557e30650d2b0->leave($__internal_5e2609702ce5d6ac4c47a159621f2a0192822f1d740a3b88b0f557e30650d2b0_prof);

        
        $__internal_c75372b111fed4ce9d7b194e69d47e9f68089426e279f280dc1464aa8476f27c->leave($__internal_c75372b111fed4ce9d7b194e69d47e9f68089426e279f280dc1464aa8476f27c_prof);

    }

    // line 276
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_cbbaaa59d9da7df3c55f669f53df457838b456a8ae1b232bb9b6350217908872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbaaa59d9da7df3c55f669f53df457838b456a8ae1b232bb9b6350217908872->enter($__internal_cbbaaa59d9da7df3c55f669f53df457838b456a8ae1b232bb9b6350217908872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_04aa2ebe0d7d02f8a210fa26d969b86abfc61ea744b910baec9db8b5907bc438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04aa2ebe0d7d02f8a210fa26d969b86abfc61ea744b910baec9db8b5907bc438->enter($__internal_04aa2ebe0d7d02f8a210fa26d969b86abfc61ea744b910baec9db8b5907bc438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "               
    <!-- conexion Switcher  -->
    <section id=\"conexion\">
        <div>

            <h3>Conexion</h3>

            <div class=\"login\">
                ";
        // line 284
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 285
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 286
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 287
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 290
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 292
        echo "            </div>

            ";
        // line 294
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 295
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 296
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 297
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 298
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 301
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "            ";
        }
        // line 303
        echo "
            <div>
                ";
        // line 305
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 307
        echo "            </div>
            <div class=\"menu\">
                <a href=\"/#\">Home</a>
                <a href=\"";
        // line 310
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
                <a href=\"";
        // line 311
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
        
        $__internal_04aa2ebe0d7d02f8a210fa26d969b86abfc61ea744b910baec9db8b5907bc438->leave($__internal_04aa2ebe0d7d02f8a210fa26d969b86abfc61ea744b910baec9db8b5907bc438_prof);

        
        $__internal_cbbaaa59d9da7df3c55f669f53df457838b456a8ae1b232bb9b6350217908872->leave($__internal_cbbaaa59d9da7df3c55f669f53df457838b456a8ae1b232bb9b6350217908872_prof);

    }

    // line 305
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc18d88bf728fc6b636144fcf70db195311b77c18143108eff5c50d056a8b1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc18d88bf728fc6b636144fcf70db195311b77c18143108eff5c50d056a8b1d1->enter($__internal_fc18d88bf728fc6b636144fcf70db195311b77c18143108eff5c50d056a8b1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97cfa36c43f897e2e7652620b645b8b1e05c33113419bb05107468b8456c4839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cfa36c43f897e2e7652620b645b8b1e05c33113419bb05107468b8456c4839->enter($__internal_97cfa36c43f897e2e7652620b645b8b1e05c33113419bb05107468b8456c4839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 306
        echo "                ";
        
        $__internal_97cfa36c43f897e2e7652620b645b8b1e05c33113419bb05107468b8456c4839->leave($__internal_97cfa36c43f897e2e7652620b645b8b1e05c33113419bb05107468b8456c4839_prof);

        
        $__internal_fc18d88bf728fc6b636144fcf70db195311b77c18143108eff5c50d056a8b1d1->leave($__internal_fc18d88bf728fc6b636144fcf70db195311b77c18143108eff5c50d056a8b1d1_prof);

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
        return array (  555 => 306,  546 => 305,  527 => 311,  523 => 310,  518 => 307,  516 => 305,  512 => 303,  509 => 302,  503 => 301,  494 => 298,  489 => 297,  484 => 296,  479 => 295,  477 => 294,  473 => 292,  465 => 290,  459 => 287,  455 => 286,  450 => 285,  448 => 284,  430 => 276,  381 => 236,  369 => 234,  319 => 193,  316 => 192,  307 => 191,  252 => 145,  244 => 140,  236 => 135,  228 => 130,  215 => 120,  207 => 115,  199 => 110,  191 => 105,  178 => 95,  170 => 90,  162 => 85,  154 => 80,  129 => 58,  126 => 57,  117 => 56,  57 => 5,  54 => 4,  45 => 3,  11 => 1,);
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
    <section id=\"lettre\" class=\"section-style\" data-background-image=\"{{ asset('images/background/courir-de-nuit1.jpg')}}\">
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
    <section id=\"portfolio\" class=\"section-style\" data-background-image=\"{{ asset('images/background/runners-752493_1920.jpg')}}\">
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
                            <img class=\"img-responsive\" src=\"{{ asset('images/portfolio/race-932254_640.jpg')}}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"images/portfolio/runner-864859_640.jpg\">
                            <img class=\"img-responsive\" src=\"{{ asset('images/portfolio/runner-864859_640.jpg')}}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"images/portfolio/running-78192_640.jpg\">
                            <img class=\"img-responsive\" src=\"{{ asset('images/portfolio/running-78192_640.jpg')}}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"images/portfolio/running-942110_640.jpg\">
                            <img class=\"img-responsive\" src=\"{{ asset('images/portfolio/running-942110_640.jpg')}}\" alt=\"\">
                        </a>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Projects Row -->
                <div class=\"row\">
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450')}}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450')}}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450')}}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450')}}\" alt=\"\">
                        </a>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Projects Row -->
                <div class=\"row\">
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450')}}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450')}}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450')}}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450')}}\" alt=\"\">
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
    <section id=\"resultat\" class=\"section-style\" data-background-image=\"{{ asset('images/background/lampes-frontales_generale_0.jpg')}}\">
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
    <section id=\"classement\" class=\"section-style\" data-background-image=\"{{ asset('images/background/static1.squarespace.com.jpeg') }}\">            
        <div class=\"pattern height-resize\">
            <div class=\"container\">                            
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
