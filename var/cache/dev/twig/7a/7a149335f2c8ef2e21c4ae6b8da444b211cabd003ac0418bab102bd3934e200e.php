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
        $__internal_24ec98c37ef879d7e2ad168da46ab49ffdc45a765db2c5073260ffb2d6032979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ec98c37ef879d7e2ad168da46ab49ffdc45a765db2c5073260ffb2d6032979->enter($__internal_24ec98c37ef879d7e2ad168da46ab49ffdc45a765db2c5073260ffb2d6032979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_826a16e2acdace1e99573d8e53963aadf12ba63cfc22290b8a27801c0693c6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826a16e2acdace1e99573d8e53963aadf12ba63cfc22290b8a27801c0693c6b9->enter($__internal_826a16e2acdace1e99573d8e53963aadf12ba63cfc22290b8a27801c0693c6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_24ec98c37ef879d7e2ad168da46ab49ffdc45a765db2c5073260ffb2d6032979->leave($__internal_24ec98c37ef879d7e2ad168da46ab49ffdc45a765db2c5073260ffb2d6032979_prof);

        
        $__internal_826a16e2acdace1e99573d8e53963aadf12ba63cfc22290b8a27801c0693c6b9->leave($__internal_826a16e2acdace1e99573d8e53963aadf12ba63cfc22290b8a27801c0693c6b9_prof);

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
