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
        $__internal_0b2ad720036af1ded8ebc1c95bffb49014798c71002990672d56d68addb32bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2ad720036af1ded8ebc1c95bffb49014798c71002990672d56d68addb32bdc->enter($__internal_0b2ad720036af1ded8ebc1c95bffb49014798c71002990672d56d68addb32bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_fe9a3851474004c47829ec109f2236a60d8acff524b5216fd0b4fbcd84ce21f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9a3851474004c47829ec109f2236a60d8acff524b5216fd0b4fbcd84ce21f9->enter($__internal_fe9a3851474004c47829ec109f2236a60d8acff524b5216fd0b4fbcd84ce21f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b2ad720036af1ded8ebc1c95bffb49014798c71002990672d56d68addb32bdc->leave($__internal_0b2ad720036af1ded8ebc1c95bffb49014798c71002990672d56d68addb32bdc_prof);

        
        $__internal_fe9a3851474004c47829ec109f2236a60d8acff524b5216fd0b4fbcd84ce21f9->leave($__internal_fe9a3851474004c47829ec109f2236a60d8acff524b5216fd0b4fbcd84ce21f9_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_6f8dfe7d7d740a7071d7d1bd06109615024e3570601bd1db754cafb89c440944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8dfe7d7d740a7071d7d1bd06109615024e3570601bd1db754cafb89c440944->enter($__internal_6f8dfe7d7d740a7071d7d1bd06109615024e3570601bd1db754cafb89c440944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_1b2b17acda11e4aa7fc8601f44ca17cacea7c80e01725c6fbf3e35024e5c65bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2b17acda11e4aa7fc8601f44ca17cacea7c80e01725c6fbf3e35024e5c65bb->enter($__internal_1b2b17acda11e4aa7fc8601f44ca17cacea7c80e01725c6fbf3e35024e5c65bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_1b2b17acda11e4aa7fc8601f44ca17cacea7c80e01725c6fbf3e35024e5c65bb->leave($__internal_1b2b17acda11e4aa7fc8601f44ca17cacea7c80e01725c6fbf3e35024e5c65bb_prof);

        
        $__internal_6f8dfe7d7d740a7071d7d1bd06109615024e3570601bd1db754cafb89c440944->leave($__internal_6f8dfe7d7d740a7071d7d1bd06109615024e3570601bd1db754cafb89c440944_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_4045e70e9f52a8ea2a0e5807981b8cf58a405be4a8c30ae9f6160c4998e65890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4045e70e9f52a8ea2a0e5807981b8cf58a405be4a8c30ae9f6160c4998e65890->enter($__internal_4045e70e9f52a8ea2a0e5807981b8cf58a405be4a8c30ae9f6160c4998e65890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_1e64e9e363fdb82019a6d347625edde845be37f12a6240fff056f5b66f0c0a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e64e9e363fdb82019a6d347625edde845be37f12a6240fff056f5b66f0c0a27->enter($__internal_1e64e9e363fdb82019a6d347625edde845be37f12a6240fff056f5b66f0c0a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-login\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_1e64e9e363fdb82019a6d347625edde845be37f12a6240fff056f5b66f0c0a27->leave($__internal_1e64e9e363fdb82019a6d347625edde845be37f12a6240fff056f5b66f0c0a27_prof);

        
        $__internal_4045e70e9f52a8ea2a0e5807981b8cf58a405be4a8c30ae9f6160c4998e65890->leave($__internal_4045e70e9f52a8ea2a0e5807981b8cf58a405be4a8c30ae9f6160c4998e65890_prof);

    }

    // line 11
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_f6d29abc02dbd577178e356967421e455ecaef6171c3d4e17475c3f09af69ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d29abc02dbd577178e356967421e455ecaef6171c3d4e17475c3f09af69ee8->enter($__internal_f6d29abc02dbd577178e356967421e455ecaef6171c3d4e17475c3f09af69ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_5884d070907d43259fcd4e0e2c58eeab6cb72cb2c70f84bb46b43c61cd32d0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5884d070907d43259fcd4e0e2c58eeab6cb72cb2c70f84bb46b43c61cd32d0dd->enter($__internal_5884d070907d43259fcd4e0e2c58eeab6cb72cb2c70f84bb46b43c61cd32d0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

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
        
        $__internal_5884d070907d43259fcd4e0e2c58eeab6cb72cb2c70f84bb46b43c61cd32d0dd->leave($__internal_5884d070907d43259fcd4e0e2c58eeab6cb72cb2c70f84bb46b43c61cd32d0dd_prof);

        
        $__internal_f6d29abc02dbd577178e356967421e455ecaef6171c3d4e17475c3f09af69ee8->leave($__internal_f6d29abc02dbd577178e356967421e455ecaef6171c3d4e17475c3f09af69ee8_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22bedca70783b5efa3a75c1b297753eb2a2e64e80ff824a3e4ae153718356967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22bedca70783b5efa3a75c1b297753eb2a2e64e80ff824a3e4ae153718356967->enter($__internal_22bedca70783b5efa3a75c1b297753eb2a2e64e80ff824a3e4ae153718356967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_17797eec3220b5c69cca7225a3aa4e88ae4fcd4fd82a62e7b584e0c697fe9b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17797eec3220b5c69cca7225a3aa4e88ae4fcd4fd82a62e7b584e0c697fe9b21->enter($__internal_17797eec3220b5c69cca7225a3aa4e88ae4fcd4fd82a62e7b584e0c697fe9b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
                    ";
        
        $__internal_17797eec3220b5c69cca7225a3aa4e88ae4fcd4fd82a62e7b584e0c697fe9b21->leave($__internal_17797eec3220b5c69cca7225a3aa4e88ae4fcd4fd82a62e7b584e0c697fe9b21_prof);

        
        $__internal_22bedca70783b5efa3a75c1b297753eb2a2e64e80ff824a3e4ae153718356967->leave($__internal_22bedca70783b5efa3a75c1b297753eb2a2e64e80ff824a3e4ae153718356967_prof);

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
