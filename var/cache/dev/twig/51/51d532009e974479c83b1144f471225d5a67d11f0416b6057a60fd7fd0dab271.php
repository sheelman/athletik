<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2caebcb500326a3117081f30342c72238e77e2c3a047a060b4ffa39e2780f0af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2caebcb500326a3117081f30342c72238e77e2c3a047a060b4ffa39e2780f0af->enter($__internal_2caebcb500326a3117081f30342c72238e77e2c3a047a060b4ffa39e2780f0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a83c4a7bf99d90d67c271835bf2aff5c4a424b4ec058e2103e1d68580098c320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83c4a7bf99d90d67c271835bf2aff5c4a424b4ec058e2103e1d68580098c320->enter($__internal_a83c4a7bf99d90d67c271835bf2aff5c4a424b4ec058e2103e1d68580098c320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2caebcb500326a3117081f30342c72238e77e2c3a047a060b4ffa39e2780f0af->leave($__internal_2caebcb500326a3117081f30342c72238e77e2c3a047a060b4ffa39e2780f0af_prof);

        
        $__internal_a83c4a7bf99d90d67c271835bf2aff5c4a424b4ec058e2103e1d68580098c320->leave($__internal_a83c4a7bf99d90d67c271835bf2aff5c4a424b4ec058e2103e1d68580098c320_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8495d919507d4ceabf7e32ab328732a5caacccca20dc7db9f85586ebf237be5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8495d919507d4ceabf7e32ab328732a5caacccca20dc7db9f85586ebf237be5c->enter($__internal_8495d919507d4ceabf7e32ab328732a5caacccca20dc7db9f85586ebf237be5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_634bbd524411727021eaa14a7403b1a7ff94442af0a9f2b904b0bb54f441ec65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634bbd524411727021eaa14a7403b1a7ff94442af0a9f2b904b0bb54f441ec65->enter($__internal_634bbd524411727021eaa14a7403b1a7ff94442af0a9f2b904b0bb54f441ec65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_634bbd524411727021eaa14a7403b1a7ff94442af0a9f2b904b0bb54f441ec65->leave($__internal_634bbd524411727021eaa14a7403b1a7ff94442af0a9f2b904b0bb54f441ec65_prof);

        
        $__internal_8495d919507d4ceabf7e32ab328732a5caacccca20dc7db9f85586ebf237be5c->leave($__internal_8495d919507d4ceabf7e32ab328732a5caacccca20dc7db9f85586ebf237be5c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9adabaf55978ee9c48cdc4c1de4062121c851045a9f61f984ce87e3f4d370baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9adabaf55978ee9c48cdc4c1de4062121c851045a9f61f984ce87e3f4d370baf->enter($__internal_9adabaf55978ee9c48cdc4c1de4062121c851045a9f61f984ce87e3f4d370baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e8d22a4c279f1bacb8ff8766672e7c5a6576a812c830fefb67d1d1338d781d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8d22a4c279f1bacb8ff8766672e7c5a6576a812c830fefb67d1d1338d781d4->enter($__internal_6e8d22a4c279f1bacb8ff8766672e7c5a6576a812c830fefb67d1d1338d781d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6e8d22a4c279f1bacb8ff8766672e7c5a6576a812c830fefb67d1d1338d781d4->leave($__internal_6e8d22a4c279f1bacb8ff8766672e7c5a6576a812c830fefb67d1d1338d781d4_prof);

        
        $__internal_9adabaf55978ee9c48cdc4c1de4062121c851045a9f61f984ce87e3f4d370baf->leave($__internal_9adabaf55978ee9c48cdc4c1de4062121c851045a9f61f984ce87e3f4d370baf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef7e4140f460d79a9b24ee1557e1e674739630e59a02a22046d34fa4c94b0831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7e4140f460d79a9b24ee1557e1e674739630e59a02a22046d34fa4c94b0831->enter($__internal_ef7e4140f460d79a9b24ee1557e1e674739630e59a02a22046d34fa4c94b0831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9357c82706daa8d5d2a3147977dd65323b88b5dcd5d8d03ea8058e7d92c4278f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9357c82706daa8d5d2a3147977dd65323b88b5dcd5d8d03ea8058e7d92c4278f->enter($__internal_9357c82706daa8d5d2a3147977dd65323b88b5dcd5d8d03ea8058e7d92c4278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9357c82706daa8d5d2a3147977dd65323b88b5dcd5d8d03ea8058e7d92c4278f->leave($__internal_9357c82706daa8d5d2a3147977dd65323b88b5dcd5d8d03ea8058e7d92c4278f_prof);

        
        $__internal_ef7e4140f460d79a9b24ee1557e1e674739630e59a02a22046d34fa4c94b0831->leave($__internal_ef7e4140f460d79a9b24ee1557e1e674739630e59a02a22046d34fa4c94b0831_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
