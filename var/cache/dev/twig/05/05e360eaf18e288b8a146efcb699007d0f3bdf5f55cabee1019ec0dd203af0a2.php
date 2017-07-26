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
        $__internal_3fb4856ea2ee1cd254d0c5f874814ef37963c8fa4a489376befefe30bccb639e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb4856ea2ee1cd254d0c5f874814ef37963c8fa4a489376befefe30bccb639e->enter($__internal_3fb4856ea2ee1cd254d0c5f874814ef37963c8fa4a489376befefe30bccb639e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_a6c0df7546313b731cb7976ef992ce84111808f00ec8b193c92fc19ce5efe023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c0df7546313b731cb7976ef992ce84111808f00ec8b193c92fc19ce5efe023->enter($__internal_a6c0df7546313b731cb7976ef992ce84111808f00ec8b193c92fc19ce5efe023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fb4856ea2ee1cd254d0c5f874814ef37963c8fa4a489376befefe30bccb639e->leave($__internal_3fb4856ea2ee1cd254d0c5f874814ef37963c8fa4a489376befefe30bccb639e_prof);

        
        $__internal_a6c0df7546313b731cb7976ef992ce84111808f00ec8b193c92fc19ce5efe023->leave($__internal_a6c0df7546313b731cb7976ef992ce84111808f00ec8b193c92fc19ce5efe023_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_c2a1635e78532584b9218b7dd3f1098411f09dfe54024396aec39afa9f949eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a1635e78532584b9218b7dd3f1098411f09dfe54024396aec39afa9f949eed->enter($__internal_c2a1635e78532584b9218b7dd3f1098411f09dfe54024396aec39afa9f949eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_c58dc5211d308d3c42e877edd4ce1bc82264fd47e330c9856989f792e7c15f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58dc5211d308d3c42e877edd4ce1bc82264fd47e330c9856989f792e7c15f55->enter($__internal_c58dc5211d308d3c42e877edd4ce1bc82264fd47e330c9856989f792e7c15f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_c58dc5211d308d3c42e877edd4ce1bc82264fd47e330c9856989f792e7c15f55->leave($__internal_c58dc5211d308d3c42e877edd4ce1bc82264fd47e330c9856989f792e7c15f55_prof);

        
        $__internal_c2a1635e78532584b9218b7dd3f1098411f09dfe54024396aec39afa9f949eed->leave($__internal_c2a1635e78532584b9218b7dd3f1098411f09dfe54024396aec39afa9f949eed_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_2293898288fd81351d41e914f6c5a909bb2ab2d826979b60ee363f280b7bcc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2293898288fd81351d41e914f6c5a909bb2ab2d826979b60ee363f280b7bcc98->enter($__internal_2293898288fd81351d41e914f6c5a909bb2ab2d826979b60ee363f280b7bcc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_a2c267d0bd647cc1bc4619bfe451f8b0b10fd8f523e284c41137bc74758b6876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c267d0bd647cc1bc4619bfe451f8b0b10fd8f523e284c41137bc74758b6876->enter($__internal_a2c267d0bd647cc1bc4619bfe451f8b0b10fd8f523e284c41137bc74758b6876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-login\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_a2c267d0bd647cc1bc4619bfe451f8b0b10fd8f523e284c41137bc74758b6876->leave($__internal_a2c267d0bd647cc1bc4619bfe451f8b0b10fd8f523e284c41137bc74758b6876_prof);

        
        $__internal_2293898288fd81351d41e914f6c5a909bb2ab2d826979b60ee363f280b7bcc98->leave($__internal_2293898288fd81351d41e914f6c5a909bb2ab2d826979b60ee363f280b7bcc98_prof);

    }

    // line 11
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_3145437d57d5e72f56a2f8f0ae4c16c4b05f9d7f1a4d562a02fe9a143be4867d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3145437d57d5e72f56a2f8f0ae4c16c4b05f9d7f1a4d562a02fe9a143be4867d->enter($__internal_3145437d57d5e72f56a2f8f0ae4c16c4b05f9d7f1a4d562a02fe9a143be4867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_55a401fb3a3c405c60a8a5ce07b00140ac3a3fe3651680350eb5c01e68317e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a401fb3a3c405c60a8a5ce07b00140ac3a3fe3651680350eb5c01e68317e0b->enter($__internal_55a401fb3a3c405c60a8a5ce07b00140ac3a3fe3651680350eb5c01e68317e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

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
        
        $__internal_55a401fb3a3c405c60a8a5ce07b00140ac3a3fe3651680350eb5c01e68317e0b->leave($__internal_55a401fb3a3c405c60a8a5ce07b00140ac3a3fe3651680350eb5c01e68317e0b_prof);

        
        $__internal_3145437d57d5e72f56a2f8f0ae4c16c4b05f9d7f1a4d562a02fe9a143be4867d->leave($__internal_3145437d57d5e72f56a2f8f0ae4c16c4b05f9d7f1a4d562a02fe9a143be4867d_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_392ae3e5e64161460e13ba7376e6d32d941eae624930cc5f47d36c7977452ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392ae3e5e64161460e13ba7376e6d32d941eae624930cc5f47d36c7977452ecd->enter($__internal_392ae3e5e64161460e13ba7376e6d32d941eae624930cc5f47d36c7977452ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce204b9bcc66e527009983344289f60f1f09fb7c0da3a4feae1e1d7328f0b13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce204b9bcc66e527009983344289f60f1f09fb7c0da3a4feae1e1d7328f0b13a->enter($__internal_ce204b9bcc66e527009983344289f60f1f09fb7c0da3a4feae1e1d7328f0b13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
                    ";
        
        $__internal_ce204b9bcc66e527009983344289f60f1f09fb7c0da3a4feae1e1d7328f0b13a->leave($__internal_ce204b9bcc66e527009983344289f60f1f09fb7c0da3a4feae1e1d7328f0b13a_prof);

        
        $__internal_392ae3e5e64161460e13ba7376e6d32d941eae624930cc5f47d36c7977452ecd->leave($__internal_392ae3e5e64161460e13ba7376e6d32d941eae624930cc5f47d36c7977452ecd_prof);

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
