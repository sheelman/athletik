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
        $__internal_1b0c4bd9c9e8eba00d9cd06f16dc0e9e3ef1860f34fab2f95f6216c47f8ab4c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0c4bd9c9e8eba00d9cd06f16dc0e9e3ef1860f34fab2f95f6216c47f8ab4c5->enter($__internal_1b0c4bd9c9e8eba00d9cd06f16dc0e9e3ef1860f34fab2f95f6216c47f8ab4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8237f5f48b81b1b15a24db20dbc396a3b9f49499d8de9a1dfdbf4883485cab24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8237f5f48b81b1b15a24db20dbc396a3b9f49499d8de9a1dfdbf4883485cab24->enter($__internal_8237f5f48b81b1b15a24db20dbc396a3b9f49499d8de9a1dfdbf4883485cab24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1b0c4bd9c9e8eba00d9cd06f16dc0e9e3ef1860f34fab2f95f6216c47f8ab4c5->leave($__internal_1b0c4bd9c9e8eba00d9cd06f16dc0e9e3ef1860f34fab2f95f6216c47f8ab4c5_prof);

        
        $__internal_8237f5f48b81b1b15a24db20dbc396a3b9f49499d8de9a1dfdbf4883485cab24->leave($__internal_8237f5f48b81b1b15a24db20dbc396a3b9f49499d8de9a1dfdbf4883485cab24_prof);

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
