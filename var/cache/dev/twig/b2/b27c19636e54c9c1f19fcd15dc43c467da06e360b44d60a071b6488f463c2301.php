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
        $__internal_52345e2ffd654a83cd1ce4cf2674431605a2a50aa46a9f5a219016795a41b40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52345e2ffd654a83cd1ce4cf2674431605a2a50aa46a9f5a219016795a41b40e->enter($__internal_52345e2ffd654a83cd1ce4cf2674431605a2a50aa46a9f5a219016795a41b40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a899ef38e2f6b17fd1b4c29a8b0c0052964cd370771edb6d5865ec11dd5fa268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a899ef38e2f6b17fd1b4c29a8b0c0052964cd370771edb6d5865ec11dd5fa268->enter($__internal_a899ef38e2f6b17fd1b4c29a8b0c0052964cd370771edb6d5865ec11dd5fa268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_52345e2ffd654a83cd1ce4cf2674431605a2a50aa46a9f5a219016795a41b40e->leave($__internal_52345e2ffd654a83cd1ce4cf2674431605a2a50aa46a9f5a219016795a41b40e_prof);

        
        $__internal_a899ef38e2f6b17fd1b4c29a8b0c0052964cd370771edb6d5865ec11dd5fa268->leave($__internal_a899ef38e2f6b17fd1b4c29a8b0c0052964cd370771edb6d5865ec11dd5fa268_prof);

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
