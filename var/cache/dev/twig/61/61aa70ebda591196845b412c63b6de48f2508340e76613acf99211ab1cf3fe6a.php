<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d851f2e88206afd775c879a81d472d79f5f0112e7fcd98ca143285efcd3b9731 extends Twig_Template
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
        $__internal_7606f04fbe61fd9fe13f93d4a2066bdec6de6640021bb5660d096634fd8d4f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7606f04fbe61fd9fe13f93d4a2066bdec6de6640021bb5660d096634fd8d4f78->enter($__internal_7606f04fbe61fd9fe13f93d4a2066bdec6de6640021bb5660d096634fd8d4f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c1f15775ca0eb5bb4ffc146be183740e3ab5f8d0a628072a03dd8df81ac43fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f15775ca0eb5bb4ffc146be183740e3ab5f8d0a628072a03dd8df81ac43fb6->enter($__internal_c1f15775ca0eb5bb4ffc146be183740e3ab5f8d0a628072a03dd8df81ac43fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7606f04fbe61fd9fe13f93d4a2066bdec6de6640021bb5660d096634fd8d4f78->leave($__internal_7606f04fbe61fd9fe13f93d4a2066bdec6de6640021bb5660d096634fd8d4f78_prof);

        
        $__internal_c1f15775ca0eb5bb4ffc146be183740e3ab5f8d0a628072a03dd8df81ac43fb6->leave($__internal_c1f15775ca0eb5bb4ffc146be183740e3ab5f8d0a628072a03dd8df81ac43fb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
