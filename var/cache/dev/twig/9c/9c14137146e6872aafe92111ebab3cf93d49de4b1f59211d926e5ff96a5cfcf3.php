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
        $__internal_4d6a7ea6f40a211f64988a011512c9f99e6af07e18da7f168f7f4e3e6674563f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6a7ea6f40a211f64988a011512c9f99e6af07e18da7f168f7f4e3e6674563f->enter($__internal_4d6a7ea6f40a211f64988a011512c9f99e6af07e18da7f168f7f4e3e6674563f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2dfebb0c9b1ddf6df99ad7b6b67f62e7843260038f78a2a300fe9255526b32b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfebb0c9b1ddf6df99ad7b6b67f62e7843260038f78a2a300fe9255526b32b9->enter($__internal_2dfebb0c9b1ddf6df99ad7b6b67f62e7843260038f78a2a300fe9255526b32b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4d6a7ea6f40a211f64988a011512c9f99e6af07e18da7f168f7f4e3e6674563f->leave($__internal_4d6a7ea6f40a211f64988a011512c9f99e6af07e18da7f168f7f4e3e6674563f_prof);

        
        $__internal_2dfebb0c9b1ddf6df99ad7b6b67f62e7843260038f78a2a300fe9255526b32b9->leave($__internal_2dfebb0c9b1ddf6df99ad7b6b67f62e7843260038f78a2a300fe9255526b32b9_prof);

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
