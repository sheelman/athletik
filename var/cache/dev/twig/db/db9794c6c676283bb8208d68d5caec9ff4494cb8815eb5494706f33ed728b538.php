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
        $__internal_fbc02cef4f18aa867bad39407f0221770081efe546a9b5fdf4995cd822a7b81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc02cef4f18aa867bad39407f0221770081efe546a9b5fdf4995cd822a7b81d->enter($__internal_fbc02cef4f18aa867bad39407f0221770081efe546a9b5fdf4995cd822a7b81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_70867cada8bc247c53f5cf3f46018a90457ef50386f7bccb538662212e589cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70867cada8bc247c53f5cf3f46018a90457ef50386f7bccb538662212e589cb2->enter($__internal_70867cada8bc247c53f5cf3f46018a90457ef50386f7bccb538662212e589cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc02cef4f18aa867bad39407f0221770081efe546a9b5fdf4995cd822a7b81d->leave($__internal_fbc02cef4f18aa867bad39407f0221770081efe546a9b5fdf4995cd822a7b81d_prof);

        
        $__internal_70867cada8bc247c53f5cf3f46018a90457ef50386f7bccb538662212e589cb2->leave($__internal_70867cada8bc247c53f5cf3f46018a90457ef50386f7bccb538662212e589cb2_prof);

    }

    // line 5
    public function block_letter($context, array $blocks = array())
    {
        $__internal_5e6a99f76f4c2fe0c588a57e39e2f8f71822d9e5e271a27778c58295fb7b3fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6a99f76f4c2fe0c588a57e39e2f8f71822d9e5e271a27778c58295fb7b3fee->enter($__internal_5e6a99f76f4c2fe0c588a57e39e2f8f71822d9e5e271a27778c58295fb7b3fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_88bcd95bc4aa65c88142166e588cf61e9a5dff016784dfa8a98b873b6c1f6d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bcd95bc4aa65c88142166e588cf61e9a5dff016784dfa8a98b873b6c1f6d08->enter($__internal_88bcd95bc4aa65c88142166e588cf61e9a5dff016784dfa8a98b873b6c1f6d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        // line 6
        echo "            <!-- Lettre du président section -->
        <section id=\"lettre\" class=\"section-style\" data-background-image=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/courir-de-nuit1.jpg"), "html", null, true);
        echo "\">
            <div class=\"pattern height-resize\">
                <div class=\"container\">
                    
                    ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 12
            echo "            <h1>je suis user!!!!!!!</h1>
";
        }
        // line 14
        echo "                    <h3 class=\"section-name\">
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
        
        $__internal_88bcd95bc4aa65c88142166e588cf61e9a5dff016784dfa8a98b873b6c1f6d08->leave($__internal_88bcd95bc4aa65c88142166e588cf61e9a5dff016784dfa8a98b873b6c1f6d08_prof);

        
        $__internal_5e6a99f76f4c2fe0c588a57e39e2f8f71822d9e5e271a27778c58295fb7b3fee->leave($__internal_5e6a99f76f4c2fe0c588a57e39e2f8f71822d9e5e271a27778c58295fb7b3fee_prof);

    }

    // line 62
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_2a40feca7c4316a85e244cee30e079fe119e86b2d4dd728eb91ae63530d9f9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a40feca7c4316a85e244cee30e079fe119e86b2d4dd728eb91ae63530d9f9b3->enter($__internal_2a40feca7c4316a85e244cee30e079fe119e86b2d4dd728eb91ae63530d9f9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_ff329d9a73125fb2fab76becb83d7e36937fd28c6f05d10629e50dafceb71d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff329d9a73125fb2fab76becb83d7e36937fd28c6f05d10629e50dafceb71d60->enter($__internal_ff329d9a73125fb2fab76becb83d7e36937fd28c6f05d10629e50dafceb71d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        // line 63
        echo "        <!-- Portfolio Us Section -->
        <section id=\"portfolio\" class=\"section-style\" data-background-image=\"";
        // line 64
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
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/race-932254_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/runner-864859_640.jpg\">
                                <img class=\"img-responsive\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/runner-864859_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-78192_640.jpg\">
                                <img class=\"img-responsive\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/running-78192_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-942110_640.jpg\">
                                <img class=\"img-responsive\" src=\"";
        // line 101
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
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 126
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
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 151
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
        
        $__internal_ff329d9a73125fb2fab76becb83d7e36937fd28c6f05d10629e50dafceb71d60->leave($__internal_ff329d9a73125fb2fab76becb83d7e36937fd28c6f05d10629e50dafceb71d60_prof);

        
        $__internal_2a40feca7c4316a85e244cee30e079fe119e86b2d4dd728eb91ae63530d9f9b3->leave($__internal_2a40feca7c4316a85e244cee30e079fe119e86b2d4dd728eb91ae63530d9f9b3_prof);

    }

    // line 197
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_993a418af0c31f8d1479dcda596c5a3ed608197ff27c6a359eb17b9ec27559da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993a418af0c31f8d1479dcda596c5a3ed608197ff27c6a359eb17b9ec27559da->enter($__internal_993a418af0c31f8d1479dcda596c5a3ed608197ff27c6a359eb17b9ec27559da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_299dfbaf6617b3ba35252d4f6ab0a8688b27270613ec54a832cef36f77a583ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299dfbaf6617b3ba35252d4f6ab0a8688b27270613ec54a832cef36f77a583ac->enter($__internal_299dfbaf6617b3ba35252d4f6ab0a8688b27270613ec54a832cef36f77a583ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 198
        echo "        <!-- Résultat des courses Section -->
        <section id=\"resultat\" class=\"section-style\" data-background-image=\"";
        // line 199
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
                            ";
        // line 218
        echo "                            <h2>Résultats de : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["result"] ?? $this->getContext($context, "result")), 0, array()), "name", array()), "html", null, true);
        echo "</h2>
                            <p>2017</p>
                        </header>
                            
                        <div class=\"content\">
                        <table class=\"table table-inverse\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Temps</th>
                                    <th>Resultat</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["athletes"] ?? $this->getContext($context, "athletes")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 235
            echo "                                
                                <tr>
                                    <th scope=\"row\"></th>
                                    <td>";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "athlete", array()), "firstname", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "athlete", array()), "lastname", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "time", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "points", array()), "html", null, true);
            echo "</td>
                                </tr>
                                
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                            ";
        // line 246
        echo "                            </tbody>
                        </table>                       
                        </div>
                        
                        <footer>
                            <a href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\" class=\"button alt\">Archive</a>
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
        
        $__internal_299dfbaf6617b3ba35252d4f6ab0a8688b27270613ec54a832cef36f77a583ac->leave($__internal_299dfbaf6617b3ba35252d4f6ab0a8688b27270613ec54a832cef36f77a583ac_prof);

        
        $__internal_993a418af0c31f8d1479dcda596c5a3ed608197ff27c6a359eb17b9ec27559da->leave($__internal_993a418af0c31f8d1479dcda596c5a3ed608197ff27c6a359eb17b9ec27559da_prof);

    }

    // line 267
    public function block_classement($context, array $blocks = array())
    {
        $__internal_6b2c70870302cc41030cdd765daa2414fab8731259f794baacd330106de92636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2c70870302cc41030cdd765daa2414fab8731259f794baacd330106de92636->enter($__internal_6b2c70870302cc41030cdd765daa2414fab8731259f794baacd330106de92636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_64b4c280dbfd26de36b136c062d7dff371ec4db8a0f054d66af60846f31c954f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b4c280dbfd26de36b136c062d7dff371ec4db8a0f054d66af60846f31c954f->enter($__internal_64b4c280dbfd26de36b136c062d7dff371ec4db8a0f054d66af60846f31c954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        // line 268
        echo "    

    
        <!-- Classement général Section -->
        <section id=\"classement\" class=\"section-style\" data-background-image=\"";
        // line 272
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
                            <a href=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\" class=\"button alt\">Archive</a>
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
        
        $__internal_64b4c280dbfd26de36b136c062d7dff371ec4db8a0f054d66af60846f31c954f->leave($__internal_64b4c280dbfd26de36b136c062d7dff371ec4db8a0f054d66af60846f31c954f_prof);

        
        $__internal_6b2c70870302cc41030cdd765daa2414fab8731259f794baacd330106de92636->leave($__internal_6b2c70870302cc41030cdd765daa2414fab8731259f794baacd330106de92636_prof);

    }

    // line 311
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_f01e5eb04b85d07641d8f7dcd31fc24bb4e9a497970f8e710fe696fedd5d57c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01e5eb04b85d07641d8f7dcd31fc24bb4e9a497970f8e710fe696fedd5d57c9->enter($__internal_f01e5eb04b85d07641d8f7dcd31fc24bb4e9a497970f8e710fe696fedd5d57c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_44f60d90b06526dd74df952ed846d105479dacadd529f09d2c636a37404e8dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f60d90b06526dd74df952ed846d105479dacadd529f09d2c636a37404e8dd5->enter($__internal_44f60d90b06526dd74df952ed846d105479dacadd529f09d2c636a37404e8dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "               
            <!-- conexion Switcher  -->
            <section id=\"conexion\">
                <div>

                        <h3>Conexion</h3>
                        
                        <div class=\"login\">
                            ";
        // line 319
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 320
            echo "                                ";
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
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 327
        echo "                        </div>

                    ";
        // line 329
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 330
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 331
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 332
                    echo "                                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                    ";
                    // line 333
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 336
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 337
            echo "                    ";
        }
        // line 338
        echo "
                        <div>
                            ";
        // line 340
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 342
        echo "                        </div>
                    <div class=\"menu\">
                        <a href=\"/#\">Home</a>
                        <a href=\"";
        // line 345
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
                        <a href=\"";
        // line 346
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
        
        $__internal_44f60d90b06526dd74df952ed846d105479dacadd529f09d2c636a37404e8dd5->leave($__internal_44f60d90b06526dd74df952ed846d105479dacadd529f09d2c636a37404e8dd5_prof);

        
        $__internal_f01e5eb04b85d07641d8f7dcd31fc24bb4e9a497970f8e710fe696fedd5d57c9->leave($__internal_f01e5eb04b85d07641d8f7dcd31fc24bb4e9a497970f8e710fe696fedd5d57c9_prof);

    }

    // line 340
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7458e0fbbdfd958c675ad27af426927842a87fadd0a1f5e5b6ca25b0fa9c16e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7458e0fbbdfd958c675ad27af426927842a87fadd0a1f5e5b6ca25b0fa9c16e9->enter($__internal_7458e0fbbdfd958c675ad27af426927842a87fadd0a1f5e5b6ca25b0fa9c16e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a2607954027dbd7e4367bba6f0484e4945063978e415bc90f55b4bf254e6119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2607954027dbd7e4367bba6f0484e4945063978e415bc90f55b4bf254e6119->enter($__internal_3a2607954027dbd7e4367bba6f0484e4945063978e415bc90f55b4bf254e6119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 341
        echo "                            ";
        
        $__internal_3a2607954027dbd7e4367bba6f0484e4945063978e415bc90f55b4bf254e6119->leave($__internal_3a2607954027dbd7e4367bba6f0484e4945063978e415bc90f55b4bf254e6119_prof);

        
        $__internal_7458e0fbbdfd958c675ad27af426927842a87fadd0a1f5e5b6ca25b0fa9c16e9->leave($__internal_7458e0fbbdfd958c675ad27af426927842a87fadd0a1f5e5b6ca25b0fa9c16e9_prof);

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
        return array (  626 => 341,  617 => 340,  598 => 346,  594 => 345,  589 => 342,  587 => 340,  583 => 338,  580 => 337,  574 => 336,  565 => 333,  560 => 332,  555 => 331,  550 => 330,  548 => 329,  544 => 327,  536 => 325,  530 => 322,  526 => 321,  521 => 320,  519 => 319,  501 => 311,  477 => 297,  449 => 272,  443 => 268,  434 => 267,  409 => 251,  402 => 246,  400 => 245,  390 => 241,  386 => 240,  382 => 239,  378 => 238,  373 => 235,  369 => 234,  349 => 218,  328 => 199,  325 => 198,  316 => 197,  261 => 151,  253 => 146,  245 => 141,  237 => 136,  224 => 126,  216 => 121,  208 => 116,  200 => 111,  187 => 101,  179 => 96,  171 => 91,  163 => 86,  138 => 64,  135 => 63,  126 => 62,  70 => 14,  66 => 12,  64 => 11,  57 => 7,  54 => 6,  45 => 5,  11 => 1,);
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
        <section id=\"lettre\" class=\"section-style\" data-background-image=\"{{ asset('images/background/courir-de-nuit1.jpg') }}\">
            <div class=\"pattern height-resize\">
                <div class=\"container\">
                    
                    {% if is_granted('ROLE_USER') %}
            <h1>je suis user!!!!!!!</h1>
{% endif %}
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
        <section id=\"portfolio\" class=\"section-style\" data-background-image=\"{{ asset('images/background/runners-752493_1920.jpg') }}\">
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
                                <img class=\"img-responsive\" src=\"{{ asset('images/portfolio/race-932254_640.jpg') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/runner-864859_640.jpg\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/portfolio/runner-864859_640.jpg') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-78192_640.jpg\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/portfolio/running-78192_640.jpg') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-942110_640.jpg\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/portfolio/running-942110_640.jpg') }}\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Projects Row -->
                    <div class=\"row\">
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450') }}\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Projects Row -->
                    <div class=\"row\">
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('http://placehold.it/750x450') }}\" alt=\"\">
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
        <section id=\"resultat\" class=\"section-style\" data-background-image=\"{{ asset('images/background/lampes-frontales_generale_0.jpg') }}\">
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
                            {#{% if result is defined %}vérifie si la variable est définie sinon ne l'utilise pas ce qui permet d'éviter des erreur sur les page ou elle apparais#}
                            <h2>Résultats de : {{ (result.0.name) }}</h2>
                            <p>2017</p>
                        </header>
                            
                        <div class=\"content\">
                        <table class=\"table table-inverse\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Temps</th>
                                    <th>Resultat</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for result in athletes %}
                                
                                <tr>
                                    <th scope=\"row\"></th>
                                    <td>{{ result.athlete.firstname }}</td>
                                    <td>{{ result.athlete.lastname }}</td>
                                    <td>{{ result.time }}</td>
                                    <td>{{ result.points }}</td>
                                </tr>
                                
                            {% endfor %}
                            {#{% endif %}#}
                            </tbody>
                        </table>                       
                        </div>
                        
                        <footer>
                            <a href=\"{{ asset('/') }}\" class=\"button alt\">Archive</a>
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
                            <a href=\"{{ asset('/') }}\" class=\"button alt\">Archive</a>
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
