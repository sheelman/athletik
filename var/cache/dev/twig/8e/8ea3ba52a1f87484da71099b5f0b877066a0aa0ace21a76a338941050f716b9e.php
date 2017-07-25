<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_080b1b81a96a3acaa2397a68fb63b9c44cd5bf2d588c57477472921f0fdcdc20 extends Twig_Template
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
        $__internal_7aff98e91def4a368933e3993a7a88f2e79a7f3df4004ba642fc085dcd0c7456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aff98e91def4a368933e3993a7a88f2e79a7f3df4004ba642fc085dcd0c7456->enter($__internal_7aff98e91def4a368933e3993a7a88f2e79a7f3df4004ba642fc085dcd0c7456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d0d43924822340dd466d26e524a8c0274dfa5e4f28cd686c5ee83a1c9db99c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d43924822340dd466d26e524a8c0274dfa5e4f28cd686c5ee83a1c9db99c5c->enter($__internal_d0d43924822340dd466d26e524a8c0274dfa5e4f28cd686c5ee83a1c9db99c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7aff98e91def4a368933e3993a7a88f2e79a7f3df4004ba642fc085dcd0c7456->leave($__internal_7aff98e91def4a368933e3993a7a88f2e79a7f3df4004ba642fc085dcd0c7456_prof);

        
        $__internal_d0d43924822340dd466d26e524a8c0274dfa5e4f28cd686c5ee83a1c9db99c5c->leave($__internal_d0d43924822340dd466d26e524a8c0274dfa5e4f28cd686c5ee83a1c9db99c5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
