<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a82a27b2f4c81ec7f8a6c509ddf66a99e6552320d2be51dff584ff98f398d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a82a27b2f4c81ec7f8a6c509ddf66a99e6552320d2be51dff584ff98f398d4b->enter($__internal_0a82a27b2f4c81ec7f8a6c509ddf66a99e6552320d2be51dff584ff98f398d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_4e39a51f055729c7e1bc18b920ffd6622156187bbc447666fa67b033ca1c83d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e39a51f055729c7e1bc18b920ffd6622156187bbc447666fa67b033ca1c83d8->enter($__internal_4e39a51f055729c7e1bc18b920ffd6622156187bbc447666fa67b033ca1c83d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a82a27b2f4c81ec7f8a6c509ddf66a99e6552320d2be51dff584ff98f398d4b->leave($__internal_0a82a27b2f4c81ec7f8a6c509ddf66a99e6552320d2be51dff584ff98f398d4b_prof);

        
        $__internal_4e39a51f055729c7e1bc18b920ffd6622156187bbc447666fa67b033ca1c83d8->leave($__internal_4e39a51f055729c7e1bc18b920ffd6622156187bbc447666fa67b033ca1c83d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd2806d2d1ead0fbf97018700c1aca880974b74565b33b07c501e7163b9b5df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2806d2d1ead0fbf97018700c1aca880974b74565b33b07c501e7163b9b5df2->enter($__internal_fd2806d2d1ead0fbf97018700c1aca880974b74565b33b07c501e7163b9b5df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a1f9658a02cb2196f5edc19e0183eafaa5b57138e6ccd7273c478d1ae8e604cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f9658a02cb2196f5edc19e0183eafaa5b57138e6ccd7273c478d1ae8e604cb->enter($__internal_a1f9658a02cb2196f5edc19e0183eafaa5b57138e6ccd7273c478d1ae8e604cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a1f9658a02cb2196f5edc19e0183eafaa5b57138e6ccd7273c478d1ae8e604cb->leave($__internal_a1f9658a02cb2196f5edc19e0183eafaa5b57138e6ccd7273c478d1ae8e604cb_prof);

        
        $__internal_fd2806d2d1ead0fbf97018700c1aca880974b74565b33b07c501e7163b9b5df2->leave($__internal_fd2806d2d1ead0fbf97018700c1aca880974b74565b33b07c501e7163b9b5df2_prof);

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
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
