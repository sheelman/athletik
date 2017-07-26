<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'register' => array($this, 'block_register'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27b1edbbda7794b7e24251b92efe4e78f233d6f845c72254de9cf1124cbc6876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b1edbbda7794b7e24251b92efe4e78f233d6f845c72254de9cf1124cbc6876->enter($__internal_27b1edbbda7794b7e24251b92efe4e78f233d6f845c72254de9cf1124cbc6876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_bd24b7aa9338b722b4c46eec9c45d730c6d8ef47b399f70199510b98f0f895fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd24b7aa9338b722b4c46eec9c45d730c6d8ef47b399f70199510b98f0f895fb->enter($__internal_bd24b7aa9338b722b4c46eec9c45d730c6d8ef47b399f70199510b98f0f895fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27b1edbbda7794b7e24251b92efe4e78f233d6f845c72254de9cf1124cbc6876->leave($__internal_27b1edbbda7794b7e24251b92efe4e78f233d6f845c72254de9cf1124cbc6876_prof);

        
        $__internal_bd24b7aa9338b722b4c46eec9c45d730c6d8ef47b399f70199510b98f0f895fb->leave($__internal_bd24b7aa9338b722b4c46eec9c45d730c6d8ef47b399f70199510b98f0f895fb_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_f5024b11e9f0c04b00bf55b135891677ff217aa7ded931f0c1742708fdeb54af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5024b11e9f0c04b00bf55b135891677ff217aa7ded931f0c1742708fdeb54af->enter($__internal_f5024b11e9f0c04b00bf55b135891677ff217aa7ded931f0c1742708fdeb54af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_34b1ce0733c1778143e14bde6cc7d280bd8088309defbc87be44f42746456486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b1ce0733c1778143e14bde6cc7d280bd8088309defbc87be44f42746456486->enter($__internal_34b1ce0733c1778143e14bde6cc7d280bd8088309defbc87be44f42746456486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_34b1ce0733c1778143e14bde6cc7d280bd8088309defbc87be44f42746456486->leave($__internal_34b1ce0733c1778143e14bde6cc7d280bd8088309defbc87be44f42746456486_prof);

        
        $__internal_f5024b11e9f0c04b00bf55b135891677ff217aa7ded931f0c1742708fdeb54af->leave($__internal_f5024b11e9f0c04b00bf55b135891677ff217aa7ded931f0c1742708fdeb54af_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_dbc9973bd63c5540e309c59b6f5d5614579da9ed4e6dad6f2ae938d9da2fcec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc9973bd63c5540e309c59b6f5d5614579da9ed4e6dad6f2ae938d9da2fcec4->enter($__internal_dbc9973bd63c5540e309c59b6f5d5614579da9ed4e6dad6f2ae938d9da2fcec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_0289971d9f7d10f081d1691b5e6263895655906147fe48a85d520ffa68522254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0289971d9f7d10f081d1691b5e6263895655906147fe48a85d520ffa68522254->enter($__internal_0289971d9f7d10f081d1691b5e6263895655906147fe48a85d520ffa68522254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-register\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_0289971d9f7d10f081d1691b5e6263895655906147fe48a85d520ffa68522254->leave($__internal_0289971d9f7d10f081d1691b5e6263895655906147fe48a85d520ffa68522254_prof);

        
        $__internal_dbc9973bd63c5540e309c59b6f5d5614579da9ed4e6dad6f2ae938d9da2fcec4->leave($__internal_dbc9973bd63c5540e309c59b6f5d5614579da9ed4e6dad6f2ae938d9da2fcec4_prof);

    }

    // line 11
    public function block_register($context, array $blocks = array())
    {
        $__internal_d23354328d13d20936339216fe3ab14d36a31004c2c04af38907efb3518f04fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23354328d13d20936339216fe3ab14d36a31004c2c04af38907efb3518f04fa->enter($__internal_d23354328d13d20936339216fe3ab14d36a31004c2c04af38907efb3518f04fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_81118d6fd58373aa782cf7ce17bea65b52a39aea97a509f1dd21b4581600c147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81118d6fd58373aa782cf7ce17bea65b52a39aea97a509f1dd21b4581600c147->enter($__internal_81118d6fd58373aa782cf7ce17bea65b52a39aea97a509f1dd21b4581600c147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        // line 12
        echo "
    <!-- register Section -->
    <section id=\"register\" class=\"section-style\" data-background-image=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/pieges-a-eviter-pour-se-remettre-a-la-course-a-pied.jpg"), "html", null, true);
        echo "\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Pour ce connecter c'est ici
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"rbox\">
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

    </section><!-- /#register -->
    <!-- register Section End -->
";
        
        $__internal_81118d6fd58373aa782cf7ce17bea65b52a39aea97a509f1dd21b4581600c147->leave($__internal_81118d6fd58373aa782cf7ce17bea65b52a39aea97a509f1dd21b4581600c147_prof);

        
        $__internal_d23354328d13d20936339216fe3ab14d36a31004c2c04af38907efb3518f04fa->leave($__internal_d23354328d13d20936339216fe3ab14d36a31004c2c04af38907efb3518f04fa_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_108a3c332e651934d4100db603d1b7e165f153ab4b3170baf3f3383172e478fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108a3c332e651934d4100db603d1b7e165f153ab4b3170baf3f3383172e478fc->enter($__internal_108a3c332e651934d4100db603d1b7e165f153ab4b3170baf3f3383172e478fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b4e8001dec0b57837aade2308feb52ec3515e3c48d5c6fa3b0f6c1c42a4c461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4e8001dec0b57837aade2308feb52ec3515e3c48d5c6fa3b0f6c1c42a4c461->enter($__internal_6b4e8001dec0b57837aade2308feb52ec3515e3c48d5c6fa3b0f6c1c42a4c461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 25)->display($context);
        // line 26
        echo "                    ";
        
        $__internal_6b4e8001dec0b57837aade2308feb52ec3515e3c48d5c6fa3b0f6c1c42a4c461->leave($__internal_6b4e8001dec0b57837aade2308feb52ec3515e3c48d5c6fa3b0f6c1c42a4c461_prof);

        
        $__internal_108a3c332e651934d4100db603d1b7e165f153ab4b3170baf3f3383172e478fc->leave($__internal_108a3c332e651934d4100db603d1b7e165f153ab4b3170baf3f3383172e478fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 26,  140 => 25,  131 => 24,  110 => 27,  108 => 24,  95 => 14,  91 => 12,  82 => 11,  69 => 6,  60 => 5,  43 => 3,  11 => 1,);
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
        <a class=\"go-to-register\"><span></span></a>
    </div><!-- /.next-section -->
{%endblock%}

{% block register %}

    <!-- register Section -->
    <section id=\"register\" class=\"section-style\" data-background-image=\"{{ asset('images/background/pieges-a-eviter-pour-se-remettre-a-la-course-a-pied.jpg') }}\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Pour ce connecter c'est ici
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"rbox\">
                    {% block fos_user_content %}
                        {% include \"@FOSUser/Registration/register_content.html.twig\" %}
                    {% endblock fos_user_content %}
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#register -->
    <!-- register Section End -->
{%endblock%}", "FOSUserBundle:Registration:register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
