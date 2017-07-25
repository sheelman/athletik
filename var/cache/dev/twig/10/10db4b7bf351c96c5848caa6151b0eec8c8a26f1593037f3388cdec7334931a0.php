<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'register' => array($this, 'block_register'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_508a4e53b1184a5aff578c2f3767c5bb17edcdd03bed84691e57812a35eeba3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_508a4e53b1184a5aff578c2f3767c5bb17edcdd03bed84691e57812a35eeba3b->enter($__internal_508a4e53b1184a5aff578c2f3767c5bb17edcdd03bed84691e57812a35eeba3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_a0e4b18c383c01c97f33764f2af4bd36be467b5be568f4dd63277f7ab75dc9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e4b18c383c01c97f33764f2af4bd36be467b5be568f4dd63277f7ab75dc9f9->enter($__internal_a0e4b18c383c01c97f33764f2af4bd36be467b5be568f4dd63277f7ab75dc9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_508a4e53b1184a5aff578c2f3767c5bb17edcdd03bed84691e57812a35eeba3b->leave($__internal_508a4e53b1184a5aff578c2f3767c5bb17edcdd03bed84691e57812a35eeba3b_prof);

        
        $__internal_a0e4b18c383c01c97f33764f2af4bd36be467b5be568f4dd63277f7ab75dc9f9->leave($__internal_a0e4b18c383c01c97f33764f2af4bd36be467b5be568f4dd63277f7ab75dc9f9_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_2a890a6d9b6a43f5481496b4d3a3fefa58b53179debd948fc1fa8e2f2f5c15bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a890a6d9b6a43f5481496b4d3a3fefa58b53179debd948fc1fa8e2f2f5c15bd->enter($__internal_2a890a6d9b6a43f5481496b4d3a3fefa58b53179debd948fc1fa8e2f2f5c15bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_f9475923609d38dd3f2167547a1793e4c5d72ad8f56d1424702a3fb836b4c8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9475923609d38dd3f2167547a1793e4c5d72ad8f56d1424702a3fb836b4c8a1->enter($__internal_f9475923609d38dd3f2167547a1793e4c5d72ad8f56d1424702a3fb836b4c8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_f9475923609d38dd3f2167547a1793e4c5d72ad8f56d1424702a3fb836b4c8a1->leave($__internal_f9475923609d38dd3f2167547a1793e4c5d72ad8f56d1424702a3fb836b4c8a1_prof);

        
        $__internal_2a890a6d9b6a43f5481496b4d3a3fefa58b53179debd948fc1fa8e2f2f5c15bd->leave($__internal_2a890a6d9b6a43f5481496b4d3a3fefa58b53179debd948fc1fa8e2f2f5c15bd_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_cc2c9ae84304bda39311a7ee94a36c5b3d65c0d5b2e8acd247f4ec7a1e340d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2c9ae84304bda39311a7ee94a36c5b3d65c0d5b2e8acd247f4ec7a1e340d78->enter($__internal_cc2c9ae84304bda39311a7ee94a36c5b3d65c0d5b2e8acd247f4ec7a1e340d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_09e5015da99fc5f9fdbb50f3086a9cbc7d6575ef711f739d8361f6e8d878c928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e5015da99fc5f9fdbb50f3086a9cbc7d6575ef711f739d8361f6e8d878c928->enter($__internal_09e5015da99fc5f9fdbb50f3086a9cbc7d6575ef711f739d8361f6e8d878c928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-register\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_09e5015da99fc5f9fdbb50f3086a9cbc7d6575ef711f739d8361f6e8d878c928->leave($__internal_09e5015da99fc5f9fdbb50f3086a9cbc7d6575ef711f739d8361f6e8d878c928_prof);

        
        $__internal_cc2c9ae84304bda39311a7ee94a36c5b3d65c0d5b2e8acd247f4ec7a1e340d78->leave($__internal_cc2c9ae84304bda39311a7ee94a36c5b3d65c0d5b2e8acd247f4ec7a1e340d78_prof);

    }

    // line 11
    public function block_register($context, array $blocks = array())
    {
        $__internal_479cf30faa8066757a922375152be120507ed6b292f9511ad6efc580a9a401d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479cf30faa8066757a922375152be120507ed6b292f9511ad6efc580a9a401d2->enter($__internal_479cf30faa8066757a922375152be120507ed6b292f9511ad6efc580a9a401d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_dcf7d1a46fa7dcadc47ac112708716a412ff834826bb1baf5bbf4db8ac73867a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf7d1a46fa7dcadc47ac112708716a412ff834826bb1baf5bbf4db8ac73867a->enter($__internal_dcf7d1a46fa7dcadc47ac112708716a412ff834826bb1baf5bbf4db8ac73867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        // line 12
        echo "
    <!-- register Section -->
    <section id=\"register\" class=\"section-style\" data-background-image=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/pieges-a-eviter-pour-se-remettre-a-la-course-a-pied.jpg"), "html", null, true);
        echo "\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Pour ce connecter c'est ici
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"rbox\">
                    ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#register -->
    <!-- register Section End -->
";
        
        $__internal_dcf7d1a46fa7dcadc47ac112708716a412ff834826bb1baf5bbf4db8ac73867a->leave($__internal_dcf7d1a46fa7dcadc47ac112708716a412ff834826bb1baf5bbf4db8ac73867a_prof);

        
        $__internal_479cf30faa8066757a922375152be120507ed6b292f9511ad6efc580a9a401d2->leave($__internal_479cf30faa8066757a922375152be120507ed6b292f9511ad6efc580a9a401d2_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfe0e026731a6977c709d1da49e12893e404d8b9bf4c4c2d1785d087c1aa0c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe0e026731a6977c709d1da49e12893e404d8b9bf4c4c2d1785d087c1aa0c8a->enter($__internal_bfe0e026731a6977c709d1da49e12893e404d8b9bf4c4c2d1785d087c1aa0c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e8148f798f53b33dd8fac90f6e913b8c1e58c9329e886a087e47d687ac6fa4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8148f798f53b33dd8fac90f6e913b8c1e58c9329e886a087e47d687ac6fa4d3->enter($__internal_e8148f798f53b33dd8fac90f6e913b8c1e58c9329e886a087e47d687ac6fa4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 25)->display($context);
        // line 26
        echo "                    ";
        
        $__internal_e8148f798f53b33dd8fac90f6e913b8c1e58c9329e886a087e47d687ac6fa4d3->leave($__internal_e8148f798f53b33dd8fac90f6e913b8c1e58c9329e886a087e47d687ac6fa4d3_prof);

        
        $__internal_bfe0e026731a6977c709d1da49e12893e404d8b9bf4c4c2d1785d087c1aa0c8a->leave($__internal_bfe0e026731a6977c709d1da49e12893e404d8b9bf4c4c2d1785d087c1aa0c8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 26,  140 => 25,  131 => 24,  110 => 27,  108 => 24,  95 => 14,  91 => 12,  82 => 11,  69 => 6,  60 => 5,  43 => 3,  11 => 1,);
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
        <a class=\"go-to-register\"><span></span></a>
    </div><!-- /.next-section -->
{%endblock%}

{% block register %}

    <!-- register Section -->
    <section id=\"register\" class=\"section-style\" data-background-image=\"{{ asset('images/background/pieges-a-eviter-pour-se-remettre-a-la-course-a-pied.jpg') }}\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Pour ce connecter c'est ici
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"rbox\">
                    {% block fos_user_content %}
                        {% include \"@FOSUser/Registration/register_content.html.twig\" %}
                    {% endblock fos_user_content %}
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#register -->
    <!-- register Section End -->
{%endblock%}", "FOSUserBundle:Registration:register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
