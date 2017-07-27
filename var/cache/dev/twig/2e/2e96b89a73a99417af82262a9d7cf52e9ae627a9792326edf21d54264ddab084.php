<?php

/* :default:master.html.twig */
class __TwigTemplate_5a711d1a6b6068f2b88172884cb12254fcffcd2f887a67ef0b08d9171ee1480c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:master.html.twig", 1);
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
        $__internal_e6117eaf1ae619a867b6268d7d8773bffd4c326d8b42976a4bf8dfee117d931b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6117eaf1ae619a867b6268d7d8773bffd4c326d8b42976a4bf8dfee117d931b->enter($__internal_e6117eaf1ae619a867b6268d7d8773bffd4c326d8b42976a4bf8dfee117d931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $__internal_921cf3057e466004da15410b759bd91c6ca78e2676cc69799512faa6abe10e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921cf3057e466004da15410b759bd91c6ca78e2676cc69799512faa6abe10e27->enter($__internal_921cf3057e466004da15410b759bd91c6ca78e2676cc69799512faa6abe10e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6117eaf1ae619a867b6268d7d8773bffd4c326d8b42976a4bf8dfee117d931b->leave($__internal_e6117eaf1ae619a867b6268d7d8773bffd4c326d8b42976a4bf8dfee117d931b_prof);

        
        $__internal_921cf3057e466004da15410b759bd91c6ca78e2676cc69799512faa6abe10e27->leave($__internal_921cf3057e466004da15410b759bd91c6ca78e2676cc69799512faa6abe10e27_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_9bd6931da2713dfffc805654f884b8fcb61af891128742ea7d74bef5c86aea22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd6931da2713dfffc805654f884b8fcb61af891128742ea7d74bef5c86aea22->enter($__internal_9bd6931da2713dfffc805654f884b8fcb61af891128742ea7d74bef5c86aea22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_dd7f1c92f4b3f092f6b703975ebf5242841ab59ea8127b0810e8cf649cb9ddb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7f1c92f4b3f092f6b703975ebf5242841ab59ea8127b0810e8cf649cb9ddb1->enter($__internal_dd7f1c92f4b3f092f6b703975ebf5242841ab59ea8127b0810e8cf649cb9ddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_dd7f1c92f4b3f092f6b703975ebf5242841ab59ea8127b0810e8cf649cb9ddb1->leave($__internal_dd7f1c92f4b3f092f6b703975ebf5242841ab59ea8127b0810e8cf649cb9ddb1_prof);

        
        $__internal_9bd6931da2713dfffc805654f884b8fcb61af891128742ea7d74bef5c86aea22->leave($__internal_9bd6931da2713dfffc805654f884b8fcb61af891128742ea7d74bef5c86aea22_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_71d13f149d61b61be308ec26281afe2501020d889278b1caaf7adac689ff668c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d13f149d61b61be308ec26281afe2501020d889278b1caaf7adac689ff668c->enter($__internal_71d13f149d61b61be308ec26281afe2501020d889278b1caaf7adac689ff668c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_4c3fd78beb46427557a275ca9b5e75116abd07422610b715a0a4aef43c912dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3fd78beb46427557a275ca9b5e75116abd07422610b715a0a4aef43c912dea->enter($__internal_4c3fd78beb46427557a275ca9b5e75116abd07422610b715a0a4aef43c912dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_4c3fd78beb46427557a275ca9b5e75116abd07422610b715a0a4aef43c912dea->leave($__internal_4c3fd78beb46427557a275ca9b5e75116abd07422610b715a0a4aef43c912dea_prof);

        
        $__internal_71d13f149d61b61be308ec26281afe2501020d889278b1caaf7adac689ff668c->leave($__internal_71d13f149d61b61be308ec26281afe2501020d889278b1caaf7adac689ff668c_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_0162879d25afff11e436329d706fa59af65dd9203da6c08e655e809df858f03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0162879d25afff11e436329d706fa59af65dd9203da6c08e655e809df858f03e->enter($__internal_0162879d25afff11e436329d706fa59af65dd9203da6c08e655e809df858f03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_57d7c039f524b374630ea08c83a6d1407088f7b4be5083d5d5dd57a801e065fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d7c039f524b374630ea08c83a6d1407088f7b4be5083d5d5dd57a801e065fb->enter($__internal_57d7c039f524b374630ea08c83a6d1407088f7b4be5083d5d5dd57a801e065fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
                    <div class=\"content\">
                        <table class=\"table table-inverse\">
                            <tr>
                                <td><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/admin/nouvelle_course"), "html", null, true);
        echo "\">Créer une nouvelle course</a></td>
                                <br/>
                                <td><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultat");
        echo "\">Enregistrer les résultats</a></td>
                            </tr>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meetings"] ?? $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 39
            echo "                            <tr>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "description", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["meeting"], "date", array()), "d-m-Y"), "html", null, true);
            echo "| <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeCourse", array("id" => $this->getAttribute($context["meeting"], "id", array()))), "html", null, true);
            echo "\">Enlever courses</a></td>
                            <br/>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </table>
                    </div>
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
";
        
        $__internal_57d7c039f524b374630ea08c83a6d1407088f7b4be5083d5d5dd57a801e065fb->leave($__internal_57d7c039f524b374630ea08c83a6d1407088f7b4be5083d5d5dd57a801e065fb_prof);

        
        $__internal_0162879d25afff11e436329d706fa59af65dd9203da6c08e655e809df858f03e->leave($__internal_0162879d25afff11e436329d706fa59af65dd9203da6c08e655e809df858f03e_prof);

    }

    public function getTemplateName()
    {
        return ":default:master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 46,  139 => 42,  135 => 41,  131 => 40,  128 => 39,  124 => 38,  119 => 36,  114 => 34,  94 => 17,  90 => 15,  81 => 14,  68 => 9,  59 => 8,  42 => 6,  11 => 1,);
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
                    <div class=\"content\">
                        <table class=\"table table-inverse\">
                            <tr>
                                <td><a href=\"{{ asset('/admin/nouvelle_course') }}\">Créer une nouvelle course</a></td>
                                <br/>
                                <td><a href=\"{{ path('resultat') }}\">Enregistrer les résultats</a></td>
                            </tr>
                            {% for meeting in meetings %}
                            <tr>
                                <td>{{ meeting.name }}</td>
                                <td>{{ meeting.description }}</td>
                                <td>{{ meeting.date|date('d-m-Y') }}| <a href=\"{{ path('removeCourse', {id: meeting.id}) }}\">Enlever courses</a></td>
                            <br/>
                            </tr>
                            {% endfor %}
                        </table>
                    </div>
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
{%endblock%}", ":default:master.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/master.html.twig");
    }
}
