<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6c8d6ea81cb8c5203800a38123efc76837a59dc5081f97ebd3ce548260dfb0ef extends Twig_Template
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
        $__internal_3eb0ed145edd6cf41b3cb8affd2248b6cfdca32b6c35b6e8d03bb09ce32c4936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb0ed145edd6cf41b3cb8affd2248b6cfdca32b6c35b6e8d03bb09ce32c4936->enter($__internal_3eb0ed145edd6cf41b3cb8affd2248b6cfdca32b6c35b6e8d03bb09ce32c4936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_54283b9501a2aa9aaf009347b59fb1415dbbcbc0d83c79be6eb0f3fcdf08afba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54283b9501a2aa9aaf009347b59fb1415dbbcbc0d83c79be6eb0f3fcdf08afba->enter($__internal_54283b9501a2aa9aaf009347b59fb1415dbbcbc0d83c79be6eb0f3fcdf08afba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3eb0ed145edd6cf41b3cb8affd2248b6cfdca32b6c35b6e8d03bb09ce32c4936->leave($__internal_3eb0ed145edd6cf41b3cb8affd2248b6cfdca32b6c35b6e8d03bb09ce32c4936_prof);

        
        $__internal_54283b9501a2aa9aaf009347b59fb1415dbbcbc0d83c79be6eb0f3fcdf08afba->leave($__internal_54283b9501a2aa9aaf009347b59fb1415dbbcbc0d83c79be6eb0f3fcdf08afba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
