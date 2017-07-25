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
        $__internal_b85b6682b4edeafef4c1da89ee70ac18a7fe5b00b8153043cae8e28fe12c5b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85b6682b4edeafef4c1da89ee70ac18a7fe5b00b8153043cae8e28fe12c5b41->enter($__internal_b85b6682b4edeafef4c1da89ee70ac18a7fe5b00b8153043cae8e28fe12c5b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_95d0cb43862d866960ec387661d3561db0e0ba7fd273b858f364208a538f1670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d0cb43862d866960ec387661d3561db0e0ba7fd273b858f364208a538f1670->enter($__internal_95d0cb43862d866960ec387661d3561db0e0ba7fd273b858f364208a538f1670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b85b6682b4edeafef4c1da89ee70ac18a7fe5b00b8153043cae8e28fe12c5b41->leave($__internal_b85b6682b4edeafef4c1da89ee70ac18a7fe5b00b8153043cae8e28fe12c5b41_prof);

        
        $__internal_95d0cb43862d866960ec387661d3561db0e0ba7fd273b858f364208a538f1670->leave($__internal_95d0cb43862d866960ec387661d3561db0e0ba7fd273b858f364208a538f1670_prof);

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
