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
        $__internal_224f7ada4396b7f151116763b62c6eeac8c78e45890dacfd7dd694a5503bde81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224f7ada4396b7f151116763b62c6eeac8c78e45890dacfd7dd694a5503bde81->enter($__internal_224f7ada4396b7f151116763b62c6eeac8c78e45890dacfd7dd694a5503bde81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4fd7880e0a860fa1024e585fa725f924557f3a9f028ab1ce94ce650d552c7123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd7880e0a860fa1024e585fa725f924557f3a9f028ab1ce94ce650d552c7123->enter($__internal_4fd7880e0a860fa1024e585fa725f924557f3a9f028ab1ce94ce650d552c7123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_224f7ada4396b7f151116763b62c6eeac8c78e45890dacfd7dd694a5503bde81->leave($__internal_224f7ada4396b7f151116763b62c6eeac8c78e45890dacfd7dd694a5503bde81_prof);

        
        $__internal_4fd7880e0a860fa1024e585fa725f924557f3a9f028ab1ce94ce650d552c7123->leave($__internal_4fd7880e0a860fa1024e585fa725f924557f3a9f028ab1ce94ce650d552c7123_prof);

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
