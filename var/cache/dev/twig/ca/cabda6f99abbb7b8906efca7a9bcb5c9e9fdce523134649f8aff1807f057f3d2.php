<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c2c04fea3143032d10b61e92e1058558e32c333def87c028949f8cd0562e5309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c04fea3143032d10b61e92e1058558e32c333def87c028949f8cd0562e5309->enter($__internal_c2c04fea3143032d10b61e92e1058558e32c333def87c028949f8cd0562e5309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9459d1c683433b386c42d12f176e33ddc47c5d066a539e24ba8f5af8bd19a7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9459d1c683433b386c42d12f176e33ddc47c5d066a539e24ba8f5af8bd19a7cc->enter($__internal_9459d1c683433b386c42d12f176e33ddc47c5d066a539e24ba8f5af8bd19a7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2c04fea3143032d10b61e92e1058558e32c333def87c028949f8cd0562e5309->leave($__internal_c2c04fea3143032d10b61e92e1058558e32c333def87c028949f8cd0562e5309_prof);

        
        $__internal_9459d1c683433b386c42d12f176e33ddc47c5d066a539e24ba8f5af8bd19a7cc->leave($__internal_9459d1c683433b386c42d12f176e33ddc47c5d066a539e24ba8f5af8bd19a7cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_beb836e47c81c107b3593de470f77937000dbf7c2aedbfae43138879a6641cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb836e47c81c107b3593de470f77937000dbf7c2aedbfae43138879a6641cda->enter($__internal_beb836e47c81c107b3593de470f77937000dbf7c2aedbfae43138879a6641cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18cb480efbcc076b0ba0b1185e69bd354c0854fe927485d92d472e47ad8680e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cb480efbcc076b0ba0b1185e69bd354c0854fe927485d92d472e47ad8680e7->enter($__internal_18cb480efbcc076b0ba0b1185e69bd354c0854fe927485d92d472e47ad8680e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_18cb480efbcc076b0ba0b1185e69bd354c0854fe927485d92d472e47ad8680e7->leave($__internal_18cb480efbcc076b0ba0b1185e69bd354c0854fe927485d92d472e47ad8680e7_prof);

        
        $__internal_beb836e47c81c107b3593de470f77937000dbf7c2aedbfae43138879a6641cda->leave($__internal_beb836e47c81c107b3593de470f77937000dbf7c2aedbfae43138879a6641cda_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d2cac8496aff02182e35c66dde23f23839f3e7f78462d0b8fc07bab732337c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2cac8496aff02182e35c66dde23f23839f3e7f78462d0b8fc07bab732337c0->enter($__internal_3d2cac8496aff02182e35c66dde23f23839f3e7f78462d0b8fc07bab732337c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d18a69e2c69a2b7e24e4c704594879ce88e17071623f25735f20df5b5e2c2164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18a69e2c69a2b7e24e4c704594879ce88e17071623f25735f20df5b5e2c2164->enter($__internal_d18a69e2c69a2b7e24e4c704594879ce88e17071623f25735f20df5b5e2c2164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d18a69e2c69a2b7e24e4c704594879ce88e17071623f25735f20df5b5e2c2164->leave($__internal_d18a69e2c69a2b7e24e4c704594879ce88e17071623f25735f20df5b5e2c2164_prof);

        
        $__internal_3d2cac8496aff02182e35c66dde23f23839f3e7f78462d0b8fc07bab732337c0->leave($__internal_3d2cac8496aff02182e35c66dde23f23839f3e7f78462d0b8fc07bab732337c0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_88a5fb567da57b381182135156d4aaffce049cc91e4326c796c80be0273923cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a5fb567da57b381182135156d4aaffce049cc91e4326c796c80be0273923cc->enter($__internal_88a5fb567da57b381182135156d4aaffce049cc91e4326c796c80be0273923cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab5c55403c5b626d296f5ed68d52d5df1e9b74bcd5449d855c05910e307e6205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5c55403c5b626d296f5ed68d52d5df1e9b74bcd5449d855c05910e307e6205->enter($__internal_ab5c55403c5b626d296f5ed68d52d5df1e9b74bcd5449d855c05910e307e6205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ab5c55403c5b626d296f5ed68d52d5df1e9b74bcd5449d855c05910e307e6205->leave($__internal_ab5c55403c5b626d296f5ed68d52d5df1e9b74bcd5449d855c05910e307e6205_prof);

        
        $__internal_88a5fb567da57b381182135156d4aaffce049cc91e4326c796c80be0273923cc->leave($__internal_88a5fb567da57b381182135156d4aaffce049cc91e4326c796c80be0273923cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
