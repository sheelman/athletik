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
        $__internal_aa02453a093f61ec8e844aa48b9a666f5b1c4e0612a4c7ca17e395104018d6f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa02453a093f61ec8e844aa48b9a666f5b1c4e0612a4c7ca17e395104018d6f9->enter($__internal_aa02453a093f61ec8e844aa48b9a666f5b1c4e0612a4c7ca17e395104018d6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_381d55d277469632c49554e0baefc0a044dd241f3c4b9edbcdc9a9515e336246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381d55d277469632c49554e0baefc0a044dd241f3c4b9edbcdc9a9515e336246->enter($__internal_381d55d277469632c49554e0baefc0a044dd241f3c4b9edbcdc9a9515e336246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa02453a093f61ec8e844aa48b9a666f5b1c4e0612a4c7ca17e395104018d6f9->leave($__internal_aa02453a093f61ec8e844aa48b9a666f5b1c4e0612a4c7ca17e395104018d6f9_prof);

        
        $__internal_381d55d277469632c49554e0baefc0a044dd241f3c4b9edbcdc9a9515e336246->leave($__internal_381d55d277469632c49554e0baefc0a044dd241f3c4b9edbcdc9a9515e336246_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72c089d364a99944970cfd69ca0bc9c63513b6bb67bf9067734a6c0af1d21a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c089d364a99944970cfd69ca0bc9c63513b6bb67bf9067734a6c0af1d21a6b->enter($__internal_72c089d364a99944970cfd69ca0bc9c63513b6bb67bf9067734a6c0af1d21a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b517e79d158399fd8b88d0e0c77e39eee692487a813b7219699104e96cf6a459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b517e79d158399fd8b88d0e0c77e39eee692487a813b7219699104e96cf6a459->enter($__internal_b517e79d158399fd8b88d0e0c77e39eee692487a813b7219699104e96cf6a459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b517e79d158399fd8b88d0e0c77e39eee692487a813b7219699104e96cf6a459->leave($__internal_b517e79d158399fd8b88d0e0c77e39eee692487a813b7219699104e96cf6a459_prof);

        
        $__internal_72c089d364a99944970cfd69ca0bc9c63513b6bb67bf9067734a6c0af1d21a6b->leave($__internal_72c089d364a99944970cfd69ca0bc9c63513b6bb67bf9067734a6c0af1d21a6b_prof);

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
