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
        $__internal_ecc0b482daefb902e6a0c95bc37544213a6e85495acb20a7613db3094579bd25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc0b482daefb902e6a0c95bc37544213a6e85495acb20a7613db3094579bd25->enter($__internal_ecc0b482daefb902e6a0c95bc37544213a6e85495acb20a7613db3094579bd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_19142def92fd24e1e1a1d3fc130ed6899fa1b54ecda2beb889863bf470e5a5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19142def92fd24e1e1a1d3fc130ed6899fa1b54ecda2beb889863bf470e5a5bc->enter($__internal_19142def92fd24e1e1a1d3fc130ed6899fa1b54ecda2beb889863bf470e5a5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ecc0b482daefb902e6a0c95bc37544213a6e85495acb20a7613db3094579bd25->leave($__internal_ecc0b482daefb902e6a0c95bc37544213a6e85495acb20a7613db3094579bd25_prof);

        
        $__internal_19142def92fd24e1e1a1d3fc130ed6899fa1b54ecda2beb889863bf470e5a5bc->leave($__internal_19142def92fd24e1e1a1d3fc130ed6899fa1b54ecda2beb889863bf470e5a5bc_prof);

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
