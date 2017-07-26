<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4e540f3812fcd25533c70884c2c679309efa0efa5dc560bb4bbc05c57dfc7ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_397ad6aeb56f5527ad0ca780c1b8259ce007baa7866f88e56227690d943996ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397ad6aeb56f5527ad0ca780c1b8259ce007baa7866f88e56227690d943996ed->enter($__internal_397ad6aeb56f5527ad0ca780c1b8259ce007baa7866f88e56227690d943996ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_94b0dac86b5fcac5533c03f5a62d5742a6bdb90e8ff892abb246fc9e51c6dfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b0dac86b5fcac5533c03f5a62d5742a6bdb90e8ff892abb246fc9e51c6dfe2->enter($__internal_94b0dac86b5fcac5533c03f5a62d5742a6bdb90e8ff892abb246fc9e51c6dfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397ad6aeb56f5527ad0ca780c1b8259ce007baa7866f88e56227690d943996ed->leave($__internal_397ad6aeb56f5527ad0ca780c1b8259ce007baa7866f88e56227690d943996ed_prof);

        
        $__internal_94b0dac86b5fcac5533c03f5a62d5742a6bdb90e8ff892abb246fc9e51c6dfe2->leave($__internal_94b0dac86b5fcac5533c03f5a62d5742a6bdb90e8ff892abb246fc9e51c6dfe2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00603ffc1dc9d2dda5e90d6cbc24f014b89138b57dd5b29258612ad16298fd3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00603ffc1dc9d2dda5e90d6cbc24f014b89138b57dd5b29258612ad16298fd3e->enter($__internal_00603ffc1dc9d2dda5e90d6cbc24f014b89138b57dd5b29258612ad16298fd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a7ba5a027c253537950f98d6b7281c7bc7a69fad657412b633b9e407fd2e3880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ba5a027c253537950f98d6b7281c7bc7a69fad657412b633b9e407fd2e3880->enter($__internal_a7ba5a027c253537950f98d6b7281c7bc7a69fad657412b633b9e407fd2e3880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a7ba5a027c253537950f98d6b7281c7bc7a69fad657412b633b9e407fd2e3880->leave($__internal_a7ba5a027c253537950f98d6b7281c7bc7a69fad657412b633b9e407fd2e3880_prof);

        
        $__internal_00603ffc1dc9d2dda5e90d6cbc24f014b89138b57dd5b29258612ad16298fd3e->leave($__internal_00603ffc1dc9d2dda5e90d6cbc24f014b89138b57dd5b29258612ad16298fd3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
