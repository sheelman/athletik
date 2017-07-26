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
        $__internal_c6a1f98e45e91677330babaf1376176c1c2cde11633a2c45af7cacd537c45e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a1f98e45e91677330babaf1376176c1c2cde11633a2c45af7cacd537c45e73->enter($__internal_c6a1f98e45e91677330babaf1376176c1c2cde11633a2c45af7cacd537c45e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e4957301ffbe329bf4484dc09a06fd52fdabce8991a24ada7f1d6becdfbb7a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4957301ffbe329bf4484dc09a06fd52fdabce8991a24ada7f1d6becdfbb7a74->enter($__internal_e4957301ffbe329bf4484dc09a06fd52fdabce8991a24ada7f1d6becdfbb7a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c6a1f98e45e91677330babaf1376176c1c2cde11633a2c45af7cacd537c45e73->leave($__internal_c6a1f98e45e91677330babaf1376176c1c2cde11633a2c45af7cacd537c45e73_prof);

        
        $__internal_e4957301ffbe329bf4484dc09a06fd52fdabce8991a24ada7f1d6becdfbb7a74->leave($__internal_e4957301ffbe329bf4484dc09a06fd52fdabce8991a24ada7f1d6becdfbb7a74_prof);

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
