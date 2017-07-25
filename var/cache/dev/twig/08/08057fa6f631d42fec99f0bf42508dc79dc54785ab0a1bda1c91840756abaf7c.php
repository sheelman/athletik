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
        $__internal_aa7f7bff132fded72449d93e38345c93d5768039b22c920169f4cc04a87f5015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7f7bff132fded72449d93e38345c93d5768039b22c920169f4cc04a87f5015->enter($__internal_aa7f7bff132fded72449d93e38345c93d5768039b22c920169f4cc04a87f5015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_896f5f69b45b3a581f08642b45d419da53bdd2375228fca68f3dd1c01da848d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896f5f69b45b3a581f08642b45d419da53bdd2375228fca68f3dd1c01da848d1->enter($__internal_896f5f69b45b3a581f08642b45d419da53bdd2375228fca68f3dd1c01da848d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa7f7bff132fded72449d93e38345c93d5768039b22c920169f4cc04a87f5015->leave($__internal_aa7f7bff132fded72449d93e38345c93d5768039b22c920169f4cc04a87f5015_prof);

        
        $__internal_896f5f69b45b3a581f08642b45d419da53bdd2375228fca68f3dd1c01da848d1->leave($__internal_896f5f69b45b3a581f08642b45d419da53bdd2375228fca68f3dd1c01da848d1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_096db64dfc56bbfa431ace83f3d9816af76f052305c5be90d6cf320cd2756a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096db64dfc56bbfa431ace83f3d9816af76f052305c5be90d6cf320cd2756a44->enter($__internal_096db64dfc56bbfa431ace83f3d9816af76f052305c5be90d6cf320cd2756a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d1df17912d3fa972fda9b5f49971adec58995ed9290ccb04ca9bdd3c6f65f6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1df17912d3fa972fda9b5f49971adec58995ed9290ccb04ca9bdd3c6f65f6f8->enter($__internal_d1df17912d3fa972fda9b5f49971adec58995ed9290ccb04ca9bdd3c6f65f6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d1df17912d3fa972fda9b5f49971adec58995ed9290ccb04ca9bdd3c6f65f6f8->leave($__internal_d1df17912d3fa972fda9b5f49971adec58995ed9290ccb04ca9bdd3c6f65f6f8_prof);

        
        $__internal_096db64dfc56bbfa431ace83f3d9816af76f052305c5be90d6cf320cd2756a44->leave($__internal_096db64dfc56bbfa431ace83f3d9816af76f052305c5be90d6cf320cd2756a44_prof);

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
