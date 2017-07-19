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
        $__internal_53b651645944dae1b38753035f50d0a9ef5ef098a186546c7e1db9fbf5326851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b651645944dae1b38753035f50d0a9ef5ef098a186546c7e1db9fbf5326851->enter($__internal_53b651645944dae1b38753035f50d0a9ef5ef098a186546c7e1db9fbf5326851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_31e093999b6a4b1406362868f445024168d474c83fa74770c5554ea0b264acea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e093999b6a4b1406362868f445024168d474c83fa74770c5554ea0b264acea->enter($__internal_31e093999b6a4b1406362868f445024168d474c83fa74770c5554ea0b264acea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_53b651645944dae1b38753035f50d0a9ef5ef098a186546c7e1db9fbf5326851->leave($__internal_53b651645944dae1b38753035f50d0a9ef5ef098a186546c7e1db9fbf5326851_prof);

        
        $__internal_31e093999b6a4b1406362868f445024168d474c83fa74770c5554ea0b264acea->leave($__internal_31e093999b6a4b1406362868f445024168d474c83fa74770c5554ea0b264acea_prof);

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
