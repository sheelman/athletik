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
        $__internal_be1a64dff0e9649f00fb10cec8e4b01fbafe518598b990b1c4f1098740fa4eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1a64dff0e9649f00fb10cec8e4b01fbafe518598b990b1c4f1098740fa4eae->enter($__internal_be1a64dff0e9649f00fb10cec8e4b01fbafe518598b990b1c4f1098740fa4eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_85c7dbf0abecb0fada905f8e94d2b2d74c0eb4392e409bfc852309fec62eb5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c7dbf0abecb0fada905f8e94d2b2d74c0eb4392e409bfc852309fec62eb5d3->enter($__internal_85c7dbf0abecb0fada905f8e94d2b2d74c0eb4392e409bfc852309fec62eb5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_be1a64dff0e9649f00fb10cec8e4b01fbafe518598b990b1c4f1098740fa4eae->leave($__internal_be1a64dff0e9649f00fb10cec8e4b01fbafe518598b990b1c4f1098740fa4eae_prof);

        
        $__internal_85c7dbf0abecb0fada905f8e94d2b2d74c0eb4392e409bfc852309fec62eb5d3->leave($__internal_85c7dbf0abecb0fada905f8e94d2b2d74c0eb4392e409bfc852309fec62eb5d3_prof);

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
