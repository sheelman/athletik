<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_b2e72d9d4b14170ea6c7a7f28b1cad0e6deffe2d148b9118587e3f5ebc5b9a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e72d9d4b14170ea6c7a7f28b1cad0e6deffe2d148b9118587e3f5ebc5b9a6a->enter($__internal_b2e72d9d4b14170ea6c7a7f28b1cad0e6deffe2d148b9118587e3f5ebc5b9a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c4a41adc2a4e83b8a6672f68c1db8d04e20509297731b9502164d6a767c437be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a41adc2a4e83b8a6672f68c1db8d04e20509297731b9502164d6a767c437be->enter($__internal_c4a41adc2a4e83b8a6672f68c1db8d04e20509297731b9502164d6a767c437be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b2e72d9d4b14170ea6c7a7f28b1cad0e6deffe2d148b9118587e3f5ebc5b9a6a->leave($__internal_b2e72d9d4b14170ea6c7a7f28b1cad0e6deffe2d148b9118587e3f5ebc5b9a6a_prof);

        
        $__internal_c4a41adc2a4e83b8a6672f68c1db8d04e20509297731b9502164d6a767c437be->leave($__internal_c4a41adc2a4e83b8a6672f68c1db8d04e20509297731b9502164d6a767c437be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
