<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_2b934cff6026b17012e753af7d2395adc0305db67e9029023ca4afec207dee8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b934cff6026b17012e753af7d2395adc0305db67e9029023ca4afec207dee8c->enter($__internal_2b934cff6026b17012e753af7d2395adc0305db67e9029023ca4afec207dee8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_040d5dd3a6b64fe3463cdf326ce3c095c4921b10c8644956a361f9b8eabdfa4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040d5dd3a6b64fe3463cdf326ce3c095c4921b10c8644956a361f9b8eabdfa4b->enter($__internal_040d5dd3a6b64fe3463cdf326ce3c095c4921b10c8644956a361f9b8eabdfa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2b934cff6026b17012e753af7d2395adc0305db67e9029023ca4afec207dee8c->leave($__internal_2b934cff6026b17012e753af7d2395adc0305db67e9029023ca4afec207dee8c_prof);

        
        $__internal_040d5dd3a6b64fe3463cdf326ce3c095c4921b10c8644956a361f9b8eabdfa4b->leave($__internal_040d5dd3a6b64fe3463cdf326ce3c095c4921b10c8644956a361f9b8eabdfa4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
