<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0276c52c211fe8c0e2c968491d68e7f9a877bfdcde0b99ea58ca9834a619fa8f extends Twig_Template
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
        $__internal_95742b646ebcf027ef6aaf99a28ae9f98a5c42e2c37a7f7c8ed9675f5bbc2c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95742b646ebcf027ef6aaf99a28ae9f98a5c42e2c37a7f7c8ed9675f5bbc2c73->enter($__internal_95742b646ebcf027ef6aaf99a28ae9f98a5c42e2c37a7f7c8ed9675f5bbc2c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4dd6ec9e9f535c82a53f40feaf13aadc560c0cfcdd53022aada56a55a1f587ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd6ec9e9f535c82a53f40feaf13aadc560c0cfcdd53022aada56a55a1f587ab->enter($__internal_4dd6ec9e9f535c82a53f40feaf13aadc560c0cfcdd53022aada56a55a1f587ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_95742b646ebcf027ef6aaf99a28ae9f98a5c42e2c37a7f7c8ed9675f5bbc2c73->leave($__internal_95742b646ebcf027ef6aaf99a28ae9f98a5c42e2c37a7f7c8ed9675f5bbc2c73_prof);

        
        $__internal_4dd6ec9e9f535c82a53f40feaf13aadc560c0cfcdd53022aada56a55a1f587ab->leave($__internal_4dd6ec9e9f535c82a53f40feaf13aadc560c0cfcdd53022aada56a55a1f587ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
