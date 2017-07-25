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
        $__internal_ef8fb0d086e5e61e9edd30aed3c2a34b5f271ba41d146e2037c2ffdc3ce2c7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8fb0d086e5e61e9edd30aed3c2a34b5f271ba41d146e2037c2ffdc3ce2c7c7->enter($__internal_ef8fb0d086e5e61e9edd30aed3c2a34b5f271ba41d146e2037c2ffdc3ce2c7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d41b907c40b2f6de3c4cd55a0a73b64cf2c4f93875e5cfba815585151228d794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41b907c40b2f6de3c4cd55a0a73b64cf2c4f93875e5cfba815585151228d794->enter($__internal_d41b907c40b2f6de3c4cd55a0a73b64cf2c4f93875e5cfba815585151228d794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ef8fb0d086e5e61e9edd30aed3c2a34b5f271ba41d146e2037c2ffdc3ce2c7c7->leave($__internal_ef8fb0d086e5e61e9edd30aed3c2a34b5f271ba41d146e2037c2ffdc3ce2c7c7_prof);

        
        $__internal_d41b907c40b2f6de3c4cd55a0a73b64cf2c4f93875e5cfba815585151228d794->leave($__internal_d41b907c40b2f6de3c4cd55a0a73b64cf2c4f93875e5cfba815585151228d794_prof);

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
