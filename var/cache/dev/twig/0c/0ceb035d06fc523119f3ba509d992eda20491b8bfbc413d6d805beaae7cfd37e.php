<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_a509976cc90abc7413cd53a73ecc5b0b77fa55dfd03ace1eb14f932883834060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a509976cc90abc7413cd53a73ecc5b0b77fa55dfd03ace1eb14f932883834060->enter($__internal_a509976cc90abc7413cd53a73ecc5b0b77fa55dfd03ace1eb14f932883834060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c374fb6dba449da7d56ec9c69e8bb0ca48d00845cb15823ea1b0ce8fdb75f9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c374fb6dba449da7d56ec9c69e8bb0ca48d00845cb15823ea1b0ce8fdb75f9ee->enter($__internal_c374fb6dba449da7d56ec9c69e8bb0ca48d00845cb15823ea1b0ce8fdb75f9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a509976cc90abc7413cd53a73ecc5b0b77fa55dfd03ace1eb14f932883834060->leave($__internal_a509976cc90abc7413cd53a73ecc5b0b77fa55dfd03ace1eb14f932883834060_prof);

        
        $__internal_c374fb6dba449da7d56ec9c69e8bb0ca48d00845cb15823ea1b0ce8fdb75f9ee->leave($__internal_c374fb6dba449da7d56ec9c69e8bb0ca48d00845cb15823ea1b0ce8fdb75f9ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
