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
        $__internal_e411f09c4164f16e29487319520212aa5f42f75088d7b8615dbfeb09fab70e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e411f09c4164f16e29487319520212aa5f42f75088d7b8615dbfeb09fab70e6e->enter($__internal_e411f09c4164f16e29487319520212aa5f42f75088d7b8615dbfeb09fab70e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_db759aebd559c42b710c857d8d63411dab6dc1d528aecc0adb1039149ce8b005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db759aebd559c42b710c857d8d63411dab6dc1d528aecc0adb1039149ce8b005->enter($__internal_db759aebd559c42b710c857d8d63411dab6dc1d528aecc0adb1039149ce8b005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e411f09c4164f16e29487319520212aa5f42f75088d7b8615dbfeb09fab70e6e->leave($__internal_e411f09c4164f16e29487319520212aa5f42f75088d7b8615dbfeb09fab70e6e_prof);

        
        $__internal_db759aebd559c42b710c857d8d63411dab6dc1d528aecc0adb1039149ce8b005->leave($__internal_db759aebd559c42b710c857d8d63411dab6dc1d528aecc0adb1039149ce8b005_prof);

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
