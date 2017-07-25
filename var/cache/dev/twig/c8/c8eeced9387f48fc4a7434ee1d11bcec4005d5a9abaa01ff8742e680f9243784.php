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
        $__internal_6010faa8ee63283379c374a1c1458b099807c7f2bb1362b044c653d5b4f9fb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6010faa8ee63283379c374a1c1458b099807c7f2bb1362b044c653d5b4f9fb6b->enter($__internal_6010faa8ee63283379c374a1c1458b099807c7f2bb1362b044c653d5b4f9fb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9a768fc136c31834694d016a9b1621f7b0eb59682a740716c7945d0111b212b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a768fc136c31834694d016a9b1621f7b0eb59682a740716c7945d0111b212b8->enter($__internal_9a768fc136c31834694d016a9b1621f7b0eb59682a740716c7945d0111b212b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6010faa8ee63283379c374a1c1458b099807c7f2bb1362b044c653d5b4f9fb6b->leave($__internal_6010faa8ee63283379c374a1c1458b099807c7f2bb1362b044c653d5b4f9fb6b_prof);

        
        $__internal_9a768fc136c31834694d016a9b1621f7b0eb59682a740716c7945d0111b212b8->leave($__internal_9a768fc136c31834694d016a9b1621f7b0eb59682a740716c7945d0111b212b8_prof);

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
