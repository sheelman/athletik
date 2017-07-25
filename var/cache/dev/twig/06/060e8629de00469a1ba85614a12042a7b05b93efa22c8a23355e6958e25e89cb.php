<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_614c1e1b88ad81b345c13f857551ab4266d5bd0fabf982ce0daf35c5406d3055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_960509fe89e3e1e8ed70fb3dad7a4c00d2ffea3726ddc79204607cba41d699be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960509fe89e3e1e8ed70fb3dad7a4c00d2ffea3726ddc79204607cba41d699be->enter($__internal_960509fe89e3e1e8ed70fb3dad7a4c00d2ffea3726ddc79204607cba41d699be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a3fd1b779f3f305990feb6402c528d576b3bb6c933ecd6a453c0576c55706c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fd1b779f3f305990feb6402c528d576b3bb6c933ecd6a453c0576c55706c4a->enter($__internal_a3fd1b779f3f305990feb6402c528d576b3bb6c933ecd6a453c0576c55706c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960509fe89e3e1e8ed70fb3dad7a4c00d2ffea3726ddc79204607cba41d699be->leave($__internal_960509fe89e3e1e8ed70fb3dad7a4c00d2ffea3726ddc79204607cba41d699be_prof);

        
        $__internal_a3fd1b779f3f305990feb6402c528d576b3bb6c933ecd6a453c0576c55706c4a->leave($__internal_a3fd1b779f3f305990feb6402c528d576b3bb6c933ecd6a453c0576c55706c4a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_315457a481dbddb6f308e8b7568151a818153929977dbcb4e4040215d9ac3dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315457a481dbddb6f308e8b7568151a818153929977dbcb4e4040215d9ac3dc0->enter($__internal_315457a481dbddb6f308e8b7568151a818153929977dbcb4e4040215d9ac3dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ebee61a5f7be87496db3b86357691bb013923160bfdfdcaec08f0e964392cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebee61a5f7be87496db3b86357691bb013923160bfdfdcaec08f0e964392cab->enter($__internal_7ebee61a5f7be87496db3b86357691bb013923160bfdfdcaec08f0e964392cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7ebee61a5f7be87496db3b86357691bb013923160bfdfdcaec08f0e964392cab->leave($__internal_7ebee61a5f7be87496db3b86357691bb013923160bfdfdcaec08f0e964392cab_prof);

        
        $__internal_315457a481dbddb6f308e8b7568151a818153929977dbcb4e4040215d9ac3dc0->leave($__internal_315457a481dbddb6f308e8b7568151a818153929977dbcb4e4040215d9ac3dc0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
