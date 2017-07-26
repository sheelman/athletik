<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_508602c79f659dcf39b4d5b8357b0e3fa0f243c8ba1dbcad7262dad976d5b7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_508602c79f659dcf39b4d5b8357b0e3fa0f243c8ba1dbcad7262dad976d5b7cc->enter($__internal_508602c79f659dcf39b4d5b8357b0e3fa0f243c8ba1dbcad7262dad976d5b7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_cfd7ea4511460fa49d9a3e93bc5f84ee677183725825046ae9b8fcc508070e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd7ea4511460fa49d9a3e93bc5f84ee677183725825046ae9b8fcc508070e05->enter($__internal_cfd7ea4511460fa49d9a3e93bc5f84ee677183725825046ae9b8fcc508070e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_508602c79f659dcf39b4d5b8357b0e3fa0f243c8ba1dbcad7262dad976d5b7cc->leave($__internal_508602c79f659dcf39b4d5b8357b0e3fa0f243c8ba1dbcad7262dad976d5b7cc_prof);

        
        $__internal_cfd7ea4511460fa49d9a3e93bc5f84ee677183725825046ae9b8fcc508070e05->leave($__internal_cfd7ea4511460fa49d9a3e93bc5f84ee677183725825046ae9b8fcc508070e05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
