<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_639b654cd2c90d5df6c86258c8e21c265dd3dcbacebcacffbaf971478aeceee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc19400612b0b677cc8422daed5f369e899cce774bb7e3e8eac1e5d66200fab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc19400612b0b677cc8422daed5f369e899cce774bb7e3e8eac1e5d66200fab1->enter($__internal_dc19400612b0b677cc8422daed5f369e899cce774bb7e3e8eac1e5d66200fab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_bf181b8913c45aa9d8ffaf03bc0f5c24a51c7e6856c7c16c78989ec8ca8dc1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf181b8913c45aa9d8ffaf03bc0f5c24a51c7e6856c7c16c78989ec8ca8dc1e7->enter($__internal_bf181b8913c45aa9d8ffaf03bc0f5c24a51c7e6856c7c16c78989ec8ca8dc1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_dc19400612b0b677cc8422daed5f369e899cce774bb7e3e8eac1e5d66200fab1->leave($__internal_dc19400612b0b677cc8422daed5f369e899cce774bb7e3e8eac1e5d66200fab1_prof);

        
        $__internal_bf181b8913c45aa9d8ffaf03bc0f5c24a51c7e6856c7c16c78989ec8ca8dc1e7->leave($__internal_bf181b8913c45aa9d8ffaf03bc0f5c24a51c7e6856c7c16c78989ec8ca8dc1e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
