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
        $__internal_1686559b534a487104917501ef0f70f7316926d4b0e604c368aaee300469e035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1686559b534a487104917501ef0f70f7316926d4b0e604c368aaee300469e035->enter($__internal_1686559b534a487104917501ef0f70f7316926d4b0e604c368aaee300469e035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_92b510b89861128e351e52a3d3be80c5d050df0ad766393a59736ca1d056313b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b510b89861128e351e52a3d3be80c5d050df0ad766393a59736ca1d056313b->enter($__internal_92b510b89861128e351e52a3d3be80c5d050df0ad766393a59736ca1d056313b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1686559b534a487104917501ef0f70f7316926d4b0e604c368aaee300469e035->leave($__internal_1686559b534a487104917501ef0f70f7316926d4b0e604c368aaee300469e035_prof);

        
        $__internal_92b510b89861128e351e52a3d3be80c5d050df0ad766393a59736ca1d056313b->leave($__internal_92b510b89861128e351e52a3d3be80c5d050df0ad766393a59736ca1d056313b_prof);

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
