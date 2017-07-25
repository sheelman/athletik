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
        $__internal_5aa7fe147709701323b8f1b583b3a2c2a80ae5897cab7e8e849d53f17ba458b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa7fe147709701323b8f1b583b3a2c2a80ae5897cab7e8e849d53f17ba458b7->enter($__internal_5aa7fe147709701323b8f1b583b3a2c2a80ae5897cab7e8e849d53f17ba458b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $__internal_82f3f6ef08bcb83f3ae1dae8157890d4816b65cc65009be7d905b3d6478b0130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f3f6ef08bcb83f3ae1dae8157890d4816b65cc65009be7d905b3d6478b0130->enter($__internal_82f3f6ef08bcb83f3ae1dae8157890d4816b65cc65009be7d905b3d6478b0130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa7fe147709701323b8f1b583b3a2c2a80ae5897cab7e8e849d53f17ba458b7->leave($__internal_5aa7fe147709701323b8f1b583b3a2c2a80ae5897cab7e8e849d53f17ba458b7_prof);

        
        $__internal_82f3f6ef08bcb83f3ae1dae8157890d4816b65cc65009be7d905b3d6478b0130->leave($__internal_82f3f6ef08bcb83f3ae1dae8157890d4816b65cc65009be7d905b3d6478b0130_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_eb65390f49223e1c8d7856e99cbdc938208e8fae04f8d64802866bc7c87910f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb65390f49223e1c8d7856e99cbdc938208e8fae04f8d64802866bc7c87910f3->enter($__internal_eb65390f49223e1c8d7856e99cbdc938208e8fae04f8d64802866bc7c87910f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_f9f3c24dc4a91ad138f7a048d43bb590572fe1de77dce060ee97114b7d3b1852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f3c24dc4a91ad138f7a048d43bb590572fe1de77dce060ee97114b7d3b1852->enter($__internal_f9f3c24dc4a91ad138f7a048d43bb590572fe1de77dce060ee97114b7d3b1852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_f9f3c24dc4a91ad138f7a048d43bb590572fe1de77dce060ee97114b7d3b1852->leave($__internal_f9f3c24dc4a91ad138f7a048d43bb590572fe1de77dce060ee97114b7d3b1852_prof);

        
        $__internal_eb65390f49223e1c8d7856e99cbdc938208e8fae04f8d64802866bc7c87910f3->leave($__internal_eb65390f49223e1c8d7856e99cbdc938208e8fae04f8d64802866bc7c87910f3_prof);

    }

    // line 11
    public function block_classement($context, array $blocks = array())
    {
        $__internal_6ef31bbf2ce7585a2583ae055f602167f07e64253a2a8ac3ebb7c7b7d316371b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef31bbf2ce7585a2583ae055f602167f07e64253a2a8ac3ebb7c7b7d316371b->enter($__internal_6ef31bbf2ce7585a2583ae055f602167f07e64253a2a8ac3ebb7c7b7d316371b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_cd22d9ad1b6070742e72dacabee4479fb4a10abd978d9397e445f39e1b717097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd22d9ad1b6070742e72dacabee4479fb4a10abd978d9397e445f39e1b717097->enter($__internal_cd22d9ad1b6070742e72dacabee4479fb4a10abd978d9397e445f39e1b717097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        // line 12
        echo "
    ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "        <h1>je suis ADMIN!!!!!!!</h1>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 18
            echo "        <h1>je suis USER!!!!!!!</h1>
    ";
        }
        // line 20
        echo "
    <!-- Classement général Section -->
    <section id=\"classement\" class=\"section-style\" data-background-image=\"";
        // line 22
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
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classement"] ?? $this->getContext($context, "classement")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 54
            echo "
                                    <tr>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "firstname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "lastname", array()), "html", null, true);
            echo "</td>                                       
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "total", array()), "html", null, true);
            echo "</td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
                            </tbody>
                        </table> 
                    </div>
                    <footer>
                        <a href=\"";
        // line 67
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
        
        $__internal_cd22d9ad1b6070742e72dacabee4479fb4a10abd978d9397e445f39e1b717097->leave($__internal_cd22d9ad1b6070742e72dacabee4479fb4a10abd978d9397e445f39e1b717097_prof);

        
        $__internal_6ef31bbf2ce7585a2583ae055f602167f07e64253a2a8ac3ebb7c7b7d316371b->leave($__internal_6ef31bbf2ce7585a2583ae055f602167f07e64253a2a8ac3ebb7c7b7d316371b_prof);

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
        return array (  161 => 67,  154 => 62,  144 => 58,  140 => 57,  136 => 56,  132 => 54,  128 => 53,  94 => 22,  90 => 20,  86 => 18,  84 => 17,  81 => 16,  77 => 14,  75 => 13,  72 => 12,  63 => 11,  50 => 6,  41 => 5,  11 => 1,);
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



{% block fin %}
                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
{%endblock%}

{% block classement %}

    {% if is_granted('ROLE_ADMIN') %}
        <h1>je suis ADMIN!!!!!!!</h1>
    {% endif %}

    {% if is_granted('ROLE_USER') %}
        <h1>je suis USER!!!!!!!</h1>
    {% endif %}

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
