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
        $__internal_4ad32faef964f36eb91a4daee2ea72cfaf6bb8e1df207447bb93a5a4e9744126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad32faef964f36eb91a4daee2ea72cfaf6bb8e1df207447bb93a5a4e9744126->enter($__internal_4ad32faef964f36eb91a4daee2ea72cfaf6bb8e1df207447bb93a5a4e9744126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_1f85056728e33c153847a153838da58ff612810439960753e4709edad9ac201a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f85056728e33c153847a153838da58ff612810439960753e4709edad9ac201a->enter($__internal_1f85056728e33c153847a153838da58ff612810439960753e4709edad9ac201a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ad32faef964f36eb91a4daee2ea72cfaf6bb8e1df207447bb93a5a4e9744126->leave($__internal_4ad32faef964f36eb91a4daee2ea72cfaf6bb8e1df207447bb93a5a4e9744126_prof);

        
        $__internal_1f85056728e33c153847a153838da58ff612810439960753e4709edad9ac201a->leave($__internal_1f85056728e33c153847a153838da58ff612810439960753e4709edad9ac201a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_530bba04323c521ca1ae10c5acb4c666eac6f525bf3aeb1df56ff345bc90e4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530bba04323c521ca1ae10c5acb4c666eac6f525bf3aeb1df56ff345bc90e4f3->enter($__internal_530bba04323c521ca1ae10c5acb4c666eac6f525bf3aeb1df56ff345bc90e4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_60cb22e07a5f722f7c3b7f8bd0473ae609a28294b29194829a05625944b46eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60cb22e07a5f722f7c3b7f8bd0473ae609a28294b29194829a05625944b46eea->enter($__internal_60cb22e07a5f722f7c3b7f8bd0473ae609a28294b29194829a05625944b46eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_60cb22e07a5f722f7c3b7f8bd0473ae609a28294b29194829a05625944b46eea->leave($__internal_60cb22e07a5f722f7c3b7f8bd0473ae609a28294b29194829a05625944b46eea_prof);

        
        $__internal_530bba04323c521ca1ae10c5acb4c666eac6f525bf3aeb1df56ff345bc90e4f3->leave($__internal_530bba04323c521ca1ae10c5acb4c666eac6f525bf3aeb1df56ff345bc90e4f3_prof);

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
