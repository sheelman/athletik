<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_f403dadbff4dec16da83e9d9c52e1f966fff45e0fce6a859893dc70828fd6e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f403dadbff4dec16da83e9d9c52e1f966fff45e0fce6a859893dc70828fd6e5b->enter($__internal_f403dadbff4dec16da83e9d9c52e1f966fff45e0fce6a859893dc70828fd6e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_159806f79bc7cebb7183713766608a2c91e99af155362ad8ee6a456cf2cf496a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159806f79bc7cebb7183713766608a2c91e99af155362ad8ee6a456cf2cf496a->enter($__internal_159806f79bc7cebb7183713766608a2c91e99af155362ad8ee6a456cf2cf496a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f403dadbff4dec16da83e9d9c52e1f966fff45e0fce6a859893dc70828fd6e5b->leave($__internal_f403dadbff4dec16da83e9d9c52e1f966fff45e0fce6a859893dc70828fd6e5b_prof);

        
        $__internal_159806f79bc7cebb7183713766608a2c91e99af155362ad8ee6a456cf2cf496a->leave($__internal_159806f79bc7cebb7183713766608a2c91e99af155362ad8ee6a456cf2cf496a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}