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
        $__internal_c06e4f1b09b55feec446fc28ce394feb746862028366df4ad55edcb0dc93a95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06e4f1b09b55feec446fc28ce394feb746862028366df4ad55edcb0dc93a95d->enter($__internal_c06e4f1b09b55feec446fc28ce394feb746862028366df4ad55edcb0dc93a95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_f13a0f1cebbf250a69197de79acac947fecbccb1a069875378082dbb70c857a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13a0f1cebbf250a69197de79acac947fecbccb1a069875378082dbb70c857a8->enter($__internal_f13a0f1cebbf250a69197de79acac947fecbccb1a069875378082dbb70c857a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_c06e4f1b09b55feec446fc28ce394feb746862028366df4ad55edcb0dc93a95d->leave($__internal_c06e4f1b09b55feec446fc28ce394feb746862028366df4ad55edcb0dc93a95d_prof);

        
        $__internal_f13a0f1cebbf250a69197de79acac947fecbccb1a069875378082dbb70c857a8->leave($__internal_f13a0f1cebbf250a69197de79acac947fecbccb1a069875378082dbb70c857a8_prof);

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
