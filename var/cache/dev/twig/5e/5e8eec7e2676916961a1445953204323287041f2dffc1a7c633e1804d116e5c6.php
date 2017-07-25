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
        $__internal_8988d20139a0a1a30b123d105da7e35f0f6328082b64897c75b9a69f4b248966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8988d20139a0a1a30b123d105da7e35f0f6328082b64897c75b9a69f4b248966->enter($__internal_8988d20139a0a1a30b123d105da7e35f0f6328082b64897c75b9a69f4b248966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b6267e2fc4604b7439a61d5c3c07ede5243fff61854ef7cd84abdfa027995b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6267e2fc4604b7439a61d5c3c07ede5243fff61854ef7cd84abdfa027995b51->enter($__internal_b6267e2fc4604b7439a61d5c3c07ede5243fff61854ef7cd84abdfa027995b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8988d20139a0a1a30b123d105da7e35f0f6328082b64897c75b9a69f4b248966->leave($__internal_8988d20139a0a1a30b123d105da7e35f0f6328082b64897c75b9a69f4b248966_prof);

        
        $__internal_b6267e2fc4604b7439a61d5c3c07ede5243fff61854ef7cd84abdfa027995b51->leave($__internal_b6267e2fc4604b7439a61d5c3c07ede5243fff61854ef7cd84abdfa027995b51_prof);

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
