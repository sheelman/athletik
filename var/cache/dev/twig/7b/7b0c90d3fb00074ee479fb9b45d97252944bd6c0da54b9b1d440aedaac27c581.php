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
        $__internal_a9ea780438f36ba808935bea4a65d1c133cd360dcb82bd9afc86999d322d4ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ea780438f36ba808935bea4a65d1c133cd360dcb82bd9afc86999d322d4ce4->enter($__internal_a9ea780438f36ba808935bea4a65d1c133cd360dcb82bd9afc86999d322d4ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d6f5d5b7f1df687c33fac42a54649a0c2fcf31f4595722a61d38867346bef9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f5d5b7f1df687c33fac42a54649a0c2fcf31f4595722a61d38867346bef9f6->enter($__internal_d6f5d5b7f1df687c33fac42a54649a0c2fcf31f4595722a61d38867346bef9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a9ea780438f36ba808935bea4a65d1c133cd360dcb82bd9afc86999d322d4ce4->leave($__internal_a9ea780438f36ba808935bea4a65d1c133cd360dcb82bd9afc86999d322d4ce4_prof);

        
        $__internal_d6f5d5b7f1df687c33fac42a54649a0c2fcf31f4595722a61d38867346bef9f6->leave($__internal_d6f5d5b7f1df687c33fac42a54649a0c2fcf31f4595722a61d38867346bef9f6_prof);

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
