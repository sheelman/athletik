<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5a662e8eec515ce4837d24b725f3c9d672780393ed74b053347a015fe109fc8c extends Twig_Template
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
        $__internal_9de0df3e3262918d8ab579144e17b3ba69e9ce56e99aaecf11557db0706ff8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de0df3e3262918d8ab579144e17b3ba69e9ce56e99aaecf11557db0706ff8ef->enter($__internal_9de0df3e3262918d8ab579144e17b3ba69e9ce56e99aaecf11557db0706ff8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f0a8e94940b739fa3ec2ad5691a3252dde5e6e2b08ed073b6066673022ce9dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a8e94940b739fa3ec2ad5691a3252dde5e6e2b08ed073b6066673022ce9dc4->enter($__internal_f0a8e94940b739fa3ec2ad5691a3252dde5e6e2b08ed073b6066673022ce9dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9de0df3e3262918d8ab579144e17b3ba69e9ce56e99aaecf11557db0706ff8ef->leave($__internal_9de0df3e3262918d8ab579144e17b3ba69e9ce56e99aaecf11557db0706ff8ef_prof);

        
        $__internal_f0a8e94940b739fa3ec2ad5691a3252dde5e6e2b08ed073b6066673022ce9dc4->leave($__internal_f0a8e94940b739fa3ec2ad5691a3252dde5e6e2b08ed073b6066673022ce9dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
