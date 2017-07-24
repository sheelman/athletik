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
        $__internal_645ae3e7a54a8b2be048b8d51365911774f2bc16ab46de033eba98d08abe7b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645ae3e7a54a8b2be048b8d51365911774f2bc16ab46de033eba98d08abe7b91->enter($__internal_645ae3e7a54a8b2be048b8d51365911774f2bc16ab46de033eba98d08abe7b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_38d5edda5fd99de78bd05d7b9f30cd3ab0ceeb441fb0916eaba827269204d39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d5edda5fd99de78bd05d7b9f30cd3ab0ceeb441fb0916eaba827269204d39a->enter($__internal_38d5edda5fd99de78bd05d7b9f30cd3ab0ceeb441fb0916eaba827269204d39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_645ae3e7a54a8b2be048b8d51365911774f2bc16ab46de033eba98d08abe7b91->leave($__internal_645ae3e7a54a8b2be048b8d51365911774f2bc16ab46de033eba98d08abe7b91_prof);

        
        $__internal_38d5edda5fd99de78bd05d7b9f30cd3ab0ceeb441fb0916eaba827269204d39a->leave($__internal_38d5edda5fd99de78bd05d7b9f30cd3ab0ceeb441fb0916eaba827269204d39a_prof);

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
