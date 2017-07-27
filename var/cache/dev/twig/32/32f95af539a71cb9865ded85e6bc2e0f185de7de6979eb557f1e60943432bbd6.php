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
        $__internal_2fd04b13e9bde4d1e07d681e0972b1b5270bd7f5911e7904350e783997f3ac96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd04b13e9bde4d1e07d681e0972b1b5270bd7f5911e7904350e783997f3ac96->enter($__internal_2fd04b13e9bde4d1e07d681e0972b1b5270bd7f5911e7904350e783997f3ac96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_0b30b3b38bb1eb6c3a753ebfe8b5721b911b9dce002eac5214d58b384475c434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b30b3b38bb1eb6c3a753ebfe8b5721b911b9dce002eac5214d58b384475c434->enter($__internal_0b30b3b38bb1eb6c3a753ebfe8b5721b911b9dce002eac5214d58b384475c434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd04b13e9bde4d1e07d681e0972b1b5270bd7f5911e7904350e783997f3ac96->leave($__internal_2fd04b13e9bde4d1e07d681e0972b1b5270bd7f5911e7904350e783997f3ac96_prof);

        
        $__internal_0b30b3b38bb1eb6c3a753ebfe8b5721b911b9dce002eac5214d58b384475c434->leave($__internal_0b30b3b38bb1eb6c3a753ebfe8b5721b911b9dce002eac5214d58b384475c434_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_adb14dc05ba573980a91b5ef0cf4f7bce74c231852d240ad4bd60effb2ea6b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb14dc05ba573980a91b5ef0cf4f7bce74c231852d240ad4bd60effb2ea6b9c->enter($__internal_adb14dc05ba573980a91b5ef0cf4f7bce74c231852d240ad4bd60effb2ea6b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_240baeb6e18fdb9c903f5f17f1edfd83d40f15671ac2f3eac7c296128027d210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240baeb6e18fdb9c903f5f17f1edfd83d40f15671ac2f3eac7c296128027d210->enter($__internal_240baeb6e18fdb9c903f5f17f1edfd83d40f15671ac2f3eac7c296128027d210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_240baeb6e18fdb9c903f5f17f1edfd83d40f15671ac2f3eac7c296128027d210->leave($__internal_240baeb6e18fdb9c903f5f17f1edfd83d40f15671ac2f3eac7c296128027d210_prof);

        
        $__internal_adb14dc05ba573980a91b5ef0cf4f7bce74c231852d240ad4bd60effb2ea6b9c->leave($__internal_adb14dc05ba573980a91b5ef0cf4f7bce74c231852d240ad4bd60effb2ea6b9c_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_f4a07a2f35be28f0c0c398eb6ec335dec0eb270cf5640e67ebaa1c9dca4c6230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a07a2f35be28f0c0c398eb6ec335dec0eb270cf5640e67ebaa1c9dca4c6230->enter($__internal_f4a07a2f35be28f0c0c398eb6ec335dec0eb270cf5640e67ebaa1c9dca4c6230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_264e1f0cdd9ff8fee40d1b455d4fcddf467fd8471050baa7944e05e04756362b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264e1f0cdd9ff8fee40d1b455d4fcddf467fd8471050baa7944e05e04756362b->enter($__internal_264e1f0cdd9ff8fee40d1b455d4fcddf467fd8471050baa7944e05e04756362b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-profile\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_264e1f0cdd9ff8fee40d1b455d4fcddf467fd8471050baa7944e05e04756362b->leave($__internal_264e1f0cdd9ff8fee40d1b455d4fcddf467fd8471050baa7944e05e04756362b_prof);

        
        $__internal_f4a07a2f35be28f0c0c398eb6ec335dec0eb270cf5640e67ebaa1c9dca4c6230->leave($__internal_f4a07a2f35be28f0c0c398eb6ec335dec0eb270cf5640e67ebaa1c9dca4c6230_prof);

    }

    // line 11
    public function block_profile($context, array $blocks = array())
    {
        $__internal_b9efe11ab094971cddade1879a4171bb38ac022affe970022e1a93e868740c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9efe11ab094971cddade1879a4171bb38ac022affe970022e1a93e868740c2c->enter($__internal_b9efe11ab094971cddade1879a4171bb38ac022affe970022e1a93e868740c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_e0765a5f99ca0665380b8dcc0e252fd8c71e70e5d784cf2435f1204f79b3120f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0765a5f99ca0665380b8dcc0e252fd8c71e70e5d784cf2435f1204f79b3120f->enter($__internal_e0765a5f99ca0665380b8dcc0e252fd8c71e70e5d784cf2435f1204f79b3120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

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
        
        $__internal_e0765a5f99ca0665380b8dcc0e252fd8c71e70e5d784cf2435f1204f79b3120f->leave($__internal_e0765a5f99ca0665380b8dcc0e252fd8c71e70e5d784cf2435f1204f79b3120f_prof);

        
        $__internal_b9efe11ab094971cddade1879a4171bb38ac022affe970022e1a93e868740c2c->leave($__internal_b9efe11ab094971cddade1879a4171bb38ac022affe970022e1a93e868740c2c_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bea51c4720af35bef0afea6ac6f8b8b45d487a3468c80239bd39172aa5ce50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bea51c4720af35bef0afea6ac6f8b8b45d487a3468c80239bd39172aa5ce50d->enter($__internal_3bea51c4720af35bef0afea6ac6f8b8b45d487a3468c80239bd39172aa5ce50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d85b525b54335e5cdaee4304991cb1e42573de5b187e0473347fe9da5007a8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85b525b54335e5cdaee4304991cb1e42573de5b187e0473347fe9da5007a8ff->enter($__internal_d85b525b54335e5cdaee4304991cb1e42573de5b187e0473347fe9da5007a8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "                        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 26)->display($context);
        // line 27
        echo "                    ";
        
        $__internal_d85b525b54335e5cdaee4304991cb1e42573de5b187e0473347fe9da5007a8ff->leave($__internal_d85b525b54335e5cdaee4304991cb1e42573de5b187e0473347fe9da5007a8ff_prof);

        
        $__internal_3bea51c4720af35bef0afea6ac6f8b8b45d487a3468c80239bd39172aa5ce50d->leave($__internal_3bea51c4720af35bef0afea6ac6f8b8b45d487a3468c80239bd39172aa5ce50d_prof);

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
