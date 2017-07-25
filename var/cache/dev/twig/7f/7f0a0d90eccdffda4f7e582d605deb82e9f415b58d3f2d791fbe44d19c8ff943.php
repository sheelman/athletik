<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3279dbcdca5c0aeeab86c3495066d40ec56322e772c432abca5b353e54e515c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d8e3cf9a693e9d313ece484d05f6f268c06ce52e07a03cd7a9bb12d845aa3672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e3cf9a693e9d313ece484d05f6f268c06ce52e07a03cd7a9bb12d845aa3672->enter($__internal_d8e3cf9a693e9d313ece484d05f6f268c06ce52e07a03cd7a9bb12d845aa3672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_b9681c111936c1d15090505ec7781bf50c3bdc9556fe9b03aaf652932fa4f7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9681c111936c1d15090505ec7781bf50c3bdc9556fe9b03aaf652932fa4f7d5->enter($__internal_b9681c111936c1d15090505ec7781bf50c3bdc9556fe9b03aaf652932fa4f7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e3cf9a693e9d313ece484d05f6f268c06ce52e07a03cd7a9bb12d845aa3672->leave($__internal_d8e3cf9a693e9d313ece484d05f6f268c06ce52e07a03cd7a9bb12d845aa3672_prof);

        
        $__internal_b9681c111936c1d15090505ec7781bf50c3bdc9556fe9b03aaf652932fa4f7d5->leave($__internal_b9681c111936c1d15090505ec7781bf50c3bdc9556fe9b03aaf652932fa4f7d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1391d992237f094de640559111e1207090a152338ec64d82d7512f1eae48482f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1391d992237f094de640559111e1207090a152338ec64d82d7512f1eae48482f->enter($__internal_1391d992237f094de640559111e1207090a152338ec64d82d7512f1eae48482f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae02c44b4da1ecc952ac140477d8be8f025059aebff098a279ef0a886c62aeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae02c44b4da1ecc952ac140477d8be8f025059aebff098a279ef0a886c62aeae->enter($__internal_ae02c44b4da1ecc952ac140477d8be8f025059aebff098a279ef0a886c62aeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ae02c44b4da1ecc952ac140477d8be8f025059aebff098a279ef0a886c62aeae->leave($__internal_ae02c44b4da1ecc952ac140477d8be8f025059aebff098a279ef0a886c62aeae_prof);

        
        $__internal_1391d992237f094de640559111e1207090a152338ec64d82d7512f1eae48482f->leave($__internal_1391d992237f094de640559111e1207090a152338ec64d82d7512f1eae48482f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
