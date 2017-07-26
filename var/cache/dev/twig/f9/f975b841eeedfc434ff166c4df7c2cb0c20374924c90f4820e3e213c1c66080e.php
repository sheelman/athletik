<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_de2859ca3238d90e83a7291214aad0e2709ea62674f0a1942384c94ff4afdd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_07d1e8c0e000246490a87b94f88b088dbabd1e502395092f3631ff8f841bd9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d1e8c0e000246490a87b94f88b088dbabd1e502395092f3631ff8f841bd9f2->enter($__internal_07d1e8c0e000246490a87b94f88b088dbabd1e502395092f3631ff8f841bd9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_c63afb38299e9f19a84dd18d17b614e48afc64c4fcfcba610e39ca265db6922d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63afb38299e9f19a84dd18d17b614e48afc64c4fcfcba610e39ca265db6922d->enter($__internal_c63afb38299e9f19a84dd18d17b614e48afc64c4fcfcba610e39ca265db6922d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07d1e8c0e000246490a87b94f88b088dbabd1e502395092f3631ff8f841bd9f2->leave($__internal_07d1e8c0e000246490a87b94f88b088dbabd1e502395092f3631ff8f841bd9f2_prof);

        
        $__internal_c63afb38299e9f19a84dd18d17b614e48afc64c4fcfcba610e39ca265db6922d->leave($__internal_c63afb38299e9f19a84dd18d17b614e48afc64c4fcfcba610e39ca265db6922d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60f174854430c73381a4a46325c2a2e4ce752cd7645535f546e440064a65193f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f174854430c73381a4a46325c2a2e4ce752cd7645535f546e440064a65193f->enter($__internal_60f174854430c73381a4a46325c2a2e4ce752cd7645535f546e440064a65193f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91750bf747c5ff72d639982f21817d3f5c7024b7e4c5f5a9a7a19b3a5577324e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91750bf747c5ff72d639982f21817d3f5c7024b7e4c5f5a9a7a19b3a5577324e->enter($__internal_91750bf747c5ff72d639982f21817d3f5c7024b7e4c5f5a9a7a19b3a5577324e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_91750bf747c5ff72d639982f21817d3f5c7024b7e4c5f5a9a7a19b3a5577324e->leave($__internal_91750bf747c5ff72d639982f21817d3f5c7024b7e4c5f5a9a7a19b3a5577324e_prof);

        
        $__internal_60f174854430c73381a4a46325c2a2e4ce752cd7645535f546e440064a65193f->leave($__internal_60f174854430c73381a4a46325c2a2e4ce752cd7645535f546e440064a65193f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
