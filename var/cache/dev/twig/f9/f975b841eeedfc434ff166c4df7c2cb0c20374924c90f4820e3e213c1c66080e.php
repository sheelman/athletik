<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_de2859ca3238d90e83a7291214aad0e2709ea62674f0a1942384c94ff4afdd1d extends Twig_Template
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
        $__internal_87df872ba57d15d40ed89d033792a25be864bf4d7d9be93668b5f8eb5ddae761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87df872ba57d15d40ed89d033792a25be864bf4d7d9be93668b5f8eb5ddae761->enter($__internal_87df872ba57d15d40ed89d033792a25be864bf4d7d9be93668b5f8eb5ddae761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_44844630307fb4290766b59673c72846f55a12bbff2cc9d2413fc6c93b7b2501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44844630307fb4290766b59673c72846f55a12bbff2cc9d2413fc6c93b7b2501->enter($__internal_44844630307fb4290766b59673c72846f55a12bbff2cc9d2413fc6c93b7b2501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87df872ba57d15d40ed89d033792a25be864bf4d7d9be93668b5f8eb5ddae761->leave($__internal_87df872ba57d15d40ed89d033792a25be864bf4d7d9be93668b5f8eb5ddae761_prof);

        
        $__internal_44844630307fb4290766b59673c72846f55a12bbff2cc9d2413fc6c93b7b2501->leave($__internal_44844630307fb4290766b59673c72846f55a12bbff2cc9d2413fc6c93b7b2501_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afa350c4855e6d5edf86413f9ca4fe6d0fcdf76a13ce041f36b1a75159bd203b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa350c4855e6d5edf86413f9ca4fe6d0fcdf76a13ce041f36b1a75159bd203b->enter($__internal_afa350c4855e6d5edf86413f9ca4fe6d0fcdf76a13ce041f36b1a75159bd203b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_115fe008443584811468dde13cb92647b18a931e4e7cf7a9874defa38faba1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115fe008443584811468dde13cb92647b18a931e4e7cf7a9874defa38faba1a8->enter($__internal_115fe008443584811468dde13cb92647b18a931e4e7cf7a9874defa38faba1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_115fe008443584811468dde13cb92647b18a931e4e7cf7a9874defa38faba1a8->leave($__internal_115fe008443584811468dde13cb92647b18a931e4e7cf7a9874defa38faba1a8_prof);

        
        $__internal_afa350c4855e6d5edf86413f9ca4fe6d0fcdf76a13ce041f36b1a75159bd203b->leave($__internal_afa350c4855e6d5edf86413f9ca4fe6d0fcdf76a13ce041f36b1a75159bd203b_prof);

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
", "FOSUserBundle:Group:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
