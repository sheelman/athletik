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
        $__internal_ff412ca42e06bf40ac472bc60a81a4ddd2d7aaeaac380d2ce1ca9a82defb43e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff412ca42e06bf40ac472bc60a81a4ddd2d7aaeaac380d2ce1ca9a82defb43e5->enter($__internal_ff412ca42e06bf40ac472bc60a81a4ddd2d7aaeaac380d2ce1ca9a82defb43e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f2040077980bfb7ab2ce8eec70b2a1278f64e6105c53d23293017a71ef9ba684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2040077980bfb7ab2ce8eec70b2a1278f64e6105c53d23293017a71ef9ba684->enter($__internal_f2040077980bfb7ab2ce8eec70b2a1278f64e6105c53d23293017a71ef9ba684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ff412ca42e06bf40ac472bc60a81a4ddd2d7aaeaac380d2ce1ca9a82defb43e5->leave($__internal_ff412ca42e06bf40ac472bc60a81a4ddd2d7aaeaac380d2ce1ca9a82defb43e5_prof);

        
        $__internal_f2040077980bfb7ab2ce8eec70b2a1278f64e6105c53d23293017a71ef9ba684->leave($__internal_f2040077980bfb7ab2ce8eec70b2a1278f64e6105c53d23293017a71ef9ba684_prof);

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
