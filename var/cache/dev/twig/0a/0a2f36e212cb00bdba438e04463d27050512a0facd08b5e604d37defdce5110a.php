<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_d7f0195b22e9d176378e35a9b986631dc44ec392706551b0ad40f2adf6aa0b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f0195b22e9d176378e35a9b986631dc44ec392706551b0ad40f2adf6aa0b54->enter($__internal_d7f0195b22e9d176378e35a9b986631dc44ec392706551b0ad40f2adf6aa0b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_06a9012e6e122dab36cbe52f9acab10a6a695391e7ab7b523c1bc8c6d0afe940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a9012e6e122dab36cbe52f9acab10a6a695391e7ab7b523c1bc8c6d0afe940->enter($__internal_06a9012e6e122dab36cbe52f9acab10a6a695391e7ab7b523c1bc8c6d0afe940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d7f0195b22e9d176378e35a9b986631dc44ec392706551b0ad40f2adf6aa0b54->leave($__internal_d7f0195b22e9d176378e35a9b986631dc44ec392706551b0ad40f2adf6aa0b54_prof);

        
        $__internal_06a9012e6e122dab36cbe52f9acab10a6a695391e7ab7b523c1bc8c6d0afe940->leave($__internal_06a9012e6e122dab36cbe52f9acab10a6a695391e7ab7b523c1bc8c6d0afe940_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
