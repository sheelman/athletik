<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3279dbcdca5c0aeeab86c3495066d40ec56322e772c432abca5b353e54e515c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6c7468799aeec4b01e578704a8ede7ae192d68e0788d1f41ca9dcaead0f7731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c7468799aeec4b01e578704a8ede7ae192d68e0788d1f41ca9dcaead0f7731->enter($__internal_d6c7468799aeec4b01e578704a8ede7ae192d68e0788d1f41ca9dcaead0f7731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_3beea00508f5a9829bf24d2ce6714dbcfa15b75147583a87a2b2cc810c0afeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3beea00508f5a9829bf24d2ce6714dbcfa15b75147583a87a2b2cc810c0afeb4->enter($__internal_3beea00508f5a9829bf24d2ce6714dbcfa15b75147583a87a2b2cc810c0afeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c7468799aeec4b01e578704a8ede7ae192d68e0788d1f41ca9dcaead0f7731->leave($__internal_d6c7468799aeec4b01e578704a8ede7ae192d68e0788d1f41ca9dcaead0f7731_prof);

        
        $__internal_3beea00508f5a9829bf24d2ce6714dbcfa15b75147583a87a2b2cc810c0afeb4->leave($__internal_3beea00508f5a9829bf24d2ce6714dbcfa15b75147583a87a2b2cc810c0afeb4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73aba19956fb65ff0adc0d75994518f4b171ab9699d188119f7b22302e1161f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73aba19956fb65ff0adc0d75994518f4b171ab9699d188119f7b22302e1161f4->enter($__internal_73aba19956fb65ff0adc0d75994518f4b171ab9699d188119f7b22302e1161f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e3905173972ae69a27ecf29562fdc45367749d32c9fa19f9258d1bf6f0c327a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3905173972ae69a27ecf29562fdc45367749d32c9fa19f9258d1bf6f0c327a->enter($__internal_5e3905173972ae69a27ecf29562fdc45367749d32c9fa19f9258d1bf6f0c327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5e3905173972ae69a27ecf29562fdc45367749d32c9fa19f9258d1bf6f0c327a->leave($__internal_5e3905173972ae69a27ecf29562fdc45367749d32c9fa19f9258d1bf6f0c327a_prof);

        
        $__internal_73aba19956fb65ff0adc0d75994518f4b171ab9699d188119f7b22302e1161f4->leave($__internal_73aba19956fb65ff0adc0d75994518f4b171ab9699d188119f7b22302e1161f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
