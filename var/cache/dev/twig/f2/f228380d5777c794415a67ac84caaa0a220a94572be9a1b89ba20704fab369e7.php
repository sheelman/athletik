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
        $__internal_8ffd4038a7e3dcc3ae931494f0460d5bc6ff143dec9aa74a3cdcf426472904c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffd4038a7e3dcc3ae931494f0460d5bc6ff143dec9aa74a3cdcf426472904c5->enter($__internal_8ffd4038a7e3dcc3ae931494f0460d5bc6ff143dec9aa74a3cdcf426472904c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c715af64bc5b79ac3e512625ff31767c02351b0652e7fd87167bf0e292087bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c715af64bc5b79ac3e512625ff31767c02351b0652e7fd87167bf0e292087bab->enter($__internal_c715af64bc5b79ac3e512625ff31767c02351b0652e7fd87167bf0e292087bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ffd4038a7e3dcc3ae931494f0460d5bc6ff143dec9aa74a3cdcf426472904c5->leave($__internal_8ffd4038a7e3dcc3ae931494f0460d5bc6ff143dec9aa74a3cdcf426472904c5_prof);

        
        $__internal_c715af64bc5b79ac3e512625ff31767c02351b0652e7fd87167bf0e292087bab->leave($__internal_c715af64bc5b79ac3e512625ff31767c02351b0652e7fd87167bf0e292087bab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a8905e6af85a6c611e68ca5143dced06a3386c7051f13f12dcb04ea6884b4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8905e6af85a6c611e68ca5143dced06a3386c7051f13f12dcb04ea6884b4e1->enter($__internal_7a8905e6af85a6c611e68ca5143dced06a3386c7051f13f12dcb04ea6884b4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_98e11fcc59af5b9edcdd82b43f8506d9d21a4f7d5f04acd9d143b13e00699d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e11fcc59af5b9edcdd82b43f8506d9d21a4f7d5f04acd9d143b13e00699d59->enter($__internal_98e11fcc59af5b9edcdd82b43f8506d9d21a4f7d5f04acd9d143b13e00699d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98e11fcc59af5b9edcdd82b43f8506d9d21a4f7d5f04acd9d143b13e00699d59->leave($__internal_98e11fcc59af5b9edcdd82b43f8506d9d21a4f7d5f04acd9d143b13e00699d59_prof);

        
        $__internal_7a8905e6af85a6c611e68ca5143dced06a3386c7051f13f12dcb04ea6884b4e1->leave($__internal_7a8905e6af85a6c611e68ca5143dced06a3386c7051f13f12dcb04ea6884b4e1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3b8490eb873a967dfe88f4748e61da09e2921254c53cd8253e11ac880a28460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b8490eb873a967dfe88f4748e61da09e2921254c53cd8253e11ac880a28460->enter($__internal_c3b8490eb873a967dfe88f4748e61da09e2921254c53cd8253e11ac880a28460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7c98075a4083238f06fcfff7863e2d51b7923d3145d66b0da7c6c3d166178a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c98075a4083238f06fcfff7863e2d51b7923d3145d66b0da7c6c3d166178a9f->enter($__internal_7c98075a4083238f06fcfff7863e2d51b7923d3145d66b0da7c6c3d166178a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c98075a4083238f06fcfff7863e2d51b7923d3145d66b0da7c6c3d166178a9f->leave($__internal_7c98075a4083238f06fcfff7863e2d51b7923d3145d66b0da7c6c3d166178a9f_prof);

        
        $__internal_c3b8490eb873a967dfe88f4748e61da09e2921254c53cd8253e11ac880a28460->leave($__internal_c3b8490eb873a967dfe88f4748e61da09e2921254c53cd8253e11ac880a28460_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d0783d9641f2f26fc9c1d26438f8ab4f2d8cbd96f6b4bc8f8f3df16aec6082a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0783d9641f2f26fc9c1d26438f8ab4f2d8cbd96f6b4bc8f8f3df16aec6082a->enter($__internal_8d0783d9641f2f26fc9c1d26438f8ab4f2d8cbd96f6b4bc8f8f3df16aec6082a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10982d793fdea208eb4c06518dbd26e1b087ef72e9649c65620cfd5767ec4411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10982d793fdea208eb4c06518dbd26e1b087ef72e9649c65620cfd5767ec4411->enter($__internal_10982d793fdea208eb4c06518dbd26e1b087ef72e9649c65620cfd5767ec4411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10982d793fdea208eb4c06518dbd26e1b087ef72e9649c65620cfd5767ec4411->leave($__internal_10982d793fdea208eb4c06518dbd26e1b087ef72e9649c65620cfd5767ec4411_prof);

        
        $__internal_8d0783d9641f2f26fc9c1d26438f8ab4f2d8cbd96f6b4bc8f8f3df16aec6082a->leave($__internal_8d0783d9641f2f26fc9c1d26438f8ab4f2d8cbd96f6b4bc8f8f3df16aec6082a_prof);

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
