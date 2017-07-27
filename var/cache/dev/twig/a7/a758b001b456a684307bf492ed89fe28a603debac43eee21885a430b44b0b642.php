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
        $__internal_14cc97ef09ef9cd3b75270965bbfcf4ca3a93496ee81b2f50cd7419ace330203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cc97ef09ef9cd3b75270965bbfcf4ca3a93496ee81b2f50cd7419ace330203->enter($__internal_14cc97ef09ef9cd3b75270965bbfcf4ca3a93496ee81b2f50cd7419ace330203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:member.html.twig"));

        $__internal_ab347fd79f1f8c76ff1ed917c0bb1f0446f2f694eb4d6d72f7f8991521b9f324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab347fd79f1f8c76ff1ed917c0bb1f0446f2f694eb4d6d72f7f8991521b9f324->enter($__internal_ab347fd79f1f8c76ff1ed917c0bb1f0446f2f694eb4d6d72f7f8991521b9f324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:member.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14cc97ef09ef9cd3b75270965bbfcf4ca3a93496ee81b2f50cd7419ace330203->leave($__internal_14cc97ef09ef9cd3b75270965bbfcf4ca3a93496ee81b2f50cd7419ace330203_prof);

        
        $__internal_ab347fd79f1f8c76ff1ed917c0bb1f0446f2f694eb4d6d72f7f8991521b9f324->leave($__internal_ab347fd79f1f8c76ff1ed917c0bb1f0446f2f694eb4d6d72f7f8991521b9f324_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_aa5237a6cc049c3bfce1f71e6235b8ab88d8bf8f94d64d5a3e2ec064647930fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5237a6cc049c3bfce1f71e6235b8ab88d8bf8f94d64d5a3e2ec064647930fe->enter($__internal_aa5237a6cc049c3bfce1f71e6235b8ab88d8bf8f94d64d5a3e2ec064647930fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_799eab97c47fe4daade56a38e2581b6becafe1f0fa7faaec03901cf83f8172da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799eab97c47fe4daade56a38e2581b6becafe1f0fa7faaec03901cf83f8172da->enter($__internal_799eab97c47fe4daade56a38e2581b6becafe1f0fa7faaec03901cf83f8172da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_799eab97c47fe4daade56a38e2581b6becafe1f0fa7faaec03901cf83f8172da->leave($__internal_799eab97c47fe4daade56a38e2581b6becafe1f0fa7faaec03901cf83f8172da_prof);

        
        $__internal_aa5237a6cc049c3bfce1f71e6235b8ab88d8bf8f94d64d5a3e2ec064647930fe->leave($__internal_aa5237a6cc049c3bfce1f71e6235b8ab88d8bf8f94d64d5a3e2ec064647930fe_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_3fc81200f09a52eee9535846e6f16e1b79f2ec30bb4fa2f28b748ce628201075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc81200f09a52eee9535846e6f16e1b79f2ec30bb4fa2f28b748ce628201075->enter($__internal_3fc81200f09a52eee9535846e6f16e1b79f2ec30bb4fa2f28b748ce628201075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_92c85a8078704d89cad98a926a3d171ae0d2aed931a7daaeeaf4ed3dafd852ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c85a8078704d89cad98a926a3d171ae0d2aed931a7daaeeaf4ed3dafd852ed->enter($__internal_92c85a8078704d89cad98a926a3d171ae0d2aed931a7daaeeaf4ed3dafd852ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_92c85a8078704d89cad98a926a3d171ae0d2aed931a7daaeeaf4ed3dafd852ed->leave($__internal_92c85a8078704d89cad98a926a3d171ae0d2aed931a7daaeeaf4ed3dafd852ed_prof);

        
        $__internal_3fc81200f09a52eee9535846e6f16e1b79f2ec30bb4fa2f28b748ce628201075->leave($__internal_3fc81200f09a52eee9535846e6f16e1b79f2ec30bb4fa2f28b748ce628201075_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_defe72b947173d551275e03660d6f70c76f49598d1dd8d993d76e7d3364bd519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_defe72b947173d551275e03660d6f70c76f49598d1dd8d993d76e7d3364bd519->enter($__internal_defe72b947173d551275e03660d6f70c76f49598d1dd8d993d76e7d3364bd519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_7225e2dffa2f97322e69af23c1a8927c75e3c1ed98725c3cc77ec63e5c09b570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7225e2dffa2f97322e69af23c1a8927c75e3c1ed98725c3cc77ec63e5c09b570->enter($__internal_7225e2dffa2f97322e69af23c1a8927c75e3c1ed98725c3cc77ec63e5c09b570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
        
        $__internal_7225e2dffa2f97322e69af23c1a8927c75e3c1ed98725c3cc77ec63e5c09b570->leave($__internal_7225e2dffa2f97322e69af23c1a8927c75e3c1ed98725c3cc77ec63e5c09b570_prof);

        
        $__internal_defe72b947173d551275e03660d6f70c76f49598d1dd8d993d76e7d3364bd519->leave($__internal_defe72b947173d551275e03660d6f70c76f49598d1dd8d993d76e7d3364bd519_prof);

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
