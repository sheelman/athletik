<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_46a61dfdb1f1f10291938d6de7ae8079b8eaaa2a4cc6b10a0d9d62efe3a57a31 extends Twig_Template
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
        $__internal_f78cc698198fd3335019c04d5ad33da9064d5be8f7e1fc2057248802914ce93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78cc698198fd3335019c04d5ad33da9064d5be8f7e1fc2057248802914ce93e->enter($__internal_f78cc698198fd3335019c04d5ad33da9064d5be8f7e1fc2057248802914ce93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6459fc826ef8bfd47385c8f03d102d237294c24a77af088a8321f5cdb5aa15ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6459fc826ef8bfd47385c8f03d102d237294c24a77af088a8321f5cdb5aa15ea->enter($__internal_6459fc826ef8bfd47385c8f03d102d237294c24a77af088a8321f5cdb5aa15ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f78cc698198fd3335019c04d5ad33da9064d5be8f7e1fc2057248802914ce93e->leave($__internal_f78cc698198fd3335019c04d5ad33da9064d5be8f7e1fc2057248802914ce93e_prof);

        
        $__internal_6459fc826ef8bfd47385c8f03d102d237294c24a77af088a8321f5cdb5aa15ea->leave($__internal_6459fc826ef8bfd47385c8f03d102d237294c24a77af088a8321f5cdb5aa15ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
