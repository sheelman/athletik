<?php

/* default/resultat.html.twig */
class __TwigTemplate_1bd08adafda9bfccfef9e818dedfd0b3b51c8953925099c4e9a5903e231ccce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/resultat.html.twig", 1);
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
        $__internal_ef8bae5d0efeaa1bea7a8fc19b0a5e6ce3b5329d17cf87a8365b08b79b3673f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8bae5d0efeaa1bea7a8fc19b0a5e6ce3b5329d17cf87a8365b08b79b3673f4->enter($__internal_ef8bae5d0efeaa1bea7a8fc19b0a5e6ce3b5329d17cf87a8365b08b79b3673f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/resultat.html.twig"));

        $__internal_0b3181ce1771d8e1aa868575c572509164c57afc5ed6cef3efe6614e3dd4127a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3181ce1771d8e1aa868575c572509164c57afc5ed6cef3efe6614e3dd4127a->enter($__internal_0b3181ce1771d8e1aa868575c572509164c57afc5ed6cef3efe6614e3dd4127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef8bae5d0efeaa1bea7a8fc19b0a5e6ce3b5329d17cf87a8365b08b79b3673f4->leave($__internal_ef8bae5d0efeaa1bea7a8fc19b0a5e6ce3b5329d17cf87a8365b08b79b3673f4_prof);

        
        $__internal_0b3181ce1771d8e1aa868575c572509164c57afc5ed6cef3efe6614e3dd4127a->leave($__internal_0b3181ce1771d8e1aa868575c572509164c57afc5ed6cef3efe6614e3dd4127a_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_610f584a57d690377fa77cde7b4655362f0b01e183115e5d7fff424423915170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610f584a57d690377fa77cde7b4655362f0b01e183115e5d7fff424423915170->enter($__internal_610f584a57d690377fa77cde7b4655362f0b01e183115e5d7fff424423915170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_c420954e7936d1978b847bd2c9795281d0529654ce43ed0f2bf0d4d3bbc69fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c420954e7936d1978b847bd2c9795281d0529654ce43ed0f2bf0d4d3bbc69fa5->enter($__internal_c420954e7936d1978b847bd2c9795281d0529654ce43ed0f2bf0d4d3bbc69fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_c420954e7936d1978b847bd2c9795281d0529654ce43ed0f2bf0d4d3bbc69fa5->leave($__internal_c420954e7936d1978b847bd2c9795281d0529654ce43ed0f2bf0d4d3bbc69fa5_prof);

        
        $__internal_610f584a57d690377fa77cde7b4655362f0b01e183115e5d7fff424423915170->leave($__internal_610f584a57d690377fa77cde7b4655362f0b01e183115e5d7fff424423915170_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_cb404a99a49cf3cd0131d5e2aa15ea54f7f34c5d31fb38f9cde7c20074dd433d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb404a99a49cf3cd0131d5e2aa15ea54f7f34c5d31fb38f9cde7c20074dd433d->enter($__internal_cb404a99a49cf3cd0131d5e2aa15ea54f7f34c5d31fb38f9cde7c20074dd433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_a85742109835cdf82d3b0b828e4ce8a559fdf8fcc2d99a49cf16cc7869966a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85742109835cdf82d3b0b828e4ce8a559fdf8fcc2d99a49cf16cc7869966a16->enter($__internal_a85742109835cdf82d3b0b828e4ce8a559fdf8fcc2d99a49cf16cc7869966a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-resultat\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_a85742109835cdf82d3b0b828e4ce8a559fdf8fcc2d99a49cf16cc7869966a16->leave($__internal_a85742109835cdf82d3b0b828e4ce8a559fdf8fcc2d99a49cf16cc7869966a16_prof);

        
        $__internal_cb404a99a49cf3cd0131d5e2aa15ea54f7f34c5d31fb38f9cde7c20074dd433d->leave($__internal_cb404a99a49cf3cd0131d5e2aa15ea54f7f34c5d31fb38f9cde7c20074dd433d_prof);

    }

    // line 11
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_b4ce6d79e5a9a22bd4431335bab5bb491af72b443ec9c5a35387949be581085b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ce6d79e5a9a22bd4431335bab5bb491af72b443ec9c5a35387949be581085b->enter($__internal_b4ce6d79e5a9a22bd4431335bab5bb491af72b443ec9c5a35387949be581085b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_1d680f7dcbc6ad03c32666da7cafa500f87ea1eebe54764e48aa8a077159fac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d680f7dcbc6ad03c32666da7cafa500f87ea1eebe54764e48aa8a077159fac8->enter($__internal_1d680f7dcbc6ad03c32666da7cafa500f87ea1eebe54764e48aa8a077159fac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

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
                                    <option placeholder=\"course\"></option>
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meetings"] ?? $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "                                             
                                        <option value=\"";
            // line 37
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
                                <br/>
                            ";
        // line 43
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 44
            echo "                                <a class=\"btn btn-success\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\" role=\"button\">Inscription comme coureur</a>
                                <a class=\"btn btn-warning\" href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscriptioncourse");
            echo "\" role=\"button\">Inscription a la course sélectionné</a> 
                            ";
        }
        // line 47
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "                                <a class=\"btn btn-danger\" href=\"#\" role=\"button\">Enregistrer les résultats</a>
                            ";
        }
        // line 50
        echo "                            
                        
                        
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
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["athletes"]) {
            // line 67
            echo "
                                    <tr>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "firstname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "lastname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "time", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "points", array()), "html", null, true);
            echo "</td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athletes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
                            </tbody>
                        </table>                       
                    </div>

                    <footer>
                        ";
        // line 83
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
        
        $__internal_1d680f7dcbc6ad03c32666da7cafa500f87ea1eebe54764e48aa8a077159fac8->leave($__internal_1d680f7dcbc6ad03c32666da7cafa500f87ea1eebe54764e48aa8a077159fac8_prof);

        
        $__internal_b4ce6d79e5a9a22bd4431335bab5bb491af72b443ec9c5a35387949be581085b->leave($__internal_b4ce6d79e5a9a22bd4431335bab5bb491af72b443ec9c5a35387949be581085b_prof);

    }

    public function getTemplateName()
    {
        return "default/resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 83,  218 => 76,  208 => 72,  204 => 71,  200 => 70,  196 => 69,  192 => 67,  188 => 66,  170 => 50,  166 => 48,  163 => 47,  158 => 45,  153 => 44,  151 => 43,  145 => 39,  125 => 37,  119 => 36,  94 => 14,  90 => 12,  81 => 11,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
                                    <option placeholder=\"course\"></option>
                                    {% for result in meetings %}                                             
                                        <option value=\"{{ result.id }}\" {% if selectedMeeting is not null %} {% if selectedMeeting.id == result.id %} selected=\"selected\" {% endif %} {% endif %}> {{ result.name }} <p>{{ result.date|date('d-m-Y') }}</p> </option>                                       
                                    {% endfor %}
                                </select>
                                
                            </form>
                                <br/>
                            {% if is_granted('ROLE_USER') %}
                                <a class=\"btn btn-success\" href=\"{{ path('inscription') }}\" role=\"button\">Inscription comme coureur</a>
                                <a class=\"btn btn-warning\" href=\"{{ path('inscriptioncourse') }}\" role=\"button\">Inscription a la course sélectionné</a> 
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') %}
                                <a class=\"btn btn-danger\" href=\"#\" role=\"button\">Enregistrer les résultats</a>
                            {% endif %}
                            
                        
                        
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
                                        <td>{{ athletes.time }}</td>
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
{%endblock%}", "default/resultat.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/resultat.html.twig");
    }
}
