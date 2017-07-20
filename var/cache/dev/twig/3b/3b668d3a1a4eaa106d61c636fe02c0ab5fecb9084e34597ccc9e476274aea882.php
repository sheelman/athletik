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
        $__internal_54ef3c78a98c1b3f715785bded009cfd1825e3707f31025fce810f870c57cf47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ef3c78a98c1b3f715785bded009cfd1825e3707f31025fce810f870c57cf47->enter($__internal_54ef3c78a98c1b3f715785bded009cfd1825e3707f31025fce810f870c57cf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ffab5970e0f5a4942b4a3e20ef8a0aa51485a355b6a26203b5749fa6fcba8a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffab5970e0f5a4942b4a3e20ef8a0aa51485a355b6a26203b5749fa6fcba8a14->enter($__internal_ffab5970e0f5a4942b4a3e20ef8a0aa51485a355b6a26203b5749fa6fcba8a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_54ef3c78a98c1b3f715785bded009cfd1825e3707f31025fce810f870c57cf47->leave($__internal_54ef3c78a98c1b3f715785bded009cfd1825e3707f31025fce810f870c57cf47_prof);

        
        $__internal_ffab5970e0f5a4942b4a3e20ef8a0aa51485a355b6a26203b5749fa6fcba8a14->leave($__internal_ffab5970e0f5a4942b4a3e20ef8a0aa51485a355b6a26203b5749fa6fcba8a14_prof);

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
