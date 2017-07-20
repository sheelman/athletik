<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_9261fb7e4b7017f72aca8d66b1d430430cbca8a1aacf50fbe1b488d6d50f7c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9261fb7e4b7017f72aca8d66b1d430430cbca8a1aacf50fbe1b488d6d50f7c29->enter($__internal_9261fb7e4b7017f72aca8d66b1d430430cbca8a1aacf50fbe1b488d6d50f7c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_746c07f107f683e9a69bfe42722b69f77ad191b1c1358d442c936331497626ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746c07f107f683e9a69bfe42722b69f77ad191b1c1358d442c936331497626ae->enter($__internal_746c07f107f683e9a69bfe42722b69f77ad191b1c1358d442c936331497626ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9261fb7e4b7017f72aca8d66b1d430430cbca8a1aacf50fbe1b488d6d50f7c29->leave($__internal_9261fb7e4b7017f72aca8d66b1d430430cbca8a1aacf50fbe1b488d6d50f7c29_prof);

        
        $__internal_746c07f107f683e9a69bfe42722b69f77ad191b1c1358d442c936331497626ae->leave($__internal_746c07f107f683e9a69bfe42722b69f77ad191b1c1358d442c936331497626ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
