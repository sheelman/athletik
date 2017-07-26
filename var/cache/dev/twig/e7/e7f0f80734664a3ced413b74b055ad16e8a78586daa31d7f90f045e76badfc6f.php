<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_602922c70bb5824a4b0be770297380eac7f59eddfd395d53034c35d23ddb5994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602922c70bb5824a4b0be770297380eac7f59eddfd395d53034c35d23ddb5994->enter($__internal_602922c70bb5824a4b0be770297380eac7f59eddfd395d53034c35d23ddb5994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d263bb72728d356093a7bf9f7a43d747cb807d56763cde98661d7c3dabfb8107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d263bb72728d356093a7bf9f7a43d747cb807d56763cde98661d7c3dabfb8107->enter($__internal_d263bb72728d356093a7bf9f7a43d747cb807d56763cde98661d7c3dabfb8107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_602922c70bb5824a4b0be770297380eac7f59eddfd395d53034c35d23ddb5994->leave($__internal_602922c70bb5824a4b0be770297380eac7f59eddfd395d53034c35d23ddb5994_prof);

        
        $__internal_d263bb72728d356093a7bf9f7a43d747cb807d56763cde98661d7c3dabfb8107->leave($__internal_d263bb72728d356093a7bf9f7a43d747cb807d56763cde98661d7c3dabfb8107_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
