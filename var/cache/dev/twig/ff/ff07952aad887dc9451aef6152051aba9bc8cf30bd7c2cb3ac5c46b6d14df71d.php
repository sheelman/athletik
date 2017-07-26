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
        $__internal_f9b102c778065d4ed1b3cc577c162153d2b9c6ffa889d67aae064cda0886d4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b102c778065d4ed1b3cc577c162153d2b9c6ffa889d67aae064cda0886d4cb->enter($__internal_f9b102c778065d4ed1b3cc577c162153d2b9c6ffa889d67aae064cda0886d4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_3774dec9574dda65a023e6b425ac29cad73bcc20ada4ec067daefde47dfecfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3774dec9574dda65a023e6b425ac29cad73bcc20ada4ec067daefde47dfecfaa->enter($__internal_3774dec9574dda65a023e6b425ac29cad73bcc20ada4ec067daefde47dfecfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b102c778065d4ed1b3cc577c162153d2b9c6ffa889d67aae064cda0886d4cb->leave($__internal_f9b102c778065d4ed1b3cc577c162153d2b9c6ffa889d67aae064cda0886d4cb_prof);

        
        $__internal_3774dec9574dda65a023e6b425ac29cad73bcc20ada4ec067daefde47dfecfaa->leave($__internal_3774dec9574dda65a023e6b425ac29cad73bcc20ada4ec067daefde47dfecfaa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72fc71767b2d6e11bdb2f085831501358afb9f42a29abff97cf9c86022b6b02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fc71767b2d6e11bdb2f085831501358afb9f42a29abff97cf9c86022b6b02b->enter($__internal_72fc71767b2d6e11bdb2f085831501358afb9f42a29abff97cf9c86022b6b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3eff9aaa412963183d0cecba6b5e91628f9c5b46367d6b3259671a7591055fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3eff9aaa412963183d0cecba6b5e91628f9c5b46367d6b3259671a7591055fe->enter($__internal_c3eff9aaa412963183d0cecba6b5e91628f9c5b46367d6b3259671a7591055fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c3eff9aaa412963183d0cecba6b5e91628f9c5b46367d6b3259671a7591055fe->leave($__internal_c3eff9aaa412963183d0cecba6b5e91628f9c5b46367d6b3259671a7591055fe_prof);

        
        $__internal_72fc71767b2d6e11bdb2f085831501358afb9f42a29abff97cf9c86022b6b02b->leave($__internal_72fc71767b2d6e11bdb2f085831501358afb9f42a29abff97cf9c86022b6b02b_prof);

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
