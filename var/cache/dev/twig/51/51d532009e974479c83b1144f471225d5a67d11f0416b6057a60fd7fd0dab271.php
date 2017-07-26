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
        $__internal_5125f7959ceb1309b32181bf754047b2ce45ac2ebef7ffe3c6febedc786d2f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5125f7959ceb1309b32181bf754047b2ce45ac2ebef7ffe3c6febedc786d2f64->enter($__internal_5125f7959ceb1309b32181bf754047b2ce45ac2ebef7ffe3c6febedc786d2f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_88a75abcceae41eb12737ff1190dfb835a0a15cef9d2096aed0761387280fd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a75abcceae41eb12737ff1190dfb835a0a15cef9d2096aed0761387280fd2d->enter($__internal_88a75abcceae41eb12737ff1190dfb835a0a15cef9d2096aed0761387280fd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5125f7959ceb1309b32181bf754047b2ce45ac2ebef7ffe3c6febedc786d2f64->leave($__internal_5125f7959ceb1309b32181bf754047b2ce45ac2ebef7ffe3c6febedc786d2f64_prof);

        
        $__internal_88a75abcceae41eb12737ff1190dfb835a0a15cef9d2096aed0761387280fd2d->leave($__internal_88a75abcceae41eb12737ff1190dfb835a0a15cef9d2096aed0761387280fd2d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_310ed274944b8fe0e3f5617a176cee3136124ac2e3ad511707a37019b5a595d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310ed274944b8fe0e3f5617a176cee3136124ac2e3ad511707a37019b5a595d4->enter($__internal_310ed274944b8fe0e3f5617a176cee3136124ac2e3ad511707a37019b5a595d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56b39b98071d536c36f9fb37a22d0c74de58e7e91da1a3596cc2b5ccd39d709c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b39b98071d536c36f9fb37a22d0c74de58e7e91da1a3596cc2b5ccd39d709c->enter($__internal_56b39b98071d536c36f9fb37a22d0c74de58e7e91da1a3596cc2b5ccd39d709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_56b39b98071d536c36f9fb37a22d0c74de58e7e91da1a3596cc2b5ccd39d709c->leave($__internal_56b39b98071d536c36f9fb37a22d0c74de58e7e91da1a3596cc2b5ccd39d709c_prof);

        
        $__internal_310ed274944b8fe0e3f5617a176cee3136124ac2e3ad511707a37019b5a595d4->leave($__internal_310ed274944b8fe0e3f5617a176cee3136124ac2e3ad511707a37019b5a595d4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebe57a14ece21833682d2d897adb160e7316826b1e30a21c8482182b447a8b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe57a14ece21833682d2d897adb160e7316826b1e30a21c8482182b447a8b32->enter($__internal_ebe57a14ece21833682d2d897adb160e7316826b1e30a21c8482182b447a8b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3be98155fa548060f065b821f7f91afa11d230cb25e4e21662e961b60bd37006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be98155fa548060f065b821f7f91afa11d230cb25e4e21662e961b60bd37006->enter($__internal_3be98155fa548060f065b821f7f91afa11d230cb25e4e21662e961b60bd37006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3be98155fa548060f065b821f7f91afa11d230cb25e4e21662e961b60bd37006->leave($__internal_3be98155fa548060f065b821f7f91afa11d230cb25e4e21662e961b60bd37006_prof);

        
        $__internal_ebe57a14ece21833682d2d897adb160e7316826b1e30a21c8482182b447a8b32->leave($__internal_ebe57a14ece21833682d2d897adb160e7316826b1e30a21c8482182b447a8b32_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9e47d2ddf42244033e19989198de3f02039abe241729ba1be550b744e8824d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e47d2ddf42244033e19989198de3f02039abe241729ba1be550b744e8824d3->enter($__internal_f9e47d2ddf42244033e19989198de3f02039abe241729ba1be550b744e8824d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13e226e2a6b72fcae5090f4cc528fde9551363019fddd164c9499968dfd507e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e226e2a6b72fcae5090f4cc528fde9551363019fddd164c9499968dfd507e8->enter($__internal_13e226e2a6b72fcae5090f4cc528fde9551363019fddd164c9499968dfd507e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13e226e2a6b72fcae5090f4cc528fde9551363019fddd164c9499968dfd507e8->leave($__internal_13e226e2a6b72fcae5090f4cc528fde9551363019fddd164c9499968dfd507e8_prof);

        
        $__internal_f9e47d2ddf42244033e19989198de3f02039abe241729ba1be550b744e8824d3->leave($__internal_f9e47d2ddf42244033e19989198de3f02039abe241729ba1be550b744e8824d3_prof);

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
