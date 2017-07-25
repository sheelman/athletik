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
        $__internal_f9609840e64deda93077fa5c720c05d2d71db3f9528ff5d5a5847bc01b5fb776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9609840e64deda93077fa5c720c05d2d71db3f9528ff5d5a5847bc01b5fb776->enter($__internal_f9609840e64deda93077fa5c720c05d2d71db3f9528ff5d5a5847bc01b5fb776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_00f1d65cc16457c5bd26283c3f5e02f0874c58a6394290136b0dbfb2465e55f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f1d65cc16457c5bd26283c3f5e02f0874c58a6394290136b0dbfb2465e55f6->enter($__internal_00f1d65cc16457c5bd26283c3f5e02f0874c58a6394290136b0dbfb2465e55f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f9609840e64deda93077fa5c720c05d2d71db3f9528ff5d5a5847bc01b5fb776->leave($__internal_f9609840e64deda93077fa5c720c05d2d71db3f9528ff5d5a5847bc01b5fb776_prof);

        
        $__internal_00f1d65cc16457c5bd26283c3f5e02f0874c58a6394290136b0dbfb2465e55f6->leave($__internal_00f1d65cc16457c5bd26283c3f5e02f0874c58a6394290136b0dbfb2465e55f6_prof);

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
