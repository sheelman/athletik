<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_b904f65e04505ff19be6bfcc9e1b511c3088a6dac49ab73a5ea0005ccd1ebee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b904f65e04505ff19be6bfcc9e1b511c3088a6dac49ab73a5ea0005ccd1ebee3->enter($__internal_b904f65e04505ff19be6bfcc9e1b511c3088a6dac49ab73a5ea0005ccd1ebee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_05ecf8a69d3da8e9ec1fa5ac958763dd7fab20567ec5abf1ffb66694477a2c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ecf8a69d3da8e9ec1fa5ac958763dd7fab20567ec5abf1ffb66694477a2c79->enter($__internal_05ecf8a69d3da8e9ec1fa5ac958763dd7fab20567ec5abf1ffb66694477a2c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b904f65e04505ff19be6bfcc9e1b511c3088a6dac49ab73a5ea0005ccd1ebee3->leave($__internal_b904f65e04505ff19be6bfcc9e1b511c3088a6dac49ab73a5ea0005ccd1ebee3_prof);

        
        $__internal_05ecf8a69d3da8e9ec1fa5ac958763dd7fab20567ec5abf1ffb66694477a2c79->leave($__internal_05ecf8a69d3da8e9ec1fa5ac958763dd7fab20567ec5abf1ffb66694477a2c79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
