<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_d29823b48c053399b55c95be491fa4c228a7555625d42f928d65e5951dcf676a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29823b48c053399b55c95be491fa4c228a7555625d42f928d65e5951dcf676a->enter($__internal_d29823b48c053399b55c95be491fa4c228a7555625d42f928d65e5951dcf676a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_df1c60a6f2ae786113873dd231c5305bba2b8fa5497f720a3a302102a0fa0b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1c60a6f2ae786113873dd231c5305bba2b8fa5497f720a3a302102a0fa0b39->enter($__internal_df1c60a6f2ae786113873dd231c5305bba2b8fa5497f720a3a302102a0fa0b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d29823b48c053399b55c95be491fa4c228a7555625d42f928d65e5951dcf676a->leave($__internal_d29823b48c053399b55c95be491fa4c228a7555625d42f928d65e5951dcf676a_prof);

        
        $__internal_df1c60a6f2ae786113873dd231c5305bba2b8fa5497f720a3a302102a0fa0b39->leave($__internal_df1c60a6f2ae786113873dd231c5305bba2b8fa5497f720a3a302102a0fa0b39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
