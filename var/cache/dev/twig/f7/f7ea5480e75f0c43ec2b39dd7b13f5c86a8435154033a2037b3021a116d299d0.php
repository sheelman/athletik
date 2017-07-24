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
        $__internal_dda24a053dc06845f99be8bee864579a03ec1236c005b17d86ac18ba12119e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda24a053dc06845f99be8bee864579a03ec1236c005b17d86ac18ba12119e0a->enter($__internal_dda24a053dc06845f99be8bee864579a03ec1236c005b17d86ac18ba12119e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_cee882759f8938a25ce21029503ee3b30a46f0db2d04f69091bf8ab426bb846a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee882759f8938a25ce21029503ee3b30a46f0db2d04f69091bf8ab426bb846a->enter($__internal_cee882759f8938a25ce21029503ee3b30a46f0db2d04f69091bf8ab426bb846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda24a053dc06845f99be8bee864579a03ec1236c005b17d86ac18ba12119e0a->leave($__internal_dda24a053dc06845f99be8bee864579a03ec1236c005b17d86ac18ba12119e0a_prof);

        
        $__internal_cee882759f8938a25ce21029503ee3b30a46f0db2d04f69091bf8ab426bb846a->leave($__internal_cee882759f8938a25ce21029503ee3b30a46f0db2d04f69091bf8ab426bb846a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e20d5d121008a669697acfcc4909eae455f57933c4b39c620c0e747963859a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20d5d121008a669697acfcc4909eae455f57933c4b39c620c0e747963859a4b->enter($__internal_e20d5d121008a669697acfcc4909eae455f57933c4b39c620c0e747963859a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b660916b444826da70fde6639b89b5a2c9d75627a8010c3f7450386fba8b4652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b660916b444826da70fde6639b89b5a2c9d75627a8010c3f7450386fba8b4652->enter($__internal_b660916b444826da70fde6639b89b5a2c9d75627a8010c3f7450386fba8b4652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b660916b444826da70fde6639b89b5a2c9d75627a8010c3f7450386fba8b4652->leave($__internal_b660916b444826da70fde6639b89b5a2c9d75627a8010c3f7450386fba8b4652_prof);

        
        $__internal_e20d5d121008a669697acfcc4909eae455f57933c4b39c620c0e747963859a4b->leave($__internal_e20d5d121008a669697acfcc4909eae455f57933c4b39c620c0e747963859a4b_prof);

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
