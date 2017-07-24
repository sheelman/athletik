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
        $__internal_48d0d48b3f7dc70c069d5f735e549f39c24f9ee0683cbbb6263f575a81b5e87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d0d48b3f7dc70c069d5f735e549f39c24f9ee0683cbbb6263f575a81b5e87b->enter($__internal_48d0d48b3f7dc70c069d5f735e549f39c24f9ee0683cbbb6263f575a81b5e87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_629c67c053f62fa44094d0b850a254f34127b41ec8a42c1b17ecf050b2f35c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629c67c053f62fa44094d0b850a254f34127b41ec8a42c1b17ecf050b2f35c15->enter($__internal_629c67c053f62fa44094d0b850a254f34127b41ec8a42c1b17ecf050b2f35c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d0d48b3f7dc70c069d5f735e549f39c24f9ee0683cbbb6263f575a81b5e87b->leave($__internal_48d0d48b3f7dc70c069d5f735e549f39c24f9ee0683cbbb6263f575a81b5e87b_prof);

        
        $__internal_629c67c053f62fa44094d0b850a254f34127b41ec8a42c1b17ecf050b2f35c15->leave($__internal_629c67c053f62fa44094d0b850a254f34127b41ec8a42c1b17ecf050b2f35c15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b0fa0d6a76693e1110e65d2ea7f9b6b283ff342c4e1ba974a363d52ef61c2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0fa0d6a76693e1110e65d2ea7f9b6b283ff342c4e1ba974a363d52ef61c2f1->enter($__internal_3b0fa0d6a76693e1110e65d2ea7f9b6b283ff342c4e1ba974a363d52ef61c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_da2bf016edafa344260890e2a837b87fe4c2a5171f7f26e5121ba65b820a7f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2bf016edafa344260890e2a837b87fe4c2a5171f7f26e5121ba65b820a7f75->enter($__internal_da2bf016edafa344260890e2a837b87fe4c2a5171f7f26e5121ba65b820a7f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_da2bf016edafa344260890e2a837b87fe4c2a5171f7f26e5121ba65b820a7f75->leave($__internal_da2bf016edafa344260890e2a837b87fe4c2a5171f7f26e5121ba65b820a7f75_prof);

        
        $__internal_3b0fa0d6a76693e1110e65d2ea7f9b6b283ff342c4e1ba974a363d52ef61c2f1->leave($__internal_3b0fa0d6a76693e1110e65d2ea7f9b6b283ff342c4e1ba974a363d52ef61c2f1_prof);

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
