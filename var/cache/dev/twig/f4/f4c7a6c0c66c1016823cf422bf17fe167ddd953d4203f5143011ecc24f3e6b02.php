<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_95beef668053696dc4eb9e06df3dc5e3c358e58b637154d9399b55d8d67fff66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f62dbc07728e504455c175a05519bf5d007df7203fa499ef8e4ba85cf284df57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62dbc07728e504455c175a05519bf5d007df7203fa499ef8e4ba85cf284df57->enter($__internal_f62dbc07728e504455c175a05519bf5d007df7203fa499ef8e4ba85cf284df57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_5497c66810c209694c2a3a51d260a6970ac85dc60743f5b516c986c56fe78ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5497c66810c209694c2a3a51d260a6970ac85dc60743f5b516c986c56fe78ea5->enter($__internal_5497c66810c209694c2a3a51d260a6970ac85dc60743f5b516c986c56fe78ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f62dbc07728e504455c175a05519bf5d007df7203fa499ef8e4ba85cf284df57->leave($__internal_f62dbc07728e504455c175a05519bf5d007df7203fa499ef8e4ba85cf284df57_prof);

        
        $__internal_5497c66810c209694c2a3a51d260a6970ac85dc60743f5b516c986c56fe78ea5->leave($__internal_5497c66810c209694c2a3a51d260a6970ac85dc60743f5b516c986c56fe78ea5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d59261de6798fcc5d7d86886b3bad4fbbd03c2ee70544767277febc9b19de18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59261de6798fcc5d7d86886b3bad4fbbd03c2ee70544767277febc9b19de18b->enter($__internal_d59261de6798fcc5d7d86886b3bad4fbbd03c2ee70544767277febc9b19de18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26c1c111bb0568217a532f52e6763b5300b15597a207b1f967819afef2f1950d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c1c111bb0568217a532f52e6763b5300b15597a207b1f967819afef2f1950d->enter($__internal_26c1c111bb0568217a532f52e6763b5300b15597a207b1f967819afef2f1950d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_26c1c111bb0568217a532f52e6763b5300b15597a207b1f967819afef2f1950d->leave($__internal_26c1c111bb0568217a532f52e6763b5300b15597a207b1f967819afef2f1950d_prof);

        
        $__internal_d59261de6798fcc5d7d86886b3bad4fbbd03c2ee70544767277febc9b19de18b->leave($__internal_d59261de6798fcc5d7d86886b3bad4fbbd03c2ee70544767277febc9b19de18b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
