<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93118fb6bc1274613201be4cdc7253afc21076f73a2c45def85101ac51dfe1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_63b3afb7aeee4c453268d8764f1049e7c22a045fbffeaf8b58a8222fc2a20560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b3afb7aeee4c453268d8764f1049e7c22a045fbffeaf8b58a8222fc2a20560->enter($__internal_63b3afb7aeee4c453268d8764f1049e7c22a045fbffeaf8b58a8222fc2a20560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b8cf6490db6542dd00cb6167fa2d49040df882a397cbd64dd49031fcc49faaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cf6490db6542dd00cb6167fa2d49040df882a397cbd64dd49031fcc49faaa5->enter($__internal_b8cf6490db6542dd00cb6167fa2d49040df882a397cbd64dd49031fcc49faaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b3afb7aeee4c453268d8764f1049e7c22a045fbffeaf8b58a8222fc2a20560->leave($__internal_63b3afb7aeee4c453268d8764f1049e7c22a045fbffeaf8b58a8222fc2a20560_prof);

        
        $__internal_b8cf6490db6542dd00cb6167fa2d49040df882a397cbd64dd49031fcc49faaa5->leave($__internal_b8cf6490db6542dd00cb6167fa2d49040df882a397cbd64dd49031fcc49faaa5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c80f431829663c275663082be42388a398eca8275880d93ce184e9568e856dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c80f431829663c275663082be42388a398eca8275880d93ce184e9568e856dd->enter($__internal_2c80f431829663c275663082be42388a398eca8275880d93ce184e9568e856dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_47f0f6a3f9b8dbd04f0913631f6637057809d09d5a2c2c56fce881e439c7082f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f0f6a3f9b8dbd04f0913631f6637057809d09d5a2c2c56fce881e439c7082f->enter($__internal_47f0f6a3f9b8dbd04f0913631f6637057809d09d5a2c2c56fce881e439c7082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_47f0f6a3f9b8dbd04f0913631f6637057809d09d5a2c2c56fce881e439c7082f->leave($__internal_47f0f6a3f9b8dbd04f0913631f6637057809d09d5a2c2c56fce881e439c7082f_prof);

        
        $__internal_2c80f431829663c275663082be42388a398eca8275880d93ce184e9568e856dd->leave($__internal_2c80f431829663c275663082be42388a398eca8275880d93ce184e9568e856dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
