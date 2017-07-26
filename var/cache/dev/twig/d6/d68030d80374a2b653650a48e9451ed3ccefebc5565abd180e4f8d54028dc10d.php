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
        $__internal_1deec4dcd6ccc5bb78ab5ed5eaeb1e5897c8b477d2753272c224a9dca4b8d5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1deec4dcd6ccc5bb78ab5ed5eaeb1e5897c8b477d2753272c224a9dca4b8d5df->enter($__internal_1deec4dcd6ccc5bb78ab5ed5eaeb1e5897c8b477d2753272c224a9dca4b8d5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $__internal_53caf723f967e305a6d1e556f3f19271ac7748033383e898b88264e969109f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53caf723f967e305a6d1e556f3f19271ac7748033383e898b88264e969109f61->enter($__internal_53caf723f967e305a6d1e556f3f19271ac7748033383e898b88264e969109f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1deec4dcd6ccc5bb78ab5ed5eaeb1e5897c8b477d2753272c224a9dca4b8d5df->leave($__internal_1deec4dcd6ccc5bb78ab5ed5eaeb1e5897c8b477d2753272c224a9dca4b8d5df_prof);

        
        $__internal_53caf723f967e305a6d1e556f3f19271ac7748033383e898b88264e969109f61->leave($__internal_53caf723f967e305a6d1e556f3f19271ac7748033383e898b88264e969109f61_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_b87543c9e4b81db1037173e5a0596981b81fdef22152cfa10809538d3adcf43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87543c9e4b81db1037173e5a0596981b81fdef22152cfa10809538d3adcf43d->enter($__internal_b87543c9e4b81db1037173e5a0596981b81fdef22152cfa10809538d3adcf43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_42dec4d1bd0d16589df46fff5ee1940ebcae89db0c74464bd1b6a5efd227c712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dec4d1bd0d16589df46fff5ee1940ebcae89db0c74464bd1b6a5efd227c712->enter($__internal_42dec4d1bd0d16589df46fff5ee1940ebcae89db0c74464bd1b6a5efd227c712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_42dec4d1bd0d16589df46fff5ee1940ebcae89db0c74464bd1b6a5efd227c712->leave($__internal_42dec4d1bd0d16589df46fff5ee1940ebcae89db0c74464bd1b6a5efd227c712_prof);

        
        $__internal_b87543c9e4b81db1037173e5a0596981b81fdef22152cfa10809538d3adcf43d->leave($__internal_b87543c9e4b81db1037173e5a0596981b81fdef22152cfa10809538d3adcf43d_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_b352274a709d1bb2c590261debb1cc26c6fcb4013eb5a4bce138053351e267c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b352274a709d1bb2c590261debb1cc26c6fcb4013eb5a4bce138053351e267c2->enter($__internal_b352274a709d1bb2c590261debb1cc26c6fcb4013eb5a4bce138053351e267c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_bd2167abc1b5a45242008aa12ec0814614234b5ca25cd6ef1106571ec58289fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2167abc1b5a45242008aa12ec0814614234b5ca25cd6ef1106571ec58289fd->enter($__internal_bd2167abc1b5a45242008aa12ec0814614234b5ca25cd6ef1106571ec58289fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-resultat\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_bd2167abc1b5a45242008aa12ec0814614234b5ca25cd6ef1106571ec58289fd->leave($__internal_bd2167abc1b5a45242008aa12ec0814614234b5ca25cd6ef1106571ec58289fd_prof);

        
        $__internal_b352274a709d1bb2c590261debb1cc26c6fcb4013eb5a4bce138053351e267c2->leave($__internal_b352274a709d1bb2c590261debb1cc26c6fcb4013eb5a4bce138053351e267c2_prof);

    }

    // line 11
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_7b76f0440f11c218621802eddf3ac2f2241955dd9fbd9b39d5411fe6893d5c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b76f0440f11c218621802eddf3ac2f2241955dd9fbd9b39d5411fe6893d5c4d->enter($__internal_7b76f0440f11c218621802eddf3ac2f2241955dd9fbd9b39d5411fe6893d5c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_114f56d0f0b041675367e92203e79f16f73c3462894f1c8b7a2661017d3f69cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114f56d0f0b041675367e92203e79f16f73c3462894f1c8b7a2661017d3f69cb->enter($__internal_114f56d0f0b041675367e92203e79f16f73c3462894f1c8b7a2661017d3f69cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

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
            echo "</option>                                   
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                </select>
                            </form>
                        
                        <p>2017</p>
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
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["athletes"]) {
            // line 57
            echo "
                                    <tr>
                                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "firstname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "lastname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "time", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "points", array()), "html", null, true);
            echo "</td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athletes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                            </tbody>
                        </table>                       
                    </div>

                    <footer>
                        <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\" class=\"button alt\">Archive</a>
                    </footer>
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->


    </section><!-- /#resultat -->
    <!-- Résultat des courses Section End -->
";
        
        $__internal_114f56d0f0b041675367e92203e79f16f73c3462894f1c8b7a2661017d3f69cb->leave($__internal_114f56d0f0b041675367e92203e79f16f73c3462894f1c8b7a2661017d3f69cb_prof);

        
        $__internal_7b76f0440f11c218621802eddf3ac2f2241955dd9fbd9b39d5411fe6893d5c4d->leave($__internal_7b76f0440f11c218621802eddf3ac2f2241955dd9fbd9b39d5411fe6893d5c4d_prof);

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
        return array (  200 => 72,  192 => 66,  182 => 62,  178 => 61,  174 => 60,  170 => 59,  166 => 57,  162 => 56,  143 => 39,  125 => 37,  119 => 36,  94 => 14,  90 => 12,  81 => 11,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
                                        <option value=\"{{ result.id }}\" {% if selectedMeeting is not null %} {% if selectedMeeting.id == result.id %} selected=\"selected\" {% endif %} {% endif %}> {{ result.name }}</option>                                   
                                    {% endfor %}
                                </select>
                            </form>
                        
                        <p>2017</p>
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
                        <a href=\"{{ asset('/') }}\" class=\"button alt\">Archive</a>
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
