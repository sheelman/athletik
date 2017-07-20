<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_95beef668053696dc4eb9e06df3dc5e3c358e58b637154d9399b55d8d67fff66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_399176a9b717426e868196967f56a5d0904b922d3de4fe07fce9dafe272804dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399176a9b717426e868196967f56a5d0904b922d3de4fe07fce9dafe272804dc->enter($__internal_399176a9b717426e868196967f56a5d0904b922d3de4fe07fce9dafe272804dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_a4007e68a140a05fc8c65836e2c5dde999459add7124e370f560b8082f97d5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4007e68a140a05fc8c65836e2c5dde999459add7124e370f560b8082f97d5b5->enter($__internal_a4007e68a140a05fc8c65836e2c5dde999459add7124e370f560b8082f97d5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_399176a9b717426e868196967f56a5d0904b922d3de4fe07fce9dafe272804dc->leave($__internal_399176a9b717426e868196967f56a5d0904b922d3de4fe07fce9dafe272804dc_prof);

        
        $__internal_a4007e68a140a05fc8c65836e2c5dde999459add7124e370f560b8082f97d5b5->leave($__internal_a4007e68a140a05fc8c65836e2c5dde999459add7124e370f560b8082f97d5b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a63e9b757dc7778b2086ff1abd33c8f103d029737fe349e41b939636ca8ac16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a63e9b757dc7778b2086ff1abd33c8f103d029737fe349e41b939636ca8ac16->enter($__internal_7a63e9b757dc7778b2086ff1abd33c8f103d029737fe349e41b939636ca8ac16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_894039f4232f6f5efa44bd9d89fe8faed0c627b3a716c1dec062eae9419290e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894039f4232f6f5efa44bd9d89fe8faed0c627b3a716c1dec062eae9419290e0->enter($__internal_894039f4232f6f5efa44bd9d89fe8faed0c627b3a716c1dec062eae9419290e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_894039f4232f6f5efa44bd9d89fe8faed0c627b3a716c1dec062eae9419290e0->leave($__internal_894039f4232f6f5efa44bd9d89fe8faed0c627b3a716c1dec062eae9419290e0_prof);

        
        $__internal_7a63e9b757dc7778b2086ff1abd33c8f103d029737fe349e41b939636ca8ac16->leave($__internal_7a63e9b757dc7778b2086ff1abd33c8f103d029737fe349e41b939636ca8ac16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
