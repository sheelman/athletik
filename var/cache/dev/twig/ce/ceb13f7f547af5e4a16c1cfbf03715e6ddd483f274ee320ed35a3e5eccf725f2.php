<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_5020862c37820add744abfb9afa4a7dabf00d5d582b37c9d39de0822576628bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5020862c37820add744abfb9afa4a7dabf00d5d582b37c9d39de0822576628bb->enter($__internal_5020862c37820add744abfb9afa4a7dabf00d5d582b37c9d39de0822576628bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4822f69049be97b2e1c2e54d7847cb2e64f826f95d37e9ee3ddec450274e7107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4822f69049be97b2e1c2e54d7847cb2e64f826f95d37e9ee3ddec450274e7107->enter($__internal_4822f69049be97b2e1c2e54d7847cb2e64f826f95d37e9ee3ddec450274e7107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5020862c37820add744abfb9afa4a7dabf00d5d582b37c9d39de0822576628bb->leave($__internal_5020862c37820add744abfb9afa4a7dabf00d5d582b37c9d39de0822576628bb_prof);

        
        $__internal_4822f69049be97b2e1c2e54d7847cb2e64f826f95d37e9ee3ddec450274e7107->leave($__internal_4822f69049be97b2e1c2e54d7847cb2e64f826f95d37e9ee3ddec450274e7107_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
