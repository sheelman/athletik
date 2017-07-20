<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_b3705c3a97eba09c43cbe3537825884c8c8f7fc11104ab652bedfdd588e21fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3705c3a97eba09c43cbe3537825884c8c8f7fc11104ab652bedfdd588e21fed->enter($__internal_b3705c3a97eba09c43cbe3537825884c8c8f7fc11104ab652bedfdd588e21fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_efcc78f58d41bc48a06bde2f29155d7029d3027c2d1902992b4720de093ece05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcc78f58d41bc48a06bde2f29155d7029d3027c2d1902992b4720de093ece05->enter($__internal_efcc78f58d41bc48a06bde2f29155d7029d3027c2d1902992b4720de093ece05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b3705c3a97eba09c43cbe3537825884c8c8f7fc11104ab652bedfdd588e21fed->leave($__internal_b3705c3a97eba09c43cbe3537825884c8c8f7fc11104ab652bedfdd588e21fed_prof);

        
        $__internal_efcc78f58d41bc48a06bde2f29155d7029d3027c2d1902992b4720de093ece05->leave($__internal_efcc78f58d41bc48a06bde2f29155d7029d3027c2d1902992b4720de093ece05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
