<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8dc97cf982de83ce712e19fd38c1cd014de31b89068b9fd68a467092345ec68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_26f1fbd9ed74c9a59bdff3921259acafe60858f062c860687ac035718b1d8061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f1fbd9ed74c9a59bdff3921259acafe60858f062c860687ac035718b1d8061->enter($__internal_26f1fbd9ed74c9a59bdff3921259acafe60858f062c860687ac035718b1d8061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_7cfda7fbf04f31ab7f8e456d58944dc729954d2c2a4412f073589c583f904e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfda7fbf04f31ab7f8e456d58944dc729954d2c2a4412f073589c583f904e91->enter($__internal_7cfda7fbf04f31ab7f8e456d58944dc729954d2c2a4412f073589c583f904e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f1fbd9ed74c9a59bdff3921259acafe60858f062c860687ac035718b1d8061->leave($__internal_26f1fbd9ed74c9a59bdff3921259acafe60858f062c860687ac035718b1d8061_prof);

        
        $__internal_7cfda7fbf04f31ab7f8e456d58944dc729954d2c2a4412f073589c583f904e91->leave($__internal_7cfda7fbf04f31ab7f8e456d58944dc729954d2c2a4412f073589c583f904e91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9dafe25403f39d0a60f862f7fffa4f61d69171caed7654c2329be32ac479bc00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dafe25403f39d0a60f862f7fffa4f61d69171caed7654c2329be32ac479bc00->enter($__internal_9dafe25403f39d0a60f862f7fffa4f61d69171caed7654c2329be32ac479bc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f9e79c9a70134380b3be652a166d502e13453c348beb00feb5cd891c316f645c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e79c9a70134380b3be652a166d502e13453c348beb00feb5cd891c316f645c->enter($__internal_f9e79c9a70134380b3be652a166d502e13453c348beb00feb5cd891c316f645c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f9e79c9a70134380b3be652a166d502e13453c348beb00feb5cd891c316f645c->leave($__internal_f9e79c9a70134380b3be652a166d502e13453c348beb00feb5cd891c316f645c_prof);

        
        $__internal_9dafe25403f39d0a60f862f7fffa4f61d69171caed7654c2329be32ac479bc00->leave($__internal_9dafe25403f39d0a60f862f7fffa4f61d69171caed7654c2329be32ac479bc00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
