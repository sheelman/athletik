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
        $__internal_2effb5c8c4f2dc2233689062976ef85f1c39ffda142a1bcd66b5483244bbb456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2effb5c8c4f2dc2233689062976ef85f1c39ffda142a1bcd66b5483244bbb456->enter($__internal_2effb5c8c4f2dc2233689062976ef85f1c39ffda142a1bcd66b5483244bbb456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_22bfa0d3535e6d3a223cab9e7b065fb88bc17318e158d952ed947067c6492e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bfa0d3535e6d3a223cab9e7b065fb88bc17318e158d952ed947067c6492e4f->enter($__internal_22bfa0d3535e6d3a223cab9e7b065fb88bc17318e158d952ed947067c6492e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2effb5c8c4f2dc2233689062976ef85f1c39ffda142a1bcd66b5483244bbb456->leave($__internal_2effb5c8c4f2dc2233689062976ef85f1c39ffda142a1bcd66b5483244bbb456_prof);

        
        $__internal_22bfa0d3535e6d3a223cab9e7b065fb88bc17318e158d952ed947067c6492e4f->leave($__internal_22bfa0d3535e6d3a223cab9e7b065fb88bc17318e158d952ed947067c6492e4f_prof);

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
