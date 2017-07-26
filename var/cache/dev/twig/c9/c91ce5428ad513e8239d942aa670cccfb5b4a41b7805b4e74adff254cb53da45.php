<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_50b8447a3828dcc5355bc970f8fa2dc4f3a457f7f4d6f114b19f3f89b7f91bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b8447a3828dcc5355bc970f8fa2dc4f3a457f7f4d6f114b19f3f89b7f91bfb->enter($__internal_50b8447a3828dcc5355bc970f8fa2dc4f3a457f7f4d6f114b19f3f89b7f91bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e60a8a374379d6e7f6cb8bab9da7f2520468f31a47289f9d6efc4753179e0efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60a8a374379d6e7f6cb8bab9da7f2520468f31a47289f9d6efc4753179e0efc->enter($__internal_e60a8a374379d6e7f6cb8bab9da7f2520468f31a47289f9d6efc4753179e0efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_50b8447a3828dcc5355bc970f8fa2dc4f3a457f7f4d6f114b19f3f89b7f91bfb->leave($__internal_50b8447a3828dcc5355bc970f8fa2dc4f3a457f7f4d6f114b19f3f89b7f91bfb_prof);

        
        $__internal_e60a8a374379d6e7f6cb8bab9da7f2520468f31a47289f9d6efc4753179e0efc->leave($__internal_e60a8a374379d6e7f6cb8bab9da7f2520468f31a47289f9d6efc4753179e0efc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
