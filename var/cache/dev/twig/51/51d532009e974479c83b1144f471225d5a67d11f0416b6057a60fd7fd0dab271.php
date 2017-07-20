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
        $__internal_1acb50f04a7c72928a3ed5b69b9f7dc22f6f7705fc9950318ccd3bd0388c8c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acb50f04a7c72928a3ed5b69b9f7dc22f6f7705fc9950318ccd3bd0388c8c98->enter($__internal_1acb50f04a7c72928a3ed5b69b9f7dc22f6f7705fc9950318ccd3bd0388c8c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b68ec7d66a3bb727d956825c513400566b889e511e4b47a49fee96b910f63a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68ec7d66a3bb727d956825c513400566b889e511e4b47a49fee96b910f63a5c->enter($__internal_b68ec7d66a3bb727d956825c513400566b889e511e4b47a49fee96b910f63a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1acb50f04a7c72928a3ed5b69b9f7dc22f6f7705fc9950318ccd3bd0388c8c98->leave($__internal_1acb50f04a7c72928a3ed5b69b9f7dc22f6f7705fc9950318ccd3bd0388c8c98_prof);

        
        $__internal_b68ec7d66a3bb727d956825c513400566b889e511e4b47a49fee96b910f63a5c->leave($__internal_b68ec7d66a3bb727d956825c513400566b889e511e4b47a49fee96b910f63a5c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed36a5cf5e68133ba91bdeb1afb9f93a78ab5b3010c5d42771b5551f21c9d994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed36a5cf5e68133ba91bdeb1afb9f93a78ab5b3010c5d42771b5551f21c9d994->enter($__internal_ed36a5cf5e68133ba91bdeb1afb9f93a78ab5b3010c5d42771b5551f21c9d994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc2f051971e67f157b42a41c6cfb91a861691973e05042dd446663fc10cdf0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2f051971e67f157b42a41c6cfb91a861691973e05042dd446663fc10cdf0a1->enter($__internal_cc2f051971e67f157b42a41c6cfb91a861691973e05042dd446663fc10cdf0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cc2f051971e67f157b42a41c6cfb91a861691973e05042dd446663fc10cdf0a1->leave($__internal_cc2f051971e67f157b42a41c6cfb91a861691973e05042dd446663fc10cdf0a1_prof);

        
        $__internal_ed36a5cf5e68133ba91bdeb1afb9f93a78ab5b3010c5d42771b5551f21c9d994->leave($__internal_ed36a5cf5e68133ba91bdeb1afb9f93a78ab5b3010c5d42771b5551f21c9d994_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9320a335c42223f6b0700052422eb030c257497a9174ddaa5fa0ecddb3e6a41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9320a335c42223f6b0700052422eb030c257497a9174ddaa5fa0ecddb3e6a41e->enter($__internal_9320a335c42223f6b0700052422eb030c257497a9174ddaa5fa0ecddb3e6a41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_673111551f9b6f6f0fad96276b519d627351c56cd56ee511895eae183b25f5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673111551f9b6f6f0fad96276b519d627351c56cd56ee511895eae183b25f5a2->enter($__internal_673111551f9b6f6f0fad96276b519d627351c56cd56ee511895eae183b25f5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_673111551f9b6f6f0fad96276b519d627351c56cd56ee511895eae183b25f5a2->leave($__internal_673111551f9b6f6f0fad96276b519d627351c56cd56ee511895eae183b25f5a2_prof);

        
        $__internal_9320a335c42223f6b0700052422eb030c257497a9174ddaa5fa0ecddb3e6a41e->leave($__internal_9320a335c42223f6b0700052422eb030c257497a9174ddaa5fa0ecddb3e6a41e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ef07ee609f2ce80513d42ecbe1ea93d0b2ced95cc379ed102b7d8e89ce23f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef07ee609f2ce80513d42ecbe1ea93d0b2ced95cc379ed102b7d8e89ce23f1f->enter($__internal_2ef07ee609f2ce80513d42ecbe1ea93d0b2ced95cc379ed102b7d8e89ce23f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53b1a323cb037e345034bfb642df6f190d5297ca9e0227bb050ad734df97c506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b1a323cb037e345034bfb642df6f190d5297ca9e0227bb050ad734df97c506->enter($__internal_53b1a323cb037e345034bfb642df6f190d5297ca9e0227bb050ad734df97c506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53b1a323cb037e345034bfb642df6f190d5297ca9e0227bb050ad734df97c506->leave($__internal_53b1a323cb037e345034bfb642df6f190d5297ca9e0227bb050ad734df97c506_prof);

        
        $__internal_2ef07ee609f2ce80513d42ecbe1ea93d0b2ced95cc379ed102b7d8e89ce23f1f->leave($__internal_2ef07ee609f2ce80513d42ecbe1ea93d0b2ced95cc379ed102b7d8e89ce23f1f_prof);

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
