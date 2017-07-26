<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_e53f4adcd6e8391564bbaf36cf74716a65e67c9d01ea1760cafaf99b1af7e9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53f4adcd6e8391564bbaf36cf74716a65e67c9d01ea1760cafaf99b1af7e9fa->enter($__internal_e53f4adcd6e8391564bbaf36cf74716a65e67c9d01ea1760cafaf99b1af7e9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f6845b7272bb7f56ea81aa056dacf36dc65fa17796345bce69aac1c3ce55474a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6845b7272bb7f56ea81aa056dacf36dc65fa17796345bce69aac1c3ce55474a->enter($__internal_f6845b7272bb7f56ea81aa056dacf36dc65fa17796345bce69aac1c3ce55474a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e53f4adcd6e8391564bbaf36cf74716a65e67c9d01ea1760cafaf99b1af7e9fa->leave($__internal_e53f4adcd6e8391564bbaf36cf74716a65e67c9d01ea1760cafaf99b1af7e9fa_prof);

        
        $__internal_f6845b7272bb7f56ea81aa056dacf36dc65fa17796345bce69aac1c3ce55474a->leave($__internal_f6845b7272bb7f56ea81aa056dacf36dc65fa17796345bce69aac1c3ce55474a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
