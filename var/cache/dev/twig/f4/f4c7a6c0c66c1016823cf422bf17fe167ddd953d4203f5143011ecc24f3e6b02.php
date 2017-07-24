<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_95beef668053696dc4eb9e06df3dc5e3c358e58b637154d9399b55d8d67fff66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_485690620ca4e8b62fbf35fcc1aa3f04ea1fa01dc524d3f00d9fe9d5ee18b287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485690620ca4e8b62fbf35fcc1aa3f04ea1fa01dc524d3f00d9fe9d5ee18b287->enter($__internal_485690620ca4e8b62fbf35fcc1aa3f04ea1fa01dc524d3f00d9fe9d5ee18b287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_7ed93de77577af6e128451aeee6e53598789a250487f008712668312fb02019b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed93de77577af6e128451aeee6e53598789a250487f008712668312fb02019b->enter($__internal_7ed93de77577af6e128451aeee6e53598789a250487f008712668312fb02019b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485690620ca4e8b62fbf35fcc1aa3f04ea1fa01dc524d3f00d9fe9d5ee18b287->leave($__internal_485690620ca4e8b62fbf35fcc1aa3f04ea1fa01dc524d3f00d9fe9d5ee18b287_prof);

        
        $__internal_7ed93de77577af6e128451aeee6e53598789a250487f008712668312fb02019b->leave($__internal_7ed93de77577af6e128451aeee6e53598789a250487f008712668312fb02019b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0669a998d9fbe29bab4016747c240dc84069dc04c08cb6f27a945a7d6159e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0669a998d9fbe29bab4016747c240dc84069dc04c08cb6f27a945a7d6159e63->enter($__internal_c0669a998d9fbe29bab4016747c240dc84069dc04c08cb6f27a945a7d6159e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_de0fe3a799e3f7b935e74bbbb2f6e05eb5391e6c3bdbb3446986bdcc84e152fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0fe3a799e3f7b935e74bbbb2f6e05eb5391e6c3bdbb3446986bdcc84e152fc->enter($__internal_de0fe3a799e3f7b935e74bbbb2f6e05eb5391e6c3bdbb3446986bdcc84e152fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_de0fe3a799e3f7b935e74bbbb2f6e05eb5391e6c3bdbb3446986bdcc84e152fc->leave($__internal_de0fe3a799e3f7b935e74bbbb2f6e05eb5391e6c3bdbb3446986bdcc84e152fc_prof);

        
        $__internal_c0669a998d9fbe29bab4016747c240dc84069dc04c08cb6f27a945a7d6159e63->leave($__internal_c0669a998d9fbe29bab4016747c240dc84069dc04c08cb6f27a945a7d6159e63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
