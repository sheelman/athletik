<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_a71abd2b8fafc27afe777f67894dd5d7d958ac80b97a80459107855a0f13b466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71abd2b8fafc27afe777f67894dd5d7d958ac80b97a80459107855a0f13b466->enter($__internal_a71abd2b8fafc27afe777f67894dd5d7d958ac80b97a80459107855a0f13b466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_f2e6aedf71a35a34fcd0b1819719696a28d92ba57325ff7380188bba4a4c7e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e6aedf71a35a34fcd0b1819719696a28d92ba57325ff7380188bba4a4c7e86->enter($__internal_f2e6aedf71a35a34fcd0b1819719696a28d92ba57325ff7380188bba4a4c7e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a71abd2b8fafc27afe777f67894dd5d7d958ac80b97a80459107855a0f13b466->leave($__internal_a71abd2b8fafc27afe777f67894dd5d7d958ac80b97a80459107855a0f13b466_prof);

        
        $__internal_f2e6aedf71a35a34fcd0b1819719696a28d92ba57325ff7380188bba4a4c7e86->leave($__internal_f2e6aedf71a35a34fcd0b1819719696a28d92ba57325ff7380188bba4a4c7e86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
