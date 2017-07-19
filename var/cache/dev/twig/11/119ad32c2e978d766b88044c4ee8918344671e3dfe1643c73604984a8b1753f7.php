<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8d4b7eb359beabde00363abfa54c222061db4d8d8c81bd7a4ac54fff0458b344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_0956de659885075ca24d332ccd913ac447524eeccd0189fee7ea8545b1562b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0956de659885075ca24d332ccd913ac447524eeccd0189fee7ea8545b1562b10->enter($__internal_0956de659885075ca24d332ccd913ac447524eeccd0189fee7ea8545b1562b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_5018c51e38118780eeb248f660753ff044aa015e2b944ca3fa5309cc219f1741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5018c51e38118780eeb248f660753ff044aa015e2b944ca3fa5309cc219f1741->enter($__internal_5018c51e38118780eeb248f660753ff044aa015e2b944ca3fa5309cc219f1741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0956de659885075ca24d332ccd913ac447524eeccd0189fee7ea8545b1562b10->leave($__internal_0956de659885075ca24d332ccd913ac447524eeccd0189fee7ea8545b1562b10_prof);

        
        $__internal_5018c51e38118780eeb248f660753ff044aa015e2b944ca3fa5309cc219f1741->leave($__internal_5018c51e38118780eeb248f660753ff044aa015e2b944ca3fa5309cc219f1741_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd99fe7d3c4411ca7cc1381de8a1997c5007f2968a7b5b29598cf964f588019e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd99fe7d3c4411ca7cc1381de8a1997c5007f2968a7b5b29598cf964f588019e->enter($__internal_cd99fe7d3c4411ca7cc1381de8a1997c5007f2968a7b5b29598cf964f588019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_336c3df18408b052f87e16deab41a363d7bbdd7863c7dac5ffedbf665a2d06b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336c3df18408b052f87e16deab41a363d7bbdd7863c7dac5ffedbf665a2d06b8->enter($__internal_336c3df18408b052f87e16deab41a363d7bbdd7863c7dac5ffedbf665a2d06b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_336c3df18408b052f87e16deab41a363d7bbdd7863c7dac5ffedbf665a2d06b8->leave($__internal_336c3df18408b052f87e16deab41a363d7bbdd7863c7dac5ffedbf665a2d06b8_prof);

        
        $__internal_cd99fe7d3c4411ca7cc1381de8a1997c5007f2968a7b5b29598cf964f588019e->leave($__internal_cd99fe7d3c4411ca7cc1381de8a1997c5007f2968a7b5b29598cf964f588019e_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
