<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_c6647dca9bd0ccca60a7153fe6529ad66fc64a0463067763f83b91b31901d133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6647dca9bd0ccca60a7153fe6529ad66fc64a0463067763f83b91b31901d133->enter($__internal_c6647dca9bd0ccca60a7153fe6529ad66fc64a0463067763f83b91b31901d133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_982e83c47fcfe772ff1cb8704917b3add150a4bbd89d8d7caf375330f2d54fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982e83c47fcfe772ff1cb8704917b3add150a4bbd89d8d7caf375330f2d54fd0->enter($__internal_982e83c47fcfe772ff1cb8704917b3add150a4bbd89d8d7caf375330f2d54fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c6647dca9bd0ccca60a7153fe6529ad66fc64a0463067763f83b91b31901d133->leave($__internal_c6647dca9bd0ccca60a7153fe6529ad66fc64a0463067763f83b91b31901d133_prof);

        
        $__internal_982e83c47fcfe772ff1cb8704917b3add150a4bbd89d8d7caf375330f2d54fd0->leave($__internal_982e83c47fcfe772ff1cb8704917b3add150a4bbd89d8d7caf375330f2d54fd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
