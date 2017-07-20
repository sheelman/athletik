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
        $__internal_055be89a9bf5d60b63c5779ba931e4822315c8c673db6e1d2d04a0adff1fba26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055be89a9bf5d60b63c5779ba931e4822315c8c673db6e1d2d04a0adff1fba26->enter($__internal_055be89a9bf5d60b63c5779ba931e4822315c8c673db6e1d2d04a0adff1fba26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_96fb31f72695ee2dde137a5d6fd5e9eabad06f09832e15097dfbbf41d5a2e410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fb31f72695ee2dde137a5d6fd5e9eabad06f09832e15097dfbbf41d5a2e410->enter($__internal_96fb31f72695ee2dde137a5d6fd5e9eabad06f09832e15097dfbbf41d5a2e410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_055be89a9bf5d60b63c5779ba931e4822315c8c673db6e1d2d04a0adff1fba26->leave($__internal_055be89a9bf5d60b63c5779ba931e4822315c8c673db6e1d2d04a0adff1fba26_prof);

        
        $__internal_96fb31f72695ee2dde137a5d6fd5e9eabad06f09832e15097dfbbf41d5a2e410->leave($__internal_96fb31f72695ee2dde137a5d6fd5e9eabad06f09832e15097dfbbf41d5a2e410_prof);

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
