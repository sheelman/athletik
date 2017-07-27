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
        $__internal_48c09c3eb56eb4aa1fb4616bc0789843289132dac513a9eeba878a769d37fbbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c09c3eb56eb4aa1fb4616bc0789843289132dac513a9eeba878a769d37fbbf->enter($__internal_48c09c3eb56eb4aa1fb4616bc0789843289132dac513a9eeba878a769d37fbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5b36ef691ed13f277f5cfeb3c06737fc48aa36e673dc217d886989cfe9de5daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b36ef691ed13f277f5cfeb3c06737fc48aa36e673dc217d886989cfe9de5daa->enter($__internal_5b36ef691ed13f277f5cfeb3c06737fc48aa36e673dc217d886989cfe9de5daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_48c09c3eb56eb4aa1fb4616bc0789843289132dac513a9eeba878a769d37fbbf->leave($__internal_48c09c3eb56eb4aa1fb4616bc0789843289132dac513a9eeba878a769d37fbbf_prof);

        
        $__internal_5b36ef691ed13f277f5cfeb3c06737fc48aa36e673dc217d886989cfe9de5daa->leave($__internal_5b36ef691ed13f277f5cfeb3c06737fc48aa36e673dc217d886989cfe9de5daa_prof);

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
