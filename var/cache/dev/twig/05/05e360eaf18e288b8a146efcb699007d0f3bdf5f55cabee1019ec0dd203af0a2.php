<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'conexion' => array($this, 'block_conexion'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b7f4a27e436609af343683de4df8325624ce85c5b5d4fdc020fa9b493e43cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7f4a27e436609af343683de4df8325624ce85c5b5d4fdc020fa9b493e43cff->enter($__internal_0b7f4a27e436609af343683de4df8325624ce85c5b5d4fdc020fa9b493e43cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_347ec8dff779aebd6cedb3ab4964506d7e09ac143f13181f9bcaaceacb3577ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347ec8dff779aebd6cedb3ab4964506d7e09ac143f13181f9bcaaceacb3577ec->enter($__internal_347ec8dff779aebd6cedb3ab4964506d7e09ac143f13181f9bcaaceacb3577ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b7f4a27e436609af343683de4df8325624ce85c5b5d4fdc020fa9b493e43cff->leave($__internal_0b7f4a27e436609af343683de4df8325624ce85c5b5d4fdc020fa9b493e43cff_prof);

        
        $__internal_347ec8dff779aebd6cedb3ab4964506d7e09ac143f13181f9bcaaceacb3577ec->leave($__internal_347ec8dff779aebd6cedb3ab4964506d7e09ac143f13181f9bcaaceacb3577ec_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_75f3ca5cad676fe513842ab748b7df9ee1625cb986bebd02b6f4a91ec12226a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f3ca5cad676fe513842ab748b7df9ee1625cb986bebd02b6f4a91ec12226a6->enter($__internal_75f3ca5cad676fe513842ab748b7df9ee1625cb986bebd02b6f4a91ec12226a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_88d864e25d2826da71f0307b77c2c91453ec2e5cab1241f550a7df9d64403ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d864e25d2826da71f0307b77c2c91453ec2e5cab1241f550a7df9d64403ec3->enter($__internal_88d864e25d2826da71f0307b77c2c91453ec2e5cab1241f550a7df9d64403ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_88d864e25d2826da71f0307b77c2c91453ec2e5cab1241f550a7df9d64403ec3->leave($__internal_88d864e25d2826da71f0307b77c2c91453ec2e5cab1241f550a7df9d64403ec3_prof);

        
        $__internal_75f3ca5cad676fe513842ab748b7df9ee1625cb986bebd02b6f4a91ec12226a6->leave($__internal_75f3ca5cad676fe513842ab748b7df9ee1625cb986bebd02b6f4a91ec12226a6_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_71489a557e7800899807feb537e4e54ac857331cfee20fbb787c2bf8ecde8f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71489a557e7800899807feb537e4e54ac857331cfee20fbb787c2bf8ecde8f0c->enter($__internal_71489a557e7800899807feb537e4e54ac857331cfee20fbb787c2bf8ecde8f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_ed45259c9b3fbf96ed44af9f9c25e293044e92d1286553b73695fbb2356908e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed45259c9b3fbf96ed44af9f9c25e293044e92d1286553b73695fbb2356908e3->enter($__internal_ed45259c9b3fbf96ed44af9f9c25e293044e92d1286553b73695fbb2356908e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-login\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_ed45259c9b3fbf96ed44af9f9c25e293044e92d1286553b73695fbb2356908e3->leave($__internal_ed45259c9b3fbf96ed44af9f9c25e293044e92d1286553b73695fbb2356908e3_prof);

        
        $__internal_71489a557e7800899807feb537e4e54ac857331cfee20fbb787c2bf8ecde8f0c->leave($__internal_71489a557e7800899807feb537e4e54ac857331cfee20fbb787c2bf8ecde8f0c_prof);

    }

    // line 11
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_495d5d0846635e4ebfda754ec86e99755377d52fe6d9d63aa721bfa1d75af440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495d5d0846635e4ebfda754ec86e99755377d52fe6d9d63aa721bfa1d75af440->enter($__internal_495d5d0846635e4ebfda754ec86e99755377d52fe6d9d63aa721bfa1d75af440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_e9aa28cf7f2074a75070ace3d20de3846d15bd06309e3120f9ceaa1ffd7be102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9aa28cf7f2074a75070ace3d20de3846d15bd06309e3120f9ceaa1ffd7be102->enter($__internal_e9aa28cf7f2074a75070ace3d20de3846d15bd06309e3120f9ceaa1ffd7be102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        // line 12
        echo "
    <!-- conexion Section -->
    <section id=\"login\" class=\"section-style\" data-background-image=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/Course-à-pieds1.jpg"), "html", null, true);
        echo "\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Pour ce connecter c'est ici
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"box\">
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

    </section><!-- /#login -->
    <!-- login Section End -->
";
        
        $__internal_e9aa28cf7f2074a75070ace3d20de3846d15bd06309e3120f9ceaa1ffd7be102->leave($__internal_e9aa28cf7f2074a75070ace3d20de3846d15bd06309e3120f9ceaa1ffd7be102_prof);

        
        $__internal_495d5d0846635e4ebfda754ec86e99755377d52fe6d9d63aa721bfa1d75af440->leave($__internal_495d5d0846635e4ebfda754ec86e99755377d52fe6d9d63aa721bfa1d75af440_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22cdd208eeedecc6dfb14b1695d4d460dbce5388017abf338b9b3cc2117e85f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22cdd208eeedecc6dfb14b1695d4d460dbce5388017abf338b9b3cc2117e85f6->enter($__internal_22cdd208eeedecc6dfb14b1695d4d460dbce5388017abf338b9b3cc2117e85f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_96ccad88c38aaec56b9bf1df72fb31653b308fd54c29aa04a66a248473830574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ccad88c38aaec56b9bf1df72fb31653b308fd54c29aa04a66a248473830574->enter($__internal_96ccad88c38aaec56b9bf1df72fb31653b308fd54c29aa04a66a248473830574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
                    ";
        
        $__internal_96ccad88c38aaec56b9bf1df72fb31653b308fd54c29aa04a66a248473830574->leave($__internal_96ccad88c38aaec56b9bf1df72fb31653b308fd54c29aa04a66a248473830574_prof);

        
        $__internal_22cdd208eeedecc6dfb14b1695d4d460dbce5388017abf338b9b3cc2117e85f6->leave($__internal_22cdd208eeedecc6dfb14b1695d4d460dbce5388017abf338b9b3cc2117e85f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  131 => 24,  110 => 27,  108 => 24,  95 => 14,  91 => 12,  82 => 11,  69 => 6,  60 => 5,  43 => 3,  11 => 1,);
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
        <a class=\"go-to-login\"><span></span></a>
    </div><!-- /.next-section -->
{%endblock%}

{% block conexion %}

    <!-- conexion Section -->
    <section id=\"login\" class=\"section-style\" data-background-image=\"{{ asset('images/background/Course-à-pieds1.jpg') }}\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Pour ce connecter c'est ici
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"box\">
                    {% block fos_user_content %}
                        {{ include('@FOSUser/Security/login_content.html.twig') }}
                    {% endblock fos_user_content %}
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#login -->
    <!-- login Section End -->
{%endblock%}", "FOSUserBundle:Security:login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
