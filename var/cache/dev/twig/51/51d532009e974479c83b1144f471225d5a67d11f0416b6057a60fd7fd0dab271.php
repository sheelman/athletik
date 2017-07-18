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
        $__internal_9354364b4fdf27b4cb3e68172a66298ee89e5e0199280f560c3814cafc4ab8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9354364b4fdf27b4cb3e68172a66298ee89e5e0199280f560c3814cafc4ab8a2->enter($__internal_9354364b4fdf27b4cb3e68172a66298ee89e5e0199280f560c3814cafc4ab8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_da3f8c48dd09bfaf11611ceeea300c09db2b0a129e52a275f34c5fc39da968ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3f8c48dd09bfaf11611ceeea300c09db2b0a129e52a275f34c5fc39da968ee->enter($__internal_da3f8c48dd09bfaf11611ceeea300c09db2b0a129e52a275f34c5fc39da968ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9354364b4fdf27b4cb3e68172a66298ee89e5e0199280f560c3814cafc4ab8a2->leave($__internal_9354364b4fdf27b4cb3e68172a66298ee89e5e0199280f560c3814cafc4ab8a2_prof);

        
        $__internal_da3f8c48dd09bfaf11611ceeea300c09db2b0a129e52a275f34c5fc39da968ee->leave($__internal_da3f8c48dd09bfaf11611ceeea300c09db2b0a129e52a275f34c5fc39da968ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbb0a4dc733548fff4f67b0be5450919e962e7ffa25bd16d3e860e10e171c08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb0a4dc733548fff4f67b0be5450919e962e7ffa25bd16d3e860e10e171c08d->enter($__internal_dbb0a4dc733548fff4f67b0be5450919e962e7ffa25bd16d3e860e10e171c08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a10575adc0a0e5e190af4dfb05e5b1cf62bc8fce0ad4c1a788c0fda7f17b6478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10575adc0a0e5e190af4dfb05e5b1cf62bc8fce0ad4c1a788c0fda7f17b6478->enter($__internal_a10575adc0a0e5e190af4dfb05e5b1cf62bc8fce0ad4c1a788c0fda7f17b6478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a10575adc0a0e5e190af4dfb05e5b1cf62bc8fce0ad4c1a788c0fda7f17b6478->leave($__internal_a10575adc0a0e5e190af4dfb05e5b1cf62bc8fce0ad4c1a788c0fda7f17b6478_prof);

        
        $__internal_dbb0a4dc733548fff4f67b0be5450919e962e7ffa25bd16d3e860e10e171c08d->leave($__internal_dbb0a4dc733548fff4f67b0be5450919e962e7ffa25bd16d3e860e10e171c08d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_47cbcf40bbaea6cae3c27d466b1f3994a3888709645875719465829600b9869f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cbcf40bbaea6cae3c27d466b1f3994a3888709645875719465829600b9869f->enter($__internal_47cbcf40bbaea6cae3c27d466b1f3994a3888709645875719465829600b9869f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_938ab0f0c8c01f149876d368034dab26913bf168b7822289ed82cd9c20bc54b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938ab0f0c8c01f149876d368034dab26913bf168b7822289ed82cd9c20bc54b1->enter($__internal_938ab0f0c8c01f149876d368034dab26913bf168b7822289ed82cd9c20bc54b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_938ab0f0c8c01f149876d368034dab26913bf168b7822289ed82cd9c20bc54b1->leave($__internal_938ab0f0c8c01f149876d368034dab26913bf168b7822289ed82cd9c20bc54b1_prof);

        
        $__internal_47cbcf40bbaea6cae3c27d466b1f3994a3888709645875719465829600b9869f->leave($__internal_47cbcf40bbaea6cae3c27d466b1f3994a3888709645875719465829600b9869f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1315c9f046fd4b9a024d9a04c45cd44d58282c296167acc2760c7c1423e59b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1315c9f046fd4b9a024d9a04c45cd44d58282c296167acc2760c7c1423e59b6f->enter($__internal_1315c9f046fd4b9a024d9a04c45cd44d58282c296167acc2760c7c1423e59b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a24896eb8513ac1f8e76c69a3c6194e9e831e32c8d9fc16d415b74fee6ee526f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24896eb8513ac1f8e76c69a3c6194e9e831e32c8d9fc16d415b74fee6ee526f->enter($__internal_a24896eb8513ac1f8e76c69a3c6194e9e831e32c8d9fc16d415b74fee6ee526f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a24896eb8513ac1f8e76c69a3c6194e9e831e32c8d9fc16d415b74fee6ee526f->leave($__internal_a24896eb8513ac1f8e76c69a3c6194e9e831e32c8d9fc16d415b74fee6ee526f_prof);

        
        $__internal_1315c9f046fd4b9a024d9a04c45cd44d58282c296167acc2760c7c1423e59b6f->leave($__internal_1315c9f046fd4b9a024d9a04c45cd44d58282c296167acc2760c7c1423e59b6f_prof);

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
