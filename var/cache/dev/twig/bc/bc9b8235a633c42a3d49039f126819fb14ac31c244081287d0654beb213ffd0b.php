<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a4ab2ab5081cb2d301b1b36facf3aa3304ef06c5b0f5956a5429d86cde43e6fb extends Twig_Template
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
        $__internal_a52be51fc2185e4a3cdc2a6236e5fdc68fec88f3a6c1f44019d18cf68f55dd7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52be51fc2185e4a3cdc2a6236e5fdc68fec88f3a6c1f44019d18cf68f55dd7c->enter($__internal_a52be51fc2185e4a3cdc2a6236e5fdc68fec88f3a6c1f44019d18cf68f55dd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_74fc34b7eb654e787aaf33c68e74d2838df38882c2739f8d3c5641118accf06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fc34b7eb654e787aaf33c68e74d2838df38882c2739f8d3c5641118accf06c->enter($__internal_74fc34b7eb654e787aaf33c68e74d2838df38882c2739f8d3c5641118accf06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a52be51fc2185e4a3cdc2a6236e5fdc68fec88f3a6c1f44019d18cf68f55dd7c->leave($__internal_a52be51fc2185e4a3cdc2a6236e5fdc68fec88f3a6c1f44019d18cf68f55dd7c_prof);

        
        $__internal_74fc34b7eb654e787aaf33c68e74d2838df38882c2739f8d3c5641118accf06c->leave($__internal_74fc34b7eb654e787aaf33c68e74d2838df38882c2739f8d3c5641118accf06c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
