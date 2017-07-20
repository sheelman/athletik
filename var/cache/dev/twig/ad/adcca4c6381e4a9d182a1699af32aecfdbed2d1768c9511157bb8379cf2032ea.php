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
        $__internal_26db7a66bec8b538d8a86621043f1606085ff5838bbd9ffb903a7d5fc7983625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26db7a66bec8b538d8a86621043f1606085ff5838bbd9ffb903a7d5fc7983625->enter($__internal_26db7a66bec8b538d8a86621043f1606085ff5838bbd9ffb903a7d5fc7983625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_61c53fd1c8725574c3b8c8752951549a2feb32d95881e0d2620f607e6e7b16fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c53fd1c8725574c3b8c8752951549a2feb32d95881e0d2620f607e6e7b16fb->enter($__internal_61c53fd1c8725574c3b8c8752951549a2feb32d95881e0d2620f607e6e7b16fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_26db7a66bec8b538d8a86621043f1606085ff5838bbd9ffb903a7d5fc7983625->leave($__internal_26db7a66bec8b538d8a86621043f1606085ff5838bbd9ffb903a7d5fc7983625_prof);

        
        $__internal_61c53fd1c8725574c3b8c8752951549a2feb32d95881e0d2620f607e6e7b16fb->leave($__internal_61c53fd1c8725574c3b8c8752951549a2feb32d95881e0d2620f607e6e7b16fb_prof);

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
