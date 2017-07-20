<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_080b1b81a96a3acaa2397a68fb63b9c44cd5bf2d588c57477472921f0fdcdc20 extends Twig_Template
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
        $__internal_7d6d7e0807e8b35871c8e14ea50a8adbbd0c952723edddbecd2923af9221bc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6d7e0807e8b35871c8e14ea50a8adbbd0c952723edddbecd2923af9221bc1e->enter($__internal_7d6d7e0807e8b35871c8e14ea50a8adbbd0c952723edddbecd2923af9221bc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ebb189c014802482358ff38a4152dcdad22e5a228445450ce00c829356a61b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb189c014802482358ff38a4152dcdad22e5a228445450ce00c829356a61b6f->enter($__internal_ebb189c014802482358ff38a4152dcdad22e5a228445450ce00c829356a61b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7d6d7e0807e8b35871c8e14ea50a8adbbd0c952723edddbecd2923af9221bc1e->leave($__internal_7d6d7e0807e8b35871c8e14ea50a8adbbd0c952723edddbecd2923af9221bc1e_prof);

        
        $__internal_ebb189c014802482358ff38a4152dcdad22e5a228445450ce00c829356a61b6f->leave($__internal_ebb189c014802482358ff38a4152dcdad22e5a228445450ce00c829356a61b6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
