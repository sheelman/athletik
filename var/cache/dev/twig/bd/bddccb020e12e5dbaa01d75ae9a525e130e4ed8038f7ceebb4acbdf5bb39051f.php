<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_54b1259122c69ede986df7564b8026494ba7bc3d95a7d83da698cad08d9956d7 extends Twig_Template
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
        $__internal_80380466a67386920f1a1b4437fcd84ddd1f7aa74028c2bdac4a0b4bd8ead40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80380466a67386920f1a1b4437fcd84ddd1f7aa74028c2bdac4a0b4bd8ead40a->enter($__internal_80380466a67386920f1a1b4437fcd84ddd1f7aa74028c2bdac4a0b4bd8ead40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_22a5c522dcf624c1148abec03e054d1f6c1f4b28d2c2a0dab62c0c4c69b1c535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a5c522dcf624c1148abec03e054d1f6c1f4b28d2c2a0dab62c0c4c69b1c535->enter($__internal_22a5c522dcf624c1148abec03e054d1f6c1f4b28d2c2a0dab62c0c4c69b1c535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_80380466a67386920f1a1b4437fcd84ddd1f7aa74028c2bdac4a0b4bd8ead40a->leave($__internal_80380466a67386920f1a1b4437fcd84ddd1f7aa74028c2bdac4a0b4bd8ead40a_prof);

        
        $__internal_22a5c522dcf624c1148abec03e054d1f6c1f4b28d2c2a0dab62c0c4c69b1c535->leave($__internal_22a5c522dcf624c1148abec03e054d1f6c1f4b28d2c2a0dab62c0c4c69b1c535_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
", "FOSUserBundle:Registration:register_content.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
