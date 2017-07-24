<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_e961a942a7a679955816d8316624d42b69e04df02802b5860399018635e61b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e961a942a7a679955816d8316624d42b69e04df02802b5860399018635e61b6b->enter($__internal_e961a942a7a679955816d8316624d42b69e04df02802b5860399018635e61b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_bbf73835e601dbd9b0383e6c465d280362391a1aa42ce05f19f131143eff4920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf73835e601dbd9b0383e6c465d280362391a1aa42ce05f19f131143eff4920->enter($__internal_bbf73835e601dbd9b0383e6c465d280362391a1aa42ce05f19f131143eff4920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e961a942a7a679955816d8316624d42b69e04df02802b5860399018635e61b6b->leave($__internal_e961a942a7a679955816d8316624d42b69e04df02802b5860399018635e61b6b_prof);

        
        $__internal_bbf73835e601dbd9b0383e6c465d280362391a1aa42ce05f19f131143eff4920->leave($__internal_bbf73835e601dbd9b0383e6c465d280362391a1aa42ce05f19f131143eff4920_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
