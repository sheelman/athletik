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
        $__internal_b7a091d60627c614768ca11a651e31921efe89de38a07eab8ab440b981b571c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a091d60627c614768ca11a651e31921efe89de38a07eab8ab440b981b571c5->enter($__internal_b7a091d60627c614768ca11a651e31921efe89de38a07eab8ab440b981b571c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_32c70fdfec7b465988f6e9a85f9136725a2700098016cf1a54af3fc7c3b431d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c70fdfec7b465988f6e9a85f9136725a2700098016cf1a54af3fc7c3b431d2->enter($__internal_32c70fdfec7b465988f6e9a85f9136725a2700098016cf1a54af3fc7c3b431d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7a091d60627c614768ca11a651e31921efe89de38a07eab8ab440b981b571c5->leave($__internal_b7a091d60627c614768ca11a651e31921efe89de38a07eab8ab440b981b571c5_prof);

        
        $__internal_32c70fdfec7b465988f6e9a85f9136725a2700098016cf1a54af3fc7c3b431d2->leave($__internal_32c70fdfec7b465988f6e9a85f9136725a2700098016cf1a54af3fc7c3b431d2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb2ef51447a91db21f0a60c607dd99b0a8ced457704db74f21dc9933fdc60415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2ef51447a91db21f0a60c607dd99b0a8ced457704db74f21dc9933fdc60415->enter($__internal_eb2ef51447a91db21f0a60c607dd99b0a8ced457704db74f21dc9933fdc60415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c66867d22b3ad05288fbe0d5e4b08a9d7eef6c874b6583045c81a19e07669b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66867d22b3ad05288fbe0d5e4b08a9d7eef6c874b6583045c81a19e07669b73->enter($__internal_c66867d22b3ad05288fbe0d5e4b08a9d7eef6c874b6583045c81a19e07669b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c66867d22b3ad05288fbe0d5e4b08a9d7eef6c874b6583045c81a19e07669b73->leave($__internal_c66867d22b3ad05288fbe0d5e4b08a9d7eef6c874b6583045c81a19e07669b73_prof);

        
        $__internal_eb2ef51447a91db21f0a60c607dd99b0a8ced457704db74f21dc9933fdc60415->leave($__internal_eb2ef51447a91db21f0a60c607dd99b0a8ced457704db74f21dc9933fdc60415_prof);

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
