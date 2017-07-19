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
        $__internal_6ac983bcb228340315e7855b57efa39a650468f41807aaf5288ac4b41381f8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac983bcb228340315e7855b57efa39a650468f41807aaf5288ac4b41381f8cb->enter($__internal_6ac983bcb228340315e7855b57efa39a650468f41807aaf5288ac4b41381f8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_85738dfa1b0b3f5d7f8e6292f01f52bda69f5f88b06627cb6afd0d9da68fda68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85738dfa1b0b3f5d7f8e6292f01f52bda69f5f88b06627cb6afd0d9da68fda68->enter($__internal_85738dfa1b0b3f5d7f8e6292f01f52bda69f5f88b06627cb6afd0d9da68fda68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6ac983bcb228340315e7855b57efa39a650468f41807aaf5288ac4b41381f8cb->leave($__internal_6ac983bcb228340315e7855b57efa39a650468f41807aaf5288ac4b41381f8cb_prof);

        
        $__internal_85738dfa1b0b3f5d7f8e6292f01f52bda69f5f88b06627cb6afd0d9da68fda68->leave($__internal_85738dfa1b0b3f5d7f8e6292f01f52bda69f5f88b06627cb6afd0d9da68fda68_prof);

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
