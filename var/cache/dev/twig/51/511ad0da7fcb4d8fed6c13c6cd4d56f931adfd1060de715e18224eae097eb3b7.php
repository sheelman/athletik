<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_2a5bb88de67ca939ec13d351a4b7e8cc4b4246e4e0a19745010284ade79184e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5bb88de67ca939ec13d351a4b7e8cc4b4246e4e0a19745010284ade79184e5->enter($__internal_2a5bb88de67ca939ec13d351a4b7e8cc4b4246e4e0a19745010284ade79184e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_779c0328f1d4050cb81fc3a8214f370b87476abd43bbdfc13157d4ebf7b9da63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779c0328f1d4050cb81fc3a8214f370b87476abd43bbdfc13157d4ebf7b9da63->enter($__internal_779c0328f1d4050cb81fc3a8214f370b87476abd43bbdfc13157d4ebf7b9da63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2a5bb88de67ca939ec13d351a4b7e8cc4b4246e4e0a19745010284ade79184e5->leave($__internal_2a5bb88de67ca939ec13d351a4b7e8cc4b4246e4e0a19745010284ade79184e5_prof);

        
        $__internal_779c0328f1d4050cb81fc3a8214f370b87476abd43bbdfc13157d4ebf7b9da63->leave($__internal_779c0328f1d4050cb81fc3a8214f370b87476abd43bbdfc13157d4ebf7b9da63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
