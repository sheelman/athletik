<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3279dbcdca5c0aeeab86c3495066d40ec56322e772c432abca5b353e54e515c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7b1c730e8447ccf69f3c4f722aa76714507df85abc663a1c19367502eab9ccc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1c730e8447ccf69f3c4f722aa76714507df85abc663a1c19367502eab9ccc3->enter($__internal_7b1c730e8447ccf69f3c4f722aa76714507df85abc663a1c19367502eab9ccc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_9e019ef5ee3fa0d3502d0700b1ab0c86f5bdda91f2e589d37e7c3206ccaa7b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e019ef5ee3fa0d3502d0700b1ab0c86f5bdda91f2e589d37e7c3206ccaa7b7d->enter($__internal_9e019ef5ee3fa0d3502d0700b1ab0c86f5bdda91f2e589d37e7c3206ccaa7b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b1c730e8447ccf69f3c4f722aa76714507df85abc663a1c19367502eab9ccc3->leave($__internal_7b1c730e8447ccf69f3c4f722aa76714507df85abc663a1c19367502eab9ccc3_prof);

        
        $__internal_9e019ef5ee3fa0d3502d0700b1ab0c86f5bdda91f2e589d37e7c3206ccaa7b7d->leave($__internal_9e019ef5ee3fa0d3502d0700b1ab0c86f5bdda91f2e589d37e7c3206ccaa7b7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1d19a087aed39308d3d24b7115ac2840e7978de10297f1dd46b617738a3b6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d19a087aed39308d3d24b7115ac2840e7978de10297f1dd46b617738a3b6c9->enter($__internal_d1d19a087aed39308d3d24b7115ac2840e7978de10297f1dd46b617738a3b6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74584e71c46351adfdec012085fba31184b3bc64e45a98136f7255c95119b8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74584e71c46351adfdec012085fba31184b3bc64e45a98136f7255c95119b8b6->enter($__internal_74584e71c46351adfdec012085fba31184b3bc64e45a98136f7255c95119b8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_74584e71c46351adfdec012085fba31184b3bc64e45a98136f7255c95119b8b6->leave($__internal_74584e71c46351adfdec012085fba31184b3bc64e45a98136f7255c95119b8b6_prof);

        
        $__internal_d1d19a087aed39308d3d24b7115ac2840e7978de10297f1dd46b617738a3b6c9->leave($__internal_d1d19a087aed39308d3d24b7115ac2840e7978de10297f1dd46b617738a3b6c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
