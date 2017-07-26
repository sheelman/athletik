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
        $__internal_9b6b868b684c21aea52125b23f9c0c25c6fd4161de2ad07f2b695af9acd0ec86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6b868b684c21aea52125b23f9c0c25c6fd4161de2ad07f2b695af9acd0ec86->enter($__internal_9b6b868b684c21aea52125b23f9c0c25c6fd4161de2ad07f2b695af9acd0ec86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $__internal_d678da6d550343265e03d9faba43868e86db3c0ddf88a38f0b8a1f7d0a9d718d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d678da6d550343265e03d9faba43868e86db3c0ddf88a38f0b8a1f7d0a9d718d->enter($__internal_d678da6d550343265e03d9faba43868e86db3c0ddf88a38f0b8a1f7d0a9d718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b6b868b684c21aea52125b23f9c0c25c6fd4161de2ad07f2b695af9acd0ec86->leave($__internal_9b6b868b684c21aea52125b23f9c0c25c6fd4161de2ad07f2b695af9acd0ec86_prof);

        
        $__internal_d678da6d550343265e03d9faba43868e86db3c0ddf88a38f0b8a1f7d0a9d718d->leave($__internal_d678da6d550343265e03d9faba43868e86db3c0ddf88a38f0b8a1f7d0a9d718d_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_96797ed7012fbbe8ccd370b6a0505838c981132dbf21c47900765cca1e1d5427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96797ed7012fbbe8ccd370b6a0505838c981132dbf21c47900765cca1e1d5427->enter($__internal_96797ed7012fbbe8ccd370b6a0505838c981132dbf21c47900765cca1e1d5427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_f6bc81c59347c66cca525f27db0825415d7fe197a8ec4cc57b1a13f26bd36d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bc81c59347c66cca525f27db0825415d7fe197a8ec4cc57b1a13f26bd36d49->enter($__internal_f6bc81c59347c66cca525f27db0825415d7fe197a8ec4cc57b1a13f26bd36d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_f6bc81c59347c66cca525f27db0825415d7fe197a8ec4cc57b1a13f26bd36d49->leave($__internal_f6bc81c59347c66cca525f27db0825415d7fe197a8ec4cc57b1a13f26bd36d49_prof);

        
        $__internal_96797ed7012fbbe8ccd370b6a0505838c981132dbf21c47900765cca1e1d5427->leave($__internal_96797ed7012fbbe8ccd370b6a0505838c981132dbf21c47900765cca1e1d5427_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_b44608a39cee413dd06ab461f26d3fcbc4c449b716afb0973bdd8ad74be3dfe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44608a39cee413dd06ab461f26d3fcbc4c449b716afb0973bdd8ad74be3dfe6->enter($__internal_b44608a39cee413dd06ab461f26d3fcbc4c449b716afb0973bdd8ad74be3dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_842b3b5a1e7c5e8000629edf9bdfe384ea5ec5ff99085f769a8986456d914a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842b3b5a1e7c5e8000629edf9bdfe384ea5ec5ff99085f769a8986456d914a32->enter($__internal_842b3b5a1e7c5e8000629edf9bdfe384ea5ec5ff99085f769a8986456d914a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-resultat\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_842b3b5a1e7c5e8000629edf9bdfe384ea5ec5ff99085f769a8986456d914a32->leave($__internal_842b3b5a1e7c5e8000629edf9bdfe384ea5ec5ff99085f769a8986456d914a32_prof);

        
        $__internal_b44608a39cee413dd06ab461f26d3fcbc4c449b716afb0973bdd8ad74be3dfe6->leave($__internal_b44608a39cee413dd06ab461f26d3fcbc4c449b716afb0973bdd8ad74be3dfe6_prof);

    }

    // line 11
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_57981c89a3722a1665ba1c41bbb7a63e814c856f96b419c69e018cc3671602c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57981c89a3722a1665ba1c41bbb7a63e814c856f96b419c69e018cc3671602c4->enter($__internal_57981c89a3722a1665ba1c41bbb7a63e814c856f96b419c69e018cc3671602c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_be4503d066b0a1f63620823add2f2c825b70abd77f69a502a347e3455e497ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4503d066b0a1f63620823add2f2c825b70abd77f69a502a347e3455e497ffb->enter($__internal_be4503d066b0a1f63620823add2f2c825b70abd77f69a502a347e3455e497ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

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
        $context["i"] = 0;
        // line 37
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meetings"] ?? $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 38
            echo "                                        ";
            if ((($context["i"] ?? $this->getContext($context, "i")) == 0)) {
                // line 39
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
            // line 41
            echo "                                        ";
            if ((($context["i"] ?? $this->getContext($context, "i")) != 0)) {
                // line 42
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "\" ";
                if ( !(null === ($context["selectedMeeting"] ?? $this->getContext($context, "selectedMeeting")))) {
                    echo " ";
                    if (($this->getAttribute(($context["selectedMeeting"] ?? $this->getContext($context, "selectedMeeting")), "id", array()) == $this->getAttribute($context["result"], "id", array()))) {
                        echo " ";
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
            // line 44
            echo "                                    ";
            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
            // line 45
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                </select>
                                
                            </form>

                            
                        ";
        // line 51
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "                                <a class=\"btn btn-danger\" href=\"#\" role=\"button\">Enregistrer les résultats</a>
                            ";
        }
        // line 54
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
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["athletes"]) {
            // line 69
            echo "
                                    <tr>
                                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "firstname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "lastname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "time", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "points", array()), "html", null, true);
            echo "</td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athletes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
                            </tbody>
                        </table>                       
                    </div>

                    <footer>
                        ";
        // line 85
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
        
        $__internal_be4503d066b0a1f63620823add2f2c825b70abd77f69a502a347e3455e497ffb->leave($__internal_be4503d066b0a1f63620823add2f2c825b70abd77f69a502a347e3455e497ffb_prof);

        
        $__internal_57981c89a3722a1665ba1c41bbb7a63e814c856f96b419c69e018cc3671602c4->leave($__internal_57981c89a3722a1665ba1c41bbb7a63e814c856f96b419c69e018cc3671602c4_prof);

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
        return array (  244 => 85,  236 => 78,  226 => 74,  222 => 73,  218 => 72,  214 => 71,  210 => 69,  206 => 68,  190 => 54,  186 => 52,  184 => 51,  177 => 46,  171 => 45,  168 => 44,  150 => 42,  147 => 41,  129 => 39,  126 => 38,  121 => 37,  119 => 36,  94 => 14,  90 => 12,  81 => 11,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
                                    {% set i=0 %}
                                    {% for result in meetings %}
                                        {% if i == 0 %}
                                            <option value=\"{{ result.id }}\" {% if selectedMeeting is not null %} {% if selectedMeeting.id == result.id %} selected=\"selected\" {% endif %} {% endif %}> {{ result.name }} <p>{{ result.date|date('d-m-Y') }}</p> </option>
                                        {% endif %}
                                        {% if i != 0 %}
                                            <option value=\"{{ result.id }}\" {% if selectedMeeting is not null %} {% if selectedMeeting.id == result.id %} {% endif %} {% endif %}> {{ result.name }} <p>{{ result.date|date('d-m-Y') }}</p> </option>
                                        {% endif %}
                                    {% set i=i+1 %}
                                    {% endfor %}
                                </select>
                                
                            </form>

                            
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
{%endblock%}", ":default:resultat.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/resultat.html.twig");
    }
}
