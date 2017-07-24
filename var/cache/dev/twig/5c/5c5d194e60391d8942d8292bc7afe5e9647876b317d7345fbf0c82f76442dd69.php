<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_f233c73235bf1d56e258fa8b3fd9d7a0b9e1e07da310ed3ff405d7544ed6741a extends Twig_Template
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
        $__internal_c2ac6180a9bfced7dfc02161c19d0c96379e00dcf80a1f3a01709d384597cdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ac6180a9bfced7dfc02161c19d0c96379e00dcf80a1f3a01709d384597cdd4->enter($__internal_c2ac6180a9bfced7dfc02161c19d0c96379e00dcf80a1f3a01709d384597cdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_d30639dc537cce3ac5dbe0b1e6a2b7eeb281d521a0ffc54b210f1d9c91d0282d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30639dc537cce3ac5dbe0b1e6a2b7eeb281d521a0ffc54b210f1d9c91d0282d->enter($__internal_d30639dc537cce3ac5dbe0b1e6a2b7eeb281d521a0ffc54b210f1d9c91d0282d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c2ac6180a9bfced7dfc02161c19d0c96379e00dcf80a1f3a01709d384597cdd4->leave($__internal_c2ac6180a9bfced7dfc02161c19d0c96379e00dcf80a1f3a01709d384597cdd4_prof);

        
        $__internal_d30639dc537cce3ac5dbe0b1e6a2b7eeb281d521a0ffc54b210f1d9c91d0282d->leave($__internal_d30639dc537cce3ac5dbe0b1e6a2b7eeb281d521a0ffc54b210f1d9c91d0282d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
