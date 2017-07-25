<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_7506a23659b1a1a175cd323545a2b7c0307d5b30636d09482de84a0ed26cae69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7506a23659b1a1a175cd323545a2b7c0307d5b30636d09482de84a0ed26cae69->enter($__internal_7506a23659b1a1a175cd323545a2b7c0307d5b30636d09482de84a0ed26cae69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3aa1d7c12981e6d54e62049b77602c330d9a5b1c6dff49de3fa459bb8402e66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa1d7c12981e6d54e62049b77602c330d9a5b1c6dff49de3fa459bb8402e66b->enter($__internal_3aa1d7c12981e6d54e62049b77602c330d9a5b1c6dff49de3fa459bb8402e66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7506a23659b1a1a175cd323545a2b7c0307d5b30636d09482de84a0ed26cae69->leave($__internal_7506a23659b1a1a175cd323545a2b7c0307d5b30636d09482de84a0ed26cae69_prof);

        
        $__internal_3aa1d7c12981e6d54e62049b77602c330d9a5b1c6dff49de3fa459bb8402e66b->leave($__internal_3aa1d7c12981e6d54e62049b77602c330d9a5b1c6dff49de3fa459bb8402e66b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
