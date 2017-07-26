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
        $__internal_625bcf80964133328144fe19f4bb31a64df0bd4a7b09721d4be00919e13c1de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625bcf80964133328144fe19f4bb31a64df0bd4a7b09721d4be00919e13c1de2->enter($__internal_625bcf80964133328144fe19f4bb31a64df0bd4a7b09721d4be00919e13c1de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_bcb809d3cea9604c498d193f2306e3dc3847a091089efbb6ad6c0d104ff1f605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb809d3cea9604c498d193f2306e3dc3847a091089efbb6ad6c0d104ff1f605->enter($__internal_bcb809d3cea9604c498d193f2306e3dc3847a091089efbb6ad6c0d104ff1f605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_625bcf80964133328144fe19f4bb31a64df0bd4a7b09721d4be00919e13c1de2->leave($__internal_625bcf80964133328144fe19f4bb31a64df0bd4a7b09721d4be00919e13c1de2_prof);

        
        $__internal_bcb809d3cea9604c498d193f2306e3dc3847a091089efbb6ad6c0d104ff1f605->leave($__internal_bcb809d3cea9604c498d193f2306e3dc3847a091089efbb6ad6c0d104ff1f605_prof);

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
