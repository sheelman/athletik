<?php

/* :default:classement.html.twig */
class __TwigTemplate_aacfe9b6bdf83d72e6fd875d4d8f7d9f1961a06f4730100fc4d81a386c263406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:classement.html.twig", 1);
        $this->blocks = array(
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'classement' => array($this, 'block_classement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad8a3fcd51d07e305e86cc9fa6fd7f5a32e89fce710f26b027d1826c4fb45622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8a3fcd51d07e305e86cc9fa6fd7f5a32e89fce710f26b027d1826c4fb45622->enter($__internal_ad8a3fcd51d07e305e86cc9fa6fd7f5a32e89fce710f26b027d1826c4fb45622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $__internal_dc9326a3bd561f507e613c200c93200ec609820f9d9b22739e5aaa5252aa5d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9326a3bd561f507e613c200c93200ec609820f9d9b22739e5aaa5252aa5d7d->enter($__internal_dc9326a3bd561f507e613c200c93200ec609820f9d9b22739e5aaa5252aa5d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad8a3fcd51d07e305e86cc9fa6fd7f5a32e89fce710f26b027d1826c4fb45622->leave($__internal_ad8a3fcd51d07e305e86cc9fa6fd7f5a32e89fce710f26b027d1826c4fb45622_prof);

        
        $__internal_dc9326a3bd561f507e613c200c93200ec609820f9d9b22739e5aaa5252aa5d7d->leave($__internal_dc9326a3bd561f507e613c200c93200ec609820f9d9b22739e5aaa5252aa5d7d_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_1fd613c4d94a473cd7de21d97a8678f24e7414795384ff29a293e4b508b7c412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd613c4d94a473cd7de21d97a8678f24e7414795384ff29a293e4b508b7c412->enter($__internal_1fd613c4d94a473cd7de21d97a8678f24e7414795384ff29a293e4b508b7c412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_66b65142efbbbd2e62a48385a28a20f19159e8cb9d724b527b280a67ca4fb246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b65142efbbbd2e62a48385a28a20f19159e8cb9d724b527b280a67ca4fb246->enter($__internal_66b65142efbbbd2e62a48385a28a20f19159e8cb9d724b527b280a67ca4fb246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_66b65142efbbbd2e62a48385a28a20f19159e8cb9d724b527b280a67ca4fb246->leave($__internal_66b65142efbbbd2e62a48385a28a20f19159e8cb9d724b527b280a67ca4fb246_prof);

        
        $__internal_1fd613c4d94a473cd7de21d97a8678f24e7414795384ff29a293e4b508b7c412->leave($__internal_1fd613c4d94a473cd7de21d97a8678f24e7414795384ff29a293e4b508b7c412_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_86acf6c9b72e413db15e4e4f63ea6b2b1202ad8c99d5f728852724dbc6782411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86acf6c9b72e413db15e4e4f63ea6b2b1202ad8c99d5f728852724dbc6782411->enter($__internal_86acf6c9b72e413db15e4e4f63ea6b2b1202ad8c99d5f728852724dbc6782411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_6f55c853d3681efda33a892a7b164c71aff4f567d7276be3386a4218bb539a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f55c853d3681efda33a892a7b164c71aff4f567d7276be3386a4218bb539a18->enter($__internal_6f55c853d3681efda33a892a7b164c71aff4f567d7276be3386a4218bb539a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_6f55c853d3681efda33a892a7b164c71aff4f567d7276be3386a4218bb539a18->leave($__internal_6f55c853d3681efda33a892a7b164c71aff4f567d7276be3386a4218bb539a18_prof);

        
        $__internal_86acf6c9b72e413db15e4e4f63ea6b2b1202ad8c99d5f728852724dbc6782411->leave($__internal_86acf6c9b72e413db15e4e4f63ea6b2b1202ad8c99d5f728852724dbc6782411_prof);

    }

    // line 11
    public function block_classement($context, array $blocks = array())
    {
        $__internal_e71e65a9e03bae06df89ae4bf3d29523f8719ed20d4f5ca1fdd96299c848a141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71e65a9e03bae06df89ae4bf3d29523f8719ed20d4f5ca1fdd96299c848a141->enter($__internal_e71e65a9e03bae06df89ae4bf3d29523f8719ed20d4f5ca1fdd96299c848a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_ed3789a275eb185d993545434bfacd130349b7c8876beb83c61b71136d2fcf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3789a275eb185d993545434bfacd130349b7c8876beb83c61b71136d2fcf98->enter($__internal_ed3789a275eb185d993545434bfacd130349b7c8876beb83c61b71136d2fcf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        // line 12
        echo "
    <!-- Classement général Section -->
    <section id=\"classement\" class=\"section-style\" data-background-image=\"";
        // line 14
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
                        <h2>Classement Général</h2>
                        <p>2017</p>
                    </header>
                    <div class=\"content\">
                        <table class=\"table table-inverse\">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Resultat</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classement"] ?? $this->getContext($context, "classement")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 46
            echo "
                                    <tr>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "firstname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "lastname", array()), "html", null, true);
            echo "</td>                                       
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "total", array()), "html", null, true);
            echo "</td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                            </tbody>
                        </table> 
                    </div>
                    <footer>
                        <a href=\"";
        // line 59
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
        
        $__internal_ed3789a275eb185d993545434bfacd130349b7c8876beb83c61b71136d2fcf98->leave($__internal_ed3789a275eb185d993545434bfacd130349b7c8876beb83c61b71136d2fcf98_prof);

        
        $__internal_e71e65a9e03bae06df89ae4bf3d29523f8719ed20d4f5ca1fdd96299c848a141->leave($__internal_e71e65a9e03bae06df89ae4bf3d29523f8719ed20d4f5ca1fdd96299c848a141_prof);

    }

    public function getTemplateName()
    {
        return ":default:classement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 59,  154 => 54,  144 => 50,  140 => 49,  136 => 48,  132 => 46,  128 => 45,  94 => 14,  90 => 12,  81 => 11,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block timer %}{%endblock%}

{% block fin %}
                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
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
                        <h2>Classement Général</h2>
                        <p>2017</p>
                    </header>
                    <div class=\"content\">
                        <table class=\"table table-inverse\">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Resultat</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for result in classement %}

                                    <tr>
                                        <td>{{ result.firstname }}</td>
                                        <td>{{ result.lastname }}</td>                                       
                                        <td>{{ result.total }}</td>
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
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
{%endblock%}", ":default:classement.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/classement.html.twig");
    }
}
