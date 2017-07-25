<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_4a3e91da164ec7560b195e444c97e161ff933436d5683e31005d6b9d0e70abff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3e91da164ec7560b195e444c97e161ff933436d5683e31005d6b9d0e70abff->enter($__internal_4a3e91da164ec7560b195e444c97e161ff933436d5683e31005d6b9d0e70abff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5eee3e4055e39721287752c3508e13f581f02c62d98ef46e67e9d7a7358699a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eee3e4055e39721287752c3508e13f581f02c62d98ef46e67e9d7a7358699a3->enter($__internal_5eee3e4055e39721287752c3508e13f581f02c62d98ef46e67e9d7a7358699a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4a3e91da164ec7560b195e444c97e161ff933436d5683e31005d6b9d0e70abff->leave($__internal_4a3e91da164ec7560b195e444c97e161ff933436d5683e31005d6b9d0e70abff_prof);

        
        $__internal_5eee3e4055e39721287752c3508e13f581f02c62d98ef46e67e9d7a7358699a3->leave($__internal_5eee3e4055e39721287752c3508e13f581f02c62d98ef46e67e9d7a7358699a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
