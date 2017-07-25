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
        $__internal_e7317c0e51cf0ffd40dfb7651e8f6dae4a53d7153676f5d2b9a0d29b5b8f9c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7317c0e51cf0ffd40dfb7651e8f6dae4a53d7153676f5d2b9a0d29b5b8f9c39->enter($__internal_e7317c0e51cf0ffd40dfb7651e8f6dae4a53d7153676f5d2b9a0d29b5b8f9c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_96acd58993d0d86b5af1d8d901469acc74183f877592d0f23f922ba7bfe3cf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96acd58993d0d86b5af1d8d901469acc74183f877592d0f23f922ba7bfe3cf8b->enter($__internal_96acd58993d0d86b5af1d8d901469acc74183f877592d0f23f922ba7bfe3cf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e7317c0e51cf0ffd40dfb7651e8f6dae4a53d7153676f5d2b9a0d29b5b8f9c39->leave($__internal_e7317c0e51cf0ffd40dfb7651e8f6dae4a53d7153676f5d2b9a0d29b5b8f9c39_prof);

        
        $__internal_96acd58993d0d86b5af1d8d901469acc74183f877592d0f23f922ba7bfe3cf8b->leave($__internal_96acd58993d0d86b5af1d8d901469acc74183f877592d0f23f922ba7bfe3cf8b_prof);

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
