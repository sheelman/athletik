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
        $__internal_83cd66505d8bcdb51f8a5f8bf60eb3789e28a61b2e8033e5256021b25e570617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cd66505d8bcdb51f8a5f8bf60eb3789e28a61b2e8033e5256021b25e570617->enter($__internal_83cd66505d8bcdb51f8a5f8bf60eb3789e28a61b2e8033e5256021b25e570617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $__internal_5fd50f542fbccf7932c567b82109a3f8d1547d3c58ac6710730b6b9bb397f48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd50f542fbccf7932c567b82109a3f8d1547d3c58ac6710730b6b9bb397f48c->enter($__internal_5fd50f542fbccf7932c567b82109a3f8d1547d3c58ac6710730b6b9bb397f48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nouvellecourse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83cd66505d8bcdb51f8a5f8bf60eb3789e28a61b2e8033e5256021b25e570617->leave($__internal_83cd66505d8bcdb51f8a5f8bf60eb3789e28a61b2e8033e5256021b25e570617_prof);

        
        $__internal_5fd50f542fbccf7932c567b82109a3f8d1547d3c58ac6710730b6b9bb397f48c->leave($__internal_5fd50f542fbccf7932c567b82109a3f8d1547d3c58ac6710730b6b9bb397f48c_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_e5be24d4c767fb0af81be2a51b9f684984ab56765bbfcbc800e7ea372afc1a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5be24d4c767fb0af81be2a51b9f684984ab56765bbfcbc800e7ea372afc1a98->enter($__internal_e5be24d4c767fb0af81be2a51b9f684984ab56765bbfcbc800e7ea372afc1a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_cdafeb6a75653110d57718febadbcc07e4f0cc856fa534eda26a8828fd9c3b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdafeb6a75653110d57718febadbcc07e4f0cc856fa534eda26a8828fd9c3b07->enter($__internal_cdafeb6a75653110d57718febadbcc07e4f0cc856fa534eda26a8828fd9c3b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_cdafeb6a75653110d57718febadbcc07e4f0cc856fa534eda26a8828fd9c3b07->leave($__internal_cdafeb6a75653110d57718febadbcc07e4f0cc856fa534eda26a8828fd9c3b07_prof);

        
        $__internal_e5be24d4c767fb0af81be2a51b9f684984ab56765bbfcbc800e7ea372afc1a98->leave($__internal_e5be24d4c767fb0af81be2a51b9f684984ab56765bbfcbc800e7ea372afc1a98_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_a023ddd761221ecd0aa244b0fa812c4f78a1952fbf88ef360261413bb857efc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a023ddd761221ecd0aa244b0fa812c4f78a1952fbf88ef360261413bb857efc5->enter($__internal_a023ddd761221ecd0aa244b0fa812c4f78a1952fbf88ef360261413bb857efc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_4562eeeeb9ad881af4e3adbab111468dc1618a33a732b8f4e57fbea86a6ea1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4562eeeeb9ad881af4e3adbab111468dc1618a33a732b8f4e57fbea86a6ea1a2->enter($__internal_4562eeeeb9ad881af4e3adbab111468dc1618a33a732b8f4e57fbea86a6ea1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "    <div class=\"next-section\">
        <a class=\"go-to-classement\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_4562eeeeb9ad881af4e3adbab111468dc1618a33a732b8f4e57fbea86a6ea1a2->leave($__internal_4562eeeeb9ad881af4e3adbab111468dc1618a33a732b8f4e57fbea86a6ea1a2_prof);

        
        $__internal_a023ddd761221ecd0aa244b0fa812c4f78a1952fbf88ef360261413bb857efc5->leave($__internal_a023ddd761221ecd0aa244b0fa812c4f78a1952fbf88ef360261413bb857efc5_prof);

    }

    // line 14
    public function block_admin($context, array $blocks = array())
    {
        $__internal_046dda6afd9582d8fc30a0602f67faeb5b175debd7639f2291abc530efec2a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046dda6afd9582d8fc30a0602f67faeb5b175debd7639f2291abc530efec2a01->enter($__internal_046dda6afd9582d8fc30a0602f67faeb5b175debd7639f2291abc530efec2a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        $__internal_43a5ee0b08d1ca2f996c79ab8b3a36cf57aa4800096346e93a7c827783d73d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a5ee0b08d1ca2f996c79ab8b3a36cf57aa4800096346e93a7c827783d73d9e->enter($__internal_43a5ee0b08d1ca2f996c79ab8b3a36cf57aa4800096346e93a7c827783d73d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
        
        $__internal_43a5ee0b08d1ca2f996c79ab8b3a36cf57aa4800096346e93a7c827783d73d9e->leave($__internal_43a5ee0b08d1ca2f996c79ab8b3a36cf57aa4800096346e93a7c827783d73d9e_prof);

        
        $__internal_046dda6afd9582d8fc30a0602f67faeb5b175debd7639f2291abc530efec2a01->leave($__internal_046dda6afd9582d8fc30a0602f67faeb5b175debd7639f2291abc530efec2a01_prof);

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
