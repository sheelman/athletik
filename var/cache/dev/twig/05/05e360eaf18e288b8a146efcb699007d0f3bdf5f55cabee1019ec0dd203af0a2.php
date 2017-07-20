<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3872dffc0bfe618c808113930c121471818fcce7e64fd36132ea70ca6452d97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3872dffc0bfe618c808113930c121471818fcce7e64fd36132ea70ca6452d97f->enter($__internal_3872dffc0bfe618c808113930c121471818fcce7e64fd36132ea70ca6452d97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e23b5fc5aa6112614986fd1d4771f83fa4d292a7dace18433097cf9d2abbc805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23b5fc5aa6112614986fd1d4771f83fa4d292a7dace18433097cf9d2abbc805->enter($__internal_e23b5fc5aa6112614986fd1d4771f83fa4d292a7dace18433097cf9d2abbc805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3872dffc0bfe618c808113930c121471818fcce7e64fd36132ea70ca6452d97f->leave($__internal_3872dffc0bfe618c808113930c121471818fcce7e64fd36132ea70ca6452d97f_prof);

        
        $__internal_e23b5fc5aa6112614986fd1d4771f83fa4d292a7dace18433097cf9d2abbc805->leave($__internal_e23b5fc5aa6112614986fd1d4771f83fa4d292a7dace18433097cf9d2abbc805_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32f7a386834c930d7bc3e2433e45a0ef44a3eec1b615c59d6d548f93e150bb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f7a386834c930d7bc3e2433e45a0ef44a3eec1b615c59d6d548f93e150bb8a->enter($__internal_32f7a386834c930d7bc3e2433e45a0ef44a3eec1b615c59d6d548f93e150bb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_25a986fba33c6577397369447368b828a6ddbf8b87d8fc2fec28c9ff93bcf7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a986fba33c6577397369447368b828a6ddbf8b87d8fc2fec28c9ff93bcf7d5->enter($__internal_25a986fba33c6577397369447368b828a6ddbf8b87d8fc2fec28c9ff93bcf7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_25a986fba33c6577397369447368b828a6ddbf8b87d8fc2fec28c9ff93bcf7d5->leave($__internal_25a986fba33c6577397369447368b828a6ddbf8b87d8fc2fec28c9ff93bcf7d5_prof);

        
        $__internal_32f7a386834c930d7bc3e2433e45a0ef44a3eec1b615c59d6d548f93e150bb8a->leave($__internal_32f7a386834c930d7bc3e2433e45a0ef44a3eec1b615c59d6d548f93e150bb8a_prof);

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
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
