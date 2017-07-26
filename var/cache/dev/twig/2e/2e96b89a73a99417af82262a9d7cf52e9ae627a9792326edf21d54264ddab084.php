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
        $__internal_6d1c32e8d0ee2afcdbed0fe766539fa4ba7ad4248cb386c5861f77462492bf91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1c32e8d0ee2afcdbed0fe766539fa4ba7ad4248cb386c5861f77462492bf91->enter($__internal_6d1c32e8d0ee2afcdbed0fe766539fa4ba7ad4248cb386c5861f77462492bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $__internal_2e544d1766f65866e6335bc6da1273d74df42d46a2b409b72bf2319f1ea3c07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e544d1766f65866e6335bc6da1273d74df42d46a2b409b72bf2319f1ea3c07f->enter($__internal_2e544d1766f65866e6335bc6da1273d74df42d46a2b409b72bf2319f1ea3c07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d1c32e8d0ee2afcdbed0fe766539fa4ba7ad4248cb386c5861f77462492bf91->leave($__internal_6d1c32e8d0ee2afcdbed0fe766539fa4ba7ad4248cb386c5861f77462492bf91_prof);

        
        $__internal_2e544d1766f65866e6335bc6da1273d74df42d46a2b409b72bf2319f1ea3c07f->leave($__internal_2e544d1766f65866e6335bc6da1273d74df42d46a2b409b72bf2319f1ea3c07f_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_75e2f02b6f2d1cae8bd1cea55153f40c3801c111811b0de7e98cb90d12540812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e2f02b6f2d1cae8bd1cea55153f40c3801c111811b0de7e98cb90d12540812->enter($__internal_75e2f02b6f2d1cae8bd1cea55153f40c3801c111811b0de7e98cb90d12540812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_d0f5da066dc31c2a7dea82dfd0b5054013b6ec9c4cd657df363db756245a6449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f5da066dc31c2a7dea82dfd0b5054013b6ec9c4cd657df363db756245a6449->enter($__internal_d0f5da066dc31c2a7dea82dfd0b5054013b6ec9c4cd657df363db756245a6449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_d0f5da066dc31c2a7dea82dfd0b5054013b6ec9c4cd657df363db756245a6449->leave($__internal_d0f5da066dc31c2a7dea82dfd0b5054013b6ec9c4cd657df363db756245a6449_prof);

        
        $__internal_75e2f02b6f2d1cae8bd1cea55153f40c3801c111811b0de7e98cb90d12540812->leave($__internal_75e2f02b6f2d1cae8bd1cea55153f40c3801c111811b0de7e98cb90d12540812_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_d3ef7c607b39d5a6ef7e97346aecae8a0211f3e39e75083b50e948452e3412da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ef7c607b39d5a6ef7e97346aecae8a0211f3e39e75083b50e948452e3412da->enter($__internal_d3ef7c607b39d5a6ef7e97346aecae8a0211f3e39e75083b50e948452e3412da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_546ce48a247bbadd258ae8f37347f5f70490972c95a08524e72c2e949a850d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546ce48a247bbadd258ae8f37347f5f70490972c95a08524e72c2e949a850d28->enter($__internal_546ce48a247bbadd258ae8f37347f5f70490972c95a08524e72c2e949a850d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_546ce48a247bbadd258ae8f37347f5f70490972c95a08524e72c2e949a850d28->leave($__internal_546ce48a247bbadd258ae8f37347f5f70490972c95a08524e72c2e949a850d28_prof);

        
        $__internal_d3ef7c607b39d5a6ef7e97346aecae8a0211f3e39e75083b50e948452e3412da->leave($__internal_d3ef7c607b39d5a6ef7e97346aecae8a0211f3e39e75083b50e948452e3412da_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_0dfc42e46fc86f9fe93ba90b634f1ac80c3c3a6518b8756082eeb1a696f1c6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dfc42e46fc86f9fe93ba90b634f1ac80c3c3a6518b8756082eeb1a696f1c6be->enter($__internal_0dfc42e46fc86f9fe93ba90b634f1ac80c3c3a6518b8756082eeb1a696f1c6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_bf441570e1dc4e3f098273b22628e28b8f6bd7e0f5b53529bf556d9b2f02c680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf441570e1dc4e3f098273b22628e28b8f6bd7e0f5b53529bf556d9b2f02c680->enter($__internal_bf441570e1dc4e3f098273b22628e28b8f6bd7e0f5b53529bf556d9b2f02c680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("#"), "html", null, true);
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
        
        $__internal_bf441570e1dc4e3f098273b22628e28b8f6bd7e0f5b53529bf556d9b2f02c680->leave($__internal_bf441570e1dc4e3f098273b22628e28b8f6bd7e0f5b53529bf556d9b2f02c680_prof);

        
        $__internal_0dfc42e46fc86f9fe93ba90b634f1ac80c3c3a6518b8756082eeb1a696f1c6be->leave($__internal_0dfc42e46fc86f9fe93ba90b634f1ac80c3c3a6518b8756082eeb1a696f1c6be_prof);

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
                                <td><a href=\"{{ asset('#') }}\">Enregistrer les résultats</a></td>
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
