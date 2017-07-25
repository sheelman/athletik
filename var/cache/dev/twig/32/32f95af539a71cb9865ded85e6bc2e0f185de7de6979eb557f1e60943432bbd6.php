<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93118fb6bc1274613201be4cdc7253afc21076f73a2c45def85101ac51dfe1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'profile' => array($this, 'block_profile'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8a42ac08f51d0116a02810d9cdfa4a40ad31d96f095ac8616ce8e0c921d8689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a42ac08f51d0116a02810d9cdfa4a40ad31d96f095ac8616ce8e0c921d8689->enter($__internal_f8a42ac08f51d0116a02810d9cdfa4a40ad31d96f095ac8616ce8e0c921d8689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1abf41a906d1177fe039d0c698460e02204155c418d6d46d21a43230e3714078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abf41a906d1177fe039d0c698460e02204155c418d6d46d21a43230e3714078->enter($__internal_1abf41a906d1177fe039d0c698460e02204155c418d6d46d21a43230e3714078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a42ac08f51d0116a02810d9cdfa4a40ad31d96f095ac8616ce8e0c921d8689->leave($__internal_f8a42ac08f51d0116a02810d9cdfa4a40ad31d96f095ac8616ce8e0c921d8689_prof);

        
        $__internal_1abf41a906d1177fe039d0c698460e02204155c418d6d46d21a43230e3714078->leave($__internal_1abf41a906d1177fe039d0c698460e02204155c418d6d46d21a43230e3714078_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_ca747ebe60ff22b1fc8587d741cee5bd0a351e247a2d4aea3ba5704b1a39ed28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca747ebe60ff22b1fc8587d741cee5bd0a351e247a2d4aea3ba5704b1a39ed28->enter($__internal_ca747ebe60ff22b1fc8587d741cee5bd0a351e247a2d4aea3ba5704b1a39ed28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_84225de374d481b5ec7bae1b28fd6f3d61927a6893acc51cdc69fd4f608f03b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84225de374d481b5ec7bae1b28fd6f3d61927a6893acc51cdc69fd4f608f03b9->enter($__internal_84225de374d481b5ec7bae1b28fd6f3d61927a6893acc51cdc69fd4f608f03b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_84225de374d481b5ec7bae1b28fd6f3d61927a6893acc51cdc69fd4f608f03b9->leave($__internal_84225de374d481b5ec7bae1b28fd6f3d61927a6893acc51cdc69fd4f608f03b9_prof);

        
        $__internal_ca747ebe60ff22b1fc8587d741cee5bd0a351e247a2d4aea3ba5704b1a39ed28->leave($__internal_ca747ebe60ff22b1fc8587d741cee5bd0a351e247a2d4aea3ba5704b1a39ed28_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_1d6aa4e3fcd1c551ffee5e54d9b07f823feaa439069bc698ecb0fcdb2cbe6941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6aa4e3fcd1c551ffee5e54d9b07f823feaa439069bc698ecb0fcdb2cbe6941->enter($__internal_1d6aa4e3fcd1c551ffee5e54d9b07f823feaa439069bc698ecb0fcdb2cbe6941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_8b4729e1939b1a4b613ad897842b186f13d73cdf6391163b8b9c29e055684313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4729e1939b1a4b613ad897842b186f13d73cdf6391163b8b9c29e055684313->enter($__internal_8b4729e1939b1a4b613ad897842b186f13d73cdf6391163b8b9c29e055684313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-profile\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_8b4729e1939b1a4b613ad897842b186f13d73cdf6391163b8b9c29e055684313->leave($__internal_8b4729e1939b1a4b613ad897842b186f13d73cdf6391163b8b9c29e055684313_prof);

        
        $__internal_1d6aa4e3fcd1c551ffee5e54d9b07f823feaa439069bc698ecb0fcdb2cbe6941->leave($__internal_1d6aa4e3fcd1c551ffee5e54d9b07f823feaa439069bc698ecb0fcdb2cbe6941_prof);

    }

    // line 11
    public function block_profile($context, array $blocks = array())
    {
        $__internal_a2aeb6a8de897b577c302818eba248d7151f49463be5415aa5f515fdb8b97ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2aeb6a8de897b577c302818eba248d7151f49463be5415aa5f515fdb8b97ee2->enter($__internal_a2aeb6a8de897b577c302818eba248d7151f49463be5415aa5f515fdb8b97ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_ed5a3f42534c592df3c0dbb8a78418b01af918aab73fb6a650a5b6d65043a170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5a3f42534c592df3c0dbb8a78418b01af918aab73fb6a650a5b6d65043a170->enter($__internal_ed5a3f42534c592df3c0dbb8a78418b01af918aab73fb6a650a5b6d65043a170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        // line 12
        echo "

    <!-- profile Section -->
    <section id=\"profile\" class=\"section-style\" data-background-image=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/course-pied.jpg"), "html", null, true);
        echo "\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Vous voila
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"box\">
                    ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#profile -->
    <!-- profile Section End -->
";
        
        $__internal_ed5a3f42534c592df3c0dbb8a78418b01af918aab73fb6a650a5b6d65043a170->leave($__internal_ed5a3f42534c592df3c0dbb8a78418b01af918aab73fb6a650a5b6d65043a170_prof);

        
        $__internal_a2aeb6a8de897b577c302818eba248d7151f49463be5415aa5f515fdb8b97ee2->leave($__internal_a2aeb6a8de897b577c302818eba248d7151f49463be5415aa5f515fdb8b97ee2_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e31476dc6ded1ee399e894d7d638764397f7172ed16348fe0c999026a5efea97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31476dc6ded1ee399e894d7d638764397f7172ed16348fe0c999026a5efea97->enter($__internal_e31476dc6ded1ee399e894d7d638764397f7172ed16348fe0c999026a5efea97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a93a068c4f50d7fcceb10e7af73abfe34e8f4f405f37a22362ae506d998bf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a93a068c4f50d7fcceb10e7af73abfe34e8f4f405f37a22362ae506d998bf45->enter($__internal_0a93a068c4f50d7fcceb10e7af73abfe34e8f4f405f37a22362ae506d998bf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "                        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 26)->display($context);
        // line 27
        echo "                    ";
        
        $__internal_0a93a068c4f50d7fcceb10e7af73abfe34e8f4f405f37a22362ae506d998bf45->leave($__internal_0a93a068c4f50d7fcceb10e7af73abfe34e8f4f405f37a22362ae506d998bf45_prof);

        
        $__internal_e31476dc6ded1ee399e894d7d638764397f7172ed16348fe0c999026a5efea97->leave($__internal_e31476dc6ded1ee399e894d7d638764397f7172ed16348fe0c999026a5efea97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 27,  141 => 26,  132 => 25,  111 => 28,  109 => 25,  96 => 15,  91 => 12,  82 => 11,  69 => 6,  60 => 5,  43 => 3,  11 => 1,);
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
        <a class=\"go-to-profile\"><span></span></a>
    </div><!-- /.next-section -->
{%endblock%}

{% block profile %}


    <!-- profile Section -->
    <section id=\"profile\" class=\"section-style\" data-background-image=\"{{ asset('images/background/course-pied.jpg') }}\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Vous voila
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"box\">
                    {% block fos_user_content %}
                        {% include \"@FOSUser/Profile/show_content.html.twig\" %}
                    {% endblock fos_user_content %}
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#profile -->
    <!-- profile Section End -->
{%endblock%}", "FOSUserBundle:Profile:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
