<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_557b3cdadc6ac8febe194a3fb734b0e20b391c560d9c310560d8d937b56d7104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557b3cdadc6ac8febe194a3fb734b0e20b391c560d9c310560d8d937b56d7104->enter($__internal_557b3cdadc6ac8febe194a3fb734b0e20b391c560d9c310560d8d937b56d7104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d2876f5cbf11b60f4315e728b195e43cae3c9cf08e789915718bd2ca6dfcdd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2876f5cbf11b60f4315e728b195e43cae3c9cf08e789915718bd2ca6dfcdd74->enter($__internal_d2876f5cbf11b60f4315e728b195e43cae3c9cf08e789915718bd2ca6dfcdd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_557b3cdadc6ac8febe194a3fb734b0e20b391c560d9c310560d8d937b56d7104->leave($__internal_557b3cdadc6ac8febe194a3fb734b0e20b391c560d9c310560d8d937b56d7104_prof);

        
        $__internal_d2876f5cbf11b60f4315e728b195e43cae3c9cf08e789915718bd2ca6dfcdd74->leave($__internal_d2876f5cbf11b60f4315e728b195e43cae3c9cf08e789915718bd2ca6dfcdd74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
