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
        $__internal_8ac3b3f7d90d96864cc480b7a78a31e1f415d070978e2d828d0330e4877b0ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac3b3f7d90d96864cc480b7a78a31e1f415d070978e2d828d0330e4877b0ae7->enter($__internal_8ac3b3f7d90d96864cc480b7a78a31e1f415d070978e2d828d0330e4877b0ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $__internal_19b4fa0dfd0d6d41373de5c85d663101f6884b93c145647342f007b5754f915f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b4fa0dfd0d6d41373de5c85d663101f6884b93c145647342f007b5754f915f->enter($__internal_19b4fa0dfd0d6d41373de5c85d663101f6884b93c145647342f007b5754f915f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac3b3f7d90d96864cc480b7a78a31e1f415d070978e2d828d0330e4877b0ae7->leave($__internal_8ac3b3f7d90d96864cc480b7a78a31e1f415d070978e2d828d0330e4877b0ae7_prof);

        
        $__internal_19b4fa0dfd0d6d41373de5c85d663101f6884b93c145647342f007b5754f915f->leave($__internal_19b4fa0dfd0d6d41373de5c85d663101f6884b93c145647342f007b5754f915f_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_423c5f3f0a855e2110ba1fed4593d34f9601979e667285d2768282f8274395a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423c5f3f0a855e2110ba1fed4593d34f9601979e667285d2768282f8274395a4->enter($__internal_423c5f3f0a855e2110ba1fed4593d34f9601979e667285d2768282f8274395a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_7ab6f5eefd6fe66b507ee26b2b307f4970acadffbe9749d4aa2fe8e553ca3d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab6f5eefd6fe66b507ee26b2b307f4970acadffbe9749d4aa2fe8e553ca3d02->enter($__internal_7ab6f5eefd6fe66b507ee26b2b307f4970acadffbe9749d4aa2fe8e553ca3d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_7ab6f5eefd6fe66b507ee26b2b307f4970acadffbe9749d4aa2fe8e553ca3d02->leave($__internal_7ab6f5eefd6fe66b507ee26b2b307f4970acadffbe9749d4aa2fe8e553ca3d02_prof);

        
        $__internal_423c5f3f0a855e2110ba1fed4593d34f9601979e667285d2768282f8274395a4->leave($__internal_423c5f3f0a855e2110ba1fed4593d34f9601979e667285d2768282f8274395a4_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_7af0590eb59ccc0578906ab3ded15d45543f4e5e2ab549bc40576fc8de52bdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af0590eb59ccc0578906ab3ded15d45543f4e5e2ab549bc40576fc8de52bdf0->enter($__internal_7af0590eb59ccc0578906ab3ded15d45543f4e5e2ab549bc40576fc8de52bdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_90e8786a42e331fe9f6b797e1f3d8d1882f4794dab6176b7524affdf1f31d5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e8786a42e331fe9f6b797e1f3d8d1882f4794dab6176b7524affdf1f31d5d5->enter($__internal_90e8786a42e331fe9f6b797e1f3d8d1882f4794dab6176b7524affdf1f31d5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_90e8786a42e331fe9f6b797e1f3d8d1882f4794dab6176b7524affdf1f31d5d5->leave($__internal_90e8786a42e331fe9f6b797e1f3d8d1882f4794dab6176b7524affdf1f31d5d5_prof);

        
        $__internal_7af0590eb59ccc0578906ab3ded15d45543f4e5e2ab549bc40576fc8de52bdf0->leave($__internal_7af0590eb59ccc0578906ab3ded15d45543f4e5e2ab549bc40576fc8de52bdf0_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_91ad14eec270ea8d9002a8f1a9cc9b5b3b2f8975090b34c2e6fe01a50cc5f686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ad14eec270ea8d9002a8f1a9cc9b5b3b2f8975090b34c2e6fe01a50cc5f686->enter($__internal_91ad14eec270ea8d9002a8f1a9cc9b5b3b2f8975090b34c2e6fe01a50cc5f686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_9ca9305853e70d36bbaea312afc5b7e288982dabc19bcebdf0954410660b6e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca9305853e70d36bbaea312afc5b7e288982dabc19bcebdf0954410660b6e82->enter($__internal_9ca9305853e70d36bbaea312afc5b7e288982dabc19bcebdf0954410660b6e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
        
        $__internal_9ca9305853e70d36bbaea312afc5b7e288982dabc19bcebdf0954410660b6e82->leave($__internal_9ca9305853e70d36bbaea312afc5b7e288982dabc19bcebdf0954410660b6e82_prof);

        
        $__internal_91ad14eec270ea8d9002a8f1a9cc9b5b3b2f8975090b34c2e6fe01a50cc5f686->leave($__internal_91ad14eec270ea8d9002a8f1a9cc9b5b3b2f8975090b34c2e6fe01a50cc5f686_prof);

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
