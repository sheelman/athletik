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
        $__internal_f695a01ae47be6b23280d3d42cf7ff6de3980844d4a2105c534ca66ef1041952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f695a01ae47be6b23280d3d42cf7ff6de3980844d4a2105c534ca66ef1041952->enter($__internal_f695a01ae47be6b23280d3d42cf7ff6de3980844d4a2105c534ca66ef1041952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ea86e2e80f90985239b97068f78274fb0221c6e0b4e47da0466ede62f0c17554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea86e2e80f90985239b97068f78274fb0221c6e0b4e47da0466ede62f0c17554->enter($__internal_ea86e2e80f90985239b97068f78274fb0221c6e0b4e47da0466ede62f0c17554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_f695a01ae47be6b23280d3d42cf7ff6de3980844d4a2105c534ca66ef1041952->leave($__internal_f695a01ae47be6b23280d3d42cf7ff6de3980844d4a2105c534ca66ef1041952_prof);

        
        $__internal_ea86e2e80f90985239b97068f78274fb0221c6e0b4e47da0466ede62f0c17554->leave($__internal_ea86e2e80f90985239b97068f78274fb0221c6e0b4e47da0466ede62f0c17554_prof);

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
