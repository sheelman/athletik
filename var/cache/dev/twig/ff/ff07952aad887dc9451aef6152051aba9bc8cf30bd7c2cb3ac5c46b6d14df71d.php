<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2c9ad4f1404f05ebfd2e19f1c722221f359290941177d29c1c236ec2741a614d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b4db689b6bc182e5a1f090cde99d4288537719a8f2ae33e7aeb32a64d588aa39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4db689b6bc182e5a1f090cde99d4288537719a8f2ae33e7aeb32a64d588aa39->enter($__internal_b4db689b6bc182e5a1f090cde99d4288537719a8f2ae33e7aeb32a64d588aa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_32f4fddb08b20d0b6a63f949a9028cba33d6f2f2ad68985c1cda65173a44ca25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f4fddb08b20d0b6a63f949a9028cba33d6f2f2ad68985c1cda65173a44ca25->enter($__internal_32f4fddb08b20d0b6a63f949a9028cba33d6f2f2ad68985c1cda65173a44ca25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4db689b6bc182e5a1f090cde99d4288537719a8f2ae33e7aeb32a64d588aa39->leave($__internal_b4db689b6bc182e5a1f090cde99d4288537719a8f2ae33e7aeb32a64d588aa39_prof);

        
        $__internal_32f4fddb08b20d0b6a63f949a9028cba33d6f2f2ad68985c1cda65173a44ca25->leave($__internal_32f4fddb08b20d0b6a63f949a9028cba33d6f2f2ad68985c1cda65173a44ca25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2db72f1f805cf0a19f45da3a8de9ea102a8572db83e8228eea03da9b85037ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db72f1f805cf0a19f45da3a8de9ea102a8572db83e8228eea03da9b85037ec5->enter($__internal_2db72f1f805cf0a19f45da3a8de9ea102a8572db83e8228eea03da9b85037ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b1b5494d01e405275211a01fd851227097f19f5df328d9c00feb9973a3f07983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b5494d01e405275211a01fd851227097f19f5df328d9c00feb9973a3f07983->enter($__internal_b1b5494d01e405275211a01fd851227097f19f5df328d9c00feb9973a3f07983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b1b5494d01e405275211a01fd851227097f19f5df328d9c00feb9973a3f07983->leave($__internal_b1b5494d01e405275211a01fd851227097f19f5df328d9c00feb9973a3f07983_prof);

        
        $__internal_2db72f1f805cf0a19f45da3a8de9ea102a8572db83e8228eea03da9b85037ec5->leave($__internal_2db72f1f805cf0a19f45da3a8de9ea102a8572db83e8228eea03da9b85037ec5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
