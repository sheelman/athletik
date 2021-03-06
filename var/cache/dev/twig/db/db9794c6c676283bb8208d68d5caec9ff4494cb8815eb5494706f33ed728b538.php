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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23aca59e58509d2ea87700483a311066baedd54b80ee090895f6f7ffa94aebc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23aca59e58509d2ea87700483a311066baedd54b80ee090895f6f7ffa94aebc8->enter($__internal_23aca59e58509d2ea87700483a311066baedd54b80ee090895f6f7ffa94aebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a06612063c99af93cb6e470775e1760688d887074567b6f982702a09988a858c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06612063c99af93cb6e470775e1760688d887074567b6f982702a09988a858c->enter($__internal_a06612063c99af93cb6e470775e1760688d887074567b6f982702a09988a858c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23aca59e58509d2ea87700483a311066baedd54b80ee090895f6f7ffa94aebc8->leave($__internal_23aca59e58509d2ea87700483a311066baedd54b80ee090895f6f7ffa94aebc8_prof);

        
        $__internal_a06612063c99af93cb6e470775e1760688d887074567b6f982702a09988a858c->leave($__internal_a06612063c99af93cb6e470775e1760688d887074567b6f982702a09988a858c_prof);

    }

    // line 5
    public function block_letter($context, array $blocks = array())
    {
        $__internal_575874b2eb2c521036c658bb1876c1720e2a88ee29623fb7d1b76c327cdda4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575874b2eb2c521036c658bb1876c1720e2a88ee29623fb7d1b76c327cdda4f9->enter($__internal_575874b2eb2c521036c658bb1876c1720e2a88ee29623fb7d1b76c327cdda4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        $__internal_52bc9ad9cff76c2ac387062cf77d48bcc3e0c2631d0bb217ef98d11ac110b4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bc9ad9cff76c2ac387062cf77d48bcc3e0c2631d0bb217ef98d11ac110b4fa->enter($__internal_52bc9ad9cff76c2ac387062cf77d48bcc3e0c2631d0bb217ef98d11ac110b4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "letter"));

        // line 6
        echo "    <!-- Lettre du président section -->
    <section id=\"lettre\" class=\"section-style\" data-background-image=\"";
        // line 7
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
        
        $__internal_52bc9ad9cff76c2ac387062cf77d48bcc3e0c2631d0bb217ef98d11ac110b4fa->leave($__internal_52bc9ad9cff76c2ac387062cf77d48bcc3e0c2631d0bb217ef98d11ac110b4fa_prof);

        
        $__internal_575874b2eb2c521036c658bb1876c1720e2a88ee29623fb7d1b76c327cdda4f9->leave($__internal_575874b2eb2c521036c658bb1876c1720e2a88ee29623fb7d1b76c327cdda4f9_prof);

    }

    // line 59
    public function block_portfolio($context, array $blocks = array())
    {
        $__internal_f6948d6a36b1dd7bb00f0ff04c909973e84145e7024f21a02009b5d51b0fbcbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6948d6a36b1dd7bb00f0ff04c909973e84145e7024f21a02009b5d51b0fbcbb->enter($__internal_f6948d6a36b1dd7bb00f0ff04c909973e84145e7024f21a02009b5d51b0fbcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_dabc87faf1eb405df179a808b11b1f0c1853129d8e89f93993abcfc508a1909e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabc87faf1eb405df179a808b11b1f0c1853129d8e89f93993abcfc508a1909e->enter($__internal_dabc87faf1eb405df179a808b11b1f0c1853129d8e89f93993abcfc508a1909e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "portfolio"));

        // line 60
        echo "    <!-- Portfolio Us Section -->
    <section id=\"portfolio\" class=\"section-style\" data-background-image=\"";
        // line 61
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
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/race-932254_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"images/portfolio/runner-864859_640.jpg\">
                            <img class=\"img-responsive\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/runner-864859_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"images/portfolio/running-78192_640.jpg\">
                            <img class=\"img-responsive\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/running-78192_640.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"images/portfolio/running-942110_640.jpg\">
                            <img class=\"img-responsive\" src=\"";
        // line 98
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
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 123
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
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://placehold.it/750x450"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-3 portfolio-item\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"";
        // line 148
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
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->
            </div><!-- /.container -->
        </div><!-- /.pattern -->
    </section><!-- /#portfolio -->
    <!-- Portfolio Section End -->
";
        
        $__internal_dabc87faf1eb405df179a808b11b1f0c1853129d8e89f93993abcfc508a1909e->leave($__internal_dabc87faf1eb405df179a808b11b1f0c1853129d8e89f93993abcfc508a1909e_prof);

        
        $__internal_f6948d6a36b1dd7bb00f0ff04c909973e84145e7024f21a02009b5d51b0fbcbb->leave($__internal_f6948d6a36b1dd7bb00f0ff04c909973e84145e7024f21a02009b5d51b0fbcbb_prof);

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
        return array (  249 => 148,  241 => 143,  233 => 138,  225 => 133,  212 => 123,  204 => 118,  196 => 113,  188 => 108,  175 => 98,  167 => 93,  159 => 88,  151 => 83,  126 => 61,  123 => 60,  114 => 59,  53 => 7,  50 => 6,  41 => 5,  11 => 1,);
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
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->
            </div><!-- /.container -->
        </div><!-- /.pattern -->
    </section><!-- /#portfolio -->
    <!-- Portfolio Section End -->
{%endblock%}", "default/index.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/index.html.twig");
    }
}
