<?php

/* :default:member.html.twig */
class __TwigTemplate_741a3da8355bea24213a1813e611abe9be6e5e1ba16b0c7eda490a6d6702fba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:member.html.twig", 1);
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
        $__internal_159e175c8f50411673ad6d09e58151169c21d22c62eb27c5382ebc67a89ac301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159e175c8f50411673ad6d09e58151169c21d22c62eb27c5382ebc67a89ac301->enter($__internal_159e175c8f50411673ad6d09e58151169c21d22c62eb27c5382ebc67a89ac301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:member.html.twig"));

        $__internal_a114b62760426b047fff0b063b23ab4510ddd03566607fe879c4681395413f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a114b62760426b047fff0b063b23ab4510ddd03566607fe879c4681395413f5d->enter($__internal_a114b62760426b047fff0b063b23ab4510ddd03566607fe879c4681395413f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:member.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_159e175c8f50411673ad6d09e58151169c21d22c62eb27c5382ebc67a89ac301->leave($__internal_159e175c8f50411673ad6d09e58151169c21d22c62eb27c5382ebc67a89ac301_prof);

        
        $__internal_a114b62760426b047fff0b063b23ab4510ddd03566607fe879c4681395413f5d->leave($__internal_a114b62760426b047fff0b063b23ab4510ddd03566607fe879c4681395413f5d_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_fcb45908cdaad21d615bfb159aae333d769a7a1d7b316deefd66a8a228e20ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb45908cdaad21d615bfb159aae333d769a7a1d7b316deefd66a8a228e20ba1->enter($__internal_fcb45908cdaad21d615bfb159aae333d769a7a1d7b316deefd66a8a228e20ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_89696565b1a8be83b47bf117289ffe2cc6fd583e04baf36575cfe29c35efdcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89696565b1a8be83b47bf117289ffe2cc6fd583e04baf36575cfe29c35efdcd5->enter($__internal_89696565b1a8be83b47bf117289ffe2cc6fd583e04baf36575cfe29c35efdcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_89696565b1a8be83b47bf117289ffe2cc6fd583e04baf36575cfe29c35efdcd5->leave($__internal_89696565b1a8be83b47bf117289ffe2cc6fd583e04baf36575cfe29c35efdcd5_prof);

        
        $__internal_fcb45908cdaad21d615bfb159aae333d769a7a1d7b316deefd66a8a228e20ba1->leave($__internal_fcb45908cdaad21d615bfb159aae333d769a7a1d7b316deefd66a8a228e20ba1_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_0be1b3f4c3adc78139e9725f95bd62da03b7328032d1d01eb407bacf388b24a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be1b3f4c3adc78139e9725f95bd62da03b7328032d1d01eb407bacf388b24a7->enter($__internal_0be1b3f4c3adc78139e9725f95bd62da03b7328032d1d01eb407bacf388b24a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_b2908b6cc0b9c4f86be7940a4f2a4ee15b95cc53b6be811e9a652f7430d34ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2908b6cc0b9c4f86be7940a4f2a4ee15b95cc53b6be811e9a652f7430d34ae3->enter($__internal_b2908b6cc0b9c4f86be7940a4f2a4ee15b95cc53b6be811e9a652f7430d34ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_b2908b6cc0b9c4f86be7940a4f2a4ee15b95cc53b6be811e9a652f7430d34ae3->leave($__internal_b2908b6cc0b9c4f86be7940a4f2a4ee15b95cc53b6be811e9a652f7430d34ae3_prof);

        
        $__internal_0be1b3f4c3adc78139e9725f95bd62da03b7328032d1d01eb407bacf388b24a7->leave($__internal_0be1b3f4c3adc78139e9725f95bd62da03b7328032d1d01eb407bacf388b24a7_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_11669953b1c9b42359e97884bf73010a3590cbf9c94d3f88d95edfb4eac67fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11669953b1c9b42359e97884bf73010a3590cbf9c94d3f88d95edfb4eac67fdc->enter($__internal_11669953b1c9b42359e97884bf73010a3590cbf9c94d3f88d95edfb4eac67fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_829dcbcbb150afafd7724d8f694a32f447d2e8812a777592c61687798b13ca01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829dcbcbb150afafd7724d8f694a32f447d2e8812a777592c61687798b13ca01->enter($__internal_829dcbcbb150afafd7724d8f694a32f447d2e8812a777592c61687798b13ca01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
                        Ici c'est pour devenir un espoir
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    USER for user ! 
                </h2><!-- /.Section-title  -->
 
                                                <br/>
                            
                                <a class=\"btn btn-success\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\" role=\"button\">Inscription comme coureur</a>
                              <br/>  
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meetings"] ?? $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 34
            echo "                            <tr>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "name", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscriptionCourse", array("id" => $this->getAttribute($context["meeting"], "id", array()))), "html", null, true);
            echo "\">Inscription a la course </a></td>
                              <br/>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "   
                                
                                 
                           

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
";
        
        $__internal_829dcbcbb150afafd7724d8f694a32f447d2e8812a777592c61687798b13ca01->leave($__internal_829dcbcbb150afafd7724d8f694a32f447d2e8812a777592c61687798b13ca01_prof);

        
        $__internal_11669953b1c9b42359e97884bf73010a3590cbf9c94d3f88d95edfb4eac67fdc->leave($__internal_11669953b1c9b42359e97884bf73010a3590cbf9c94d3f88d95edfb4eac67fdc_prof);

    }

    public function getTemplateName()
    {
        return ":default:member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  123 => 35,  120 => 34,  116 => 33,  111 => 31,  94 => 17,  90 => 15,  81 => 14,  68 => 9,  59 => 8,  42 => 6,  11 => 1,);
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
                        Ici c'est pour devenir un espoir
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    USER for user ! 
                </h2><!-- /.Section-title  -->
 
                                                <br/>
                            
                                <a class=\"btn btn-success\" href=\"{{ path('inscription') }}\" role=\"button\">Inscription comme coureur</a>
                              <br/>  
                                {% for meeting in meetings %}
                            <tr>
                                <td>{{ meeting.name }} <a href=\"{{ path('inscriptionCourse', {id: meeting.id}) }}\">Inscription a la course </a></td>
                              <br/>
                            </tr>
                            {% endfor %}   
                                
                                 
                           

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
{%endblock%}{# empty Twig template #}", ":default:member.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/member.html.twig");
    }
}
