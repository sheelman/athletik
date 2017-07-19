<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_437c8fcff221efbe219d50f03b03947354c7f056eba9c2c366b267e964e447d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437c8fcff221efbe219d50f03b03947354c7f056eba9c2c366b267e964e447d0->enter($__internal_437c8fcff221efbe219d50f03b03947354c7f056eba9c2c366b267e964e447d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a650e2a30d5fab40bddd7e2d660a25f87ce4108cb0450aa4485874bb18479fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a650e2a30d5fab40bddd7e2d660a25f87ce4108cb0450aa4485874bb18479fde->enter($__internal_a650e2a30d5fab40bddd7e2d660a25f87ce4108cb0450aa4485874bb18479fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_437c8fcff221efbe219d50f03b03947354c7f056eba9c2c366b267e964e447d0->leave($__internal_437c8fcff221efbe219d50f03b03947354c7f056eba9c2c366b267e964e447d0_prof);

        
        $__internal_a650e2a30d5fab40bddd7e2d660a25f87ce4108cb0450aa4485874bb18479fde->leave($__internal_a650e2a30d5fab40bddd7e2d660a25f87ce4108cb0450aa4485874bb18479fde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
