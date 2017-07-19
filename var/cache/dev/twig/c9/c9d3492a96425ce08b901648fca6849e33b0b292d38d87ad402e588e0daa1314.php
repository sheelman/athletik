<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d599e78673aafc722f9d52a3cf6838097ef8d784a9466cf99558947bb9d65088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_a6328dc83ad59b7f018cef96783e60cf98e5117b7035e4c82fe4abfe4c21b278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6328dc83ad59b7f018cef96783e60cf98e5117b7035e4c82fe4abfe4c21b278->enter($__internal_a6328dc83ad59b7f018cef96783e60cf98e5117b7035e4c82fe4abfe4c21b278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_556a6b313126af9451f07f192de92e7803f2a5c026f03490ad5b8bd0984b24ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556a6b313126af9451f07f192de92e7803f2a5c026f03490ad5b8bd0984b24ee->enter($__internal_556a6b313126af9451f07f192de92e7803f2a5c026f03490ad5b8bd0984b24ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6328dc83ad59b7f018cef96783e60cf98e5117b7035e4c82fe4abfe4c21b278->leave($__internal_a6328dc83ad59b7f018cef96783e60cf98e5117b7035e4c82fe4abfe4c21b278_prof);

        
        $__internal_556a6b313126af9451f07f192de92e7803f2a5c026f03490ad5b8bd0984b24ee->leave($__internal_556a6b313126af9451f07f192de92e7803f2a5c026f03490ad5b8bd0984b24ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9af7e25d2b201c7aa1c6fdf5391a4c7ca2072304b5573d97a6c264c93381297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9af7e25d2b201c7aa1c6fdf5391a4c7ca2072304b5573d97a6c264c93381297->enter($__internal_a9af7e25d2b201c7aa1c6fdf5391a4c7ca2072304b5573d97a6c264c93381297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e978a2952abf6e69a808a3e603d9ecb6d61098475c253d7b1e7831eb070e6547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e978a2952abf6e69a808a3e603d9ecb6d61098475c253d7b1e7831eb070e6547->enter($__internal_e978a2952abf6e69a808a3e603d9ecb6d61098475c253d7b1e7831eb070e6547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e978a2952abf6e69a808a3e603d9ecb6d61098475c253d7b1e7831eb070e6547->leave($__internal_e978a2952abf6e69a808a3e603d9ecb6d61098475c253d7b1e7831eb070e6547_prof);

        
        $__internal_a9af7e25d2b201c7aa1c6fdf5391a4c7ca2072304b5573d97a6c264c93381297->leave($__internal_a9af7e25d2b201c7aa1c6fdf5391a4c7ca2072304b5573d97a6c264c93381297_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
