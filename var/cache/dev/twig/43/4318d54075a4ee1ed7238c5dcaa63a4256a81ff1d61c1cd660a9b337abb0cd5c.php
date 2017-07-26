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
        $__internal_518a0d09ec4e348e239d7d9ec4ce8fce70f1b0ff5b89e72d6c05b7858c60a4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518a0d09ec4e348e239d7d9ec4ce8fce70f1b0ff5b89e72d6c05b7858c60a4d6->enter($__internal_518a0d09ec4e348e239d7d9ec4ce8fce70f1b0ff5b89e72d6c05b7858c60a4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $__internal_767487ae8bf215fe13f701cbb14be945e87f007f0e661b315c68272f2465fde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767487ae8bf215fe13f701cbb14be945e87f007f0e661b315c68272f2465fde8->enter($__internal_767487ae8bf215fe13f701cbb14be945e87f007f0e661b315c68272f2465fde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_518a0d09ec4e348e239d7d9ec4ce8fce70f1b0ff5b89e72d6c05b7858c60a4d6->leave($__internal_518a0d09ec4e348e239d7d9ec4ce8fce70f1b0ff5b89e72d6c05b7858c60a4d6_prof);

        
        $__internal_767487ae8bf215fe13f701cbb14be945e87f007f0e661b315c68272f2465fde8->leave($__internal_767487ae8bf215fe13f701cbb14be945e87f007f0e661b315c68272f2465fde8_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_7002a3533b211ed36a30e65e658f617d04d3c360bf7c23de4afd49acedad8734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7002a3533b211ed36a30e65e658f617d04d3c360bf7c23de4afd49acedad8734->enter($__internal_7002a3533b211ed36a30e65e658f617d04d3c360bf7c23de4afd49acedad8734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_0241c2945b659c7913ec01c2c1033014bd5a9ba7515d27f8d4271e09beae5483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0241c2945b659c7913ec01c2c1033014bd5a9ba7515d27f8d4271e09beae5483->enter($__internal_0241c2945b659c7913ec01c2c1033014bd5a9ba7515d27f8d4271e09beae5483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_0241c2945b659c7913ec01c2c1033014bd5a9ba7515d27f8d4271e09beae5483->leave($__internal_0241c2945b659c7913ec01c2c1033014bd5a9ba7515d27f8d4271e09beae5483_prof);

        
        $__internal_7002a3533b211ed36a30e65e658f617d04d3c360bf7c23de4afd49acedad8734->leave($__internal_7002a3533b211ed36a30e65e658f617d04d3c360bf7c23de4afd49acedad8734_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_3fbce276aa143cebed92ef3018089ef33d28dbabe74815606699f50dc557bf43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbce276aa143cebed92ef3018089ef33d28dbabe74815606699f50dc557bf43->enter($__internal_3fbce276aa143cebed92ef3018089ef33d28dbabe74815606699f50dc557bf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_a74a73694a9265456a290663ebe23c820997294745a846f2aa73bac061c0f51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74a73694a9265456a290663ebe23c820997294745a846f2aa73bac061c0f51a->enter($__internal_a74a73694a9265456a290663ebe23c820997294745a846f2aa73bac061c0f51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_a74a73694a9265456a290663ebe23c820997294745a846f2aa73bac061c0f51a->leave($__internal_a74a73694a9265456a290663ebe23c820997294745a846f2aa73bac061c0f51a_prof);

        
        $__internal_3fbce276aa143cebed92ef3018089ef33d28dbabe74815606699f50dc557bf43->leave($__internal_3fbce276aa143cebed92ef3018089ef33d28dbabe74815606699f50dc557bf43_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_da7c69733e08d8fe2114eaeb9d171c791995bafa67f622ca3c12ab86659b6e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7c69733e08d8fe2114eaeb9d171c791995bafa67f622ca3c12ab86659b6e3e->enter($__internal_da7c69733e08d8fe2114eaeb9d171c791995bafa67f622ca3c12ab86659b6e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_3e1d0d40cdf60556c310df40fb5b7f029cad24561a38028c55fe0fc1a8534314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1d0d40cdf60556c310df40fb5b7f029cad24561a38028c55fe0fc1a8534314->enter($__internal_3e1d0d40cdf60556c310df40fb5b7f029cad24561a38028c55fe0fc1a8534314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
        
        $__internal_3e1d0d40cdf60556c310df40fb5b7f029cad24561a38028c55fe0fc1a8534314->leave($__internal_3e1d0d40cdf60556c310df40fb5b7f029cad24561a38028c55fe0fc1a8534314_prof);

        
        $__internal_da7c69733e08d8fe2114eaeb9d171c791995bafa67f622ca3c12ab86659b6e3e->leave($__internal_da7c69733e08d8fe2114eaeb9d171c791995bafa67f622ca3c12ab86659b6e3e_prof);

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
