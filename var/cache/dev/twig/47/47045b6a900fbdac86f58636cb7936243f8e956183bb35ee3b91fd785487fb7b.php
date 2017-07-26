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
        $__internal_d7d779bc0fadb86a70a48dca326ca3037d08b955e7d0e85eab584f2338a189c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d779bc0fadb86a70a48dca326ca3037d08b955e7d0e85eab584f2338a189c5->enter($__internal_d7d779bc0fadb86a70a48dca326ca3037d08b955e7d0e85eab584f2338a189c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $__internal_a398819bff26fd4ef4283da951f607a3df16e0febf1c5abec33d0936526ded63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a398819bff26fd4ef4283da951f607a3df16e0febf1c5abec33d0936526ded63->enter($__internal_a398819bff26fd4ef4283da951f607a3df16e0febf1c5abec33d0936526ded63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d779bc0fadb86a70a48dca326ca3037d08b955e7d0e85eab584f2338a189c5->leave($__internal_d7d779bc0fadb86a70a48dca326ca3037d08b955e7d0e85eab584f2338a189c5_prof);

        
        $__internal_a398819bff26fd4ef4283da951f607a3df16e0febf1c5abec33d0936526ded63->leave($__internal_a398819bff26fd4ef4283da951f607a3df16e0febf1c5abec33d0936526ded63_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_a62af294ea9e0bac82dd5886f6d047eba9258d8162641d3be831e303cd1ef6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62af294ea9e0bac82dd5886f6d047eba9258d8162641d3be831e303cd1ef6f5->enter($__internal_a62af294ea9e0bac82dd5886f6d047eba9258d8162641d3be831e303cd1ef6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_2b851141b16ef85ff7daf8f90498b66160349a67d9d8446d8cf7f197d9c39011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b851141b16ef85ff7daf8f90498b66160349a67d9d8446d8cf7f197d9c39011->enter($__internal_2b851141b16ef85ff7daf8f90498b66160349a67d9d8446d8cf7f197d9c39011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_2b851141b16ef85ff7daf8f90498b66160349a67d9d8446d8cf7f197d9c39011->leave($__internal_2b851141b16ef85ff7daf8f90498b66160349a67d9d8446d8cf7f197d9c39011_prof);

        
        $__internal_a62af294ea9e0bac82dd5886f6d047eba9258d8162641d3be831e303cd1ef6f5->leave($__internal_a62af294ea9e0bac82dd5886f6d047eba9258d8162641d3be831e303cd1ef6f5_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_d21f4f9c2bf45ca21b02ed4424db70d212cdc59b54593f3c8371306f21eb92ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21f4f9c2bf45ca21b02ed4424db70d212cdc59b54593f3c8371306f21eb92ff->enter($__internal_d21f4f9c2bf45ca21b02ed4424db70d212cdc59b54593f3c8371306f21eb92ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_5743edc4f037b16a3f39bc88bc0fd5d9bfd1270ad02328f7f1642d2e7a71aa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5743edc4f037b16a3f39bc88bc0fd5d9bfd1270ad02328f7f1642d2e7a71aa1d->enter($__internal_5743edc4f037b16a3f39bc88bc0fd5d9bfd1270ad02328f7f1642d2e7a71aa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_5743edc4f037b16a3f39bc88bc0fd5d9bfd1270ad02328f7f1642d2e7a71aa1d->leave($__internal_5743edc4f037b16a3f39bc88bc0fd5d9bfd1270ad02328f7f1642d2e7a71aa1d_prof);

        
        $__internal_d21f4f9c2bf45ca21b02ed4424db70d212cdc59b54593f3c8371306f21eb92ff->leave($__internal_d21f4f9c2bf45ca21b02ed4424db70d212cdc59b54593f3c8371306f21eb92ff_prof);

    }

    // line 11
    public function block_classement($context, array $blocks = array())
    {
        $__internal_75a8319d3283b26f2236fe55cc9796c7517b0b8aed8e3f19c8ee074d5d046d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a8319d3283b26f2236fe55cc9796c7517b0b8aed8e3f19c8ee074d5d046d7f->enter($__internal_75a8319d3283b26f2236fe55cc9796c7517b0b8aed8e3f19c8ee074d5d046d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_64a2fb53711c725f4286e3dd225e3c78c7b95e4f22e8c7af04327c78d0e38038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a2fb53711c725f4286e3dd225e3c78c7b95e4f22e8c7af04327c78d0e38038->enter($__internal_64a2fb53711c725f4286e3dd225e3c78c7b95e4f22e8c7af04327c78d0e38038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_64a2fb53711c725f4286e3dd225e3c78c7b95e4f22e8c7af04327c78d0e38038->leave($__internal_64a2fb53711c725f4286e3dd225e3c78c7b95e4f22e8c7af04327c78d0e38038_prof);

        
        $__internal_75a8319d3283b26f2236fe55cc9796c7517b0b8aed8e3f19c8ee074d5d046d7f->leave($__internal_75a8319d3283b26f2236fe55cc9796c7517b0b8aed8e3f19c8ee074d5d046d7f_prof);

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
