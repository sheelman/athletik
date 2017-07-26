<?php

/* :default:classement.html.twig */
class __TwigTemplate_aacfe9b6bdf83d72e6fd875d4d8f7d9f1961a06f4730100fc4d81a386c263406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:classement.html.twig", 1);
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
        $__internal_afc8a65283c5d4b3e5d6e1cbc699f948d73948c01b9d6c93be453e58c502f583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc8a65283c5d4b3e5d6e1cbc699f948d73948c01b9d6c93be453e58c502f583->enter($__internal_afc8a65283c5d4b3e5d6e1cbc699f948d73948c01b9d6c93be453e58c502f583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $__internal_87502a49996e1a72fb2a9491802dd5dcc38cb7b7124ddf1dc4b6fa9b0723be84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87502a49996e1a72fb2a9491802dd5dcc38cb7b7124ddf1dc4b6fa9b0723be84->enter($__internal_87502a49996e1a72fb2a9491802dd5dcc38cb7b7124ddf1dc4b6fa9b0723be84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc8a65283c5d4b3e5d6e1cbc699f948d73948c01b9d6c93be453e58c502f583->leave($__internal_afc8a65283c5d4b3e5d6e1cbc699f948d73948c01b9d6c93be453e58c502f583_prof);

        
        $__internal_87502a49996e1a72fb2a9491802dd5dcc38cb7b7124ddf1dc4b6fa9b0723be84->leave($__internal_87502a49996e1a72fb2a9491802dd5dcc38cb7b7124ddf1dc4b6fa9b0723be84_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_361cf24fc5fd3dcb81f579362d1e93eef199f61872523417dfe3a341dedb4eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361cf24fc5fd3dcb81f579362d1e93eef199f61872523417dfe3a341dedb4eb4->enter($__internal_361cf24fc5fd3dcb81f579362d1e93eef199f61872523417dfe3a341dedb4eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_ed31e2639aa0fa30f7850e2eaf387bb5198ae8bf6983ac768547cf1ebc584134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed31e2639aa0fa30f7850e2eaf387bb5198ae8bf6983ac768547cf1ebc584134->enter($__internal_ed31e2639aa0fa30f7850e2eaf387bb5198ae8bf6983ac768547cf1ebc584134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_ed31e2639aa0fa30f7850e2eaf387bb5198ae8bf6983ac768547cf1ebc584134->leave($__internal_ed31e2639aa0fa30f7850e2eaf387bb5198ae8bf6983ac768547cf1ebc584134_prof);

        
        $__internal_361cf24fc5fd3dcb81f579362d1e93eef199f61872523417dfe3a341dedb4eb4->leave($__internal_361cf24fc5fd3dcb81f579362d1e93eef199f61872523417dfe3a341dedb4eb4_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_99fd611e77ad019cb9795816cded563febd6f1f037b05e6dad4cd5c36235a0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99fd611e77ad019cb9795816cded563febd6f1f037b05e6dad4cd5c36235a0df->enter($__internal_99fd611e77ad019cb9795816cded563febd6f1f037b05e6dad4cd5c36235a0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_15b4f6c34d048d246ab2caf3d4aa075da1d1d3f96b82231217f9aad3ba4e7fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b4f6c34d048d246ab2caf3d4aa075da1d1d3f96b82231217f9aad3ba4e7fe9->enter($__internal_15b4f6c34d048d246ab2caf3d4aa075da1d1d3f96b82231217f9aad3ba4e7fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "                        <div class=\"next-section\">
                            <a class=\"go-to-classement\"><span></span></a>
                        </div><!-- /.next-section -->
";
        
        $__internal_15b4f6c34d048d246ab2caf3d4aa075da1d1d3f96b82231217f9aad3ba4e7fe9->leave($__internal_15b4f6c34d048d246ab2caf3d4aa075da1d1d3f96b82231217f9aad3ba4e7fe9_prof);

        
        $__internal_99fd611e77ad019cb9795816cded563febd6f1f037b05e6dad4cd5c36235a0df->leave($__internal_99fd611e77ad019cb9795816cded563febd6f1f037b05e6dad4cd5c36235a0df_prof);

    }

    // line 11
    public function block_classement($context, array $blocks = array())
    {
        $__internal_936145af340989f3b0fa0abd3d7703745527cc3e67eae6cf97ef03a428dfc84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936145af340989f3b0fa0abd3d7703745527cc3e67eae6cf97ef03a428dfc84f->enter($__internal_936145af340989f3b0fa0abd3d7703745527cc3e67eae6cf97ef03a428dfc84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_82f80942586528a554c04d6e03f494b24b44bb62c490a60d6d62f7fe9d2e99b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f80942586528a554c04d6e03f494b24b44bb62c490a60d6d62f7fe9d2e99b8->enter($__internal_82f80942586528a554c04d6e03f494b24b44bb62c490a60d6d62f7fe9d2e99b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        // line 12
        echo "
    <!-- Classement général Section -->
    <section id=\"classement\" class=\"section-style\" data-background-image=\"";
        // line 14
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
                    Qui est le premier ! 
                </h2><!-- /.Section-title  -->
                <p class=\"section-description\">
                    « Courir est un sanctuaire pour moi. Ça me tient centré. Je ne peux pas prendre mon téléphone portable ou mon ordinateur. Je peux ne pas être disponible et être totalement égoïste. »
                    - Tanna Frederick, Actrice
                </p><!-- /.section-description -->

                <article class=\"box\">
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
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classement"] ?? $this->getContext($context, "classement")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 46
            echo "
                                    <tr>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "firstname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "lastname", array()), "html", null, true);
            echo "</td>                                       
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "total", array()), "html", null, true);
            echo "</td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                            </tbody>
                        </table> 
                    </div>
                    <footer>
                        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\" class=\"button alt\">Archive</a>
                    </footer>
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
";
        
        $__internal_82f80942586528a554c04d6e03f494b24b44bb62c490a60d6d62f7fe9d2e99b8->leave($__internal_82f80942586528a554c04d6e03f494b24b44bb62c490a60d6d62f7fe9d2e99b8_prof);

        
        $__internal_936145af340989f3b0fa0abd3d7703745527cc3e67eae6cf97ef03a428dfc84f->leave($__internal_936145af340989f3b0fa0abd3d7703745527cc3e67eae6cf97ef03a428dfc84f_prof);

    }

    public function getTemplateName()
    {
        return ":default:classement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 59,  154 => 54,  144 => 50,  140 => 49,  136 => 48,  132 => 46,  128 => 45,  94 => 14,  90 => 12,  81 => 11,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
                    Qui est le premier ! 
                </h2><!-- /.Section-title  -->
                <p class=\"section-description\">
                    « Courir est un sanctuaire pour moi. Ça me tient centré. Je ne peux pas prendre mon téléphone portable ou mon ordinateur. Je peux ne pas être disponible et être totalement égoïste. »
                    - Tanna Frederick, Actrice
                </p><!-- /.section-description -->

                <article class=\"box\">
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
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#classement -->
    <!-- Classement général Section End -->
{%endblock%}", ":default:classement.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/classement.html.twig");
    }
}
