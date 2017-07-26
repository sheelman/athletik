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
        $__internal_adf7369efc5144fd40a368f072c9c5062a40653aff535d16d8774b5a6228f0a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf7369efc5144fd40a368f072c9c5062a40653aff535d16d8774b5a6228f0a3->enter($__internal_adf7369efc5144fd40a368f072c9c5062a40653aff535d16d8774b5a6228f0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e35c19c2af8530778a42a06a2fe86b6b54a86cab8de105ef890179b52df9d328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35c19c2af8530778a42a06a2fe86b6b54a86cab8de105ef890179b52df9d328->enter($__internal_e35c19c2af8530778a42a06a2fe86b6b54a86cab8de105ef890179b52df9d328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_adf7369efc5144fd40a368f072c9c5062a40653aff535d16d8774b5a6228f0a3->leave($__internal_adf7369efc5144fd40a368f072c9c5062a40653aff535d16d8774b5a6228f0a3_prof);

        
        $__internal_e35c19c2af8530778a42a06a2fe86b6b54a86cab8de105ef890179b52df9d328->leave($__internal_e35c19c2af8530778a42a06a2fe86b6b54a86cab8de105ef890179b52df9d328_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d7f9fb746c1e805f9a685a5a3db56a1f2ad4cd0451d2d86b3e3e15aa6721d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7f9fb746c1e805f9a685a5a3db56a1f2ad4cd0451d2d86b3e3e15aa6721d2f->enter($__internal_4d7f9fb746c1e805f9a685a5a3db56a1f2ad4cd0451d2d86b3e3e15aa6721d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c36d7083e2dfae1948fa725889032247a6ec6e81e08209e1cb9d281f789b2f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36d7083e2dfae1948fa725889032247a6ec6e81e08209e1cb9d281f789b2f5e->enter($__internal_c36d7083e2dfae1948fa725889032247a6ec6e81e08209e1cb9d281f789b2f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c36d7083e2dfae1948fa725889032247a6ec6e81e08209e1cb9d281f789b2f5e->leave($__internal_c36d7083e2dfae1948fa725889032247a6ec6e81e08209e1cb9d281f789b2f5e_prof);

        
        $__internal_4d7f9fb746c1e805f9a685a5a3db56a1f2ad4cd0451d2d86b3e3e15aa6721d2f->leave($__internal_4d7f9fb746c1e805f9a685a5a3db56a1f2ad4cd0451d2d86b3e3e15aa6721d2f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f2fedc5f7d401a0a9595068ad4d3e89d92e63e7769422113920ffe4d51b6d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2fedc5f7d401a0a9595068ad4d3e89d92e63e7769422113920ffe4d51b6d79->enter($__internal_9f2fedc5f7d401a0a9595068ad4d3e89d92e63e7769422113920ffe4d51b6d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ef15421d08bd7cac800cc8015fb3e2396c9755e4ce306682fc9334e99cef3fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef15421d08bd7cac800cc8015fb3e2396c9755e4ce306682fc9334e99cef3fe3->enter($__internal_ef15421d08bd7cac800cc8015fb3e2396c9755e4ce306682fc9334e99cef3fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ef15421d08bd7cac800cc8015fb3e2396c9755e4ce306682fc9334e99cef3fe3->leave($__internal_ef15421d08bd7cac800cc8015fb3e2396c9755e4ce306682fc9334e99cef3fe3_prof);

        
        $__internal_9f2fedc5f7d401a0a9595068ad4d3e89d92e63e7769422113920ffe4d51b6d79->leave($__internal_9f2fedc5f7d401a0a9595068ad4d3e89d92e63e7769422113920ffe4d51b6d79_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_174fc5ef8feb3263103d1c84f6801e031916f90cb7895f7fef8b7979d81e2f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174fc5ef8feb3263103d1c84f6801e031916f90cb7895f7fef8b7979d81e2f23->enter($__internal_174fc5ef8feb3263103d1c84f6801e031916f90cb7895f7fef8b7979d81e2f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db217406c022f44d679929eb2bdc655700fc374c13743a4cb96bdf913bec2c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db217406c022f44d679929eb2bdc655700fc374c13743a4cb96bdf913bec2c8d->enter($__internal_db217406c022f44d679929eb2bdc655700fc374c13743a4cb96bdf913bec2c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db217406c022f44d679929eb2bdc655700fc374c13743a4cb96bdf913bec2c8d->leave($__internal_db217406c022f44d679929eb2bdc655700fc374c13743a4cb96bdf913bec2c8d_prof);

        
        $__internal_174fc5ef8feb3263103d1c84f6801e031916f90cb7895f7fef8b7979d81e2f23->leave($__internal_174fc5ef8feb3263103d1c84f6801e031916f90cb7895f7fef8b7979d81e2f23_prof);

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
