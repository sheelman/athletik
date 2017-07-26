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
        $__internal_1253d9a03723501aad47a4e24a60103cb1ef7d7ed505c3e11efd4f91c1886dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1253d9a03723501aad47a4e24a60103cb1ef7d7ed505c3e11efd4f91c1886dcd->enter($__internal_1253d9a03723501aad47a4e24a60103cb1ef7d7ed505c3e11efd4f91c1886dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b921fc1d8ac18a0f9f29cc33ca42ebe65da8c85e712b78b25f7c560382ca5e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b921fc1d8ac18a0f9f29cc33ca42ebe65da8c85e712b78b25f7c560382ca5e7f->enter($__internal_b921fc1d8ac18a0f9f29cc33ca42ebe65da8c85e712b78b25f7c560382ca5e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1253d9a03723501aad47a4e24a60103cb1ef7d7ed505c3e11efd4f91c1886dcd->leave($__internal_1253d9a03723501aad47a4e24a60103cb1ef7d7ed505c3e11efd4f91c1886dcd_prof);

        
        $__internal_b921fc1d8ac18a0f9f29cc33ca42ebe65da8c85e712b78b25f7c560382ca5e7f->leave($__internal_b921fc1d8ac18a0f9f29cc33ca42ebe65da8c85e712b78b25f7c560382ca5e7f_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_99af1e5d3886e59ea1057f5229351608713fa435374f16ec271428d9a60accfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99af1e5d3886e59ea1057f5229351608713fa435374f16ec271428d9a60accfd->enter($__internal_99af1e5d3886e59ea1057f5229351608713fa435374f16ec271428d9a60accfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_8c253a005bb978c3f8deffe1e741a2f94f269607c75016ecedb5ab649c2a840b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c253a005bb978c3f8deffe1e741a2f94f269607c75016ecedb5ab649c2a840b->enter($__internal_8c253a005bb978c3f8deffe1e741a2f94f269607c75016ecedb5ab649c2a840b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_8c253a005bb978c3f8deffe1e741a2f94f269607c75016ecedb5ab649c2a840b->leave($__internal_8c253a005bb978c3f8deffe1e741a2f94f269607c75016ecedb5ab649c2a840b_prof);

        
        $__internal_99af1e5d3886e59ea1057f5229351608713fa435374f16ec271428d9a60accfd->leave($__internal_99af1e5d3886e59ea1057f5229351608713fa435374f16ec271428d9a60accfd_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_55504d5a3136f9b888c8962f06b7713dccc8ec223b03bfdd6184fa03fff14002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55504d5a3136f9b888c8962f06b7713dccc8ec223b03bfdd6184fa03fff14002->enter($__internal_55504d5a3136f9b888c8962f06b7713dccc8ec223b03bfdd6184fa03fff14002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_f7151f703d65cc2d5dd2ce2ae4c63c4d37aef4de708debc899602195ba232486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7151f703d65cc2d5dd2ce2ae4c63c4d37aef4de708debc899602195ba232486->enter($__internal_f7151f703d65cc2d5dd2ce2ae4c63c4d37aef4de708debc899602195ba232486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-profile\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_f7151f703d65cc2d5dd2ce2ae4c63c4d37aef4de708debc899602195ba232486->leave($__internal_f7151f703d65cc2d5dd2ce2ae4c63c4d37aef4de708debc899602195ba232486_prof);

        
        $__internal_55504d5a3136f9b888c8962f06b7713dccc8ec223b03bfdd6184fa03fff14002->leave($__internal_55504d5a3136f9b888c8962f06b7713dccc8ec223b03bfdd6184fa03fff14002_prof);

    }

    // line 11
    public function block_profile($context, array $blocks = array())
    {
        $__internal_0b15020d25038672ab42a8555f124398bb084c1e1adf8654497fdbb2eeac3ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b15020d25038672ab42a8555f124398bb084c1e1adf8654497fdbb2eeac3ba3->enter($__internal_0b15020d25038672ab42a8555f124398bb084c1e1adf8654497fdbb2eeac3ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_aadf5b8aed5f7f69465ee2a80dd08b7cb2acd62e5cb53fb0554de99c33e67f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadf5b8aed5f7f69465ee2a80dd08b7cb2acd62e5cb53fb0554de99c33e67f38->enter($__internal_aadf5b8aed5f7f69465ee2a80dd08b7cb2acd62e5cb53fb0554de99c33e67f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

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
        
        $__internal_aadf5b8aed5f7f69465ee2a80dd08b7cb2acd62e5cb53fb0554de99c33e67f38->leave($__internal_aadf5b8aed5f7f69465ee2a80dd08b7cb2acd62e5cb53fb0554de99c33e67f38_prof);

        
        $__internal_0b15020d25038672ab42a8555f124398bb084c1e1adf8654497fdbb2eeac3ba3->leave($__internal_0b15020d25038672ab42a8555f124398bb084c1e1adf8654497fdbb2eeac3ba3_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf728a67996eb7f053c1becce25d039a160aa26dfb63765f39ab744c9876a0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf728a67996eb7f053c1becce25d039a160aa26dfb63765f39ab744c9876a0cf->enter($__internal_cf728a67996eb7f053c1becce25d039a160aa26dfb63765f39ab744c9876a0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f6e11877952c294c261a8cd011223849122e3b4516aecfe49ef7336016783ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e11877952c294c261a8cd011223849122e3b4516aecfe49ef7336016783ba3->enter($__internal_f6e11877952c294c261a8cd011223849122e3b4516aecfe49ef7336016783ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "                        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 26)->display($context);
        // line 27
        echo "                    ";
        
        $__internal_f6e11877952c294c261a8cd011223849122e3b4516aecfe49ef7336016783ba3->leave($__internal_f6e11877952c294c261a8cd011223849122e3b4516aecfe49ef7336016783ba3_prof);

        
        $__internal_cf728a67996eb7f053c1becce25d039a160aa26dfb63765f39ab744c9876a0cf->leave($__internal_cf728a67996eb7f053c1becce25d039a160aa26dfb63765f39ab744c9876a0cf_prof);

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
