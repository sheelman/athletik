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
        $__internal_faab63a543f7c4ff05603bc9c8752caa5e8a8dd73159a391c2e0627a0c10b4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faab63a543f7c4ff05603bc9c8752caa5e8a8dd73159a391c2e0627a0c10b4a3->enter($__internal_faab63a543f7c4ff05603bc9c8752caa5e8a8dd73159a391c2e0627a0c10b4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_02a3d0e581800db4eb22b752f087e388ee7774d5f4e1b39f37878d9b16eee07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a3d0e581800db4eb22b752f087e388ee7774d5f4e1b39f37878d9b16eee07e->enter($__internal_02a3d0e581800db4eb22b752f087e388ee7774d5f4e1b39f37878d9b16eee07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_faab63a543f7c4ff05603bc9c8752caa5e8a8dd73159a391c2e0627a0c10b4a3->leave($__internal_faab63a543f7c4ff05603bc9c8752caa5e8a8dd73159a391c2e0627a0c10b4a3_prof);

        
        $__internal_02a3d0e581800db4eb22b752f087e388ee7774d5f4e1b39f37878d9b16eee07e->leave($__internal_02a3d0e581800db4eb22b752f087e388ee7774d5f4e1b39f37878d9b16eee07e_prof);

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
