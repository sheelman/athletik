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
        $__internal_3feb9bc32190dcc277fb8c3d0da00e578873edc5fedff2c0f7101569ad7cb25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3feb9bc32190dcc277fb8c3d0da00e578873edc5fedff2c0f7101569ad7cb25f->enter($__internal_3feb9bc32190dcc277fb8c3d0da00e578873edc5fedff2c0f7101569ad7cb25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4903815df8dae5c9a3fb89571773f49bc43c0abdaf761f2aaad61577c722d5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4903815df8dae5c9a3fb89571773f49bc43c0abdaf761f2aaad61577c722d5f9->enter($__internal_4903815df8dae5c9a3fb89571773f49bc43c0abdaf761f2aaad61577c722d5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3feb9bc32190dcc277fb8c3d0da00e578873edc5fedff2c0f7101569ad7cb25f->leave($__internal_3feb9bc32190dcc277fb8c3d0da00e578873edc5fedff2c0f7101569ad7cb25f_prof);

        
        $__internal_4903815df8dae5c9a3fb89571773f49bc43c0abdaf761f2aaad61577c722d5f9->leave($__internal_4903815df8dae5c9a3fb89571773f49bc43c0abdaf761f2aaad61577c722d5f9_prof);

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
