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
        $__internal_d352e6bf055b23cd3930440d21ad81f18732747a3168d48ca56dcd155742c13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d352e6bf055b23cd3930440d21ad81f18732747a3168d48ca56dcd155742c13c->enter($__internal_d352e6bf055b23cd3930440d21ad81f18732747a3168d48ca56dcd155742c13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b2e8fff674c19b653ca6f4d80041a1a4973464f98550b7570c567d83de48cc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e8fff674c19b653ca6f4d80041a1a4973464f98550b7570c567d83de48cc93->enter($__internal_b2e8fff674c19b653ca6f4d80041a1a4973464f98550b7570c567d83de48cc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d352e6bf055b23cd3930440d21ad81f18732747a3168d48ca56dcd155742c13c->leave($__internal_d352e6bf055b23cd3930440d21ad81f18732747a3168d48ca56dcd155742c13c_prof);

        
        $__internal_b2e8fff674c19b653ca6f4d80041a1a4973464f98550b7570c567d83de48cc93->leave($__internal_b2e8fff674c19b653ca6f4d80041a1a4973464f98550b7570c567d83de48cc93_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_61f488dc33fe2c908c308faf15168bc46670b832564fba8ae5ff546e5ca1745a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f488dc33fe2c908c308faf15168bc46670b832564fba8ae5ff546e5ca1745a->enter($__internal_61f488dc33fe2c908c308faf15168bc46670b832564fba8ae5ff546e5ca1745a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_af9a3ddf1156010ef11626771e27eb7ae4d6f908333371f1cecc4f9f6ae2eff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9a3ddf1156010ef11626771e27eb7ae4d6f908333371f1cecc4f9f6ae2eff1->enter($__internal_af9a3ddf1156010ef11626771e27eb7ae4d6f908333371f1cecc4f9f6ae2eff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_af9a3ddf1156010ef11626771e27eb7ae4d6f908333371f1cecc4f9f6ae2eff1->leave($__internal_af9a3ddf1156010ef11626771e27eb7ae4d6f908333371f1cecc4f9f6ae2eff1_prof);

        
        $__internal_61f488dc33fe2c908c308faf15168bc46670b832564fba8ae5ff546e5ca1745a->leave($__internal_61f488dc33fe2c908c308faf15168bc46670b832564fba8ae5ff546e5ca1745a_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_4df36bdf3be4c6d4d971fe900161d0e7704e89b7c27dd9a02be3d340ebb4e2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df36bdf3be4c6d4d971fe900161d0e7704e89b7c27dd9a02be3d340ebb4e2ca->enter($__internal_4df36bdf3be4c6d4d971fe900161d0e7704e89b7c27dd9a02be3d340ebb4e2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_f5fa1bba94ac674db5a2851e231a94fdbbd1d28dafde2012534cc8085639937f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fa1bba94ac674db5a2851e231a94fdbbd1d28dafde2012534cc8085639937f->enter($__internal_f5fa1bba94ac674db5a2851e231a94fdbbd1d28dafde2012534cc8085639937f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-profile\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_f5fa1bba94ac674db5a2851e231a94fdbbd1d28dafde2012534cc8085639937f->leave($__internal_f5fa1bba94ac674db5a2851e231a94fdbbd1d28dafde2012534cc8085639937f_prof);

        
        $__internal_4df36bdf3be4c6d4d971fe900161d0e7704e89b7c27dd9a02be3d340ebb4e2ca->leave($__internal_4df36bdf3be4c6d4d971fe900161d0e7704e89b7c27dd9a02be3d340ebb4e2ca_prof);

    }

    // line 11
    public function block_profile($context, array $blocks = array())
    {
        $__internal_be9def569984741bb82469ce70d54d36af12b3698e6fdc466546d89bcc6fee80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9def569984741bb82469ce70d54d36af12b3698e6fdc466546d89bcc6fee80->enter($__internal_be9def569984741bb82469ce70d54d36af12b3698e6fdc466546d89bcc6fee80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_97e1fc0e87af583734422d432d7464830b90fe26e195ecf3dd91f300cc15e79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e1fc0e87af583734422d432d7464830b90fe26e195ecf3dd91f300cc15e79b->enter($__internal_97e1fc0e87af583734422d432d7464830b90fe26e195ecf3dd91f300cc15e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

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
        
        $__internal_97e1fc0e87af583734422d432d7464830b90fe26e195ecf3dd91f300cc15e79b->leave($__internal_97e1fc0e87af583734422d432d7464830b90fe26e195ecf3dd91f300cc15e79b_prof);

        
        $__internal_be9def569984741bb82469ce70d54d36af12b3698e6fdc466546d89bcc6fee80->leave($__internal_be9def569984741bb82469ce70d54d36af12b3698e6fdc466546d89bcc6fee80_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcaba2231390847d32ccabf4a838fdbf726878b0279e41cef2bcac6559ef1806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcaba2231390847d32ccabf4a838fdbf726878b0279e41cef2bcac6559ef1806->enter($__internal_bcaba2231390847d32ccabf4a838fdbf726878b0279e41cef2bcac6559ef1806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8005b4fa72870b5e78815f2f94deea20abd082ef9eff5fa9269b565aee29729f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8005b4fa72870b5e78815f2f94deea20abd082ef9eff5fa9269b565aee29729f->enter($__internal_8005b4fa72870b5e78815f2f94deea20abd082ef9eff5fa9269b565aee29729f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "                        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 26)->display($context);
        // line 27
        echo "                    ";
        
        $__internal_8005b4fa72870b5e78815f2f94deea20abd082ef9eff5fa9269b565aee29729f->leave($__internal_8005b4fa72870b5e78815f2f94deea20abd082ef9eff5fa9269b565aee29729f_prof);

        
        $__internal_bcaba2231390847d32ccabf4a838fdbf726878b0279e41cef2bcac6559ef1806->leave($__internal_bcaba2231390847d32ccabf4a838fdbf726878b0279e41cef2bcac6559ef1806_prof);

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
