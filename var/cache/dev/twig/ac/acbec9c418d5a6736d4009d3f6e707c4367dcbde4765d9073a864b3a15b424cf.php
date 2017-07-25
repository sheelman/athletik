<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_8896a3c7a85bc9dffc80e898cf6cec641beaa061f403aae6c2d82aaaec0a7f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8896a3c7a85bc9dffc80e898cf6cec641beaa061f403aae6c2d82aaaec0a7f76->enter($__internal_8896a3c7a85bc9dffc80e898cf6cec641beaa061f403aae6c2d82aaaec0a7f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3cd37b201858892265ef9058ef154d9ed4c4c75e9ee146daf580340c32f8656f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd37b201858892265ef9058ef154d9ed4c4c75e9ee146daf580340c32f8656f->enter($__internal_3cd37b201858892265ef9058ef154d9ed4c4c75e9ee146daf580340c32f8656f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8896a3c7a85bc9dffc80e898cf6cec641beaa061f403aae6c2d82aaaec0a7f76->leave($__internal_8896a3c7a85bc9dffc80e898cf6cec641beaa061f403aae6c2d82aaaec0a7f76_prof);

        
        $__internal_3cd37b201858892265ef9058ef154d9ed4c4c75e9ee146daf580340c32f8656f->leave($__internal_3cd37b201858892265ef9058ef154d9ed4c4c75e9ee146daf580340c32f8656f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
