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
        $__internal_86c707b37b8eb55e3b24f40ac6cf4c374454da0b330e96f1c9c38575c7026517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c707b37b8eb55e3b24f40ac6cf4c374454da0b330e96f1c9c38575c7026517->enter($__internal_86c707b37b8eb55e3b24f40ac6cf4c374454da0b330e96f1c9c38575c7026517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_cf4f4fa92bb256425df1e90109d75806fbf1cd09e398a9ee7128295d1d5b530e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4f4fa92bb256425df1e90109d75806fbf1cd09e398a9ee7128295d1d5b530e->enter($__internal_cf4f4fa92bb256425df1e90109d75806fbf1cd09e398a9ee7128295d1d5b530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_86c707b37b8eb55e3b24f40ac6cf4c374454da0b330e96f1c9c38575c7026517->leave($__internal_86c707b37b8eb55e3b24f40ac6cf4c374454da0b330e96f1c9c38575c7026517_prof);

        
        $__internal_cf4f4fa92bb256425df1e90109d75806fbf1cd09e398a9ee7128295d1d5b530e->leave($__internal_cf4f4fa92bb256425df1e90109d75806fbf1cd09e398a9ee7128295d1d5b530e_prof);

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
