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
        $__internal_5510f52942d39c0291c6fd6e1f9d7c7d99d28cb42a044788841e0cce880d44d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5510f52942d39c0291c6fd6e1f9d7c7d99d28cb42a044788841e0cce880d44d4->enter($__internal_5510f52942d39c0291c6fd6e1f9d7c7d99d28cb42a044788841e0cce880d44d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_c84cc346ad4c55378895c64551da9d6f9a035c61265bef9aafe0a448a067816d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84cc346ad4c55378895c64551da9d6f9a035c61265bef9aafe0a448a067816d->enter($__internal_c84cc346ad4c55378895c64551da9d6f9a035c61265bef9aafe0a448a067816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5510f52942d39c0291c6fd6e1f9d7c7d99d28cb42a044788841e0cce880d44d4->leave($__internal_5510f52942d39c0291c6fd6e1f9d7c7d99d28cb42a044788841e0cce880d44d4_prof);

        
        $__internal_c84cc346ad4c55378895c64551da9d6f9a035c61265bef9aafe0a448a067816d->leave($__internal_c84cc346ad4c55378895c64551da9d6f9a035c61265bef9aafe0a448a067816d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a1e191e6c73be22a3f293db4998f26d1f98a05ade5d33b401e73696737e72fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1e191e6c73be22a3f293db4998f26d1f98a05ade5d33b401e73696737e72fe->enter($__internal_5a1e191e6c73be22a3f293db4998f26d1f98a05ade5d33b401e73696737e72fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5aabd031d38c635fd700616c5e989e1dc8ed9a15c4df473394a408b41caec450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aabd031d38c635fd700616c5e989e1dc8ed9a15c4df473394a408b41caec450->enter($__internal_5aabd031d38c635fd700616c5e989e1dc8ed9a15c4df473394a408b41caec450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5aabd031d38c635fd700616c5e989e1dc8ed9a15c4df473394a408b41caec450->leave($__internal_5aabd031d38c635fd700616c5e989e1dc8ed9a15c4df473394a408b41caec450_prof);

        
        $__internal_5a1e191e6c73be22a3f293db4998f26d1f98a05ade5d33b401e73696737e72fe->leave($__internal_5a1e191e6c73be22a3f293db4998f26d1f98a05ade5d33b401e73696737e72fe_prof);

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
