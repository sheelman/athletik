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
        $__internal_fdf9d871ed74e5e9c00982210c6cafbc925859627b58141066d1fa17cb2a1cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf9d871ed74e5e9c00982210c6cafbc925859627b58141066d1fa17cb2a1cc6->enter($__internal_fdf9d871ed74e5e9c00982210c6cafbc925859627b58141066d1fa17cb2a1cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5d6775b857d748f3814a5220d47c532b75aac111d5641fc954c2c4ddfd3695bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6775b857d748f3814a5220d47c532b75aac111d5641fc954c2c4ddfd3695bf->enter($__internal_5d6775b857d748f3814a5220d47c532b75aac111d5641fc954c2c4ddfd3695bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_fdf9d871ed74e5e9c00982210c6cafbc925859627b58141066d1fa17cb2a1cc6->leave($__internal_fdf9d871ed74e5e9c00982210c6cafbc925859627b58141066d1fa17cb2a1cc6_prof);

        
        $__internal_5d6775b857d748f3814a5220d47c532b75aac111d5641fc954c2c4ddfd3695bf->leave($__internal_5d6775b857d748f3814a5220d47c532b75aac111d5641fc954c2c4ddfd3695bf_prof);

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
