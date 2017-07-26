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
        $__internal_83a961a217c21355accfcb7db92140a096ed2520ab8c4050cdb004e6400e8337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a961a217c21355accfcb7db92140a096ed2520ab8c4050cdb004e6400e8337->enter($__internal_83a961a217c21355accfcb7db92140a096ed2520ab8c4050cdb004e6400e8337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_6e012e90d2593502895c8cdbca1fe39ff4a29b82c1a57bcf0f835c23a73a79e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e012e90d2593502895c8cdbca1fe39ff4a29b82c1a57bcf0f835c23a73a79e0->enter($__internal_6e012e90d2593502895c8cdbca1fe39ff4a29b82c1a57bcf0f835c23a73a79e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83a961a217c21355accfcb7db92140a096ed2520ab8c4050cdb004e6400e8337->leave($__internal_83a961a217c21355accfcb7db92140a096ed2520ab8c4050cdb004e6400e8337_prof);

        
        $__internal_6e012e90d2593502895c8cdbca1fe39ff4a29b82c1a57bcf0f835c23a73a79e0->leave($__internal_6e012e90d2593502895c8cdbca1fe39ff4a29b82c1a57bcf0f835c23a73a79e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_924c18e61cf02f72968e0097368903b1462403b23864e666b00604c3c8874c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924c18e61cf02f72968e0097368903b1462403b23864e666b00604c3c8874c86->enter($__internal_924c18e61cf02f72968e0097368903b1462403b23864e666b00604c3c8874c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9e2001d681e8483df0fd763a21aac37a5c1cbc16503e97de20e16480d740a40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2001d681e8483df0fd763a21aac37a5c1cbc16503e97de20e16480d740a40a->enter($__internal_9e2001d681e8483df0fd763a21aac37a5c1cbc16503e97de20e16480d740a40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9e2001d681e8483df0fd763a21aac37a5c1cbc16503e97de20e16480d740a40a->leave($__internal_9e2001d681e8483df0fd763a21aac37a5c1cbc16503e97de20e16480d740a40a_prof);

        
        $__internal_924c18e61cf02f72968e0097368903b1462403b23864e666b00604c3c8874c86->leave($__internal_924c18e61cf02f72968e0097368903b1462403b23864e666b00604c3c8874c86_prof);

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
