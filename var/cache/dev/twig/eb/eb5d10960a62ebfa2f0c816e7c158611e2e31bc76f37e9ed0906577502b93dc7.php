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
        $__internal_dafa6b67d83d734a70813fbdd5826e3c6c66d821fbc4b185f4067ccf36666ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafa6b67d83d734a70813fbdd5826e3c6c66d821fbc4b185f4067ccf36666ea5->enter($__internal_dafa6b67d83d734a70813fbdd5826e3c6c66d821fbc4b185f4067ccf36666ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_39f1ca8a14601fc43e85d45e2dddb54880f9ddfc727137fd35e867aac912bb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f1ca8a14601fc43e85d45e2dddb54880f9ddfc727137fd35e867aac912bb73->enter($__internal_39f1ca8a14601fc43e85d45e2dddb54880f9ddfc727137fd35e867aac912bb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dafa6b67d83d734a70813fbdd5826e3c6c66d821fbc4b185f4067ccf36666ea5->leave($__internal_dafa6b67d83d734a70813fbdd5826e3c6c66d821fbc4b185f4067ccf36666ea5_prof);

        
        $__internal_39f1ca8a14601fc43e85d45e2dddb54880f9ddfc727137fd35e867aac912bb73->leave($__internal_39f1ca8a14601fc43e85d45e2dddb54880f9ddfc727137fd35e867aac912bb73_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d6197830b833f109af56f81094e44d459654dc31ce32e24b7dc94d5b144ab2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6197830b833f109af56f81094e44d459654dc31ce32e24b7dc94d5b144ab2c->enter($__internal_5d6197830b833f109af56f81094e44d459654dc31ce32e24b7dc94d5b144ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f0830d2cc304c5734a2ecc9dbd5468c88bb2ca74de1037287b3c51f5f3eb14f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0830d2cc304c5734a2ecc9dbd5468c88bb2ca74de1037287b3c51f5f3eb14f5->enter($__internal_f0830d2cc304c5734a2ecc9dbd5468c88bb2ca74de1037287b3c51f5f3eb14f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f0830d2cc304c5734a2ecc9dbd5468c88bb2ca74de1037287b3c51f5f3eb14f5->leave($__internal_f0830d2cc304c5734a2ecc9dbd5468c88bb2ca74de1037287b3c51f5f3eb14f5_prof);

        
        $__internal_5d6197830b833f109af56f81094e44d459654dc31ce32e24b7dc94d5b144ab2c->leave($__internal_5d6197830b833f109af56f81094e44d459654dc31ce32e24b7dc94d5b144ab2c_prof);

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
