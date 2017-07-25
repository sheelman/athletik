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
        $__internal_ded0af463b83bbdbd43b6990ff2349c0e213eede037da749dc2a13448220175b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded0af463b83bbdbd43b6990ff2349c0e213eede037da749dc2a13448220175b->enter($__internal_ded0af463b83bbdbd43b6990ff2349c0e213eede037da749dc2a13448220175b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0feb46c232e9421fbaca18dae98362ef9897c7da267a695d8e8db500529f3077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0feb46c232e9421fbaca18dae98362ef9897c7da267a695d8e8db500529f3077->enter($__internal_0feb46c232e9421fbaca18dae98362ef9897c7da267a695d8e8db500529f3077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ded0af463b83bbdbd43b6990ff2349c0e213eede037da749dc2a13448220175b->leave($__internal_ded0af463b83bbdbd43b6990ff2349c0e213eede037da749dc2a13448220175b_prof);

        
        $__internal_0feb46c232e9421fbaca18dae98362ef9897c7da267a695d8e8db500529f3077->leave($__internal_0feb46c232e9421fbaca18dae98362ef9897c7da267a695d8e8db500529f3077_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_519ec001e59b99f4734422a1087b9938cfeb9631ac1d8ba301ee3918c1f8510d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519ec001e59b99f4734422a1087b9938cfeb9631ac1d8ba301ee3918c1f8510d->enter($__internal_519ec001e59b99f4734422a1087b9938cfeb9631ac1d8ba301ee3918c1f8510d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8407b9e7e5a635b31882cb8099c7a7bab90cb875a8b38543c1471c08002c501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8407b9e7e5a635b31882cb8099c7a7bab90cb875a8b38543c1471c08002c501->enter($__internal_f8407b9e7e5a635b31882cb8099c7a7bab90cb875a8b38543c1471c08002c501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f8407b9e7e5a635b31882cb8099c7a7bab90cb875a8b38543c1471c08002c501->leave($__internal_f8407b9e7e5a635b31882cb8099c7a7bab90cb875a8b38543c1471c08002c501_prof);

        
        $__internal_519ec001e59b99f4734422a1087b9938cfeb9631ac1d8ba301ee3918c1f8510d->leave($__internal_519ec001e59b99f4734422a1087b9938cfeb9631ac1d8ba301ee3918c1f8510d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3ed0781d9ac185269a7261b587ffd0d55f57e59c3d7f1a77a354645b4fd937d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ed0781d9ac185269a7261b587ffd0d55f57e59c3d7f1a77a354645b4fd937d->enter($__internal_b3ed0781d9ac185269a7261b587ffd0d55f57e59c3d7f1a77a354645b4fd937d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73a3c9240f80a94d3dc10d14ad9f1978b40fcd58145eda7b9e93b121270149f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a3c9240f80a94d3dc10d14ad9f1978b40fcd58145eda7b9e93b121270149f6->enter($__internal_73a3c9240f80a94d3dc10d14ad9f1978b40fcd58145eda7b9e93b121270149f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_73a3c9240f80a94d3dc10d14ad9f1978b40fcd58145eda7b9e93b121270149f6->leave($__internal_73a3c9240f80a94d3dc10d14ad9f1978b40fcd58145eda7b9e93b121270149f6_prof);

        
        $__internal_b3ed0781d9ac185269a7261b587ffd0d55f57e59c3d7f1a77a354645b4fd937d->leave($__internal_b3ed0781d9ac185269a7261b587ffd0d55f57e59c3d7f1a77a354645b4fd937d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4a3901951242282d08fc25050b5f2bcb8af3f0e9922810ae7d3363e926fe06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a3901951242282d08fc25050b5f2bcb8af3f0e9922810ae7d3363e926fe06e->enter($__internal_e4a3901951242282d08fc25050b5f2bcb8af3f0e9922810ae7d3363e926fe06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbe653dc07bb308f9dbc6aa85fa580816b355671f75f4526873f43e6b440c872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe653dc07bb308f9dbc6aa85fa580816b355671f75f4526873f43e6b440c872->enter($__internal_bbe653dc07bb308f9dbc6aa85fa580816b355671f75f4526873f43e6b440c872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bbe653dc07bb308f9dbc6aa85fa580816b355671f75f4526873f43e6b440c872->leave($__internal_bbe653dc07bb308f9dbc6aa85fa580816b355671f75f4526873f43e6b440c872_prof);

        
        $__internal_e4a3901951242282d08fc25050b5f2bcb8af3f0e9922810ae7d3363e926fe06e->leave($__internal_e4a3901951242282d08fc25050b5f2bcb8af3f0e9922810ae7d3363e926fe06e_prof);

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
