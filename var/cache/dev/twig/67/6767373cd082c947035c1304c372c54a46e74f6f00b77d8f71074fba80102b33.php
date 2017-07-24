<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_b3f166d0ea4d5b574e4e52f5aab622ad38f7a3d0bebda51acf92eb8988df1970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f166d0ea4d5b574e4e52f5aab622ad38f7a3d0bebda51acf92eb8988df1970->enter($__internal_b3f166d0ea4d5b574e4e52f5aab622ad38f7a3d0bebda51acf92eb8988df1970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_44e357e5c72ca4cc9d5a294a71053348d8db7fef79c082aa88e1e405430354e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e357e5c72ca4cc9d5a294a71053348d8db7fef79c082aa88e1e405430354e9->enter($__internal_44e357e5c72ca4cc9d5a294a71053348d8db7fef79c082aa88e1e405430354e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b3f166d0ea4d5b574e4e52f5aab622ad38f7a3d0bebda51acf92eb8988df1970->leave($__internal_b3f166d0ea4d5b574e4e52f5aab622ad38f7a3d0bebda51acf92eb8988df1970_prof);

        
        $__internal_44e357e5c72ca4cc9d5a294a71053348d8db7fef79c082aa88e1e405430354e9->leave($__internal_44e357e5c72ca4cc9d5a294a71053348d8db7fef79c082aa88e1e405430354e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
