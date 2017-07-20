<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_650c766b56d35868232874be5c1cd0fdfad8b9145130f34881e283f58991906b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650c766b56d35868232874be5c1cd0fdfad8b9145130f34881e283f58991906b->enter($__internal_650c766b56d35868232874be5c1cd0fdfad8b9145130f34881e283f58991906b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6f9585e603fb925498e2af584f7b41cf56142356240623988542d736cf33081b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9585e603fb925498e2af584f7b41cf56142356240623988542d736cf33081b->enter($__internal_6f9585e603fb925498e2af584f7b41cf56142356240623988542d736cf33081b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_650c766b56d35868232874be5c1cd0fdfad8b9145130f34881e283f58991906b->leave($__internal_650c766b56d35868232874be5c1cd0fdfad8b9145130f34881e283f58991906b_prof);

        
        $__internal_6f9585e603fb925498e2af584f7b41cf56142356240623988542d736cf33081b->leave($__internal_6f9585e603fb925498e2af584f7b41cf56142356240623988542d736cf33081b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
