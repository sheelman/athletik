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
        $__internal_d607661dbbc926ad5160b9b8c5cf75a0bce5690a653227e2f3dc094af3a66cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d607661dbbc926ad5160b9b8c5cf75a0bce5690a653227e2f3dc094af3a66cbc->enter($__internal_d607661dbbc926ad5160b9b8c5cf75a0bce5690a653227e2f3dc094af3a66cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_055ed26a6de0f412f9627ff580e0216b4ba48a288842ee91707553a247f93603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055ed26a6de0f412f9627ff580e0216b4ba48a288842ee91707553a247f93603->enter($__internal_055ed26a6de0f412f9627ff580e0216b4ba48a288842ee91707553a247f93603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d607661dbbc926ad5160b9b8c5cf75a0bce5690a653227e2f3dc094af3a66cbc->leave($__internal_d607661dbbc926ad5160b9b8c5cf75a0bce5690a653227e2f3dc094af3a66cbc_prof);

        
        $__internal_055ed26a6de0f412f9627ff580e0216b4ba48a288842ee91707553a247f93603->leave($__internal_055ed26a6de0f412f9627ff580e0216b4ba48a288842ee91707553a247f93603_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08091027b6ba00ce7f7f9b6042d4797892790940d6db523991025b5c306bb935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08091027b6ba00ce7f7f9b6042d4797892790940d6db523991025b5c306bb935->enter($__internal_08091027b6ba00ce7f7f9b6042d4797892790940d6db523991025b5c306bb935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5c8a9386aefb338d0eff4038a1c82c57e0cabac28c4c2e37829b5b5f98d4c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c8a9386aefb338d0eff4038a1c82c57e0cabac28c4c2e37829b5b5f98d4c1c->enter($__internal_b5c8a9386aefb338d0eff4038a1c82c57e0cabac28c4c2e37829b5b5f98d4c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b5c8a9386aefb338d0eff4038a1c82c57e0cabac28c4c2e37829b5b5f98d4c1c->leave($__internal_b5c8a9386aefb338d0eff4038a1c82c57e0cabac28c4c2e37829b5b5f98d4c1c_prof);

        
        $__internal_08091027b6ba00ce7f7f9b6042d4797892790940d6db523991025b5c306bb935->leave($__internal_08091027b6ba00ce7f7f9b6042d4797892790940d6db523991025b5c306bb935_prof);

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
