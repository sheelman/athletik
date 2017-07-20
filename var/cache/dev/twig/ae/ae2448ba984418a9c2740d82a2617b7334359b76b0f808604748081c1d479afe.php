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
        $__internal_315ec1583b0eb75244b104e3f6e793c1e5178f93fa4101888acf99e392dd60f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315ec1583b0eb75244b104e3f6e793c1e5178f93fa4101888acf99e392dd60f7->enter($__internal_315ec1583b0eb75244b104e3f6e793c1e5178f93fa4101888acf99e392dd60f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5b0c2031f261dc9c2073766c3ea344f6c937baba9689b60c640b5d08edf2e0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0c2031f261dc9c2073766c3ea344f6c937baba9689b60c640b5d08edf2e0fc->enter($__internal_5b0c2031f261dc9c2073766c3ea344f6c937baba9689b60c640b5d08edf2e0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_315ec1583b0eb75244b104e3f6e793c1e5178f93fa4101888acf99e392dd60f7->leave($__internal_315ec1583b0eb75244b104e3f6e793c1e5178f93fa4101888acf99e392dd60f7_prof);

        
        $__internal_5b0c2031f261dc9c2073766c3ea344f6c937baba9689b60c640b5d08edf2e0fc->leave($__internal_5b0c2031f261dc9c2073766c3ea344f6c937baba9689b60c640b5d08edf2e0fc_prof);

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
