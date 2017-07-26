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
        $__internal_22ea8116b43be7fb9e3eb016f695bcd19a9b0fa9cd3c3f66e23103626808a150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ea8116b43be7fb9e3eb016f695bcd19a9b0fa9cd3c3f66e23103626808a150->enter($__internal_22ea8116b43be7fb9e3eb016f695bcd19a9b0fa9cd3c3f66e23103626808a150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e1da0caccdaee9386fa2a35c522c08e14fa998295a8737701886da83441735b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1da0caccdaee9386fa2a35c522c08e14fa998295a8737701886da83441735b3->enter($__internal_e1da0caccdaee9386fa2a35c522c08e14fa998295a8737701886da83441735b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_22ea8116b43be7fb9e3eb016f695bcd19a9b0fa9cd3c3f66e23103626808a150->leave($__internal_22ea8116b43be7fb9e3eb016f695bcd19a9b0fa9cd3c3f66e23103626808a150_prof);

        
        $__internal_e1da0caccdaee9386fa2a35c522c08e14fa998295a8737701886da83441735b3->leave($__internal_e1da0caccdaee9386fa2a35c522c08e14fa998295a8737701886da83441735b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_850422ce53184d078427648239a5e40ab1acc3ac3ecaa9e7ec0e7e4dd8a597a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850422ce53184d078427648239a5e40ab1acc3ac3ecaa9e7ec0e7e4dd8a597a5->enter($__internal_850422ce53184d078427648239a5e40ab1acc3ac3ecaa9e7ec0e7e4dd8a597a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60b54f01845da5fb62d2f02d8f6ff64b7480cf5cc7560907e4dcc9a3c8a2f144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b54f01845da5fb62d2f02d8f6ff64b7480cf5cc7560907e4dcc9a3c8a2f144->enter($__internal_60b54f01845da5fb62d2f02d8f6ff64b7480cf5cc7560907e4dcc9a3c8a2f144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_60b54f01845da5fb62d2f02d8f6ff64b7480cf5cc7560907e4dcc9a3c8a2f144->leave($__internal_60b54f01845da5fb62d2f02d8f6ff64b7480cf5cc7560907e4dcc9a3c8a2f144_prof);

        
        $__internal_850422ce53184d078427648239a5e40ab1acc3ac3ecaa9e7ec0e7e4dd8a597a5->leave($__internal_850422ce53184d078427648239a5e40ab1acc3ac3ecaa9e7ec0e7e4dd8a597a5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_84d710914060eabf5b1f32fa26acad04fa1a27d486fdf923d09f5bcf3594aca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d710914060eabf5b1f32fa26acad04fa1a27d486fdf923d09f5bcf3594aca5->enter($__internal_84d710914060eabf5b1f32fa26acad04fa1a27d486fdf923d09f5bcf3594aca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_675b0ce81306b6da3cc27ab80eb8b149df621483f78f60ac8c55d6de82209f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675b0ce81306b6da3cc27ab80eb8b149df621483f78f60ac8c55d6de82209f30->enter($__internal_675b0ce81306b6da3cc27ab80eb8b149df621483f78f60ac8c55d6de82209f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_675b0ce81306b6da3cc27ab80eb8b149df621483f78f60ac8c55d6de82209f30->leave($__internal_675b0ce81306b6da3cc27ab80eb8b149df621483f78f60ac8c55d6de82209f30_prof);

        
        $__internal_84d710914060eabf5b1f32fa26acad04fa1a27d486fdf923d09f5bcf3594aca5->leave($__internal_84d710914060eabf5b1f32fa26acad04fa1a27d486fdf923d09f5bcf3594aca5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_769a239a7daf8e6b829617e013faee40d60830636e5fc2865f20d54b4186b69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769a239a7daf8e6b829617e013faee40d60830636e5fc2865f20d54b4186b69e->enter($__internal_769a239a7daf8e6b829617e013faee40d60830636e5fc2865f20d54b4186b69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56093d7295eb281ee589b7e628093714359444c479f6d90248bab05fd6f46824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56093d7295eb281ee589b7e628093714359444c479f6d90248bab05fd6f46824->enter($__internal_56093d7295eb281ee589b7e628093714359444c479f6d90248bab05fd6f46824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56093d7295eb281ee589b7e628093714359444c479f6d90248bab05fd6f46824->leave($__internal_56093d7295eb281ee589b7e628093714359444c479f6d90248bab05fd6f46824_prof);

        
        $__internal_769a239a7daf8e6b829617e013faee40d60830636e5fc2865f20d54b4186b69e->leave($__internal_769a239a7daf8e6b829617e013faee40d60830636e5fc2865f20d54b4186b69e_prof);

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
