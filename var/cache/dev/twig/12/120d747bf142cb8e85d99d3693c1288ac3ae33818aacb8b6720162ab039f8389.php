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
        $__internal_f16a21028e4e44c2315aaeaea2777ee04413eb59f911c39835ba98ce281c97dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16a21028e4e44c2315aaeaea2777ee04413eb59f911c39835ba98ce281c97dd->enter($__internal_f16a21028e4e44c2315aaeaea2777ee04413eb59f911c39835ba98ce281c97dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c2188f2d8bec94c9a80d66348d53f03a2a180b3e460b1b11244222fa6b0e81cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2188f2d8bec94c9a80d66348d53f03a2a180b3e460b1b11244222fa6b0e81cd->enter($__internal_c2188f2d8bec94c9a80d66348d53f03a2a180b3e460b1b11244222fa6b0e81cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f16a21028e4e44c2315aaeaea2777ee04413eb59f911c39835ba98ce281c97dd->leave($__internal_f16a21028e4e44c2315aaeaea2777ee04413eb59f911c39835ba98ce281c97dd_prof);

        
        $__internal_c2188f2d8bec94c9a80d66348d53f03a2a180b3e460b1b11244222fa6b0e81cd->leave($__internal_c2188f2d8bec94c9a80d66348d53f03a2a180b3e460b1b11244222fa6b0e81cd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_781ee7dcd1e3bb3adcf73acfdefb8cf23893fe5b6f36da290fe4684f1fa25d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781ee7dcd1e3bb3adcf73acfdefb8cf23893fe5b6f36da290fe4684f1fa25d09->enter($__internal_781ee7dcd1e3bb3adcf73acfdefb8cf23893fe5b6f36da290fe4684f1fa25d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_caec9134e12bc65e187a12a2c71806990648531d6d41d9d14bfd7bfd844c926c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caec9134e12bc65e187a12a2c71806990648531d6d41d9d14bfd7bfd844c926c->enter($__internal_caec9134e12bc65e187a12a2c71806990648531d6d41d9d14bfd7bfd844c926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_caec9134e12bc65e187a12a2c71806990648531d6d41d9d14bfd7bfd844c926c->leave($__internal_caec9134e12bc65e187a12a2c71806990648531d6d41d9d14bfd7bfd844c926c_prof);

        
        $__internal_781ee7dcd1e3bb3adcf73acfdefb8cf23893fe5b6f36da290fe4684f1fa25d09->leave($__internal_781ee7dcd1e3bb3adcf73acfdefb8cf23893fe5b6f36da290fe4684f1fa25d09_prof);

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
