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
        $__internal_86b8509f2677853e5594eea4a88fb94adfa50be0ac10fee0a2a68c7a7a1db335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b8509f2677853e5594eea4a88fb94adfa50be0ac10fee0a2a68c7a7a1db335->enter($__internal_86b8509f2677853e5594eea4a88fb94adfa50be0ac10fee0a2a68c7a7a1db335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e366e26ef04bea0556e963598bf5ed9c10962c47138d214e152fe77ae1805d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e366e26ef04bea0556e963598bf5ed9c10962c47138d214e152fe77ae1805d78->enter($__internal_e366e26ef04bea0556e963598bf5ed9c10962c47138d214e152fe77ae1805d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_86b8509f2677853e5594eea4a88fb94adfa50be0ac10fee0a2a68c7a7a1db335->leave($__internal_86b8509f2677853e5594eea4a88fb94adfa50be0ac10fee0a2a68c7a7a1db335_prof);

        
        $__internal_e366e26ef04bea0556e963598bf5ed9c10962c47138d214e152fe77ae1805d78->leave($__internal_e366e26ef04bea0556e963598bf5ed9c10962c47138d214e152fe77ae1805d78_prof);

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
