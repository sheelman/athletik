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
        $__internal_5f64c551fe945429d56d86fdba04b0f2bd9b436ab3515baac6ed4bfb44b350fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f64c551fe945429d56d86fdba04b0f2bd9b436ab3515baac6ed4bfb44b350fc->enter($__internal_5f64c551fe945429d56d86fdba04b0f2bd9b436ab3515baac6ed4bfb44b350fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_bf08ef16e4526b3cdb5badd99b0bdf6d4d995759a8b25a8d54c4af2b57a65087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf08ef16e4526b3cdb5badd99b0bdf6d4d995759a8b25a8d54c4af2b57a65087->enter($__internal_bf08ef16e4526b3cdb5badd99b0bdf6d4d995759a8b25a8d54c4af2b57a65087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5f64c551fe945429d56d86fdba04b0f2bd9b436ab3515baac6ed4bfb44b350fc->leave($__internal_5f64c551fe945429d56d86fdba04b0f2bd9b436ab3515baac6ed4bfb44b350fc_prof);

        
        $__internal_bf08ef16e4526b3cdb5badd99b0bdf6d4d995759a8b25a8d54c4af2b57a65087->leave($__internal_bf08ef16e4526b3cdb5badd99b0bdf6d4d995759a8b25a8d54c4af2b57a65087_prof);

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
