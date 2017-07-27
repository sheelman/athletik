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
        $__internal_68f07f6b01053407e2b905504a44d42d9870c161d0f007b343efbea58c99a57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f07f6b01053407e2b905504a44d42d9870c161d0f007b343efbea58c99a57a->enter($__internal_68f07f6b01053407e2b905504a44d42d9870c161d0f007b343efbea58c99a57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_22748df784cc8f14d49885874408106498ed22c6454109d8ac1576b95c03887e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22748df784cc8f14d49885874408106498ed22c6454109d8ac1576b95c03887e->enter($__internal_22748df784cc8f14d49885874408106498ed22c6454109d8ac1576b95c03887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68f07f6b01053407e2b905504a44d42d9870c161d0f007b343efbea58c99a57a->leave($__internal_68f07f6b01053407e2b905504a44d42d9870c161d0f007b343efbea58c99a57a_prof);

        
        $__internal_22748df784cc8f14d49885874408106498ed22c6454109d8ac1576b95c03887e->leave($__internal_22748df784cc8f14d49885874408106498ed22c6454109d8ac1576b95c03887e_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_51407502cba88f4b8e2982aa0a49a326c535906c638cf9446fd8f5148913a90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51407502cba88f4b8e2982aa0a49a326c535906c638cf9446fd8f5148913a90a->enter($__internal_51407502cba88f4b8e2982aa0a49a326c535906c638cf9446fd8f5148913a90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_a1c675c348a81bbda5b95f1c7de4edf91aec383daa0efaa98e7a0eb5e255f8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c675c348a81bbda5b95f1c7de4edf91aec383daa0efaa98e7a0eb5e255f8d8->enter($__internal_a1c675c348a81bbda5b95f1c7de4edf91aec383daa0efaa98e7a0eb5e255f8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_a1c675c348a81bbda5b95f1c7de4edf91aec383daa0efaa98e7a0eb5e255f8d8->leave($__internal_a1c675c348a81bbda5b95f1c7de4edf91aec383daa0efaa98e7a0eb5e255f8d8_prof);

        
        $__internal_51407502cba88f4b8e2982aa0a49a326c535906c638cf9446fd8f5148913a90a->leave($__internal_51407502cba88f4b8e2982aa0a49a326c535906c638cf9446fd8f5148913a90a_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_b97e52ab172e97cbecb76027b3c3fe2b01d477c902221cafa5be873e0387c58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97e52ab172e97cbecb76027b3c3fe2b01d477c902221cafa5be873e0387c58b->enter($__internal_b97e52ab172e97cbecb76027b3c3fe2b01d477c902221cafa5be873e0387c58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_c126f9309baf5cad3ad74bd5a88a3ff893c85f156af73ead23f5352192ccb3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c126f9309baf5cad3ad74bd5a88a3ff893c85f156af73ead23f5352192ccb3e9->enter($__internal_c126f9309baf5cad3ad74bd5a88a3ff893c85f156af73ead23f5352192ccb3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-register\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_c126f9309baf5cad3ad74bd5a88a3ff893c85f156af73ead23f5352192ccb3e9->leave($__internal_c126f9309baf5cad3ad74bd5a88a3ff893c85f156af73ead23f5352192ccb3e9_prof);

        
        $__internal_b97e52ab172e97cbecb76027b3c3fe2b01d477c902221cafa5be873e0387c58b->leave($__internal_b97e52ab172e97cbecb76027b3c3fe2b01d477c902221cafa5be873e0387c58b_prof);

    }

    // line 11
    public function block_register($context, array $blocks = array())
    {
        $__internal_b28e4a1e81a6d82c9cc88fb30f43f922bac79765d8c489b7a4f2a75a722b05d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28e4a1e81a6d82c9cc88fb30f43f922bac79765d8c489b7a4f2a75a722b05d1->enter($__internal_b28e4a1e81a6d82c9cc88fb30f43f922bac79765d8c489b7a4f2a75a722b05d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_f766d267435ebe34a41fac43b49bcbd58c7aca37591ae18c45b6da08b502d314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f766d267435ebe34a41fac43b49bcbd58c7aca37591ae18c45b6da08b502d314->enter($__internal_f766d267435ebe34a41fac43b49bcbd58c7aca37591ae18c45b6da08b502d314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

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
        
        $__internal_f766d267435ebe34a41fac43b49bcbd58c7aca37591ae18c45b6da08b502d314->leave($__internal_f766d267435ebe34a41fac43b49bcbd58c7aca37591ae18c45b6da08b502d314_prof);

        
        $__internal_b28e4a1e81a6d82c9cc88fb30f43f922bac79765d8c489b7a4f2a75a722b05d1->leave($__internal_b28e4a1e81a6d82c9cc88fb30f43f922bac79765d8c489b7a4f2a75a722b05d1_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e65b3137cb3784d17f30c9b7a37d6925cbd69b81deae449fc5046029bbfb9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e65b3137cb3784d17f30c9b7a37d6925cbd69b81deae449fc5046029bbfb9d8->enter($__internal_1e65b3137cb3784d17f30c9b7a37d6925cbd69b81deae449fc5046029bbfb9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab444133807a874cae22d47ee6ae9d14ee27ea740736641dd3d1ba595958deb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab444133807a874cae22d47ee6ae9d14ee27ea740736641dd3d1ba595958deb8->enter($__internal_ab444133807a874cae22d47ee6ae9d14ee27ea740736641dd3d1ba595958deb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 25)->display($context);
        // line 26
        echo "                    ";
        
        $__internal_ab444133807a874cae22d47ee6ae9d14ee27ea740736641dd3d1ba595958deb8->leave($__internal_ab444133807a874cae22d47ee6ae9d14ee27ea740736641dd3d1ba595958deb8_prof);

        
        $__internal_1e65b3137cb3784d17f30c9b7a37d6925cbd69b81deae449fc5046029bbfb9d8->leave($__internal_1e65b3137cb3784d17f30c9b7a37d6925cbd69b81deae449fc5046029bbfb9d8_prof);

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
