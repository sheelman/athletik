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
        $__internal_e98d69fadda40db06b5cc5d559ee4a2a5b1f3f832ca98df01bf0bc879b5961c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98d69fadda40db06b5cc5d559ee4a2a5b1f3f832ca98df01bf0bc879b5961c3->enter($__internal_e98d69fadda40db06b5cc5d559ee4a2a5b1f3f832ca98df01bf0bc879b5961c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_66178318b851f06bc3a288e5de361f888ac5d73b279404e640ab4bc3e0ce5832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66178318b851f06bc3a288e5de361f888ac5d73b279404e640ab4bc3e0ce5832->enter($__internal_66178318b851f06bc3a288e5de361f888ac5d73b279404e640ab4bc3e0ce5832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e98d69fadda40db06b5cc5d559ee4a2a5b1f3f832ca98df01bf0bc879b5961c3->leave($__internal_e98d69fadda40db06b5cc5d559ee4a2a5b1f3f832ca98df01bf0bc879b5961c3_prof);

        
        $__internal_66178318b851f06bc3a288e5de361f888ac5d73b279404e640ab4bc3e0ce5832->leave($__internal_66178318b851f06bc3a288e5de361f888ac5d73b279404e640ab4bc3e0ce5832_prof);

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
