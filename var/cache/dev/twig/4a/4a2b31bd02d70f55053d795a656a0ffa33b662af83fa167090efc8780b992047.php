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
        $__internal_332dff2da13d4532a39a723354b4a42a93864f6357dc42f27b2f23c0b4ef728c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332dff2da13d4532a39a723354b4a42a93864f6357dc42f27b2f23c0b4ef728c->enter($__internal_332dff2da13d4532a39a723354b4a42a93864f6357dc42f27b2f23c0b4ef728c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6e17ab8b43bdd222df217f2122e5259ce6c673a5be3ff5d8e3b87a0bdc6f8742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e17ab8b43bdd222df217f2122e5259ce6c673a5be3ff5d8e3b87a0bdc6f8742->enter($__internal_6e17ab8b43bdd222df217f2122e5259ce6c673a5be3ff5d8e3b87a0bdc6f8742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_332dff2da13d4532a39a723354b4a42a93864f6357dc42f27b2f23c0b4ef728c->leave($__internal_332dff2da13d4532a39a723354b4a42a93864f6357dc42f27b2f23c0b4ef728c_prof);

        
        $__internal_6e17ab8b43bdd222df217f2122e5259ce6c673a5be3ff5d8e3b87a0bdc6f8742->leave($__internal_6e17ab8b43bdd222df217f2122e5259ce6c673a5be3ff5d8e3b87a0bdc6f8742_prof);

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
