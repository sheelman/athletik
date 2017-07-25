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
        $__internal_70e12f398c4d7a9df494a63231c6c4023eb8719a5f5d879462957e97488aed37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e12f398c4d7a9df494a63231c6c4023eb8719a5f5d879462957e97488aed37->enter($__internal_70e12f398c4d7a9df494a63231c6c4023eb8719a5f5d879462957e97488aed37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_1e778e4469bc73f9121eb4c0017abd1021779670794179484e200f7721663172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e778e4469bc73f9121eb4c0017abd1021779670794179484e200f7721663172->enter($__internal_1e778e4469bc73f9121eb4c0017abd1021779670794179484e200f7721663172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70e12f398c4d7a9df494a63231c6c4023eb8719a5f5d879462957e97488aed37->leave($__internal_70e12f398c4d7a9df494a63231c6c4023eb8719a5f5d879462957e97488aed37_prof);

        
        $__internal_1e778e4469bc73f9121eb4c0017abd1021779670794179484e200f7721663172->leave($__internal_1e778e4469bc73f9121eb4c0017abd1021779670794179484e200f7721663172_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81d7f1d4ad4bf5e9a1e3b2689ab8514be951696ba95f1c144daf9e2884062c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d7f1d4ad4bf5e9a1e3b2689ab8514be951696ba95f1c144daf9e2884062c42->enter($__internal_81d7f1d4ad4bf5e9a1e3b2689ab8514be951696ba95f1c144daf9e2884062c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2d85dc7eab07a6dc99d66da03201cc547e400ef979749efa46f82efff913c1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d85dc7eab07a6dc99d66da03201cc547e400ef979749efa46f82efff913c1a8->enter($__internal_2d85dc7eab07a6dc99d66da03201cc547e400ef979749efa46f82efff913c1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_2d85dc7eab07a6dc99d66da03201cc547e400ef979749efa46f82efff913c1a8->leave($__internal_2d85dc7eab07a6dc99d66da03201cc547e400ef979749efa46f82efff913c1a8_prof);

        
        $__internal_81d7f1d4ad4bf5e9a1e3b2689ab8514be951696ba95f1c144daf9e2884062c42->leave($__internal_81d7f1d4ad4bf5e9a1e3b2689ab8514be951696ba95f1c144daf9e2884062c42_prof);

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
