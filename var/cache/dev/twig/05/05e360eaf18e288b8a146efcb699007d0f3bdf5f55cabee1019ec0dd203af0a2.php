<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_c48d8a01f7afc98a3d19c5aab4fc76deb1d88adf40fd827c8578b1746e4613b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48d8a01f7afc98a3d19c5aab4fc76deb1d88adf40fd827c8578b1746e4613b5->enter($__internal_c48d8a01f7afc98a3d19c5aab4fc76deb1d88adf40fd827c8578b1746e4613b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_78e2d953eec3c55174ccb46c0c45f985515bff68e68785692d2446b78969bb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e2d953eec3c55174ccb46c0c45f985515bff68e68785692d2446b78969bb8e->enter($__internal_78e2d953eec3c55174ccb46c0c45f985515bff68e68785692d2446b78969bb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c48d8a01f7afc98a3d19c5aab4fc76deb1d88adf40fd827c8578b1746e4613b5->leave($__internal_c48d8a01f7afc98a3d19c5aab4fc76deb1d88adf40fd827c8578b1746e4613b5_prof);

        
        $__internal_78e2d953eec3c55174ccb46c0c45f985515bff68e68785692d2446b78969bb8e->leave($__internal_78e2d953eec3c55174ccb46c0c45f985515bff68e68785692d2446b78969bb8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c69cd3c4bd2a02b7319e5eb3c127ce766444dfdcbbd1cb556da1f26b12feb793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69cd3c4bd2a02b7319e5eb3c127ce766444dfdcbbd1cb556da1f26b12feb793->enter($__internal_c69cd3c4bd2a02b7319e5eb3c127ce766444dfdcbbd1cb556da1f26b12feb793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c77840d47f1a1fddd49d5395271ae7552aad8904a3310721e51b216b50f9a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c77840d47f1a1fddd49d5395271ae7552aad8904a3310721e51b216b50f9a0f->enter($__internal_4c77840d47f1a1fddd49d5395271ae7552aad8904a3310721e51b216b50f9a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4c77840d47f1a1fddd49d5395271ae7552aad8904a3310721e51b216b50f9a0f->leave($__internal_4c77840d47f1a1fddd49d5395271ae7552aad8904a3310721e51b216b50f9a0f_prof);

        
        $__internal_c69cd3c4bd2a02b7319e5eb3c127ce766444dfdcbbd1cb556da1f26b12feb793->leave($__internal_c69cd3c4bd2a02b7319e5eb3c127ce766444dfdcbbd1cb556da1f26b12feb793_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
