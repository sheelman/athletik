<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d70a35718538c32d29e2105804caea61ef0d77b181754e9a243a00939c28df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d70a35718538c32d29e2105804caea61ef0d77b181754e9a243a00939c28df7->enter($__internal_3d70a35718538c32d29e2105804caea61ef0d77b181754e9a243a00939c28df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a8114d27cbe0724c11e735916bd24ffeb2ca40fb8b4509e7b99e47bca4bd9019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8114d27cbe0724c11e735916bd24ffeb2ca40fb8b4509e7b99e47bca4bd9019->enter($__internal_a8114d27cbe0724c11e735916bd24ffeb2ca40fb8b4509e7b99e47bca4bd9019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d70a35718538c32d29e2105804caea61ef0d77b181754e9a243a00939c28df7->leave($__internal_3d70a35718538c32d29e2105804caea61ef0d77b181754e9a243a00939c28df7_prof);

        
        $__internal_a8114d27cbe0724c11e735916bd24ffeb2ca40fb8b4509e7b99e47bca4bd9019->leave($__internal_a8114d27cbe0724c11e735916bd24ffeb2ca40fb8b4509e7b99e47bca4bd9019_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9383c379839ad02156fc2aeed09f3540cbddae736c66ba05cc5fabf30a919e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9383c379839ad02156fc2aeed09f3540cbddae736c66ba05cc5fabf30a919e0->enter($__internal_f9383c379839ad02156fc2aeed09f3540cbddae736c66ba05cc5fabf30a919e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b58e4282b0a6e97940ea925beb0b93035647237bc794cfebaed442223f91d3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58e4282b0a6e97940ea925beb0b93035647237bc794cfebaed442223f91d3dd->enter($__internal_b58e4282b0a6e97940ea925beb0b93035647237bc794cfebaed442223f91d3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b58e4282b0a6e97940ea925beb0b93035647237bc794cfebaed442223f91d3dd->leave($__internal_b58e4282b0a6e97940ea925beb0b93035647237bc794cfebaed442223f91d3dd_prof);

        
        $__internal_f9383c379839ad02156fc2aeed09f3540cbddae736c66ba05cc5fabf30a919e0->leave($__internal_f9383c379839ad02156fc2aeed09f3540cbddae736c66ba05cc5fabf30a919e0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fb58ddc275423e5c66d7d26751947360561d1051e4870c79e20c26eb8edca5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb58ddc275423e5c66d7d26751947360561d1051e4870c79e20c26eb8edca5f->enter($__internal_7fb58ddc275423e5c66d7d26751947360561d1051e4870c79e20c26eb8edca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5c92b92dc3c0823e7db75ff467b1990c570f1b6088bff7010e9fdef3cea07ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c92b92dc3c0823e7db75ff467b1990c570f1b6088bff7010e9fdef3cea07ed->enter($__internal_f5c92b92dc3c0823e7db75ff467b1990c570f1b6088bff7010e9fdef3cea07ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5c92b92dc3c0823e7db75ff467b1990c570f1b6088bff7010e9fdef3cea07ed->leave($__internal_f5c92b92dc3c0823e7db75ff467b1990c570f1b6088bff7010e9fdef3cea07ed_prof);

        
        $__internal_7fb58ddc275423e5c66d7d26751947360561d1051e4870c79e20c26eb8edca5f->leave($__internal_7fb58ddc275423e5c66d7d26751947360561d1051e4870c79e20c26eb8edca5f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_557e5d1690a682268b843c6602503352435cccd67ea9d07e1ebb205ff2bf2eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557e5d1690a682268b843c6602503352435cccd67ea9d07e1ebb205ff2bf2eb6->enter($__internal_557e5d1690a682268b843c6602503352435cccd67ea9d07e1ebb205ff2bf2eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98f50f3c54bf326a7ddc441800d814726551e555d64915556445467b8b58dd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f50f3c54bf326a7ddc441800d814726551e555d64915556445467b8b58dd0f->enter($__internal_98f50f3c54bf326a7ddc441800d814726551e555d64915556445467b8b58dd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_98f50f3c54bf326a7ddc441800d814726551e555d64915556445467b8b58dd0f->leave($__internal_98f50f3c54bf326a7ddc441800d814726551e555d64915556445467b8b58dd0f_prof);

        
        $__internal_557e5d1690a682268b843c6602503352435cccd67ea9d07e1ebb205ff2bf2eb6->leave($__internal_557e5d1690a682268b843c6602503352435cccd67ea9d07e1ebb205ff2bf2eb6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
