<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_4abd88a0df3a721a5b3275537190c8cdbcd7e2dca9a1be2ddba336ddb551c652 extends Twig_Template
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
        $__internal_ec0d4158d07c399e07a3eea026837cd7db4db79248a89c6579c121e848ec3f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0d4158d07c399e07a3eea026837cd7db4db79248a89c6579c121e848ec3f0e->enter($__internal_ec0d4158d07c399e07a3eea026837cd7db4db79248a89c6579c121e848ec3f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_8c070122fc48a3fe8003854800ab727324864cddbb9a190bb0d3ce0a574ffbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c070122fc48a3fe8003854800ab727324864cddbb9a190bb0d3ce0a574ffbd6->enter($__internal_8c070122fc48a3fe8003854800ab727324864cddbb9a190bb0d3ce0a574ffbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ec0d4158d07c399e07a3eea026837cd7db4db79248a89c6579c121e848ec3f0e->leave($__internal_ec0d4158d07c399e07a3eea026837cd7db4db79248a89c6579c121e848ec3f0e_prof);

        
        $__internal_8c070122fc48a3fe8003854800ab727324864cddbb9a190bb0d3ce0a574ffbd6->leave($__internal_8c070122fc48a3fe8003854800ab727324864cddbb9a190bb0d3ce0a574ffbd6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
