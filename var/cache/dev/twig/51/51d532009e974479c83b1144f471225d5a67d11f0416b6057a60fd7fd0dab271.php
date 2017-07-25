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
        $__internal_17e338107241d4fe79d2cbd07464b5fb26112edaa3928f5308424fbb3ee9803b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e338107241d4fe79d2cbd07464b5fb26112edaa3928f5308424fbb3ee9803b->enter($__internal_17e338107241d4fe79d2cbd07464b5fb26112edaa3928f5308424fbb3ee9803b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_afd800bfff4dd5338bc1d4ec4c8df2e4db6ceef1b7abaa7b02d128be448486f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd800bfff4dd5338bc1d4ec4c8df2e4db6ceef1b7abaa7b02d128be448486f7->enter($__internal_afd800bfff4dd5338bc1d4ec4c8df2e4db6ceef1b7abaa7b02d128be448486f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_17e338107241d4fe79d2cbd07464b5fb26112edaa3928f5308424fbb3ee9803b->leave($__internal_17e338107241d4fe79d2cbd07464b5fb26112edaa3928f5308424fbb3ee9803b_prof);

        
        $__internal_afd800bfff4dd5338bc1d4ec4c8df2e4db6ceef1b7abaa7b02d128be448486f7->leave($__internal_afd800bfff4dd5338bc1d4ec4c8df2e4db6ceef1b7abaa7b02d128be448486f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0830e276fe6ad8a60790d51435a8dd2fa687cf701782c08478487f3f0cfaeec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0830e276fe6ad8a60790d51435a8dd2fa687cf701782c08478487f3f0cfaeec7->enter($__internal_0830e276fe6ad8a60790d51435a8dd2fa687cf701782c08478487f3f0cfaeec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54dbffdc55d8a105a3d96c863744da9cd59e93cc3eb8bce48966914019b721ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dbffdc55d8a105a3d96c863744da9cd59e93cc3eb8bce48966914019b721ed->enter($__internal_54dbffdc55d8a105a3d96c863744da9cd59e93cc3eb8bce48966914019b721ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_54dbffdc55d8a105a3d96c863744da9cd59e93cc3eb8bce48966914019b721ed->leave($__internal_54dbffdc55d8a105a3d96c863744da9cd59e93cc3eb8bce48966914019b721ed_prof);

        
        $__internal_0830e276fe6ad8a60790d51435a8dd2fa687cf701782c08478487f3f0cfaeec7->leave($__internal_0830e276fe6ad8a60790d51435a8dd2fa687cf701782c08478487f3f0cfaeec7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bbaeaa78051dd07805928f13c70e13ee1429f9132f0861f54d95eeb42b6b5cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbaeaa78051dd07805928f13c70e13ee1429f9132f0861f54d95eeb42b6b5cf->enter($__internal_2bbaeaa78051dd07805928f13c70e13ee1429f9132f0861f54d95eeb42b6b5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aadc242371471c53180cc6b48e852f2acdc665301fd61f987eabc56ec3545cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadc242371471c53180cc6b48e852f2acdc665301fd61f987eabc56ec3545cee->enter($__internal_aadc242371471c53180cc6b48e852f2acdc665301fd61f987eabc56ec3545cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_aadc242371471c53180cc6b48e852f2acdc665301fd61f987eabc56ec3545cee->leave($__internal_aadc242371471c53180cc6b48e852f2acdc665301fd61f987eabc56ec3545cee_prof);

        
        $__internal_2bbaeaa78051dd07805928f13c70e13ee1429f9132f0861f54d95eeb42b6b5cf->leave($__internal_2bbaeaa78051dd07805928f13c70e13ee1429f9132f0861f54d95eeb42b6b5cf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2df65f09aacdb1b06fec8aab5886e34b2d5da5ea69135b5d904c835359b154bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df65f09aacdb1b06fec8aab5886e34b2d5da5ea69135b5d904c835359b154bf->enter($__internal_2df65f09aacdb1b06fec8aab5886e34b2d5da5ea69135b5d904c835359b154bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33e1365b8e93c735e79fc0240a26f7c6139514ebdb2b5548b81c4d35270ff164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e1365b8e93c735e79fc0240a26f7c6139514ebdb2b5548b81c4d35270ff164->enter($__internal_33e1365b8e93c735e79fc0240a26f7c6139514ebdb2b5548b81c4d35270ff164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33e1365b8e93c735e79fc0240a26f7c6139514ebdb2b5548b81c4d35270ff164->leave($__internal_33e1365b8e93c735e79fc0240a26f7c6139514ebdb2b5548b81c4d35270ff164_prof);

        
        $__internal_2df65f09aacdb1b06fec8aab5886e34b2d5da5ea69135b5d904c835359b154bf->leave($__internal_2df65f09aacdb1b06fec8aab5886e34b2d5da5ea69135b5d904c835359b154bf_prof);

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
