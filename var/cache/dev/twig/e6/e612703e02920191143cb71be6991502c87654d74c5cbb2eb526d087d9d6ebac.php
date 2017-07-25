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
        $__internal_106616ac5c05b2c615b14526a2cf6ded8a8bde2b06c6045d76470888e3057508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106616ac5c05b2c615b14526a2cf6ded8a8bde2b06c6045d76470888e3057508->enter($__internal_106616ac5c05b2c615b14526a2cf6ded8a8bde2b06c6045d76470888e3057508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9345d54b90f60cf52a833c36afc3244261181946da13a1025efd7623bb0fa425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9345d54b90f60cf52a833c36afc3244261181946da13a1025efd7623bb0fa425->enter($__internal_9345d54b90f60cf52a833c36afc3244261181946da13a1025efd7623bb0fa425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_106616ac5c05b2c615b14526a2cf6ded8a8bde2b06c6045d76470888e3057508->leave($__internal_106616ac5c05b2c615b14526a2cf6ded8a8bde2b06c6045d76470888e3057508_prof);

        
        $__internal_9345d54b90f60cf52a833c36afc3244261181946da13a1025efd7623bb0fa425->leave($__internal_9345d54b90f60cf52a833c36afc3244261181946da13a1025efd7623bb0fa425_prof);

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
