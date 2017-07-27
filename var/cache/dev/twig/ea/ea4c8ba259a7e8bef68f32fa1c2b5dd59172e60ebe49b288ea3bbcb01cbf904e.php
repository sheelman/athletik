<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_2645e2cac027c4df0db93477c41c320bba4a3d76933ac2423c82b8c1df7a1725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2645e2cac027c4df0db93477c41c320bba4a3d76933ac2423c82b8c1df7a1725->enter($__internal_2645e2cac027c4df0db93477c41c320bba4a3d76933ac2423c82b8c1df7a1725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_434be221ea4caee53d3e29047aec86de11d159af3002c24745a3d8056796ea03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434be221ea4caee53d3e29047aec86de11d159af3002c24745a3d8056796ea03->enter($__internal_434be221ea4caee53d3e29047aec86de11d159af3002c24745a3d8056796ea03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2645e2cac027c4df0db93477c41c320bba4a3d76933ac2423c82b8c1df7a1725->leave($__internal_2645e2cac027c4df0db93477c41c320bba4a3d76933ac2423c82b8c1df7a1725_prof);

        
        $__internal_434be221ea4caee53d3e29047aec86de11d159af3002c24745a3d8056796ea03->leave($__internal_434be221ea4caee53d3e29047aec86de11d159af3002c24745a3d8056796ea03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
