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
        $__internal_7fd962f628a10088ce6d34f034412665f4990b2cc06db9d6e8a84aad393396e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd962f628a10088ce6d34f034412665f4990b2cc06db9d6e8a84aad393396e7->enter($__internal_7fd962f628a10088ce6d34f034412665f4990b2cc06db9d6e8a84aad393396e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_923ce8c8e8884988f81a45087290d70c9a136ab1062956ca7c9663c9fe5fea47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923ce8c8e8884988f81a45087290d70c9a136ab1062956ca7c9663c9fe5fea47->enter($__internal_923ce8c8e8884988f81a45087290d70c9a136ab1062956ca7c9663c9fe5fea47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7fd962f628a10088ce6d34f034412665f4990b2cc06db9d6e8a84aad393396e7->leave($__internal_7fd962f628a10088ce6d34f034412665f4990b2cc06db9d6e8a84aad393396e7_prof);

        
        $__internal_923ce8c8e8884988f81a45087290d70c9a136ab1062956ca7c9663c9fe5fea47->leave($__internal_923ce8c8e8884988f81a45087290d70c9a136ab1062956ca7c9663c9fe5fea47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25f154815d3a0008b6c3882be94661670e5f4a5024f989f7eb395b9a6abb61b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f154815d3a0008b6c3882be94661670e5f4a5024f989f7eb395b9a6abb61b7->enter($__internal_25f154815d3a0008b6c3882be94661670e5f4a5024f989f7eb395b9a6abb61b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34b710832b6bb7059fa357bc6361304a302a6ce2f12626e286e989e0e07e50e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b710832b6bb7059fa357bc6361304a302a6ce2f12626e286e989e0e07e50e6->enter($__internal_34b710832b6bb7059fa357bc6361304a302a6ce2f12626e286e989e0e07e50e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_34b710832b6bb7059fa357bc6361304a302a6ce2f12626e286e989e0e07e50e6->leave($__internal_34b710832b6bb7059fa357bc6361304a302a6ce2f12626e286e989e0e07e50e6_prof);

        
        $__internal_25f154815d3a0008b6c3882be94661670e5f4a5024f989f7eb395b9a6abb61b7->leave($__internal_25f154815d3a0008b6c3882be94661670e5f4a5024f989f7eb395b9a6abb61b7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e06d1284a2f6a08591a8d39888d49e61e34ba114557b06257e8df469cad85e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e06d1284a2f6a08591a8d39888d49e61e34ba114557b06257e8df469cad85e8->enter($__internal_8e06d1284a2f6a08591a8d39888d49e61e34ba114557b06257e8df469cad85e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c5f425f90ed1b0f2e489082989be5cb4173a6c1e44f933c46dedfa8aa90aad05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f425f90ed1b0f2e489082989be5cb4173a6c1e44f933c46dedfa8aa90aad05->enter($__internal_c5f425f90ed1b0f2e489082989be5cb4173a6c1e44f933c46dedfa8aa90aad05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c5f425f90ed1b0f2e489082989be5cb4173a6c1e44f933c46dedfa8aa90aad05->leave($__internal_c5f425f90ed1b0f2e489082989be5cb4173a6c1e44f933c46dedfa8aa90aad05_prof);

        
        $__internal_8e06d1284a2f6a08591a8d39888d49e61e34ba114557b06257e8df469cad85e8->leave($__internal_8e06d1284a2f6a08591a8d39888d49e61e34ba114557b06257e8df469cad85e8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_91d26c8f63f37fdbdb2a65e999ad3eeb5ee9ef14db1a85ee424b2de4ff6bb95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d26c8f63f37fdbdb2a65e999ad3eeb5ee9ef14db1a85ee424b2de4ff6bb95e->enter($__internal_91d26c8f63f37fdbdb2a65e999ad3eeb5ee9ef14db1a85ee424b2de4ff6bb95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68f9208ea9950ed259aa121ff86a042df9780b78f89009f343e2c9fd68e15d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f9208ea9950ed259aa121ff86a042df9780b78f89009f343e2c9fd68e15d00->enter($__internal_68f9208ea9950ed259aa121ff86a042df9780b78f89009f343e2c9fd68e15d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68f9208ea9950ed259aa121ff86a042df9780b78f89009f343e2c9fd68e15d00->leave($__internal_68f9208ea9950ed259aa121ff86a042df9780b78f89009f343e2c9fd68e15d00_prof);

        
        $__internal_91d26c8f63f37fdbdb2a65e999ad3eeb5ee9ef14db1a85ee424b2de4ff6bb95e->leave($__internal_91d26c8f63f37fdbdb2a65e999ad3eeb5ee9ef14db1a85ee424b2de4ff6bb95e_prof);

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
