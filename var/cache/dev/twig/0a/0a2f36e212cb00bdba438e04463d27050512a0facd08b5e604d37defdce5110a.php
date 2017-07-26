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
        $__internal_716e3da2b05106f2ca65ab90952ec0253064f8defb5c9cf946d8a6b6a34c8f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716e3da2b05106f2ca65ab90952ec0253064f8defb5c9cf946d8a6b6a34c8f19->enter($__internal_716e3da2b05106f2ca65ab90952ec0253064f8defb5c9cf946d8a6b6a34c8f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_684e0871ea40cf062c72a992a464f0f1d0eba6c7ddfb1925334e252a3761324f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684e0871ea40cf062c72a992a464f0f1d0eba6c7ddfb1925334e252a3761324f->enter($__internal_684e0871ea40cf062c72a992a464f0f1d0eba6c7ddfb1925334e252a3761324f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_716e3da2b05106f2ca65ab90952ec0253064f8defb5c9cf946d8a6b6a34c8f19->leave($__internal_716e3da2b05106f2ca65ab90952ec0253064f8defb5c9cf946d8a6b6a34c8f19_prof);

        
        $__internal_684e0871ea40cf062c72a992a464f0f1d0eba6c7ddfb1925334e252a3761324f->leave($__internal_684e0871ea40cf062c72a992a464f0f1d0eba6c7ddfb1925334e252a3761324f_prof);

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
