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
        $__internal_966d840bfbb826c92591d9db61a312f80ad8efdd919259a9ed91d11cb88ea0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966d840bfbb826c92591d9db61a312f80ad8efdd919259a9ed91d11cb88ea0c1->enter($__internal_966d840bfbb826c92591d9db61a312f80ad8efdd919259a9ed91d11cb88ea0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9f5cf26187a2cb6c615fdb6472ac61f2503abbcaeab1bb1cf3a480d8407af3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5cf26187a2cb6c615fdb6472ac61f2503abbcaeab1bb1cf3a480d8407af3dc->enter($__internal_9f5cf26187a2cb6c615fdb6472ac61f2503abbcaeab1bb1cf3a480d8407af3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_966d840bfbb826c92591d9db61a312f80ad8efdd919259a9ed91d11cb88ea0c1->leave($__internal_966d840bfbb826c92591d9db61a312f80ad8efdd919259a9ed91d11cb88ea0c1_prof);

        
        $__internal_9f5cf26187a2cb6c615fdb6472ac61f2503abbcaeab1bb1cf3a480d8407af3dc->leave($__internal_9f5cf26187a2cb6c615fdb6472ac61f2503abbcaeab1bb1cf3a480d8407af3dc_prof);

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
