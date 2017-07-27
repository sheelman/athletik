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
        $__internal_3855c5465aefe4acd3ba8a1a4b2a129732a8188c4a88b8a3680364b22db063ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3855c5465aefe4acd3ba8a1a4b2a129732a8188c4a88b8a3680364b22db063ef->enter($__internal_3855c5465aefe4acd3ba8a1a4b2a129732a8188c4a88b8a3680364b22db063ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $__internal_184a8148a6c48cbd3a703d0f5ed4d129fde68987ebf3bd7d0793a0504ccbe580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184a8148a6c48cbd3a703d0f5ed4d129fde68987ebf3bd7d0793a0504ccbe580->enter($__internal_184a8148a6c48cbd3a703d0f5ed4d129fde68987ebf3bd7d0793a0504ccbe580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3855c5465aefe4acd3ba8a1a4b2a129732a8188c4a88b8a3680364b22db063ef->leave($__internal_3855c5465aefe4acd3ba8a1a4b2a129732a8188c4a88b8a3680364b22db063ef_prof);

        
        $__internal_184a8148a6c48cbd3a703d0f5ed4d129fde68987ebf3bd7d0793a0504ccbe580->leave($__internal_184a8148a6c48cbd3a703d0f5ed4d129fde68987ebf3bd7d0793a0504ccbe580_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_0bae05532b3e0997b20324b8d80de02f9b21ddae18ff2bca17ecbde626f1125d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bae05532b3e0997b20324b8d80de02f9b21ddae18ff2bca17ecbde626f1125d->enter($__internal_0bae05532b3e0997b20324b8d80de02f9b21ddae18ff2bca17ecbde626f1125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_aa2bad186a4c44b63ea41d1e768bc71fd461a99b554715cebe7a440b2794022e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2bad186a4c44b63ea41d1e768bc71fd461a99b554715cebe7a440b2794022e->enter($__internal_aa2bad186a4c44b63ea41d1e768bc71fd461a99b554715cebe7a440b2794022e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_aa2bad186a4c44b63ea41d1e768bc71fd461a99b554715cebe7a440b2794022e->leave($__internal_aa2bad186a4c44b63ea41d1e768bc71fd461a99b554715cebe7a440b2794022e_prof);

        
        $__internal_0bae05532b3e0997b20324b8d80de02f9b21ddae18ff2bca17ecbde626f1125d->leave($__internal_0bae05532b3e0997b20324b8d80de02f9b21ddae18ff2bca17ecbde626f1125d_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_18117e5296d0699dcd9af3818f07d976952ab572f4540835871eda0b94f43f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18117e5296d0699dcd9af3818f07d976952ab572f4540835871eda0b94f43f1d->enter($__internal_18117e5296d0699dcd9af3818f07d976952ab572f4540835871eda0b94f43f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_7300c8da5f6b7cec8e66e2d6b7ef37d2012f51855663c9607eaf98586c68c305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7300c8da5f6b7cec8e66e2d6b7ef37d2012f51855663c9607eaf98586c68c305->enter($__internal_7300c8da5f6b7cec8e66e2d6b7ef37d2012f51855663c9607eaf98586c68c305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_7300c8da5f6b7cec8e66e2d6b7ef37d2012f51855663c9607eaf98586c68c305->leave($__internal_7300c8da5f6b7cec8e66e2d6b7ef37d2012f51855663c9607eaf98586c68c305_prof);

        
        $__internal_18117e5296d0699dcd9af3818f07d976952ab572f4540835871eda0b94f43f1d->leave($__internal_18117e5296d0699dcd9af3818f07d976952ab572f4540835871eda0b94f43f1d_prof);

    }

    // line 11
    public function block_classement($context, array $blocks = array())
    {
        $__internal_82294ffa32adb789975b64cf0b6c58434a19dc864331ab4e2763fd7d2205dd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82294ffa32adb789975b64cf0b6c58434a19dc864331ab4e2763fd7d2205dd02->enter($__internal_82294ffa32adb789975b64cf0b6c58434a19dc864331ab4e2763fd7d2205dd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_14e0d055df385bee6a09d6c3f3ac13b1cb6183590f86ac84cd902f4a4db85f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e0d055df385bee6a09d6c3f3ac13b1cb6183590f86ac84cd902f4a4db85f17->enter($__internal_14e0d055df385bee6a09d6c3f3ac13b1cb6183590f86ac84cd902f4a4db85f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_14e0d055df385bee6a09d6c3f3ac13b1cb6183590f86ac84cd902f4a4db85f17->leave($__internal_14e0d055df385bee6a09d6c3f3ac13b1cb6183590f86ac84cd902f4a4db85f17_prof);

        
        $__internal_82294ffa32adb789975b64cf0b6c58434a19dc864331ab4e2763fd7d2205dd02->leave($__internal_82294ffa32adb789975b64cf0b6c58434a19dc864331ab4e2763fd7d2205dd02_prof);

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
