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
        $__internal_6d97ff4561ee5ff83cd8674c93ac215c91823adf61fabb3d65916d0ca98d8910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d97ff4561ee5ff83cd8674c93ac215c91823adf61fabb3d65916d0ca98d8910->enter($__internal_6d97ff4561ee5ff83cd8674c93ac215c91823adf61fabb3d65916d0ca98d8910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_919e44044c97f7aeea168ba96e271ccc8fdd171c84af517773572e34633de3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919e44044c97f7aeea168ba96e271ccc8fdd171c84af517773572e34633de3e0->enter($__internal_919e44044c97f7aeea168ba96e271ccc8fdd171c84af517773572e34633de3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d97ff4561ee5ff83cd8674c93ac215c91823adf61fabb3d65916d0ca98d8910->leave($__internal_6d97ff4561ee5ff83cd8674c93ac215c91823adf61fabb3d65916d0ca98d8910_prof);

        
        $__internal_919e44044c97f7aeea168ba96e271ccc8fdd171c84af517773572e34633de3e0->leave($__internal_919e44044c97f7aeea168ba96e271ccc8fdd171c84af517773572e34633de3e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c86cde71c3a533145f0db53d01d88f4f4e886e476cb5e1a5a2efc75061b4670b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86cde71c3a533145f0db53d01d88f4f4e886e476cb5e1a5a2efc75061b4670b->enter($__internal_c86cde71c3a533145f0db53d01d88f4f4e886e476cb5e1a5a2efc75061b4670b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e30c28647e70bb8abe384e5ee7707c452a08f1c6760e376879a38b0a918a1555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30c28647e70bb8abe384e5ee7707c452a08f1c6760e376879a38b0a918a1555->enter($__internal_e30c28647e70bb8abe384e5ee7707c452a08f1c6760e376879a38b0a918a1555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e30c28647e70bb8abe384e5ee7707c452a08f1c6760e376879a38b0a918a1555->leave($__internal_e30c28647e70bb8abe384e5ee7707c452a08f1c6760e376879a38b0a918a1555_prof);

        
        $__internal_c86cde71c3a533145f0db53d01d88f4f4e886e476cb5e1a5a2efc75061b4670b->leave($__internal_c86cde71c3a533145f0db53d01d88f4f4e886e476cb5e1a5a2efc75061b4670b_prof);

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
