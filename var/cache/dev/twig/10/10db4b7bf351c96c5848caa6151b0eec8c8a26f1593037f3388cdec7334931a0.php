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
        $__internal_9ddebf66751bf47dbbd4c694d24b67964efea9d120b8a33cd706d9ae0c5a982c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ddebf66751bf47dbbd4c694d24b67964efea9d120b8a33cd706d9ae0c5a982c->enter($__internal_9ddebf66751bf47dbbd4c694d24b67964efea9d120b8a33cd706d9ae0c5a982c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_935d960d5118c8035f2b3eb00b2b68bb95b0cd2fce73600c05f62421bec035ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935d960d5118c8035f2b3eb00b2b68bb95b0cd2fce73600c05f62421bec035ba->enter($__internal_935d960d5118c8035f2b3eb00b2b68bb95b0cd2fce73600c05f62421bec035ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ddebf66751bf47dbbd4c694d24b67964efea9d120b8a33cd706d9ae0c5a982c->leave($__internal_9ddebf66751bf47dbbd4c694d24b67964efea9d120b8a33cd706d9ae0c5a982c_prof);

        
        $__internal_935d960d5118c8035f2b3eb00b2b68bb95b0cd2fce73600c05f62421bec035ba->leave($__internal_935d960d5118c8035f2b3eb00b2b68bb95b0cd2fce73600c05f62421bec035ba_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_9f985a58670d91f3eb5768ea6653b0a7dac3ad406871aff8d1d5ea4eb4874c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f985a58670d91f3eb5768ea6653b0a7dac3ad406871aff8d1d5ea4eb4874c16->enter($__internal_9f985a58670d91f3eb5768ea6653b0a7dac3ad406871aff8d1d5ea4eb4874c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_6b9a436d266cd0fb890f89bbe6b73b691ce589cd34b5cfca23af860a69260e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9a436d266cd0fb890f89bbe6b73b691ce589cd34b5cfca23af860a69260e16->enter($__internal_6b9a436d266cd0fb890f89bbe6b73b691ce589cd34b5cfca23af860a69260e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_6b9a436d266cd0fb890f89bbe6b73b691ce589cd34b5cfca23af860a69260e16->leave($__internal_6b9a436d266cd0fb890f89bbe6b73b691ce589cd34b5cfca23af860a69260e16_prof);

        
        $__internal_9f985a58670d91f3eb5768ea6653b0a7dac3ad406871aff8d1d5ea4eb4874c16->leave($__internal_9f985a58670d91f3eb5768ea6653b0a7dac3ad406871aff8d1d5ea4eb4874c16_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_6958f62753ece24c21b3b2c39ff380f036083d3b8be1517a82f1c62c7bfcacbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6958f62753ece24c21b3b2c39ff380f036083d3b8be1517a82f1c62c7bfcacbe->enter($__internal_6958f62753ece24c21b3b2c39ff380f036083d3b8be1517a82f1c62c7bfcacbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_50767c993b1255d6473b513fb92446e03a40c6e2fdfc60466e756be3e65269ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50767c993b1255d6473b513fb92446e03a40c6e2fdfc60466e756be3e65269ee->enter($__internal_50767c993b1255d6473b513fb92446e03a40c6e2fdfc60466e756be3e65269ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-register\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_50767c993b1255d6473b513fb92446e03a40c6e2fdfc60466e756be3e65269ee->leave($__internal_50767c993b1255d6473b513fb92446e03a40c6e2fdfc60466e756be3e65269ee_prof);

        
        $__internal_6958f62753ece24c21b3b2c39ff380f036083d3b8be1517a82f1c62c7bfcacbe->leave($__internal_6958f62753ece24c21b3b2c39ff380f036083d3b8be1517a82f1c62c7bfcacbe_prof);

    }

    // line 11
    public function block_register($context, array $blocks = array())
    {
        $__internal_a1c1c5a1fdcbdd8428711fe8c3d0f24051e606ae863a05ce9ac823eca803c9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c1c5a1fdcbdd8428711fe8c3d0f24051e606ae863a05ce9ac823eca803c9fa->enter($__internal_a1c1c5a1fdcbdd8428711fe8c3d0f24051e606ae863a05ce9ac823eca803c9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_8d9b05cd6f90289492ba3777236f16410dbd557baaf86ead54b3ce6f004faa88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9b05cd6f90289492ba3777236f16410dbd557baaf86ead54b3ce6f004faa88->enter($__internal_8d9b05cd6f90289492ba3777236f16410dbd557baaf86ead54b3ce6f004faa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

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
        
        $__internal_8d9b05cd6f90289492ba3777236f16410dbd557baaf86ead54b3ce6f004faa88->leave($__internal_8d9b05cd6f90289492ba3777236f16410dbd557baaf86ead54b3ce6f004faa88_prof);

        
        $__internal_a1c1c5a1fdcbdd8428711fe8c3d0f24051e606ae863a05ce9ac823eca803c9fa->leave($__internal_a1c1c5a1fdcbdd8428711fe8c3d0f24051e606ae863a05ce9ac823eca803c9fa_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_030a2fdd19290e5bb15b9857d1d081bc277cb6890d680cfcf55cd75df330f4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030a2fdd19290e5bb15b9857d1d081bc277cb6890d680cfcf55cd75df330f4b7->enter($__internal_030a2fdd19290e5bb15b9857d1d081bc277cb6890d680cfcf55cd75df330f4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5df18fe5f59db72269012c46180decda5df67772809763c5e81328a0b4e4e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5df18fe5f59db72269012c46180decda5df67772809763c5e81328a0b4e4e42->enter($__internal_f5df18fe5f59db72269012c46180decda5df67772809763c5e81328a0b4e4e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 25)->display($context);
        // line 26
        echo "                    ";
        
        $__internal_f5df18fe5f59db72269012c46180decda5df67772809763c5e81328a0b4e4e42->leave($__internal_f5df18fe5f59db72269012c46180decda5df67772809763c5e81328a0b4e4e42_prof);

        
        $__internal_030a2fdd19290e5bb15b9857d1d081bc277cb6890d680cfcf55cd75df330f4b7->leave($__internal_030a2fdd19290e5bb15b9857d1d081bc277cb6890d680cfcf55cd75df330f4b7_prof);

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
