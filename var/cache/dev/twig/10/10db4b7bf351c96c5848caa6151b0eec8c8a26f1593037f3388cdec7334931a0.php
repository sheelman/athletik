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
        $__internal_3b7848d7f6f48bc4561c7c5c9382797c9c8c93487889215a3e3a31e5d76ff0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7848d7f6f48bc4561c7c5c9382797c9c8c93487889215a3e3a31e5d76ff0f7->enter($__internal_3b7848d7f6f48bc4561c7c5c9382797c9c8c93487889215a3e3a31e5d76ff0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_0d5e2fab2358c70065da71598acb43d83d7af18f2769cf014e1edeff9fd0cb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5e2fab2358c70065da71598acb43d83d7af18f2769cf014e1edeff9fd0cb77->enter($__internal_0d5e2fab2358c70065da71598acb43d83d7af18f2769cf014e1edeff9fd0cb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b7848d7f6f48bc4561c7c5c9382797c9c8c93487889215a3e3a31e5d76ff0f7->leave($__internal_3b7848d7f6f48bc4561c7c5c9382797c9c8c93487889215a3e3a31e5d76ff0f7_prof);

        
        $__internal_0d5e2fab2358c70065da71598acb43d83d7af18f2769cf014e1edeff9fd0cb77->leave($__internal_0d5e2fab2358c70065da71598acb43d83d7af18f2769cf014e1edeff9fd0cb77_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_d1410a618f664a4fdb822b13010075fb55d8bae1ef67bd1a286fda7480317c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1410a618f664a4fdb822b13010075fb55d8bae1ef67bd1a286fda7480317c99->enter($__internal_d1410a618f664a4fdb822b13010075fb55d8bae1ef67bd1a286fda7480317c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_fd6c59a05e18a0f95322bcbc176eb13adc123b0af1784384cdcfd311de2254bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6c59a05e18a0f95322bcbc176eb13adc123b0af1784384cdcfd311de2254bb->enter($__internal_fd6c59a05e18a0f95322bcbc176eb13adc123b0af1784384cdcfd311de2254bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_fd6c59a05e18a0f95322bcbc176eb13adc123b0af1784384cdcfd311de2254bb->leave($__internal_fd6c59a05e18a0f95322bcbc176eb13adc123b0af1784384cdcfd311de2254bb_prof);

        
        $__internal_d1410a618f664a4fdb822b13010075fb55d8bae1ef67bd1a286fda7480317c99->leave($__internal_d1410a618f664a4fdb822b13010075fb55d8bae1ef67bd1a286fda7480317c99_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_636548a92369ac5716d2e62b017e2cdf6b4d564a8a5b1421f4788ac93f5249ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636548a92369ac5716d2e62b017e2cdf6b4d564a8a5b1421f4788ac93f5249ea->enter($__internal_636548a92369ac5716d2e62b017e2cdf6b4d564a8a5b1421f4788ac93f5249ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_e8b9ebf5b573c1166ec448b18990eccad6836dce09dfb393104dc95455131d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b9ebf5b573c1166ec448b18990eccad6836dce09dfb393104dc95455131d17->enter($__internal_e8b9ebf5b573c1166ec448b18990eccad6836dce09dfb393104dc95455131d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-register\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_e8b9ebf5b573c1166ec448b18990eccad6836dce09dfb393104dc95455131d17->leave($__internal_e8b9ebf5b573c1166ec448b18990eccad6836dce09dfb393104dc95455131d17_prof);

        
        $__internal_636548a92369ac5716d2e62b017e2cdf6b4d564a8a5b1421f4788ac93f5249ea->leave($__internal_636548a92369ac5716d2e62b017e2cdf6b4d564a8a5b1421f4788ac93f5249ea_prof);

    }

    // line 11
    public function block_register($context, array $blocks = array())
    {
        $__internal_e80a44e888e4baf07327420ac3e0f0acac334d42dbcc5347dd392ebe67e74c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80a44e888e4baf07327420ac3e0f0acac334d42dbcc5347dd392ebe67e74c2e->enter($__internal_e80a44e888e4baf07327420ac3e0f0acac334d42dbcc5347dd392ebe67e74c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_ecf2d6025650a2bc1b8174b8aeffb4f88a027b0b0d52d4be977495d1b7eff531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf2d6025650a2bc1b8174b8aeffb4f88a027b0b0d52d4be977495d1b7eff531->enter($__internal_ecf2d6025650a2bc1b8174b8aeffb4f88a027b0b0d52d4be977495d1b7eff531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

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
        
        $__internal_ecf2d6025650a2bc1b8174b8aeffb4f88a027b0b0d52d4be977495d1b7eff531->leave($__internal_ecf2d6025650a2bc1b8174b8aeffb4f88a027b0b0d52d4be977495d1b7eff531_prof);

        
        $__internal_e80a44e888e4baf07327420ac3e0f0acac334d42dbcc5347dd392ebe67e74c2e->leave($__internal_e80a44e888e4baf07327420ac3e0f0acac334d42dbcc5347dd392ebe67e74c2e_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0f76a4cf4b4227d2797bd8231c55ab01569d59baa4245dab6e2c7925be13983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f76a4cf4b4227d2797bd8231c55ab01569d59baa4245dab6e2c7925be13983->enter($__internal_a0f76a4cf4b4227d2797bd8231c55ab01569d59baa4245dab6e2c7925be13983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcedde9c2768e5eb78fc40807bad379f5731285392418e206c08b4652decbde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcedde9c2768e5eb78fc40807bad379f5731285392418e206c08b4652decbde9->enter($__internal_dcedde9c2768e5eb78fc40807bad379f5731285392418e206c08b4652decbde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 25)->display($context);
        // line 26
        echo "                    ";
        
        $__internal_dcedde9c2768e5eb78fc40807bad379f5731285392418e206c08b4652decbde9->leave($__internal_dcedde9c2768e5eb78fc40807bad379f5731285392418e206c08b4652decbde9_prof);

        
        $__internal_a0f76a4cf4b4227d2797bd8231c55ab01569d59baa4245dab6e2c7925be13983->leave($__internal_a0f76a4cf4b4227d2797bd8231c55ab01569d59baa4245dab6e2c7925be13983_prof);

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
