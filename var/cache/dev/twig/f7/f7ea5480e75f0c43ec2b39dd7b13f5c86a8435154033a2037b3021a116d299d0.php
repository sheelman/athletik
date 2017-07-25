<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b97e0ee1936e42308c1b4cfc21d9ef7863adb5aa2609b6acfe380cb3592098d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f4efa949abc973bd5ff3ff5007146d64952c95aca9dd518d509552393f0c0a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4efa949abc973bd5ff3ff5007146d64952c95aca9dd518d509552393f0c0a60->enter($__internal_f4efa949abc973bd5ff3ff5007146d64952c95aca9dd518d509552393f0c0a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_689b3e7f0e3b97a4c4fa9b9be779dba3a6883b33ef7ad2573e36aff689a6f947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689b3e7f0e3b97a4c4fa9b9be779dba3a6883b33ef7ad2573e36aff689a6f947->enter($__internal_689b3e7f0e3b97a4c4fa9b9be779dba3a6883b33ef7ad2573e36aff689a6f947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4efa949abc973bd5ff3ff5007146d64952c95aca9dd518d509552393f0c0a60->leave($__internal_f4efa949abc973bd5ff3ff5007146d64952c95aca9dd518d509552393f0c0a60_prof);

        
        $__internal_689b3e7f0e3b97a4c4fa9b9be779dba3a6883b33ef7ad2573e36aff689a6f947->leave($__internal_689b3e7f0e3b97a4c4fa9b9be779dba3a6883b33ef7ad2573e36aff689a6f947_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ec4e6d0b3c8622531342054fcd6045a6c056c263b78203a584f6451af5024f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec4e6d0b3c8622531342054fcd6045a6c056c263b78203a584f6451af5024f0->enter($__internal_9ec4e6d0b3c8622531342054fcd6045a6c056c263b78203a584f6451af5024f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d58d0d968d984a1f11b8fad6e70acf3e9b6e67bb04ad0744985360df13262995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58d0d968d984a1f11b8fad6e70acf3e9b6e67bb04ad0744985360df13262995->enter($__internal_d58d0d968d984a1f11b8fad6e70acf3e9b6e67bb04ad0744985360df13262995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d58d0d968d984a1f11b8fad6e70acf3e9b6e67bb04ad0744985360df13262995->leave($__internal_d58d0d968d984a1f11b8fad6e70acf3e9b6e67bb04ad0744985360df13262995_prof);

        
        $__internal_9ec4e6d0b3c8622531342054fcd6045a6c056c263b78203a584f6451af5024f0->leave($__internal_9ec4e6d0b3c8622531342054fcd6045a6c056c263b78203a584f6451af5024f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
