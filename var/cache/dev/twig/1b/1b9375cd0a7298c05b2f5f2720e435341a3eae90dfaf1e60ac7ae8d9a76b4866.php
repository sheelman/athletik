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
        $__internal_ad2dab1a435aa1511cf26329bb24b5d1deecfc5c21945ada7a5d1db4310ba791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2dab1a435aa1511cf26329bb24b5d1deecfc5c21945ada7a5d1db4310ba791->enter($__internal_ad2dab1a435aa1511cf26329bb24b5d1deecfc5c21945ada7a5d1db4310ba791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_6b875e313b452b088d374cf7ac781ccf06753e3b90499b96a14d4ae3b24b7f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b875e313b452b088d374cf7ac781ccf06753e3b90499b96a14d4ae3b24b7f52->enter($__internal_6b875e313b452b088d374cf7ac781ccf06753e3b90499b96a14d4ae3b24b7f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ad2dab1a435aa1511cf26329bb24b5d1deecfc5c21945ada7a5d1db4310ba791->leave($__internal_ad2dab1a435aa1511cf26329bb24b5d1deecfc5c21945ada7a5d1db4310ba791_prof);

        
        $__internal_6b875e313b452b088d374cf7ac781ccf06753e3b90499b96a14d4ae3b24b7f52->leave($__internal_6b875e313b452b088d374cf7ac781ccf06753e3b90499b96a14d4ae3b24b7f52_prof);

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
