<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_ddd060bd003be6a16695f43e4101e688d99d0598944b5823f9590afce2747071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd060bd003be6a16695f43e4101e688d99d0598944b5823f9590afce2747071->enter($__internal_ddd060bd003be6a16695f43e4101e688d99d0598944b5823f9590afce2747071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_830949379d118cba202869403b2e7824a8c3ad74e6a886d9b368f3cf3ab8934f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830949379d118cba202869403b2e7824a8c3ad74e6a886d9b368f3cf3ab8934f->enter($__internal_830949379d118cba202869403b2e7824a8c3ad74e6a886d9b368f3cf3ab8934f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ddd060bd003be6a16695f43e4101e688d99d0598944b5823f9590afce2747071->leave($__internal_ddd060bd003be6a16695f43e4101e688d99d0598944b5823f9590afce2747071_prof);

        
        $__internal_830949379d118cba202869403b2e7824a8c3ad74e6a886d9b368f3cf3ab8934f->leave($__internal_830949379d118cba202869403b2e7824a8c3ad74e6a886d9b368f3cf3ab8934f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
