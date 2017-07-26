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
        $__internal_30a60de77b17a30692f38319119a633e6010791080cd141432700a4b5632f3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a60de77b17a30692f38319119a633e6010791080cd141432700a4b5632f3d6->enter($__internal_30a60de77b17a30692f38319119a633e6010791080cd141432700a4b5632f3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $__internal_a3c35c38803223433c1168d6ced9a8280fd015a9ab8ac9dc1ef538f860a6dc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c35c38803223433c1168d6ced9a8280fd015a9ab8ac9dc1ef538f860a6dc49->enter($__internal_a3c35c38803223433c1168d6ced9a8280fd015a9ab8ac9dc1ef538f860a6dc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a60de77b17a30692f38319119a633e6010791080cd141432700a4b5632f3d6->leave($__internal_30a60de77b17a30692f38319119a633e6010791080cd141432700a4b5632f3d6_prof);

        
        $__internal_a3c35c38803223433c1168d6ced9a8280fd015a9ab8ac9dc1ef538f860a6dc49->leave($__internal_a3c35c38803223433c1168d6ced9a8280fd015a9ab8ac9dc1ef538f860a6dc49_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_e39e5d59f2b2f8d6d7225fee06b181ae8b627edc7d65fe3f48d413f5f7ad7f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39e5d59f2b2f8d6d7225fee06b181ae8b627edc7d65fe3f48d413f5f7ad7f72->enter($__internal_e39e5d59f2b2f8d6d7225fee06b181ae8b627edc7d65fe3f48d413f5f7ad7f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_91e9ae474072fd899154d13fd586bedccef7fe2155f7b1ed7e5dd4b34f9c03ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e9ae474072fd899154d13fd586bedccef7fe2155f7b1ed7e5dd4b34f9c03ad->enter($__internal_91e9ae474072fd899154d13fd586bedccef7fe2155f7b1ed7e5dd4b34f9c03ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_91e9ae474072fd899154d13fd586bedccef7fe2155f7b1ed7e5dd4b34f9c03ad->leave($__internal_91e9ae474072fd899154d13fd586bedccef7fe2155f7b1ed7e5dd4b34f9c03ad_prof);

        
        $__internal_e39e5d59f2b2f8d6d7225fee06b181ae8b627edc7d65fe3f48d413f5f7ad7f72->leave($__internal_e39e5d59f2b2f8d6d7225fee06b181ae8b627edc7d65fe3f48d413f5f7ad7f72_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_800eb1f5daa20383edfe416ffbf4f59ef9bfe3dda7a0b776e5d6b8d04e421253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800eb1f5daa20383edfe416ffbf4f59ef9bfe3dda7a0b776e5d6b8d04e421253->enter($__internal_800eb1f5daa20383edfe416ffbf4f59ef9bfe3dda7a0b776e5d6b8d04e421253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_a5da48f13141d2e8b2835db44c872a21bf8a985067d44482c7859a655a6a885a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5da48f13141d2e8b2835db44c872a21bf8a985067d44482c7859a655a6a885a->enter($__internal_a5da48f13141d2e8b2835db44c872a21bf8a985067d44482c7859a655a6a885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_a5da48f13141d2e8b2835db44c872a21bf8a985067d44482c7859a655a6a885a->leave($__internal_a5da48f13141d2e8b2835db44c872a21bf8a985067d44482c7859a655a6a885a_prof);

        
        $__internal_800eb1f5daa20383edfe416ffbf4f59ef9bfe3dda7a0b776e5d6b8d04e421253->leave($__internal_800eb1f5daa20383edfe416ffbf4f59ef9bfe3dda7a0b776e5d6b8d04e421253_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_980742ecfdd4737f651bf630d285af91bb39d0836c1f0bd207f9ced4caa570f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980742ecfdd4737f651bf630d285af91bb39d0836c1f0bd207f9ced4caa570f0->enter($__internal_980742ecfdd4737f651bf630d285af91bb39d0836c1f0bd207f9ced4caa570f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_d12b53e418a129ce675b056f823239c1379d04b47ab483269ca924299abe5954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12b53e418a129ce675b056f823239c1379d04b47ab483269ca924299abe5954->enter($__internal_d12b53e418a129ce675b056f823239c1379d04b47ab483269ca924299abe5954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["AthleteType"] ?? $this->getContext($context, "AthleteType")), 'form_start');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["AthleteType"] ?? $this->getContext($context, "AthleteType")), 'widget');
        echo "
                        ";
        // line 33
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
        
        $__internal_d12b53e418a129ce675b056f823239c1379d04b47ab483269ca924299abe5954->leave($__internal_d12b53e418a129ce675b056f823239c1379d04b47ab483269ca924299abe5954_prof);

        
        $__internal_980742ecfdd4737f651bf630d285af91bb39d0836c1f0bd207f9ced4caa570f0->leave($__internal_980742ecfdd4737f651bf630d285af91bb39d0836c1f0bd207f9ced4caa570f0_prof);

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
        return array (  119 => 33,  115 => 32,  111 => 31,  94 => 17,  90 => 15,  81 => 14,  68 => 9,  59 => 8,  42 => 6,  11 => 1,);
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
