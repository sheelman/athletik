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
        $__internal_fef94882e7dbdbfa824f92b8f69c2dc5e18041f99add913e91a5c1574c336fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef94882e7dbdbfa824f92b8f69c2dc5e18041f99add913e91a5c1574c336fe0->enter($__internal_fef94882e7dbdbfa824f92b8f69c2dc5e18041f99add913e91a5c1574c336fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b10b0b9c68af2000bc381808a0251f6b9adbf21fc955c792ee11d1d2b5c4ad76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10b0b9c68af2000bc381808a0251f6b9adbf21fc955c792ee11d1d2b5c4ad76->enter($__internal_b10b0b9c68af2000bc381808a0251f6b9adbf21fc955c792ee11d1d2b5c4ad76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fef94882e7dbdbfa824f92b8f69c2dc5e18041f99add913e91a5c1574c336fe0->leave($__internal_fef94882e7dbdbfa824f92b8f69c2dc5e18041f99add913e91a5c1574c336fe0_prof);

        
        $__internal_b10b0b9c68af2000bc381808a0251f6b9adbf21fc955c792ee11d1d2b5c4ad76->leave($__internal_b10b0b9c68af2000bc381808a0251f6b9adbf21fc955c792ee11d1d2b5c4ad76_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6c72f493679eb80b13f27f7fd8d18fdcc3d3c34f2b74aadee53810f757a860f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c72f493679eb80b13f27f7fd8d18fdcc3d3c34f2b74aadee53810f757a860f->enter($__internal_b6c72f493679eb80b13f27f7fd8d18fdcc3d3c34f2b74aadee53810f757a860f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b5f9a2e3ad778175ca704d52334ee0c87b3267591eecf08abbf04dffaad7583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5f9a2e3ad778175ca704d52334ee0c87b3267591eecf08abbf04dffaad7583->enter($__internal_1b5f9a2e3ad778175ca704d52334ee0c87b3267591eecf08abbf04dffaad7583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1b5f9a2e3ad778175ca704d52334ee0c87b3267591eecf08abbf04dffaad7583->leave($__internal_1b5f9a2e3ad778175ca704d52334ee0c87b3267591eecf08abbf04dffaad7583_prof);

        
        $__internal_b6c72f493679eb80b13f27f7fd8d18fdcc3d3c34f2b74aadee53810f757a860f->leave($__internal_b6c72f493679eb80b13f27f7fd8d18fdcc3d3c34f2b74aadee53810f757a860f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9271c2cdd6af9aa6a5edc91189ef7cc224eeaee466df44bda75a097c2eaeff13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9271c2cdd6af9aa6a5edc91189ef7cc224eeaee466df44bda75a097c2eaeff13->enter($__internal_9271c2cdd6af9aa6a5edc91189ef7cc224eeaee466df44bda75a097c2eaeff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae1ce0729c6109d775d73c27f2b19e7c6ae1371efa49d0b6b5f00fb72558b14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1ce0729c6109d775d73c27f2b19e7c6ae1371efa49d0b6b5f00fb72558b14f->enter($__internal_ae1ce0729c6109d775d73c27f2b19e7c6ae1371efa49d0b6b5f00fb72558b14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ae1ce0729c6109d775d73c27f2b19e7c6ae1371efa49d0b6b5f00fb72558b14f->leave($__internal_ae1ce0729c6109d775d73c27f2b19e7c6ae1371efa49d0b6b5f00fb72558b14f_prof);

        
        $__internal_9271c2cdd6af9aa6a5edc91189ef7cc224eeaee466df44bda75a097c2eaeff13->leave($__internal_9271c2cdd6af9aa6a5edc91189ef7cc224eeaee466df44bda75a097c2eaeff13_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cef24839edce7b417cde11da63ad5ff8784641bb240d6093db40bc427025f624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef24839edce7b417cde11da63ad5ff8784641bb240d6093db40bc427025f624->enter($__internal_cef24839edce7b417cde11da63ad5ff8784641bb240d6093db40bc427025f624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1e0c48de448430b23797f91f0c3792fea3e66ea12a1c1c95a157ccd8ed36f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e0c48de448430b23797f91f0c3792fea3e66ea12a1c1c95a157ccd8ed36f37->enter($__internal_b1e0c48de448430b23797f91f0c3792fea3e66ea12a1c1c95a157ccd8ed36f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1e0c48de448430b23797f91f0c3792fea3e66ea12a1c1c95a157ccd8ed36f37->leave($__internal_b1e0c48de448430b23797f91f0c3792fea3e66ea12a1c1c95a157ccd8ed36f37_prof);

        
        $__internal_cef24839edce7b417cde11da63ad5ff8784641bb240d6093db40bc427025f624->leave($__internal_cef24839edce7b417cde11da63ad5ff8784641bb240d6093db40bc427025f624_prof);

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
