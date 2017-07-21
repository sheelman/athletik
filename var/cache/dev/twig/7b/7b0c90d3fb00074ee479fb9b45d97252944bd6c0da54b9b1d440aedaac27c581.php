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
        $__internal_3ed28e5f4dafae96f82f81997f95fa4572127a099e4523139ffd622d7165624b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed28e5f4dafae96f82f81997f95fa4572127a099e4523139ffd622d7165624b->enter($__internal_3ed28e5f4dafae96f82f81997f95fa4572127a099e4523139ffd622d7165624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f95586bd8c5cfbb381c8c3cab8fcaed5966cc38cabfae775156a5df5cdc9f143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95586bd8c5cfbb381c8c3cab8fcaed5966cc38cabfae775156a5df5cdc9f143->enter($__internal_f95586bd8c5cfbb381c8c3cab8fcaed5966cc38cabfae775156a5df5cdc9f143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3ed28e5f4dafae96f82f81997f95fa4572127a099e4523139ffd622d7165624b->leave($__internal_3ed28e5f4dafae96f82f81997f95fa4572127a099e4523139ffd622d7165624b_prof);

        
        $__internal_f95586bd8c5cfbb381c8c3cab8fcaed5966cc38cabfae775156a5df5cdc9f143->leave($__internal_f95586bd8c5cfbb381c8c3cab8fcaed5966cc38cabfae775156a5df5cdc9f143_prof);

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
