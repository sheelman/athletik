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
        $__internal_af4436a1051cd5555ec0b27b380254871e625846fd4921f9fccb4fb577d51390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4436a1051cd5555ec0b27b380254871e625846fd4921f9fccb4fb577d51390->enter($__internal_af4436a1051cd5555ec0b27b380254871e625846fd4921f9fccb4fb577d51390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7a90eb3c81bb5dee275fdacae2586b0caa50dc60554802a29fbadb254e947667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a90eb3c81bb5dee275fdacae2586b0caa50dc60554802a29fbadb254e947667->enter($__internal_7a90eb3c81bb5dee275fdacae2586b0caa50dc60554802a29fbadb254e947667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_af4436a1051cd5555ec0b27b380254871e625846fd4921f9fccb4fb577d51390->leave($__internal_af4436a1051cd5555ec0b27b380254871e625846fd4921f9fccb4fb577d51390_prof);

        
        $__internal_7a90eb3c81bb5dee275fdacae2586b0caa50dc60554802a29fbadb254e947667->leave($__internal_7a90eb3c81bb5dee275fdacae2586b0caa50dc60554802a29fbadb254e947667_prof);

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
