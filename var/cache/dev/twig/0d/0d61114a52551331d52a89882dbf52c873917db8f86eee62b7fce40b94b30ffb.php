<?php

/* :default:inscription.html.twig */
class __TwigTemplate_ba87f8493f2d020f5c762049a07a5bf5152a9802c718fb529a4dec46215ee1e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:inscription.html.twig", 1);
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
        $__internal_db16c7dea384fa178d08c1ca1de1e8927bc7da01e6f3bc2b4bbe1677ee0286cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db16c7dea384fa178d08c1ca1de1e8927bc7da01e6f3bc2b4bbe1677ee0286cb->enter($__internal_db16c7dea384fa178d08c1ca1de1e8927bc7da01e6f3bc2b4bbe1677ee0286cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscription.html.twig"));

        $__internal_0508fc4e153f8ad4c6d5f6d0ba1c31b38991b8f1357c91a2bc8d9dc67d620720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0508fc4e153f8ad4c6d5f6d0ba1c31b38991b8f1357c91a2bc8d9dc67d620720->enter($__internal_0508fc4e153f8ad4c6d5f6d0ba1c31b38991b8f1357c91a2bc8d9dc67d620720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db16c7dea384fa178d08c1ca1de1e8927bc7da01e6f3bc2b4bbe1677ee0286cb->leave($__internal_db16c7dea384fa178d08c1ca1de1e8927bc7da01e6f3bc2b4bbe1677ee0286cb_prof);

        
        $__internal_0508fc4e153f8ad4c6d5f6d0ba1c31b38991b8f1357c91a2bc8d9dc67d620720->leave($__internal_0508fc4e153f8ad4c6d5f6d0ba1c31b38991b8f1357c91a2bc8d9dc67d620720_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_dbeef28091f3b67c2aefa05167aac46bb4d1b84ab9de6e2c0e4bf82c91049496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbeef28091f3b67c2aefa05167aac46bb4d1b84ab9de6e2c0e4bf82c91049496->enter($__internal_dbeef28091f3b67c2aefa05167aac46bb4d1b84ab9de6e2c0e4bf82c91049496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_7be3762b47478c5e81dec117f6c21ccc92234c698c3bbc0f0b5e39a1300301e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be3762b47478c5e81dec117f6c21ccc92234c698c3bbc0f0b5e39a1300301e5->enter($__internal_7be3762b47478c5e81dec117f6c21ccc92234c698c3bbc0f0b5e39a1300301e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_7be3762b47478c5e81dec117f6c21ccc92234c698c3bbc0f0b5e39a1300301e5->leave($__internal_7be3762b47478c5e81dec117f6c21ccc92234c698c3bbc0f0b5e39a1300301e5_prof);

        
        $__internal_dbeef28091f3b67c2aefa05167aac46bb4d1b84ab9de6e2c0e4bf82c91049496->leave($__internal_dbeef28091f3b67c2aefa05167aac46bb4d1b84ab9de6e2c0e4bf82c91049496_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_de29f4b77aeb0d01838f17d174d50963901e2d66cd08d30d3faef15638f4921f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de29f4b77aeb0d01838f17d174d50963901e2d66cd08d30d3faef15638f4921f->enter($__internal_de29f4b77aeb0d01838f17d174d50963901e2d66cd08d30d3faef15638f4921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_4e8fc09acc38d4b144cd0f54a75d6089a30e6b427d7567a6a19ae60f75457ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8fc09acc38d4b144cd0f54a75d6089a30e6b427d7567a6a19ae60f75457ee3->enter($__internal_4e8fc09acc38d4b144cd0f54a75d6089a30e6b427d7567a6a19ae60f75457ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_4e8fc09acc38d4b144cd0f54a75d6089a30e6b427d7567a6a19ae60f75457ee3->leave($__internal_4e8fc09acc38d4b144cd0f54a75d6089a30e6b427d7567a6a19ae60f75457ee3_prof);

        
        $__internal_de29f4b77aeb0d01838f17d174d50963901e2d66cd08d30d3faef15638f4921f->leave($__internal_de29f4b77aeb0d01838f17d174d50963901e2d66cd08d30d3faef15638f4921f_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_a388f2631fbfcd2d545a7103a145de4ad27ebf8ab168ce581cda513680f31210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a388f2631fbfcd2d545a7103a145de4ad27ebf8ab168ce581cda513680f31210->enter($__internal_a388f2631fbfcd2d545a7103a145de4ad27ebf8ab168ce581cda513680f31210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_1315f953141cc3f8bd1835de419bce7295dc87123b57b19b54a2f8fa1b4de49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1315f953141cc3f8bd1835de419bce7295dc87123b57b19b54a2f8fa1b4de49a->enter($__internal_1315f953141cc3f8bd1835de419bce7295dc87123b57b19b54a2f8fa1b4de49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
                        Classement général
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    USER ! 
                </h2><!-- /.Section-title  -->
                <p class=\"section-description\">
                    « Courir est un sanctuaire pour moi. Ça me tient centré. Je ne peux pas prendre mon téléphone portable ou mon ordinateur. Je peux ne pas être disponible et être totalement égoïste. »
                    - Tanna Frederick, Actrice
                </p><!-- /.section-description -->

                ";
        // line 65
        echo "
                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
";
        
        $__internal_1315f953141cc3f8bd1835de419bce7295dc87123b57b19b54a2f8fa1b4de49a->leave($__internal_1315f953141cc3f8bd1835de419bce7295dc87123b57b19b54a2f8fa1b4de49a_prof);

        
        $__internal_a388f2631fbfcd2d545a7103a145de4ad27ebf8ab168ce581cda513680f31210->leave($__internal_a388f2631fbfcd2d545a7103a145de4ad27ebf8ab168ce581cda513680f31210_prof);

    }

    public function getTemplateName()
    {
        return ":default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 65,  94 => 17,  90 => 15,  81 => 14,  68 => 9,  59 => 8,  42 => 6,  11 => 1,);
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
                        Classement général
                    </span>
                </h3><!-- /.section-name -->
                <h2 class=\"section-title\">
                    USER ! 
                </h2><!-- /.Section-title  -->
                <p class=\"section-description\">
                    « Courir est un sanctuaire pour moi. Ça me tient centré. Je ne peux pas prendre mon téléphone portable ou mon ordinateur. Je peux ne pas être disponible et être totalement égoïste. »
                    - Tanna Frederick, Actrice
                </p><!-- /.section-description -->

                {#<article class=\"box\">
                    <header>
                        <h2>Classement Général</h2>
                        <p>2017</p>
                    </header>
                    <div class=\"content\">
                        <table class=\"table table-inverse\">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Resultat</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for result in classement %}

                                    <tr>
                                        <td>{{ result.firstname }}</td>
                                        <td>{{ result.lastname }}</td>                                       
                                        <td>{{ result.total }}</td>
                                    </tr>

                                {% endfor %}

                            </tbody>
                        </table> 
                    </div>
                    <footer>
                        <a href=\"{{ asset('/') }}\" class=\"button alt\">Archive</a>
                    </footer>
                </article>#}

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
{%endblock%}{# empty Twig template #}", ":default:inscription.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/inscription.html.twig");
    }
}
