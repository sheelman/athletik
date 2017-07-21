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
        $__internal_afd9b14ecace1b988a035290cff818c15861ba2a49f9cf9d3c0ab7b8732fca60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd9b14ecace1b988a035290cff818c15861ba2a49f9cf9d3c0ab7b8732fca60->enter($__internal_afd9b14ecace1b988a035290cff818c15861ba2a49f9cf9d3c0ab7b8732fca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a6239656fc254efa432ff60560dfea5b6713e8fd2f74c70bb0c30a23cb6ce903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6239656fc254efa432ff60560dfea5b6713e8fd2f74c70bb0c30a23cb6ce903->enter($__internal_a6239656fc254efa432ff60560dfea5b6713e8fd2f74c70bb0c30a23cb6ce903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_afd9b14ecace1b988a035290cff818c15861ba2a49f9cf9d3c0ab7b8732fca60->leave($__internal_afd9b14ecace1b988a035290cff818c15861ba2a49f9cf9d3c0ab7b8732fca60_prof);

        
        $__internal_a6239656fc254efa432ff60560dfea5b6713e8fd2f74c70bb0c30a23cb6ce903->leave($__internal_a6239656fc254efa432ff60560dfea5b6713e8fd2f74c70bb0c30a23cb6ce903_prof);

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
