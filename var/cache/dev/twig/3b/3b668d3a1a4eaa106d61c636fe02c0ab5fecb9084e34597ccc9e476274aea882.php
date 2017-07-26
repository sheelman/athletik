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
        $__internal_c8309ffebceb6c70adfa109204e7e4731144cb9393485cae6145bfa8f11eba23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8309ffebceb6c70adfa109204e7e4731144cb9393485cae6145bfa8f11eba23->enter($__internal_c8309ffebceb6c70adfa109204e7e4731144cb9393485cae6145bfa8f11eba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3336a59e83738b760703b2b96c3399998162597b39a6444ef8c5f47df04a1468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3336a59e83738b760703b2b96c3399998162597b39a6444ef8c5f47df04a1468->enter($__internal_3336a59e83738b760703b2b96c3399998162597b39a6444ef8c5f47df04a1468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c8309ffebceb6c70adfa109204e7e4731144cb9393485cae6145bfa8f11eba23->leave($__internal_c8309ffebceb6c70adfa109204e7e4731144cb9393485cae6145bfa8f11eba23_prof);

        
        $__internal_3336a59e83738b760703b2b96c3399998162597b39a6444ef8c5f47df04a1468->leave($__internal_3336a59e83738b760703b2b96c3399998162597b39a6444ef8c5f47df04a1468_prof);

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
