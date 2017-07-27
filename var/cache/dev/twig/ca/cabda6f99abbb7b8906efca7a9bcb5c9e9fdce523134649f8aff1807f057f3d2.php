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
        $__internal_ffb9099c1836179685b962575df89a5bebc83182ded79d5bb860d6be301822d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb9099c1836179685b962575df89a5bebc83182ded79d5bb860d6be301822d6->enter($__internal_ffb9099c1836179685b962575df89a5bebc83182ded79d5bb860d6be301822d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_c5e23e4016af8ad26ca20bc864307188ee39b6db747c3ef64ecf258417c74925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e23e4016af8ad26ca20bc864307188ee39b6db747c3ef64ecf258417c74925->enter($__internal_c5e23e4016af8ad26ca20bc864307188ee39b6db747c3ef64ecf258417c74925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb9099c1836179685b962575df89a5bebc83182ded79d5bb860d6be301822d6->leave($__internal_ffb9099c1836179685b962575df89a5bebc83182ded79d5bb860d6be301822d6_prof);

        
        $__internal_c5e23e4016af8ad26ca20bc864307188ee39b6db747c3ef64ecf258417c74925->leave($__internal_c5e23e4016af8ad26ca20bc864307188ee39b6db747c3ef64ecf258417c74925_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38463d5810246c731556ce693a2db6fd17a8d7008b11dc85168a27b4f4611f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38463d5810246c731556ce693a2db6fd17a8d7008b11dc85168a27b4f4611f9d->enter($__internal_38463d5810246c731556ce693a2db6fd17a8d7008b11dc85168a27b4f4611f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91fc1f77d29a57248780d98dda6f9bdc076a1c892cf4bde3371b09126166a063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fc1f77d29a57248780d98dda6f9bdc076a1c892cf4bde3371b09126166a063->enter($__internal_91fc1f77d29a57248780d98dda6f9bdc076a1c892cf4bde3371b09126166a063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_91fc1f77d29a57248780d98dda6f9bdc076a1c892cf4bde3371b09126166a063->leave($__internal_91fc1f77d29a57248780d98dda6f9bdc076a1c892cf4bde3371b09126166a063_prof);

        
        $__internal_38463d5810246c731556ce693a2db6fd17a8d7008b11dc85168a27b4f4611f9d->leave($__internal_38463d5810246c731556ce693a2db6fd17a8d7008b11dc85168a27b4f4611f9d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2238d2321e9112fa7e50d7f947f32e0e3db14f8206637719d74d2855688779f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2238d2321e9112fa7e50d7f947f32e0e3db14f8206637719d74d2855688779f->enter($__internal_c2238d2321e9112fa7e50d7f947f32e0e3db14f8206637719d74d2855688779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f05103df4173b2eb6e25b060d2c3413b797ef3473af54f5a317cf1a6d1f505f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05103df4173b2eb6e25b060d2c3413b797ef3473af54f5a317cf1a6d1f505f3->enter($__internal_f05103df4173b2eb6e25b060d2c3413b797ef3473af54f5a317cf1a6d1f505f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f05103df4173b2eb6e25b060d2c3413b797ef3473af54f5a317cf1a6d1f505f3->leave($__internal_f05103df4173b2eb6e25b060d2c3413b797ef3473af54f5a317cf1a6d1f505f3_prof);

        
        $__internal_c2238d2321e9112fa7e50d7f947f32e0e3db14f8206637719d74d2855688779f->leave($__internal_c2238d2321e9112fa7e50d7f947f32e0e3db14f8206637719d74d2855688779f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_55b1977d58e77e2de47efbe76bc703474ae60611dc3bde394deac3c01d69a5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b1977d58e77e2de47efbe76bc703474ae60611dc3bde394deac3c01d69a5c0->enter($__internal_55b1977d58e77e2de47efbe76bc703474ae60611dc3bde394deac3c01d69a5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f52334ea875e158a1751a4039393c6999b7a7ce7a4858f2cfa8ce8fe5569f5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52334ea875e158a1751a4039393c6999b7a7ce7a4858f2cfa8ce8fe5569f5fd->enter($__internal_f52334ea875e158a1751a4039393c6999b7a7ce7a4858f2cfa8ce8fe5569f5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f52334ea875e158a1751a4039393c6999b7a7ce7a4858f2cfa8ce8fe5569f5fd->leave($__internal_f52334ea875e158a1751a4039393c6999b7a7ce7a4858f2cfa8ce8fe5569f5fd_prof);

        
        $__internal_55b1977d58e77e2de47efbe76bc703474ae60611dc3bde394deac3c01d69a5c0->leave($__internal_55b1977d58e77e2de47efbe76bc703474ae60611dc3bde394deac3c01d69a5c0_prof);

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
