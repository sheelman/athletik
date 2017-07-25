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
        $__internal_ad9ef2d15888d11c8d6eb43bed2e2bc283b9ca2e82ad22442cfe7120f905799c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9ef2d15888d11c8d6eb43bed2e2bc283b9ca2e82ad22442cfe7120f905799c->enter($__internal_ad9ef2d15888d11c8d6eb43bed2e2bc283b9ca2e82ad22442cfe7120f905799c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_afc483a79b206201c81f5a69f7e694837431510930dcdafda9f2bdc3526ecbf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc483a79b206201c81f5a69f7e694837431510930dcdafda9f2bdc3526ecbf9->enter($__internal_afc483a79b206201c81f5a69f7e694837431510930dcdafda9f2bdc3526ecbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad9ef2d15888d11c8d6eb43bed2e2bc283b9ca2e82ad22442cfe7120f905799c->leave($__internal_ad9ef2d15888d11c8d6eb43bed2e2bc283b9ca2e82ad22442cfe7120f905799c_prof);

        
        $__internal_afc483a79b206201c81f5a69f7e694837431510930dcdafda9f2bdc3526ecbf9->leave($__internal_afc483a79b206201c81f5a69f7e694837431510930dcdafda9f2bdc3526ecbf9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d55c0e821ea197f7c9ba96928d4559cf68ff7009df9cba915032352065b6b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d55c0e821ea197f7c9ba96928d4559cf68ff7009df9cba915032352065b6b2a->enter($__internal_6d55c0e821ea197f7c9ba96928d4559cf68ff7009df9cba915032352065b6b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9cbe12816ab12b83a555279533ea28e2b124d9ead80b851f7f03d2d924f07b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbe12816ab12b83a555279533ea28e2b124d9ead80b851f7f03d2d924f07b8e->enter($__internal_9cbe12816ab12b83a555279533ea28e2b124d9ead80b851f7f03d2d924f07b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9cbe12816ab12b83a555279533ea28e2b124d9ead80b851f7f03d2d924f07b8e->leave($__internal_9cbe12816ab12b83a555279533ea28e2b124d9ead80b851f7f03d2d924f07b8e_prof);

        
        $__internal_6d55c0e821ea197f7c9ba96928d4559cf68ff7009df9cba915032352065b6b2a->leave($__internal_6d55c0e821ea197f7c9ba96928d4559cf68ff7009df9cba915032352065b6b2a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0031f481d62042fa39a4f83e13ea0e4cb01046b879bafaf546137be0ec2cc888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0031f481d62042fa39a4f83e13ea0e4cb01046b879bafaf546137be0ec2cc888->enter($__internal_0031f481d62042fa39a4f83e13ea0e4cb01046b879bafaf546137be0ec2cc888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0a2388d39582c9c8d2ec3e0241ef19f427590baf6b2422cb239f750b1d66af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a2388d39582c9c8d2ec3e0241ef19f427590baf6b2422cb239f750b1d66af3->enter($__internal_d0a2388d39582c9c8d2ec3e0241ef19f427590baf6b2422cb239f750b1d66af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d0a2388d39582c9c8d2ec3e0241ef19f427590baf6b2422cb239f750b1d66af3->leave($__internal_d0a2388d39582c9c8d2ec3e0241ef19f427590baf6b2422cb239f750b1d66af3_prof);

        
        $__internal_0031f481d62042fa39a4f83e13ea0e4cb01046b879bafaf546137be0ec2cc888->leave($__internal_0031f481d62042fa39a4f83e13ea0e4cb01046b879bafaf546137be0ec2cc888_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c63e31878ca798f76a9edd3a10ee10839d9722fc89e88e2b1b80d83eacab5094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c63e31878ca798f76a9edd3a10ee10839d9722fc89e88e2b1b80d83eacab5094->enter($__internal_c63e31878ca798f76a9edd3a10ee10839d9722fc89e88e2b1b80d83eacab5094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a40a2b064c5639bb17d755491e563f1a002ada9d9cd085ae31a0e8e4f59ed5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40a2b064c5639bb17d755491e563f1a002ada9d9cd085ae31a0e8e4f59ed5f5->enter($__internal_a40a2b064c5639bb17d755491e563f1a002ada9d9cd085ae31a0e8e4f59ed5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a40a2b064c5639bb17d755491e563f1a002ada9d9cd085ae31a0e8e4f59ed5f5->leave($__internal_a40a2b064c5639bb17d755491e563f1a002ada9d9cd085ae31a0e8e4f59ed5f5_prof);

        
        $__internal_c63e31878ca798f76a9edd3a10ee10839d9722fc89e88e2b1b80d83eacab5094->leave($__internal_c63e31878ca798f76a9edd3a10ee10839d9722fc89e88e2b1b80d83eacab5094_prof);

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
