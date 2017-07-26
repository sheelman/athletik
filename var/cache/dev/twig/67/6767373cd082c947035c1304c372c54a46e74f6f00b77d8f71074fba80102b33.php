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
        $__internal_186f581a213a4c6d5ac3520e32bae87d9c6197ed21217f55a74eb108f7efae7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186f581a213a4c6d5ac3520e32bae87d9c6197ed21217f55a74eb108f7efae7d->enter($__internal_186f581a213a4c6d5ac3520e32bae87d9c6197ed21217f55a74eb108f7efae7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1146a7bf423e7ef3f45c54c69e26737bdfe3aec10d93c8401889cba78a9bf66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1146a7bf423e7ef3f45c54c69e26737bdfe3aec10d93c8401889cba78a9bf66a->enter($__internal_1146a7bf423e7ef3f45c54c69e26737bdfe3aec10d93c8401889cba78a9bf66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_186f581a213a4c6d5ac3520e32bae87d9c6197ed21217f55a74eb108f7efae7d->leave($__internal_186f581a213a4c6d5ac3520e32bae87d9c6197ed21217f55a74eb108f7efae7d_prof);

        
        $__internal_1146a7bf423e7ef3f45c54c69e26737bdfe3aec10d93c8401889cba78a9bf66a->leave($__internal_1146a7bf423e7ef3f45c54c69e26737bdfe3aec10d93c8401889cba78a9bf66a_prof);

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
