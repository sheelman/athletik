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
        $__internal_90cafdfb12ac2611aa3cbf8ed1288cdbb03b075693143b660f79e1f2a9334624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cafdfb12ac2611aa3cbf8ed1288cdbb03b075693143b660f79e1f2a9334624->enter($__internal_90cafdfb12ac2611aa3cbf8ed1288cdbb03b075693143b660f79e1f2a9334624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $__internal_33be08e1d735ff252794e54b34f2176a664950c4ef05882d4bef94a69fa4d9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33be08e1d735ff252794e54b34f2176a664950c4ef05882d4bef94a69fa4d9b1->enter($__internal_33be08e1d735ff252794e54b34f2176a664950c4ef05882d4bef94a69fa4d9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscriptioncoureur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90cafdfb12ac2611aa3cbf8ed1288cdbb03b075693143b660f79e1f2a9334624->leave($__internal_90cafdfb12ac2611aa3cbf8ed1288cdbb03b075693143b660f79e1f2a9334624_prof);

        
        $__internal_33be08e1d735ff252794e54b34f2176a664950c4ef05882d4bef94a69fa4d9b1->leave($__internal_33be08e1d735ff252794e54b34f2176a664950c4ef05882d4bef94a69fa4d9b1_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_48329dafb07a6c254d9065717e27c77b41d07bd64bd1db991d4c66cb6b9ba636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48329dafb07a6c254d9065717e27c77b41d07bd64bd1db991d4c66cb6b9ba636->enter($__internal_48329dafb07a6c254d9065717e27c77b41d07bd64bd1db991d4c66cb6b9ba636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_2a724f040455fbf9538b8a90db0c85497bbacd083f8a9b5241e4aa6c195b82c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a724f040455fbf9538b8a90db0c85497bbacd083f8a9b5241e4aa6c195b82c6->enter($__internal_2a724f040455fbf9538b8a90db0c85497bbacd083f8a9b5241e4aa6c195b82c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_2a724f040455fbf9538b8a90db0c85497bbacd083f8a9b5241e4aa6c195b82c6->leave($__internal_2a724f040455fbf9538b8a90db0c85497bbacd083f8a9b5241e4aa6c195b82c6_prof);

        
        $__internal_48329dafb07a6c254d9065717e27c77b41d07bd64bd1db991d4c66cb6b9ba636->leave($__internal_48329dafb07a6c254d9065717e27c77b41d07bd64bd1db991d4c66cb6b9ba636_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_bc3db134bc25363645b3dd30260a79c898753b4cde2981d04bcca7887dc2e277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3db134bc25363645b3dd30260a79c898753b4cde2981d04bcca7887dc2e277->enter($__internal_bc3db134bc25363645b3dd30260a79c898753b4cde2981d04bcca7887dc2e277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_18e8af45a0e2841146bcdfbc87d1c2537372e187e6a60790a18c7f0a328d53c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e8af45a0e2841146bcdfbc87d1c2537372e187e6a60790a18c7f0a328d53c5->enter($__internal_18e8af45a0e2841146bcdfbc87d1c2537372e187e6a60790a18c7f0a328d53c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_18e8af45a0e2841146bcdfbc87d1c2537372e187e6a60790a18c7f0a328d53c5->leave($__internal_18e8af45a0e2841146bcdfbc87d1c2537372e187e6a60790a18c7f0a328d53c5_prof);

        
        $__internal_bc3db134bc25363645b3dd30260a79c898753b4cde2981d04bcca7887dc2e277->leave($__internal_bc3db134bc25363645b3dd30260a79c898753b4cde2981d04bcca7887dc2e277_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_4bd282603233a3f59fc0799b03cb68f790d4f73585f8e657950a60a00e99b32c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd282603233a3f59fc0799b03cb68f790d4f73585f8e657950a60a00e99b32c->enter($__internal_4bd282603233a3f59fc0799b03cb68f790d4f73585f8e657950a60a00e99b32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_0b4dcc36ec997e4a3191c4fe8ccc4a087425982861e1a77103cc7f12cf083ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4dcc36ec997e4a3191c4fe8ccc4a087425982861e1a77103cc7f12cf083ee0->enter($__internal_0b4dcc36ec997e4a3191c4fe8ccc4a087425982861e1a77103cc7f12cf083ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_0b4dcc36ec997e4a3191c4fe8ccc4a087425982861e1a77103cc7f12cf083ee0->leave($__internal_0b4dcc36ec997e4a3191c4fe8ccc4a087425982861e1a77103cc7f12cf083ee0_prof);

        
        $__internal_4bd282603233a3f59fc0799b03cb68f790d4f73585f8e657950a60a00e99b32c->leave($__internal_4bd282603233a3f59fc0799b03cb68f790d4f73585f8e657950a60a00e99b32c_prof);

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
