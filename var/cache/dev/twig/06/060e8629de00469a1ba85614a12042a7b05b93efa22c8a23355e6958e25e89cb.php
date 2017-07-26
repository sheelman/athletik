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
        $__internal_f469d49230c2f0bb246817c87900825655638636b296633bbb46c7b8771f3d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f469d49230c2f0bb246817c87900825655638636b296633bbb46c7b8771f3d11->enter($__internal_f469d49230c2f0bb246817c87900825655638636b296633bbb46c7b8771f3d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_b433d3aaed3e815798045deb6a0741c86e002fd21b28a8614e5820da0d1ec219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b433d3aaed3e815798045deb6a0741c86e002fd21b28a8614e5820da0d1ec219->enter($__internal_b433d3aaed3e815798045deb6a0741c86e002fd21b28a8614e5820da0d1ec219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f469d49230c2f0bb246817c87900825655638636b296633bbb46c7b8771f3d11->leave($__internal_f469d49230c2f0bb246817c87900825655638636b296633bbb46c7b8771f3d11_prof);

        
        $__internal_b433d3aaed3e815798045deb6a0741c86e002fd21b28a8614e5820da0d1ec219->leave($__internal_b433d3aaed3e815798045deb6a0741c86e002fd21b28a8614e5820da0d1ec219_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08c617f25937b38e4985df5c804bb9f5cdeff80ea1b878925acd24ada3eaa3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c617f25937b38e4985df5c804bb9f5cdeff80ea1b878925acd24ada3eaa3d7->enter($__internal_08c617f25937b38e4985df5c804bb9f5cdeff80ea1b878925acd24ada3eaa3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1dc2e88c775258d29751b3bfabcd45da74285507f1d2b5bae1b41a9b30387f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc2e88c775258d29751b3bfabcd45da74285507f1d2b5bae1b41a9b30387f5e->enter($__internal_1dc2e88c775258d29751b3bfabcd45da74285507f1d2b5bae1b41a9b30387f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1dc2e88c775258d29751b3bfabcd45da74285507f1d2b5bae1b41a9b30387f5e->leave($__internal_1dc2e88c775258d29751b3bfabcd45da74285507f1d2b5bae1b41a9b30387f5e_prof);

        
        $__internal_08c617f25937b38e4985df5c804bb9f5cdeff80ea1b878925acd24ada3eaa3d7->leave($__internal_08c617f25937b38e4985df5c804bb9f5cdeff80ea1b878925acd24ada3eaa3d7_prof);

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
