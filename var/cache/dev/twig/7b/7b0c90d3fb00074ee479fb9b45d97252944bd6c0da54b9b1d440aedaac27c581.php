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
        $__internal_22f27d048075326e97cf4fcd07b1e946a377d0b1e3e9c80cfbb22cf4d54a094d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f27d048075326e97cf4fcd07b1e946a377d0b1e3e9c80cfbb22cf4d54a094d->enter($__internal_22f27d048075326e97cf4fcd07b1e946a377d0b1e3e9c80cfbb22cf4d54a094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c952b9b1a38a68c575c44e2563169e2a398cb9ff2abd6cee9600e1bd48ceb341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c952b9b1a38a68c575c44e2563169e2a398cb9ff2abd6cee9600e1bd48ceb341->enter($__internal_c952b9b1a38a68c575c44e2563169e2a398cb9ff2abd6cee9600e1bd48ceb341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_22f27d048075326e97cf4fcd07b1e946a377d0b1e3e9c80cfbb22cf4d54a094d->leave($__internal_22f27d048075326e97cf4fcd07b1e946a377d0b1e3e9c80cfbb22cf4d54a094d_prof);

        
        $__internal_c952b9b1a38a68c575c44e2563169e2a398cb9ff2abd6cee9600e1bd48ceb341->leave($__internal_c952b9b1a38a68c575c44e2563169e2a398cb9ff2abd6cee9600e1bd48ceb341_prof);

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
