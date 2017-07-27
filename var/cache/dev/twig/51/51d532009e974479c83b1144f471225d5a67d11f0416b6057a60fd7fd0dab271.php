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
        $__internal_603c065fe9599c938d4f8b4d67fcae6d2c973dc96d765fe4b6ff8aa24d092fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603c065fe9599c938d4f8b4d67fcae6d2c973dc96d765fe4b6ff8aa24d092fa4->enter($__internal_603c065fe9599c938d4f8b4d67fcae6d2c973dc96d765fe4b6ff8aa24d092fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_326905c7149dfe114b3bccf9c33ea1e6632f1966d6c1b91919af2f822593e917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326905c7149dfe114b3bccf9c33ea1e6632f1966d6c1b91919af2f822593e917->enter($__internal_326905c7149dfe114b3bccf9c33ea1e6632f1966d6c1b91919af2f822593e917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_603c065fe9599c938d4f8b4d67fcae6d2c973dc96d765fe4b6ff8aa24d092fa4->leave($__internal_603c065fe9599c938d4f8b4d67fcae6d2c973dc96d765fe4b6ff8aa24d092fa4_prof);

        
        $__internal_326905c7149dfe114b3bccf9c33ea1e6632f1966d6c1b91919af2f822593e917->leave($__internal_326905c7149dfe114b3bccf9c33ea1e6632f1966d6c1b91919af2f822593e917_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b95a3dc022b286e1a91446b7681b4e98aba5122686dc1dde757aad500b737429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95a3dc022b286e1a91446b7681b4e98aba5122686dc1dde757aad500b737429->enter($__internal_b95a3dc022b286e1a91446b7681b4e98aba5122686dc1dde757aad500b737429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c215657b7b903256f9a896d4f710852669a6f76e247fa6b23b93e49de98efa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c215657b7b903256f9a896d4f710852669a6f76e247fa6b23b93e49de98efa3->enter($__internal_9c215657b7b903256f9a896d4f710852669a6f76e247fa6b23b93e49de98efa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9c215657b7b903256f9a896d4f710852669a6f76e247fa6b23b93e49de98efa3->leave($__internal_9c215657b7b903256f9a896d4f710852669a6f76e247fa6b23b93e49de98efa3_prof);

        
        $__internal_b95a3dc022b286e1a91446b7681b4e98aba5122686dc1dde757aad500b737429->leave($__internal_b95a3dc022b286e1a91446b7681b4e98aba5122686dc1dde757aad500b737429_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_75d206c523226f11a2e6de50476fe3372ff04974df9dbb369e6a3e819efd45be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d206c523226f11a2e6de50476fe3372ff04974df9dbb369e6a3e819efd45be->enter($__internal_75d206c523226f11a2e6de50476fe3372ff04974df9dbb369e6a3e819efd45be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e80059c6751c3322387e47dadafdbb61c8256dbd4f1349525051ca34f5478e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e80059c6751c3322387e47dadafdbb61c8256dbd4f1349525051ca34f5478e3->enter($__internal_8e80059c6751c3322387e47dadafdbb61c8256dbd4f1349525051ca34f5478e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8e80059c6751c3322387e47dadafdbb61c8256dbd4f1349525051ca34f5478e3->leave($__internal_8e80059c6751c3322387e47dadafdbb61c8256dbd4f1349525051ca34f5478e3_prof);

        
        $__internal_75d206c523226f11a2e6de50476fe3372ff04974df9dbb369e6a3e819efd45be->leave($__internal_75d206c523226f11a2e6de50476fe3372ff04974df9dbb369e6a3e819efd45be_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e36bed299edc6c7f36ba405341ddb31a0e12e183519b5f9ab9c1c933cc7763d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e36bed299edc6c7f36ba405341ddb31a0e12e183519b5f9ab9c1c933cc7763d->enter($__internal_1e36bed299edc6c7f36ba405341ddb31a0e12e183519b5f9ab9c1c933cc7763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28a769796e12eafc273d294f90bf1adc69b8ac2717ae5a0018f140b923c97672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a769796e12eafc273d294f90bf1adc69b8ac2717ae5a0018f140b923c97672->enter($__internal_28a769796e12eafc273d294f90bf1adc69b8ac2717ae5a0018f140b923c97672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28a769796e12eafc273d294f90bf1adc69b8ac2717ae5a0018f140b923c97672->leave($__internal_28a769796e12eafc273d294f90bf1adc69b8ac2717ae5a0018f140b923c97672_prof);

        
        $__internal_1e36bed299edc6c7f36ba405341ddb31a0e12e183519b5f9ab9c1c933cc7763d->leave($__internal_1e36bed299edc6c7f36ba405341ddb31a0e12e183519b5f9ab9c1c933cc7763d_prof);

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
