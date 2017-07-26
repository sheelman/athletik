<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_6566a555f5905dc67a65d74608e5632c123b929f25eadae47abf5c047e4bd12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6566a555f5905dc67a65d74608e5632c123b929f25eadae47abf5c047e4bd12c->enter($__internal_6566a555f5905dc67a65d74608e5632c123b929f25eadae47abf5c047e4bd12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a484d523c1ca3e7afac1704021dc354877967690bca327db984808086e08d754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a484d523c1ca3e7afac1704021dc354877967690bca327db984808086e08d754->enter($__internal_a484d523c1ca3e7afac1704021dc354877967690bca327db984808086e08d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6566a555f5905dc67a65d74608e5632c123b929f25eadae47abf5c047e4bd12c->leave($__internal_6566a555f5905dc67a65d74608e5632c123b929f25eadae47abf5c047e4bd12c_prof);

        
        $__internal_a484d523c1ca3e7afac1704021dc354877967690bca327db984808086e08d754->leave($__internal_a484d523c1ca3e7afac1704021dc354877967690bca327db984808086e08d754_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
