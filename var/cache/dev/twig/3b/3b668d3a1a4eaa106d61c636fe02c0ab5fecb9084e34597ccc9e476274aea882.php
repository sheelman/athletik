<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_a49779a434f9aab0a469c4e30105c5eb7521a0a943d2756e5b680cecd83edcea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49779a434f9aab0a469c4e30105c5eb7521a0a943d2756e5b680cecd83edcea->enter($__internal_a49779a434f9aab0a469c4e30105c5eb7521a0a943d2756e5b680cecd83edcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3e986930c21631891e5768345f150e7392e51caeeb9f57e4f8199e6a68b32860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e986930c21631891e5768345f150e7392e51caeeb9f57e4f8199e6a68b32860->enter($__internal_3e986930c21631891e5768345f150e7392e51caeeb9f57e4f8199e6a68b32860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a49779a434f9aab0a469c4e30105c5eb7521a0a943d2756e5b680cecd83edcea->leave($__internal_a49779a434f9aab0a469c4e30105c5eb7521a0a943d2756e5b680cecd83edcea_prof);

        
        $__internal_3e986930c21631891e5768345f150e7392e51caeeb9f57e4f8199e6a68b32860->leave($__internal_3e986930c21631891e5768345f150e7392e51caeeb9f57e4f8199e6a68b32860_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
