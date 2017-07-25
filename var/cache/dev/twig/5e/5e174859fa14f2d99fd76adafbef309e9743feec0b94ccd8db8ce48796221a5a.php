<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_863c058603bdf8a418e4cd1efd558ca8ce74d3bba84bfaaf2cb63a287c931fc5 extends Twig_Template
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
        $__internal_6df09067a77ef235a595bd85d073c0c8c068a8c92390e1d2c2431bd21610690f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df09067a77ef235a595bd85d073c0c8c068a8c92390e1d2c2431bd21610690f->enter($__internal_6df09067a77ef235a595bd85d073c0c8c068a8c92390e1d2c2431bd21610690f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_98b268823aa82e3d898c8ad23ba600a8ccf671ee564afdbe7b06df5f4965787d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b268823aa82e3d898c8ad23ba600a8ccf671ee564afdbe7b06df5f4965787d->enter($__internal_98b268823aa82e3d898c8ad23ba600a8ccf671ee564afdbe7b06df5f4965787d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6df09067a77ef235a595bd85d073c0c8c068a8c92390e1d2c2431bd21610690f->leave($__internal_6df09067a77ef235a595bd85d073c0c8c068a8c92390e1d2c2431bd21610690f_prof);

        
        $__internal_98b268823aa82e3d898c8ad23ba600a8ccf671ee564afdbe7b06df5f4965787d->leave($__internal_98b268823aa82e3d898c8ad23ba600a8ccf671ee564afdbe7b06df5f4965787d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
