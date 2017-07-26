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
        $__internal_32034c43b7c33fce7a2679a2e409f74f98b6e71c94cf81a86f33b1b0c0d22317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32034c43b7c33fce7a2679a2e409f74f98b6e71c94cf81a86f33b1b0c0d22317->enter($__internal_32034c43b7c33fce7a2679a2e409f74f98b6e71c94cf81a86f33b1b0c0d22317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8bef6cdf5cfca064efbb6e6e4fcc64a0d8d2a9beb8bf8b5f2e6cd94035bf357d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bef6cdf5cfca064efbb6e6e4fcc64a0d8d2a9beb8bf8b5f2e6cd94035bf357d->enter($__internal_8bef6cdf5cfca064efbb6e6e4fcc64a0d8d2a9beb8bf8b5f2e6cd94035bf357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_32034c43b7c33fce7a2679a2e409f74f98b6e71c94cf81a86f33b1b0c0d22317->leave($__internal_32034c43b7c33fce7a2679a2e409f74f98b6e71c94cf81a86f33b1b0c0d22317_prof);

        
        $__internal_8bef6cdf5cfca064efbb6e6e4fcc64a0d8d2a9beb8bf8b5f2e6cd94035bf357d->leave($__internal_8bef6cdf5cfca064efbb6e6e4fcc64a0d8d2a9beb8bf8b5f2e6cd94035bf357d_prof);

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
