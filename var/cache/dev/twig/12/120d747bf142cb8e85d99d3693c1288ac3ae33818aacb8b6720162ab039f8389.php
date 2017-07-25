<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4b0f9e141be54ea5f61b6b7d62319fb7f92fc4965d0baf0be55a4c3405a4319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b0f9e141be54ea5f61b6b7d62319fb7f92fc4965d0baf0be55a4c3405a4319->enter($__internal_b4b0f9e141be54ea5f61b6b7d62319fb7f92fc4965d0baf0be55a4c3405a4319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9b1ddd456d9c6d6a10ee82d53ff7007f4ad2dd6ca2939685fa8eb020dcf381b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1ddd456d9c6d6a10ee82d53ff7007f4ad2dd6ca2939685fa8eb020dcf381b1->enter($__internal_9b1ddd456d9c6d6a10ee82d53ff7007f4ad2dd6ca2939685fa8eb020dcf381b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b4b0f9e141be54ea5f61b6b7d62319fb7f92fc4965d0baf0be55a4c3405a4319->leave($__internal_b4b0f9e141be54ea5f61b6b7d62319fb7f92fc4965d0baf0be55a4c3405a4319_prof);

        
        $__internal_9b1ddd456d9c6d6a10ee82d53ff7007f4ad2dd6ca2939685fa8eb020dcf381b1->leave($__internal_9b1ddd456d9c6d6a10ee82d53ff7007f4ad2dd6ca2939685fa8eb020dcf381b1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_11cc7403a8ad60db7e05556dcb5f8536135349b37062dd49f0744aa86dd63862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cc7403a8ad60db7e05556dcb5f8536135349b37062dd49f0744aa86dd63862->enter($__internal_11cc7403a8ad60db7e05556dcb5f8536135349b37062dd49f0744aa86dd63862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a7e339ec1de920fc94173dea7d9384771ffadb76dfa8f1f88717b5e640db94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7e339ec1de920fc94173dea7d9384771ffadb76dfa8f1f88717b5e640db94f->enter($__internal_4a7e339ec1de920fc94173dea7d9384771ffadb76dfa8f1f88717b5e640db94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4a7e339ec1de920fc94173dea7d9384771ffadb76dfa8f1f88717b5e640db94f->leave($__internal_4a7e339ec1de920fc94173dea7d9384771ffadb76dfa8f1f88717b5e640db94f_prof);

        
        $__internal_11cc7403a8ad60db7e05556dcb5f8536135349b37062dd49f0744aa86dd63862->leave($__internal_11cc7403a8ad60db7e05556dcb5f8536135349b37062dd49f0744aa86dd63862_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
