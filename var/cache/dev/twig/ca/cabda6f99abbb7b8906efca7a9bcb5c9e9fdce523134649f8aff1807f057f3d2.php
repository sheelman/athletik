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
        $__internal_e588efc26c25bbde9ba4bbfc0dad98de91dd73d0b91e1cfdefbdb5fa1fd3835f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e588efc26c25bbde9ba4bbfc0dad98de91dd73d0b91e1cfdefbdb5fa1fd3835f->enter($__internal_e588efc26c25bbde9ba4bbfc0dad98de91dd73d0b91e1cfdefbdb5fa1fd3835f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_4059babb7779d049a5d83cae12d52985d274a35b8b177929faa2b50f2a5bf465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4059babb7779d049a5d83cae12d52985d274a35b8b177929faa2b50f2a5bf465->enter($__internal_4059babb7779d049a5d83cae12d52985d274a35b8b177929faa2b50f2a5bf465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e588efc26c25bbde9ba4bbfc0dad98de91dd73d0b91e1cfdefbdb5fa1fd3835f->leave($__internal_e588efc26c25bbde9ba4bbfc0dad98de91dd73d0b91e1cfdefbdb5fa1fd3835f_prof);

        
        $__internal_4059babb7779d049a5d83cae12d52985d274a35b8b177929faa2b50f2a5bf465->leave($__internal_4059babb7779d049a5d83cae12d52985d274a35b8b177929faa2b50f2a5bf465_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb774d043f1c202661f99d5dccd1dec3408be933e5509d3f7aee80ce26d7531d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb774d043f1c202661f99d5dccd1dec3408be933e5509d3f7aee80ce26d7531d->enter($__internal_eb774d043f1c202661f99d5dccd1dec3408be933e5509d3f7aee80ce26d7531d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb69bcaa92a4ace8b1c7cebed134627b3eeefaf2f8a60dc7caaa5cba0e4fb136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb69bcaa92a4ace8b1c7cebed134627b3eeefaf2f8a60dc7caaa5cba0e4fb136->enter($__internal_cb69bcaa92a4ace8b1c7cebed134627b3eeefaf2f8a60dc7caaa5cba0e4fb136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cb69bcaa92a4ace8b1c7cebed134627b3eeefaf2f8a60dc7caaa5cba0e4fb136->leave($__internal_cb69bcaa92a4ace8b1c7cebed134627b3eeefaf2f8a60dc7caaa5cba0e4fb136_prof);

        
        $__internal_eb774d043f1c202661f99d5dccd1dec3408be933e5509d3f7aee80ce26d7531d->leave($__internal_eb774d043f1c202661f99d5dccd1dec3408be933e5509d3f7aee80ce26d7531d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9367638ec0673d7e644f009662e5997552f5e9d5d95782182dabb1c5a66675f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9367638ec0673d7e644f009662e5997552f5e9d5d95782182dabb1c5a66675f->enter($__internal_e9367638ec0673d7e644f009662e5997552f5e9d5d95782182dabb1c5a66675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c3d31ebf840ba78a8702c0fba739fef71f476d40d2ea18ee87f9d7f02c87eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3d31ebf840ba78a8702c0fba739fef71f476d40d2ea18ee87f9d7f02c87eb4->enter($__internal_2c3d31ebf840ba78a8702c0fba739fef71f476d40d2ea18ee87f9d7f02c87eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c3d31ebf840ba78a8702c0fba739fef71f476d40d2ea18ee87f9d7f02c87eb4->leave($__internal_2c3d31ebf840ba78a8702c0fba739fef71f476d40d2ea18ee87f9d7f02c87eb4_prof);

        
        $__internal_e9367638ec0673d7e644f009662e5997552f5e9d5d95782182dabb1c5a66675f->leave($__internal_e9367638ec0673d7e644f009662e5997552f5e9d5d95782182dabb1c5a66675f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec9a699646cac97a6328408e596b131f235f902447ab5371d5c0bdb306a812ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9a699646cac97a6328408e596b131f235f902447ab5371d5c0bdb306a812ac->enter($__internal_ec9a699646cac97a6328408e596b131f235f902447ab5371d5c0bdb306a812ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a92eeb265097e31f1cbce4747f45a0ffd74970a9d08ca3b2887e1df0824d4bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92eeb265097e31f1cbce4747f45a0ffd74970a9d08ca3b2887e1df0824d4bd4->enter($__internal_a92eeb265097e31f1cbce4747f45a0ffd74970a9d08ca3b2887e1df0824d4bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a92eeb265097e31f1cbce4747f45a0ffd74970a9d08ca3b2887e1df0824d4bd4->leave($__internal_a92eeb265097e31f1cbce4747f45a0ffd74970a9d08ca3b2887e1df0824d4bd4_prof);

        
        $__internal_ec9a699646cac97a6328408e596b131f235f902447ab5371d5c0bdb306a812ac->leave($__internal_ec9a699646cac97a6328408e596b131f235f902447ab5371d5c0bdb306a812ac_prof);

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
