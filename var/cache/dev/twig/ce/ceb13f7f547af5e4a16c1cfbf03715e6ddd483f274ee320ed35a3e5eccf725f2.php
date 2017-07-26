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
        $__internal_5c7e98aae2669765461977b1ceb042cdf55b9d25b330223b86022ff3d53db378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7e98aae2669765461977b1ceb042cdf55b9d25b330223b86022ff3d53db378->enter($__internal_5c7e98aae2669765461977b1ceb042cdf55b9d25b330223b86022ff3d53db378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1db946eed04d9fb339b7141a0cd6b4fd2698a59d35211e24c2ac292ba6bf8848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db946eed04d9fb339b7141a0cd6b4fd2698a59d35211e24c2ac292ba6bf8848->enter($__internal_1db946eed04d9fb339b7141a0cd6b4fd2698a59d35211e24c2ac292ba6bf8848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5c7e98aae2669765461977b1ceb042cdf55b9d25b330223b86022ff3d53db378->leave($__internal_5c7e98aae2669765461977b1ceb042cdf55b9d25b330223b86022ff3d53db378_prof);

        
        $__internal_1db946eed04d9fb339b7141a0cd6b4fd2698a59d35211e24c2ac292ba6bf8848->leave($__internal_1db946eed04d9fb339b7141a0cd6b4fd2698a59d35211e24c2ac292ba6bf8848_prof);

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
