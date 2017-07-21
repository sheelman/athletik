<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_b4ca76e09ca786b98e80a5b8564978aadaa46ccf73bdf975992d03ecbff07a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ca76e09ca786b98e80a5b8564978aadaa46ccf73bdf975992d03ecbff07a27->enter($__internal_b4ca76e09ca786b98e80a5b8564978aadaa46ccf73bdf975992d03ecbff07a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6be11505ff71982bd64f7060ab58ff96625198e361bd13bae0b89fc1a0e6707e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be11505ff71982bd64f7060ab58ff96625198e361bd13bae0b89fc1a0e6707e->enter($__internal_6be11505ff71982bd64f7060ab58ff96625198e361bd13bae0b89fc1a0e6707e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b4ca76e09ca786b98e80a5b8564978aadaa46ccf73bdf975992d03ecbff07a27->leave($__internal_b4ca76e09ca786b98e80a5b8564978aadaa46ccf73bdf975992d03ecbff07a27_prof);

        
        $__internal_6be11505ff71982bd64f7060ab58ff96625198e361bd13bae0b89fc1a0e6707e->leave($__internal_6be11505ff71982bd64f7060ab58ff96625198e361bd13bae0b89fc1a0e6707e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
