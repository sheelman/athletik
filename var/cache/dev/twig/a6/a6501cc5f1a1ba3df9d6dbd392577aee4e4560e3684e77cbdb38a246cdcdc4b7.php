<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e956ffa00a4d4e43ca666274a70e1663a40ea87bc391df2b915829aad1e97516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05e1cd11f4832bfb1448a8e21c6f6fbe4f24bcf2a0f3546ac7404301683e7daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e1cd11f4832bfb1448a8e21c6f6fbe4f24bcf2a0f3546ac7404301683e7daa->enter($__internal_05e1cd11f4832bfb1448a8e21c6f6fbe4f24bcf2a0f3546ac7404301683e7daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_cf2b1eaa1ff4ce07d7e57de97ec19857a35186d548db1e5a02ca793df0de41e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2b1eaa1ff4ce07d7e57de97ec19857a35186d548db1e5a02ca793df0de41e7->enter($__internal_cf2b1eaa1ff4ce07d7e57de97ec19857a35186d548db1e5a02ca793df0de41e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_05e1cd11f4832bfb1448a8e21c6f6fbe4f24bcf2a0f3546ac7404301683e7daa->leave($__internal_05e1cd11f4832bfb1448a8e21c6f6fbe4f24bcf2a0f3546ac7404301683e7daa_prof);

        
        $__internal_cf2b1eaa1ff4ce07d7e57de97ec19857a35186d548db1e5a02ca793df0de41e7->leave($__internal_cf2b1eaa1ff4ce07d7e57de97ec19857a35186d548db1e5a02ca793df0de41e7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_49cb82048eaa45c3dade960260a5ef44f423288d4fea12d605dcaba2114b61a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cb82048eaa45c3dade960260a5ef44f423288d4fea12d605dcaba2114b61a4->enter($__internal_49cb82048eaa45c3dade960260a5ef44f423288d4fea12d605dcaba2114b61a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0acc91009375e2f1982abbf6a232038b5ffdb9a154ca56412f844fb5036496cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acc91009375e2f1982abbf6a232038b5ffdb9a154ca56412f844fb5036496cc->enter($__internal_0acc91009375e2f1982abbf6a232038b5ffdb9a154ca56412f844fb5036496cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0acc91009375e2f1982abbf6a232038b5ffdb9a154ca56412f844fb5036496cc->leave($__internal_0acc91009375e2f1982abbf6a232038b5ffdb9a154ca56412f844fb5036496cc_prof);

        
        $__internal_49cb82048eaa45c3dade960260a5ef44f423288d4fea12d605dcaba2114b61a4->leave($__internal_49cb82048eaa45c3dade960260a5ef44f423288d4fea12d605dcaba2114b61a4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_861ffe50862e4dd91dd38096a51c0bcf53d87684c37dbe6c73d831cd1e0061aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861ffe50862e4dd91dd38096a51c0bcf53d87684c37dbe6c73d831cd1e0061aa->enter($__internal_861ffe50862e4dd91dd38096a51c0bcf53d87684c37dbe6c73d831cd1e0061aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4eb5d12b79db368265dcb5b152f958b75eab54796c4d8f874366e2807ee2d1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb5d12b79db368265dcb5b152f958b75eab54796c4d8f874366e2807ee2d1e8->enter($__internal_4eb5d12b79db368265dcb5b152f958b75eab54796c4d8f874366e2807ee2d1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4eb5d12b79db368265dcb5b152f958b75eab54796c4d8f874366e2807ee2d1e8->leave($__internal_4eb5d12b79db368265dcb5b152f958b75eab54796c4d8f874366e2807ee2d1e8_prof);

        
        $__internal_861ffe50862e4dd91dd38096a51c0bcf53d87684c37dbe6c73d831cd1e0061aa->leave($__internal_861ffe50862e4dd91dd38096a51c0bcf53d87684c37dbe6c73d831cd1e0061aa_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2b697d500b6b1ae98ce7bf84e6cbe40aeb7f242223e6502b6bf1e3c08bc3e585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b697d500b6b1ae98ce7bf84e6cbe40aeb7f242223e6502b6bf1e3c08bc3e585->enter($__internal_2b697d500b6b1ae98ce7bf84e6cbe40aeb7f242223e6502b6bf1e3c08bc3e585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5941247e3a608d804010c44ff24963116237119b47e6a57fc2ed2cd6cdd85322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5941247e3a608d804010c44ff24963116237119b47e6a57fc2ed2cd6cdd85322->enter($__internal_5941247e3a608d804010c44ff24963116237119b47e6a57fc2ed2cd6cdd85322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5941247e3a608d804010c44ff24963116237119b47e6a57fc2ed2cd6cdd85322->leave($__internal_5941247e3a608d804010c44ff24963116237119b47e6a57fc2ed2cd6cdd85322_prof);

        
        $__internal_2b697d500b6b1ae98ce7bf84e6cbe40aeb7f242223e6502b6bf1e3c08bc3e585->leave($__internal_2b697d500b6b1ae98ce7bf84e6cbe40aeb7f242223e6502b6bf1e3c08bc3e585_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
