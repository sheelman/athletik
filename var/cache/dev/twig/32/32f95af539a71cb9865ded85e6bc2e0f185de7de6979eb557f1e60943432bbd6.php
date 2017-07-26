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
        $__internal_e418ad401262efa0daa0410ba711f2b505459bd0a06df36e21d3e6d423de95c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e418ad401262efa0daa0410ba711f2b505459bd0a06df36e21d3e6d423de95c6->enter($__internal_e418ad401262efa0daa0410ba711f2b505459bd0a06df36e21d3e6d423de95c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_f64f42182c06cd5b39b558ee2ba2b041d2d261d637fa5fae1f16e5e895c46726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64f42182c06cd5b39b558ee2ba2b041d2d261d637fa5fae1f16e5e895c46726->enter($__internal_f64f42182c06cd5b39b558ee2ba2b041d2d261d637fa5fae1f16e5e895c46726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e418ad401262efa0daa0410ba711f2b505459bd0a06df36e21d3e6d423de95c6->leave($__internal_e418ad401262efa0daa0410ba711f2b505459bd0a06df36e21d3e6d423de95c6_prof);

        
        $__internal_f64f42182c06cd5b39b558ee2ba2b041d2d261d637fa5fae1f16e5e895c46726->leave($__internal_f64f42182c06cd5b39b558ee2ba2b041d2d261d637fa5fae1f16e5e895c46726_prof);

    }

    // line 3
    public function block_timer($context, array $blocks = array())
    {
        $__internal_0526ab153ca7b964921a4fe791630483ae2abcd6ab24a98d4c59dd58fb9bec50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0526ab153ca7b964921a4fe791630483ae2abcd6ab24a98d4c59dd58fb9bec50->enter($__internal_0526ab153ca7b964921a4fe791630483ae2abcd6ab24a98d4c59dd58fb9bec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        $__internal_99bb190bef5f066b8f56a873ef7bfb5bd4dbc8ea44127b25399621dc5ed7052f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bb190bef5f066b8f56a873ef7bfb5bd4dbc8ea44127b25399621dc5ed7052f->enter($__internal_99bb190bef5f066b8f56a873ef7bfb5bd4dbc8ea44127b25399621dc5ed7052f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timer"));

        
        $__internal_99bb190bef5f066b8f56a873ef7bfb5bd4dbc8ea44127b25399621dc5ed7052f->leave($__internal_99bb190bef5f066b8f56a873ef7bfb5bd4dbc8ea44127b25399621dc5ed7052f_prof);

        
        $__internal_0526ab153ca7b964921a4fe791630483ae2abcd6ab24a98d4c59dd58fb9bec50->leave($__internal_0526ab153ca7b964921a4fe791630483ae2abcd6ab24a98d4c59dd58fb9bec50_prof);

    }

    // line 5
    public function block_fin($context, array $blocks = array())
    {
        $__internal_5f567c57699ec01f88f1a1f3afd530539d89499510fdb0703ca59ac46f443596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f567c57699ec01f88f1a1f3afd530539d89499510fdb0703ca59ac46f443596->enter($__internal_5f567c57699ec01f88f1a1f3afd530539d89499510fdb0703ca59ac46f443596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        $__internal_400a53fc6a27bc7d213d08353a94d39144a17b35f79ee9f571bdc7774d1c642a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400a53fc6a27bc7d213d08353a94d39144a17b35f79ee9f571bdc7774d1c642a->enter($__internal_400a53fc6a27bc7d213d08353a94d39144a17b35f79ee9f571bdc7774d1c642a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fin"));

        // line 6
        echo "    <div class=\"next-section\">
        <a class=\"go-to-profile\"><span></span></a>
    </div><!-- /.next-section -->
";
        
        $__internal_400a53fc6a27bc7d213d08353a94d39144a17b35f79ee9f571bdc7774d1c642a->leave($__internal_400a53fc6a27bc7d213d08353a94d39144a17b35f79ee9f571bdc7774d1c642a_prof);

        
        $__internal_5f567c57699ec01f88f1a1f3afd530539d89499510fdb0703ca59ac46f443596->leave($__internal_5f567c57699ec01f88f1a1f3afd530539d89499510fdb0703ca59ac46f443596_prof);

    }

    // line 11
    public function block_profile($context, array $blocks = array())
    {
        $__internal_7f7f30e49ef1c82c906ec0202800e04fb599531090476c1bca5c4ae5170bd0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7f30e49ef1c82c906ec0202800e04fb599531090476c1bca5c4ae5170bd0ec->enter($__internal_7f7f30e49ef1c82c906ec0202800e04fb599531090476c1bca5c4ae5170bd0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_3dbf1317e0f0cbb490b656309fe35b737dd434c44135220a812be4a6f652878a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbf1317e0f0cbb490b656309fe35b737dd434c44135220a812be4a6f652878a->enter($__internal_3dbf1317e0f0cbb490b656309fe35b737dd434c44135220a812be4a6f652878a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

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
        
        $__internal_3dbf1317e0f0cbb490b656309fe35b737dd434c44135220a812be4a6f652878a->leave($__internal_3dbf1317e0f0cbb490b656309fe35b737dd434c44135220a812be4a6f652878a_prof);

        
        $__internal_7f7f30e49ef1c82c906ec0202800e04fb599531090476c1bca5c4ae5170bd0ec->leave($__internal_7f7f30e49ef1c82c906ec0202800e04fb599531090476c1bca5c4ae5170bd0ec_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3618e0b981379a2d34d2c917e5bff317092d7549a4e24f19d2c5929b2c868bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3618e0b981379a2d34d2c917e5bff317092d7549a4e24f19d2c5929b2c868bdb->enter($__internal_3618e0b981379a2d34d2c917e5bff317092d7549a4e24f19d2c5929b2c868bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff325da865fa2a4e7c2666b11fe4f9941ae4b39a5dfbc59e032dbd50db4771a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff325da865fa2a4e7c2666b11fe4f9941ae4b39a5dfbc59e032dbd50db4771a1->enter($__internal_ff325da865fa2a4e7c2666b11fe4f9941ae4b39a5dfbc59e032dbd50db4771a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "                        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 26)->display($context);
        // line 27
        echo "                    ";
        
        $__internal_ff325da865fa2a4e7c2666b11fe4f9941ae4b39a5dfbc59e032dbd50db4771a1->leave($__internal_ff325da865fa2a4e7c2666b11fe4f9941ae4b39a5dfbc59e032dbd50db4771a1_prof);

        
        $__internal_3618e0b981379a2d34d2c917e5bff317092d7549a4e24f19d2c5929b2c868bdb->leave($__internal_3618e0b981379a2d34d2c917e5bff317092d7549a4e24f19d2c5929b2c868bdb_prof);

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
