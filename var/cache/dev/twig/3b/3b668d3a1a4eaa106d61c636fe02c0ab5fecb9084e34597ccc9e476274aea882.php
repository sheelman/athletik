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
        $__internal_2fdeb025f1191a1b7fb1b49032c0a4c4ff92f38cfdb0cf7d2face8794e65bf65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdeb025f1191a1b7fb1b49032c0a4c4ff92f38cfdb0cf7d2face8794e65bf65->enter($__internal_2fdeb025f1191a1b7fb1b49032c0a4c4ff92f38cfdb0cf7d2face8794e65bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a06a5f1a4940e3a223a4624d549a51e5b6438ced2e8972ae3aa92391f1d009fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06a5f1a4940e3a223a4624d549a51e5b6438ced2e8972ae3aa92391f1d009fe->enter($__internal_a06a5f1a4940e3a223a4624d549a51e5b6438ced2e8972ae3aa92391f1d009fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2fdeb025f1191a1b7fb1b49032c0a4c4ff92f38cfdb0cf7d2face8794e65bf65->leave($__internal_2fdeb025f1191a1b7fb1b49032c0a4c4ff92f38cfdb0cf7d2face8794e65bf65_prof);

        
        $__internal_a06a5f1a4940e3a223a4624d549a51e5b6438ced2e8972ae3aa92391f1d009fe->leave($__internal_a06a5f1a4940e3a223a4624d549a51e5b6438ced2e8972ae3aa92391f1d009fe_prof);

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
