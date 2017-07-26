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
        $__internal_422e5cd238ff810336ea8a81ac836d7474ad08d6f9860268e9b4324f17af834f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422e5cd238ff810336ea8a81ac836d7474ad08d6f9860268e9b4324f17af834f->enter($__internal_422e5cd238ff810336ea8a81ac836d7474ad08d6f9860268e9b4324f17af834f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bb4e7ae436ca0cec23fbd53b85c13ef75d596c1a381f10af208aef1f88968cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4e7ae436ca0cec23fbd53b85c13ef75d596c1a381f10af208aef1f88968cd5->enter($__internal_bb4e7ae436ca0cec23fbd53b85c13ef75d596c1a381f10af208aef1f88968cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_422e5cd238ff810336ea8a81ac836d7474ad08d6f9860268e9b4324f17af834f->leave($__internal_422e5cd238ff810336ea8a81ac836d7474ad08d6f9860268e9b4324f17af834f_prof);

        
        $__internal_bb4e7ae436ca0cec23fbd53b85c13ef75d596c1a381f10af208aef1f88968cd5->leave($__internal_bb4e7ae436ca0cec23fbd53b85c13ef75d596c1a381f10af208aef1f88968cd5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7356541dc0f7639d9d73e71a5467b5040bd24ddab2cb28c8cae302d627d0365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7356541dc0f7639d9d73e71a5467b5040bd24ddab2cb28c8cae302d627d0365->enter($__internal_b7356541dc0f7639d9d73e71a5467b5040bd24ddab2cb28c8cae302d627d0365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77f26ba666a10390a34f8ac1eb16e75936f44fdb547b20f1b507908500fd86d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f26ba666a10390a34f8ac1eb16e75936f44fdb547b20f1b507908500fd86d0->enter($__internal_77f26ba666a10390a34f8ac1eb16e75936f44fdb547b20f1b507908500fd86d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_77f26ba666a10390a34f8ac1eb16e75936f44fdb547b20f1b507908500fd86d0->leave($__internal_77f26ba666a10390a34f8ac1eb16e75936f44fdb547b20f1b507908500fd86d0_prof);

        
        $__internal_b7356541dc0f7639d9d73e71a5467b5040bd24ddab2cb28c8cae302d627d0365->leave($__internal_b7356541dc0f7639d9d73e71a5467b5040bd24ddab2cb28c8cae302d627d0365_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee93474c06f58186069f05298892aff6b8903072eda0846182b448f227f880ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee93474c06f58186069f05298892aff6b8903072eda0846182b448f227f880ab->enter($__internal_ee93474c06f58186069f05298892aff6b8903072eda0846182b448f227f880ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b6b799d1215748f7402c565deb58c57aed97dc1166b239ea2bbfbff796f3a963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b799d1215748f7402c565deb58c57aed97dc1166b239ea2bbfbff796f3a963->enter($__internal_b6b799d1215748f7402c565deb58c57aed97dc1166b239ea2bbfbff796f3a963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b6b799d1215748f7402c565deb58c57aed97dc1166b239ea2bbfbff796f3a963->leave($__internal_b6b799d1215748f7402c565deb58c57aed97dc1166b239ea2bbfbff796f3a963_prof);

        
        $__internal_ee93474c06f58186069f05298892aff6b8903072eda0846182b448f227f880ab->leave($__internal_ee93474c06f58186069f05298892aff6b8903072eda0846182b448f227f880ab_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d4d8e4d3376cacfea829ff233e1af27dffcd1ad3dd3df99d2a8621352988b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4d8e4d3376cacfea829ff233e1af27dffcd1ad3dd3df99d2a8621352988b8b->enter($__internal_1d4d8e4d3376cacfea829ff233e1af27dffcd1ad3dd3df99d2a8621352988b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15bf2b3561d76dee758706ac215bab223905e63340236dd49baf4bb957378102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bf2b3561d76dee758706ac215bab223905e63340236dd49baf4bb957378102->enter($__internal_15bf2b3561d76dee758706ac215bab223905e63340236dd49baf4bb957378102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15bf2b3561d76dee758706ac215bab223905e63340236dd49baf4bb957378102->leave($__internal_15bf2b3561d76dee758706ac215bab223905e63340236dd49baf4bb957378102_prof);

        
        $__internal_1d4d8e4d3376cacfea829ff233e1af27dffcd1ad3dd3df99d2a8621352988b8b->leave($__internal_1d4d8e4d3376cacfea829ff233e1af27dffcd1ad3dd3df99d2a8621352988b8b_prof);

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
