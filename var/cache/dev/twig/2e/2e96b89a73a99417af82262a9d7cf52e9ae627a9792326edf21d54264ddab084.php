<?php

/* :default:master.html.twig */
class __TwigTemplate_5a711d1a6b6068f2b88172884cb12254fcffcd2f887a67ef0b08d9171ee1480c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:master.html.twig", 1);
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
        $__internal_e7c0ba8590f4eff2c72bf57be77e544d68969ac0b942a867ee7cf08cc59383bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c0ba8590f4eff2c72bf57be77e544d68969ac0b942a867ee7cf08cc59383bf->enter($__internal_e7c0ba8590f4eff2c72bf57be77e544d68969ac0b942a867ee7cf08cc59383bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $__internal_0d75418b4ed6c4b023848b5712ef6b5130641ab36dace85f07c4e6b3c467204b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d75418b4ed6c4b023848b5712ef6b5130641ab36dace85f07c4e6b3c467204b->enter($__internal_0d75418b4ed6c4b023848b5712ef6b5130641ab36dace85f07c4e6b3c467204b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:master.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c0ba8590f4eff2c72bf57be77e544d68969ac0b942a867ee7cf08cc59383bf->leave($__internal_e7c0ba8590f4eff2c72bf57be77e544d68969ac0b942a867ee7cf08cc59383bf_prof);

        
        $__internal_0d75418b4ed6c4b023848b5712ef6b5130641ab36dace85f07c4e6b3c467204b->leave($__internal_0d75418b4ed6c4b023848b5712ef6b5130641ab36dace85f07c4e6b3c467204b_prof);

    }

    // line 6
    public function block_timer($context, array $blocks = array())
    {
        $__internal_6be1bd5df5f5e7ca936e26ad1917bf6fbb3e3174c78af59ac59a0357fbb49501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be1bd5df5f5e7ca936e26ad1917bf6fbb3e3174c78af59ac59a0357fbb49501->enter($__internal_6be1bd5df5f5e7ca936e26ad1917bf6fbb3e3174c78af59ac59a0357fbb49501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_a1e982047623ec19c51b63581058d9231de4ec5a822c7324a926023fe8ff32b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e982047623ec19c51b63581058d9231de4ec5a822c7324a926023fe8ff32b1->enter($__internal_a1e982047623ec19c51b63581058d9231de4ec5a822c7324a926023fe8ff32b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_a1e982047623ec19c51b63581058d9231de4ec5a822c7324a926023fe8ff32b1->leave($__internal_a1e982047623ec19c51b63581058d9231de4ec5a822c7324a926023fe8ff32b1_prof);

        
        $__internal_6be1bd5df5f5e7ca936e26ad1917bf6fbb3e3174c78af59ac59a0357fbb49501->leave($__internal_6be1bd5df5f5e7ca936e26ad1917bf6fbb3e3174c78af59ac59a0357fbb49501_prof);

    }

    // line 8
    public function block_fin($context, array $blocks = array())
    {
        $__internal_3fc279482012331662745ca44db089d196d1b7bdd2287cd3c27947f1b51f49d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc279482012331662745ca44db089d196d1b7bdd2287cd3c27947f1b51f49d4->enter($__internal_3fc279482012331662745ca44db089d196d1b7bdd2287cd3c27947f1b51f49d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_5c517654f59a5294dea7861f70b9ed197207cfe8b80a400e8a42da831edfb984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c517654f59a5294dea7861f70b9ed197207cfe8b80a400e8a42da831edfb984->enter($__internal_5c517654f59a5294dea7861f70b9ed197207cfe8b80a400e8a42da831edfb984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 9
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_5c517654f59a5294dea7861f70b9ed197207cfe8b80a400e8a42da831edfb984->leave($__internal_5c517654f59a5294dea7861f70b9ed197207cfe8b80a400e8a42da831edfb984_prof);

        
        $__internal_3fc279482012331662745ca44db089d196d1b7bdd2287cd3c27947f1b51f49d4->leave($__internal_3fc279482012331662745ca44db089d196d1b7bdd2287cd3c27947f1b51f49d4_prof);

    }

    // line 14
    public function block_classement($context, array $blocks = array())
    {
        $__internal_64a9b4c8059bdc82397c4a5c64b0d73ac3e3feb499c6e6136f774e22b1ee3cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a9b4c8059bdc82397c4a5c64b0d73ac3e3feb499c6e6136f774e22b1ee3cdf->enter($__internal_64a9b4c8059bdc82397c4a5c64b0d73ac3e3feb499c6e6136f774e22b1ee3cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_60ad22bf932dee91dc6683be06379e661270cd5450a84d35ddba0c1ec9e31d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ad22bf932dee91dc6683be06379e661270cd5450a84d35ddba0c1ec9e31d07->enter($__internal_60ad22bf932dee91dc6683be06379e661270cd5450a84d35ddba0c1ec9e31d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

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
                    MASTER ! 
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
        
        $__internal_60ad22bf932dee91dc6683be06379e661270cd5450a84d35ddba0c1ec9e31d07->leave($__internal_60ad22bf932dee91dc6683be06379e661270cd5450a84d35ddba0c1ec9e31d07_prof);

        
        $__internal_64a9b4c8059bdc82397c4a5c64b0d73ac3e3feb499c6e6136f774e22b1ee3cdf->leave($__internal_64a9b4c8059bdc82397c4a5c64b0d73ac3e3feb499c6e6136f774e22b1ee3cdf_prof);

    }

    public function getTemplateName()
    {
        return ":default:master.html.twig";
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

{#{% if is_granted('ROLE_ADMIN') %}
{% endif %} // A mettre a l'endroit ou l'on veut protéger une partie de page en  admin sinon mettre la page entière dans /admin#}

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
                    MASTER ! 
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
{%endblock%}", ":default:master.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/master.html.twig");
    }
}
