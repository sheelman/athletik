<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_ebe05e1af7c67ee7c36211f4520cd84579ab2f8b179e10b1f876d4acbca70d9d extends Twig_Template
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
        $__internal_5ff0d0890b31877b3193a645742410eef4c038583037eb882d99597ddb0104ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff0d0890b31877b3193a645742410eef4c038583037eb882d99597ddb0104ac->enter($__internal_5ff0d0890b31877b3193a645742410eef4c038583037eb882d99597ddb0104ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_4616d7f8af3e9e28c4a97d13ab6d882952c64892ed217075d71dc538260657d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4616d7f8af3e9e28c4a97d13ab6d882952c64892ed217075d71dc538260657d7->enter($__internal_4616d7f8af3e9e28c4a97d13ab6d882952c64892ed217075d71dc538260657d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_5ff0d0890b31877b3193a645742410eef4c038583037eb882d99597ddb0104ac->leave($__internal_5ff0d0890b31877b3193a645742410eef4c038583037eb882d99597ddb0104ac_prof);

        
        $__internal_4616d7f8af3e9e28c4a97d13ab6d882952c64892ed217075d71dc538260657d7->leave($__internal_4616d7f8af3e9e28c4a97d13ab6d882952c64892ed217075d71dc538260657d7_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
