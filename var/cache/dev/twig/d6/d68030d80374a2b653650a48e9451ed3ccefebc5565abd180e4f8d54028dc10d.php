<?php

/* :default:resultat.html.twig */
class __TwigTemplate_1bd08adafda9bfccfef9e818dedfd0b3b51c8953925099c4e9a5903e231ccce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:resultat.html.twig", 1);
        $this->blocks = array(
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'resultat' => array($this, 'block_resultat'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c522b7dfdf980f678d59d5a79f96851283ef35e4df32e718a42258e37d1da344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c522b7dfdf980f678d59d5a79f96851283ef35e4df32e718a42258e37d1da344->enter($__internal_c522b7dfdf980f678d59d5a79f96851283ef35e4df32e718a42258e37d1da344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $__internal_8586da4947d7c85e206a39dfb4d2188bcd0110149012c7f4f2d312d73549557c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8586da4947d7c85e206a39dfb4d2188bcd0110149012c7f4f2d312d73549557c->enter($__internal_8586da4947d7c85e206a39dfb4d2188bcd0110149012c7f4f2d312d73549557c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c522b7dfdf980f678d59d5a79f96851283ef35e4df32e718a42258e37d1da344->leave($__internal_c522b7dfdf980f678d59d5a79f96851283ef35e4df32e718a42258e37d1da344_prof);

        
        $__internal_8586da4947d7c85e206a39dfb4d2188bcd0110149012c7f4f2d312d73549557c->leave($__internal_8586da4947d7c85e206a39dfb4d2188bcd0110149012c7f4f2d312d73549557c_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_12177cd09efa113297f473bb4c9643fd50bf68d8e2f1707dd62030307e2848ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12177cd09efa113297f473bb4c9643fd50bf68d8e2f1707dd62030307e2848ea->enter($__internal_12177cd09efa113297f473bb4c9643fd50bf68d8e2f1707dd62030307e2848ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_f9c695aefe7fef310262be2558d962f8ceafe8f38cd9a0068f721ea186698618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c695aefe7fef310262be2558d962f8ceafe8f38cd9a0068f721ea186698618->enter($__internal_f9c695aefe7fef310262be2558d962f8ceafe8f38cd9a0068f721ea186698618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_f9c695aefe7fef310262be2558d962f8ceafe8f38cd9a0068f721ea186698618->leave($__internal_f9c695aefe7fef310262be2558d962f8ceafe8f38cd9a0068f721ea186698618_prof);

        
        $__internal_12177cd09efa113297f473bb4c9643fd50bf68d8e2f1707dd62030307e2848ea->leave($__internal_12177cd09efa113297f473bb4c9643fd50bf68d8e2f1707dd62030307e2848ea_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_b0ec7f5bd6b391d47acbbaaeadfac8eec795cd48908e4da79968e1e6c1fd6c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ec7f5bd6b391d47acbbaaeadfac8eec795cd48908e4da79968e1e6c1fd6c1b->enter($__internal_b0ec7f5bd6b391d47acbbaaeadfac8eec795cd48908e4da79968e1e6c1fd6c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_5b02bdfe5cb2c603f17b29aba84106d57bee1fe93c2407408960fadf99bd03cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b02bdfe5cb2c603f17b29aba84106d57bee1fe93c2407408960fadf99bd03cf->enter($__internal_5b02bdfe5cb2c603f17b29aba84106d57bee1fe93c2407408960fadf99bd03cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-resultat\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_5b02bdfe5cb2c603f17b29aba84106d57bee1fe93c2407408960fadf99bd03cf->leave($__internal_5b02bdfe5cb2c603f17b29aba84106d57bee1fe93c2407408960fadf99bd03cf_prof);

        
        $__internal_b0ec7f5bd6b391d47acbbaaeadfac8eec795cd48908e4da79968e1e6c1fd6c1b->leave($__internal_b0ec7f5bd6b391d47acbbaaeadfac8eec795cd48908e4da79968e1e6c1fd6c1b_prof);

    }

    // line 11
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_d59e0196a7216ba9baad3135d7887cbee67464d5d8b04c93231d73eceb1fd97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59e0196a7216ba9baad3135d7887cbee67464d5d8b04c93231d73eceb1fd97a->enter($__internal_d59e0196a7216ba9baad3135d7887cbee67464d5d8b04c93231d73eceb1fd97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_70c784994e678cca0c264e95c30b073f747e685437c6900d5550f3650d965bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c784994e678cca0c264e95c30b073f747e685437c6900d5550f3650d965bc8->enter($__internal_70c784994e678cca0c264e95c30b073f747e685437c6900d5550f3650d965bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 12
        echo "
    <!-- Résultat des courses Section -->
    <section id=\"resultat\" class=\"section-style\" data-background-image=\"";
        // line 14
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
                        <h2>Résultats de :</h2> 
                            <form>
                                <select name=\"meeting\"  onchange=\"this.form.submit()\">
                                    <option name =\"Sectionnez\" placeholder=\"course\"></option>
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meetings"] ?? $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 37
            echo "                                            <option value=\"";
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
            echo " <p>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</p> </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                </select>
                                
                            </form>

                            
                        
                    </theader>

                    <div class=\"content\">
                        <table class=\"table table-inverse\">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Temps</th>
                                    <th>Resultat</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["athletes"]) {
            // line 59
            echo "
                                    <tr>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "firstname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "lastname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["athletes"], "time", array()), 2), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "points", array()), "html", null, true);
            echo "</td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athletes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                            </tbody>
                        </table>                       
                    </div>

                    <footer>
                        ";
        // line 75
        echo "                    </footer>
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->


    </section><!-- /#resultat -->
    <!-- Résultat des courses Section End -->
";
        
        $__internal_70c784994e678cca0c264e95c30b073f747e685437c6900d5550f3650d965bc8->leave($__internal_70c784994e678cca0c264e95c30b073f747e685437c6900d5550f3650d965bc8_prof);

        
        $__internal_d59e0196a7216ba9baad3135d7887cbee67464d5d8b04c93231d73eceb1fd97a->leave($__internal_d59e0196a7216ba9baad3135d7887cbee67464d5d8b04c93231d73eceb1fd97a_prof);

    }

    public function getTemplateName()
    {
        return ":default:resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 75,  195 => 68,  185 => 64,  181 => 63,  177 => 62,  173 => 61,  169 => 59,  165 => 58,  144 => 39,  123 => 37,  119 => 36,  94 => 14,  90 => 12,  81 => 11,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
                            <a class=\"go-to-resultat\"><span></span></a>
                        </div><!-- /.next-section -->
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
                        <h2>Résultats de :</h2> 
                            <form>
                                <select name=\"meeting\"  onchange=\"this.form.submit()\">
                                    <option name =\"Sectionnez\" placeholder=\"course\"></option>
                                    {% for result in meetings %}
                                            <option value=\"{{ result.id }}\" {% if selectedMeeting is not null %} {% if selectedMeeting.id == result.id %} selected=\"selected\" {% endif %} {% endif %}> {{ result.name }} <p>{{ result.date|date('d-m-Y') }}</p> </option>
                                    {% endfor %}
                                </select>
                                
                            </form>

                            
                        
                    </theader>

                    <div class=\"content\">
                        <table class=\"table table-inverse\">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Temps</th>
                                    <th>Resultat</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for athletes in results %}

                                    <tr>
                                        <td>{{ athletes.athlete.firstname }}</td>
                                        <td>{{ athletes.athlete.lastname }}</td>
                                        <td>{{ athletes.time|round(2) }}</td>
                                        <td>{{ athletes.points }}</td>
                                    </tr>

                                {% endfor %}

                            </tbody>
                        </table>                       
                    </div>

                    <footer>
                        {#<a href=\"{{ asset('/') }}\" class=\"button alt\">Archive</a>#}
                    </footer>
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->


    </section><!-- /#resultat -->
    <!-- Résultat des courses Section End -->
{%endblock%}", ":default:resultat.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/resultat.html.twig");
    }
}
