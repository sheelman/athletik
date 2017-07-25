<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_17e05378ea4df399d8ea02418e72e272a02a36b3b672e9dccae782e1cf5c7dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e05378ea4df399d8ea02418e72e272a02a36b3b672e9dccae782e1cf5c7dbb->enter($__internal_17e05378ea4df399d8ea02418e72e272a02a36b3b672e9dccae782e1cf5c7dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_654192963ee44e00ad8d71c3ea4522c3db4e7b165e071e0bfbbe07359b325fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654192963ee44e00ad8d71c3ea4522c3db4e7b165e071e0bfbbe07359b325fb0->enter($__internal_654192963ee44e00ad8d71c3ea4522c3db4e7b165e071e0bfbbe07359b325fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_17e05378ea4df399d8ea02418e72e272a02a36b3b672e9dccae782e1cf5c7dbb->leave($__internal_17e05378ea4df399d8ea02418e72e272a02a36b3b672e9dccae782e1cf5c7dbb_prof);

        
        $__internal_654192963ee44e00ad8d71c3ea4522c3db4e7b165e071e0bfbbe07359b325fb0->leave($__internal_654192963ee44e00ad8d71c3ea4522c3db4e7b165e071e0bfbbe07359b325fb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
