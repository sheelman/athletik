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
        $__internal_9c43b1d8ec33e908c5b0694ce6c7c991b026403371a870916266ad9c81a801e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c43b1d8ec33e908c5b0694ce6c7c991b026403371a870916266ad9c81a801e9->enter($__internal_9c43b1d8ec33e908c5b0694ce6c7c991b026403371a870916266ad9c81a801e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_ee3bb6171c3a3759da8d7e50d631a93c69f2eefa77a73140b7c5bbad1540ae01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3bb6171c3a3759da8d7e50d631a93c69f2eefa77a73140b7c5bbad1540ae01->enter($__internal_ee3bb6171c3a3759da8d7e50d631a93c69f2eefa77a73140b7c5bbad1540ae01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c43b1d8ec33e908c5b0694ce6c7c991b026403371a870916266ad9c81a801e9->leave($__internal_9c43b1d8ec33e908c5b0694ce6c7c991b026403371a870916266ad9c81a801e9_prof);

        
        $__internal_ee3bb6171c3a3759da8d7e50d631a93c69f2eefa77a73140b7c5bbad1540ae01->leave($__internal_ee3bb6171c3a3759da8d7e50d631a93c69f2eefa77a73140b7c5bbad1540ae01_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_d5b2c53bf6d16099cd391a87e737e729e8ca839cb8c724e52e94e111c24d4c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b2c53bf6d16099cd391a87e737e729e8ca839cb8c724e52e94e111c24d4c9c->enter($__internal_d5b2c53bf6d16099cd391a87e737e729e8ca839cb8c724e52e94e111c24d4c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_f7faa3034c844631bffd099a9019b6c1227e202c430ed0f95b103064d4f6c5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7faa3034c844631bffd099a9019b6c1227e202c430ed0f95b103064d4f6c5dd->enter($__internal_f7faa3034c844631bffd099a9019b6c1227e202c430ed0f95b103064d4f6c5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_f7faa3034c844631bffd099a9019b6c1227e202c430ed0f95b103064d4f6c5dd->leave($__internal_f7faa3034c844631bffd099a9019b6c1227e202c430ed0f95b103064d4f6c5dd_prof);

        
        $__internal_d5b2c53bf6d16099cd391a87e737e729e8ca839cb8c724e52e94e111c24d4c9c->leave($__internal_d5b2c53bf6d16099cd391a87e737e729e8ca839cb8c724e52e94e111c24d4c9c_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_c418bc83b9582f6acc767694b8bf47cc4e7cf5d5fb39f62fd08d9b1b8527087a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c418bc83b9582f6acc767694b8bf47cc4e7cf5d5fb39f62fd08d9b1b8527087a->enter($__internal_c418bc83b9582f6acc767694b8bf47cc4e7cf5d5fb39f62fd08d9b1b8527087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_c582a4d6997d4f7a61904b3d0a82d005260c7185f8406265f4e9e71b2f70d113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c582a4d6997d4f7a61904b3d0a82d005260c7185f8406265f4e9e71b2f70d113->enter($__internal_c582a4d6997d4f7a61904b3d0a82d005260c7185f8406265f4e9e71b2f70d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-login\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_c582a4d6997d4f7a61904b3d0a82d005260c7185f8406265f4e9e71b2f70d113->leave($__internal_c582a4d6997d4f7a61904b3d0a82d005260c7185f8406265f4e9e71b2f70d113_prof);

        
        $__internal_c418bc83b9582f6acc767694b8bf47cc4e7cf5d5fb39f62fd08d9b1b8527087a->leave($__internal_c418bc83b9582f6acc767694b8bf47cc4e7cf5d5fb39f62fd08d9b1b8527087a_prof);

    }

    // line 11
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_e894098fcd90d02acaace0e34991bd9f14490ebc09c286a300e1705ffd5f4b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e894098fcd90d02acaace0e34991bd9f14490ebc09c286a300e1705ffd5f4b1d->enter($__internal_e894098fcd90d02acaace0e34991bd9f14490ebc09c286a300e1705ffd5f4b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_6d652dbafcaf7388faba86c9dbc9b5022ba1f6f70f2ef8157ac8fb4770a720d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d652dbafcaf7388faba86c9dbc9b5022ba1f6f70f2ef8157ac8fb4770a720d1->enter($__internal_6d652dbafcaf7388faba86c9dbc9b5022ba1f6f70f2ef8157ac8fb4770a720d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

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
        
        $__internal_6d652dbafcaf7388faba86c9dbc9b5022ba1f6f70f2ef8157ac8fb4770a720d1->leave($__internal_6d652dbafcaf7388faba86c9dbc9b5022ba1f6f70f2ef8157ac8fb4770a720d1_prof);

        
        $__internal_e894098fcd90d02acaace0e34991bd9f14490ebc09c286a300e1705ffd5f4b1d->leave($__internal_e894098fcd90d02acaace0e34991bd9f14490ebc09c286a300e1705ffd5f4b1d_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0800f9f8cf20f23453afe72cc2a1cf34569b90501b9ae535be279e6af3d1e428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0800f9f8cf20f23453afe72cc2a1cf34569b90501b9ae535be279e6af3d1e428->enter($__internal_0800f9f8cf20f23453afe72cc2a1cf34569b90501b9ae535be279e6af3d1e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e6b614e993bef39c053a14c95b2414c067b7cdecff3b562c4805c028ac0ab78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b614e993bef39c053a14c95b2414c067b7cdecff3b562c4805c028ac0ab78e->enter($__internal_e6b614e993bef39c053a14c95b2414c067b7cdecff3b562c4805c028ac0ab78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
                    ";
        
        $__internal_e6b614e993bef39c053a14c95b2414c067b7cdecff3b562c4805c028ac0ab78e->leave($__internal_e6b614e993bef39c053a14c95b2414c067b7cdecff3b562c4805c028ac0ab78e_prof);

        
        $__internal_0800f9f8cf20f23453afe72cc2a1cf34569b90501b9ae535be279e6af3d1e428->leave($__internal_0800f9f8cf20f23453afe72cc2a1cf34569b90501b9ae535be279e6af3d1e428_prof);

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
