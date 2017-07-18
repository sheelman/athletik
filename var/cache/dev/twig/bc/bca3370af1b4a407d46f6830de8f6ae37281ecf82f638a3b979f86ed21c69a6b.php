<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8da44bcdea30fb3bce82794837dbb5297a9a1ca912ab6945a5c0372627a7abcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8a1036866226335174fa93deafb063556c7488cd87390bcc5fe7f29f4798001f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1036866226335174fa93deafb063556c7488cd87390bcc5fe7f29f4798001f->enter($__internal_8a1036866226335174fa93deafb063556c7488cd87390bcc5fe7f29f4798001f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_e1720a3a9b277ac4ab67cd8317129376370142ac0eef0daf526268ba2287b794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1720a3a9b277ac4ab67cd8317129376370142ac0eef0daf526268ba2287b794->enter($__internal_e1720a3a9b277ac4ab67cd8317129376370142ac0eef0daf526268ba2287b794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a1036866226335174fa93deafb063556c7488cd87390bcc5fe7f29f4798001f->leave($__internal_8a1036866226335174fa93deafb063556c7488cd87390bcc5fe7f29f4798001f_prof);

        
        $__internal_e1720a3a9b277ac4ab67cd8317129376370142ac0eef0daf526268ba2287b794->leave($__internal_e1720a3a9b277ac4ab67cd8317129376370142ac0eef0daf526268ba2287b794_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1dfa999934794b009a4ef09a60661ac0b9556c979c5ff238ff3b3852297547ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dfa999934794b009a4ef09a60661ac0b9556c979c5ff238ff3b3852297547ad->enter($__internal_1dfa999934794b009a4ef09a60661ac0b9556c979c5ff238ff3b3852297547ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b659fa30bc324b3a1bbf8800d4bfb400b781cc86ee1d200c7a6fb071328c9c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b659fa30bc324b3a1bbf8800d4bfb400b781cc86ee1d200c7a6fb071328c9c12->enter($__internal_b659fa30bc324b3a1bbf8800d4bfb400b781cc86ee1d200c7a6fb071328c9c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b659fa30bc324b3a1bbf8800d4bfb400b781cc86ee1d200c7a6fb071328c9c12->leave($__internal_b659fa30bc324b3a1bbf8800d4bfb400b781cc86ee1d200c7a6fb071328c9c12_prof);

        
        $__internal_1dfa999934794b009a4ef09a60661ac0b9556c979c5ff238ff3b3852297547ad->leave($__internal_1dfa999934794b009a4ef09a60661ac0b9556c979c5ff238ff3b3852297547ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
