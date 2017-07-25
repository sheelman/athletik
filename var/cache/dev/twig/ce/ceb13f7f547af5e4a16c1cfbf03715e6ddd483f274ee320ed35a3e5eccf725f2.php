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
        $__internal_a211f94ecd06f20c8c1acf06bafaa22142a0c324e16ba3afa2752d64c98bf99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a211f94ecd06f20c8c1acf06bafaa22142a0c324e16ba3afa2752d64c98bf99e->enter($__internal_a211f94ecd06f20c8c1acf06bafaa22142a0c324e16ba3afa2752d64c98bf99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b28b23b49260762cd9062d47c7a566bcd7ee20ac75316eb7da39d14bca605190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28b23b49260762cd9062d47c7a566bcd7ee20ac75316eb7da39d14bca605190->enter($__internal_b28b23b49260762cd9062d47c7a566bcd7ee20ac75316eb7da39d14bca605190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a211f94ecd06f20c8c1acf06bafaa22142a0c324e16ba3afa2752d64c98bf99e->leave($__internal_a211f94ecd06f20c8c1acf06bafaa22142a0c324e16ba3afa2752d64c98bf99e_prof);

        
        $__internal_b28b23b49260762cd9062d47c7a566bcd7ee20ac75316eb7da39d14bca605190->leave($__internal_b28b23b49260762cd9062d47c7a566bcd7ee20ac75316eb7da39d14bca605190_prof);

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
