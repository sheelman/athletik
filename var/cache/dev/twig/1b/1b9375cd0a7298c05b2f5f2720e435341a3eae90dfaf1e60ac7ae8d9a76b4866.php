<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a6258756c609d9966ea5b8713a098e1f5e2e153dc3abde0ae0e67a7b662fcdeb extends Twig_Template
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
        $__internal_4ef9127c2f86ea8ffb3333a617cc95c3981b496123d81a4bebdc9092b2aa86d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef9127c2f86ea8ffb3333a617cc95c3981b496123d81a4bebdc9092b2aa86d1->enter($__internal_4ef9127c2f86ea8ffb3333a617cc95c3981b496123d81a4bebdc9092b2aa86d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_04e266740493dca4b21ddc440539e9dd4460f3790c9c97ca278c68c4a15af485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e266740493dca4b21ddc440539e9dd4460f3790c9c97ca278c68c4a15af485->enter($__internal_04e266740493dca4b21ddc440539e9dd4460f3790c9c97ca278c68c4a15af485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_4ef9127c2f86ea8ffb3333a617cc95c3981b496123d81a4bebdc9092b2aa86d1->leave($__internal_4ef9127c2f86ea8ffb3333a617cc95c3981b496123d81a4bebdc9092b2aa86d1_prof);

        
        $__internal_04e266740493dca4b21ddc440539e9dd4460f3790c9c97ca278c68c4a15af485->leave($__internal_04e266740493dca4b21ddc440539e9dd4460f3790c9c97ca278c68c4a15af485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
