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
        $__internal_05e1ed88c92ccbf4e222a33fb60eeed7e0e023fa75e55b07109e1ef0c2315f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e1ed88c92ccbf4e222a33fb60eeed7e0e023fa75e55b07109e1ef0c2315f22->enter($__internal_05e1ed88c92ccbf4e222a33fb60eeed7e0e023fa75e55b07109e1ef0c2315f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_2dc1ce2dd55af0843b8bf73d31b2177a8f30c0ef8c188d9288a53687c32b3298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc1ce2dd55af0843b8bf73d31b2177a8f30c0ef8c188d9288a53687c32b3298->enter($__internal_2dc1ce2dd55af0843b8bf73d31b2177a8f30c0ef8c188d9288a53687c32b3298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_05e1ed88c92ccbf4e222a33fb60eeed7e0e023fa75e55b07109e1ef0c2315f22->leave($__internal_05e1ed88c92ccbf4e222a33fb60eeed7e0e023fa75e55b07109e1ef0c2315f22_prof);

        
        $__internal_2dc1ce2dd55af0843b8bf73d31b2177a8f30c0ef8c188d9288a53687c32b3298->leave($__internal_2dc1ce2dd55af0843b8bf73d31b2177a8f30c0ef8c188d9288a53687c32b3298_prof);

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
