<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_e856c95b5294dd4e4a02e90672f8d06ce400da92f8f5a072059d5bb10d3475fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e856c95b5294dd4e4a02e90672f8d06ce400da92f8f5a072059d5bb10d3475fd->enter($__internal_e856c95b5294dd4e4a02e90672f8d06ce400da92f8f5a072059d5bb10d3475fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a6d95255bcaf5dbcd5adced12401a6c02ce1f0076ba0a91036750da88afe2cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d95255bcaf5dbcd5adced12401a6c02ce1f0076ba0a91036750da88afe2cd8->enter($__internal_a6d95255bcaf5dbcd5adced12401a6c02ce1f0076ba0a91036750da88afe2cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e856c95b5294dd4e4a02e90672f8d06ce400da92f8f5a072059d5bb10d3475fd->leave($__internal_e856c95b5294dd4e4a02e90672f8d06ce400da92f8f5a072059d5bb10d3475fd_prof);

        
        $__internal_a6d95255bcaf5dbcd5adced12401a6c02ce1f0076ba0a91036750da88afe2cd8->leave($__internal_a6d95255bcaf5dbcd5adced12401a6c02ce1f0076ba0a91036750da88afe2cd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
