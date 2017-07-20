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
        $__internal_198abff45a105b439ed695678d447e022ad700e3c271c4195b8755eb2aae1e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198abff45a105b439ed695678d447e022ad700e3c271c4195b8755eb2aae1e4c->enter($__internal_198abff45a105b439ed695678d447e022ad700e3c271c4195b8755eb2aae1e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c259799ff48fe8de4b3198f611c1f89d7b7a32fe584ff8d8f58419d70fe57430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c259799ff48fe8de4b3198f611c1f89d7b7a32fe584ff8d8f58419d70fe57430->enter($__internal_c259799ff48fe8de4b3198f611c1f89d7b7a32fe584ff8d8f58419d70fe57430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_198abff45a105b439ed695678d447e022ad700e3c271c4195b8755eb2aae1e4c->leave($__internal_198abff45a105b439ed695678d447e022ad700e3c271c4195b8755eb2aae1e4c_prof);

        
        $__internal_c259799ff48fe8de4b3198f611c1f89d7b7a32fe584ff8d8f58419d70fe57430->leave($__internal_c259799ff48fe8de4b3198f611c1f89d7b7a32fe584ff8d8f58419d70fe57430_prof);

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
