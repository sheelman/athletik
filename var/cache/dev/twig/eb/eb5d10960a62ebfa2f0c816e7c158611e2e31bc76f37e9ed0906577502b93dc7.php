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
        $__internal_d0296250fd56734638b81601fd8f39bbd871132b4d6de7e5eff07fd8f687dbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0296250fd56734638b81601fd8f39bbd871132b4d6de7e5eff07fd8f687dbfb->enter($__internal_d0296250fd56734638b81601fd8f39bbd871132b4d6de7e5eff07fd8f687dbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_3ae69ac5a20dc54f35a3fb46f5e3ab12fbe82680fddc5b10587ed72f1fa0c1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae69ac5a20dc54f35a3fb46f5e3ab12fbe82680fddc5b10587ed72f1fa0c1d8->enter($__internal_3ae69ac5a20dc54f35a3fb46f5e3ab12fbe82680fddc5b10587ed72f1fa0c1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0296250fd56734638b81601fd8f39bbd871132b4d6de7e5eff07fd8f687dbfb->leave($__internal_d0296250fd56734638b81601fd8f39bbd871132b4d6de7e5eff07fd8f687dbfb_prof);

        
        $__internal_3ae69ac5a20dc54f35a3fb46f5e3ab12fbe82680fddc5b10587ed72f1fa0c1d8->leave($__internal_3ae69ac5a20dc54f35a3fb46f5e3ab12fbe82680fddc5b10587ed72f1fa0c1d8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_840671e10764846d0015bd7a250f72ab7d2072d1ae221f2a4e889eda36938f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840671e10764846d0015bd7a250f72ab7d2072d1ae221f2a4e889eda36938f28->enter($__internal_840671e10764846d0015bd7a250f72ab7d2072d1ae221f2a4e889eda36938f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74e1b1e181cdc2b21d46a1827c0f3e1686f52fabf14a4de14f7063d03bc1f466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e1b1e181cdc2b21d46a1827c0f3e1686f52fabf14a4de14f7063d03bc1f466->enter($__internal_74e1b1e181cdc2b21d46a1827c0f3e1686f52fabf14a4de14f7063d03bc1f466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_74e1b1e181cdc2b21d46a1827c0f3e1686f52fabf14a4de14f7063d03bc1f466->leave($__internal_74e1b1e181cdc2b21d46a1827c0f3e1686f52fabf14a4de14f7063d03bc1f466_prof);

        
        $__internal_840671e10764846d0015bd7a250f72ab7d2072d1ae221f2a4e889eda36938f28->leave($__internal_840671e10764846d0015bd7a250f72ab7d2072d1ae221f2a4e889eda36938f28_prof);

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
