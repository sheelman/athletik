<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3b82c32df29cb8437f0bec2cd0de737ae8339e8af7d21a8f808365f7f195251c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_195c848c720397ead583745cc4202209ece2e32a9bfa07229c2ef0d1ea5504a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195c848c720397ead583745cc4202209ece2e32a9bfa07229c2ef0d1ea5504a3->enter($__internal_195c848c720397ead583745cc4202209ece2e32a9bfa07229c2ef0d1ea5504a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_79b625414f5ad055e7dba121f51e560ad9dc104b86ad1be9ec76baed0b57d9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b625414f5ad055e7dba121f51e560ad9dc104b86ad1be9ec76baed0b57d9a0->enter($__internal_79b625414f5ad055e7dba121f51e560ad9dc104b86ad1be9ec76baed0b57d9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_195c848c720397ead583745cc4202209ece2e32a9bfa07229c2ef0d1ea5504a3->leave($__internal_195c848c720397ead583745cc4202209ece2e32a9bfa07229c2ef0d1ea5504a3_prof);

        
        $__internal_79b625414f5ad055e7dba121f51e560ad9dc104b86ad1be9ec76baed0b57d9a0->leave($__internal_79b625414f5ad055e7dba121f51e560ad9dc104b86ad1be9ec76baed0b57d9a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e2dd4fc5d508810bc1a65dce40ebf147b94d4c91cee3ec022abdeadec72fc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2dd4fc5d508810bc1a65dce40ebf147b94d4c91cee3ec022abdeadec72fc77->enter($__internal_5e2dd4fc5d508810bc1a65dce40ebf147b94d4c91cee3ec022abdeadec72fc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0d212439edaa4ec9cd3c4c0ed11285c4d3560dce5ed25c6c03af7b9b07fe21bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d212439edaa4ec9cd3c4c0ed11285c4d3560dce5ed25c6c03af7b9b07fe21bb->enter($__internal_0d212439edaa4ec9cd3c4c0ed11285c4d3560dce5ed25c6c03af7b9b07fe21bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_0d212439edaa4ec9cd3c4c0ed11285c4d3560dce5ed25c6c03af7b9b07fe21bb->leave($__internal_0d212439edaa4ec9cd3c4c0ed11285c4d3560dce5ed25c6c03af7b9b07fe21bb_prof);

        
        $__internal_5e2dd4fc5d508810bc1a65dce40ebf147b94d4c91cee3ec022abdeadec72fc77->leave($__internal_5e2dd4fc5d508810bc1a65dce40ebf147b94d4c91cee3ec022abdeadec72fc77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
