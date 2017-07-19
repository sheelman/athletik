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
        $__internal_d159b043910d159b9a653b61b6c8f27246ecdb0d5ccb1519b02f044bb0f52030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d159b043910d159b9a653b61b6c8f27246ecdb0d5ccb1519b02f044bb0f52030->enter($__internal_d159b043910d159b9a653b61b6c8f27246ecdb0d5ccb1519b02f044bb0f52030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0311d96e7658d1929b43181a1baaa67ffb905cb3b4bb821d4944b04b2b5bb668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0311d96e7658d1929b43181a1baaa67ffb905cb3b4bb821d4944b04b2b5bb668->enter($__internal_0311d96e7658d1929b43181a1baaa67ffb905cb3b4bb821d4944b04b2b5bb668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d159b043910d159b9a653b61b6c8f27246ecdb0d5ccb1519b02f044bb0f52030->leave($__internal_d159b043910d159b9a653b61b6c8f27246ecdb0d5ccb1519b02f044bb0f52030_prof);

        
        $__internal_0311d96e7658d1929b43181a1baaa67ffb905cb3b4bb821d4944b04b2b5bb668->leave($__internal_0311d96e7658d1929b43181a1baaa67ffb905cb3b4bb821d4944b04b2b5bb668_prof);

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
