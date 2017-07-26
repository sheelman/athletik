<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_92c0e0bbdbeacd95b58c36b8ca0dc229e5e7cab67f63badf1c2cfe3097bf0ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c0e0bbdbeacd95b58c36b8ca0dc229e5e7cab67f63badf1c2cfe3097bf0ad6->enter($__internal_92c0e0bbdbeacd95b58c36b8ca0dc229e5e7cab67f63badf1c2cfe3097bf0ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fa07c2d4bd62b92769577f594fc0113c04c6349ee2d8020a123542cd7cf84a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa07c2d4bd62b92769577f594fc0113c04c6349ee2d8020a123542cd7cf84a16->enter($__internal_fa07c2d4bd62b92769577f594fc0113c04c6349ee2d8020a123542cd7cf84a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_92c0e0bbdbeacd95b58c36b8ca0dc229e5e7cab67f63badf1c2cfe3097bf0ad6->leave($__internal_92c0e0bbdbeacd95b58c36b8ca0dc229e5e7cab67f63badf1c2cfe3097bf0ad6_prof);

        
        $__internal_fa07c2d4bd62b92769577f594fc0113c04c6349ee2d8020a123542cd7cf84a16->leave($__internal_fa07c2d4bd62b92769577f594fc0113c04c6349ee2d8020a123542cd7cf84a16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
