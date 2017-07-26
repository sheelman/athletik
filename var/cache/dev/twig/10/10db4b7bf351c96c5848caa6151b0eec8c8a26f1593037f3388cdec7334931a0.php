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
        $__internal_f300a12e21b079199d838c7db774cd39bfa675a91c0730447daa680edbf49be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f300a12e21b079199d838c7db774cd39bfa675a91c0730447daa680edbf49be5->enter($__internal_f300a12e21b079199d838c7db774cd39bfa675a91c0730447daa680edbf49be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_3539b30eb23b7070852a7a274e8dd12d02088b58708ba111d1aa27a11023f49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3539b30eb23b7070852a7a274e8dd12d02088b58708ba111d1aa27a11023f49d->enter($__internal_3539b30eb23b7070852a7a274e8dd12d02088b58708ba111d1aa27a11023f49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f300a12e21b079199d838c7db774cd39bfa675a91c0730447daa680edbf49be5->leave($__internal_f300a12e21b079199d838c7db774cd39bfa675a91c0730447daa680edbf49be5_prof);

        
        $__internal_3539b30eb23b7070852a7a274e8dd12d02088b58708ba111d1aa27a11023f49d->leave($__internal_3539b30eb23b7070852a7a274e8dd12d02088b58708ba111d1aa27a11023f49d_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_c1e6f9d02e31b2627392d04494e8e9a470364068a3f6bc443c54db52044073a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e6f9d02e31b2627392d04494e8e9a470364068a3f6bc443c54db52044073a3->enter($__internal_c1e6f9d02e31b2627392d04494e8e9a470364068a3f6bc443c54db52044073a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_807c4f2596f13b8339a0fc652eb73679cd992e9e9cb4bcfb53c90fbca681a40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807c4f2596f13b8339a0fc652eb73679cd992e9e9cb4bcfb53c90fbca681a40e->enter($__internal_807c4f2596f13b8339a0fc652eb73679cd992e9e9cb4bcfb53c90fbca681a40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_807c4f2596f13b8339a0fc652eb73679cd992e9e9cb4bcfb53c90fbca681a40e->leave($__internal_807c4f2596f13b8339a0fc652eb73679cd992e9e9cb4bcfb53c90fbca681a40e_prof);

        
        $__internal_c1e6f9d02e31b2627392d04494e8e9a470364068a3f6bc443c54db52044073a3->leave($__internal_c1e6f9d02e31b2627392d04494e8e9a470364068a3f6bc443c54db52044073a3_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_1ce60cc0766c13be0d589830cffc7c2b7603de652929180092186af9d4d0d618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce60cc0766c13be0d589830cffc7c2b7603de652929180092186af9d4d0d618->enter($__internal_1ce60cc0766c13be0d589830cffc7c2b7603de652929180092186af9d4d0d618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_9870958c4cd337eb9e4a32c61d234737cf5418554284e02252ad52a7e8e7b08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9870958c4cd337eb9e4a32c61d234737cf5418554284e02252ad52a7e8e7b08a->enter($__internal_9870958c4cd337eb9e4a32c61d234737cf5418554284e02252ad52a7e8e7b08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-register\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_9870958c4cd337eb9e4a32c61d234737cf5418554284e02252ad52a7e8e7b08a->leave($__internal_9870958c4cd337eb9e4a32c61d234737cf5418554284e02252ad52a7e8e7b08a_prof);

        
        $__internal_1ce60cc0766c13be0d589830cffc7c2b7603de652929180092186af9d4d0d618->leave($__internal_1ce60cc0766c13be0d589830cffc7c2b7603de652929180092186af9d4d0d618_prof);

    }

    // line 11
    public function block_register($context, array $blocks = array())
    {
        $__internal_d90dc6e65b390371014e43c0d840b9a2e77a599d6db556f4fcc51924b91f966c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90dc6e65b390371014e43c0d840b9a2e77a599d6db556f4fcc51924b91f966c->enter($__internal_d90dc6e65b390371014e43c0d840b9a2e77a599d6db556f4fcc51924b91f966c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_33414331fccdddbc4c391288e410918e574a3ecd5de791dd469b3d341022da44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33414331fccdddbc4c391288e410918e574a3ecd5de791dd469b3d341022da44->enter($__internal_33414331fccdddbc4c391288e410918e574a3ecd5de791dd469b3d341022da44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

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
        
        $__internal_33414331fccdddbc4c391288e410918e574a3ecd5de791dd469b3d341022da44->leave($__internal_33414331fccdddbc4c391288e410918e574a3ecd5de791dd469b3d341022da44_prof);

        
        $__internal_d90dc6e65b390371014e43c0d840b9a2e77a599d6db556f4fcc51924b91f966c->leave($__internal_d90dc6e65b390371014e43c0d840b9a2e77a599d6db556f4fcc51924b91f966c_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23467805b3e79ad6894ec0a9d0385de680f648ec3274e379c2087de12bb6a9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23467805b3e79ad6894ec0a9d0385de680f648ec3274e379c2087de12bb6a9cf->enter($__internal_23467805b3e79ad6894ec0a9d0385de680f648ec3274e379c2087de12bb6a9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_364ce9bbf0de283efcdd22d51ec1a2397f68a38d2f1e721b58edeb9b1b57c1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364ce9bbf0de283efcdd22d51ec1a2397f68a38d2f1e721b58edeb9b1b57c1a0->enter($__internal_364ce9bbf0de283efcdd22d51ec1a2397f68a38d2f1e721b58edeb9b1b57c1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 25)->display($context);
        // line 26
        echo "                    ";
        
        $__internal_364ce9bbf0de283efcdd22d51ec1a2397f68a38d2f1e721b58edeb9b1b57c1a0->leave($__internal_364ce9bbf0de283efcdd22d51ec1a2397f68a38d2f1e721b58edeb9b1b57c1a0_prof);

        
        $__internal_23467805b3e79ad6894ec0a9d0385de680f648ec3274e379c2087de12bb6a9cf->leave($__internal_23467805b3e79ad6894ec0a9d0385de680f648ec3274e379c2087de12bb6a9cf_prof);

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
