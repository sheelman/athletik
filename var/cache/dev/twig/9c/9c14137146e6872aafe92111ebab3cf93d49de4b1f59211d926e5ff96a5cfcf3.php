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
        $__internal_ce9f329066757aee9c59ca1cfcb2be35dbbe5bb3e8ab5aac2eedb3a9564fee2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9f329066757aee9c59ca1cfcb2be35dbbe5bb3e8ab5aac2eedb3a9564fee2d->enter($__internal_ce9f329066757aee9c59ca1cfcb2be35dbbe5bb3e8ab5aac2eedb3a9564fee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_6a6ca2ed7737ebc6822382926cc1c36143be4d049bf687645578a26f1442e9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6ca2ed7737ebc6822382926cc1c36143be4d049bf687645578a26f1442e9d7->enter($__internal_6a6ca2ed7737ebc6822382926cc1c36143be4d049bf687645578a26f1442e9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ce9f329066757aee9c59ca1cfcb2be35dbbe5bb3e8ab5aac2eedb3a9564fee2d->leave($__internal_ce9f329066757aee9c59ca1cfcb2be35dbbe5bb3e8ab5aac2eedb3a9564fee2d_prof);

        
        $__internal_6a6ca2ed7737ebc6822382926cc1c36143be4d049bf687645578a26f1442e9d7->leave($__internal_6a6ca2ed7737ebc6822382926cc1c36143be4d049bf687645578a26f1442e9d7_prof);

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
