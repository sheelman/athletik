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
        $__internal_7c87f75b0670a975231ef7ebc70717b60b0aa70bf29f247c9969249389387f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c87f75b0670a975231ef7ebc70717b60b0aa70bf29f247c9969249389387f02->enter($__internal_7c87f75b0670a975231ef7ebc70717b60b0aa70bf29f247c9969249389387f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_594b1d89d12d037c6dbbeb21fa30bd9aab0939bcf290318233cc2baf72deb6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594b1d89d12d037c6dbbeb21fa30bd9aab0939bcf290318233cc2baf72deb6e2->enter($__internal_594b1d89d12d037c6dbbeb21fa30bd9aab0939bcf290318233cc2baf72deb6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7c87f75b0670a975231ef7ebc70717b60b0aa70bf29f247c9969249389387f02->leave($__internal_7c87f75b0670a975231ef7ebc70717b60b0aa70bf29f247c9969249389387f02_prof);

        
        $__internal_594b1d89d12d037c6dbbeb21fa30bd9aab0939bcf290318233cc2baf72deb6e2->leave($__internal_594b1d89d12d037c6dbbeb21fa30bd9aab0939bcf290318233cc2baf72deb6e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d62416c90b5b085b05bb6801afeb74635d5384b8865919c2773a1491094fdf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d62416c90b5b085b05bb6801afeb74635d5384b8865919c2773a1491094fdf9->enter($__internal_2d62416c90b5b085b05bb6801afeb74635d5384b8865919c2773a1491094fdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d893fa55d9851e5cee2006b935ea9743ec4a171e13c64d81ab693e07db40fb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d893fa55d9851e5cee2006b935ea9743ec4a171e13c64d81ab693e07db40fb51->enter($__internal_d893fa55d9851e5cee2006b935ea9743ec4a171e13c64d81ab693e07db40fb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d893fa55d9851e5cee2006b935ea9743ec4a171e13c64d81ab693e07db40fb51->leave($__internal_d893fa55d9851e5cee2006b935ea9743ec4a171e13c64d81ab693e07db40fb51_prof);

        
        $__internal_2d62416c90b5b085b05bb6801afeb74635d5384b8865919c2773a1491094fdf9->leave($__internal_2d62416c90b5b085b05bb6801afeb74635d5384b8865919c2773a1491094fdf9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bb16d4ed1c6c29bfe009da819dd114c2fdeed40394e2da66b811126a2a2e237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb16d4ed1c6c29bfe009da819dd114c2fdeed40394e2da66b811126a2a2e237->enter($__internal_8bb16d4ed1c6c29bfe009da819dd114c2fdeed40394e2da66b811126a2a2e237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_912c9f94a8017a4e6a6a99ec639712f413c39ea41286411adb3888bf40d4ed40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912c9f94a8017a4e6a6a99ec639712f413c39ea41286411adb3888bf40d4ed40->enter($__internal_912c9f94a8017a4e6a6a99ec639712f413c39ea41286411adb3888bf40d4ed40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_912c9f94a8017a4e6a6a99ec639712f413c39ea41286411adb3888bf40d4ed40->leave($__internal_912c9f94a8017a4e6a6a99ec639712f413c39ea41286411adb3888bf40d4ed40_prof);

        
        $__internal_8bb16d4ed1c6c29bfe009da819dd114c2fdeed40394e2da66b811126a2a2e237->leave($__internal_8bb16d4ed1c6c29bfe009da819dd114c2fdeed40394e2da66b811126a2a2e237_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fa1dca568000ded681866877df7619d5bc3de445a90c052b1ea4ca56b7a448f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa1dca568000ded681866877df7619d5bc3de445a90c052b1ea4ca56b7a448f->enter($__internal_5fa1dca568000ded681866877df7619d5bc3de445a90c052b1ea4ca56b7a448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6454a86e7ece7415a6466ca155e2cf744827c0e421447fbd7960bf0eca927de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6454a86e7ece7415a6466ca155e2cf744827c0e421447fbd7960bf0eca927de5->enter($__internal_6454a86e7ece7415a6466ca155e2cf744827c0e421447fbd7960bf0eca927de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6454a86e7ece7415a6466ca155e2cf744827c0e421447fbd7960bf0eca927de5->leave($__internal_6454a86e7ece7415a6466ca155e2cf744827c0e421447fbd7960bf0eca927de5_prof);

        
        $__internal_5fa1dca568000ded681866877df7619d5bc3de445a90c052b1ea4ca56b7a448f->leave($__internal_5fa1dca568000ded681866877df7619d5bc3de445a90c052b1ea4ca56b7a448f_prof);

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
