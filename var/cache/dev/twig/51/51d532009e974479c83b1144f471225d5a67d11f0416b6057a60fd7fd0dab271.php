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
        $__internal_4a0dd5caa1ea92ba2fca534cdfd69504facf2429e2ef6c4ffa7158700d1cf663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0dd5caa1ea92ba2fca534cdfd69504facf2429e2ef6c4ffa7158700d1cf663->enter($__internal_4a0dd5caa1ea92ba2fca534cdfd69504facf2429e2ef6c4ffa7158700d1cf663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e01bfa14420eca183558a0d5d32d533836e43ccf3667fb1ee720b9ce45e09a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01bfa14420eca183558a0d5d32d533836e43ccf3667fb1ee720b9ce45e09a39->enter($__internal_e01bfa14420eca183558a0d5d32d533836e43ccf3667fb1ee720b9ce45e09a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4a0dd5caa1ea92ba2fca534cdfd69504facf2429e2ef6c4ffa7158700d1cf663->leave($__internal_4a0dd5caa1ea92ba2fca534cdfd69504facf2429e2ef6c4ffa7158700d1cf663_prof);

        
        $__internal_e01bfa14420eca183558a0d5d32d533836e43ccf3667fb1ee720b9ce45e09a39->leave($__internal_e01bfa14420eca183558a0d5d32d533836e43ccf3667fb1ee720b9ce45e09a39_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c47bade9475a8de045a6dd0ce9742268a44ae3341fbc8370e8eddffdf3fd6635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47bade9475a8de045a6dd0ce9742268a44ae3341fbc8370e8eddffdf3fd6635->enter($__internal_c47bade9475a8de045a6dd0ce9742268a44ae3341fbc8370e8eddffdf3fd6635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a6becb096590edf6507f1cae2b931388341d02cca9d0bbbb7cfe47d35c95d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6becb096590edf6507f1cae2b931388341d02cca9d0bbbb7cfe47d35c95d1c->enter($__internal_3a6becb096590edf6507f1cae2b931388341d02cca9d0bbbb7cfe47d35c95d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3a6becb096590edf6507f1cae2b931388341d02cca9d0bbbb7cfe47d35c95d1c->leave($__internal_3a6becb096590edf6507f1cae2b931388341d02cca9d0bbbb7cfe47d35c95d1c_prof);

        
        $__internal_c47bade9475a8de045a6dd0ce9742268a44ae3341fbc8370e8eddffdf3fd6635->leave($__internal_c47bade9475a8de045a6dd0ce9742268a44ae3341fbc8370e8eddffdf3fd6635_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b124f15cd3c0168e78a79ba2d0263f288c9716ee83113199f1e6a041504474a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b124f15cd3c0168e78a79ba2d0263f288c9716ee83113199f1e6a041504474a->enter($__internal_6b124f15cd3c0168e78a79ba2d0263f288c9716ee83113199f1e6a041504474a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45113e8c09a0694e5acc45b0d0ac2d1f0c9255a40771a581f9e62f86cb5ac36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45113e8c09a0694e5acc45b0d0ac2d1f0c9255a40771a581f9e62f86cb5ac36d->enter($__internal_45113e8c09a0694e5acc45b0d0ac2d1f0c9255a40771a581f9e62f86cb5ac36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_45113e8c09a0694e5acc45b0d0ac2d1f0c9255a40771a581f9e62f86cb5ac36d->leave($__internal_45113e8c09a0694e5acc45b0d0ac2d1f0c9255a40771a581f9e62f86cb5ac36d_prof);

        
        $__internal_6b124f15cd3c0168e78a79ba2d0263f288c9716ee83113199f1e6a041504474a->leave($__internal_6b124f15cd3c0168e78a79ba2d0263f288c9716ee83113199f1e6a041504474a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f972f5b5fb9b26c43247cabe8f4687b7f74c4a22581d98cecc9a3efb49a9ac3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f972f5b5fb9b26c43247cabe8f4687b7f74c4a22581d98cecc9a3efb49a9ac3a->enter($__internal_f972f5b5fb9b26c43247cabe8f4687b7f74c4a22581d98cecc9a3efb49a9ac3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4d39905826a3dd12138fb7eea59a31fbd22ef1c354cec31dec6cf388f526ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d39905826a3dd12138fb7eea59a31fbd22ef1c354cec31dec6cf388f526ec8->enter($__internal_e4d39905826a3dd12138fb7eea59a31fbd22ef1c354cec31dec6cf388f526ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4d39905826a3dd12138fb7eea59a31fbd22ef1c354cec31dec6cf388f526ec8->leave($__internal_e4d39905826a3dd12138fb7eea59a31fbd22ef1c354cec31dec6cf388f526ec8_prof);

        
        $__internal_f972f5b5fb9b26c43247cabe8f4687b7f74c4a22581d98cecc9a3efb49a9ac3a->leave($__internal_f972f5b5fb9b26c43247cabe8f4687b7f74c4a22581d98cecc9a3efb49a9ac3a_prof);

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
