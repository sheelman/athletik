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
        $__internal_d83c207134fe290c23aeb05abf17257782b817cbd3fbe9e6ae37a126c25d6e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83c207134fe290c23aeb05abf17257782b817cbd3fbe9e6ae37a126c25d6e7a->enter($__internal_d83c207134fe290c23aeb05abf17257782b817cbd3fbe9e6ae37a126c25d6e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $__internal_4817967705604133133bfe5b6fe0495ffe9f59cc88e5c5a9bd9e17564bcd70c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4817967705604133133bfe5b6fe0495ffe9f59cc88e5c5a9bd9e17564bcd70c3->enter($__internal_4817967705604133133bfe5b6fe0495ffe9f59cc88e5c5a9bd9e17564bcd70c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d83c207134fe290c23aeb05abf17257782b817cbd3fbe9e6ae37a126c25d6e7a->leave($__internal_d83c207134fe290c23aeb05abf17257782b817cbd3fbe9e6ae37a126c25d6e7a_prof);

        
        $__internal_4817967705604133133bfe5b6fe0495ffe9f59cc88e5c5a9bd9e17564bcd70c3->leave($__internal_4817967705604133133bfe5b6fe0495ffe9f59cc88e5c5a9bd9e17564bcd70c3_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_49e0f5d3756703c0f31f71b1c306f789f2d4129a7e186a6c2f0ecb823ab898db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e0f5d3756703c0f31f71b1c306f789f2d4129a7e186a6c2f0ecb823ab898db->enter($__internal_49e0f5d3756703c0f31f71b1c306f789f2d4129a7e186a6c2f0ecb823ab898db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_f1cbd7354b058ada8c344e2413229c5f31c55c980cb6042204144c337feb7733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cbd7354b058ada8c344e2413229c5f31c55c980cb6042204144c337feb7733->enter($__internal_f1cbd7354b058ada8c344e2413229c5f31c55c980cb6042204144c337feb7733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_f1cbd7354b058ada8c344e2413229c5f31c55c980cb6042204144c337feb7733->leave($__internal_f1cbd7354b058ada8c344e2413229c5f31c55c980cb6042204144c337feb7733_prof);

        
        $__internal_49e0f5d3756703c0f31f71b1c306f789f2d4129a7e186a6c2f0ecb823ab898db->leave($__internal_49e0f5d3756703c0f31f71b1c306f789f2d4129a7e186a6c2f0ecb823ab898db_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_83027e2bf3ed283fe51651f3244f641072327b12ece1c1b9c10b5ca37836affb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83027e2bf3ed283fe51651f3244f641072327b12ece1c1b9c10b5ca37836affb->enter($__internal_83027e2bf3ed283fe51651f3244f641072327b12ece1c1b9c10b5ca37836affb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_bdd7d5e06be10fbae7de5dd90fad77275a10d7b793f8c8f42c180aab7290c2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd7d5e06be10fbae7de5dd90fad77275a10d7b793f8c8f42c180aab7290c2c7->enter($__internal_bdd7d5e06be10fbae7de5dd90fad77275a10d7b793f8c8f42c180aab7290c2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_bdd7d5e06be10fbae7de5dd90fad77275a10d7b793f8c8f42c180aab7290c2c7->leave($__internal_bdd7d5e06be10fbae7de5dd90fad77275a10d7b793f8c8f42c180aab7290c2c7_prof);

        
        $__internal_83027e2bf3ed283fe51651f3244f641072327b12ece1c1b9c10b5ca37836affb->leave($__internal_83027e2bf3ed283fe51651f3244f641072327b12ece1c1b9c10b5ca37836affb_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_8940320edf4cda21d4c5ae9661c3415ab92f8fa68dc037986a01c84db973a47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8940320edf4cda21d4c5ae9661c3415ab92f8fa68dc037986a01c84db973a47c->enter($__internal_8940320edf4cda21d4c5ae9661c3415ab92f8fa68dc037986a01c84db973a47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_047aae6c5924da4589939d00f02bfb55c9a6d5174ccfb4c1e5067ef62ad3e35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047aae6c5924da4589939d00f02bfb55c9a6d5174ccfb4c1e5067ef62ad3e35e->enter($__internal_047aae6c5924da4589939d00f02bfb55c9a6d5174ccfb4c1e5067ef62ad3e35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
        
        $__internal_047aae6c5924da4589939d00f02bfb55c9a6d5174ccfb4c1e5067ef62ad3e35e->leave($__internal_047aae6c5924da4589939d00f02bfb55c9a6d5174ccfb4c1e5067ef62ad3e35e_prof);

        
        $__internal_8940320edf4cda21d4c5ae9661c3415ab92f8fa68dc037986a01c84db973a47c->leave($__internal_8940320edf4cda21d4c5ae9661c3415ab92f8fa68dc037986a01c84db973a47c_prof);

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
