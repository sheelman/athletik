<?php

/* :default:nouvellecourse.html.twig */
class __TwigTemplate_15ef598826167a5e6839c7ec947f35aa16d10b5b17768b65db1f4e1a48f0cff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:nouvellecourse.html.twig", 1);
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
        $__internal_c76bc4a895449982473bf966a31230f425f053851eab9d38057383a900c6b741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76bc4a895449982473bf966a31230f425f053851eab9d38057383a900c6b741->enter($__internal_c76bc4a895449982473bf966a31230f425f053851eab9d38057383a900c6b741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $__internal_3bd164b6ed53fd5058329d7bdbd92900362ffae4679c59a04b7a217b625d9945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd164b6ed53fd5058329d7bdbd92900362ffae4679c59a04b7a217b625d9945->enter($__internal_3bd164b6ed53fd5058329d7bdbd92900362ffae4679c59a04b7a217b625d9945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c76bc4a895449982473bf966a31230f425f053851eab9d38057383a900c6b741->leave($__internal_c76bc4a895449982473bf966a31230f425f053851eab9d38057383a900c6b741_prof);

        
        $__internal_3bd164b6ed53fd5058329d7bdbd92900362ffae4679c59a04b7a217b625d9945->leave($__internal_3bd164b6ed53fd5058329d7bdbd92900362ffae4679c59a04b7a217b625d9945_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_bea300dc3095de90ea83bf58e55fb6af4cded981c4049b7ea49a49a5cd9301a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea300dc3095de90ea83bf58e55fb6af4cded981c4049b7ea49a49a5cd9301a4->enter($__internal_bea300dc3095de90ea83bf58e55fb6af4cded981c4049b7ea49a49a5cd9301a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_a57ea9b79d14a07be1c70cbb6151d8f59a116fb545e23986b7462034a6924121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57ea9b79d14a07be1c70cbb6151d8f59a116fb545e23986b7462034a6924121->enter($__internal_a57ea9b79d14a07be1c70cbb6151d8f59a116fb545e23986b7462034a6924121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_a57ea9b79d14a07be1c70cbb6151d8f59a116fb545e23986b7462034a6924121->leave($__internal_a57ea9b79d14a07be1c70cbb6151d8f59a116fb545e23986b7462034a6924121_prof);

        
        $__internal_bea300dc3095de90ea83bf58e55fb6af4cded981c4049b7ea49a49a5cd9301a4->leave($__internal_bea300dc3095de90ea83bf58e55fb6af4cded981c4049b7ea49a49a5cd9301a4_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_946b77aaf6574cdc5caa0c1a59e237e3a4a68f61c46554425386b13d1d4d7a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946b77aaf6574cdc5caa0c1a59e237e3a4a68f61c46554425386b13d1d4d7a25->enter($__internal_946b77aaf6574cdc5caa0c1a59e237e3a4a68f61c46554425386b13d1d4d7a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_8e9d98125350ba11495465f7096ae20343c0cad7b23435b1e93e4433a525b945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9d98125350ba11495465f7096ae20343c0cad7b23435b1e93e4433a525b945->enter($__internal_8e9d98125350ba11495465f7096ae20343c0cad7b23435b1e93e4433a525b945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_8e9d98125350ba11495465f7096ae20343c0cad7b23435b1e93e4433a525b945->leave($__internal_8e9d98125350ba11495465f7096ae20343c0cad7b23435b1e93e4433a525b945_prof);

        
        $__internal_946b77aaf6574cdc5caa0c1a59e237e3a4a68f61c46554425386b13d1d4d7a25->leave($__internal_946b77aaf6574cdc5caa0c1a59e237e3a4a68f61c46554425386b13d1d4d7a25_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_1f358586ade2ed8a51225f5562b143137a275287c2b76508051b2f1f28572f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f358586ade2ed8a51225f5562b143137a275287c2b76508051b2f1f28572f46->enter($__internal_1f358586ade2ed8a51225f5562b143137a275287c2b76508051b2f1f28572f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_70c5d0833e04e062dc2873b54d480001649f96bfdcad55fb69d76fa92412d078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c5d0833e04e062dc2873b54d480001649f96bfdcad55fb69d76fa92412d078->enter($__internal_70c5d0833e04e062dc2873b54d480001649f96bfdcad55fb69d76fa92412d078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
                        Enregistrement de nouvelles courses
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    MASTER ! 
                </h2><!-- /.Section-title  -->


                <article class=\"box\">
                    <div class=\"content\">
                        <table class=\"table table-inverse\">
                            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["MeetingType"] ?? $this->getContext($context, "MeetingType")), 'form_start');
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["MeetingType"] ?? $this->getContext($context, "MeetingType")), 'widget');
        echo "
                            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["MeetingType"] ?? $this->getContext($context, "MeetingType")), 'form_end');
        echo "
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
";
        
        $__internal_70c5d0833e04e062dc2873b54d480001649f96bfdcad55fb69d76fa92412d078->leave($__internal_70c5d0833e04e062dc2873b54d480001649f96bfdcad55fb69d76fa92412d078_prof);

        
        $__internal_1f358586ade2ed8a51225f5562b143137a275287c2b76508051b2f1f28572f46->leave($__internal_1f358586ade2ed8a51225f5562b143137a275287c2b76508051b2f1f28572f46_prof);

    }

    public function getTemplateName()
    {
        return ":default:nouvellecourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  117 => 34,  113 => 33,  94 => 17,  90 => 15,  81 => 14,  68 => 9,  59 => 8,  42 => 6,  11 => 1,);
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
                        Enregistrement de nouvelles courses
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    MASTER ! 
                </h2><!-- /.Section-title  -->


                <article class=\"box\">
                    <div class=\"content\">
                        <table class=\"table table-inverse\">
                            {{ form_start(MeetingType) }}
                            {{ form_widget(MeetingType) }}
                            {{ form_end(MeetingType) }}
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
{%endblock%}
", ":default:nouvellecourse.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/nouvellecourse.html.twig");
    }
}
