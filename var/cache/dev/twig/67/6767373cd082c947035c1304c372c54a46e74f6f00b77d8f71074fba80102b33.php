<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_935f1528b50c368bd0e92e138c4a5b7104bc3b90f09135fee4bf7b3da5d460d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935f1528b50c368bd0e92e138c4a5b7104bc3b90f09135fee4bf7b3da5d460d2->enter($__internal_935f1528b50c368bd0e92e138c4a5b7104bc3b90f09135fee4bf7b3da5d460d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_213ea9c411172f9e32617ce45ff931e48d23a594713d55b6f33bbcff39731572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213ea9c411172f9e32617ce45ff931e48d23a594713d55b6f33bbcff39731572->enter($__internal_213ea9c411172f9e32617ce45ff931e48d23a594713d55b6f33bbcff39731572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_935f1528b50c368bd0e92e138c4a5b7104bc3b90f09135fee4bf7b3da5d460d2->leave($__internal_935f1528b50c368bd0e92e138c4a5b7104bc3b90f09135fee4bf7b3da5d460d2_prof);

        
        $__internal_213ea9c411172f9e32617ce45ff931e48d23a594713d55b6f33bbcff39731572->leave($__internal_213ea9c411172f9e32617ce45ff931e48d23a594713d55b6f33bbcff39731572_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
