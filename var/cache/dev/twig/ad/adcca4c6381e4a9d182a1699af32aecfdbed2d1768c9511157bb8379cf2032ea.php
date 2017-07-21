<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_21408e6f5487b9525e673700b74b5fcc4ece8333b8e5cb518ef60d4c580cf455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21408e6f5487b9525e673700b74b5fcc4ece8333b8e5cb518ef60d4c580cf455->enter($__internal_21408e6f5487b9525e673700b74b5fcc4ece8333b8e5cb518ef60d4c580cf455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8b3a9a8eb337b61c3bf1df1fc38d9815876f858773a2c3850e5b6cb0413fdee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3a9a8eb337b61c3bf1df1fc38d9815876f858773a2c3850e5b6cb0413fdee9->enter($__internal_8b3a9a8eb337b61c3bf1df1fc38d9815876f858773a2c3850e5b6cb0413fdee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_21408e6f5487b9525e673700b74b5fcc4ece8333b8e5cb518ef60d4c580cf455->leave($__internal_21408e6f5487b9525e673700b74b5fcc4ece8333b8e5cb518ef60d4c580cf455_prof);

        
        $__internal_8b3a9a8eb337b61c3bf1df1fc38d9815876f858773a2c3850e5b6cb0413fdee9->leave($__internal_8b3a9a8eb337b61c3bf1df1fc38d9815876f858773a2c3850e5b6cb0413fdee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
