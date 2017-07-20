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
        $__internal_41cd2c6179bc0c564c4ecf5ccdeb36b12c66d7b99ce762781acb82ab94cb2708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cd2c6179bc0c564c4ecf5ccdeb36b12c66d7b99ce762781acb82ab94cb2708->enter($__internal_41cd2c6179bc0c564c4ecf5ccdeb36b12c66d7b99ce762781acb82ab94cb2708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d84bf740836133f4ceaf895f77bfe0d4e895e09e7a02c73a006f36189f48cc31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84bf740836133f4ceaf895f77bfe0d4e895e09e7a02c73a006f36189f48cc31->enter($__internal_d84bf740836133f4ceaf895f77bfe0d4e895e09e7a02c73a006f36189f48cc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_41cd2c6179bc0c564c4ecf5ccdeb36b12c66d7b99ce762781acb82ab94cb2708->leave($__internal_41cd2c6179bc0c564c4ecf5ccdeb36b12c66d7b99ce762781acb82ab94cb2708_prof);

        
        $__internal_d84bf740836133f4ceaf895f77bfe0d4e895e09e7a02c73a006f36189f48cc31->leave($__internal_d84bf740836133f4ceaf895f77bfe0d4e895e09e7a02c73a006f36189f48cc31_prof);

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
