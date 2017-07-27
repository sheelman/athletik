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
        $__internal_5d2a676253b3a2051ae176ee16a6e69dc2e9758b238bff3304b02f96c27cc5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2a676253b3a2051ae176ee16a6e69dc2e9758b238bff3304b02f96c27cc5a3->enter($__internal_5d2a676253b3a2051ae176ee16a6e69dc2e9758b238bff3304b02f96c27cc5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_9b90eeab839e7b9c1d7c4fbcd2c348a27b9b3bf537d2a2f29be61c503595124b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b90eeab839e7b9c1d7c4fbcd2c348a27b9b3bf537d2a2f29be61c503595124b->enter($__internal_9b90eeab839e7b9c1d7c4fbcd2c348a27b9b3bf537d2a2f29be61c503595124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2a676253b3a2051ae176ee16a6e69dc2e9758b238bff3304b02f96c27cc5a3->leave($__internal_5d2a676253b3a2051ae176ee16a6e69dc2e9758b238bff3304b02f96c27cc5a3_prof);

        
        $__internal_9b90eeab839e7b9c1d7c4fbcd2c348a27b9b3bf537d2a2f29be61c503595124b->leave($__internal_9b90eeab839e7b9c1d7c4fbcd2c348a27b9b3bf537d2a2f29be61c503595124b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a370161a9969343fadc92dc5374569492f831d2b091dcfb387750c140d6dca2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a370161a9969343fadc92dc5374569492f831d2b091dcfb387750c140d6dca2a->enter($__internal_a370161a9969343fadc92dc5374569492f831d2b091dcfb387750c140d6dca2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a27bf1b3eab68a5b836057548cbfa6233f9370e5ed0d8d0a2a3de92f93969eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27bf1b3eab68a5b836057548cbfa6233f9370e5ed0d8d0a2a3de92f93969eac->enter($__internal_a27bf1b3eab68a5b836057548cbfa6233f9370e5ed0d8d0a2a3de92f93969eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a27bf1b3eab68a5b836057548cbfa6233f9370e5ed0d8d0a2a3de92f93969eac->leave($__internal_a27bf1b3eab68a5b836057548cbfa6233f9370e5ed0d8d0a2a3de92f93969eac_prof);

        
        $__internal_a370161a9969343fadc92dc5374569492f831d2b091dcfb387750c140d6dca2a->leave($__internal_a370161a9969343fadc92dc5374569492f831d2b091dcfb387750c140d6dca2a_prof);

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
