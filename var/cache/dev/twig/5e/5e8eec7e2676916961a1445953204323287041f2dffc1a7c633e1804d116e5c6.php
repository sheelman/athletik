<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_3103743a311020dc595d6676568e700ff50c23e98756e515e64f366d2df1f69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3103743a311020dc595d6676568e700ff50c23e98756e515e64f366d2df1f69f->enter($__internal_3103743a311020dc595d6676568e700ff50c23e98756e515e64f366d2df1f69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_cfa6e16ab8fc5e8e85185316cd569bca842e2893ead4b9c367a98b9d597ce7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa6e16ab8fc5e8e85185316cd569bca842e2893ead4b9c367a98b9d597ce7b8->enter($__internal_cfa6e16ab8fc5e8e85185316cd569bca842e2893ead4b9c367a98b9d597ce7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3103743a311020dc595d6676568e700ff50c23e98756e515e64f366d2df1f69f->leave($__internal_3103743a311020dc595d6676568e700ff50c23e98756e515e64f366d2df1f69f_prof);

        
        $__internal_cfa6e16ab8fc5e8e85185316cd569bca842e2893ead4b9c367a98b9d597ce7b8->leave($__internal_cfa6e16ab8fc5e8e85185316cd569bca842e2893ead4b9c367a98b9d597ce7b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
