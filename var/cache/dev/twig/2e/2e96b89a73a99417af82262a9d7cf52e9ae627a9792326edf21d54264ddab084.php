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
        $__internal_c5a8348d1174d35bf9f5eeeff2abcd192da79614740d9397e08db9c0c4c32fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a8348d1174d35bf9f5eeeff2abcd192da79614740d9397e08db9c0c4c32fe9->enter($__internal_c5a8348d1174d35bf9f5eeeff2abcd192da79614740d9397e08db9c0c4c32fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $__internal_2f48c8d1f016f0c491f1f32db2ae58cff928b97c057d72590975b5a4867eb117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f48c8d1f016f0c491f1f32db2ae58cff928b97c057d72590975b5a4867eb117->enter($__internal_2f48c8d1f016f0c491f1f32db2ae58cff928b97c057d72590975b5a4867eb117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5a8348d1174d35bf9f5eeeff2abcd192da79614740d9397e08db9c0c4c32fe9->leave($__internal_c5a8348d1174d35bf9f5eeeff2abcd192da79614740d9397e08db9c0c4c32fe9_prof);

        
        $__internal_2f48c8d1f016f0c491f1f32db2ae58cff928b97c057d72590975b5a4867eb117->leave($__internal_2f48c8d1f016f0c491f1f32db2ae58cff928b97c057d72590975b5a4867eb117_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_a1cdca8ee4174599086c749adee29e9fe9d6001511dbefe28c4dbf8cb3911db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1cdca8ee4174599086c749adee29e9fe9d6001511dbefe28c4dbf8cb3911db8->enter($__internal_a1cdca8ee4174599086c749adee29e9fe9d6001511dbefe28c4dbf8cb3911db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_5818186e13805c610aea69fc92547a57a75bdd36790b8243e6d0217c190a4c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5818186e13805c610aea69fc92547a57a75bdd36790b8243e6d0217c190a4c00->enter($__internal_5818186e13805c610aea69fc92547a57a75bdd36790b8243e6d0217c190a4c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_5818186e13805c610aea69fc92547a57a75bdd36790b8243e6d0217c190a4c00->leave($__internal_5818186e13805c610aea69fc92547a57a75bdd36790b8243e6d0217c190a4c00_prof);

        
        $__internal_a1cdca8ee4174599086c749adee29e9fe9d6001511dbefe28c4dbf8cb3911db8->leave($__internal_a1cdca8ee4174599086c749adee29e9fe9d6001511dbefe28c4dbf8cb3911db8_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_2ee8d39d568cd51696f22bcf7eec26ecdfc0626e63e9f0c6eebf55fd22b798e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee8d39d568cd51696f22bcf7eec26ecdfc0626e63e9f0c6eebf55fd22b798e1->enter($__internal_2ee8d39d568cd51696f22bcf7eec26ecdfc0626e63e9f0c6eebf55fd22b798e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_7036e34157438795938aec14f3a29bb1aa31cb1bebe99752d3e7befa96b5935f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7036e34157438795938aec14f3a29bb1aa31cb1bebe99752d3e7befa96b5935f->enter($__internal_7036e34157438795938aec14f3a29bb1aa31cb1bebe99752d3e7befa96b5935f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_7036e34157438795938aec14f3a29bb1aa31cb1bebe99752d3e7befa96b5935f->leave($__internal_7036e34157438795938aec14f3a29bb1aa31cb1bebe99752d3e7befa96b5935f_prof);

        
        $__internal_2ee8d39d568cd51696f22bcf7eec26ecdfc0626e63e9f0c6eebf55fd22b798e1->leave($__internal_2ee8d39d568cd51696f22bcf7eec26ecdfc0626e63e9f0c6eebf55fd22b798e1_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_d8bb35f1fe2058021bb1339f0cb6e0c90c5878e095df67de4b53a1d9b435f9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bb35f1fe2058021bb1339f0cb6e0c90c5878e095df67de4b53a1d9b435f9fb->enter($__internal_d8bb35f1fe2058021bb1339f0cb6e0c90c5878e095df67de4b53a1d9b435f9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_fe7ac42279bd88457a239f00632da6faafd8965d19705b6775298886f0af1ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7ac42279bd88457a239f00632da6faafd8965d19705b6775298886f0af1ba8->enter($__internal_fe7ac42279bd88457a239f00632da6faafd8965d19705b6775298886f0af1ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
        
        $__internal_fe7ac42279bd88457a239f00632da6faafd8965d19705b6775298886f0af1ba8->leave($__internal_fe7ac42279bd88457a239f00632da6faafd8965d19705b6775298886f0af1ba8_prof);

        
        $__internal_d8bb35f1fe2058021bb1339f0cb6e0c90c5878e095df67de4b53a1d9b435f9fb->leave($__internal_d8bb35f1fe2058021bb1339f0cb6e0c90c5878e095df67de4b53a1d9b435f9fb_prof);

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
