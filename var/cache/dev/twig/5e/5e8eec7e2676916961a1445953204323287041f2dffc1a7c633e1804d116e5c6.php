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
        $__internal_b84b1c947d678a801e539e550ac55ec4c6b89a720a5175c4d3f4bdc6cab3a07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84b1c947d678a801e539e550ac55ec4c6b89a720a5175c4d3f4bdc6cab3a07b->enter($__internal_b84b1c947d678a801e539e550ac55ec4c6b89a720a5175c4d3f4bdc6cab3a07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2c519f05a8fee56aeb193d4830e55f49b613c1f154a8ce1e8f4664458a98a04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c519f05a8fee56aeb193d4830e55f49b613c1f154a8ce1e8f4664458a98a04f->enter($__internal_2c519f05a8fee56aeb193d4830e55f49b613c1f154a8ce1e8f4664458a98a04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b84b1c947d678a801e539e550ac55ec4c6b89a720a5175c4d3f4bdc6cab3a07b->leave($__internal_b84b1c947d678a801e539e550ac55ec4c6b89a720a5175c4d3f4bdc6cab3a07b_prof);

        
        $__internal_2c519f05a8fee56aeb193d4830e55f49b613c1f154a8ce1e8f4664458a98a04f->leave($__internal_2c519f05a8fee56aeb193d4830e55f49b613c1f154a8ce1e8f4664458a98a04f_prof);

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
