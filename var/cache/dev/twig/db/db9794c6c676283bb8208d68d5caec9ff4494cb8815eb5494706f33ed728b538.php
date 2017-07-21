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
        $__internal_97a3dd6cbfd015f382d90a66ef8562f483baab5958630b4a2404f8f326939e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a3dd6cbfd015f382d90a66ef8562f483baab5958630b4a2404f8f326939e60->enter($__internal_97a3dd6cbfd015f382d90a66ef8562f483baab5958630b4a2404f8f326939e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_cf55fafc32dcf1925385b2c549e42930efb80ce295843870b019ace1920c2dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf55fafc32dcf1925385b2c549e42930efb80ce295843870b019ace1920c2dce->enter($__internal_cf55fafc32dcf1925385b2c549e42930efb80ce295843870b019ace1920c2dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a3dd6cbfd015f382d90a66ef8562f483baab5958630b4a2404f8f326939e60->leave($__internal_97a3dd6cbfd015f382d90a66ef8562f483baab5958630b4a2404f8f326939e60_prof);

        
        $__internal_cf55fafc32dcf1925385b2c549e42930efb80ce295843870b019ace1920c2dce->leave($__internal_cf55fafc32dcf1925385b2c549e42930efb80ce295843870b019ace1920c2dce_prof);

    }

    // line 5
    public function block_letter($context, array $blocks = array())
    {
        $__internal_bf0664580d75b8829173b93c8097f0d34b260f2b8f6c74be728a69d29747dcce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0664580d75b8829173b93c8097f0d34b260f2b8f6c74be728a69d29747dcce->enter($__internal_bf0664580d75b8829173b93c8097f0d34b260f2b8f6c74be728a69d29747dcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_e1d6c02c1bfc2364fd5191904e036d2f997c8196f7a1e394b958235e17929e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d6c02c1bfc2364fd5191904e036d2f997c8196f7a1e394b958235e17929e8b->enter($__internal_e1d6c02c1bfc2364fd5191904e036d2f997c8196f7a1e394b958235e17929e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "            <h1>je suis ADMIN!!!!!!!</h1>
";
        }
        // line 14
        echo "
                    ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 16
            echo "            <h1>je suis USER!!!!!!!</h1>
";
        }
        // line 18
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
        
        $__internal_e1d6c02c1bfc2364fd5191904e036d2f997c8196f7a1e394b958235e17929e8b->leave($__internal_e1d6c02c1bfc2364fd5191904e036d2f997c8196f7a1e394b958235e17929e8b_prof);

        
        $__internal_bf0664580d75b8829173b93c8097f0d34b260f2b8f6c74be728a69d29747dcce->leave($__internal_bf0664580d75b8829173b93c8097f0d34b260f2b8f6c74be728a69d29747dcce_prof);

    }

    // line 66
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_7208ed1ca3aa8759e898fce4f0ded3539a4b48e0f20c2ac40141d42ce423870d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7208ed1ca3aa8759e898fce4f0ded3539a4b48e0f20c2ac40141d42ce423870d->enter($__internal_7208ed1ca3aa8759e898fce4f0ded3539a4b48e0f20c2ac40141d42ce423870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_03ad0980e8b927c063bc46a2e416030e5897d87a90341a1873c591ee6afb50c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ad0980e8b927c063bc46a2e416030e5897d87a90341a1873c591ee6afb50c4->enter($__internal_03ad0980e8b927c063bc46a2e416030e5897d87a90341a1873c591ee6afb50c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        // line 67
        echo "        <!-- Portfolio Us Section -->
        <section id=\"portfolio\" class=\"section-style\" data-background-image=\"";
        // line 68
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
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/race-932254_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/runner-864859_640.jpg\">
                                <img class=\"img-responsive\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/runner-864859_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-78192_640.jpg\">
                                <img class=\"img-responsive\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/running-78192_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"images/portfolio/running-942110_640.jpg\">
                                <img class=\"img-responsive\" src=\"";
        // line 105
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
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 130
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
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 portfolio-item\">
                            <a href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 155
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
        
        $__internal_03ad0980e8b927c063bc46a2e416030e5897d87a90341a1873c591ee6afb50c4->leave($__internal_03ad0980e8b927c063bc46a2e416030e5897d87a90341a1873c591ee6afb50c4_prof);

        
        $__internal_7208ed1ca3aa8759e898fce4f0ded3539a4b48e0f20c2ac40141d42ce423870d->leave($__internal_7208ed1ca3aa8759e898fce4f0ded3539a4b48e0f20c2ac40141d42ce423870d_prof);

    }

    // line 201
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_c6ab96a88241be9d04841eb7f4158f95ee7366c9c68bcf2725e60619cee284e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ab96a88241be9d04841eb7f4158f95ee7366c9c68bcf2725e60619cee284e3->enter($__internal_c6ab96a88241be9d04841eb7f4158f95ee7366c9c68bcf2725e60619cee284e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_49537625dccccd1585a501ea6bead6df9d54aaa2015fc60e4e9471659ad70eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49537625dccccd1585a501ea6bead6df9d54aaa2015fc60e4e9471659ad70eb9->enter($__internal_49537625dccccd1585a501ea6bead6df9d54aaa2015fc60e4e9471659ad70eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 202
        echo "        <!-- Résultat des courses Section -->
        <section id=\"resultat\" class=\"section-style\" data-background-image=\"";
        // line 203
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
                        <theader>
                            ";
        // line 222
        echo "                                <h2>Résultats de :  <select placeholder=\"course\">
                                                    
                                                   ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meetings"] ?? $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 225
            echo "                                                    <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "name", array()), "html", null, true);
            echo "                                                     
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                                                    </select>
                                </h2>
                            <p>2017</p>
                        </theader>
                            
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
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["athletes"] ?? $this->getContext($context, "athletes")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 245
            echo "                                
                                <tr>
                                    <th scope=\"row\"></th>
                                    <td>";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "athlete", array()), "firstname", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "athlete", array()), "lastname", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "time", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "points", array()), "html", null, true);
            echo "</td>
                                </tr>
                                
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "                            
                            </tbody>
                        </table>                       
                        </div>
                        
                        <footer>
                            <a href=\"";
        // line 261
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
        
        $__internal_49537625dccccd1585a501ea6bead6df9d54aaa2015fc60e4e9471659ad70eb9->leave($__internal_49537625dccccd1585a501ea6bead6df9d54aaa2015fc60e4e9471659ad70eb9_prof);

        
        $__internal_c6ab96a88241be9d04841eb7f4158f95ee7366c9c68bcf2725e60619cee284e3->leave($__internal_c6ab96a88241be9d04841eb7f4158f95ee7366c9c68bcf2725e60619cee284e3_prof);

    }

    // line 277
    public function block_classement($context, array $blocks = array())
    {
        $__internal_e40390af919e98f3eb78404b28e996ac64e0613f6a203b2936990412350a2689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40390af919e98f3eb78404b28e996ac64e0613f6a203b2936990412350a2689->enter($__internal_e40390af919e98f3eb78404b28e996ac64e0613f6a203b2936990412350a2689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_57d7c73ac84ffa31291efc6b224b79e83e056d05616ab8eeda7cab3916a8dabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d7c73ac84ffa31291efc6b224b79e83e056d05616ab8eeda7cab3916a8dabe->enter($__internal_57d7c73ac84ffa31291efc6b224b79e83e056d05616ab8eeda7cab3916a8dabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        // line 278
        echo "    

    
        <!-- Classement général Section -->
        <section id=\"classement\" class=\"section-style\" data-background-image=\"";
        // line 282
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
        // line 307
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
        
        $__internal_57d7c73ac84ffa31291efc6b224b79e83e056d05616ab8eeda7cab3916a8dabe->leave($__internal_57d7c73ac84ffa31291efc6b224b79e83e056d05616ab8eeda7cab3916a8dabe_prof);

        
        $__internal_e40390af919e98f3eb78404b28e996ac64e0613f6a203b2936990412350a2689->leave($__internal_e40390af919e98f3eb78404b28e996ac64e0613f6a203b2936990412350a2689_prof);

    }

    // line 321
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_db73f8233c338b1f3c39f9c42fb1e1d9c167198516160367a89e7230c26b2b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db73f8233c338b1f3c39f9c42fb1e1d9c167198516160367a89e7230c26b2b49->enter($__internal_db73f8233c338b1f3c39f9c42fb1e1d9c167198516160367a89e7230c26b2b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_0e8f728235a3c4213dacd33e5482ebdce4949e686a655c0c569da75679160535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8f728235a3c4213dacd33e5482ebdce4949e686a655c0c569da75679160535->enter($__internal_0e8f728235a3c4213dacd33e5482ebdce4949e686a655c0c569da75679160535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "               
            <!-- conexion Switcher  -->
            <section id=\"conexion\">
                <div>

                        <h3>Conexion</h3>
                        
                        <div class=\"login\">
                            ";
        // line 329
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 330
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                <a href=\"";
            // line 331
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 332
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        } else {
            // line 335
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 337
        echo "                        </div>

                    ";
        // line 339
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 340
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 341
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 342
                    echo "                                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                    ";
                    // line 343
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 346
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            echo "                    ";
        }
        // line 348
        echo "
                        <div>
                            ";
        // line 350
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 352
        echo "                        </div>
                    <div class=\"menu\">
                        <a href=\"/#\">Home</a>
                        <br/>
                        <a href=\"";
        // line 356
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
                        <br/>
                        <a href=\"";
        // line 358
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
        
        $__internal_0e8f728235a3c4213dacd33e5482ebdce4949e686a655c0c569da75679160535->leave($__internal_0e8f728235a3c4213dacd33e5482ebdce4949e686a655c0c569da75679160535_prof);

        
        $__internal_db73f8233c338b1f3c39f9c42fb1e1d9c167198516160367a89e7230c26b2b49->leave($__internal_db73f8233c338b1f3c39f9c42fb1e1d9c167198516160367a89e7230c26b2b49_prof);

    }

    // line 350
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1b6fc79b89149b6428d3a49e4f38004ae4271bd7b3599ec3fa2a25858dc84c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b6fc79b89149b6428d3a49e4f38004ae4271bd7b3599ec3fa2a25858dc84c0->enter($__internal_c1b6fc79b89149b6428d3a49e4f38004ae4271bd7b3599ec3fa2a25858dc84c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a02930332af2f5ddb59e232d5c568c9ed12a9a565bd3a7ff07c91003ac182ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02930332af2f5ddb59e232d5c568c9ed12a9a565bd3a7ff07c91003ac182ee0->enter($__internal_a02930332af2f5ddb59e232d5c568c9ed12a9a565bd3a7ff07c91003ac182ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 351
        echo "                            ";
        
        $__internal_a02930332af2f5ddb59e232d5c568c9ed12a9a565bd3a7ff07c91003ac182ee0->leave($__internal_a02930332af2f5ddb59e232d5c568c9ed12a9a565bd3a7ff07c91003ac182ee0_prof);

        
        $__internal_c1b6fc79b89149b6428d3a49e4f38004ae4271bd7b3599ec3fa2a25858dc84c0->leave($__internal_c1b6fc79b89149b6428d3a49e4f38004ae4271bd7b3599ec3fa2a25858dc84c0_prof);

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
        return array (  652 => 351,  643 => 350,  624 => 358,  619 => 356,  613 => 352,  611 => 350,  607 => 348,  604 => 347,  598 => 346,  589 => 343,  584 => 342,  579 => 341,  574 => 340,  572 => 339,  568 => 337,  560 => 335,  554 => 332,  550 => 331,  545 => 330,  543 => 329,  525 => 321,  501 => 307,  473 => 282,  467 => 278,  458 => 277,  433 => 261,  425 => 255,  415 => 251,  411 => 250,  407 => 249,  403 => 248,  398 => 245,  394 => 244,  375 => 227,  366 => 225,  362 => 224,  358 => 222,  337 => 203,  334 => 202,  325 => 201,  270 => 155,  262 => 150,  254 => 145,  246 => 140,  233 => 130,  225 => 125,  217 => 120,  209 => 115,  196 => 105,  188 => 100,  180 => 95,  172 => 90,  147 => 68,  144 => 67,  135 => 66,  79 => 18,  75 => 16,  73 => 15,  70 => 14,  66 => 12,  64 => 11,  57 => 7,  54 => 6,  45 => 5,  11 => 1,);
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
                    
                    {% if is_granted('ROLE_ADMIN') %}
            <h1>je suis ADMIN!!!!!!!</h1>
{% endif %}

                    {% if is_granted('ROLE_USER') %}
            <h1>je suis USER!!!!!!!</h1>
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
                        <theader>
                            {#{% if result is defined %}{% endif %}vérifie si la variable est définie sinon ne l'utilise pas ce qui permet d'éviter des erreur sur les page ou elle apparais#}
                                <h2>Résultats de :  <select placeholder=\"course\">
                                                    
                                                   {% for meeting in meetings %}
                                                    <option>{{ (meeting.name) }}                                                     
                                                   {% endfor %}
                                                    </select>
                                </h2>
                            <p>2017</p>
                        </theader>
                            
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
                        <br/>
                        <a href=\"{{ path('fos_user_registration_register') }}\">Inscription</a>
                        <br/>
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
