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
        $__internal_ca8042114626907636989007abf7f7540267f527c326f1cf5e77935201b70cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8042114626907636989007abf7f7540267f527c326f1cf5e77935201b70cbc->enter($__internal_ca8042114626907636989007abf7f7540267f527c326f1cf5e77935201b70cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2a210ccd7872579cd79d66e0e54f52c799ab437fe13da2a1be3a73f229c4ad76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a210ccd7872579cd79d66e0e54f52c799ab437fe13da2a1be3a73f229c4ad76->enter($__internal_2a210ccd7872579cd79d66e0e54f52c799ab437fe13da2a1be3a73f229c4ad76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ca8042114626907636989007abf7f7540267f527c326f1cf5e77935201b70cbc->leave($__internal_ca8042114626907636989007abf7f7540267f527c326f1cf5e77935201b70cbc_prof);

        
        $__internal_2a210ccd7872579cd79d66e0e54f52c799ab437fe13da2a1be3a73f229c4ad76->leave($__internal_2a210ccd7872579cd79d66e0e54f52c799ab437fe13da2a1be3a73f229c4ad76_prof);

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
