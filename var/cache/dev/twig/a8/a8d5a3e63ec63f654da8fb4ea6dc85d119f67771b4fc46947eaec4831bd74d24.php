<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_aafeafa0e5c35f31c0599d50974023324828cbd582b6570b9d70c2728f4d1fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aafeafa0e5c35f31c0599d50974023324828cbd582b6570b9d70c2728f4d1fdf->enter($__internal_aafeafa0e5c35f31c0599d50974023324828cbd582b6570b9d70c2728f4d1fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f1452aa94ba21c60b29895ed7620c8f6c9532f80e719e2e1488b6911d2897cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1452aa94ba21c60b29895ed7620c8f6c9532f80e719e2e1488b6911d2897cab->enter($__internal_f1452aa94ba21c60b29895ed7620c8f6c9532f80e719e2e1488b6911d2897cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_aafeafa0e5c35f31c0599d50974023324828cbd582b6570b9d70c2728f4d1fdf->leave($__internal_aafeafa0e5c35f31c0599d50974023324828cbd582b6570b9d70c2728f4d1fdf_prof);

        
        $__internal_f1452aa94ba21c60b29895ed7620c8f6c9532f80e719e2e1488b6911d2897cab->leave($__internal_f1452aa94ba21c60b29895ed7620c8f6c9532f80e719e2e1488b6911d2897cab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
