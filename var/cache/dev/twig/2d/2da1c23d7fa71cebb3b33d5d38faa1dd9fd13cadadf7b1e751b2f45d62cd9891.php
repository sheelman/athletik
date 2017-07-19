<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_bc84ffc6a45284c673bc3d7c9c706e2172ace3dea9bc5b187e0930d79d2e0ecb extends Twig_Template
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
        $__internal_fb4465d7e6533426eee91ba35b82d7d3e67df89601765dc165fd063367a16ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4465d7e6533426eee91ba35b82d7d3e67df89601765dc165fd063367a16ccf->enter($__internal_fb4465d7e6533426eee91ba35b82d7d3e67df89601765dc165fd063367a16ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_0973340a8435b8fd1ddd0282c77d99a2de760602d0ed5d4c1c2ec60584257c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0973340a8435b8fd1ddd0282c77d99a2de760602d0ed5d4c1c2ec60584257c97->enter($__internal_0973340a8435b8fd1ddd0282c77d99a2de760602d0ed5d4c1c2ec60584257c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_fb4465d7e6533426eee91ba35b82d7d3e67df89601765dc165fd063367a16ccf->leave($__internal_fb4465d7e6533426eee91ba35b82d7d3e67df89601765dc165fd063367a16ccf_prof);

        
        $__internal_0973340a8435b8fd1ddd0282c77d99a2de760602d0ed5d4c1c2ec60584257c97->leave($__internal_0973340a8435b8fd1ddd0282c77d99a2de760602d0ed5d4c1c2ec60584257c97_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
