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
        $__internal_a6fefb5a0ec824209c2a983b175e04736bdf8f8f61dccd820b66c517e7969c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fefb5a0ec824209c2a983b175e04736bdf8f8f61dccd820b66c517e7969c75->enter($__internal_a6fefb5a0ec824209c2a983b175e04736bdf8f8f61dccd820b66c517e7969c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $__internal_9103869e3117f6e6960cefb2396ccfe74335ae23c857faad84f138aa3d072a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9103869e3117f6e6960cefb2396ccfe74335ae23c857faad84f138aa3d072a9c->enter($__internal_9103869e3117f6e6960cefb2396ccfe74335ae23c857faad84f138aa3d072a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6fefb5a0ec824209c2a983b175e04736bdf8f8f61dccd820b66c517e7969c75->leave($__internal_a6fefb5a0ec824209c2a983b175e04736bdf8f8f61dccd820b66c517e7969c75_prof);

        
        $__internal_9103869e3117f6e6960cefb2396ccfe74335ae23c857faad84f138aa3d072a9c->leave($__internal_9103869e3117f6e6960cefb2396ccfe74335ae23c857faad84f138aa3d072a9c_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_108d04ca5c8080fef4ba6c30eea96274225d16a34d3f30d9839ec2f48157eb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108d04ca5c8080fef4ba6c30eea96274225d16a34d3f30d9839ec2f48157eb93->enter($__internal_108d04ca5c8080fef4ba6c30eea96274225d16a34d3f30d9839ec2f48157eb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_ec35617413db6332169045f3d591a618498c063855d4283cbf3c60188a3ba008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec35617413db6332169045f3d591a618498c063855d4283cbf3c60188a3ba008->enter($__internal_ec35617413db6332169045f3d591a618498c063855d4283cbf3c60188a3ba008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_ec35617413db6332169045f3d591a618498c063855d4283cbf3c60188a3ba008->leave($__internal_ec35617413db6332169045f3d591a618498c063855d4283cbf3c60188a3ba008_prof);

        
        $__internal_108d04ca5c8080fef4ba6c30eea96274225d16a34d3f30d9839ec2f48157eb93->leave($__internal_108d04ca5c8080fef4ba6c30eea96274225d16a34d3f30d9839ec2f48157eb93_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_d4003580e461fce52a8272b9a7cf89eb00cb37c1afa503da2867ad0a630e3822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4003580e461fce52a8272b9a7cf89eb00cb37c1afa503da2867ad0a630e3822->enter($__internal_d4003580e461fce52a8272b9a7cf89eb00cb37c1afa503da2867ad0a630e3822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_0b2258a4147b9999f43ec274b418034a423d0213dbb2978e69ab027229e532bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2258a4147b9999f43ec274b418034a423d0213dbb2978e69ab027229e532bb->enter($__internal_0b2258a4147b9999f43ec274b418034a423d0213dbb2978e69ab027229e532bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-resultat\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_0b2258a4147b9999f43ec274b418034a423d0213dbb2978e69ab027229e532bb->leave($__internal_0b2258a4147b9999f43ec274b418034a423d0213dbb2978e69ab027229e532bb_prof);

        
        $__internal_d4003580e461fce52a8272b9a7cf89eb00cb37c1afa503da2867ad0a630e3822->leave($__internal_d4003580e461fce52a8272b9a7cf89eb00cb37c1afa503da2867ad0a630e3822_prof);

    }

    // line 11
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_84c90252ed94fe10ac5376bb178a4d1d8745bbf6d845819d778e2c84242745d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c90252ed94fe10ac5376bb178a4d1d8745bbf6d845819d778e2c84242745d8->enter($__internal_84c90252ed94fe10ac5376bb178a4d1d8745bbf6d845819d778e2c84242745d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_01fa0263340927f2b05d0be3e715a15e270a77cba409e66eb2d22c68685d599c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fa0263340927f2b05d0be3e715a15e270a77cba409e66eb2d22c68685d599c->enter($__internal_01fa0263340927f2b05d0be3e715a15e270a77cba409e66eb2d22c68685d599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

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
        
        $__internal_01fa0263340927f2b05d0be3e715a15e270a77cba409e66eb2d22c68685d599c->leave($__internal_01fa0263340927f2b05d0be3e715a15e270a77cba409e66eb2d22c68685d599c_prof);

        
        $__internal_84c90252ed94fe10ac5376bb178a4d1d8745bbf6d845819d778e2c84242745d8->leave($__internal_84c90252ed94fe10ac5376bb178a4d1d8745bbf6d845819d778e2c84242745d8_prof);

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
