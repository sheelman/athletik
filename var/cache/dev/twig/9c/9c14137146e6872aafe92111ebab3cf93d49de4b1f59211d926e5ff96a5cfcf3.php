<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_7b704f1811f04ce174f628cf82c6e302b4f2a041ecd41cdd150458720e98ea9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b704f1811f04ce174f628cf82c6e302b4f2a041ecd41cdd150458720e98ea9c->enter($__internal_7b704f1811f04ce174f628cf82c6e302b4f2a041ecd41cdd150458720e98ea9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2d0e54cc50be8ae6b5ce74f8899d81887a06de2c7874d790326882a53cbd2c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0e54cc50be8ae6b5ce74f8899d81887a06de2c7874d790326882a53cbd2c22->enter($__internal_2d0e54cc50be8ae6b5ce74f8899d81887a06de2c7874d790326882a53cbd2c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7b704f1811f04ce174f628cf82c6e302b4f2a041ecd41cdd150458720e98ea9c->leave($__internal_7b704f1811f04ce174f628cf82c6e302b4f2a041ecd41cdd150458720e98ea9c_prof);

        
        $__internal_2d0e54cc50be8ae6b5ce74f8899d81887a06de2c7874d790326882a53cbd2c22->leave($__internal_2d0e54cc50be8ae6b5ce74f8899d81887a06de2c7874d790326882a53cbd2c22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
