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
        $__internal_30ad687ba5ff923c803f32ef2cd12a59d25d4db4cdb88d63237376657fe65e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ad687ba5ff923c803f32ef2cd12a59d25d4db4cdb88d63237376657fe65e73->enter($__internal_30ad687ba5ff923c803f32ef2cd12a59d25d4db4cdb88d63237376657fe65e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $__internal_57a07492b57aff04012533eae08a1740239e1a4eaa5a6ad4e5e536f3e72260e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a07492b57aff04012533eae08a1740239e1a4eaa5a6ad4e5e536f3e72260e9->enter($__internal_57a07492b57aff04012533eae08a1740239e1a4eaa5a6ad4e5e536f3e72260e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30ad687ba5ff923c803f32ef2cd12a59d25d4db4cdb88d63237376657fe65e73->leave($__internal_30ad687ba5ff923c803f32ef2cd12a59d25d4db4cdb88d63237376657fe65e73_prof);

        
        $__internal_57a07492b57aff04012533eae08a1740239e1a4eaa5a6ad4e5e536f3e72260e9->leave($__internal_57a07492b57aff04012533eae08a1740239e1a4eaa5a6ad4e5e536f3e72260e9_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_36c90f11b393a1da0cb9529025c4382f2038d2f3e4f11f530724593c82941f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c90f11b393a1da0cb9529025c4382f2038d2f3e4f11f530724593c82941f68->enter($__internal_36c90f11b393a1da0cb9529025c4382f2038d2f3e4f11f530724593c82941f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_ccb1647a4e84562fb37ad3341dd09ba7277d347d5bacd60d29e66b89fb4b7c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb1647a4e84562fb37ad3341dd09ba7277d347d5bacd60d29e66b89fb4b7c6f->enter($__internal_ccb1647a4e84562fb37ad3341dd09ba7277d347d5bacd60d29e66b89fb4b7c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_ccb1647a4e84562fb37ad3341dd09ba7277d347d5bacd60d29e66b89fb4b7c6f->leave($__internal_ccb1647a4e84562fb37ad3341dd09ba7277d347d5bacd60d29e66b89fb4b7c6f_prof);

        
        $__internal_36c90f11b393a1da0cb9529025c4382f2038d2f3e4f11f530724593c82941f68->leave($__internal_36c90f11b393a1da0cb9529025c4382f2038d2f3e4f11f530724593c82941f68_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_8ceecf3156cc42b0f2d76d9131ebefb105df2b6aabd92198420e63d385d925c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ceecf3156cc42b0f2d76d9131ebefb105df2b6aabd92198420e63d385d925c6->enter($__internal_8ceecf3156cc42b0f2d76d9131ebefb105df2b6aabd92198420e63d385d925c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_2274a3ed4ba6785b9967f66f793d0615fd18ac2811de4f717c10182358dd5f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2274a3ed4ba6785b9967f66f793d0615fd18ac2811de4f717c10182358dd5f2c->enter($__internal_2274a3ed4ba6785b9967f66f793d0615fd18ac2811de4f717c10182358dd5f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_2274a3ed4ba6785b9967f66f793d0615fd18ac2811de4f717c10182358dd5f2c->leave($__internal_2274a3ed4ba6785b9967f66f793d0615fd18ac2811de4f717c10182358dd5f2c_prof);

        
        $__internal_8ceecf3156cc42b0f2d76d9131ebefb105df2b6aabd92198420e63d385d925c6->leave($__internal_8ceecf3156cc42b0f2d76d9131ebefb105df2b6aabd92198420e63d385d925c6_prof);

    }

    // line 11
    public function block_classement($context, array $blocks = array())
    {
        $__internal_b7d6fd1e5901018e411089230240772a84c92e7cca1e0eae9a8c5593b62ffec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d6fd1e5901018e411089230240772a84c92e7cca1e0eae9a8c5593b62ffec0->enter($__internal_b7d6fd1e5901018e411089230240772a84c92e7cca1e0eae9a8c5593b62ffec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_6128f9dee4177d99bf18dbe5ab01c925041dd9172510b5cfd7357efef9ea815c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6128f9dee4177d99bf18dbe5ab01c925041dd9172510b5cfd7357efef9ea815c->enter($__internal_6128f9dee4177d99bf18dbe5ab01c925041dd9172510b5cfd7357efef9ea815c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_6128f9dee4177d99bf18dbe5ab01c925041dd9172510b5cfd7357efef9ea815c->leave($__internal_6128f9dee4177d99bf18dbe5ab01c925041dd9172510b5cfd7357efef9ea815c_prof);

        
        $__internal_b7d6fd1e5901018e411089230240772a84c92e7cca1e0eae9a8c5593b62ffec0->leave($__internal_b7d6fd1e5901018e411089230240772a84c92e7cca1e0eae9a8c5593b62ffec0_prof);

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
