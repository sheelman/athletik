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
        $__internal_a5a7b29efd90dab5f677331ffa53e196f50f858d4b6e2788a04890570bb2459f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a7b29efd90dab5f677331ffa53e196f50f858d4b6e2788a04890570bb2459f->enter($__internal_a5a7b29efd90dab5f677331ffa53e196f50f858d4b6e2788a04890570bb2459f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $__internal_68db0e22be483c0480d573d16402fb07e38be84069dc52831b4f017f407f1668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68db0e22be483c0480d573d16402fb07e38be84069dc52831b4f017f407f1668->enter($__internal_68db0e22be483c0480d573d16402fb07e38be84069dc52831b4f017f407f1668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5a7b29efd90dab5f677331ffa53e196f50f858d4b6e2788a04890570bb2459f->leave($__internal_a5a7b29efd90dab5f677331ffa53e196f50f858d4b6e2788a04890570bb2459f_prof);

        
        $__internal_68db0e22be483c0480d573d16402fb07e38be84069dc52831b4f017f407f1668->leave($__internal_68db0e22be483c0480d573d16402fb07e38be84069dc52831b4f017f407f1668_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_cff6f0ca7c28a4891f53dff768da00130934cd57f773df366e25d3a9c03b30e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff6f0ca7c28a4891f53dff768da00130934cd57f773df366e25d3a9c03b30e0->enter($__internal_cff6f0ca7c28a4891f53dff768da00130934cd57f773df366e25d3a9c03b30e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_7cd69331d722734353c99e04a0ae1eddd372de6fb90bb275d6beb79a6b3b7f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd69331d722734353c99e04a0ae1eddd372de6fb90bb275d6beb79a6b3b7f17->enter($__internal_7cd69331d722734353c99e04a0ae1eddd372de6fb90bb275d6beb79a6b3b7f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_7cd69331d722734353c99e04a0ae1eddd372de6fb90bb275d6beb79a6b3b7f17->leave($__internal_7cd69331d722734353c99e04a0ae1eddd372de6fb90bb275d6beb79a6b3b7f17_prof);

        
        $__internal_cff6f0ca7c28a4891f53dff768da00130934cd57f773df366e25d3a9c03b30e0->leave($__internal_cff6f0ca7c28a4891f53dff768da00130934cd57f773df366e25d3a9c03b30e0_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_8a50562d25d38bfbe968ee627861c4ccb716cc214298198478a9ebb044bc4a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a50562d25d38bfbe968ee627861c4ccb716cc214298198478a9ebb044bc4a47->enter($__internal_8a50562d25d38bfbe968ee627861c4ccb716cc214298198478a9ebb044bc4a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_df176d7d3e18681f5e1072cbd3a26165faffe69dd414696d8dc58ef2a12fdb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df176d7d3e18681f5e1072cbd3a26165faffe69dd414696d8dc58ef2a12fdb63->enter($__internal_df176d7d3e18681f5e1072cbd3a26165faffe69dd414696d8dc58ef2a12fdb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_df176d7d3e18681f5e1072cbd3a26165faffe69dd414696d8dc58ef2a12fdb63->leave($__internal_df176d7d3e18681f5e1072cbd3a26165faffe69dd414696d8dc58ef2a12fdb63_prof);

        
        $__internal_8a50562d25d38bfbe968ee627861c4ccb716cc214298198478a9ebb044bc4a47->leave($__internal_8a50562d25d38bfbe968ee627861c4ccb716cc214298198478a9ebb044bc4a47_prof);

    }

    // line 11
    public function block_classement($context, array $blocks = array())
    {
        $__internal_04969125477f96ad99298efd67d23a4c5cfbf4202c4fad34cd61d49498fe05dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04969125477f96ad99298efd67d23a4c5cfbf4202c4fad34cd61d49498fe05dc->enter($__internal_04969125477f96ad99298efd67d23a4c5cfbf4202c4fad34cd61d49498fe05dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_695fe0d32ab5050aa770749bd1c895cb29c59dc829880530cb4ba32d141430a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695fe0d32ab5050aa770749bd1c895cb29c59dc829880530cb4ba32d141430a8->enter($__internal_695fe0d32ab5050aa770749bd1c895cb29c59dc829880530cb4ba32d141430a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_695fe0d32ab5050aa770749bd1c895cb29c59dc829880530cb4ba32d141430a8->leave($__internal_695fe0d32ab5050aa770749bd1c895cb29c59dc829880530cb4ba32d141430a8_prof);

        
        $__internal_04969125477f96ad99298efd67d23a4c5cfbf4202c4fad34cd61d49498fe05dc->leave($__internal_04969125477f96ad99298efd67d23a4c5cfbf4202c4fad34cd61d49498fe05dc_prof);

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
