<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_92f9327243d77a22b6c0c1182889df401e7d7d20f4ad4b2c0d2854f3041262af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f9327243d77a22b6c0c1182889df401e7d7d20f4ad4b2c0d2854f3041262af->enter($__internal_92f9327243d77a22b6c0c1182889df401e7d7d20f4ad4b2c0d2854f3041262af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_422b7cc8fcc61aca1182e0efaeb49af206c9c6cd4c0e05101f5839d075fd35c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422b7cc8fcc61aca1182e0efaeb49af206c9c6cd4c0e05101f5839d075fd35c7->enter($__internal_422b7cc8fcc61aca1182e0efaeb49af206c9c6cd4c0e05101f5839d075fd35c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_92f9327243d77a22b6c0c1182889df401e7d7d20f4ad4b2c0d2854f3041262af->leave($__internal_92f9327243d77a22b6c0c1182889df401e7d7d20f4ad4b2c0d2854f3041262af_prof);

        
        $__internal_422b7cc8fcc61aca1182e0efaeb49af206c9c6cd4c0e05101f5839d075fd35c7->leave($__internal_422b7cc8fcc61aca1182e0efaeb49af206c9c6cd4c0e05101f5839d075fd35c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
