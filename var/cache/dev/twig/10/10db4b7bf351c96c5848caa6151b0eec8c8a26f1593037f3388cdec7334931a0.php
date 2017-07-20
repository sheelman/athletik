<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6aa446cde41cde11ff5092531df3011be8d16691769cede303ce4a1518a5be3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa446cde41cde11ff5092531df3011be8d16691769cede303ce4a1518a5be3a->enter($__internal_6aa446cde41cde11ff5092531df3011be8d16691769cede303ce4a1518a5be3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_8b4723c87428172f6ae68150d3064be85ffda85acd008c93a8e7bd140735412e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4723c87428172f6ae68150d3064be85ffda85acd008c93a8e7bd140735412e->enter($__internal_8b4723c87428172f6ae68150d3064be85ffda85acd008c93a8e7bd140735412e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aa446cde41cde11ff5092531df3011be8d16691769cede303ce4a1518a5be3a->leave($__internal_6aa446cde41cde11ff5092531df3011be8d16691769cede303ce4a1518a5be3a_prof);

        
        $__internal_8b4723c87428172f6ae68150d3064be85ffda85acd008c93a8e7bd140735412e->leave($__internal_8b4723c87428172f6ae68150d3064be85ffda85acd008c93a8e7bd140735412e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2eebcafaa69689294ab97291800ce849cdbc40a49e44e99b1dc31fba3502e0aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eebcafaa69689294ab97291800ce849cdbc40a49e44e99b1dc31fba3502e0aa->enter($__internal_2eebcafaa69689294ab97291800ce849cdbc40a49e44e99b1dc31fba3502e0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0593abcc522c92f14f6c908dccf8e978b36df5b1d6c52e0e0065f7378f589629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0593abcc522c92f14f6c908dccf8e978b36df5b1d6c52e0e0065f7378f589629->enter($__internal_0593abcc522c92f14f6c908dccf8e978b36df5b1d6c52e0e0065f7378f589629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0593abcc522c92f14f6c908dccf8e978b36df5b1d6c52e0e0065f7378f589629->leave($__internal_0593abcc522c92f14f6c908dccf8e978b36df5b1d6c52e0e0065f7378f589629_prof);

        
        $__internal_2eebcafaa69689294ab97291800ce849cdbc40a49e44e99b1dc31fba3502e0aa->leave($__internal_2eebcafaa69689294ab97291800ce849cdbc40a49e44e99b1dc31fba3502e0aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
