<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3b82c32df29cb8437f0bec2cd0de737ae8339e8af7d21a8f808365f7f195251c extends Twig_Template
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
        $__internal_326a74d3fa12c128121be89e62a1e573dda99a7f3c2b21ceb1162f18c3408270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326a74d3fa12c128121be89e62a1e573dda99a7f3c2b21ceb1162f18c3408270->enter($__internal_326a74d3fa12c128121be89e62a1e573dda99a7f3c2b21ceb1162f18c3408270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_3169e8ad582c967df484ec2d888f57b06c22dc1a49382e5675d0eb9844a5cfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3169e8ad582c967df484ec2d888f57b06c22dc1a49382e5675d0eb9844a5cfcd->enter($__internal_3169e8ad582c967df484ec2d888f57b06c22dc1a49382e5675d0eb9844a5cfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326a74d3fa12c128121be89e62a1e573dda99a7f3c2b21ceb1162f18c3408270->leave($__internal_326a74d3fa12c128121be89e62a1e573dda99a7f3c2b21ceb1162f18c3408270_prof);

        
        $__internal_3169e8ad582c967df484ec2d888f57b06c22dc1a49382e5675d0eb9844a5cfcd->leave($__internal_3169e8ad582c967df484ec2d888f57b06c22dc1a49382e5675d0eb9844a5cfcd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_621f5d981404781c50645adedca4eb2f25c70669ed1ebdc5c243d073019c902c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621f5d981404781c50645adedca4eb2f25c70669ed1ebdc5c243d073019c902c->enter($__internal_621f5d981404781c50645adedca4eb2f25c70669ed1ebdc5c243d073019c902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cd05a66bf597ebc08583aab68eae498cabf5a5396f72b88783f03f1103e62d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd05a66bf597ebc08583aab68eae498cabf5a5396f72b88783f03f1103e62d07->enter($__internal_cd05a66bf597ebc08583aab68eae498cabf5a5396f72b88783f03f1103e62d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_cd05a66bf597ebc08583aab68eae498cabf5a5396f72b88783f03f1103e62d07->leave($__internal_cd05a66bf597ebc08583aab68eae498cabf5a5396f72b88783f03f1103e62d07_prof);

        
        $__internal_621f5d981404781c50645adedca4eb2f25c70669ed1ebdc5c243d073019c902c->leave($__internal_621f5d981404781c50645adedca4eb2f25c70669ed1ebdc5c243d073019c902c_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
