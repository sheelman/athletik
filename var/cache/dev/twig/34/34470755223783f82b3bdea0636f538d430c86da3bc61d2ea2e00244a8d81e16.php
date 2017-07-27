<?php

/* :default:calcul.html.twig */
class __TwigTemplate_390b13d206694776fbb7b7fbaf8d2d998cc8c17af2ff1b7e16bcbf29b8275d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:calcul.html.twig", 1);
        $this->blocks = array(
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_356e674a1cddb3f7a48945b07d416db86edf8ef65ef800bcf5259644cfb4add3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356e674a1cddb3f7a48945b07d416db86edf8ef65ef800bcf5259644cfb4add3->enter($__internal_356e674a1cddb3f7a48945b07d416db86edf8ef65ef800bcf5259644cfb4add3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:calcul.html.twig"));

        $__internal_1b6941cd44fc408e58ebc65ebcc3540cdbd25acf275b3b2fa0d7ed8d3f91b53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6941cd44fc408e58ebc65ebcc3540cdbd25acf275b3b2fa0d7ed8d3f91b53b->enter($__internal_1b6941cd44fc408e58ebc65ebcc3540cdbd25acf275b3b2fa0d7ed8d3f91b53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:calcul.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_356e674a1cddb3f7a48945b07d416db86edf8ef65ef800bcf5259644cfb4add3->leave($__internal_356e674a1cddb3f7a48945b07d416db86edf8ef65ef800bcf5259644cfb4add3_prof);

        
        $__internal_1b6941cd44fc408e58ebc65ebcc3540cdbd25acf275b3b2fa0d7ed8d3f91b53b->leave($__internal_1b6941cd44fc408e58ebc65ebcc3540cdbd25acf275b3b2fa0d7ed8d3f91b53b_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_dff275a1f525f4737779394c10e922da75200fb4188b186698edb1a190679f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff275a1f525f4737779394c10e922da75200fb4188b186698edb1a190679f3a->enter($__internal_dff275a1f525f4737779394c10e922da75200fb4188b186698edb1a190679f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_fa8fcd1e8a500edb7e97fcf421f8d7471bb305c879ec97b5e620f3de5881bf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8fcd1e8a500edb7e97fcf421f8d7471bb305c879ec97b5e620f3de5881bf56->enter($__internal_fa8fcd1e8a500edb7e97fcf421f8d7471bb305c879ec97b5e620f3de5881bf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_fa8fcd1e8a500edb7e97fcf421f8d7471bb305c879ec97b5e620f3de5881bf56->leave($__internal_fa8fcd1e8a500edb7e97fcf421f8d7471bb305c879ec97b5e620f3de5881bf56_prof);

        
        $__internal_dff275a1f525f4737779394c10e922da75200fb4188b186698edb1a190679f3a->leave($__internal_dff275a1f525f4737779394c10e922da75200fb4188b186698edb1a190679f3a_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_f988ab99e59da98386e9fe8a427d267ae0941496b15f55c97ec331e9784270da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f988ab99e59da98386e9fe8a427d267ae0941496b15f55c97ec331e9784270da->enter($__internal_f988ab99e59da98386e9fe8a427d267ae0941496b15f55c97ec331e9784270da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_4bf16e0e08e7cac58cf433f166a85791d6a40cfeda5b40de1f6b1f41e2cacc31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf16e0e08e7cac58cf433f166a85791d6a40cfeda5b40de1f6b1f41e2cacc31->enter($__internal_4bf16e0e08e7cac58cf433f166a85791d6a40cfeda5b40de1f6b1f41e2cacc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_4bf16e0e08e7cac58cf433f166a85791d6a40cfeda5b40de1f6b1f41e2cacc31->leave($__internal_4bf16e0e08e7cac58cf433f166a85791d6a40cfeda5b40de1f6b1f41e2cacc31_prof);

        
        $__internal_f988ab99e59da98386e9fe8a427d267ae0941496b15f55c97ec331e9784270da->leave($__internal_f988ab99e59da98386e9fe8a427d267ae0941496b15f55c97ec331e9784270da_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_9287b9fc0342cb4341cac0fba5f83b34fe86394735983bac9181c7f8bf8f616d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9287b9fc0342cb4341cac0fba5f83b34fe86394735983bac9181c7f8bf8f616d->enter($__internal_9287b9fc0342cb4341cac0fba5f83b34fe86394735983bac9181c7f8bf8f616d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_4343a0a0cf01594faa97fad5f4c4a2415856fd58768d58837d450519b5fad34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4343a0a0cf01594faa97fad5f4c4a2415856fd58768d58837d450519b5fad34d->enter($__internal_4343a0a0cf01594faa97fad5f4c4a2415856fd58768d58837d450519b5fad34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        // line 15
        echo "
    <!-- Classement général Section -->
    <section id=\"classement\" class=\"section-style\" data-background-image=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/#"), "html", null, true);
        echo "\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Enregistrement de résultats
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    MASTER ! 
                </h2><!-- /.Section-title  -->


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
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Points</th>
                                    <th>Temps</th>
                                    <th>Naissance</th>
                                    <th>Id Athlète</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["athletes"]) {
            // line 60
            echo "
                <tr>
                    <td id=\"lastname\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "lastname", array()), "html", null, true);
            echo "</td> 
                    <td id=\"firstname\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "firstname", array()), "html", null, true);
            echo "</td>
                    <td class=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "id", array()), "html", null, true);
            echo "\"class=\"points\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "points", array()), "html", null, true);
            echo "</td> 
                    <td id=\"time\"><input class=\"change\" placeholder=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["athletes"], "time", array()), 2), "html", null, true);
            echo "\"/> <button id=\"btnok\" type=\"button\" class=\"btn btn-danger\">Ok</button></td>
                    <td id=\"birthdate\"> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "birthdate", array()), "html", null, true);
            echo "</td> 
                    <td id=\"id\"> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "id", array()), "html", null, true);
            echo "</td>
                </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athletes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
                            </tbody>
                        </table>                       
                    </div>

                    <footer>
                        ";
        // line 78
        echo "                    </footer>
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
    
    <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/calcul.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4343a0a0cf01594faa97fad5f4c4a2415856fd58768d58837d450519b5fad34d->leave($__internal_4343a0a0cf01594faa97fad5f4c4a2415856fd58768d58837d450519b5fad34d_prof);

        
        $__internal_9287b9fc0342cb4341cac0fba5f83b34fe86394735983bac9181c7f8bf8f616d->leave($__internal_9287b9fc0342cb4341cac0fba5f83b34fe86394735983bac9181c7f8bf8f616d_prof);

    }

    public function getTemplateName()
    {
        return ":default:calcul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 91,  211 => 78,  203 => 71,  193 => 67,  189 => 66,  185 => 65,  179 => 64,  175 => 63,  171 => 62,  167 => 60,  163 => 59,  141 => 39,  120 => 37,  116 => 36,  94 => 17,  90 => 15,  81 => 14,  68 => 9,  59 => 8,  42 => 6,  11 => 1,);
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

{#{% if is_granted('ROLE_ADMIN') %}
{% endif %} // A mettre a l'endroit ou l'on veut protéger une partie de page en  admin sinon mettre la page entière dans /admin#}

{% block timer %}{%endblock%}

{% block fin %}
    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
{%endblock%}

{% block admin %}

    <!-- Classement général Section -->
    <section id=\"classement\" class=\"section-style\" data-background-image=\"{{ asset('images/background/#') }}\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Enregistrement de résultats
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    MASTER ! 
                </h2><!-- /.Section-title  -->


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
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Points</th>
                                    <th>Temps</th>
                                    <th>Naissance</th>
                                    <th>Id Athlète</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for athletes in results %}

                <tr>
                    <td id=\"lastname\">{{athletes.athlete.lastname}}</td> 
                    <td id=\"firstname\">{{athletes.athlete.firstname}}</td>
                    <td class=\"{{athletes.athlete.id}}\"class=\"points\">{{athletes.points}}</td> 
                    <td id=\"time\"><input class=\"change\" placeholder=\"{{athletes.time|round(2)}}\"/> <button id=\"btnok\" type=\"button\" class=\"btn btn-danger\">Ok</button></td>
                    <td id=\"birthdate\"> {{athletes.athlete.birthdate}}</td> 
                    <td id=\"id\"> {{athletes.athlete.id}}</td>
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

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
    
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/calcul.js')}}\"></script>
{%endblock%}
", ":default:calcul.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/calcul.html.twig");
    }
}
