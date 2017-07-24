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
        $__internal_dd91e141bc400be0f7380e3dfcfd90596be68410b118a746df5b04f9f25a6da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd91e141bc400be0f7380e3dfcfd90596be68410b118a746df5b04f9f25a6da6->enter($__internal_dd91e141bc400be0f7380e3dfcfd90596be68410b118a746df5b04f9f25a6da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_cd876d3e6d7d3cdcf87761bd1707214e362b8cbae29ab89b135904afb76ebe44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd876d3e6d7d3cdcf87761bd1707214e362b8cbae29ab89b135904afb76ebe44->enter($__internal_cd876d3e6d7d3cdcf87761bd1707214e362b8cbae29ab89b135904afb76ebe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_dd91e141bc400be0f7380e3dfcfd90596be68410b118a746df5b04f9f25a6da6->leave($__internal_dd91e141bc400be0f7380e3dfcfd90596be68410b118a746df5b04f9f25a6da6_prof);

        
        $__internal_cd876d3e6d7d3cdcf87761bd1707214e362b8cbae29ab89b135904afb76ebe44->leave($__internal_cd876d3e6d7d3cdcf87761bd1707214e362b8cbae29ab89b135904afb76ebe44_prof);

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
