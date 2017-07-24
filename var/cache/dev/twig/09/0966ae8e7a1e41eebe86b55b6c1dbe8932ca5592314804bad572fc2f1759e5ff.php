<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_c570c6cf35258b63a30fc182cc32194dc7bc3e950a1b3c687a654bc31a495b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c570c6cf35258b63a30fc182cc32194dc7bc3e950a1b3c687a654bc31a495b2d->enter($__internal_c570c6cf35258b63a30fc182cc32194dc7bc3e950a1b3c687a654bc31a495b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_73ebfa442fc0b36cf86b23ef6195edf3527151334f43cff587b93d06ee2fd6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ebfa442fc0b36cf86b23ef6195edf3527151334f43cff587b93d06ee2fd6d1->enter($__internal_73ebfa442fc0b36cf86b23ef6195edf3527151334f43cff587b93d06ee2fd6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c570c6cf35258b63a30fc182cc32194dc7bc3e950a1b3c687a654bc31a495b2d->leave($__internal_c570c6cf35258b63a30fc182cc32194dc7bc3e950a1b3c687a654bc31a495b2d_prof);

        
        $__internal_73ebfa442fc0b36cf86b23ef6195edf3527151334f43cff587b93d06ee2fd6d1->leave($__internal_73ebfa442fc0b36cf86b23ef6195edf3527151334f43cff587b93d06ee2fd6d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
