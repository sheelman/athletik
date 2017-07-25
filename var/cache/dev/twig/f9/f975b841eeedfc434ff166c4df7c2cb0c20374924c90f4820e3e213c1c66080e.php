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
        $__internal_d83b97aa99e2ad88d22650221ee932b2d35ab9923395b1e3cbc669a2e19da92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83b97aa99e2ad88d22650221ee932b2d35ab9923395b1e3cbc669a2e19da92f->enter($__internal_d83b97aa99e2ad88d22650221ee932b2d35ab9923395b1e3cbc669a2e19da92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_3145d348ba9119817d15bab817af3e634b414cb0ea356563895cbcc25b9e9c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3145d348ba9119817d15bab817af3e634b414cb0ea356563895cbcc25b9e9c8d->enter($__internal_3145d348ba9119817d15bab817af3e634b414cb0ea356563895cbcc25b9e9c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d83b97aa99e2ad88d22650221ee932b2d35ab9923395b1e3cbc669a2e19da92f->leave($__internal_d83b97aa99e2ad88d22650221ee932b2d35ab9923395b1e3cbc669a2e19da92f_prof);

        
        $__internal_3145d348ba9119817d15bab817af3e634b414cb0ea356563895cbcc25b9e9c8d->leave($__internal_3145d348ba9119817d15bab817af3e634b414cb0ea356563895cbcc25b9e9c8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_536b08f22eca2ded712c13c2e706dec57fb623a6748bde3b023adf62aa6d7208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536b08f22eca2ded712c13c2e706dec57fb623a6748bde3b023adf62aa6d7208->enter($__internal_536b08f22eca2ded712c13c2e706dec57fb623a6748bde3b023adf62aa6d7208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7cfdc839487c10dd5bff6d28570d92c387e825b7892378ec5152258581cc0897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfdc839487c10dd5bff6d28570d92c387e825b7892378ec5152258581cc0897->enter($__internal_7cfdc839487c10dd5bff6d28570d92c387e825b7892378ec5152258581cc0897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7cfdc839487c10dd5bff6d28570d92c387e825b7892378ec5152258581cc0897->leave($__internal_7cfdc839487c10dd5bff6d28570d92c387e825b7892378ec5152258581cc0897_prof);

        
        $__internal_536b08f22eca2ded712c13c2e706dec57fb623a6748bde3b023adf62aa6d7208->leave($__internal_536b08f22eca2ded712c13c2e706dec57fb623a6748bde3b023adf62aa6d7208_prof);

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
