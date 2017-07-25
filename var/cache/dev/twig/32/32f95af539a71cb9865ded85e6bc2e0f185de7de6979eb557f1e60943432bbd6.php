<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93118fb6bc1274613201be4cdc7253afc21076f73a2c45def85101ac51dfe1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'timer' => array($this, 'block_timer'),
            'fin' => array($this, 'block_fin'),
            'profile' => array($this, 'block_profile'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c90ed26dfae2e687de8cebdb586b719fc46804543f272ddd056d7c8dc79451b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90ed26dfae2e687de8cebdb586b719fc46804543f272ddd056d7c8dc79451b8->enter($__internal_c90ed26dfae2e687de8cebdb586b719fc46804543f272ddd056d7c8dc79451b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_0a7eba0967fa91dc9b64efa720147e0ddac3259634be078f4d23284265d58684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7eba0967fa91dc9b64efa720147e0ddac3259634be078f4d23284265d58684->enter($__internal_0a7eba0967fa91dc9b64efa720147e0ddac3259634be078f4d23284265d58684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90ed26dfae2e687de8cebdb586b719fc46804543f272ddd056d7c8dc79451b8->leave($__internal_c90ed26dfae2e687de8cebdb586b719fc46804543f272ddd056d7c8dc79451b8_prof);

        
        $__internal_0a7eba0967fa91dc9b64efa720147e0ddac3259634be078f4d23284265d58684->leave($__internal_0a7eba0967fa91dc9b64efa720147e0ddac3259634be078f4d23284265d58684_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_0e2e858afac8c6652583058860dd2ae1279f009d96a5c34743ab95745eeb4d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2e858afac8c6652583058860dd2ae1279f009d96a5c34743ab95745eeb4d16->enter($__internal_0e2e858afac8c6652583058860dd2ae1279f009d96a5c34743ab95745eeb4d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_9a10951534b9f9e2502ee4dcf8a65a13f43fb6a0513ddcdb97559cf9048e6023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a10951534b9f9e2502ee4dcf8a65a13f43fb6a0513ddcdb97559cf9048e6023->enter($__internal_9a10951534b9f9e2502ee4dcf8a65a13f43fb6a0513ddcdb97559cf9048e6023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_9a10951534b9f9e2502ee4dcf8a65a13f43fb6a0513ddcdb97559cf9048e6023->leave($__internal_9a10951534b9f9e2502ee4dcf8a65a13f43fb6a0513ddcdb97559cf9048e6023_prof);

        
        $__internal_0e2e858afac8c6652583058860dd2ae1279f009d96a5c34743ab95745eeb4d16->leave($__internal_0e2e858afac8c6652583058860dd2ae1279f009d96a5c34743ab95745eeb4d16_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_d458ab9b40460d5c200b88885a202fac939f472472bf459e3ab4e88cdec559ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d458ab9b40460d5c200b88885a202fac939f472472bf459e3ab4e88cdec559ad->enter($__internal_d458ab9b40460d5c200b88885a202fac939f472472bf459e3ab4e88cdec559ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_528229468dd40135c89f8b5c3e048100f6022560e727eeffba05aea63ee1a05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528229468dd40135c89f8b5c3e048100f6022560e727eeffba05aea63ee1a05c->enter($__internal_528229468dd40135c89f8b5c3e048100f6022560e727eeffba05aea63ee1a05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-profile\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_528229468dd40135c89f8b5c3e048100f6022560e727eeffba05aea63ee1a05c->leave($__internal_528229468dd40135c89f8b5c3e048100f6022560e727eeffba05aea63ee1a05c_prof);

        
        $__internal_d458ab9b40460d5c200b88885a202fac939f472472bf459e3ab4e88cdec559ad->leave($__internal_d458ab9b40460d5c200b88885a202fac939f472472bf459e3ab4e88cdec559ad_prof);

    }

    // line 11
    public function block_profile($context, array $blocks = array())
    {
        $__internal_4db9efc61baef632b3c9660fe721f18b46019a6f7efc589e1be21d818fbb707b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db9efc61baef632b3c9660fe721f18b46019a6f7efc589e1be21d818fbb707b->enter($__internal_4db9efc61baef632b3c9660fe721f18b46019a6f7efc589e1be21d818fbb707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_a774d3da50ff4f72b10ead9b853952f2d4b09b2f0e249168ecf7ade18858a711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a774d3da50ff4f72b10ead9b853952f2d4b09b2f0e249168ecf7ade18858a711->enter($__internal_a774d3da50ff4f72b10ead9b853952f2d4b09b2f0e249168ecf7ade18858a711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        // line 12
        echo "

    <!-- profile Section -->
    <section id=\"profile\" class=\"section-style\" data-background-image=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background/course-pied.jpg"), "html", null, true);
        echo "\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Vous voila
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"box\">
                    ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#profile -->
    <!-- profile Section End -->
";
        
        $__internal_a774d3da50ff4f72b10ead9b853952f2d4b09b2f0e249168ecf7ade18858a711->leave($__internal_a774d3da50ff4f72b10ead9b853952f2d4b09b2f0e249168ecf7ade18858a711_prof);

        
        $__internal_4db9efc61baef632b3c9660fe721f18b46019a6f7efc589e1be21d818fbb707b->leave($__internal_4db9efc61baef632b3c9660fe721f18b46019a6f7efc589e1be21d818fbb707b_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58a524976a2c279376cc8af841cd3af00b17a5f198f4858de58a8ba92a1d5894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a524976a2c279376cc8af841cd3af00b17a5f198f4858de58a8ba92a1d5894->enter($__internal_58a524976a2c279376cc8af841cd3af00b17a5f198f4858de58a8ba92a1d5894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3e8ab26ebf406d54b67e8652fa11a2ec96a0a5479fbf7a6f4e8f47692a710c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8ab26ebf406d54b67e8652fa11a2ec96a0a5479fbf7a6f4e8f47692a710c88->enter($__internal_3e8ab26ebf406d54b67e8652fa11a2ec96a0a5479fbf7a6f4e8f47692a710c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "                        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 26)->display($context);
        // line 27
        echo "                    ";
        
        $__internal_3e8ab26ebf406d54b67e8652fa11a2ec96a0a5479fbf7a6f4e8f47692a710c88->leave($__internal_3e8ab26ebf406d54b67e8652fa11a2ec96a0a5479fbf7a6f4e8f47692a710c88_prof);

        
        $__internal_58a524976a2c279376cc8af841cd3af00b17a5f198f4858de58a8ba92a1d5894->leave($__internal_58a524976a2c279376cc8af841cd3af00b17a5f198f4858de58a8ba92a1d5894_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 27,  141 => 26,  132 => 25,  111 => 28,  109 => 25,  96 => 15,  91 => 12,  82 => 11,  69 => 6,  60 => 5,  43 => 3,  11 => 1,);
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
        <a class=\"go-to-profile\"><span></span></a>
    </div><!-- /.next-section -->
{%endblock%}

{% block profile %}


    <!-- profile Section -->
    <section id=\"profile\" class=\"section-style\" data-background-image=\"{{ asset('images/background/course-pied.jpg') }}\">   
        <div class=\"pattern height-resize\">
            <div class=\"container\">
                <h3 class=\"section-name\">
                    <span>
                        Vous voila
                    </span>
                </h3><!-- /.section-name -->

                <article class=\"box\">
                    {% block fos_user_content %}
                        {% include \"@FOSUser/Profile/show_content.html.twig\" %}
                    {% endblock fos_user_content %}
                </article>

                <div class=\"next-section\">
                    <a class=\"go-to-contact\"><span></span></a>
                </div><!-- /.next-section -->

            </div><!-- /.container -->
        </div><!-- /.pattern -->

    </section><!-- /#profile -->
    <!-- profile Section End -->
{%endblock%}", "FOSUserBundle:Profile:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
