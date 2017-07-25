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
        $__internal_fca268bee9b20ba902145890d44b203d6b9d7e374c1661c9c65d31080350da18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca268bee9b20ba902145890d44b203d6b9d7e374c1661c9c65d31080350da18->enter($__internal_fca268bee9b20ba902145890d44b203d6b9d7e374c1661c9c65d31080350da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_908942756f902f9917e6cedaea96c0e5ad4cbb484b02abbb1097d4c32243b686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908942756f902f9917e6cedaea96c0e5ad4cbb484b02abbb1097d4c32243b686->enter($__internal_908942756f902f9917e6cedaea96c0e5ad4cbb484b02abbb1097d4c32243b686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fca268bee9b20ba902145890d44b203d6b9d7e374c1661c9c65d31080350da18->leave($__internal_fca268bee9b20ba902145890d44b203d6b9d7e374c1661c9c65d31080350da18_prof);

        
        $__internal_908942756f902f9917e6cedaea96c0e5ad4cbb484b02abbb1097d4c32243b686->leave($__internal_908942756f902f9917e6cedaea96c0e5ad4cbb484b02abbb1097d4c32243b686_prof);

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
