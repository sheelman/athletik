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
        $__internal_8406ec3e3f4ff227d22a04120b6a286f73ac13a436611164242a9961005b9575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8406ec3e3f4ff227d22a04120b6a286f73ac13a436611164242a9961005b9575->enter($__internal_8406ec3e3f4ff227d22a04120b6a286f73ac13a436611164242a9961005b9575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c86d6b9250ea15d411d9662307439b6a0b5fac2d0717f34aa290f11d66e4fdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86d6b9250ea15d411d9662307439b6a0b5fac2d0717f34aa290f11d66e4fdaf->enter($__internal_c86d6b9250ea15d411d9662307439b6a0b5fac2d0717f34aa290f11d66e4fdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8406ec3e3f4ff227d22a04120b6a286f73ac13a436611164242a9961005b9575->leave($__internal_8406ec3e3f4ff227d22a04120b6a286f73ac13a436611164242a9961005b9575_prof);

        
        $__internal_c86d6b9250ea15d411d9662307439b6a0b5fac2d0717f34aa290f11d66e4fdaf->leave($__internal_c86d6b9250ea15d411d9662307439b6a0b5fac2d0717f34aa290f11d66e4fdaf_prof);

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
