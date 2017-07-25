<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2c39c4421820dc1e8347a29f7666d686f01fcece53858328f2335e0ee7423cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_cc9973af73981180929945cbb84b48f1366f0394371e861ad149872715525e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9973af73981180929945cbb84b48f1366f0394371e861ad149872715525e3a->enter($__internal_cc9973af73981180929945cbb84b48f1366f0394371e861ad149872715525e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_4bc5f403f70aa559e02061bc5c6bab1f91743a74c18c4f1ea592420b32eea2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc5f403f70aa559e02061bc5c6bab1f91743a74c18c4f1ea592420b32eea2d2->enter($__internal_4bc5f403f70aa559e02061bc5c6bab1f91743a74c18c4f1ea592420b32eea2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9973af73981180929945cbb84b48f1366f0394371e861ad149872715525e3a->leave($__internal_cc9973af73981180929945cbb84b48f1366f0394371e861ad149872715525e3a_prof);

        
        $__internal_4bc5f403f70aa559e02061bc5c6bab1f91743a74c18c4f1ea592420b32eea2d2->leave($__internal_4bc5f403f70aa559e02061bc5c6bab1f91743a74c18c4f1ea592420b32eea2d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e17bc659ee37ec088a9031aed1c574f30f19a9759993d721a5a8b405c5453b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e17bc659ee37ec088a9031aed1c574f30f19a9759993d721a5a8b405c5453b3->enter($__internal_2e17bc659ee37ec088a9031aed1c574f30f19a9759993d721a5a8b405c5453b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d2bc4ddd06a279e6a968d0929893d98b6dd965b823d78dc731aa8a161829aaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bc4ddd06a279e6a968d0929893d98b6dd965b823d78dc731aa8a161829aaa2->enter($__internal_d2bc4ddd06a279e6a968d0929893d98b6dd965b823d78dc731aa8a161829aaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d2bc4ddd06a279e6a968d0929893d98b6dd965b823d78dc731aa8a161829aaa2->leave($__internal_d2bc4ddd06a279e6a968d0929893d98b6dd965b823d78dc731aa8a161829aaa2_prof);

        
        $__internal_2e17bc659ee37ec088a9031aed1c574f30f19a9759993d721a5a8b405c5453b3->leave($__internal_2e17bc659ee37ec088a9031aed1c574f30f19a9759993d721a5a8b405c5453b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
