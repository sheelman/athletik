<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c8a9c252cf37f3f34a850024484e3a276b174216ee973c7cc2165b2d835caa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8a9c252cf37f3f34a850024484e3a276b174216ee973c7cc2165b2d835caa3->enter($__internal_1c8a9c252cf37f3f34a850024484e3a276b174216ee973c7cc2165b2d835caa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_aaeddbc5d15cf6001b1d4332bdfdc4fdaab917800b5fb70b02d3f840ee4a9e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaeddbc5d15cf6001b1d4332bdfdc4fdaab917800b5fb70b02d3f840ee4a9e32->enter($__internal_aaeddbc5d15cf6001b1d4332bdfdc4fdaab917800b5fb70b02d3f840ee4a9e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1c8a9c252cf37f3f34a850024484e3a276b174216ee973c7cc2165b2d835caa3->leave($__internal_1c8a9c252cf37f3f34a850024484e3a276b174216ee973c7cc2165b2d835caa3_prof);

        
        $__internal_aaeddbc5d15cf6001b1d4332bdfdc4fdaab917800b5fb70b02d3f840ee4a9e32->leave($__internal_aaeddbc5d15cf6001b1d4332bdfdc4fdaab917800b5fb70b02d3f840ee4a9e32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
