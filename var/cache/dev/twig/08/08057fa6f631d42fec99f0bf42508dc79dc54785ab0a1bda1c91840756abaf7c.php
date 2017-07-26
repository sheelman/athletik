<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_12dfc22914f0f4944e88d2e33b6943043bf4cf57ee81602cccc77d68a299198e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3fef26449d1d3eea16b8954318d96630b1d74403aa91f7d60b6f17f3fc0ba0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fef26449d1d3eea16b8954318d96630b1d74403aa91f7d60b6f17f3fc0ba0e2->enter($__internal_3fef26449d1d3eea16b8954318d96630b1d74403aa91f7d60b6f17f3fc0ba0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_a82b0b32abdbb2b1cdbd92714e971e54c538f31bc1198b06408a8a9343ec550f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82b0b32abdbb2b1cdbd92714e971e54c538f31bc1198b06408a8a9343ec550f->enter($__internal_a82b0b32abdbb2b1cdbd92714e971e54c538f31bc1198b06408a8a9343ec550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fef26449d1d3eea16b8954318d96630b1d74403aa91f7d60b6f17f3fc0ba0e2->leave($__internal_3fef26449d1d3eea16b8954318d96630b1d74403aa91f7d60b6f17f3fc0ba0e2_prof);

        
        $__internal_a82b0b32abdbb2b1cdbd92714e971e54c538f31bc1198b06408a8a9343ec550f->leave($__internal_a82b0b32abdbb2b1cdbd92714e971e54c538f31bc1198b06408a8a9343ec550f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8a80373f30e1ad44e9eace5518607226826fd090e92666be364db74c9c8e8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a80373f30e1ad44e9eace5518607226826fd090e92666be364db74c9c8e8bc->enter($__internal_b8a80373f30e1ad44e9eace5518607226826fd090e92666be364db74c9c8e8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_75e0736fbe444c3bee5d9e5a6e067ce683efdff46c3f9fc6085a1e5ade881d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e0736fbe444c3bee5d9e5a6e067ce683efdff46c3f9fc6085a1e5ade881d26->enter($__internal_75e0736fbe444c3bee5d9e5a6e067ce683efdff46c3f9fc6085a1e5ade881d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_75e0736fbe444c3bee5d9e5a6e067ce683efdff46c3f9fc6085a1e5ade881d26->leave($__internal_75e0736fbe444c3bee5d9e5a6e067ce683efdff46c3f9fc6085a1e5ade881d26_prof);

        
        $__internal_b8a80373f30e1ad44e9eace5518607226826fd090e92666be364db74c9c8e8bc->leave($__internal_b8a80373f30e1ad44e9eace5518607226826fd090e92666be364db74c9c8e8bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
