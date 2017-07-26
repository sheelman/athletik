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
        $__internal_0ea713edfc730766cc0a5914deb49aaa1ca8b98b1356a23237157bcc09d7425e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea713edfc730766cc0a5914deb49aaa1ca8b98b1356a23237157bcc09d7425e->enter($__internal_0ea713edfc730766cc0a5914deb49aaa1ca8b98b1356a23237157bcc09d7425e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e55c0ea0f35ff5d7c9dc95dac0d770e0ba0a077fa2e852d596be82750663a1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55c0ea0f35ff5d7c9dc95dac0d770e0ba0a077fa2e852d596be82750663a1be->enter($__internal_e55c0ea0f35ff5d7c9dc95dac0d770e0ba0a077fa2e852d596be82750663a1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0ea713edfc730766cc0a5914deb49aaa1ca8b98b1356a23237157bcc09d7425e->leave($__internal_0ea713edfc730766cc0a5914deb49aaa1ca8b98b1356a23237157bcc09d7425e_prof);

        
        $__internal_e55c0ea0f35ff5d7c9dc95dac0d770e0ba0a077fa2e852d596be82750663a1be->leave($__internal_e55c0ea0f35ff5d7c9dc95dac0d770e0ba0a077fa2e852d596be82750663a1be_prof);

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
