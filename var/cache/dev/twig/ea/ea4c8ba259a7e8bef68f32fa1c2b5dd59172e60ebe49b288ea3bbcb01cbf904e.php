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
        $__internal_7e112d11bac6b9dbb30061108980cc57a4bc5ec219e2c13acf1881e02fd790e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e112d11bac6b9dbb30061108980cc57a4bc5ec219e2c13acf1881e02fd790e8->enter($__internal_7e112d11bac6b9dbb30061108980cc57a4bc5ec219e2c13acf1881e02fd790e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_df02b34aa23923de2f0c667189807dcbbfb4a37e67a30466007e0988193b2b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df02b34aa23923de2f0c667189807dcbbfb4a37e67a30466007e0988193b2b53->enter($__internal_df02b34aa23923de2f0c667189807dcbbfb4a37e67a30466007e0988193b2b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7e112d11bac6b9dbb30061108980cc57a4bc5ec219e2c13acf1881e02fd790e8->leave($__internal_7e112d11bac6b9dbb30061108980cc57a4bc5ec219e2c13acf1881e02fd790e8_prof);

        
        $__internal_df02b34aa23923de2f0c667189807dcbbfb4a37e67a30466007e0988193b2b53->leave($__internal_df02b34aa23923de2f0c667189807dcbbfb4a37e67a30466007e0988193b2b53_prof);

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
