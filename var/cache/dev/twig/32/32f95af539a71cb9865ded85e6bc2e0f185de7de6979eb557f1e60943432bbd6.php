<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_93118fb6bc1274613201be4cdc7253afc21076f73a2c45def85101ac51dfe1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_2d14f92ef3f4cbde81673161149251239d4a0a3dc1f673153ca98fa5ce749106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d14f92ef3f4cbde81673161149251239d4a0a3dc1f673153ca98fa5ce749106->enter($__internal_2d14f92ef3f4cbde81673161149251239d4a0a3dc1f673153ca98fa5ce749106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_b66bdd8beb53a075868cdbc8b17a4304c789c46b7862f956ef7771cb0b0b8336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66bdd8beb53a075868cdbc8b17a4304c789c46b7862f956ef7771cb0b0b8336->enter($__internal_b66bdd8beb53a075868cdbc8b17a4304c789c46b7862f956ef7771cb0b0b8336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d14f92ef3f4cbde81673161149251239d4a0a3dc1f673153ca98fa5ce749106->leave($__internal_2d14f92ef3f4cbde81673161149251239d4a0a3dc1f673153ca98fa5ce749106_prof);

        
        $__internal_b66bdd8beb53a075868cdbc8b17a4304c789c46b7862f956ef7771cb0b0b8336->leave($__internal_b66bdd8beb53a075868cdbc8b17a4304c789c46b7862f956ef7771cb0b0b8336_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f12aaa18a5c94d7fde3d0406df686f0f403e263bf2018840a1dc90a2603b1114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12aaa18a5c94d7fde3d0406df686f0f403e263bf2018840a1dc90a2603b1114->enter($__internal_f12aaa18a5c94d7fde3d0406df686f0f403e263bf2018840a1dc90a2603b1114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2be82e73c56c02757282e883920eefa24ecde0d2eb357488412648747c4925c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be82e73c56c02757282e883920eefa24ecde0d2eb357488412648747c4925c4->enter($__internal_2be82e73c56c02757282e883920eefa24ecde0d2eb357488412648747c4925c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2be82e73c56c02757282e883920eefa24ecde0d2eb357488412648747c4925c4->leave($__internal_2be82e73c56c02757282e883920eefa24ecde0d2eb357488412648747c4925c4_prof);

        
        $__internal_f12aaa18a5c94d7fde3d0406df686f0f403e263bf2018840a1dc90a2603b1114->leave($__internal_f12aaa18a5c94d7fde3d0406df686f0f403e263bf2018840a1dc90a2603b1114_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
