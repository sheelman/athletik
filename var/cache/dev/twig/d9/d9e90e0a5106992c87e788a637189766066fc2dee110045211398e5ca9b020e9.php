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
        $__internal_595aea582b202bb9b4a090254c4909e16aaee6e71f4afb2c16e7d910358035f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595aea582b202bb9b4a090254c4909e16aaee6e71f4afb2c16e7d910358035f4->enter($__internal_595aea582b202bb9b4a090254c4909e16aaee6e71f4afb2c16e7d910358035f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $__internal_a4c7c42df9ecdf9ddffbdc7e650689354c8ad4881e01c146a8e06d3403284a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c7c42df9ecdf9ddffbdc7e650689354c8ad4881e01c146a8e06d3403284a2a->enter($__internal_a4c7c42df9ecdf9ddffbdc7e650689354c8ad4881e01c146a8e06d3403284a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595aea582b202bb9b4a090254c4909e16aaee6e71f4afb2c16e7d910358035f4->leave($__internal_595aea582b202bb9b4a090254c4909e16aaee6e71f4afb2c16e7d910358035f4_prof);

        
        $__internal_a4c7c42df9ecdf9ddffbdc7e650689354c8ad4881e01c146a8e06d3403284a2a->leave($__internal_a4c7c42df9ecdf9ddffbdc7e650689354c8ad4881e01c146a8e06d3403284a2a_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_4841f7f2e32d4abd2611b71d8a8794462b205963a4adecc6e479c074f33d030b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4841f7f2e32d4abd2611b71d8a8794462b205963a4adecc6e479c074f33d030b->enter($__internal_4841f7f2e32d4abd2611b71d8a8794462b205963a4adecc6e479c074f33d030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_04ae1c2eb1c2cf5b3a84e3561fa6c5ee909c5633b6a4f3ad5dcb23f454a68fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ae1c2eb1c2cf5b3a84e3561fa6c5ee909c5633b6a4f3ad5dcb23f454a68fc0->enter($__internal_04ae1c2eb1c2cf5b3a84e3561fa6c5ee909c5633b6a4f3ad5dcb23f454a68fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_04ae1c2eb1c2cf5b3a84e3561fa6c5ee909c5633b6a4f3ad5dcb23f454a68fc0->leave($__internal_04ae1c2eb1c2cf5b3a84e3561fa6c5ee909c5633b6a4f3ad5dcb23f454a68fc0_prof);

        
        $__internal_4841f7f2e32d4abd2611b71d8a8794462b205963a4adecc6e479c074f33d030b->leave($__internal_4841f7f2e32d4abd2611b71d8a8794462b205963a4adecc6e479c074f33d030b_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_474072ee3cbf6c2d7c8658b361cdf19e45c467cb720f13eb5d4b38369cee5143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474072ee3cbf6c2d7c8658b361cdf19e45c467cb720f13eb5d4b38369cee5143->enter($__internal_474072ee3cbf6c2d7c8658b361cdf19e45c467cb720f13eb5d4b38369cee5143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_5440c004c6b55f08e70c6d8993ea50c9caa9e67a36548f4c16a26835d5f0ec75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5440c004c6b55f08e70c6d8993ea50c9caa9e67a36548f4c16a26835d5f0ec75->enter($__internal_5440c004c6b55f08e70c6d8993ea50c9caa9e67a36548f4c16a26835d5f0ec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_5440c004c6b55f08e70c6d8993ea50c9caa9e67a36548f4c16a26835d5f0ec75->leave($__internal_5440c004c6b55f08e70c6d8993ea50c9caa9e67a36548f4c16a26835d5f0ec75_prof);

        
        $__internal_474072ee3cbf6c2d7c8658b361cdf19e45c467cb720f13eb5d4b38369cee5143->leave($__internal_474072ee3cbf6c2d7c8658b361cdf19e45c467cb720f13eb5d4b38369cee5143_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_e8f644864050c26775a0880d9adb5420102640055fcdf3cb3db0c282736c4f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f644864050c26775a0880d9adb5420102640055fcdf3cb3db0c282736c4f7e->enter($__internal_e8f644864050c26775a0880d9adb5420102640055fcdf3cb3db0c282736c4f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_6c9179633c1b74619157ba5df43b65b9abb7fea14ba0101ef6c9b91c8fd6da9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9179633c1b74619157ba5df43b65b9abb7fea14ba0101ef6c9b91c8fd6da9c->enter($__internal_6c9179633c1b74619157ba5df43b65b9abb7fea14ba0101ef6c9b91c8fd6da9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_6c9179633c1b74619157ba5df43b65b9abb7fea14ba0101ef6c9b91c8fd6da9c->leave($__internal_6c9179633c1b74619157ba5df43b65b9abb7fea14ba0101ef6c9b91c8fd6da9c_prof);

        
        $__internal_e8f644864050c26775a0880d9adb5420102640055fcdf3cb3db0c282736c4f7e->leave($__internal_e8f644864050c26775a0880d9adb5420102640055fcdf3cb3db0c282736c4f7e_prof);

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
