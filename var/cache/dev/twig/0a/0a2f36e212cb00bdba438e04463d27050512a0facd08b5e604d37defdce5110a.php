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
        $__internal_99568f8bb251336ccbada164dcd8a51346cb3b297f228bd620d540bb898e09e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99568f8bb251336ccbada164dcd8a51346cb3b297f228bd620d540bb898e09e5->enter($__internal_99568f8bb251336ccbada164dcd8a51346cb3b297f228bd620d540bb898e09e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b2fee497ad3cb3a7f504784b7253b14a12e9fd298658137358a4dc8bd6a42a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fee497ad3cb3a7f504784b7253b14a12e9fd298658137358a4dc8bd6a42a77->enter($__internal_b2fee497ad3cb3a7f504784b7253b14a12e9fd298658137358a4dc8bd6a42a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_99568f8bb251336ccbada164dcd8a51346cb3b297f228bd620d540bb898e09e5->leave($__internal_99568f8bb251336ccbada164dcd8a51346cb3b297f228bd620d540bb898e09e5_prof);

        
        $__internal_b2fee497ad3cb3a7f504784b7253b14a12e9fd298658137358a4dc8bd6a42a77->leave($__internal_b2fee497ad3cb3a7f504784b7253b14a12e9fd298658137358a4dc8bd6a42a77_prof);

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
