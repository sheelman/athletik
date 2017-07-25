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
        $__internal_1e71f330b6fe95578fa4a6bd41925013413d1b98c41461787939f76c2dfdb8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e71f330b6fe95578fa4a6bd41925013413d1b98c41461787939f76c2dfdb8e8->enter($__internal_1e71f330b6fe95578fa4a6bd41925013413d1b98c41461787939f76c2dfdb8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_e97c58fa8d0d719b04385e0bafd33cb40ba80faec31a2777798ec520e945037d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97c58fa8d0d719b04385e0bafd33cb40ba80faec31a2777798ec520e945037d->enter($__internal_e97c58fa8d0d719b04385e0bafd33cb40ba80faec31a2777798ec520e945037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_1e71f330b6fe95578fa4a6bd41925013413d1b98c41461787939f76c2dfdb8e8->leave($__internal_1e71f330b6fe95578fa4a6bd41925013413d1b98c41461787939f76c2dfdb8e8_prof);

        
        $__internal_e97c58fa8d0d719b04385e0bafd33cb40ba80faec31a2777798ec520e945037d->leave($__internal_e97c58fa8d0d719b04385e0bafd33cb40ba80faec31a2777798ec520e945037d_prof);

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
