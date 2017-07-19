<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_06783aaae447b721b0bba79bdc872564fb2c7940d135c2f36118dd179e7eb90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06783aaae447b721b0bba79bdc872564fb2c7940d135c2f36118dd179e7eb90a->enter($__internal_06783aaae447b721b0bba79bdc872564fb2c7940d135c2f36118dd179e7eb90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_162370721cfee057abf757503b002265a704da214fef5d3397c20aef581f80c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162370721cfee057abf757503b002265a704da214fef5d3397c20aef581f80c3->enter($__internal_162370721cfee057abf757503b002265a704da214fef5d3397c20aef581f80c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06783aaae447b721b0bba79bdc872564fb2c7940d135c2f36118dd179e7eb90a->leave($__internal_06783aaae447b721b0bba79bdc872564fb2c7940d135c2f36118dd179e7eb90a_prof);

        
        $__internal_162370721cfee057abf757503b002265a704da214fef5d3397c20aef581f80c3->leave($__internal_162370721cfee057abf757503b002265a704da214fef5d3397c20aef581f80c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47a1aebaec6aa4cbf21ec73059032f67135bcdbbdd7cfba8a4c64a6ef25c39e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a1aebaec6aa4cbf21ec73059032f67135bcdbbdd7cfba8a4c64a6ef25c39e7->enter($__internal_47a1aebaec6aa4cbf21ec73059032f67135bcdbbdd7cfba8a4c64a6ef25c39e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c2c323319174e4076709605cdeaff304ae4ca14516a06ef631691c23a9d1fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2c323319174e4076709605cdeaff304ae4ca14516a06ef631691c23a9d1fad->enter($__internal_4c2c323319174e4076709605cdeaff304ae4ca14516a06ef631691c23a9d1fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4c2c323319174e4076709605cdeaff304ae4ca14516a06ef631691c23a9d1fad->leave($__internal_4c2c323319174e4076709605cdeaff304ae4ca14516a06ef631691c23a9d1fad_prof);

        
        $__internal_47a1aebaec6aa4cbf21ec73059032f67135bcdbbdd7cfba8a4c64a6ef25c39e7->leave($__internal_47a1aebaec6aa4cbf21ec73059032f67135bcdbbdd7cfba8a4c64a6ef25c39e7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
