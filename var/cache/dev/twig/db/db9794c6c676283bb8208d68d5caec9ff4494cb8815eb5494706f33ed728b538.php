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
        $__internal_6f96e879b958edb43cf707475124d2f2eb21f591640570e2bb86f0ec9d4c850d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f96e879b958edb43cf707475124d2f2eb21f591640570e2bb86f0ec9d4c850d->enter($__internal_6f96e879b958edb43cf707475124d2f2eb21f591640570e2bb86f0ec9d4c850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_99b020b78f0524541fb97e9c1145e917ecc7438862c17fb4fa898f330a3eec0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b020b78f0524541fb97e9c1145e917ecc7438862c17fb4fa898f330a3eec0b->enter($__internal_99b020b78f0524541fb97e9c1145e917ecc7438862c17fb4fa898f330a3eec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f96e879b958edb43cf707475124d2f2eb21f591640570e2bb86f0ec9d4c850d->leave($__internal_6f96e879b958edb43cf707475124d2f2eb21f591640570e2bb86f0ec9d4c850d_prof);

        
        $__internal_99b020b78f0524541fb97e9c1145e917ecc7438862c17fb4fa898f330a3eec0b->leave($__internal_99b020b78f0524541fb97e9c1145e917ecc7438862c17fb4fa898f330a3eec0b_prof);

    }

    // line 5
    public function block_letter($context, array $blocks = array())
    {
        $__internal_28b68899615d0bdbf206a952543140dd418f73b3e41e46e3d655a510184dd5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b68899615d0bdbf206a952543140dd418f73b3e41e46e3d655a510184dd5d3->enter($__internal_28b68899615d0bdbf206a952543140dd418f73b3e41e46e3d655a510184dd5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_c17b87263fc1f8522e1350d47f977eaca68318f2fdfed7ac9828d00c1579c95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17b87263fc1f8522e1350d47f977eaca68318f2fdfed7ac9828d00c1579c95e->enter($__internal_c17b87263fc1f8522e1350d47f977eaca68318f2fdfed7ac9828d00c1579c95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

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
        
        $__internal_c17b87263fc1f8522e1350d47f977eaca68318f2fdfed7ac9828d00c1579c95e->leave($__internal_c17b87263fc1f8522e1350d47f977eaca68318f2fdfed7ac9828d00c1579c95e_prof);

        
        $__internal_28b68899615d0bdbf206a952543140dd418f73b3e41e46e3d655a510184dd5d3->leave($__internal_28b68899615d0bdbf206a952543140dd418f73b3e41e46e3d655a510184dd5d3_prof);

    }

    // line 66
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_cce64ed949c29463ac918c706be87346984d4bea4e6d20d54e7da5c009043078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce64ed949c29463ac918c706be87346984d4bea4e6d20d54e7da5c009043078->enter($__internal_cce64ed949c29463ac918c706be87346984d4bea4e6d20d54e7da5c009043078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_e9dc4c248a77d9a1670c956fde965afff05834e42416fd0ecd46375c9b344fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9dc4c248a77d9a1670c956fde965afff05834e42416fd0ecd46375c9b344fe8->enter($__internal_e9dc4c248a77d9a1670c956fde965afff05834e42416fd0ecd46375c9b344fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

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
        
        $__internal_e9dc4c248a77d9a1670c956fde965afff05834e42416fd0ecd46375c9b344fe8->leave($__internal_e9dc4c248a77d9a1670c956fde965afff05834e42416fd0ecd46375c9b344fe8_prof);

        
        $__internal_cce64ed949c29463ac918c706be87346984d4bea4e6d20d54e7da5c009043078->leave($__internal_cce64ed949c29463ac918c706be87346984d4bea4e6d20d54e7da5c009043078_prof);

    }

    // line 201
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_9a83e15203acf0c2d7e4b05bcd8c02ce68f5ba05edf80787107283b6f76cea58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a83e15203acf0c2d7e4b05bcd8c02ce68f5ba05edf80787107283b6f76cea58->enter($__internal_9a83e15203acf0c2d7e4b05bcd8c02ce68f5ba05edf80787107283b6f76cea58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_1e9d8ef1a13f318c26f56d06cf2f23715d79469f76099bbc66fd30086c52b012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9d8ef1a13f318c26f56d06cf2f23715d79469f76099bbc66fd30086c52b012->enter($__internal_1e9d8ef1a13f318c26f56d06cf2f23715d79469f76099bbc66fd30086c52b012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

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
        echo "                                <h2>Résultats de : 
                                    <form>
                                        <select name=\"meeting\"  onchange=\"this.form.submit()\">
                                                <option placeholder=\"course\"></option>
                                            ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meetings"] ?? $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "                                             
                                                <option value=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
            echo "\" ";
            if ( !(null === ($context["selectedMeeting"] ?? $this->getContext($context, "selectedMeeting")))) {
                echo " ";
                if (($this->getAttribute(($context["selectedMeeting"] ?? $this->getContext($context, "selectedMeeting")), "id", array()) == $this->getAttribute($context["result"], "id", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo " ";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", array()), "html", null, true);
            echo "</option>                                   
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                                        </select>
                                    </form>
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
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["athletes"]) {
            // line 248
            echo "                                
                                <tr>
                                    <th scope=\"row\"></th>
                                    <td>";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "firstname", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "lastname", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "time", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "points", array()), "html", null, true);
            echo "</td>
                                </tr>
                                
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athletes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "                            
                            </tbody>
                        </table>                       
                        </div>
                        
                        <footer>
                            <a href=\"";
        // line 264
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
        
        $__internal_1e9d8ef1a13f318c26f56d06cf2f23715d79469f76099bbc66fd30086c52b012->leave($__internal_1e9d8ef1a13f318c26f56d06cf2f23715d79469f76099bbc66fd30086c52b012_prof);

        
        $__internal_9a83e15203acf0c2d7e4b05bcd8c02ce68f5ba05edf80787107283b6f76cea58->leave($__internal_9a83e15203acf0c2d7e4b05bcd8c02ce68f5ba05edf80787107283b6f76cea58_prof);

    }

    // line 280
    public function block_classement($context, array $blocks = array())
    {
        $__internal_8264fde41e2684432ebaa5cacffd7e0e1f51b496544fb87a49b214d218235955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8264fde41e2684432ebaa5cacffd7e0e1f51b496544fb87a49b214d218235955->enter($__internal_8264fde41e2684432ebaa5cacffd7e0e1f51b496544fb87a49b214d218235955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_19682d50af7d02db2850c640552ee53abc5ea985b348eb96326563352f4e005d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19682d50af7d02db2850c640552ee53abc5ea985b348eb96326563352f4e005d->enter($__internal_19682d50af7d02db2850c640552ee53abc5ea985b348eb96326563352f4e005d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        // line 281
        echo "    

    
        <!-- Classement général Section -->
        <section id=\"classement\" class=\"section-style\" data-background-image=\"";
        // line 285
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
        // line 310
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
        
        $__internal_19682d50af7d02db2850c640552ee53abc5ea985b348eb96326563352f4e005d->leave($__internal_19682d50af7d02db2850c640552ee53abc5ea985b348eb96326563352f4e005d_prof);

        
        $__internal_8264fde41e2684432ebaa5cacffd7e0e1f51b496544fb87a49b214d218235955->leave($__internal_8264fde41e2684432ebaa5cacffd7e0e1f51b496544fb87a49b214d218235955_prof);

    }

    // line 324
    public function block_conexion_switcher($context, array $blocks = array())
    {
        $__internal_2ada27f2b81e7945d60803194e6b0479181d86841e2652f52958ead25fb7687d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ada27f2b81e7945d60803194e6b0479181d86841e2652f52958ead25fb7687d->enter($__internal_2ada27f2b81e7945d60803194e6b0479181d86841e2652f52958ead25fb7687d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        $__internal_478c78a821206ad2d3c4912e32004305cb64c8ee95fc6f150b1afe8aedcf3a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478c78a821206ad2d3c4912e32004305cb64c8ee95fc6f150b1afe8aedcf3a4e->enter($__internal_478c78a821206ad2d3c4912e32004305cb64c8ee95fc6f150b1afe8aedcf3a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion_switcher"));

        echo "               
            <!-- conexion Switcher  -->
            <section id=\"conexion\">
                <div>

                        <h3>Conexion</h3>
                        
                        <div class=\"login\">
                            ";
        // line 332
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 333
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                <a href=\"";
            // line 334
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 335
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        } else {
            // line 338
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 340
        echo "                        </div>

                    ";
        // line 342
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 343
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 344
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 345
                    echo "                                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                    ";
                    // line 346
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 349
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "                    ";
        }
        // line 351
        echo "
                        <div>
                            ";
        // line 353
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 355
        echo "                        </div>
                    <div class=\"menu\">
                        <a href=\"/#\">Home</a>
                        <br/>
                        <a href=\"";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
                        <br/>
                        <a href=\"";
        // line 361
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
        
        $__internal_478c78a821206ad2d3c4912e32004305cb64c8ee95fc6f150b1afe8aedcf3a4e->leave($__internal_478c78a821206ad2d3c4912e32004305cb64c8ee95fc6f150b1afe8aedcf3a4e_prof);

        
        $__internal_2ada27f2b81e7945d60803194e6b0479181d86841e2652f52958ead25fb7687d->leave($__internal_2ada27f2b81e7945d60803194e6b0479181d86841e2652f52958ead25fb7687d_prof);

    }

    // line 353
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37a267c458cc61b16e6a5fb80e231028354ff5532837ebdcd92bfc43ee569ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a267c458cc61b16e6a5fb80e231028354ff5532837ebdcd92bfc43ee569ecc->enter($__internal_37a267c458cc61b16e6a5fb80e231028354ff5532837ebdcd92bfc43ee569ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a0a4020134c42f17921b981215ac18e9ed9413f8b8fdef3e34504c7c4ee26b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0a4020134c42f17921b981215ac18e9ed9413f8b8fdef3e34504c7c4ee26b4->enter($__internal_0a0a4020134c42f17921b981215ac18e9ed9413f8b8fdef3e34504c7c4ee26b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 354
        echo "                            ";
        
        $__internal_0a0a4020134c42f17921b981215ac18e9ed9413f8b8fdef3e34504c7c4ee26b4->leave($__internal_0a0a4020134c42f17921b981215ac18e9ed9413f8b8fdef3e34504c7c4ee26b4_prof);

        
        $__internal_37a267c458cc61b16e6a5fb80e231028354ff5532837ebdcd92bfc43ee569ecc->leave($__internal_37a267c458cc61b16e6a5fb80e231028354ff5532837ebdcd92bfc43ee569ecc_prof);

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
        return array (  666 => 354,  657 => 353,  638 => 361,  633 => 359,  627 => 355,  625 => 353,  621 => 351,  618 => 350,  612 => 349,  603 => 346,  598 => 345,  593 => 344,  588 => 343,  586 => 342,  582 => 340,  574 => 338,  568 => 335,  564 => 334,  559 => 333,  557 => 332,  539 => 324,  515 => 310,  487 => 285,  481 => 281,  472 => 280,  447 => 264,  439 => 258,  429 => 254,  425 => 253,  421 => 252,  417 => 251,  412 => 248,  408 => 247,  388 => 229,  370 => 227,  364 => 226,  358 => 222,  337 => 203,  334 => 202,  325 => 201,  270 => 155,  262 => 150,  254 => 145,  246 => 140,  233 => 130,  225 => 125,  217 => 120,  209 => 115,  196 => 105,  188 => 100,  180 => 95,  172 => 90,  147 => 68,  144 => 67,  135 => 66,  79 => 18,  75 => 16,  73 => 15,  70 => 14,  66 => 12,  64 => 11,  57 => 7,  54 => 6,  45 => 5,  11 => 1,);
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
                          {#{% if result is defined %} {% endif %} vérifie si la variable est définie sinon ne l'utilise pas ce qui permet d'éviter des erreur sur les page ou elle apparais#}
                                <h2>Résultats de : 
                                    <form>
                                        <select name=\"meeting\"  onchange=\"this.form.submit()\">
                                                <option placeholder=\"course\"></option>
                                            {% for result in meetings %}                                             
                                                <option value=\"{{ result.id }}\" {% if selectedMeeting is not null %} {% if selectedMeeting.id == result.id %} selected=\"selected\" {% endif %} {% endif %}> {{ result.name }}</option>                                   
                                            {% endfor %}
                                        </select>
                                    </form>
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
                            {% for athletes in results %}
                                
                                <tr>
                                    <th scope=\"row\"></th>
                                    <td>{{ athletes.athlete.firstname }}</td>
                                    <td>{{ athletes.athlete.lastname }}</td>
                                    <td>{{ athletes.time }}</td>
                                    <td>{{ athletes.points }}</td>
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
