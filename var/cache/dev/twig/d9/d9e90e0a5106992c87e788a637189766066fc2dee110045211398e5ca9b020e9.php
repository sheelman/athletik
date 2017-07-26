<?php

/* :default:inscriptioncoureur.html.twig */
class __TwigTemplate_1ace9f91b109a7a513ae7f2828944aa34a42cd73d9261895192df12302e526e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:inscriptioncoureur.html.twig", 1);
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
        $__internal_a73047361059faea285f68488df339736971bb697ddcd61060af6060d2d6d615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73047361059faea285f68488df339736971bb697ddcd61060af6060d2d6d615->enter($__internal_a73047361059faea285f68488df339736971bb697ddcd61060af6060d2d6d615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $__internal_9be6a7895c00c63bdf08fbbcec81b437fa914c368aa67a11b1918c497bad8eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be6a7895c00c63bdf08fbbcec81b437fa914c368aa67a11b1918c497bad8eb4->enter($__internal_9be6a7895c00c63bdf08fbbcec81b437fa914c368aa67a11b1918c497bad8eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a73047361059faea285f68488df339736971bb697ddcd61060af6060d2d6d615->leave($__internal_a73047361059faea285f68488df339736971bb697ddcd61060af6060d2d6d615_prof);

        
        $__internal_9be6a7895c00c63bdf08fbbcec81b437fa914c368aa67a11b1918c497bad8eb4->leave($__internal_9be6a7895c00c63bdf08fbbcec81b437fa914c368aa67a11b1918c497bad8eb4_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_d459cf1d5542d6d58575f4685d80b6d3a5cbcc5d5144d12e9dbc5718995b01ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d459cf1d5542d6d58575f4685d80b6d3a5cbcc5d5144d12e9dbc5718995b01ed->enter($__internal_d459cf1d5542d6d58575f4685d80b6d3a5cbcc5d5144d12e9dbc5718995b01ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_b5d77802c247e6860948f5af44708bb28d3784ef10531f9c4b7a902ccca3855d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d77802c247e6860948f5af44708bb28d3784ef10531f9c4b7a902ccca3855d->enter($__internal_b5d77802c247e6860948f5af44708bb28d3784ef10531f9c4b7a902ccca3855d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_b5d77802c247e6860948f5af44708bb28d3784ef10531f9c4b7a902ccca3855d->leave($__internal_b5d77802c247e6860948f5af44708bb28d3784ef10531f9c4b7a902ccca3855d_prof);

        
        $__internal_d459cf1d5542d6d58575f4685d80b6d3a5cbcc5d5144d12e9dbc5718995b01ed->leave($__internal_d459cf1d5542d6d58575f4685d80b6d3a5cbcc5d5144d12e9dbc5718995b01ed_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_48a9015c2221772f81069789b8e42b31ac9f40cda93c58b6c51b6618ca50fcad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a9015c2221772f81069789b8e42b31ac9f40cda93c58b6c51b6618ca50fcad->enter($__internal_48a9015c2221772f81069789b8e42b31ac9f40cda93c58b6c51b6618ca50fcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_ebcee8b3964bc8388dbd7087fba8d77b0f65fa95848e9bc19654261002579212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebcee8b3964bc8388dbd7087fba8d77b0f65fa95848e9bc19654261002579212->enter($__internal_ebcee8b3964bc8388dbd7087fba8d77b0f65fa95848e9bc19654261002579212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_ebcee8b3964bc8388dbd7087fba8d77b0f65fa95848e9bc19654261002579212->leave($__internal_ebcee8b3964bc8388dbd7087fba8d77b0f65fa95848e9bc19654261002579212_prof);

        
        $__internal_48a9015c2221772f81069789b8e42b31ac9f40cda93c58b6c51b6618ca50fcad->leave($__internal_48a9015c2221772f81069789b8e42b31ac9f40cda93c58b6c51b6618ca50fcad_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_55260dbccca883b568c1b9e97716c8b53802dd9e4188f4621f604c4a98e8a936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55260dbccca883b568c1b9e97716c8b53802dd9e4188f4621f604c4a98e8a936->enter($__internal_55260dbccca883b568c1b9e97716c8b53802dd9e4188f4621f604c4a98e8a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_d3f44ab50af2317e361c9b969248201a47daa1fb772627d4f248df3632f0a3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f44ab50af2317e361c9b969248201a47daa1fb772627d4f248df3632f0a3db->enter($__internal_d3f44ab50af2317e361c9b969248201a47daa1fb772627d4f248df3632f0a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        // line 15
        echo "
    <!-- Classement général Section -->
    <section id=\"classement\" class=\"section-style\" data-background-image=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/static1.squarespace.com.jpeg"), "html", null, true);
        echo "\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Inscription d'un athlete
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    USER ! 
                </h2><!-- /.Section-title  -->
 

                            
                <article class=\"box\">
                        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["AthleteType"] ?? $this->getContext($context, "AthleteType")), 'form_start');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["AthleteType"] ?? $this->getContext($context, "AthleteType")), 'widget');
        echo "
                        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["AthleteType"] ?? $this->getContext($context, "AthleteType")), 'form_end');
        echo "
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
";
        
        $__internal_d3f44ab50af2317e361c9b969248201a47daa1fb772627d4f248df3632f0a3db->leave($__internal_d3f44ab50af2317e361c9b969248201a47daa1fb772627d4f248df3632f0a3db_prof);

        
        $__internal_55260dbccca883b568c1b9e97716c8b53802dd9e4188f4621f604c4a98e8a936->leave($__internal_55260dbccca883b568c1b9e97716c8b53802dd9e4188f4621f604c4a98e8a936_prof);

    }

    public function getTemplateName()
    {
        return ":default:inscriptioncoureur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  116 => 33,  112 => 32,  94 => 17,  90 => 15,  81 => 14,  68 => 9,  59 => 8,  42 => 6,  11 => 1,);
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

{#{% if is_granted('ROLE_USER') %}
{% endif %} // A mettre a l'endroit ou l'on veut protéger une partie de page en  user sinon mettre la page entière dans /user#}

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
                        Inscription d'un athlete
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    USER ! 
                </h2><!-- /.Section-title  -->
 

                            
                <article class=\"box\">
                        {{ form_start(AthleteType) }}
                        {{ form_widget(AthleteType) }}
                        {{ form_end(AthleteType) }}
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
{%endblock%}{# empty Twig template #}", ":default:inscriptioncoureur.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/inscriptioncoureur.html.twig");
    }
}
