<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_a0d133627f68fdc107af2268e8111e9e8d446d5e8230ce601aae7370e28deef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d133627f68fdc107af2268e8111e9e8d446d5e8230ce601aae7370e28deef3->enter($__internal_a0d133627f68fdc107af2268e8111e9e8d446d5e8230ce601aae7370e28deef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5ab1fafcd5a972b21bd97e709250b349f87131c1e7ce04c28124d8c1a7545674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab1fafcd5a972b21bd97e709250b349f87131c1e7ce04c28124d8c1a7545674->enter($__internal_5ab1fafcd5a972b21bd97e709250b349f87131c1e7ce04c28124d8c1a7545674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a0d133627f68fdc107af2268e8111e9e8d446d5e8230ce601aae7370e28deef3->leave($__internal_a0d133627f68fdc107af2268e8111e9e8d446d5e8230ce601aae7370e28deef3_prof);

        
        $__internal_5ab1fafcd5a972b21bd97e709250b349f87131c1e7ce04c28124d8c1a7545674->leave($__internal_5ab1fafcd5a972b21bd97e709250b349f87131c1e7ce04c28124d8c1a7545674_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
