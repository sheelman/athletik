<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_875936ba539b235d8bb40ef4019b8cbea283dfe4a4a2b17e77343b6710a5f523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875936ba539b235d8bb40ef4019b8cbea283dfe4a4a2b17e77343b6710a5f523->enter($__internal_875936ba539b235d8bb40ef4019b8cbea283dfe4a4a2b17e77343b6710a5f523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e75d530bc26eee41c3060dd0c11aa740072db426ad57af650a46ae719bc3ecf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75d530bc26eee41c3060dd0c11aa740072db426ad57af650a46ae719bc3ecf2->enter($__internal_e75d530bc26eee41c3060dd0c11aa740072db426ad57af650a46ae719bc3ecf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_875936ba539b235d8bb40ef4019b8cbea283dfe4a4a2b17e77343b6710a5f523->leave($__internal_875936ba539b235d8bb40ef4019b8cbea283dfe4a4a2b17e77343b6710a5f523_prof);

        
        $__internal_e75d530bc26eee41c3060dd0c11aa740072db426ad57af650a46ae719bc3ecf2->leave($__internal_e75d530bc26eee41c3060dd0c11aa740072db426ad57af650a46ae719bc3ecf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
