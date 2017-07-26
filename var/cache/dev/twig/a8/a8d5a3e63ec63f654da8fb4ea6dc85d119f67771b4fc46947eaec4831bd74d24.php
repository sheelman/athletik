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
        $__internal_5d99322347a481b89b865ec351d5cf70b4f43effe93913de64c1ec76e47b8b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d99322347a481b89b865ec351d5cf70b4f43effe93913de64c1ec76e47b8b9d->enter($__internal_5d99322347a481b89b865ec351d5cf70b4f43effe93913de64c1ec76e47b8b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5cba0b16f1f8c79ba1f350818fb0a4e32156d4f8031a2e88c757659c9edc6bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cba0b16f1f8c79ba1f350818fb0a4e32156d4f8031a2e88c757659c9edc6bc5->enter($__internal_5cba0b16f1f8c79ba1f350818fb0a4e32156d4f8031a2e88c757659c9edc6bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5d99322347a481b89b865ec351d5cf70b4f43effe93913de64c1ec76e47b8b9d->leave($__internal_5d99322347a481b89b865ec351d5cf70b4f43effe93913de64c1ec76e47b8b9d_prof);

        
        $__internal_5cba0b16f1f8c79ba1f350818fb0a4e32156d4f8031a2e88c757659c9edc6bc5->leave($__internal_5cba0b16f1f8c79ba1f350818fb0a4e32156d4f8031a2e88c757659c9edc6bc5_prof);

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
