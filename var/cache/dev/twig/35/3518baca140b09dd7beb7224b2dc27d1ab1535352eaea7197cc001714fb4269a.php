<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_cbfd3bd7838e38d899f313575eed1d23d8181cee0afe1dd324bc1087bb859692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad7c03c82bce4cefcb7c2b16f96297a9dfbc87da1724ece0e2833d68448283ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7c03c82bce4cefcb7c2b16f96297a9dfbc87da1724ece0e2833d68448283ba->enter($__internal_ad7c03c82bce4cefcb7c2b16f96297a9dfbc87da1724ece0e2833d68448283ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_bc0b4c5b68eae4212564210ff82486265c2b0401ddb43e6aa0d9a7f6b14e0060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0b4c5b68eae4212564210ff82486265c2b0401ddb43e6aa0d9a7f6b14e0060->enter($__internal_bc0b4c5b68eae4212564210ff82486265c2b0401ddb43e6aa0d9a7f6b14e0060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ad7c03c82bce4cefcb7c2b16f96297a9dfbc87da1724ece0e2833d68448283ba->leave($__internal_ad7c03c82bce4cefcb7c2b16f96297a9dfbc87da1724ece0e2833d68448283ba_prof);

        
        $__internal_bc0b4c5b68eae4212564210ff82486265c2b0401ddb43e6aa0d9a7f6b14e0060->leave($__internal_bc0b4c5b68eae4212564210ff82486265c2b0401ddb43e6aa0d9a7f6b14e0060_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
