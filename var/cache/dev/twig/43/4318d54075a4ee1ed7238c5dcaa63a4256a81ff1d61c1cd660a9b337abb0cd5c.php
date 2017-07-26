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
        $__internal_00ef7d46cf013f52281105a07559246b4701a83933b1099a9c16a022dada7f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ef7d46cf013f52281105a07559246b4701a83933b1099a9c16a022dada7f82->enter($__internal_00ef7d46cf013f52281105a07559246b4701a83933b1099a9c16a022dada7f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $__internal_d217281426ae31d4fb7cf4d7a0bb00c1b0f6a1656c817571878a21bf73dfa6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d217281426ae31d4fb7cf4d7a0bb00c1b0f6a1656c817571878a21bf73dfa6f4->enter($__internal_d217281426ae31d4fb7cf4d7a0bb00c1b0f6a1656c817571878a21bf73dfa6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ef7d46cf013f52281105a07559246b4701a83933b1099a9c16a022dada7f82->leave($__internal_00ef7d46cf013f52281105a07559246b4701a83933b1099a9c16a022dada7f82_prof);

        
        $__internal_d217281426ae31d4fb7cf4d7a0bb00c1b0f6a1656c817571878a21bf73dfa6f4->leave($__internal_d217281426ae31d4fb7cf4d7a0bb00c1b0f6a1656c817571878a21bf73dfa6f4_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_88a6d7440a27e515c5f750d9a44eed1acdb8818e38a6bbb7228bfdbb762caf9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a6d7440a27e515c5f750d9a44eed1acdb8818e38a6bbb7228bfdbb762caf9a->enter($__internal_88a6d7440a27e515c5f750d9a44eed1acdb8818e38a6bbb7228bfdbb762caf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_45180956a5f704c3a84704cedd2c5356a4333fda230df1dc15d6426d8476cd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45180956a5f704c3a84704cedd2c5356a4333fda230df1dc15d6426d8476cd94->enter($__internal_45180956a5f704c3a84704cedd2c5356a4333fda230df1dc15d6426d8476cd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_45180956a5f704c3a84704cedd2c5356a4333fda230df1dc15d6426d8476cd94->leave($__internal_45180956a5f704c3a84704cedd2c5356a4333fda230df1dc15d6426d8476cd94_prof);

        
        $__internal_88a6d7440a27e515c5f750d9a44eed1acdb8818e38a6bbb7228bfdbb762caf9a->leave($__internal_88a6d7440a27e515c5f750d9a44eed1acdb8818e38a6bbb7228bfdbb762caf9a_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_71604e7b9834b7e2408ab0887dc30b98f351304a377e02e39386e01d0b3dc958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71604e7b9834b7e2408ab0887dc30b98f351304a377e02e39386e01d0b3dc958->enter($__internal_71604e7b9834b7e2408ab0887dc30b98f351304a377e02e39386e01d0b3dc958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_02255023ae280950c960e80b3e98b996dbd661eb5be64895c0f8bc8054f76210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02255023ae280950c960e80b3e98b996dbd661eb5be64895c0f8bc8054f76210->enter($__internal_02255023ae280950c960e80b3e98b996dbd661eb5be64895c0f8bc8054f76210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_02255023ae280950c960e80b3e98b996dbd661eb5be64895c0f8bc8054f76210->leave($__internal_02255023ae280950c960e80b3e98b996dbd661eb5be64895c0f8bc8054f76210_prof);

        
        $__internal_71604e7b9834b7e2408ab0887dc30b98f351304a377e02e39386e01d0b3dc958->leave($__internal_71604e7b9834b7e2408ab0887dc30b98f351304a377e02e39386e01d0b3dc958_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_fd8dca72cc5cdbbd536f68b607af86e9e0376a6151d091cb9122c2f31d9e0b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8dca72cc5cdbbd536f68b607af86e9e0376a6151d091cb9122c2f31d9e0b4f->enter($__internal_fd8dca72cc5cdbbd536f68b607af86e9e0376a6151d091cb9122c2f31d9e0b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_5ba51761ebb38efde80375e66053aeeed9677bd12836a05cb0998ba8145d7438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba51761ebb38efde80375e66053aeeed9677bd12836a05cb0998ba8145d7438->enter($__internal_5ba51761ebb38efde80375e66053aeeed9677bd12836a05cb0998ba8145d7438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
        
        $__internal_5ba51761ebb38efde80375e66053aeeed9677bd12836a05cb0998ba8145d7438->leave($__internal_5ba51761ebb38efde80375e66053aeeed9677bd12836a05cb0998ba8145d7438_prof);

        
        $__internal_fd8dca72cc5cdbbd536f68b607af86e9e0376a6151d091cb9122c2f31d9e0b4f->leave($__internal_fd8dca72cc5cdbbd536f68b607af86e9e0376a6151d091cb9122c2f31d9e0b4f_prof);

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
