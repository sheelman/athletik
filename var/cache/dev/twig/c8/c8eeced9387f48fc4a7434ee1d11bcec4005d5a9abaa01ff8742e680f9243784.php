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
        $__internal_fb8f7ad062ac10e33b28f9f9db0679050911c264365ebea990664d5cda8b2e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8f7ad062ac10e33b28f9f9db0679050911c264365ebea990664d5cda8b2e75->enter($__internal_fb8f7ad062ac10e33b28f9f9db0679050911c264365ebea990664d5cda8b2e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ee736670e16f55a46d0a645881cd9fde7c081902f1521531234279bd06a281a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee736670e16f55a46d0a645881cd9fde7c081902f1521531234279bd06a281a4->enter($__internal_ee736670e16f55a46d0a645881cd9fde7c081902f1521531234279bd06a281a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fb8f7ad062ac10e33b28f9f9db0679050911c264365ebea990664d5cda8b2e75->leave($__internal_fb8f7ad062ac10e33b28f9f9db0679050911c264365ebea990664d5cda8b2e75_prof);

        
        $__internal_ee736670e16f55a46d0a645881cd9fde7c081902f1521531234279bd06a281a4->leave($__internal_ee736670e16f55a46d0a645881cd9fde7c081902f1521531234279bd06a281a4_prof);

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
