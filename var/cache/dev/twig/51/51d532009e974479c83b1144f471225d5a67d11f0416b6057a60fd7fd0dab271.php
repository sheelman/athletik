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
        $__internal_7fcb3ec385325e877c901859f9daa256186b5cb70862334fab3a7cddede5afbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcb3ec385325e877c901859f9daa256186b5cb70862334fab3a7cddede5afbd->enter($__internal_7fcb3ec385325e877c901859f9daa256186b5cb70862334fab3a7cddede5afbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a67c3b6422117f26abe98e5c974a164fa046cd869e22967108a3dccd2b135374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67c3b6422117f26abe98e5c974a164fa046cd869e22967108a3dccd2b135374->enter($__internal_a67c3b6422117f26abe98e5c974a164fa046cd869e22967108a3dccd2b135374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7fcb3ec385325e877c901859f9daa256186b5cb70862334fab3a7cddede5afbd->leave($__internal_7fcb3ec385325e877c901859f9daa256186b5cb70862334fab3a7cddede5afbd_prof);

        
        $__internal_a67c3b6422117f26abe98e5c974a164fa046cd869e22967108a3dccd2b135374->leave($__internal_a67c3b6422117f26abe98e5c974a164fa046cd869e22967108a3dccd2b135374_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_188aea6e1f73a77c967455182f02bf341ee9ba9e44f91b2261bade12075ea71a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188aea6e1f73a77c967455182f02bf341ee9ba9e44f91b2261bade12075ea71a->enter($__internal_188aea6e1f73a77c967455182f02bf341ee9ba9e44f91b2261bade12075ea71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad314117cd707bb926ed33a97d8af8e203a3c0ea662501e519440e47ca9b7415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad314117cd707bb926ed33a97d8af8e203a3c0ea662501e519440e47ca9b7415->enter($__internal_ad314117cd707bb926ed33a97d8af8e203a3c0ea662501e519440e47ca9b7415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ad314117cd707bb926ed33a97d8af8e203a3c0ea662501e519440e47ca9b7415->leave($__internal_ad314117cd707bb926ed33a97d8af8e203a3c0ea662501e519440e47ca9b7415_prof);

        
        $__internal_188aea6e1f73a77c967455182f02bf341ee9ba9e44f91b2261bade12075ea71a->leave($__internal_188aea6e1f73a77c967455182f02bf341ee9ba9e44f91b2261bade12075ea71a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c5aa38518d8216ffae74913f8036534188f826f6baf6a5a020f003079d86308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5aa38518d8216ffae74913f8036534188f826f6baf6a5a020f003079d86308->enter($__internal_0c5aa38518d8216ffae74913f8036534188f826f6baf6a5a020f003079d86308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ecda18b9a1d7a3d1da0685fd98e001705296f28c918e740f9022c23b8ec996b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecda18b9a1d7a3d1da0685fd98e001705296f28c918e740f9022c23b8ec996b8->enter($__internal_ecda18b9a1d7a3d1da0685fd98e001705296f28c918e740f9022c23b8ec996b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ecda18b9a1d7a3d1da0685fd98e001705296f28c918e740f9022c23b8ec996b8->leave($__internal_ecda18b9a1d7a3d1da0685fd98e001705296f28c918e740f9022c23b8ec996b8_prof);

        
        $__internal_0c5aa38518d8216ffae74913f8036534188f826f6baf6a5a020f003079d86308->leave($__internal_0c5aa38518d8216ffae74913f8036534188f826f6baf6a5a020f003079d86308_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7c4f12769d14495012283f52e6ed79e41198a56a310ce8bd0fc6d54b0d66188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c4f12769d14495012283f52e6ed79e41198a56a310ce8bd0fc6d54b0d66188->enter($__internal_c7c4f12769d14495012283f52e6ed79e41198a56a310ce8bd0fc6d54b0d66188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f510b43059d3649d7f891a1ae2ba81534cf5f0a44150cac01ba42540e6d69b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f510b43059d3649d7f891a1ae2ba81534cf5f0a44150cac01ba42540e6d69b6->enter($__internal_6f510b43059d3649d7f891a1ae2ba81534cf5f0a44150cac01ba42540e6d69b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f510b43059d3649d7f891a1ae2ba81534cf5f0a44150cac01ba42540e6d69b6->leave($__internal_6f510b43059d3649d7f891a1ae2ba81534cf5f0a44150cac01ba42540e6d69b6_prof);

        
        $__internal_c7c4f12769d14495012283f52e6ed79e41198a56a310ce8bd0fc6d54b0d66188->leave($__internal_c7c4f12769d14495012283f52e6ed79e41198a56a310ce8bd0fc6d54b0d66188_prof);

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
