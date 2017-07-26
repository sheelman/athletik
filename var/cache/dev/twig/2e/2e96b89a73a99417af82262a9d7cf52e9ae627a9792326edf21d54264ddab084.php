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
        $__internal_b0088ded37b7c2faaeb77a34c0b8dda9c6fd72f1464107a5bc36526dd1900c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0088ded37b7c2faaeb77a34c0b8dda9c6fd72f1464107a5bc36526dd1900c50->enter($__internal_b0088ded37b7c2faaeb77a34c0b8dda9c6fd72f1464107a5bc36526dd1900c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $__internal_dbd2075d8be141bf2721463ad1069d17338bb920f0f1e8274796abd83124c8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd2075d8be141bf2721463ad1069d17338bb920f0f1e8274796abd83124c8e8->enter($__internal_dbd2075d8be141bf2721463ad1069d17338bb920f0f1e8274796abd83124c8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0088ded37b7c2faaeb77a34c0b8dda9c6fd72f1464107a5bc36526dd1900c50->leave($__internal_b0088ded37b7c2faaeb77a34c0b8dda9c6fd72f1464107a5bc36526dd1900c50_prof);

        
        $__internal_dbd2075d8be141bf2721463ad1069d17338bb920f0f1e8274796abd83124c8e8->leave($__internal_dbd2075d8be141bf2721463ad1069d17338bb920f0f1e8274796abd83124c8e8_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_bc0d92464ca0598cad8bb9db06459e9740a5490623fbf658e496a8deeeb9bc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0d92464ca0598cad8bb9db06459e9740a5490623fbf658e496a8deeeb9bc4e->enter($__internal_bc0d92464ca0598cad8bb9db06459e9740a5490623fbf658e496a8deeeb9bc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_d748d1052b200a28f53fb9498f61c5c3f128d665fd85c7103949b290e4047e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d748d1052b200a28f53fb9498f61c5c3f128d665fd85c7103949b290e4047e68->enter($__internal_d748d1052b200a28f53fb9498f61c5c3f128d665fd85c7103949b290e4047e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_d748d1052b200a28f53fb9498f61c5c3f128d665fd85c7103949b290e4047e68->leave($__internal_d748d1052b200a28f53fb9498f61c5c3f128d665fd85c7103949b290e4047e68_prof);

        
        $__internal_bc0d92464ca0598cad8bb9db06459e9740a5490623fbf658e496a8deeeb9bc4e->leave($__internal_bc0d92464ca0598cad8bb9db06459e9740a5490623fbf658e496a8deeeb9bc4e_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_cd78d7c8097f66a015c4ef25be8eec2134a2344cf552f628bc4d995089409a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd78d7c8097f66a015c4ef25be8eec2134a2344cf552f628bc4d995089409a3b->enter($__internal_cd78d7c8097f66a015c4ef25be8eec2134a2344cf552f628bc4d995089409a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_a77b8cad027d3f262b42ae1ad85a49fe84b474974003adac01c9c2458dae0337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77b8cad027d3f262b42ae1ad85a49fe84b474974003adac01c9c2458dae0337->enter($__internal_a77b8cad027d3f262b42ae1ad85a49fe84b474974003adac01c9c2458dae0337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_a77b8cad027d3f262b42ae1ad85a49fe84b474974003adac01c9c2458dae0337->leave($__internal_a77b8cad027d3f262b42ae1ad85a49fe84b474974003adac01c9c2458dae0337_prof);

        
        $__internal_cd78d7c8097f66a015c4ef25be8eec2134a2344cf552f628bc4d995089409a3b->leave($__internal_cd78d7c8097f66a015c4ef25be8eec2134a2344cf552f628bc4d995089409a3b_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_683452120a4c1dabe60475e53b129ec1bb39a5aa4dcf06a48fd7e1bff803f153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683452120a4c1dabe60475e53b129ec1bb39a5aa4dcf06a48fd7e1bff803f153->enter($__internal_683452120a4c1dabe60475e53b129ec1bb39a5aa4dcf06a48fd7e1bff803f153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_7338ad98c2849947ee63b878bf740e0e77c411c264063f8e77832e08550f25ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7338ad98c2849947ee63b878bf740e0e77c411c264063f8e77832e08550f25ea->enter($__internal_7338ad98c2849947ee63b878bf740e0e77c411c264063f8e77832e08550f25ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
            echo " <tr>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "description", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
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
        // line 45
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
        
        $__internal_7338ad98c2849947ee63b878bf740e0e77c411c264063f8e77832e08550f25ea->leave($__internal_7338ad98c2849947ee63b878bf740e0e77c411c264063f8e77832e08550f25ea_prof);

        
        $__internal_683452120a4c1dabe60475e53b129ec1bb39a5aa4dcf06a48fd7e1bff803f153->leave($__internal_683452120a4c1dabe60475e53b129ec1bb39a5aa4dcf06a48fd7e1bff803f153_prof);

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
        return array (  150 => 45,  138 => 41,  134 => 40,  130 => 39,  124 => 38,  119 => 36,  114 => 34,  94 => 17,  90 => 15,  81 => 14,  68 => 9,  59 => 8,  42 => 6,  11 => 1,);
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
                            {% for meeting in meetings %} <tr>
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
