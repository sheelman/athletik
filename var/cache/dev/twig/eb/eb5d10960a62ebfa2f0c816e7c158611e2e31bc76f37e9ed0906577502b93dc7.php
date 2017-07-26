<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0bc2379e88d5ab407cecaddbc7d12b46ee4e639db91441b4745b1ab2e1731368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc84e4ece16f766d08b349371a2ac2bd5287fe8293e21a6b50ecc196d36d0b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc84e4ece16f766d08b349371a2ac2bd5287fe8293e21a6b50ecc196d36d0b46->enter($__internal_bc84e4ece16f766d08b349371a2ac2bd5287fe8293e21a6b50ecc196d36d0b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_22c81bbdb9e63f40fc2f3fa25f7df65a9aceae1d92e00b1d27b2cc2b34865ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c81bbdb9e63f40fc2f3fa25f7df65a9aceae1d92e00b1d27b2cc2b34865ab0->enter($__internal_22c81bbdb9e63f40fc2f3fa25f7df65a9aceae1d92e00b1d27b2cc2b34865ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc84e4ece16f766d08b349371a2ac2bd5287fe8293e21a6b50ecc196d36d0b46->leave($__internal_bc84e4ece16f766d08b349371a2ac2bd5287fe8293e21a6b50ecc196d36d0b46_prof);

        
        $__internal_22c81bbdb9e63f40fc2f3fa25f7df65a9aceae1d92e00b1d27b2cc2b34865ab0->leave($__internal_22c81bbdb9e63f40fc2f3fa25f7df65a9aceae1d92e00b1d27b2cc2b34865ab0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c28e4d3deef4236ba044c756ca269560bcc8f5fbfec495cd6dd325eb7c76090d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28e4d3deef4236ba044c756ca269560bcc8f5fbfec495cd6dd325eb7c76090d->enter($__internal_c28e4d3deef4236ba044c756ca269560bcc8f5fbfec495cd6dd325eb7c76090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d87ca6c0fea4e7cf3d92f73aef34e975a318669a086b14dedbfc815645958701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87ca6c0fea4e7cf3d92f73aef34e975a318669a086b14dedbfc815645958701->enter($__internal_d87ca6c0fea4e7cf3d92f73aef34e975a318669a086b14dedbfc815645958701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d87ca6c0fea4e7cf3d92f73aef34e975a318669a086b14dedbfc815645958701->leave($__internal_d87ca6c0fea4e7cf3d92f73aef34e975a318669a086b14dedbfc815645958701_prof);

        
        $__internal_c28e4d3deef4236ba044c756ca269560bcc8f5fbfec495cd6dd325eb7c76090d->leave($__internal_c28e4d3deef4236ba044c756ca269560bcc8f5fbfec495cd6dd325eb7c76090d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
