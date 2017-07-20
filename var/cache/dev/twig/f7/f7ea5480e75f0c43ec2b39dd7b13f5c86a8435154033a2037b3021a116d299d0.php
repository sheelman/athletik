<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b97e0ee1936e42308c1b4cfc21d9ef7863adb5aa2609b6acfe380cb3592098d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_1f7e849faadc3f00a7352f2cf1a614468d5d6202ec7840491f5de488f62e5bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7e849faadc3f00a7352f2cf1a614468d5d6202ec7840491f5de488f62e5bfc->enter($__internal_1f7e849faadc3f00a7352f2cf1a614468d5d6202ec7840491f5de488f62e5bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_49d04bddedfb2dfeadd12c05523c01f7167721d4b8000437df99e90de6e19b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d04bddedfb2dfeadd12c05523c01f7167721d4b8000437df99e90de6e19b53->enter($__internal_49d04bddedfb2dfeadd12c05523c01f7167721d4b8000437df99e90de6e19b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f7e849faadc3f00a7352f2cf1a614468d5d6202ec7840491f5de488f62e5bfc->leave($__internal_1f7e849faadc3f00a7352f2cf1a614468d5d6202ec7840491f5de488f62e5bfc_prof);

        
        $__internal_49d04bddedfb2dfeadd12c05523c01f7167721d4b8000437df99e90de6e19b53->leave($__internal_49d04bddedfb2dfeadd12c05523c01f7167721d4b8000437df99e90de6e19b53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b85d62c1c4794f3826d12a1d11287baf4bbd8496a5cf662c9b18fac5d9593ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b85d62c1c4794f3826d12a1d11287baf4bbd8496a5cf662c9b18fac5d9593ec->enter($__internal_9b85d62c1c4794f3826d12a1d11287baf4bbd8496a5cf662c9b18fac5d9593ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9f46e685cc8c35f427fa6ac8e247fc6353035c966faa59f47e34c38f7fadefbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f46e685cc8c35f427fa6ac8e247fc6353035c966faa59f47e34c38f7fadefbd->enter($__internal_9f46e685cc8c35f427fa6ac8e247fc6353035c966faa59f47e34c38f7fadefbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9f46e685cc8c35f427fa6ac8e247fc6353035c966faa59f47e34c38f7fadefbd->leave($__internal_9f46e685cc8c35f427fa6ac8e247fc6353035c966faa59f47e34c38f7fadefbd_prof);

        
        $__internal_9b85d62c1c4794f3826d12a1d11287baf4bbd8496a5cf662c9b18fac5d9593ec->leave($__internal_9b85d62c1c4794f3826d12a1d11287baf4bbd8496a5cf662c9b18fac5d9593ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
