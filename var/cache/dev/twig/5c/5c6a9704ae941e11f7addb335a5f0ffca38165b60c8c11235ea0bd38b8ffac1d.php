<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_e551f91a55aa3c41c256b7b633fd3f580dc381cc9561ff2a4def691d781baaf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c081139aa5054de802d584295f9e88db26ea5c210cf7463f64c76c1b834d7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c081139aa5054de802d584295f9e88db26ea5c210cf7463f64c76c1b834d7cc->enter($__internal_0c081139aa5054de802d584295f9e88db26ea5c210cf7463f64c76c1b834d7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        $__internal_8f2373dcd4b50ca2ab519f542dd81d37b56f4e4f41d541d74c170ef37563de37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2373dcd4b50ca2ab519f542dd81d37b56f4e4f41d541d74c170ef37563de37->enter($__internal_8f2373dcd4b50ca2ab519f542dd81d37b56f4e4f41d541d74c170ef37563de37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_0c081139aa5054de802d584295f9e88db26ea5c210cf7463f64c76c1b834d7cc->leave($__internal_0c081139aa5054de802d584295f9e88db26ea5c210cf7463f64c76c1b834d7cc_prof);

        
        $__internal_8f2373dcd4b50ca2ab519f542dd81d37b56f4e4f41d541d74c170ef37563de37->leave($__internal_8f2373dcd4b50ca2ab519f542dd81d37b56f4e4f41d541d74c170ef37563de37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:ChangePassword:change_password_content.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
