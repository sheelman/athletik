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
        $__internal_acab0157bc877eb2e7f552e72c5f3ddaf6588cb818befa761eafaa9b4ee9a254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acab0157bc877eb2e7f552e72c5f3ddaf6588cb818befa761eafaa9b4ee9a254->enter($__internal_acab0157bc877eb2e7f552e72c5f3ddaf6588cb818befa761eafaa9b4ee9a254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_aada70efb3e4b8baacd6c82bcf7235fbdbc5289f4bf6e2e76d3fddc6efa2751a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aada70efb3e4b8baacd6c82bcf7235fbdbc5289f4bf6e2e76d3fddc6efa2751a->enter($__internal_aada70efb3e4b8baacd6c82bcf7235fbdbc5289f4bf6e2e76d3fddc6efa2751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acab0157bc877eb2e7f552e72c5f3ddaf6588cb818befa761eafaa9b4ee9a254->leave($__internal_acab0157bc877eb2e7f552e72c5f3ddaf6588cb818befa761eafaa9b4ee9a254_prof);

        
        $__internal_aada70efb3e4b8baacd6c82bcf7235fbdbc5289f4bf6e2e76d3fddc6efa2751a->leave($__internal_aada70efb3e4b8baacd6c82bcf7235fbdbc5289f4bf6e2e76d3fddc6efa2751a_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_d4c24810f9510e9a4f6b504e03352482c4a07c65983d53195e27a929cf6037b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c24810f9510e9a4f6b504e03352482c4a07c65983d53195e27a929cf6037b8->enter($__internal_d4c24810f9510e9a4f6b504e03352482c4a07c65983d53195e27a929cf6037b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_bef9f92fc31b14864d813e9d1e7afa5de9688a84ebe151d6d0a3e7056e2ba35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef9f92fc31b14864d813e9d1e7afa5de9688a84ebe151d6d0a3e7056e2ba35f->enter($__internal_bef9f92fc31b14864d813e9d1e7afa5de9688a84ebe151d6d0a3e7056e2ba35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_bef9f92fc31b14864d813e9d1e7afa5de9688a84ebe151d6d0a3e7056e2ba35f->leave($__internal_bef9f92fc31b14864d813e9d1e7afa5de9688a84ebe151d6d0a3e7056e2ba35f_prof);

        
        $__internal_d4c24810f9510e9a4f6b504e03352482c4a07c65983d53195e27a929cf6037b8->leave($__internal_d4c24810f9510e9a4f6b504e03352482c4a07c65983d53195e27a929cf6037b8_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_331bda9225f59618592f67d8aaa4ec2e200c114d8d279a9f86b9687fd344dd0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331bda9225f59618592f67d8aaa4ec2e200c114d8d279a9f86b9687fd344dd0e->enter($__internal_331bda9225f59618592f67d8aaa4ec2e200c114d8d279a9f86b9687fd344dd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_dbed649662594c38e280ede6fe9a8bc22652716e58f87ec59422c92af1128a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbed649662594c38e280ede6fe9a8bc22652716e58f87ec59422c92af1128a50->enter($__internal_dbed649662594c38e280ede6fe9a8bc22652716e58f87ec59422c92af1128a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-profile\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_dbed649662594c38e280ede6fe9a8bc22652716e58f87ec59422c92af1128a50->leave($__internal_dbed649662594c38e280ede6fe9a8bc22652716e58f87ec59422c92af1128a50_prof);

        
        $__internal_331bda9225f59618592f67d8aaa4ec2e200c114d8d279a9f86b9687fd344dd0e->leave($__internal_331bda9225f59618592f67d8aaa4ec2e200c114d8d279a9f86b9687fd344dd0e_prof);

    }

    // line 11
    public function block_profile($context, array $blocks = array())
    {
        $__internal_45ca9897852055f83df3d89bdbcb35b193c24906bc52030b7087f5c9197c0aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ca9897852055f83df3d89bdbcb35b193c24906bc52030b7087f5c9197c0aa4->enter($__internal_45ca9897852055f83df3d89bdbcb35b193c24906bc52030b7087f5c9197c0aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_6d27435aeebe04be083e6281dd3fd5cdb5dec329e78a31f32c21a67e4416fd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d27435aeebe04be083e6281dd3fd5cdb5dec329e78a31f32c21a67e4416fd79->enter($__internal_6d27435aeebe04be083e6281dd3fd5cdb5dec329e78a31f32c21a67e4416fd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

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
        
        $__internal_6d27435aeebe04be083e6281dd3fd5cdb5dec329e78a31f32c21a67e4416fd79->leave($__internal_6d27435aeebe04be083e6281dd3fd5cdb5dec329e78a31f32c21a67e4416fd79_prof);

        
        $__internal_45ca9897852055f83df3d89bdbcb35b193c24906bc52030b7087f5c9197c0aa4->leave($__internal_45ca9897852055f83df3d89bdbcb35b193c24906bc52030b7087f5c9197c0aa4_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc7bffe460aa2fbdecf44008ab199d0e03a10e7d0f014ecc9fd6b0417d1824a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7bffe460aa2fbdecf44008ab199d0e03a10e7d0f014ecc9fd6b0417d1824a5->enter($__internal_cc7bffe460aa2fbdecf44008ab199d0e03a10e7d0f014ecc9fd6b0417d1824a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_44d57b09a94b33ecb2e212175b4352a6ebdc7d87265c53a02f8ee8db7baf3a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d57b09a94b33ecb2e212175b4352a6ebdc7d87265c53a02f8ee8db7baf3a43->enter($__internal_44d57b09a94b33ecb2e212175b4352a6ebdc7d87265c53a02f8ee8db7baf3a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "                        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 26)->display($context);
        // line 27
        echo "                    ";
        
        $__internal_44d57b09a94b33ecb2e212175b4352a6ebdc7d87265c53a02f8ee8db7baf3a43->leave($__internal_44d57b09a94b33ecb2e212175b4352a6ebdc7d87265c53a02f8ee8db7baf3a43_prof);

        
        $__internal_cc7bffe460aa2fbdecf44008ab199d0e03a10e7d0f014ecc9fd6b0417d1824a5->leave($__internal_cc7bffe460aa2fbdecf44008ab199d0e03a10e7d0f014ecc9fd6b0417d1824a5_prof);

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
