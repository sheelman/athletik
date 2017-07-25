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
        $__internal_e14be377d72d1cc48ecfbe4cd614858d16ced964d08698c40d977289fffa88eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14be377d72d1cc48ecfbe4cd614858d16ced964d08698c40d977289fffa88eb->enter($__internal_e14be377d72d1cc48ecfbe4cd614858d16ced964d08698c40d977289fffa88eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_6763aee9cba2113b2be306937a055665f6e8e23fb075828db71a5df9b55d2057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6763aee9cba2113b2be306937a055665f6e8e23fb075828db71a5df9b55d2057->enter($__internal_6763aee9cba2113b2be306937a055665f6e8e23fb075828db71a5df9b55d2057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14be377d72d1cc48ecfbe4cd614858d16ced964d08698c40d977289fffa88eb->leave($__internal_e14be377d72d1cc48ecfbe4cd614858d16ced964d08698c40d977289fffa88eb_prof);

        
        $__internal_6763aee9cba2113b2be306937a055665f6e8e23fb075828db71a5df9b55d2057->leave($__internal_6763aee9cba2113b2be306937a055665f6e8e23fb075828db71a5df9b55d2057_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_7e8a2b75618f91d1c6a111121c4fe264142b0f86f9f87a4083d627f5f5f5e5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8a2b75618f91d1c6a111121c4fe264142b0f86f9f87a4083d627f5f5f5e5ad->enter($__internal_7e8a2b75618f91d1c6a111121c4fe264142b0f86f9f87a4083d627f5f5f5e5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_fd9a645f94729ca401b5c2b49b5ae935a3f2b7a75da02b5670e5f66bb0036423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9a645f94729ca401b5c2b49b5ae935a3f2b7a75da02b5670e5f66bb0036423->enter($__internal_fd9a645f94729ca401b5c2b49b5ae935a3f2b7a75da02b5670e5f66bb0036423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_fd9a645f94729ca401b5c2b49b5ae935a3f2b7a75da02b5670e5f66bb0036423->leave($__internal_fd9a645f94729ca401b5c2b49b5ae935a3f2b7a75da02b5670e5f66bb0036423_prof);

        
        $__internal_7e8a2b75618f91d1c6a111121c4fe264142b0f86f9f87a4083d627f5f5f5e5ad->leave($__internal_7e8a2b75618f91d1c6a111121c4fe264142b0f86f9f87a4083d627f5f5f5e5ad_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_c532b2ce45527a1d87b8cf9bcd1532a912943ad10e547b929068cf3e3ff98d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c532b2ce45527a1d87b8cf9bcd1532a912943ad10e547b929068cf3e3ff98d81->enter($__internal_c532b2ce45527a1d87b8cf9bcd1532a912943ad10e547b929068cf3e3ff98d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_8c8efef6bea85649a01280f80794e01eac255c11909147357792c2b737b221d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8efef6bea85649a01280f80794e01eac255c11909147357792c2b737b221d9->enter($__internal_8c8efef6bea85649a01280f80794e01eac255c11909147357792c2b737b221d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-login\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_8c8efef6bea85649a01280f80794e01eac255c11909147357792c2b737b221d9->leave($__internal_8c8efef6bea85649a01280f80794e01eac255c11909147357792c2b737b221d9_prof);

        
        $__internal_c532b2ce45527a1d87b8cf9bcd1532a912943ad10e547b929068cf3e3ff98d81->leave($__internal_c532b2ce45527a1d87b8cf9bcd1532a912943ad10e547b929068cf3e3ff98d81_prof);

    }

    // line 11
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_3e7a39cf40e1017cf4cbb0593ab67a872390236af80391a22a37f7f6598eacad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7a39cf40e1017cf4cbb0593ab67a872390236af80391a22a37f7f6598eacad->enter($__internal_3e7a39cf40e1017cf4cbb0593ab67a872390236af80391a22a37f7f6598eacad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_99f4c5580733f361c568509e98f6959e2ed0fef61f748911da16be659400f85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f4c5580733f361c568509e98f6959e2ed0fef61f748911da16be659400f85d->enter($__internal_99f4c5580733f361c568509e98f6959e2ed0fef61f748911da16be659400f85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

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
        
        $__internal_99f4c5580733f361c568509e98f6959e2ed0fef61f748911da16be659400f85d->leave($__internal_99f4c5580733f361c568509e98f6959e2ed0fef61f748911da16be659400f85d_prof);

        
        $__internal_3e7a39cf40e1017cf4cbb0593ab67a872390236af80391a22a37f7f6598eacad->leave($__internal_3e7a39cf40e1017cf4cbb0593ab67a872390236af80391a22a37f7f6598eacad_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb09e16eeb2d083d89312b73bcdf0a7a30761316ca77f34960d0f73adacc84e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb09e16eeb2d083d89312b73bcdf0a7a30761316ca77f34960d0f73adacc84e4->enter($__internal_fb09e16eeb2d083d89312b73bcdf0a7a30761316ca77f34960d0f73adacc84e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35bec039c106be0d3088e0b285f100d2ea525a1d279ed22d68ba4fa11bf69bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bec039c106be0d3088e0b285f100d2ea525a1d279ed22d68ba4fa11bf69bc1->enter($__internal_35bec039c106be0d3088e0b285f100d2ea525a1d279ed22d68ba4fa11bf69bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
                    ";
        
        $__internal_35bec039c106be0d3088e0b285f100d2ea525a1d279ed22d68ba4fa11bf69bc1->leave($__internal_35bec039c106be0d3088e0b285f100d2ea525a1d279ed22d68ba4fa11bf69bc1_prof);

        
        $__internal_fb09e16eeb2d083d89312b73bcdf0a7a30761316ca77f34960d0f73adacc84e4->leave($__internal_fb09e16eeb2d083d89312b73bcdf0a7a30761316ca77f34960d0f73adacc84e4_prof);

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
