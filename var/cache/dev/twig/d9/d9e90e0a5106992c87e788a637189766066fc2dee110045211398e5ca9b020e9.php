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
        $__internal_7b50668f3cbc9a095ba6cc4c0b9b2ab75c25d8e878f89be4566f1ad99050becc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b50668f3cbc9a095ba6cc4c0b9b2ab75c25d8e878f89be4566f1ad99050becc->enter($__internal_7b50668f3cbc9a095ba6cc4c0b9b2ab75c25d8e878f89be4566f1ad99050becc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $__internal_55cb28cc60d5a63fc43cdec7880934532488b49a80be84b4a12156d30ba37217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cb28cc60d5a63fc43cdec7880934532488b49a80be84b4a12156d30ba37217->enter($__internal_55cb28cc60d5a63fc43cdec7880934532488b49a80be84b4a12156d30ba37217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b50668f3cbc9a095ba6cc4c0b9b2ab75c25d8e878f89be4566f1ad99050becc->leave($__internal_7b50668f3cbc9a095ba6cc4c0b9b2ab75c25d8e878f89be4566f1ad99050becc_prof);

        
        $__internal_55cb28cc60d5a63fc43cdec7880934532488b49a80be84b4a12156d30ba37217->leave($__internal_55cb28cc60d5a63fc43cdec7880934532488b49a80be84b4a12156d30ba37217_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_a1cbeba9d3b2a1c073b7ad03ee4f6588b03cf10b6558ab41d0cae25796aa9074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1cbeba9d3b2a1c073b7ad03ee4f6588b03cf10b6558ab41d0cae25796aa9074->enter($__internal_a1cbeba9d3b2a1c073b7ad03ee4f6588b03cf10b6558ab41d0cae25796aa9074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_cf94a7dc10cba85a1ccb967c7970ae96b81d575d8cac410f5c0f8b80c1e914ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf94a7dc10cba85a1ccb967c7970ae96b81d575d8cac410f5c0f8b80c1e914ad->enter($__internal_cf94a7dc10cba85a1ccb967c7970ae96b81d575d8cac410f5c0f8b80c1e914ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_cf94a7dc10cba85a1ccb967c7970ae96b81d575d8cac410f5c0f8b80c1e914ad->leave($__internal_cf94a7dc10cba85a1ccb967c7970ae96b81d575d8cac410f5c0f8b80c1e914ad_prof);

        
        $__internal_a1cbeba9d3b2a1c073b7ad03ee4f6588b03cf10b6558ab41d0cae25796aa9074->leave($__internal_a1cbeba9d3b2a1c073b7ad03ee4f6588b03cf10b6558ab41d0cae25796aa9074_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_ee371bd9844d4bd2a053e9bf1190c47814fc194acd21dc047e98a32192a5822e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee371bd9844d4bd2a053e9bf1190c47814fc194acd21dc047e98a32192a5822e->enter($__internal_ee371bd9844d4bd2a053e9bf1190c47814fc194acd21dc047e98a32192a5822e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_0d52247df09deff5fa8d87b8e698ed02ff95c5b4f0e954a70acb32d4c9ab3697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d52247df09deff5fa8d87b8e698ed02ff95c5b4f0e954a70acb32d4c9ab3697->enter($__internal_0d52247df09deff5fa8d87b8e698ed02ff95c5b4f0e954a70acb32d4c9ab3697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_0d52247df09deff5fa8d87b8e698ed02ff95c5b4f0e954a70acb32d4c9ab3697->leave($__internal_0d52247df09deff5fa8d87b8e698ed02ff95c5b4f0e954a70acb32d4c9ab3697_prof);

        
        $__internal_ee371bd9844d4bd2a053e9bf1190c47814fc194acd21dc047e98a32192a5822e->leave($__internal_ee371bd9844d4bd2a053e9bf1190c47814fc194acd21dc047e98a32192a5822e_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_268c4720b87d2cdc3ed3603548ab98a3810e275419f334d26591efa3226a026d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268c4720b87d2cdc3ed3603548ab98a3810e275419f334d26591efa3226a026d->enter($__internal_268c4720b87d2cdc3ed3603548ab98a3810e275419f334d26591efa3226a026d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_45d49159820e41dd45bc3662176b55832ab8089cc93da9d1058a0eb16aab125e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d49159820e41dd45bc3662176b55832ab8089cc93da9d1058a0eb16aab125e->enter($__internal_45d49159820e41dd45bc3662176b55832ab8089cc93da9d1058a0eb16aab125e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_45d49159820e41dd45bc3662176b55832ab8089cc93da9d1058a0eb16aab125e->leave($__internal_45d49159820e41dd45bc3662176b55832ab8089cc93da9d1058a0eb16aab125e_prof);

        
        $__internal_268c4720b87d2cdc3ed3603548ab98a3810e275419f334d26591efa3226a026d->leave($__internal_268c4720b87d2cdc3ed3603548ab98a3810e275419f334d26591efa3226a026d_prof);

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
