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
        $__internal_b18d113f6b9fc7555fc13338c22123e7419c95d653a549666b9d55cab13b3e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18d113f6b9fc7555fc13338c22123e7419c95d653a549666b9d55cab13b3e63->enter($__internal_b18d113f6b9fc7555fc13338c22123e7419c95d653a549666b9d55cab13b3e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_fe86e9906a1e73958f2c298e0062c7d0c3676789c6a2aa8ee2e9115d5d1ebbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe86e9906a1e73958f2c298e0062c7d0c3676789c6a2aa8ee2e9115d5d1ebbd8->enter($__internal_fe86e9906a1e73958f2c298e0062c7d0c3676789c6a2aa8ee2e9115d5d1ebbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b18d113f6b9fc7555fc13338c22123e7419c95d653a549666b9d55cab13b3e63->leave($__internal_b18d113f6b9fc7555fc13338c22123e7419c95d653a549666b9d55cab13b3e63_prof);

        
        $__internal_fe86e9906a1e73958f2c298e0062c7d0c3676789c6a2aa8ee2e9115d5d1ebbd8->leave($__internal_fe86e9906a1e73958f2c298e0062c7d0c3676789c6a2aa8ee2e9115d5d1ebbd8_prof);

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
