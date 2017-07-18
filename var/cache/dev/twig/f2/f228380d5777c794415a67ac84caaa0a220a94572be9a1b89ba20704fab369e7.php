<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_81bda83b0ac0fd097746eb6229981e8e5f0e5a2c6d3c6bb65f4cfdcdde577418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bda83b0ac0fd097746eb6229981e8e5f0e5a2c6d3c6bb65f4cfdcdde577418->enter($__internal_81bda83b0ac0fd097746eb6229981e8e5f0e5a2c6d3c6bb65f4cfdcdde577418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2f45a31756e32054145854c2eb27bba6c7df137de4bf005f8ecdd2f4c6728029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f45a31756e32054145854c2eb27bba6c7df137de4bf005f8ecdd2f4c6728029->enter($__internal_2f45a31756e32054145854c2eb27bba6c7df137de4bf005f8ecdd2f4c6728029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81bda83b0ac0fd097746eb6229981e8e5f0e5a2c6d3c6bb65f4cfdcdde577418->leave($__internal_81bda83b0ac0fd097746eb6229981e8e5f0e5a2c6d3c6bb65f4cfdcdde577418_prof);

        
        $__internal_2f45a31756e32054145854c2eb27bba6c7df137de4bf005f8ecdd2f4c6728029->leave($__internal_2f45a31756e32054145854c2eb27bba6c7df137de4bf005f8ecdd2f4c6728029_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d7e3a5b79634d830e71af08b0b60af212ce86f9501fa782fb81bee21a90bae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7e3a5b79634d830e71af08b0b60af212ce86f9501fa782fb81bee21a90bae4->enter($__internal_1d7e3a5b79634d830e71af08b0b60af212ce86f9501fa782fb81bee21a90bae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6774466238ad2163730cb9e3e83b85ccd81ac8236a3a0c8555ba96941ab758fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6774466238ad2163730cb9e3e83b85ccd81ac8236a3a0c8555ba96941ab758fb->enter($__internal_6774466238ad2163730cb9e3e83b85ccd81ac8236a3a0c8555ba96941ab758fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6774466238ad2163730cb9e3e83b85ccd81ac8236a3a0c8555ba96941ab758fb->leave($__internal_6774466238ad2163730cb9e3e83b85ccd81ac8236a3a0c8555ba96941ab758fb_prof);

        
        $__internal_1d7e3a5b79634d830e71af08b0b60af212ce86f9501fa782fb81bee21a90bae4->leave($__internal_1d7e3a5b79634d830e71af08b0b60af212ce86f9501fa782fb81bee21a90bae4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_382acb7c302fde5bc9ba9bdadcbf7c7bef2456a53d945a0fbcc7ccffa68b6b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382acb7c302fde5bc9ba9bdadcbf7c7bef2456a53d945a0fbcc7ccffa68b6b80->enter($__internal_382acb7c302fde5bc9ba9bdadcbf7c7bef2456a53d945a0fbcc7ccffa68b6b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e4413c81ca5b346d4cf59e51633274121c9d6058e3cc3bd39b002de8b261c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4413c81ca5b346d4cf59e51633274121c9d6058e3cc3bd39b002de8b261c5c->enter($__internal_4e4413c81ca5b346d4cf59e51633274121c9d6058e3cc3bd39b002de8b261c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e4413c81ca5b346d4cf59e51633274121c9d6058e3cc3bd39b002de8b261c5c->leave($__internal_4e4413c81ca5b346d4cf59e51633274121c9d6058e3cc3bd39b002de8b261c5c_prof);

        
        $__internal_382acb7c302fde5bc9ba9bdadcbf7c7bef2456a53d945a0fbcc7ccffa68b6b80->leave($__internal_382acb7c302fde5bc9ba9bdadcbf7c7bef2456a53d945a0fbcc7ccffa68b6b80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f59e9959f15d59cd25d017b3976f454c9935678efa434d249e59088e34b50c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f59e9959f15d59cd25d017b3976f454c9935678efa434d249e59088e34b50c5->enter($__internal_2f59e9959f15d59cd25d017b3976f454c9935678efa434d249e59088e34b50c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3542f66a727dd75346d7abf044bc999282dea84990b045ba5c3031002548f47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3542f66a727dd75346d7abf044bc999282dea84990b045ba5c3031002548f47f->enter($__internal_3542f66a727dd75346d7abf044bc999282dea84990b045ba5c3031002548f47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3542f66a727dd75346d7abf044bc999282dea84990b045ba5c3031002548f47f->leave($__internal_3542f66a727dd75346d7abf044bc999282dea84990b045ba5c3031002548f47f_prof);

        
        $__internal_2f59e9959f15d59cd25d017b3976f454c9935678efa434d249e59088e34b50c5->leave($__internal_2f59e9959f15d59cd25d017b3976f454c9935678efa434d249e59088e34b50c5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
