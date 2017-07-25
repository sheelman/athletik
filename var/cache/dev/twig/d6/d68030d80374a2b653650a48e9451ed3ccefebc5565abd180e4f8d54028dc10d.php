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
        $__internal_0d1a0458be18d12401a49d3be9390e089cb57f389f8f83df2d77efc3ee06234a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1a0458be18d12401a49d3be9390e089cb57f389f8f83df2d77efc3ee06234a->enter($__internal_0d1a0458be18d12401a49d3be9390e089cb57f389f8f83df2d77efc3ee06234a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $__internal_1e3de7bfaa0890e48779cc8241600db14ef7de1e8fa6483557ee5cdaa8aacfb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3de7bfaa0890e48779cc8241600db14ef7de1e8fa6483557ee5cdaa8aacfb8->enter($__internal_1e3de7bfaa0890e48779cc8241600db14ef7de1e8fa6483557ee5cdaa8aacfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d1a0458be18d12401a49d3be9390e089cb57f389f8f83df2d77efc3ee06234a->leave($__internal_0d1a0458be18d12401a49d3be9390e089cb57f389f8f83df2d77efc3ee06234a_prof);

        
        $__internal_1e3de7bfaa0890e48779cc8241600db14ef7de1e8fa6483557ee5cdaa8aacfb8->leave($__internal_1e3de7bfaa0890e48779cc8241600db14ef7de1e8fa6483557ee5cdaa8aacfb8_prof);

    }

    // line 3
    public function block_fin($context, array $blocks = array())
    {
        $__internal_183ddab00651c2767f18d1785d4bccb98c611ed7b9221d0c826cf18b88bd1f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183ddab00651c2767f18d1785d4bccb98c611ed7b9221d0c826cf18b88bd1f56->enter($__internal_183ddab00651c2767f18d1785d4bccb98c611ed7b9221d0c826cf18b88bd1f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_f1fbc5d437b7453c9b7718d09a451bba05c78e9441c4f82c157e8bc24c4d58a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fbc5d437b7453c9b7718d09a451bba05c78e9441c4f82c157e8bc24c4d58a1->enter($__internal_f1fbc5d437b7453c9b7718d09a451bba05c78e9441c4f82c157e8bc24c4d58a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 4
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-resultat\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_f1fbc5d437b7453c9b7718d09a451bba05c78e9441c4f82c157e8bc24c4d58a1->leave($__internal_f1fbc5d437b7453c9b7718d09a451bba05c78e9441c4f82c157e8bc24c4d58a1_prof);

        
        $__internal_183ddab00651c2767f18d1785d4bccb98c611ed7b9221d0c826cf18b88bd1f56->leave($__internal_183ddab00651c2767f18d1785d4bccb98c611ed7b9221d0c826cf18b88bd1f56_prof);

    }

    // line 9
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_def3bf562511e90ec6a828beadcdef6488588a91ec935681665d7806934b89ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def3bf562511e90ec6a828beadcdef6488588a91ec935681665d7806934b89ca->enter($__internal_def3bf562511e90ec6a828beadcdef6488588a91ec935681665d7806934b89ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        $__internal_ad9e11024815dc9ae5ddd19a5d59831f3ebfeca66108c1159d9eea5156b41af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9e11024815dc9ae5ddd19a5d59831f3ebfeca66108c1159d9eea5156b41af3->enter($__internal_ad9e11024815dc9ae5ddd19a5d59831f3ebfeca66108c1159d9eea5156b41af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "        <h1>je suis ADMIN!!!!!!!</h1>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 16
            echo "        <h1>je suis USER!!!!!!!</h1>
    ";
        }
        // line 18
        echo "
    <!-- Résultat des courses Section -->
    <section id=\"resultat\" class=\"section-style\" data-background-image=\"";
        // line 20
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
        // line 39
        echo "                        <h2>Résultats de : 
                            <form>
                                <select name=\"meeting\"  onchange=\"this.form.submit()\">
                                    <option placeholder=\"course\"></option>
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meetings"] ?? $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "                                             
                                        <option value=\"";
            // line 44
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
        // line 46
        echo "                                </select>
                            </form>
                        </h2>
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
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["athletes"]) {
            // line 64
            echo "
                                    <tr>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "firstname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["athletes"], "athlete", array()), "lastname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "time", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["athletes"], "points", array()), "html", null, true);
            echo "</td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athletes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                            </tbody>
                        </table>                       
                    </div>

                    <footer>
                        <a href=\"";
        // line 79
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
        
        $__internal_ad9e11024815dc9ae5ddd19a5d59831f3ebfeca66108c1159d9eea5156b41af3->leave($__internal_ad9e11024815dc9ae5ddd19a5d59831f3ebfeca66108c1159d9eea5156b41af3_prof);

        
        $__internal_def3bf562511e90ec6a828beadcdef6488588a91ec935681665d7806934b89ca->leave($__internal_def3bf562511e90ec6a828beadcdef6488588a91ec935681665d7806934b89ca_prof);

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
        return array (  202 => 79,  194 => 73,  184 => 69,  180 => 68,  176 => 67,  172 => 66,  168 => 64,  164 => 63,  145 => 46,  127 => 44,  121 => 43,  115 => 39,  94 => 20,  90 => 18,  86 => 16,  84 => 15,  81 => 14,  77 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 4,  41 => 3,  11 => 1,);
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

{% block fin %}
                        <div class=\"next-section\">
                            <a class=\"go-to-resultat\"><span></span></a>
                        </div><!-- /.next-section -->
{%endblock%}
                    
{% block resultat %}

    {% if is_granted('ROLE_ADMIN') %}
        <h1>je suis ADMIN!!!!!!!</h1>
    {% endif %}

    {% if is_granted('ROLE_USER') %}
        <h1>je suis USER!!!!!!!</h1>
    {% endif %}

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
