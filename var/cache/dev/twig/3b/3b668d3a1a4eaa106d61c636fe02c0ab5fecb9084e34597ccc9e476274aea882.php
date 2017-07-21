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
        $__internal_a41e81988ee16a3194df07a401584ccc491f05bed6fa8d8ce521c8d2f9e33536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41e81988ee16a3194df07a401584ccc491f05bed6fa8d8ce521c8d2f9e33536->enter($__internal_a41e81988ee16a3194df07a401584ccc491f05bed6fa8d8ce521c8d2f9e33536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ae824a52a514d5eb026998016f4b77e58d470b81db575a128d1a2e214e70dc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae824a52a514d5eb026998016f4b77e58d470b81db575a128d1a2e214e70dc39->enter($__internal_ae824a52a514d5eb026998016f4b77e58d470b81db575a128d1a2e214e70dc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a41e81988ee16a3194df07a401584ccc491f05bed6fa8d8ce521c8d2f9e33536->leave($__internal_a41e81988ee16a3194df07a401584ccc491f05bed6fa8d8ce521c8d2f9e33536_prof);

        
        $__internal_ae824a52a514d5eb026998016f4b77e58d470b81db575a128d1a2e214e70dc39->leave($__internal_ae824a52a514d5eb026998016f4b77e58d470b81db575a128d1a2e214e70dc39_prof);

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
