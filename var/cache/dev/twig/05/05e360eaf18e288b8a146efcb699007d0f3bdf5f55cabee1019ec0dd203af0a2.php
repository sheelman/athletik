<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'conexion' => array($this, 'block_conexion'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87cba4a9190808d8e29f308a27f5d5fb86b9f39616acfc513ce5d7bb1943d905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cba4a9190808d8e29f308a27f5d5fb86b9f39616acfc513ce5d7bb1943d905->enter($__internal_87cba4a9190808d8e29f308a27f5d5fb86b9f39616acfc513ce5d7bb1943d905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_0ce98e3063c54f197fae2273e0322f2b8781c386b9bf62964e25791cafc51201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce98e3063c54f197fae2273e0322f2b8781c386b9bf62964e25791cafc51201->enter($__internal_0ce98e3063c54f197fae2273e0322f2b8781c386b9bf62964e25791cafc51201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87cba4a9190808d8e29f308a27f5d5fb86b9f39616acfc513ce5d7bb1943d905->leave($__internal_87cba4a9190808d8e29f308a27f5d5fb86b9f39616acfc513ce5d7bb1943d905_prof);

        
        $__internal_0ce98e3063c54f197fae2273e0322f2b8781c386b9bf62964e25791cafc51201->leave($__internal_0ce98e3063c54f197fae2273e0322f2b8781c386b9bf62964e25791cafc51201_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_05184e117333e87e0229c4caec4f731ba55e0829e97dd3b15084769566f46973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05184e117333e87e0229c4caec4f731ba55e0829e97dd3b15084769566f46973->enter($__internal_05184e117333e87e0229c4caec4f731ba55e0829e97dd3b15084769566f46973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_15b31ac0f30ff1cddfad869c803dbd1148c10561d379a638aa6a5650921e0b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b31ac0f30ff1cddfad869c803dbd1148c10561d379a638aa6a5650921e0b8c->enter($__internal_15b31ac0f30ff1cddfad869c803dbd1148c10561d379a638aa6a5650921e0b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_15b31ac0f30ff1cddfad869c803dbd1148c10561d379a638aa6a5650921e0b8c->leave($__internal_15b31ac0f30ff1cddfad869c803dbd1148c10561d379a638aa6a5650921e0b8c_prof);

        
        $__internal_05184e117333e87e0229c4caec4f731ba55e0829e97dd3b15084769566f46973->leave($__internal_05184e117333e87e0229c4caec4f731ba55e0829e97dd3b15084769566f46973_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_9922576c4954984f86bbddf91ae32de9487f51d8ab75c33d08e8c035e21eca7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9922576c4954984f86bbddf91ae32de9487f51d8ab75c33d08e8c035e21eca7d->enter($__internal_9922576c4954984f86bbddf91ae32de9487f51d8ab75c33d08e8c035e21eca7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_9eff879c8112ab912cd4df2f08fa5e7ca21fd23fb52fcddeacdcbbca976a9361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eff879c8112ab912cd4df2f08fa5e7ca21fd23fb52fcddeacdcbbca976a9361->enter($__internal_9eff879c8112ab912cd4df2f08fa5e7ca21fd23fb52fcddeacdcbbca976a9361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-login\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_9eff879c8112ab912cd4df2f08fa5e7ca21fd23fb52fcddeacdcbbca976a9361->leave($__internal_9eff879c8112ab912cd4df2f08fa5e7ca21fd23fb52fcddeacdcbbca976a9361_prof);

        
        $__internal_9922576c4954984f86bbddf91ae32de9487f51d8ab75c33d08e8c035e21eca7d->leave($__internal_9922576c4954984f86bbddf91ae32de9487f51d8ab75c33d08e8c035e21eca7d_prof);

    }

    // line 11
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_c3b2906e2c4d37a743ea6ec9a31aa0e913ff575edbead85cd56712d798f12b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b2906e2c4d37a743ea6ec9a31aa0e913ff575edbead85cd56712d798f12b38->enter($__internal_c3b2906e2c4d37a743ea6ec9a31aa0e913ff575edbead85cd56712d798f12b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_fe7659f2376ae2c6e7e41d916c7e916ecdffa34ad6c34903d090e251e409f03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7659f2376ae2c6e7e41d916c7e916ecdffa34ad6c34903d090e251e409f03a->enter($__internal_fe7659f2376ae2c6e7e41d916c7e916ecdffa34ad6c34903d090e251e409f03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        // line 12
        echo "
    <!-- conexion Section -->
    <section id=\"login\" class=\"section-style\" data-background-image=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/Course-à-pieds1.jpg"), "html", null, true);
        echo "\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Pour ce connecter c'est ici
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"box\">
                    ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#login -->
    <!-- login Section End -->
";
        
        $__internal_fe7659f2376ae2c6e7e41d916c7e916ecdffa34ad6c34903d090e251e409f03a->leave($__internal_fe7659f2376ae2c6e7e41d916c7e916ecdffa34ad6c34903d090e251e409f03a_prof);

        
        $__internal_c3b2906e2c4d37a743ea6ec9a31aa0e913ff575edbead85cd56712d798f12b38->leave($__internal_c3b2906e2c4d37a743ea6ec9a31aa0e913ff575edbead85cd56712d798f12b38_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1c4c4fe876c231b2776a3e6e7f8924d947528d27b1b49628debeb2ed2a88d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c4c4fe876c231b2776a3e6e7f8924d947528d27b1b49628debeb2ed2a88d16->enter($__internal_a1c4c4fe876c231b2776a3e6e7f8924d947528d27b1b49628debeb2ed2a88d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ca0acf48b5c962439ff0720533c0d70fdf19007b9d57da8f19f591d2770b9aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0acf48b5c962439ff0720533c0d70fdf19007b9d57da8f19f591d2770b9aab->enter($__internal_ca0acf48b5c962439ff0720533c0d70fdf19007b9d57da8f19f591d2770b9aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
                    ";
        
        $__internal_ca0acf48b5c962439ff0720533c0d70fdf19007b9d57da8f19f591d2770b9aab->leave($__internal_ca0acf48b5c962439ff0720533c0d70fdf19007b9d57da8f19f591d2770b9aab_prof);

        
        $__internal_a1c4c4fe876c231b2776a3e6e7f8924d947528d27b1b49628debeb2ed2a88d16->leave($__internal_a1c4c4fe876c231b2776a3e6e7f8924d947528d27b1b49628debeb2ed2a88d16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  131 => 24,  110 => 27,  108 => 24,  95 => 14,  91 => 12,  82 => 11,  69 => 6,  60 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block timer %}{%endblock%}

{% block fin %}
    <div class=\"next-section\">
        <a class=\"go-to-login\"><span></span></a>
    </div><!-- /.next-section -->
{%endblock%}

{% block conexion %}

    <!-- conexion Section -->
    <section id=\"login\" class=\"section-style\" data-background-image=\"{{ asset('images/background/Course-à-pieds1.jpg') }}\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Pour ce connecter c'est ici
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"box\">
                    {% block fos_user_content %}
                        {{ include('@FOSUser/Security/login_content.html.twig') }}
                    {% endblock fos_user_content %}
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#login -->
    <!-- login Section End -->
{%endblock%}", "FOSUserBundle:Security:login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
