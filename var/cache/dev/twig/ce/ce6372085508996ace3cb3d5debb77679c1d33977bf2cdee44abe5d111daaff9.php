<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_8626a3b66e5fd3bc38545190c9b30d21b3a302b0acb7409c256dd0518420d63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8626a3b66e5fd3bc38545190c9b30d21b3a302b0acb7409c256dd0518420d63b->enter($__internal_8626a3b66e5fd3bc38545190c9b30d21b3a302b0acb7409c256dd0518420d63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ba6bc71ab56153a266f2cec656bf892f4e19c59bba98941877cd625198fa8bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6bc71ab56153a266f2cec656bf892f4e19c59bba98941877cd625198fa8bdc->enter($__internal_ba6bc71ab56153a266f2cec656bf892f4e19c59bba98941877cd625198fa8bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8626a3b66e5fd3bc38545190c9b30d21b3a302b0acb7409c256dd0518420d63b->leave($__internal_8626a3b66e5fd3bc38545190c9b30d21b3a302b0acb7409c256dd0518420d63b_prof);

        
        $__internal_ba6bc71ab56153a266f2cec656bf892f4e19c59bba98941877cd625198fa8bdc->leave($__internal_ba6bc71ab56153a266f2cec656bf892f4e19c59bba98941877cd625198fa8bdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
