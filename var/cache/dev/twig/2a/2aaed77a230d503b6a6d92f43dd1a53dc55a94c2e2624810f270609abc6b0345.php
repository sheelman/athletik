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
        $__internal_bf54330bc84673c02095e9632f336643e608c560037df46db2523a9d730f19e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf54330bc84673c02095e9632f336643e608c560037df46db2523a9d730f19e1->enter($__internal_bf54330bc84673c02095e9632f336643e608c560037df46db2523a9d730f19e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6ea374a29e45f1f73974685d28866d989265d2e33ed2a2b9be8fb00100667adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea374a29e45f1f73974685d28866d989265d2e33ed2a2b9be8fb00100667adb->enter($__internal_6ea374a29e45f1f73974685d28866d989265d2e33ed2a2b9be8fb00100667adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bf54330bc84673c02095e9632f336643e608c560037df46db2523a9d730f19e1->leave($__internal_bf54330bc84673c02095e9632f336643e608c560037df46db2523a9d730f19e1_prof);

        
        $__internal_6ea374a29e45f1f73974685d28866d989265d2e33ed2a2b9be8fb00100667adb->leave($__internal_6ea374a29e45f1f73974685d28866d989265d2e33ed2a2b9be8fb00100667adb_prof);

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
