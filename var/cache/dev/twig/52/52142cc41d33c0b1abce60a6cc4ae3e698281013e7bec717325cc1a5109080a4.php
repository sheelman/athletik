<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_febf99647909c2e45b471404a46469aa0da86c1c157ca2bed809cee37c518a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febf99647909c2e45b471404a46469aa0da86c1c157ca2bed809cee37c518a3e->enter($__internal_febf99647909c2e45b471404a46469aa0da86c1c157ca2bed809cee37c518a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e50636ec7e15cdfc37b4495e58cf7b14d03ab8ad01472741ec9e8ed6abb72381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50636ec7e15cdfc37b4495e58cf7b14d03ab8ad01472741ec9e8ed6abb72381->enter($__internal_e50636ec7e15cdfc37b4495e58cf7b14d03ab8ad01472741ec9e8ed6abb72381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_febf99647909c2e45b471404a46469aa0da86c1c157ca2bed809cee37c518a3e->leave($__internal_febf99647909c2e45b471404a46469aa0da86c1c157ca2bed809cee37c518a3e_prof);

        
        $__internal_e50636ec7e15cdfc37b4495e58cf7b14d03ab8ad01472741ec9e8ed6abb72381->leave($__internal_e50636ec7e15cdfc37b4495e58cf7b14d03ab8ad01472741ec9e8ed6abb72381_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
