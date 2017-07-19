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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20e621d35249297c956c728ba24a3a31dbb8f5d5214624c86590905fa13d8689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e621d35249297c956c728ba24a3a31dbb8f5d5214624c86590905fa13d8689->enter($__internal_20e621d35249297c956c728ba24a3a31dbb8f5d5214624c86590905fa13d8689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_15e26ad8e33e9feccc3ca17da0518f2c8baac1080d33ccc60fee50092659fc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e26ad8e33e9feccc3ca17da0518f2c8baac1080d33ccc60fee50092659fc35->enter($__internal_15e26ad8e33e9feccc3ca17da0518f2c8baac1080d33ccc60fee50092659fc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20e621d35249297c956c728ba24a3a31dbb8f5d5214624c86590905fa13d8689->leave($__internal_20e621d35249297c956c728ba24a3a31dbb8f5d5214624c86590905fa13d8689_prof);

        
        $__internal_15e26ad8e33e9feccc3ca17da0518f2c8baac1080d33ccc60fee50092659fc35->leave($__internal_15e26ad8e33e9feccc3ca17da0518f2c8baac1080d33ccc60fee50092659fc35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c29fcff511ff7625b1da20fb95314ed5e58b8ba8b07fb72ca6ad9d286d853498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29fcff511ff7625b1da20fb95314ed5e58b8ba8b07fb72ca6ad9d286d853498->enter($__internal_c29fcff511ff7625b1da20fb95314ed5e58b8ba8b07fb72ca6ad9d286d853498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21eea202763f50fa62bf304a83af4811547636743b232d3b0fce0a31b06b197a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21eea202763f50fa62bf304a83af4811547636743b232d3b0fce0a31b06b197a->enter($__internal_21eea202763f50fa62bf304a83af4811547636743b232d3b0fce0a31b06b197a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body>

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
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
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



        <!-- Classement général Section -->
        <section id=\"classement\" class=\"section-style\" data-background-image=\"images/background/static1.squarespace.com.jpeg\">
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
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
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
    </body>
";
        
        $__internal_21eea202763f50fa62bf304a83af4811547636743b232d3b0fce0a31b06b197a->leave($__internal_21eea202763f50fa62bf304a83af4811547636743b232d3b0fce0a31b06b197a_prof);

        
        $__internal_c29fcff511ff7625b1da20fb95314ed5e58b8ba8b07fb72ca6ad9d286d853498->leave($__internal_c29fcff511ff7625b1da20fb95314ed5e58b8ba8b07fb72ca6ad9d286d853498_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <body>

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
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
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



        <!-- Classement général Section -->
        <section id=\"classement\" class=\"section-style\" data-background-image=\"images/background/static1.squarespace.com.jpeg\">
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
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
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
    </body>
{% endblock %}
", "default/index.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/index.html.twig");
    }
}
