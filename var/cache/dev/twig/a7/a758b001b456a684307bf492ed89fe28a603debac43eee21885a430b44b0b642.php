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
        $__internal_5652cc98f317045d7668b642665550e4cbdb92d61a77cac53321f6a0af641c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5652cc98f317045d7668b642665550e4cbdb92d61a77cac53321f6a0af641c79->enter($__internal_5652cc98f317045d7668b642665550e4cbdb92d61a77cac53321f6a0af641c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:member.html.twig"));

        $__internal_b5e8221b34af0656ef8a8e8a91c6017b7d16026584a16b86899ad6b0b7f2f82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e8221b34af0656ef8a8e8a91c6017b7d16026584a16b86899ad6b0b7f2f82d->enter($__internal_b5e8221b34af0656ef8a8e8a91c6017b7d16026584a16b86899ad6b0b7f2f82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:member.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5652cc98f317045d7668b642665550e4cbdb92d61a77cac53321f6a0af641c79->leave($__internal_5652cc98f317045d7668b642665550e4cbdb92d61a77cac53321f6a0af641c79_prof);

        
        $__internal_b5e8221b34af0656ef8a8e8a91c6017b7d16026584a16b86899ad6b0b7f2f82d->leave($__internal_b5e8221b34af0656ef8a8e8a91c6017b7d16026584a16b86899ad6b0b7f2f82d_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_db88ab7c44bbd0c8e0fe813c4915f604ce6198b3f300f8c168c5e3ef9f357252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db88ab7c44bbd0c8e0fe813c4915f604ce6198b3f300f8c168c5e3ef9f357252->enter($__internal_db88ab7c44bbd0c8e0fe813c4915f604ce6198b3f300f8c168c5e3ef9f357252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_c1c948a111e838082d05339e0f07459ed0f18ed8d054d5bdca80a79951a8dd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c948a111e838082d05339e0f07459ed0f18ed8d054d5bdca80a79951a8dd4e->enter($__internal_c1c948a111e838082d05339e0f07459ed0f18ed8d054d5bdca80a79951a8dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_c1c948a111e838082d05339e0f07459ed0f18ed8d054d5bdca80a79951a8dd4e->leave($__internal_c1c948a111e838082d05339e0f07459ed0f18ed8d054d5bdca80a79951a8dd4e_prof);

        
        $__internal_db88ab7c44bbd0c8e0fe813c4915f604ce6198b3f300f8c168c5e3ef9f357252->leave($__internal_db88ab7c44bbd0c8e0fe813c4915f604ce6198b3f300f8c168c5e3ef9f357252_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_c9f7ff0ca23b407a16ef2d6c4702aa8c59c44a5eb9670fb0465597891df3c32f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f7ff0ca23b407a16ef2d6c4702aa8c59c44a5eb9670fb0465597891df3c32f->enter($__internal_c9f7ff0ca23b407a16ef2d6c4702aa8c59c44a5eb9670fb0465597891df3c32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_4ca7887d02b1c2360c60d2dc1ab57257351caaacaf6a7094b056b4d9e1c12108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca7887d02b1c2360c60d2dc1ab57257351caaacaf6a7094b056b4d9e1c12108->enter($__internal_4ca7887d02b1c2360c60d2dc1ab57257351caaacaf6a7094b056b4d9e1c12108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_4ca7887d02b1c2360c60d2dc1ab57257351caaacaf6a7094b056b4d9e1c12108->leave($__internal_4ca7887d02b1c2360c60d2dc1ab57257351caaacaf6a7094b056b4d9e1c12108_prof);

        
        $__internal_c9f7ff0ca23b407a16ef2d6c4702aa8c59c44a5eb9670fb0465597891df3c32f->leave($__internal_c9f7ff0ca23b407a16ef2d6c4702aa8c59c44a5eb9670fb0465597891df3c32f_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_5fbf8e304c482ba3c621aa1fd899a118ec53fbe5bef3618fe023062e2813435a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbf8e304c482ba3c621aa1fd899a118ec53fbe5bef3618fe023062e2813435a->enter($__internal_5fbf8e304c482ba3c621aa1fd899a118ec53fbe5bef3618fe023062e2813435a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_de4b359f1fa9382cac06041ccc9f156c1a5932af19ff00c8a6c295313c78b82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4b359f1fa9382cac06041ccc9f156c1a5932af19ff00c8a6c295313c78b82b->enter($__internal_de4b359f1fa9382cac06041ccc9f156c1a5932af19ff00c8a6c295313c78b82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_de4b359f1fa9382cac06041ccc9f156c1a5932af19ff00c8a6c295313c78b82b->leave($__internal_de4b359f1fa9382cac06041ccc9f156c1a5932af19ff00c8a6c295313c78b82b_prof);

        
        $__internal_5fbf8e304c482ba3c621aa1fd899a118ec53fbe5bef3618fe023062e2813435a->leave($__internal_5fbf8e304c482ba3c621aa1fd899a118ec53fbe5bef3618fe023062e2813435a_prof);

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
                        Inscription d'un athlete
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    USER ! 
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
