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
        $__internal_405a4cbb515c054691cbdb604feb659cf5f0fa9077e9ef5de9cbaaae6646fc30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405a4cbb515c054691cbdb604feb659cf5f0fa9077e9ef5de9cbaaae6646fc30->enter($__internal_405a4cbb515c054691cbdb604feb659cf5f0fa9077e9ef5de9cbaaae6646fc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_977430e32440864d8a17aa74c55160eeadfefd8b4e8e8c73825bb5d149c84af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977430e32440864d8a17aa74c55160eeadfefd8b4e8e8c73825bb5d149c84af1->enter($__internal_977430e32440864d8a17aa74c55160eeadfefd8b4e8e8c73825bb5d149c84af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_405a4cbb515c054691cbdb604feb659cf5f0fa9077e9ef5de9cbaaae6646fc30->leave($__internal_405a4cbb515c054691cbdb604feb659cf5f0fa9077e9ef5de9cbaaae6646fc30_prof);

        
        $__internal_977430e32440864d8a17aa74c55160eeadfefd8b4e8e8c73825bb5d149c84af1->leave($__internal_977430e32440864d8a17aa74c55160eeadfefd8b4e8e8c73825bb5d149c84af1_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_c8ca34fc4b25fd4ec6962170d9b440cb6a043e351b0a83fa1088d72286c6f5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ca34fc4b25fd4ec6962170d9b440cb6a043e351b0a83fa1088d72286c6f5b8->enter($__internal_c8ca34fc4b25fd4ec6962170d9b440cb6a043e351b0a83fa1088d72286c6f5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_9678f8415796d2c000d0064ca39e0e62a2a63e6360f9460d7d5198259619cf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9678f8415796d2c000d0064ca39e0e62a2a63e6360f9460d7d5198259619cf4b->enter($__internal_9678f8415796d2c000d0064ca39e0e62a2a63e6360f9460d7d5198259619cf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_9678f8415796d2c000d0064ca39e0e62a2a63e6360f9460d7d5198259619cf4b->leave($__internal_9678f8415796d2c000d0064ca39e0e62a2a63e6360f9460d7d5198259619cf4b_prof);

        
        $__internal_c8ca34fc4b25fd4ec6962170d9b440cb6a043e351b0a83fa1088d72286c6f5b8->leave($__internal_c8ca34fc4b25fd4ec6962170d9b440cb6a043e351b0a83fa1088d72286c6f5b8_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_14e0f99fc94a72a42ed3e5db324acf1587d935673d09cd15d66b0113a9eeef6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e0f99fc94a72a42ed3e5db324acf1587d935673d09cd15d66b0113a9eeef6f->enter($__internal_14e0f99fc94a72a42ed3e5db324acf1587d935673d09cd15d66b0113a9eeef6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_746d11a5aa9c0b743c8a2a88ea1376426206fe8ccee92ddf7514977b5f3fe786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746d11a5aa9c0b743c8a2a88ea1376426206fe8ccee92ddf7514977b5f3fe786->enter($__internal_746d11a5aa9c0b743c8a2a88ea1376426206fe8ccee92ddf7514977b5f3fe786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-register\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_746d11a5aa9c0b743c8a2a88ea1376426206fe8ccee92ddf7514977b5f3fe786->leave($__internal_746d11a5aa9c0b743c8a2a88ea1376426206fe8ccee92ddf7514977b5f3fe786_prof);

        
        $__internal_14e0f99fc94a72a42ed3e5db324acf1587d935673d09cd15d66b0113a9eeef6f->leave($__internal_14e0f99fc94a72a42ed3e5db324acf1587d935673d09cd15d66b0113a9eeef6f_prof);

    }

    // line 11
    public function block_register($context, array $blocks = array())
    {
        $__internal_fe6e4700a53e0049bacfb3c6b59b4fb6b89fa8dd2066f460ecf3e9f2cc350fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6e4700a53e0049bacfb3c6b59b4fb6b89fa8dd2066f460ecf3e9f2cc350fa6->enter($__internal_fe6e4700a53e0049bacfb3c6b59b4fb6b89fa8dd2066f460ecf3e9f2cc350fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_1e28dcbd7f174cf4ca2d79b5662b24cfd9c1256f1213aadd37920e167c54ab99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e28dcbd7f174cf4ca2d79b5662b24cfd9c1256f1213aadd37920e167c54ab99->enter($__internal_1e28dcbd7f174cf4ca2d79b5662b24cfd9c1256f1213aadd37920e167c54ab99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

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
        
        $__internal_1e28dcbd7f174cf4ca2d79b5662b24cfd9c1256f1213aadd37920e167c54ab99->leave($__internal_1e28dcbd7f174cf4ca2d79b5662b24cfd9c1256f1213aadd37920e167c54ab99_prof);

        
        $__internal_fe6e4700a53e0049bacfb3c6b59b4fb6b89fa8dd2066f460ecf3e9f2cc350fa6->leave($__internal_fe6e4700a53e0049bacfb3c6b59b4fb6b89fa8dd2066f460ecf3e9f2cc350fa6_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cc1c636a2a59659ce64efa6b685e8e8a1e82cdc8cf2f4c38cb69d3241504ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc1c636a2a59659ce64efa6b685e8e8a1e82cdc8cf2f4c38cb69d3241504ee0->enter($__internal_8cc1c636a2a59659ce64efa6b685e8e8a1e82cdc8cf2f4c38cb69d3241504ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5109035e1eb9506a53f329ac3949bea7465d12c3869982868028ad1fa5216915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5109035e1eb9506a53f329ac3949bea7465d12c3869982868028ad1fa5216915->enter($__internal_5109035e1eb9506a53f329ac3949bea7465d12c3869982868028ad1fa5216915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 25)->display($context);
        // line 26
        echo "                    ";
        
        $__internal_5109035e1eb9506a53f329ac3949bea7465d12c3869982868028ad1fa5216915->leave($__internal_5109035e1eb9506a53f329ac3949bea7465d12c3869982868028ad1fa5216915_prof);

        
        $__internal_8cc1c636a2a59659ce64efa6b685e8e8a1e82cdc8cf2f4c38cb69d3241504ee0->leave($__internal_8cc1c636a2a59659ce64efa6b685e8e8a1e82cdc8cf2f4c38cb69d3241504ee0_prof);

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
