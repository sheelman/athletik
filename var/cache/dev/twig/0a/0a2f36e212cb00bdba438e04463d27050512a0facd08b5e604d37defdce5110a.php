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
        $__internal_0160c81fefcab5532453eb88f3010c1907dfaa6d903382c2545aa02a4f2788bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0160c81fefcab5532453eb88f3010c1907dfaa6d903382c2545aa02a4f2788bf->enter($__internal_0160c81fefcab5532453eb88f3010c1907dfaa6d903382c2545aa02a4f2788bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_35f11eb9b40f6e010ce624e97a09975e64c8372a2e4e499ca7f3bca66c8bdb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f11eb9b40f6e010ce624e97a09975e64c8372a2e4e499ca7f3bca66c8bdb64->enter($__internal_35f11eb9b40f6e010ce624e97a09975e64c8372a2e4e499ca7f3bca66c8bdb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0160c81fefcab5532453eb88f3010c1907dfaa6d903382c2545aa02a4f2788bf->leave($__internal_0160c81fefcab5532453eb88f3010c1907dfaa6d903382c2545aa02a4f2788bf_prof);

        
        $__internal_35f11eb9b40f6e010ce624e97a09975e64c8372a2e4e499ca7f3bca66c8bdb64->leave($__internal_35f11eb9b40f6e010ce624e97a09975e64c8372a2e4e499ca7f3bca66c8bdb64_prof);

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
