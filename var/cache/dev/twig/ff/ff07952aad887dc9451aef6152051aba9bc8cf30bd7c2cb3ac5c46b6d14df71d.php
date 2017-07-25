<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2c9ad4f1404f05ebfd2e19f1c722221f359290941177d29c1c236ec2741a614d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_12bfd1df68f606c0ee55dbfed52bd10b73e0343143ee1ec594956faa867a6ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12bfd1df68f606c0ee55dbfed52bd10b73e0343143ee1ec594956faa867a6ce2->enter($__internal_12bfd1df68f606c0ee55dbfed52bd10b73e0343143ee1ec594956faa867a6ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2c5127cd9c716e4fcf485767d89bc729e96026c4ec51398204473ede4e6e7e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5127cd9c716e4fcf485767d89bc729e96026c4ec51398204473ede4e6e7e28->enter($__internal_2c5127cd9c716e4fcf485767d89bc729e96026c4ec51398204473ede4e6e7e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12bfd1df68f606c0ee55dbfed52bd10b73e0343143ee1ec594956faa867a6ce2->leave($__internal_12bfd1df68f606c0ee55dbfed52bd10b73e0343143ee1ec594956faa867a6ce2_prof);

        
        $__internal_2c5127cd9c716e4fcf485767d89bc729e96026c4ec51398204473ede4e6e7e28->leave($__internal_2c5127cd9c716e4fcf485767d89bc729e96026c4ec51398204473ede4e6e7e28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62003331c6c1d4753d736ea43a7eb10a25cd0bc04153a1cf58eacb5769ef67a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62003331c6c1d4753d736ea43a7eb10a25cd0bc04153a1cf58eacb5769ef67a5->enter($__internal_62003331c6c1d4753d736ea43a7eb10a25cd0bc04153a1cf58eacb5769ef67a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1c54d8a3364ce6eecc8c71ff9bd08bf10e602388c3355f22cfa19ab2a03dad11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c54d8a3364ce6eecc8c71ff9bd08bf10e602388c3355f22cfa19ab2a03dad11->enter($__internal_1c54d8a3364ce6eecc8c71ff9bd08bf10e602388c3355f22cfa19ab2a03dad11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1c54d8a3364ce6eecc8c71ff9bd08bf10e602388c3355f22cfa19ab2a03dad11->leave($__internal_1c54d8a3364ce6eecc8c71ff9bd08bf10e602388c3355f22cfa19ab2a03dad11_prof);

        
        $__internal_62003331c6c1d4753d736ea43a7eb10a25cd0bc04153a1cf58eacb5769ef67a5->leave($__internal_62003331c6c1d4753d736ea43a7eb10a25cd0bc04153a1cf58eacb5769ef67a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
