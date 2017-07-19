<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_f140b2346f01ea7702f0d42d6fa01314b51e7a373692d8caf9a763e08b1e58ac extends Twig_Template
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
        $__internal_e95e902b07594224b1419a8fcab7b20d11d4a0836c2cefc325ceaba934d7bad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95e902b07594224b1419a8fcab7b20d11d4a0836c2cefc325ceaba934d7bad4->enter($__internal_e95e902b07594224b1419a8fcab7b20d11d4a0836c2cefc325ceaba934d7bad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_b6a7b053b5fa60d0743b61e4e5f0068f974dd076c4f12c0ac332c3a05abac268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a7b053b5fa60d0743b61e4e5f0068f974dd076c4f12c0ac332c3a05abac268->enter($__internal_b6a7b053b5fa60d0743b61e4e5f0068f974dd076c4f12c0ac332c3a05abac268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e95e902b07594224b1419a8fcab7b20d11d4a0836c2cefc325ceaba934d7bad4->leave($__internal_e95e902b07594224b1419a8fcab7b20d11d4a0836c2cefc325ceaba934d7bad4_prof);

        
        $__internal_b6a7b053b5fa60d0743b61e4e5f0068f974dd076c4f12c0ac332c3a05abac268->leave($__internal_b6a7b053b5fa60d0743b61e4e5f0068f974dd076c4f12c0ac332c3a05abac268_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
