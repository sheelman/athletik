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
        $__internal_408be6b707841ae1b0ca5a63e373ef094d02d4514243c3efbb93e6a42e470a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408be6b707841ae1b0ca5a63e373ef094d02d4514243c3efbb93e6a42e470a14->enter($__internal_408be6b707841ae1b0ca5a63e373ef094d02d4514243c3efbb93e6a42e470a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_310568a02374e7e15a46a0d76b71ed193bc2bf76023bc9fbaf68592d492399b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310568a02374e7e15a46a0d76b71ed193bc2bf76023bc9fbaf68592d492399b4->enter($__internal_310568a02374e7e15a46a0d76b71ed193bc2bf76023bc9fbaf68592d492399b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_408be6b707841ae1b0ca5a63e373ef094d02d4514243c3efbb93e6a42e470a14->leave($__internal_408be6b707841ae1b0ca5a63e373ef094d02d4514243c3efbb93e6a42e470a14_prof);

        
        $__internal_310568a02374e7e15a46a0d76b71ed193bc2bf76023bc9fbaf68592d492399b4->leave($__internal_310568a02374e7e15a46a0d76b71ed193bc2bf76023bc9fbaf68592d492399b4_prof);

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
