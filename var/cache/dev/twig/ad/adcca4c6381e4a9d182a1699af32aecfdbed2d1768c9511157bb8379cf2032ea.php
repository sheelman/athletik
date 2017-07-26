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
        $__internal_733f7d1c63c4c8021ebee8d17f4dc81eb901c224c13b75d2a292eb6ba074b974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733f7d1c63c4c8021ebee8d17f4dc81eb901c224c13b75d2a292eb6ba074b974->enter($__internal_733f7d1c63c4c8021ebee8d17f4dc81eb901c224c13b75d2a292eb6ba074b974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f58aa3ce545c8ae81d0df8d102af5b502233ab129cec7330ebbd0a3e1d520ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58aa3ce545c8ae81d0df8d102af5b502233ab129cec7330ebbd0a3e1d520ea4->enter($__internal_f58aa3ce545c8ae81d0df8d102af5b502233ab129cec7330ebbd0a3e1d520ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_733f7d1c63c4c8021ebee8d17f4dc81eb901c224c13b75d2a292eb6ba074b974->leave($__internal_733f7d1c63c4c8021ebee8d17f4dc81eb901c224c13b75d2a292eb6ba074b974_prof);

        
        $__internal_f58aa3ce545c8ae81d0df8d102af5b502233ab129cec7330ebbd0a3e1d520ea4->leave($__internal_f58aa3ce545c8ae81d0df8d102af5b502233ab129cec7330ebbd0a3e1d520ea4_prof);

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
