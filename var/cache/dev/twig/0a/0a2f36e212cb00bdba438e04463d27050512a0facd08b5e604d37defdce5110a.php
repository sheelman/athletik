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
        $__internal_686867a5031c8cd7bc24f3d46fe683468f8fac5bc042e7682469753e2d559927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686867a5031c8cd7bc24f3d46fe683468f8fac5bc042e7682469753e2d559927->enter($__internal_686867a5031c8cd7bc24f3d46fe683468f8fac5bc042e7682469753e2d559927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_37a4abe2b10e80c71bb201fb6190e410be79dd1ad9e7de3b4a8de60d5fafe75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a4abe2b10e80c71bb201fb6190e410be79dd1ad9e7de3b4a8de60d5fafe75c->enter($__internal_37a4abe2b10e80c71bb201fb6190e410be79dd1ad9e7de3b4a8de60d5fafe75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_686867a5031c8cd7bc24f3d46fe683468f8fac5bc042e7682469753e2d559927->leave($__internal_686867a5031c8cd7bc24f3d46fe683468f8fac5bc042e7682469753e2d559927_prof);

        
        $__internal_37a4abe2b10e80c71bb201fb6190e410be79dd1ad9e7de3b4a8de60d5fafe75c->leave($__internal_37a4abe2b10e80c71bb201fb6190e410be79dd1ad9e7de3b4a8de60d5fafe75c_prof);

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
