<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b6975709208f12cfaeb9803ffdf6965fac624c0ba52f0f775711970af923f94c extends Twig_Template
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
        $__internal_c0e4dfbc556dcdf1033f608306b41f6ea862b819cf3fd16385745c6d3630ef16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e4dfbc556dcdf1033f608306b41f6ea862b819cf3fd16385745c6d3630ef16->enter($__internal_c0e4dfbc556dcdf1033f608306b41f6ea862b819cf3fd16385745c6d3630ef16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a9d58da7ad04016cc60bd2c2cf30a81c54ced76990aea644afe8ab825d82b070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d58da7ad04016cc60bd2c2cf30a81c54ced76990aea644afe8ab825d82b070->enter($__internal_a9d58da7ad04016cc60bd2c2cf30a81c54ced76990aea644afe8ab825d82b070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c0e4dfbc556dcdf1033f608306b41f6ea862b819cf3fd16385745c6d3630ef16->leave($__internal_c0e4dfbc556dcdf1033f608306b41f6ea862b819cf3fd16385745c6d3630ef16_prof);

        
        $__internal_a9d58da7ad04016cc60bd2c2cf30a81c54ced76990aea644afe8ab825d82b070->leave($__internal_a9d58da7ad04016cc60bd2c2cf30a81c54ced76990aea644afe8ab825d82b070_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
