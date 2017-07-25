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
        $__internal_5e1578c4714cd4977b68ae2011516e9e9c4034d8693a8108a9bb37cfc5b15968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1578c4714cd4977b68ae2011516e9e9c4034d8693a8108a9bb37cfc5b15968->enter($__internal_5e1578c4714cd4977b68ae2011516e9e9c4034d8693a8108a9bb37cfc5b15968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fbb397f56c9ecad45b18f775684fee274662ecdb7e928b632dacc046ad1f98c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb397f56c9ecad45b18f775684fee274662ecdb7e928b632dacc046ad1f98c1->enter($__internal_fbb397f56c9ecad45b18f775684fee274662ecdb7e928b632dacc046ad1f98c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5e1578c4714cd4977b68ae2011516e9e9c4034d8693a8108a9bb37cfc5b15968->leave($__internal_5e1578c4714cd4977b68ae2011516e9e9c4034d8693a8108a9bb37cfc5b15968_prof);

        
        $__internal_fbb397f56c9ecad45b18f775684fee274662ecdb7e928b632dacc046ad1f98c1->leave($__internal_fbb397f56c9ecad45b18f775684fee274662ecdb7e928b632dacc046ad1f98c1_prof);

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
