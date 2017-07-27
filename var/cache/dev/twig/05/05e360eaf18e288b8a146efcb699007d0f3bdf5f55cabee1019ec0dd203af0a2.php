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
        $__internal_14343574a8ad39c45c969548eb20d601136e4369cc1534e9c4f75202c5c06a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14343574a8ad39c45c969548eb20d601136e4369cc1534e9c4f75202c5c06a34->enter($__internal_14343574a8ad39c45c969548eb20d601136e4369cc1534e9c4f75202c5c06a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e2ca2474f5259e4f93c71791bdfebbadf3429ff718406a9e3e0ed427c91d9307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ca2474f5259e4f93c71791bdfebbadf3429ff718406a9e3e0ed427c91d9307->enter($__internal_e2ca2474f5259e4f93c71791bdfebbadf3429ff718406a9e3e0ed427c91d9307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14343574a8ad39c45c969548eb20d601136e4369cc1534e9c4f75202c5c06a34->leave($__internal_14343574a8ad39c45c969548eb20d601136e4369cc1534e9c4f75202c5c06a34_prof);

        
        $__internal_e2ca2474f5259e4f93c71791bdfebbadf3429ff718406a9e3e0ed427c91d9307->leave($__internal_e2ca2474f5259e4f93c71791bdfebbadf3429ff718406a9e3e0ed427c91d9307_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_803f1dadc1edea31f092d59d43b1218c108cdcaadaed22efeb79f6c1a0daeafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803f1dadc1edea31f092d59d43b1218c108cdcaadaed22efeb79f6c1a0daeafa->enter($__internal_803f1dadc1edea31f092d59d43b1218c108cdcaadaed22efeb79f6c1a0daeafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_51ecf53c049597a54955a6358713feee99b46d1ff27985c6c0d9804ee279750d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ecf53c049597a54955a6358713feee99b46d1ff27985c6c0d9804ee279750d->enter($__internal_51ecf53c049597a54955a6358713feee99b46d1ff27985c6c0d9804ee279750d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_51ecf53c049597a54955a6358713feee99b46d1ff27985c6c0d9804ee279750d->leave($__internal_51ecf53c049597a54955a6358713feee99b46d1ff27985c6c0d9804ee279750d_prof);

        
        $__internal_803f1dadc1edea31f092d59d43b1218c108cdcaadaed22efeb79f6c1a0daeafa->leave($__internal_803f1dadc1edea31f092d59d43b1218c108cdcaadaed22efeb79f6c1a0daeafa_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_dcf53c18301f00d1211529a451bb6e720f63dba15ec2338f33d355079213354a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf53c18301f00d1211529a451bb6e720f63dba15ec2338f33d355079213354a->enter($__internal_dcf53c18301f00d1211529a451bb6e720f63dba15ec2338f33d355079213354a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_64072624f14fee69fd5e35c98df9d534752ce7b426867ffb2c8f919d0a6180c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64072624f14fee69fd5e35c98df9d534752ce7b426867ffb2c8f919d0a6180c4->enter($__internal_64072624f14fee69fd5e35c98df9d534752ce7b426867ffb2c8f919d0a6180c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-login\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_64072624f14fee69fd5e35c98df9d534752ce7b426867ffb2c8f919d0a6180c4->leave($__internal_64072624f14fee69fd5e35c98df9d534752ce7b426867ffb2c8f919d0a6180c4_prof);

        
        $__internal_dcf53c18301f00d1211529a451bb6e720f63dba15ec2338f33d355079213354a->leave($__internal_dcf53c18301f00d1211529a451bb6e720f63dba15ec2338f33d355079213354a_prof);

    }

    // line 11
    public function block_conexion($context, array $blocks = array())
    {
        $__internal_bc6ace9e79ead3429d0328f2080c3987f251d5b4fdcf731eb318464cfd8e12f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6ace9e79ead3429d0328f2080c3987f251d5b4fdcf731eb318464cfd8e12f4->enter($__internal_bc6ace9e79ead3429d0328f2080c3987f251d5b4fdcf731eb318464cfd8e12f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

        $__internal_f4e37ffb93ec007879f15fbcfd23203bcd7c0d3daa95a7139b23d4edfe185341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e37ffb93ec007879f15fbcfd23203bcd7c0d3daa95a7139b23d4edfe185341->enter($__internal_f4e37ffb93ec007879f15fbcfd23203bcd7c0d3daa95a7139b23d4edfe185341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conexion"));

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
        
        $__internal_f4e37ffb93ec007879f15fbcfd23203bcd7c0d3daa95a7139b23d4edfe185341->leave($__internal_f4e37ffb93ec007879f15fbcfd23203bcd7c0d3daa95a7139b23d4edfe185341_prof);

        
        $__internal_bc6ace9e79ead3429d0328f2080c3987f251d5b4fdcf731eb318464cfd8e12f4->leave($__internal_bc6ace9e79ead3429d0328f2080c3987f251d5b4fdcf731eb318464cfd8e12f4_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0269ef7447aac9187b74a9cc794989d14d203e468452ed6afc1853576263b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0269ef7447aac9187b74a9cc794989d14d203e468452ed6afc1853576263b6e->enter($__internal_c0269ef7447aac9187b74a9cc794989d14d203e468452ed6afc1853576263b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_77634d0ec3b017d7920dcf1da6ad7c129f22a882f8862c297e091a609a9e7e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77634d0ec3b017d7920dcf1da6ad7c129f22a882f8862c297e091a609a9e7e1b->enter($__internal_77634d0ec3b017d7920dcf1da6ad7c129f22a882f8862c297e091a609a9e7e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
                    ";
        
        $__internal_77634d0ec3b017d7920dcf1da6ad7c129f22a882f8862c297e091a609a9e7e1b->leave($__internal_77634d0ec3b017d7920dcf1da6ad7c129f22a882f8862c297e091a609a9e7e1b_prof);

        
        $__internal_c0269ef7447aac9187b74a9cc794989d14d203e468452ed6afc1853576263b6e->leave($__internal_c0269ef7447aac9187b74a9cc794989d14d203e468452ed6afc1853576263b6e_prof);

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
