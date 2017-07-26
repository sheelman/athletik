<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1da2140a1a0723f35b5ab92bbebb5328996dda755714c89f4dac892e81f9fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1da2140a1a0723f35b5ab92bbebb5328996dda755714c89f4dac892e81f9fae->enter($__internal_f1da2140a1a0723f35b5ab92bbebb5328996dda755714c89f4dac892e81f9fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b41b099e13e6face722d28f65f4251f6588ef9396878a7f1db706124f5b93737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41b099e13e6face722d28f65f4251f6588ef9396878a7f1db706124f5b93737->enter($__internal_b41b099e13e6face722d28f65f4251f6588ef9396878a7f1db706124f5b93737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1da2140a1a0723f35b5ab92bbebb5328996dda755714c89f4dac892e81f9fae->leave($__internal_f1da2140a1a0723f35b5ab92bbebb5328996dda755714c89f4dac892e81f9fae_prof);

        
        $__internal_b41b099e13e6face722d28f65f4251f6588ef9396878a7f1db706124f5b93737->leave($__internal_b41b099e13e6face722d28f65f4251f6588ef9396878a7f1db706124f5b93737_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cbe2310916861dc42d75a67f8ba8e41297e1a6bc64c90c549f649c630cc6ceff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe2310916861dc42d75a67f8ba8e41297e1a6bc64c90c549f649c630cc6ceff->enter($__internal_cbe2310916861dc42d75a67f8ba8e41297e1a6bc64c90c549f649c630cc6ceff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae43769f1130b78c63bcf62b584282180ab49ce83d961919f58b095713f32534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae43769f1130b78c63bcf62b584282180ab49ce83d961919f58b095713f32534->enter($__internal_ae43769f1130b78c63bcf62b584282180ab49ce83d961919f58b095713f32534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae43769f1130b78c63bcf62b584282180ab49ce83d961919f58b095713f32534->leave($__internal_ae43769f1130b78c63bcf62b584282180ab49ce83d961919f58b095713f32534_prof);

        
        $__internal_cbe2310916861dc42d75a67f8ba8e41297e1a6bc64c90c549f649c630cc6ceff->leave($__internal_cbe2310916861dc42d75a67f8ba8e41297e1a6bc64c90c549f649c630cc6ceff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_704503d71a41604ce3afbb39f1633ea3b7f8df7c25ae4e378461f32ce592a132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704503d71a41604ce3afbb39f1633ea3b7f8df7c25ae4e378461f32ce592a132->enter($__internal_704503d71a41604ce3afbb39f1633ea3b7f8df7c25ae4e378461f32ce592a132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e822b55e62bf6512a88f1c702d83ef276bd01cc71d17a723a1737a3c3bb39e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e822b55e62bf6512a88f1c702d83ef276bd01cc71d17a723a1737a3c3bb39e43->enter($__internal_e822b55e62bf6512a88f1c702d83ef276bd01cc71d17a723a1737a3c3bb39e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e822b55e62bf6512a88f1c702d83ef276bd01cc71d17a723a1737a3c3bb39e43->leave($__internal_e822b55e62bf6512a88f1c702d83ef276bd01cc71d17a723a1737a3c3bb39e43_prof);

        
        $__internal_704503d71a41604ce3afbb39f1633ea3b7f8df7c25ae4e378461f32ce592a132->leave($__internal_704503d71a41604ce3afbb39f1633ea3b7f8df7c25ae4e378461f32ce592a132_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_451cec6a53bce3961289e1bd2d3766bdf4f6df486996e4dc51788c1d7a1bbb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451cec6a53bce3961289e1bd2d3766bdf4f6df486996e4dc51788c1d7a1bbb1c->enter($__internal_451cec6a53bce3961289e1bd2d3766bdf4f6df486996e4dc51788c1d7a1bbb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c624b4e97a5749cb28ba9bbb99e6d1c5dd45c8873ccb9b3fb32efc7f7a4f589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c624b4e97a5749cb28ba9bbb99e6d1c5dd45c8873ccb9b3fb32efc7f7a4f589->enter($__internal_6c624b4e97a5749cb28ba9bbb99e6d1c5dd45c8873ccb9b3fb32efc7f7a4f589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6c624b4e97a5749cb28ba9bbb99e6d1c5dd45c8873ccb9b3fb32efc7f7a4f589->leave($__internal_6c624b4e97a5749cb28ba9bbb99e6d1c5dd45c8873ccb9b3fb32efc7f7a4f589_prof);

        
        $__internal_451cec6a53bce3961289e1bd2d3766bdf4f6df486996e4dc51788c1d7a1bbb1c->leave($__internal_451cec6a53bce3961289e1bd2d3766bdf4f6df486996e4dc51788c1d7a1bbb1c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
