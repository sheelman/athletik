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
        $__internal_c86be3bb181cb426d8c58f951273778e328b3596cd0cdfc505560638ceb3fc58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86be3bb181cb426d8c58f951273778e328b3596cd0cdfc505560638ceb3fc58->enter($__internal_c86be3bb181cb426d8c58f951273778e328b3596cd0cdfc505560638ceb3fc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_18abc8ba5e8fbc76d13e0a6cfd9f2ef8aa0db8c83d7f749dffdab7df668141ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18abc8ba5e8fbc76d13e0a6cfd9f2ef8aa0db8c83d7f749dffdab7df668141ad->enter($__internal_18abc8ba5e8fbc76d13e0a6cfd9f2ef8aa0db8c83d7f749dffdab7df668141ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c86be3bb181cb426d8c58f951273778e328b3596cd0cdfc505560638ceb3fc58->leave($__internal_c86be3bb181cb426d8c58f951273778e328b3596cd0cdfc505560638ceb3fc58_prof);

        
        $__internal_18abc8ba5e8fbc76d13e0a6cfd9f2ef8aa0db8c83d7f749dffdab7df668141ad->leave($__internal_18abc8ba5e8fbc76d13e0a6cfd9f2ef8aa0db8c83d7f749dffdab7df668141ad_prof);

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
