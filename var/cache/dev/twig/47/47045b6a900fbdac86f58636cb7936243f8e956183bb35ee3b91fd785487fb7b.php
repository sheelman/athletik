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
        $__internal_db5ee0ab7d6c7afde7675f0c1a016b20107ca1c6cdaaeba85dc9214b7a42ae94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5ee0ab7d6c7afde7675f0c1a016b20107ca1c6cdaaeba85dc9214b7a42ae94->enter($__internal_db5ee0ab7d6c7afde7675f0c1a016b20107ca1c6cdaaeba85dc9214b7a42ae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $__internal_8ff0223c093561c750c77c6e7dc756826331847e081c17b870bc3cf6d08806d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff0223c093561c750c77c6e7dc756826331847e081c17b870bc3cf6d08806d7->enter($__internal_8ff0223c093561c750c77c6e7dc756826331847e081c17b870bc3cf6d08806d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db5ee0ab7d6c7afde7675f0c1a016b20107ca1c6cdaaeba85dc9214b7a42ae94->leave($__internal_db5ee0ab7d6c7afde7675f0c1a016b20107ca1c6cdaaeba85dc9214b7a42ae94_prof);

        
        $__internal_8ff0223c093561c750c77c6e7dc756826331847e081c17b870bc3cf6d08806d7->leave($__internal_8ff0223c093561c750c77c6e7dc756826331847e081c17b870bc3cf6d08806d7_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_0784426d6bc971b622b10eca63915b8c462de0d23d4585802d0a7df015a789e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0784426d6bc971b622b10eca63915b8c462de0d23d4585802d0a7df015a789e3->enter($__internal_0784426d6bc971b622b10eca63915b8c462de0d23d4585802d0a7df015a789e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_e8280c3ca36888d0474d4f7ed469cf8263def9d9e3fa3ae4b074f8140a0e0789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8280c3ca36888d0474d4f7ed469cf8263def9d9e3fa3ae4b074f8140a0e0789->enter($__internal_e8280c3ca36888d0474d4f7ed469cf8263def9d9e3fa3ae4b074f8140a0e0789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_e8280c3ca36888d0474d4f7ed469cf8263def9d9e3fa3ae4b074f8140a0e0789->leave($__internal_e8280c3ca36888d0474d4f7ed469cf8263def9d9e3fa3ae4b074f8140a0e0789_prof);

        
        $__internal_0784426d6bc971b622b10eca63915b8c462de0d23d4585802d0a7df015a789e3->leave($__internal_0784426d6bc971b622b10eca63915b8c462de0d23d4585802d0a7df015a789e3_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_5d4747961f1215b09fc7036922774db1efc16dd82d8e4a9fc1a0053ff960cd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4747961f1215b09fc7036922774db1efc16dd82d8e4a9fc1a0053ff960cd5d->enter($__internal_5d4747961f1215b09fc7036922774db1efc16dd82d8e4a9fc1a0053ff960cd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_646ebb0668a8a336a143251f3ab77ff082f5a48f1514bd7d84e749aee2637956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646ebb0668a8a336a143251f3ab77ff082f5a48f1514bd7d84e749aee2637956->enter($__internal_646ebb0668a8a336a143251f3ab77ff082f5a48f1514bd7d84e749aee2637956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_646ebb0668a8a336a143251f3ab77ff082f5a48f1514bd7d84e749aee2637956->leave($__internal_646ebb0668a8a336a143251f3ab77ff082f5a48f1514bd7d84e749aee2637956_prof);

        
        $__internal_5d4747961f1215b09fc7036922774db1efc16dd82d8e4a9fc1a0053ff960cd5d->leave($__internal_5d4747961f1215b09fc7036922774db1efc16dd82d8e4a9fc1a0053ff960cd5d_prof);

    }

    // line 11
    public function block_classement($context, array $blocks = array())
    {
        $__internal_37a5543d2b52503c47784cae5010e0e984fc394c53ffe90c56bb16ec9d22f577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a5543d2b52503c47784cae5010e0e984fc394c53ffe90c56bb16ec9d22f577->enter($__internal_37a5543d2b52503c47784cae5010e0e984fc394c53ffe90c56bb16ec9d22f577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_5282890f8185518682bcde62085f31229859e3978fea33b74ceedf1d4bacaaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5282890f8185518682bcde62085f31229859e3978fea33b74ceedf1d4bacaaf0->enter($__internal_5282890f8185518682bcde62085f31229859e3978fea33b74ceedf1d4bacaaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_5282890f8185518682bcde62085f31229859e3978fea33b74ceedf1d4bacaaf0->leave($__internal_5282890f8185518682bcde62085f31229859e3978fea33b74ceedf1d4bacaaf0_prof);

        
        $__internal_37a5543d2b52503c47784cae5010e0e984fc394c53ffe90c56bb16ec9d22f577->leave($__internal_37a5543d2b52503c47784cae5010e0e984fc394c53ffe90c56bb16ec9d22f577_prof);

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
