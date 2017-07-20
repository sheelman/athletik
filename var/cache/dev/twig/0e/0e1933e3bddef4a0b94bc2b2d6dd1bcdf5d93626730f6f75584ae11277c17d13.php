<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2c39c4421820dc1e8347a29f7666d686f01fcece53858328f2335e0ee7423cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_10a09e2f523e43ff0b58f5ea73f6df63f1b4214df171c28ac126aaf58a7c4e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a09e2f523e43ff0b58f5ea73f6df63f1b4214df171c28ac126aaf58a7c4e17->enter($__internal_10a09e2f523e43ff0b58f5ea73f6df63f1b4214df171c28ac126aaf58a7c4e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_dfc69f1b5ba9f812e1ad859d613e49565bbe1ef48bb74bb800e8bf772346ea48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc69f1b5ba9f812e1ad859d613e49565bbe1ef48bb74bb800e8bf772346ea48->enter($__internal_dfc69f1b5ba9f812e1ad859d613e49565bbe1ef48bb74bb800e8bf772346ea48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a09e2f523e43ff0b58f5ea73f6df63f1b4214df171c28ac126aaf58a7c4e17->leave($__internal_10a09e2f523e43ff0b58f5ea73f6df63f1b4214df171c28ac126aaf58a7c4e17_prof);

        
        $__internal_dfc69f1b5ba9f812e1ad859d613e49565bbe1ef48bb74bb800e8bf772346ea48->leave($__internal_dfc69f1b5ba9f812e1ad859d613e49565bbe1ef48bb74bb800e8bf772346ea48_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0cdcdbcd8d8b51ebd3995344759820da572bf21a0794f116c4b7396be6eb157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cdcdbcd8d8b51ebd3995344759820da572bf21a0794f116c4b7396be6eb157->enter($__internal_d0cdcdbcd8d8b51ebd3995344759820da572bf21a0794f116c4b7396be6eb157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9d69b311082e0318c6755001845a8b187ef989562a97dfa9eb8343b88252c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d69b311082e0318c6755001845a8b187ef989562a97dfa9eb8343b88252c7a->enter($__internal_d9d69b311082e0318c6755001845a8b187ef989562a97dfa9eb8343b88252c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d9d69b311082e0318c6755001845a8b187ef989562a97dfa9eb8343b88252c7a->leave($__internal_d9d69b311082e0318c6755001845a8b187ef989562a97dfa9eb8343b88252c7a_prof);

        
        $__internal_d0cdcdbcd8d8b51ebd3995344759820da572bf21a0794f116c4b7396be6eb157->leave($__internal_d0cdcdbcd8d8b51ebd3995344759820da572bf21a0794f116c4b7396be6eb157_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
